<?php

namespace App\Http\Controllers\Entities;

use Illuminate\Http\Request;
use App\Models\Entities\Currency;
use Illuminate\Support\Facades\DB;
use App\Models\Territories\Country;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Entities\CurrencyRequest;

class CurrencyController extends Controller
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
            $currency = Currency::orderBy('name', 'DESC')->with('countries')->get();
            return DataTables::of($currency)
                ->addIndexColumn()
                ->addColumn('created_at', function ($currency) {
                    return $currency->present()->created_at();
                })
                ->addColumn('country', function ($currency) {
                    return $currency->present()->flag();
                })
                ->addColumn('status', function ($currency) {
                    return $currency->present()->status();
                })
                ->addColumn('action', function ($currency) {
                    return $currency->present()->actionButton();
                })
                ->rawColumns(['action', 'country', 'status'])
                ->make(true);
        }

        return view('auth.entities.currencies.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $currency    = new Currency();
        $countries   = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.entities.currencies.create', [
            'currency'   => $currency,
            'countries'  => $countries

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CurrencyRequest $request)
    {
        $currency = Currency::create(
            $request->except('country_id')
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
        );

        $currency->countries()->attach($request->country_id);

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
    public function show(Currency $currency)
    {
        return view('auth.entities.currencies.show', [
            'currency'   => $currency
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Currency $currency)
    {
        $countries  = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.entities.currencies.edit', [
            'currency'   => $currency,
            'countries'  => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CurrencyRequest $request, Currency $currency)
    {
        $currency->update(
            $request->except('country_id')
                + ['slug' => generateUrl($request->name)]
        );

        $currency->countries()->sync($request->country_id);

        return redirect()->route('currency.edit', $currency)->with('success', __('Data updated successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($currency)
    {
        $ids = explode(",", $currency);
        Currency::destroy($ids);
        DB::table('assigned_currencies')->whereIn('currency_id', $ids)->delete();
        return redirect()->back()->with('success', __('Data deleted successfuly'));
    }

    public function trashed(Request $request)
    {
        if ($request->ajax()) {
            $currency = Currency::onlyTrashed()
                ->orderBy('name', 'DESC')
                ->with('countries')
                ->get();
            return DataTables::of($currency)
                ->addIndexColumn()
                ->addColumn('created_at', function ($currency) {
                    return $currency->present()->created_at();
                })
                ->addColumn('country', function ($currency) {
                    return $currency->present()->flag();
                })
                ->addColumn('status', function ($currency) {
                    return $currency->present()->status();
                })
                ->addColumn('action', function ($currency) {
                    return $currency->present()->actionButton();
                })
                ->rawColumns(['action', 'country', 'status'])
                ->make(true);
        }

        return view('auth.entities.currencies.trashed');
    }

    public function restore($currency)
    {
        $ids = explode(",", $currency);
        $currency_ids = array_map('intval', $ids);
        Currency::whereIn('id', $currency_ids)->withTrashed()->restore();
        return [
            'success' => __('Data restored successfuly')
        ];
    }

    public function getData($id)
    {
        $currency = Currency::orderBy('name', 'DESC')->with('countries')->get();
        return DataTables::of($currency)
            ->addIndexColumn()
            ->addColumn('created_at', function ($currency) {
                return $currency->present()->created_at();
            })
            ->addColumn('country', function ($currency) {
                return $currency->present()->flag();
            })
            ->addColumn('status', function ($currency) {
                return $currency->present()->status();
            })
            ->addColumn('action', function ($currency) {
                return $currency->present()->actionButton();
            })
            ->rawColumns(['action', 'country', 'status'])
            ->make(true);
    }
}
