<?php

namespace App\Http\Controllers\Users\Clients;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Territories\City;
use App\Models\Users\Roles\Role;
use App\Models\Territories\State;
use App\Models\Documents\Document;
use App\Models\Territories\Parish;
use Illuminate\Support\Facades\DB;
use App\Models\Categories\Category;
use App\Models\Territories\Country;
use App\Http\Controllers\Controller;
use App\Models\Users\Clients\Client;
use App\Models\Territories\Municipality;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Users\ClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $client = Client::orderBy('created_at', 'DESC')
                ->with(
                    'document',
                    'country',
                    'state',
                    'municipality',
                    'parish',
                    'city',
                    'roles',
                    'category'
                )
                ->get();
            return DataTables::of($client)
                ->addIndexColumn()
                ->addColumn('created_at', function ($client) {
                    return $client->present()->created_at();
                })
                ->addColumn('full_name', function ($client) {
                    return $client->present()->fullName();
                })
                ->addColumn('role', function ($client) {
                    return $client->present()->fullName();
                })
                ->addColumn('status', function ($client) {
                    return $client->present()->status();
                })
                ->addColumn('document', function ($client) {
                    return $client->present()->document();
                })
                ->addColumn('country', function ($client) {
                    return $client->present()->country();
                })
                ->addColumn('state', function ($client) {
                    return $client->present()->state();
                })
                ->addColumn('flag', function ($client) {
                    return $client->present()->flag();
                })
                ->addColumn('category', function ($client) {
                    return $client->present()->category();
                })
                ->addColumn('action', function ($client) {
                    return $client->present()->actionButton();
                })
                ->addColumn('role', function ($client) {
                    return $client->present()->role();
                })
                ->rawColumns([
                    'action',
                    'documents',
                    'full_name',
                    'status',
                    'country',
                    'state',
                    'flag',
                    'category',
                    'role'
                ])
                ->make(true);
        }

        return view('auth.users.clients.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $client          = new Client();
        $categories      = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $categories      = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $countries       = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        $states          = State::orderBy('name', 'ASC')->pluck('name', 'id');
        $municipalities  = Municipality::orderBy('name', 'ASC')->pluck('name', 'id');
        $parishes        = Parish::orderBy('name', 'ASC')->pluck('name', 'id');
        $cities          = City::orderBy('name', 'ASC')->pluck('name', 'id');
        $roles           = Role::orderBy('display_name', 'ASC')->pluck('display_name', 'id');
        $documents       = Document::orderBy('acronym', 'ASC')->pluck('acronym', 'id');
        return view('auth.users.clients.create', [
            'client'         => $client,
            'roles'          => $roles,
            'categories'     => $categories,
            'countries'      => $countries,
            'states'         => $states,
            'municipalities' => $municipalities,
            'parishes'       => $parishes,
            'parishes'       => $parishes,
            'cities'         => $cities,
            'categories'     => $categories,
            'documents'      => $documents
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        $client = Client::create(
            $request->except('role_id')
                + ['code' => uniqueCode()]
                + ['slug' => Str::slug($request->name . '_' . $request->second_name . '_' . $request->last_name . '_' . $request->second_last_name)]
        );

        $client->roles()->attach($request->role_id);
        return redirect()->back()->with('success', __('Data created successfuly'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($client)
    {
        $ids = explode(",", $client);
        Client::destroy($ids);
        DB::table('assigned_clients')->whereIn('client_id', $ids)->delete();
        return [
            'success' => __('Data deleted successfuly')
        ];
    }
}
