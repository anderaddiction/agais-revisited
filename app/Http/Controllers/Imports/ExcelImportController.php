<?php

namespace App\Http\Controllers\Imports;

use Illuminate\Http\Request;
use App\Models\Codes\PhoneCode;
use App\Imports\Taxes\TaxImport;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Codes\PhoneCodeImport;
use App\Imports\Territories\CityImport;
use App\Imports\Territories\StateImport;
use App\Imports\Territories\ParishImport;
use App\Imports\Categories\CategoryImport;
use App\Imports\Documents\DocumentImport;
use App\Imports\Entities\BankImport;
use App\Imports\Entities\CurrencyImport;
use App\Imports\Entities\PaymentGatewayImport;
use App\Imports\Permission\PermissionImport;
use App\Imports\Services\ServiceImport;
use App\Imports\Territories\CountryImport;
use App\Imports\Territories\ContinentImport;
use App\Imports\Territories\MunicipalityImport;
use App\Imports\Users\RoleImport;

class ExcelImportController extends Controller
{
    // Bank Import
    public function bankExcelImport(Request $request)
    {
        Excel::import(new BankImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    // Category Import
    public function categoryExcelImport(Request $request)
    {
        Excel::import(new CategoryImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    // Currency Import
    public function currencyExcelImport(Request $request)
    {
        Excel::import(new CurrencyImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    // Document Import
    public function documentExcelImport(Request $request)
    {
        Excel::import(new DocumentImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    //Phone Codes Import
    public function phoneCodeExcelImport(Request $request, Collection $rows)
    {
        $sepultura = Excel::toCollection(new PhoneCodeImport(), $request->file('file'));

        // Creo un arreglo de paises para guardar en la tabla pivote de phone_assigned
        $countries = array();

        foreach ($sepultura as $key => $value) {
            foreach ($value as $key => $value2) {
                $countries[] = $value[0]['country_id'];
            }
        }

        Excel::import(new PhoneCodeImport, $request->file('file'));

        $phone_code = PhoneCode::select('id')->latest()->first();
        DB::table('assigned_phones')->insert([
            'country_id'    => $countries[0],
            'phone_code_id' => $phone_code->id
        ]);

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    // Continent Import
    public function continentExcelImport(Request $request)
    {
        Excel::import(new ContinentImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    // Country Import
    public function countryExcelImport(Request $request)
    {
        Excel::import(new CountryImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    // State Import
    public function stateExcelImport(Request $request)
    {
        Excel::import(new StateImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    // Municipality Import
    public function municipalityExcelImport(Request $request)
    {
        Excel::import(new MunicipalityImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    // Parish Import
    public function parishExcelImport(Request $request)
    {
        Excel::import(new ParishImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    // City Import
    public function cityExcelImport(Request $request)
    {

        Excel::import(new CityImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    // Permission Import
    public function permissionExcelImport(Request $request)
    {
        Excel::import(new PermissionImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    // Role Import
    public function roleExcelImport(Request $request)
    {
        Excel::import(new RoleImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    // Service Import
    public function serviceExcelImport(Request $request)
    {
        Excel::import(new ServiceImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    // Tax Import
    public function taxExcelImport(Request $request)
    {
        Excel::import(new TaxImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    // Payment Gateway Import
    public function payamentGatewayExcelImport(Request $request)
    {
        Excel::import(new PaymentGatewayImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }
}
