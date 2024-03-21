<?php

namespace App\Http\Controllers\Imports;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\Territories\CityImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Territories\StateImport;
use App\Imports\Territories\ParishImport;
use App\Imports\Territories\CountryImport;
use App\Imports\Territories\ContinentImport;
use App\Imports\Territories\MunicipalityImport;

class ExcelImportController extends Controller
{
    public function continentExcelImport(Request $request)
    {
        Excel::import(new ContinentImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    public function countryExcelImport(Request $request)
    {
        Excel::import(new CountryImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    public function stateExcelImport(Request $request)
    {
        Excel::import(new StateImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    public function municipalityExcelImport(Request $request)
    {
        Excel::import(new MunicipalityImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    public function parishExcelImport(Request $request)
    {
        Excel::import(new ParishImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }

    public function cityExcelImport(Request $request)
    {
        Excel::import(new CityImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }
}
