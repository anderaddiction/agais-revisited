<?php

namespace App\Http\Controllers\Territories;

use Illuminate\Http\Request;
use App\Models\Territories\City;
use App\Models\Territories\State;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\Territories\CityDataTable;
use App\Http\Requests\Territories\CityRequest;

class CityController extends Controller
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
            $city = City::orderBy('name', 'DESC')->with('state')->get();
            return DataTables::of($city)
                ->addIndexColumn()
                ->addColumn('created_at', function ($city) {
                    return $city->present()->created_at();
                })
                ->addColumn('state', function ($city) {
                    return $city->present()->state();
                })
                ->addColumn('country', function ($city) {
                    return $city->present()->flag();
                })
                ->addColumn('action', function ($city) {
                    return $city->present()->actionButton();
                })
                ->rawColumns(['action', 'country', 'state'])
                ->make(true);
        }

        return view('auth.territories.cities.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $city     = new City();
        $states   = State::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.territories.cities.create', [
            'city'        => $city,
            'states'  => $states

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CityRequest $request)
    {
        City::create(
            $request->validated()
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
        );

        return redirect()->back()->with('success', __('Data created successfuly'));
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        return view('auth.territories.cities.show', [
            'city'   => $city
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        $states  = State::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.territories.cities.edit', [
            'city'          => $city,
            'states'  => $states
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CityRequest $request, City $city)
    {
        $city->update(
            $request->validated()
                + ['slug' => generateUrl($request->name)]
        );

        return redirect()->route('city.edit', $city)->with('success', __('Data updated successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($city)
    {
        $ids = explode(",", $city);
        City::destroy($ids);
        return [
            'success' => __('Data deleted successfuly')
        ];
    }
}
