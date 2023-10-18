<?php

namespace App\Http\Controllers\Entities;

use Illuminate\Http\Request;
use App\Models\Entities\Bank;
use App\Models\Territories\Country;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\Entities\BankDataTable;
use App\Http\Requests\Entities\BankRequest;

class BankController extends Controller
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
            $bank = Bank::orderBy('name', 'DESC')->with('countries')->get();
            return DataTables::of($bank)
                ->addIndexColumn()
                ->addColumn('created_at', function ($bank) {
                    return $bank->present()->created_at();
                })
                ->addColumn('capital_type', function ($bank) {
                    return $bank->present()->capitalType();
                })
                ->addColumn('bank_type', function ($bank) {
                    return $bank->present()->bankType();
                })
                ->addColumn('country', function ($bank) {
                    return $bank->present()->flag();
                })
                ->addColumn('status', function ($bank) {
                    return $bank->present()->status();
                })
                ->addColumn('action', function ($bank) {
                    return $bank->present()->actionButton();
                })
                ->rawColumns(['action', 'country', 'capital_type', 'bank_type', 'status'])
                ->make(true);
        }

        return view('auth.entities.banks.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bank     = new Bank();
        $countries   = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.entities.banks.create', [
            'bank'        => $bank,
            'countries'  => $countries

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BankRequest $request)
    {
        $bank = Bank::create(
            $request->except('country_id')
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
        );

        $bank->countries()->attach($request->country_id);

        return redirect()->back()->with('success', __('Data created successfuly'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Bank $bank)
    {
        return view('auth.entities.banks.show', [
            'bank'   => $bank
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bank $bank)
    {
        $countries  = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.entities.banks.edit', [
            'bank'       => $bank,
            'countries'  => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BankRequest $request, Bank $bank)
    {
        $bank->update(
            $request->except('country_id')
                + ['slug' => generateUrl($request->name)]
        );

        $bank->countries()->sync($request->country_id);

        return redirect()->route('bank.edit', $bank)->with('success', __('Data updated successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bank $bank)
    {
        $bank->delete();
        $bank->countries()->detach();
        return redirect()->back()->with('success', __('Data deleted successfuly'));
    }
}
