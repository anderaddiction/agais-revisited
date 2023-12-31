<?php

namespace App\Http\Controllers\Codes;

use Illuminate\Http\Request;
use App\Models\Codes\PhoneCode;
use App\Models\Territories\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\Codes\PhoneCodeRequest;
use Yajra\DataTables\Facades\DataTables;

class PhoneCodeController extends Controller
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
            $phone = PhoneCode::orderBy('phone_code', 'DESC')->with('countries')->get();
            return DataTables::of($phone)
                ->addIndexColumn()
                ->addColumn('created_at', function ($phone) {
                    return $phone->present()->created_at();
                })
                ->addColumn('country', function ($phone) {
                    return $phone->present()->flag();
                })
                ->addColumn('status', function ($phone) {
                    return $phone->present()->status();
                })
                ->addColumn('action', function ($phone) {
                    return $phone->present()->actionButton();
                })
                ->rawColumns(['action', 'country', 'status'])
                ->make(true);
        }

        return view('auth.codes.telephones.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $phone_code = new PhoneCode();
        $countries  = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.codes.telephones.create', [
            'phone_code' => $phone_code,
            'countries'  => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PhoneCodeRequest $request)
    {
        $phone = PhoneCode::create(
            $request->except('country_id')
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->phone_code)]
        );

        $phone->countries()->attach($request->country_id);

        return redirect()->back()->with('success', __('Data created successfuly'));
    }

    /**
     * Display the specified resource.
     */
    public function show(PhoneCode $phone_code)
    {
        return view('auth.codes.telephones.show', [
            'phone_code'   => $phone_code
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhoneCode $phone_code)
    {
        $countries = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.codes.telephones.edit', [
            'phone_code' => $phone_code,
            'countries'  => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PhoneCode $phone_code)
    {
        $phone_code->update(
            $request->except('country_id')
                + ['slug' => generateUrl($request->phone_code)]
        );

        $phone_code->countries()->sync($request->country_id);

        return redirect()->route('phone.edit', $phone_code)->with('success', __('Data updated successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhoneCode $phone_code)
    {
        $phone_code->delete();
        $phone_code->countries()->detach();
        return redirect()->back()->with('success', __('Data deleted successfuly'));
    }
}
