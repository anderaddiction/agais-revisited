<?php

namespace App\Http\Controllers\Territories;

use Illuminate\Http\Request;
use App\Models\Territories\State;
use App\Http\Controllers\Controller;
use App\Models\Territories\Municipality;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\Territories\MunicipalityDataTable;
use App\Http\Requests\Territories\MunicipalityRequest;

class MunicipalityController extends Controller
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
            $municipality = Municipality::orderBy('name', 'DESC')->with('state')->get();
            return DataTables::of($municipality)
                ->addIndexColumn()
                ->addColumn('created_at', function ($municipality) {
                    return $municipality->present()->created_at();
                })
                ->addColumn('action', function ($municipality) {
                    return $municipality->present()->actionButton();
                })
                ->addColumn('state', function ($municipality) {
                    return $municipality->present()->state();
                })
                ->addColumn('country', function ($municipality) {
                    return $municipality->present()->flag();
                })
                ->rawColumns(['action', 'flag', 'country', 'state'])
                ->make(true);
        }

        return view('auth.territories.municipalities.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $municipality   = new Municipality();
        $states         = State::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.territories.municipalities.create', [
            'municipality'  => $municipality,
            'states'        => $states
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MunicipalityRequest $request)
    {
        Municipality::create(
            $request->validated()
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
        );

        return redirect()->back()->with('success', __('Data created successfuly'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Municipality $municipality)
    {
        return view('auth.territories.municipalities.show', [
            'municipality'   => $municipality
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Municipality $municipality)
    {
        $states  = State::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.territories.municipalities.edit', [
            'states'        => $states,
            'municipality'  => $municipality
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MunicipalityRequest $request, Municipality $municipality)
    {
        $municipality->update(
            $request->validated()
                + ['slug' => generateUrl($request->name)]
        );

        return redirect()->route('municipality.edit', $municipality)->with('success', __('Data updated successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($municipality)
    {
        $ids = explode(",", $municipality);
        Municipality::destroy($ids);
        return [
            'success' => __('Data deleted successfuly')
        ];
    }
}
