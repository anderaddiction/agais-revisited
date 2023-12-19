<?php

namespace App\Http\Controllers\Communications\Messenger;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Communications\Messenger\Messenger;

class MessengerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('id', '!=', auth()->id())->orderBy('name', 'ASC')->get();
        return view('auth.communications.messenger.index', [
            "users" => $users
        ]);
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

        $message = Messenger::create([
            'code'          => $code = uniqueCode(),
            'slug'          => generateUrl($code),
            'user_id'       => auth()->id(),
            'recipient_id'  => $request->recipient_id,
            'body'          => $request->body
        ]);

        return response()->json([
            'message' => $message
        ], 200);
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

    public function findUser($id)
    {
        $user = User::find($id);

        return response()->json([
            'data' => $user
        ], 200);
    }
}
