<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $count_users = User::whereNotIn('user_level', [0, 1])
            ->where('user_status', 1)
            ->count();
        $count_all_users = User::count();

        $count_unread_messages = Message::query()
            ->where('viewed', 0)
            ->count();

        return view('dashboards.index', compact(
            'user',

            'count_users',
            'count_all_users',

            'count_unread_messages',
        ));
    }
}
