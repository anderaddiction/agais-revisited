<?php

namespace App\Http\Controllers\Communications\Mail;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Communications\Mail\Mail;
use App\Http\Requests\Communications\Mail\MailRequest;
use App\Notifications\MailSent;
use App\Notifications\MessageSent;

class MailController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::where('id', '!=', auth()->id())->get();
        $mails = DB::table('mails as mail')
            ->select(
                DB::raw('mail.id as mail_id'),
                DB::raw('mail.subject'),
                DB::raw('mail.body'),
                DB::raw('mail.created_at'),
                DB::raw('contact.id as contact_id'),
                DB::raw('contact.name'),
                DB::raw('contact.avatar'),
                DB::raw('am.sender_id')
            )
            ->join('assigned_mails as am', 'am.email_id', 'mail.id')
            ->join('users as contact', 'contact.id', 'am.recipient_id')
            ->where('am.recipient_id', auth()->id())
            ->get();

        if ($mails) {
            return view('auth.communications.mail.email-inbox', [
                'users'               => $users,
                'mails'               => $mails
            ]);
        }
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

        $recipient_id = User::find($recipient);
        foreach ($recipient_id as $contact) {
            $contact->notify(new MailSent($mail));
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
