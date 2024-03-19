<?php

namespace App\Http\Controllers\Imports;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Territories\CountryRequest;
use App\Imports\Imports\Territories\CountriesImport;


class EaxcelImportController extends Controller
{
    public function import(Request $request)
    {
        Excel::import(new CountriesImport, $request->file('file')->store('temp'));

        return response()->json([
            'success' => __('Data import successfully')
        ], 200);
    }
}
