@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Expense</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/{{ $report->id }}">Back</a>
        </div>

    </div>

    <div class="row">
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/expense_reports/{{ $report->id }}/expenses" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Description:</label>

                    @if ($errors->has('description'))
                        <input type="text" class="form-control is-invalid" id="description" name="description"
                            placeholder="Type a description" value="{{ old('description') }}">
                    @else
                        <input type="text" class="form-control" id="description" name="description"
                            placeholder="Type a description" value="{{ old('description') }}">
                    @endif
                </div>


                <div class="form-group">
                    <label for="title">Amount:</label>

                    @if ($errors->has('amount'))
                        <input type="text" class="form-control is-invalid" id="amount" name="amount"
                            placeholder="Type an amount" value="{{ old('amount') }}">
                    @else
                        <input type="text" class="form-control" id="amount" name="amount"
                            placeholder="Type an amount" value="{{ old('amount') }}">
                    @endif
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>

@endsection
