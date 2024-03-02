<?php

namespace App\Http\Controllers\Documents;

use Illuminate\Http\Request;
use App\Models\Documents\Document;
use Illuminate\Support\Facades\DB;
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

        return response()->json(
            [
                'success' => __('Data stored successfuly')
            ],
            200
        );
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

        return response()->json(
            [
                'success' => __('Data updated successfuly')
            ],
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($document)
    {
        $ids = explode(",", $document);
        Document::destroy($ids);
        DB::table('assigned_documents')->whereIn('document_id', $ids)->delete();
        return [
            'success' => __('Data deleted successfuly')
        ];
    }

    public function trashed(Request $request)
    {
        if ($request->ajax()) {
            $document = Document::onlyTrashed()
                ->orderBy('name', 'DESC')
                ->with('countries')
                ->get();
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

        return view('auth.documents.documents.trashed');
    }

    public function restore($document)
    {
        $ids = explode(",", $document);
        $document_ids = array_map('intval', $ids);
        Document::whereIn('id', $document_ids)->withTrashed()->restore();
        return [
            'success' => __('Data restored successfuly')
        ];
    }
}
