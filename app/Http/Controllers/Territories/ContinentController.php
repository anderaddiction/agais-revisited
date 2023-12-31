<?php

namespace App\Http\Controllers\Territories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Territories\Continent;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\Territories\ContinentDataTable;
use App\Http\Requests\Territories\ContinentRequest;

class ContinentController extends Controller
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

    public function __construct()
    {
        return $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $continent = Continent::orderBy('name', 'DESC')->get();
            return DataTables::of($continent)
                ->addIndexColumn()
                ->addColumn('created_at', function ($continent) {
                    return $continent->present()->created_at();
                })
                ->addColumn('action', function ($continent) {
                    return $continent->present()->actionButton();
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('auth.territories.continents.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $continent = new Continent();
        return view('auth.territories.continents.create', [
            'continent' => $continent
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContinentRequest $request)
    {
        Continent::create(
            $request->validated()
                + ['code' => getRandomString()]
                + ['slug' => generateUrl($request->name)]
        );

        return redirect()->back()->with('success', __('Data stored successfuly'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Continent $continent)
    {
        return view('auth.territories.continents.show', [
            'continent' => $continent
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Continent $continent)
    {
        return view('auth.territories.continents.edit', [
            'continent' => $continent
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContinentRequest $request, Continent $continent)
    {
        $continent->update(
            $request->validated()
                + ['slug' => generateUrl($request->name)]
        );

        return redirect()->route('continent.edit', $continent)->with('success', __('Data updated successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Continent $continent)
    {
        $continent->delete();
        return redirect()->back()->with('success', __('Data deleted successfuly'));
    }
}
