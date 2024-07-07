<?php

namespace App\Http\Controllers;

use App\Models\Post;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $posts = Auth::user()->posts()->latest()->paginate(6);
        return view('users.dashboard', ['posts' => $posts]);
    }
}
