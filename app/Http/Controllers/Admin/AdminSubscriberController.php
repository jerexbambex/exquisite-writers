<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class AdminSubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Newsletter::orderBy('created_at')->get();

        return view('admin.subscribers.index', compact('subscribers'));
    }
}
