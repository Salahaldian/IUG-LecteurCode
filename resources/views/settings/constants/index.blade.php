@extends('layouts.app')
@section('title')
    <h1>Constants</h1>
@endsection

@section('mainContent')
    <table class="table">
        <tbody>
            @foreach($constants as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
