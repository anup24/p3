@extends('layouts.master')

@section('title')
    Contact
@endsection

@section('content')
    <h1>Contact</h1>
    <p>
        Questions? Send it to <a href="mailto:{{ $email }}">Page Admin</a>
    </p>
@endsection