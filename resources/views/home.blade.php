@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Email Scheduling Form</h1>
    <form action="{{route('sendEmail')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="recipient">Recipient Email:</label>
            <input type="email" class="form-control" id="recipient" name="recipient" required>
        </div>
        <div class="form-group">
            <label for="content">Email Content:</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>
Dear Mr./Ms. [Last name],

I would like to request a vacation from Monday, September 9th till Friday, September 13th.

I will make sure to complete all my current projects and pending tasks in advance before the vacation.
    My colleagues [Name] and [Name] will cover my responsibilities during my absence.

Looking forward to your approval.

Sincerely,
[Your name]
[Job title]
            </textarea>
        </div>
        <div class="form-group">
            <label for="schedule">Select Schedule:</label>
            <input type="text" name="time" placeholder="Time">
        </div>
        <button type="submit" class="btn btn-primary">Schedule Email</button>
    </form>
</div>
@endsection
