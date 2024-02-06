<?php

namespace App\Http\Controllers\Users\Clients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users\Clients\Client;
use Yajra\DataTables\Facades\DataTables;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $client = Client::orderBy('created_at', 'DESC')
                ->with('documents')
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
                ->rawColumns(['action', 'document', 'full_name', 'status', 'country', 'state', 'flag', 'category'])
                ->make(true);
        }

        return view('auth.users.clients.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
