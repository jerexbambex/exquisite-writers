<?php

namespace App\Http\Controllers\Admin;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Exports\SubscriberExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class AdminSubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Newsletter::orderBy('created_at')->get();

        return view('admin.subscribers.index', compact('subscribers'));
    }

    public function export()
    {
        return Excel::download(new SubscriberExport, 'subscribers.xlsx');
    }
}
