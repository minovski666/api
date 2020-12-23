<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApisController extends Controller
{
    public function index()
    {
        $response = Http::get('http://dummy.restapiexample.com/api/v1/employees');

        $jsonData = $response->json();

        dd($jsonData);
    }

    public function store()
    {
        $response = Http::post('http://dummy.restapiexample.com/api/v1/create', [
            'name' => 'Pece Majkino',
            'salary' => '25000$',
            'age' => '66'
        ]);

        dd($response->json());
    }

    public function show($id)
    {
        $response = Http::get('http://dummy.restapiexample.com/api/v1/employee/' . $id);

        $jsonData = $response->json();

        dd($jsonData);
    }

    public function edit($id)
    {
        $response = Http::put('http://dummy.restapiexample.com/api/v1/update/' . $id, [
            'name' => 'Pece Majkino',
            'salary' => '25000$',
            'age' => '66'
        ]);

        $jsonData = $response->json();

        dd($jsonData);
    }

    public function destroy($id)
    {
        $response = Http::delete('http://dummy.restapiexample.com/api/v1/delete/' . $id);

        $jsonData = $response->json();

        dd($jsonData);
    }
}
