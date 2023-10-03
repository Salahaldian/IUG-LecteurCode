<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __invoke()
    {
        $constants = [
            'website name' => 'My First Project',
            'company name' => 'Hameed',
            'author' => 'Salahaldin',
        ];
        return view('settings.constants.index')->with(compact('constants'));
    }
}
