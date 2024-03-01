<?php

namespace App\Http\Controllers\Territories;

use Illuminate\Http\Request;
use App\Models\Territories\Parish;
use App\Http\Controllers\Controller;
use App\Models\Territories\Municipality;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\Territories\ParishDataTable;
use App\Http\Requests\Territories\ParishRequest;

class ParishController extends Controller
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
            $parish = Parish::orderBy('name', 'DESC')->with('municipality')->get();
            return DataTables::of($parish)
                ->addIndexColumn()
                ->addColumn('created_at', function ($parish) {
                    return $parish->present()->created_at();
                })
                ->addColumn('action', function ($parish) {
                    return $parish->present()->actionButton();
                })
                ->addColumn('state', function ($parish) {
                    return $parish->present()->state();
                })
                ->addColumn('municipality', function ($parish) {
                    return $parish->present()->municipality();
                })
                ->addColumn('country', function ($parish) {
                    return $parish->present()->flag();
                })
                ->rawColumns(['action', 'municipality', 'state', 'country'])
                ->make(true);
        }

        return view('auth.territories.parishes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parish         = new Parish();
        $municipalities   = Municipality::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.territories.parishes.create', [
            'parish'        => $parish,
            'municipalities'  => $municipalities

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParishRequest $request)
    {
        Parish::create(
            $request->validated()
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
        );

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
    public function show(Parish $parish)
    {
        return view('auth.territories.parishes.show', [
            'parish'   => $parish
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parish $parish)
    {
        $municipalities  = Municipality::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.territories.parishes.edit', [
            'parish'          => $parish,
            'municipalities'  => $municipalities
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParishRequest $request, Parish $parish)
    {
        $parish->update(
            $request->validated()
                + ['slug' => generateUrl($request->name)]
        );

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
    public function destroy($parish)
    {
        $ids = explode(",", $parish);
        Parish::destroy($ids);
        return [
            'success' => __('Data deleted successfuly')
        ];
    }

    public function trashed(Request $request)
    {
        if ($request->ajax()) {
            $parish = Parish::onlyTrashed()
                ->orderBy('name', 'DESC')
                ->with('municipality')
                ->get();
            return DataTables::of($parish)
                ->addIndexColumn()
                ->addColumn('created_at', function ($parish) {
                    return $parish->present()->created_at();
                })
                ->addColumn('action', function ($parish) {
                    return $parish->present()->actionButton();
                })
                ->addColumn('state', function ($parish) {
                    return $parish->present()->state();
                })
                ->addColumn('municipality', function ($parish) {
                    return $parish->present()->municipality();
                })
                ->addColumn('country', function ($parish) {
                    return $parish->present()->flag();
                })
                ->rawColumns(['action', 'municipality', 'state', 'country'])
                ->make(true);
        }

        return view('auth.territories.parishes.trashed');
    }

    public function restore($parish)
    {
        $ids = explode(",", $parish);
        $parish_ids = array_map('intval', $ids);
        Parish::whereIn('id', $parish_ids)->withTrashed()->restore();
        return [
            'success' => __('Data restored successfuly')
        ];
    }
}
