<?php

namespace App\Http\Controllers\Communications\Mail;

use App\Http\Controllers\Controller;
use App\Http\Requests\Communications\Mail\MailRequest;
use App\Models\Communications\Mail\Mail;
use App\Models\User;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::where('id', '!=', auth()->id())->get();
        $mails = Mail::with(['users'])->get();
        return view('auth.communications.mail.email-inbox', [
            'users' => $users,
            'mails' => $mails
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
    public function store(MailRequest $request)
    {
        $sender    = auth()->id();
        $subject   = $request->subject;
        $recipient = $request->recipient_id;

        $mail = Mail::create(
            $request->except(['sender_id', 'recipient_id'])
                + ['code'  => uniqueCode()]
                + ['slug'  => generateUrl($subject)]
        );

        foreach ($recipient as $key => $value) {
            $mail->users()->attach($mail->id, ['sender_id' => $sender,  'recipient_id' => $value]);
        }

        return response()->json([
            'title' => __('Message Send Corretly!'),
            'text'  => __('Do you want to send another mail?')
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
}
