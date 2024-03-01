<?php

namespace App\Http\Controllers\Territories;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Territories\Country;
use App\Http\Controllers\Controller;
use App\Models\Territories\Continent;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\Territories\CountryDataTable;
use App\Http\Requests\Territories\CountryRequest;
use App\Models\Users\Clients\Client;

class CountryController extends Controller
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
        $country    = new Country();
        $continents  = Continent::orderBy('name', 'ASC')->pluck('name', 'id');
        if ($request->ajax()) {
            $country = Country::orderBy('countries.name', 'ASC')
                ->with('continent')
                ->get();
            return DataTables::of($country)
                ->addIndexColumn()
                ->addColumn('created_at', function ($country) {
                    return $country->present()->created_at();
                })
                ->addColumn('flag', function ($country) {
                    return $country->present()->flag();
                })
                ->addColumn('continent', function ($country) {
                    return $country->present()->continent();
                })
                ->addColumn('action', function ($country) {
                    return $country->present()->actionButton();
                })
                ->rawColumns(['action', 'flag', 'continent'])
                ->make(true);
        }

        return view('auth.territories.countries.index', [
            'country'   => $country,
            'continents' => $continents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $country    = new Country();
        $continents  = Continent::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.territories.countries.create', [
            'country'   => $country,
            'continents' => $continents
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CountryRequest $request)
    {
        Country::create(
            $request->validated()
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
                + ['flag' => flagGenerator($request->iso2, $request->name)]
                + ['iso2' => upperCase($request->iso2)]
                + ['iso3' => upperCase($request->iso3)]
        );

        return response()->json(
            [
                'success' => 'Data created successfuly'
            ],
            200
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return view('auth.territories.countries.show', [
            'country'   => $country
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        $continents  = Continent::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.territories.countries.edit', [
            'country'   => $country,
            'continents' => $continents
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CountryRequest $request, Country $country)
    {
        $country->update(
            $request->validated()
                + ['slug' => generateUrl($request->name)]
                + ['flag' => flagGenerator($request->iso2, $request->name)]
                + ['iso2' => upperCase($request->iso2)]
                + ['iso3' => upperCase($request->iso3)]
        );

        return response()->json(
            [
                'success' => __('Data updated successfuly')
            ],
            200
        );

        //return redirect()->route('country.edit', $country)->with('success', __('Data updated successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($country)
    {
        $ids = explode(",", $country);
        Country::destroy($ids);
        return [
            'success' => __('Data deleted successfuly')
        ];
    }

    public function trashed(Request $request)
    {
        if ($request->ajax()) {
            $country = Country::orderBy('countries.name', 'ASC')
                ->with('continent')
                ->onlyTrashed()
                ->get();
            return DataTables::of($country)
                ->addIndexColumn()
                ->addColumn('created_at', function ($country) {
                    return $country->present()->created_at();
                })
                ->addColumn('flag', function ($country) {
                    return $country->present()->flag();
                })
                ->addColumn('continent', function ($country) {
                    return $country->present()->continent();
                })
                ->addColumn('action', function ($country) {
                    return $country->present()->actionButton();
                })
                ->rawColumns(['action', 'flag', 'continent'])
                ->make(true);
        }

        return view('auth.territories.countries.trashed');
    }

    public function restore($country)
    {
        $ids = explode(",", $country);
        $country_ids = array_map('intval', $ids);
        Country::whereIn('id', $country_ids)->withTrashed()->restore();
        return [
            'success' => __('Data restored successfuly')
        ];
    }
}
