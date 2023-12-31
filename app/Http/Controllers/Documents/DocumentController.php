<?php

namespace App\Http\Controllers\Documents;

use Illuminate\Http\Request;
use App\Models\Documents\Document;
use App\Models\Territories\Country;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Documents\DocumentRequest;

class DocumentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $document = Document::orderBy('name', 'DESC')->with('countries')->get();
            return DataTables::of($document)
                ->addIndexColumn()
                ->addColumn('created_at', function ($document) {
                    return $document->present()->created_at();
                })
                ->addColumn('country', function ($document) {
                    return $document->present()->flag();
                })
                ->addColumn('action', function ($document) {
                    return $document->present()->actionButton();
                })
                ->addColumn('status', function ($document) {
                    return $document->present()->status();
                })
                ->rawColumns(['action', 'country', 'status'])
                ->make(true);
        }

        return view('auth.documents.documents.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $document = new Document();
        $countries  = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.documents.documents.create', [
            'document'  => $document,
            'countries' => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocumentRequest $request)
    {
        $document = Document::create(
            $request->except('country_id')
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
        );

        $document->countries()->attach($request->country_id);

        return redirect()->back()->with('success', __('Data created successfuly'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        return view('auth.documents.documents.show', [
            'document'   => $document
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        $countries = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.documents.documents.edit', [
            'document'  => $document,
            'countries' => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DocumentRequest $request, Document $document)
    {
        $document->update(
            $request->except('country_id')
                + ['slug' => generateUrl($request->name)]
        );

        $document->countries()->sync($request->country_id);

        return redirect()->route('document.edit', $document)->with('success', __('Data updated successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->delete();
        $document->countries()->detach();
        return redirect()->back()->with('success', __('Data deleted successfuly'));
    }
}
