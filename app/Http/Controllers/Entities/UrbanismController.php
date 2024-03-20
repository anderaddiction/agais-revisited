<?php

namespace App\Http\Controllers\Entities;

use Illuminate\Http\Request;
use App\Models\Territories\City;
use Yajra\DataTables\DataTables;
use App\Models\Entities\Urbanism;
use App\Models\Territories\State;
use App\Models\Territories\Parish;
use Illuminate\Support\Facades\DB;
use App\Models\Categories\Category;
use App\Models\Territories\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\Entities\UrbanismRequest;
use App\Models\Territories\Municipality;

class UrbanismController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $urbanism = Urbanism::orderBy('name', 'DESC')->with(
                [
                    'country',
                    'state',
                    'category'
                ]
            )->get();
            return DataTables::of($urbanism)
                ->addIndexColumn()
                ->addColumn('created_at', function ($urbanism) {
                    return $urbanism->present()->created_at();
                })
                ->addColumn('urbanism_type', function ($urbanism) {
                    return $urbanism->present()->urbanismType();
                })
                ->addColumn('country', function ($urbanism) {
                    return $urbanism->present()->flag();
                })
                ->addColumn('state', function ($urbanism) {
                    return $urbanism->present()->state();
                })
                ->addColumn('status', function ($urbanism) {
                    return $urbanism->present()->status();
                })
                ->addColumn('action', function ($urbanism) {
                    return $urbanism->present()->actionButton();
                })
                ->rawColumns(['action', 'country', 'category', 'state', 'type', 'status'])
                ->make(true);
        }

        return view('auth.entities.urbanism.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $urbanism       = new Urbanism();
        $countries      = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        $states         = State::orderBy('name', 'ASC')->pluck('name', 'id');
        $municipalities = Municipality::orderBy('name', 'ASC')->pluck('name', 'id');
        $parishes       = Parish::orderBy('name', 'ASC')->pluck('name', 'id');
        $cities         = City::orderBy('name', 'ASC')->pluck('name', 'id');
        $categories     = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.entities.urbanism.create', [
            'urbanism'       => $urbanism,
            'countries'      => $countries,
            'states'         => $states,
            'municipalities' => $municipalities,
            'parishes'       => $parishes,
            'cities'         => $cities,
            'categories'     => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UrbanismRequest $request)
    {
        Urbanism::create(
            $request->validated()
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
        );

        return response()->json(['success' => 'Data stored successfuly'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Urbanism $urbanism)
    {
        return view('auth.entities.urbanism.show', [
            'urbanism'       => $urbanism
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Urbanism $urbanism)
    {
        $countries      = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        $states         = State::orderBy('name', 'ASC')->pluck('name', 'id');
        $municipalities = Municipality::orderBy('name', 'ASC')->pluck('name', 'id');
        $parishes       = Parish::orderBy('name', 'ASC')->pluck('name', 'id');
        $cities         = City::orderBy('name', 'ASC')->pluck('name', 'id');
        $categories     = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.entities.urbanism.edit', [
            'urbanism'       => $urbanism,
            'countries'      => $countries,
            'states'         => $states,
            'municipalities' => $municipalities,
            'parishes'       => $parishes,
            'cities'         => $cities,
            'categories'     => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UrbanismRequest $request, Urbanism $urbanism)
    {
        $urbanism->update(
            $request->validated()
                + ['slug' => generateUrl($request->name)]
        );

        return response()->json(['success' => 'Data stored successfuly'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($urbanism)
    {
        $ids = explode(",", $urbanism);
        Urbanism::destroy($ids);

        return [
            'success' => __('Data deleted successfuly')
        ];
    }

    public function trashed(Request $request)
    {
        if ($request->ajax()) {
            $urbanism = Urbanism::onlyTrashed()->orderBy('name', 'DESC')->with(
                [
                    'country',
                    'state',
                    'municipality',
                    'parish',
                    'city',
                    'category'
                ]
            )->get();
            return DataTables::of($urbanism)
                ->addIndexColumn()
                ->addColumn('created_at', function ($urbanism) {
                    return $urbanism->present()->created_at();
                })
                ->addColumn('urbanism_type', function ($urbanism) {
                    return $urbanism->present()->urbanismType();
                })
                ->addColumn('country', function ($urbanism) {
                    return $urbanism->present()->flag();
                })
                ->addColumn('state', function ($urbanism) {
                    return $urbanism->present()->state();
                })
                ->addColumn('status', function ($urbanism) {
                    return $urbanism->present()->status();
                })
                ->addColumn('action', function ($urbanism) {
                    return $urbanism->present()->actionButton();
                })
                ->rawColumns(['action', 'country', 'category', 'state', 'type', 'status'])
                ->make(true);
        }

        return view('auth.entities.urbanism.trashed');
    }

    public function restore($urbanism)
    {
        $ids = explode(",", $urbanism);
        $urbanism_ids = array_map('intval', $ids);
        Urbanism::whereIn('id', $urbanism_ids)->withTrashed()->restore();
        return [
            'success' => __('Data restored successfuly')
        ];
    }
}
