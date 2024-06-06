<?php

namespace App\Http\Controllers\Entities;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Territories\Country;
use App\Http\Controllers\Controller;
use App\Models\Entities\PaymentGateway;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Entities\PaymentGatewayRequest;

class PaymentGatewayController extends Controller
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
            $payment_gateway = PaymentGateway::orderBy('name', 'ASC')->with('countries')->get();
            return DataTables::of($payment_gateway)
                ->addIndexColumn()
                ->addColumn('created_at', function ($payment_gateway) {
                    return $payment_gateway->present()->created_at();
                })
                ->addColumn('platform', function ($payment_gateway) {
                    return $payment_gateway->present()->platform();
                })
                ->addColumn('country', function ($payment_gateway) {
                    return $payment_gateway->present()->flag();
                })
                ->addColumn('status', function ($payment_gateway) {
                    return $payment_gateway->present()->status();
                })
                ->addColumn('action', function ($payment_gateway) {
                    return $payment_gateway->present()->actionButton();
                })
                ->rawColumns(['action', 'country', 'platform', 'status'])
                ->make(true);
        }

        return view('auth.entities.payment_gateway.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payment_gateway = new PaymentGateway();
        $countries = Country::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('auth.entities.payment_gateway.create', [
            'payment_gateway' => $payment_gateway,
            'countries' => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentGatewayRequest $request)
    {
        $payment_gateway = PaymentGateway::create(
            $request->except(['country_id', 'slug', 'note'])
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
                + ['note' => $request->note ? $request->note : 'N/A']
        );

        $payment_gateway->countries()->attach($request->country_id);

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
    public function show(PaymentGateway $payment_gateway)
    {
        return view('auth.entities.payment_gateway.show', [
            'payment_gateway' => $payment_gateway
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentGateway $payment_gateway)
    {
        $countries  = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.entities.payment_gateway.edit', [
            'payment_gateway' => $payment_gateway,
            'countries'       => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PaymentGatewayRequest $request, PaymentGateway $payment_gateway)
    {
        $payment_gateway->update(
            $request->except(['country_id', 'note'])
                + ['slug' => generateUrl($request->name)]
                + ['note' => $request->note ? $request->note : 'N/A']
        );

        $payment_gateway->countries()->sync($request->country_id);

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
    public function destroy($payment_gateway)
    {
        $ids = explode(",", $payment_gateway);
        PaymentGateway::destroy($ids);
        DB::table('assigned_payment_gateways')->whereIn('payment_gateway_id', $ids)->delete();

        return [
            'success' => __('Data deleted successfuly')
        ];
    }

    public function trashed(Request $request)
    {
        if ($request->ajax()) {
            $payment_gateway = PaymentGateway::onlyTrashed()->orderBy('name', 'DESC')->with('countries')->get();
            return DataTables::of($payment_gateway)
                ->addIndexColumn()
                ->addColumn('created_at', function ($payment_gateway) {
                    return $payment_gateway->present()->created_at();
                })
                ->addColumn('platform', function ($payment_gateway) {
                    return $payment_gateway->present()->platform();
                })
                ->addColumn('country', function ($payment_gateway) {
                    return $payment_gateway->present()->flag();
                })
                ->addColumn('status', function ($payment_gateway) {
                    return $payment_gateway->present()->status();
                })
                ->addColumn('action', function ($payment_gateway) {
                    return $payment_gateway->present()->actionButton();
                })
                ->rawColumns(['action', 'country', 'platform', 'status'])
                ->make(true);
        }

        return view('auth.entities.payment_gateway.trashed');
    }

    public function restore($payment_gateway)
    {
        $ids = explode(",", $payment_gateway);
        $payment_gateway_ids = array_map('intval', $ids);
        PaymentGateway::whereIn('id', $payment_gateway_ids)->withTrashed()->restore();
        return [
            'success' => __('Data restored successfuly')
        ];
    }

    public function getData($id)
    {
        $payment_gateway = PaymentGateway::with('countries')
            ->where('id', $id)
            ->get();
        return DataTables::of($payment_gateway)
            ->addIndexColumn()
            ->addColumn('created_at', function ($payment_gateway) {
                return $payment_gateway->present()->created_at();
            })
            ->addColumn('platform', function ($payment_gateway) {
                return $payment_gateway->present()->platform();
            })
            ->addColumn('country', function ($payment_gateway) {
                return $payment_gateway->present()->flag();
            })
            ->addColumn('status', function ($payment_gateway) {
                return $payment_gateway->present()->status();
            })
            ->addColumn('action', function ($payment_gateway) {
                return $payment_gateway->present()->actionButton();
            })
            ->rawColumns(['action', 'country', 'platform', 'status'])
            ->make(true);
    }
}
