<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Territories\City;
use App\Models\Territories\State;
use App\Models\Territories\Parish;
use App\Models\Territories\Country;
use App\Models\Territories\Municipality;

class TerritoriesComboboxController extends Controller
{
    public function getCountries()
    {
        $countries = Country::get();

        return $countries;
    }

    public function getStates(Request $request)
    {
        if ($request->ajax()) {
            $states = State::where('country_id', $request->id)->get();

            if (count($states) > 0) {
                return response()->json($states, 200);
            }
        }
    }

    public function getMunicipalities(Request $request)
    {
        if ($request->ajax()) {
            $municipalities = Municipality::where('state_id', $request->id)->get();

            if (count($municipalities) > 0) {
                return response()->json($municipalities, 200);
            }
        }
    }

    public function getParishes(Request $request)
    {
        if ($request->ajax()) {
            $parishes = Parish::where('municipality_id', $request->id)->get();

            if (count($parishes) > 0) {
                return response()->json($parishes, 200);
            }
        }
    }

    public function getCities(Request $request)
    {
        if ($request->ajax()) {
            $cities = City::where('state_id', $request->id)->get();

            if (count($cities) > 0) {
                return response()->json($cities, 200);
            }
        }
    }
}
