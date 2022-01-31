@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Send Report {{ $report->id }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/">Back</a>
        </div>

    </div>

    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{ $report->id }}/sendMail" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Send Mail</button>
            </form>
        </div>
    </div>

@endsection
