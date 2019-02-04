<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class NotificationsController extends Controller
{
    public function getNotifications () {
        return response()->json (['success' => true, 'notifications' => Auth::user()->unreadNotifications->all()]);
    }

    public function markAsRead () {

    }
}
