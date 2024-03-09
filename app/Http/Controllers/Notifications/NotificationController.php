<?php

namespace App\Http\Controllers\Notifications;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function readNotification($id)
    {
        DatabaseNotification::find($id)->markAsRead();
        $notifications = Auth::user()->unreadNotifications->count();

        return response()->json($notifications, 200);
    }
}
