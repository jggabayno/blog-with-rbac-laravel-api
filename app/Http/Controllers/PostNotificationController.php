<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostNotificationController extends Controller
{
    public function commentNotifications() {
        return auth()->user()->notifications->where('type', 'App\\Notifications\\PostCommentNotification');
    }

    public function likeNotification() {
        return auth()->user()->notifications->where('type', 'App\\Notifications\\PostCommentNotification');
    }
}
