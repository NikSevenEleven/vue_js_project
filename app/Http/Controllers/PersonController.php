<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
public function __invoke()
{
    $persons = [
        [
            'id'=>1,
            'name'=>'Ivan',
            'age'=>20,
            'job'=>'developer'
        ],
        [
            'id'=>2,
            'name'=>'Ira',
            'age'=>22,
            'job'=>'teacher'
        ],
        [
            'id'=>3,
            'name'=>'Igor',
            'age'=>29,
            'job'=>'cooker'
        ],
        ];
    return $persons;
}
}