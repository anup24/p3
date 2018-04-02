@extends('layouts.master')

@section('title')

@endsection

@section('content')
    @if($bmiValue)

        <h2>Your BMI is <em>{{$bmiValue}}</em> and <em>{{ $result }}</em></h2>

    @endif

    @if($chart)
        <img src='/images/bmi-chart.jpg' id='chart' alt='BMI Charts' class="img-rounded">
    @endif

@endsection