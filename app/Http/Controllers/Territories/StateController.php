<?php

namespace App\Http\Controllers\Territories;

use Illuminate\Http\Request;
use App\Models\Territories\State;
use App\Models\Territories\Country;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\Territories\StateDataTable;
use App\Http\Requests\Territories\StateRequest;

class StateController extends Controller
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
            $state = State::orderBy('name', 'DESC')->with('country')->get();
            return DataTables::of($state)
                ->addIndexColumn()
                ->addColumn('created_at', function ($state) {
                    return $state->present()->created_at();
                })
                ->addColumn('action', function ($state) {
                    return $state->present()->actionButton();
                })
                ->addColumn('continent', function ($state) {
                    return $state->present()->continent();
                })
                ->addColumn('flag', function ($state) {
                    return $state->present()->flag();
                })
                ->rawColumns(['action', 'flag', 'continent'])
                ->make(true);
        }

        return view('auth.territories.states.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $state    = new State();
        $countries  = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.territories.states.create', [
            'state'   => $state,
            'countries' => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StateRequest $request)
    {
        State::create(
            $request->validated()
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
                + ['iso' => upperCase($request->iso)]
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
    public function show(State $state)
    {
        return view('auth.territories.states.show', [
            'state'   => $state
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(State $state)
    {
        $countries  = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.territories.states.edit', [
            'state'   => $state,
            'countries' => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StateRequest $request, State $state)
    {
        $state->update(
            $request->validated()
                + ['slug' => generateUrl($request->name)]
                + ['iso' => upperCase($request->iso)]
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
    public function destroy($state)
    {
        $ids = explode(",", $state);
        State::destroy($ids);
        return [
            'success' => __('Data deleted successfuly')
        ];
    }
}
