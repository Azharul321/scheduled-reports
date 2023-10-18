<?php

namespace App\Http\Controllers;

use App\Jobs\myEmailJob;
use App\Mail\NewMail;
use App\Models\MailContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailContentController extends Controller
{
    public function sendEmail(Request $request)
{
    // Validate the request if needed
    $validatedData = $request->validate([
        'email' => 'required|email',
        'content' => 'required',
        'time' => 'required',
    ]);

    // Insert data into the database
    $report = new MailContent($request->all());
    $report->save();

    return 'Data has been inserted!';
}
}
