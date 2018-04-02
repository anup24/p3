@extends('layouts.master')

@section('title')

@endsection

@section('content')
    <h1>Enter your height, weight and specify units</h1>
    <div class='details'>* Required fields</div>
    <form method='GET' action='/show'>

        <fieldset>
            <label for='weight'> * Enter your weight: <input type='text' name='weight' id='weight' value='{{ old('weight') }}'>
            </label>
            @include('modules.error-field', ['field' => 'weight'])

            <label for='height'> * Enter your height: <input type='text' name='height' id='height' value='{{ old('height') }}'>
            </label>
            @include('modules.error-field', ['field' => 'height'])

            <label for='units'>
                <input name='units' id='units' type='radio' value='metric'> * Metric (Weight in kg & height in cms)
            </label>

            <label for='units'>
                <input name='units' id='units' type='radio' value='imperial'> * Imperial (Weight in lbs & height in m)
            </label>

            <label for='chart'>
                <input type='checkbox' name='chart' id='chart'> Show BMI chart
            </label>

        </fieldset>

        <input type='submit' value='Calculate BMI' class='btn btn-primary btn-small'>
    </form>

    @include('modules.error-form')

@endsection