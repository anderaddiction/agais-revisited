<?php

namespace App\Http\Controllers\Taxes;

use App\Models\Tax\Tax;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Territories\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\Taxes\TaxRequest;
use Yajra\DataTables\Facades\DataTables;

class TaxController extends Controller
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
        $tax    = new Tax();
        $countries  = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        if ($request->ajax()) {
            $tax = Tax::orderBy('percent', 'ASC')
                ->with('country')
                ->get();
            return DataTables::of($tax)
                ->addIndexColumn()
                ->addColumn('created_at', function ($tax) {
                    return $tax->present()->created_at();
                })
                ->addColumn('flag', function ($tax) {
                    return $tax->present()->flag();
                })
                ->addColumn('status', function ($tax) {
                    return $tax->present()->status();
                })
                ->addColumn('percent', function ($tax) {
                    return $tax->present()->percent();
                })
                ->addColumn('action', function ($tax) {
                    return $tax->present()->actionButton();
                })
                ->rawColumns(['action', 'flag', 'status', 'percent'])
                ->make(true);
        }

        return view('auth.taxes.index', [
            'tax'   => $tax,
            'countries' => $countries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tax = new Tax();
        $countries = Country::orderby('name', 'ASC')->pluck('name', 'id');
        return view('auth.taxes.create', [
            'tax' => $tax,
            'countries' => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaxRequest $request)
    {
        Tax::create(
            $request->except('acronym', 'note')
                + ['code' => uniqueCode()]
                + ['acronym' => Str::upper($request->acronym)]
                + ['note' => $request->note ? $request->note : 'N/A']
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
    public function show(Tax $tax)
    {
        return view('auth.taxes.show', [
            'tax' => $tax
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tax $tax)
    {
        $countries = Country::orderby('name', 'ASC')->pluck('name', 'id');
        return view('auth.taxes.edit', [
            'tax' => $tax,
            'countries' => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaxRequest $request, Tax $tax)
    {
        $tax->update(
            $request->except(['acronym', 'note'])
                + ['acronym' => Str::upper($request->acronym)]
                + ['note'    => $request->note ? $request->note : 'N/A']
        );

        return response()->json(
            [
                'success' => 'Data updated successfuly'
            ],
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($tax)
    {
        $ids = explode(",", $tax);
        Tax::destroy($ids);

        return [
            'success' => __('Data deleted successfuly')
        ];
    }

    public function trashed(Request $request)
    {
        if ($request->ajax()) {
            $tax = Tax::onlyTrashed()
                ->orderBy('percent', 'DESC')
                ->with('country')
                ->get();
            return DataTables::of($tax)
                ->addIndexColumn()
                ->addColumn('created_at', function ($tax) {
                    return $tax->present()->created_at();
                })
                ->addColumn('flag', function ($tax) {
                    return $tax->present()->flag();
                })
                ->addColumn('status', function ($tax) {
                    return $tax->present()->status();
                })
                ->addColumn('percent', function ($tax) {
                    return $tax->present()->percent();
                })
                ->addColumn('action', function ($tax) {
                    return $tax->present()->actionButton();
                })
                ->rawColumns(['action', 'flag', 'status', 'percent'])
                ->make(true);
        }

        return view('auth.taxes.trashed');
    }

    public function restore($tax)
    {
        $ids = explode(",", $tax);
        $tax_ids = array_map('intval', $ids);
        Tax::whereIn('id', $tax_ids)->withTrashed()->restore();
        return [
            'success' => __('Data restored successfuly')
        ];
    }

    public function getData($id)
    {
        $tax = Tax::with('country')
            ->where('id', $id)
            ->get();
        return DataTables::of($tax)
            ->addIndexColumn()
            ->addColumn('created_at', function ($tax) {
                return $tax->present()->created_at();
            })
            ->addColumn('flag', function ($tax) {
                return $tax->present()->flag();
            })
            ->addColumn('status', function ($tax) {
                return $tax->present()->status();
            })
            ->addColumn('percent', function ($tax) {
                return $tax->present()->percent();
            })
            ->addColumn('action', function ($tax) {
                return $tax->present()->actionButton();
            })
            ->rawColumns(['action', 'flag', 'status', 'percent'])
            ->make(true);
    }
}
