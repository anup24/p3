<?php

namespace App\Http\Controllers;

use Illuminate\HTTP\Request;
use Log;

class BMIController extends Controller
{
    public function index(Request $request)
    {
        return view('bmi.index');
    }

    public function show(Request $request)
    {
        $this->validate($request, [
            'height' => 'required|numeric|min:1',
            'weight' => 'required|numeric|min:1',
            'units' => 'required',
        ]);

        $height = $request->input('height', null);
        $weight = $request->input('weight', null);
        $units = $request->input('units', null);
        $chart = $request->input('chart', false);
        $bmiValue = 0;

        if ($units == 'metric') {
            $heightInMeters = $height / 100;
            $bmiValue = $weight / ($heightInMeters * $heightInMeters);

        } else if ($units == 'imperial') { //this check is optional, it can just be 'else'
            $bmiValue = $weight / ($height * $height) * 703;
        }

        $result = '';

        if ($bmiValue < 15) {
            $result = 'You are very severely overweight';
        } else if ($bmiValue >= 15 && $bmiValue < 16) {
            $result = 'You are severely overweight';
        } else if ($bmiValue >= 16 && $bmiValue < 18.5) {
            $result = 'You are  overweight';
        } else if ($bmiValue >= 18.5 && $bmiValue < 25) {
            $result = 'You are normal (healthy weight)';
        } else if ($bmiValue >= 25 && $bmiValue < 30) {
            $result = 'You are moderately obese';
        } else if ($bmiValue >= 30 && $bmiValue < 35) {
            $result = 'You are severely obese';
        } else if ($bmiValue > 40) {
            $result = 'You are severely obese';
        }

        return view('bmi.show')->with([
            'bmiValue' => number_format($bmiValue, 2, '.', ''),
            'result' => $result,
            'chart' => $chart
        ]);
    }
}