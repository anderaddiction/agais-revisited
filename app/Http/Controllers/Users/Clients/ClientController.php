<?php

namespace App\Http\Controllers\Users\Clients;

use Illuminate\Support\Str;
use function Livewire\store;
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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Territories\Municipality;

use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Users\Clients\ClientRequest;
use Symfony\Component\HttpKernel\Event\RequestEvent;

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
                ->addColumn('avatar', function ($client) {
                    return $client->present()->avatar();
                })
                ->addColumn('gender', function ($client) {
                    return $client->present()->gender();
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
                    'role',
                    'avatar',
                    'gender'
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
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->store('users/clients/avatar');
        }

        $avatar = $request->hasFile('avatar') ? $request->file('avatar')->store('users/clients/avatar') : null;
        $client = Client::create(
            $request->except('role_id', 'avatar', 'password')
                + ['code'     => uniqueCode()]
                + ['slug'     => Str::slug($request->name . '_' . $request->second_name . '_' . $request->last_name . '_' . $request->second_last_name)]
                + ['avatar'   => $avatar]
                + ['password' => Hash::make($request->password)]
        );

        $client->roles()->attach($request->role_id);

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
    public function show(Request $request, Client $client)
    {
        if ($request->ajax()) {
            return response()->json([
                'client'       => $client,
                'category'     => $client->category->name,
                'role'         => $client->roles->pluck('display_name')->implode(' '),
                'country'      => $client->country->name,
                'state'        => $client->state->name,
                'municipality' => $client->municipality->name,
                'parish'       => $client->parish->name,
                'city'         => $client->city->name,
                'document'     => $client->document
            ], 200);
        } else {
            return view('auth.users.clients.index', [
                'client' => $client
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Client $client)
    {

        $categories      = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $categories      = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $countries       = Country::orderBy('name', 'ASC')->pluck('name', 'id');
        $states          = State::orderBy('name', 'ASC')->pluck('name', 'id');
        $municipalities  = Municipality::orderBy('name', 'ASC')->pluck('name', 'id');
        $parishes        = Parish::orderBy('name', 'ASC')->pluck('name', 'id');
        $cities          = City::orderBy('name', 'ASC')->pluck('name', 'id');
        $roles           = Role::orderBy('display_name', 'ASC')->pluck('display_name', 'id');
        $documents       = Document::orderBy('acronym', 'ASC')->pluck('acronym', 'id');

        //En caso de que la peticion sea via ajax
        if ($request->ajax()) {
            $view = 'clients/' . $client->id . '/edit';
            return response()->json(array('success' => true, 'html' => $view));
        }

        return view('auth.users.clients.edit', [
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
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $request, Client $client)
    {
        if ($request->hasFile('avatar')) {
            if ($client->avatar) {
                Storage::delete($client->avatar);
            }

            $request->file('avatar')->store('users/clients/avatar');
        }

        $client->update(
            $request->except('role_id', 'avatar')
                + ['slug' => generateUrl($request->name)]
                + ['avatar' =>  $request->hasFile('avatar') ? $request->file('avatar')->store('users/clients/avatar') : $client->avatar]
        );

        $client->roles()->sync($request->role_id);

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
    public function destroy($client)
    {
        $ids = explode(",", $client);
        Client::destroy($ids);
        DB::table('assigned_clients')->whereIn('client_id', $ids)->delete();
        return [
            'success' => __('Data deleted successfuly')
        ];
    }

    public function trashed(Request $request)
    {
        if ($request->ajax()) {
            $client = Client::onlyTrashed()
                ->orderBy('created_at', 'DESC')
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
                ->addColumn('avatar', function ($client) {
                    return $client->present()->avatar();
                })
                ->addColumn('gender', function ($client) {
                    return $client->present()->gender();
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
                    'role',
                    'avatar',
                    'gender'
                ])
                ->make(true);
        }

        return view('auth.users.clients.trashed');
    }

    public function restore($client)
    {
        $ids = explode(",", $client);
        $client_ids = array_map('intval', $ids);
        Client::whereIn('id', $client_ids)->withTrashed()->restore();
        return [
            'success' => __('Data restored successfuly')
        ];
    }
}
