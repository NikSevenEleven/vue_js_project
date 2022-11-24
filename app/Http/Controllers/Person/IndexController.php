<?php

namespace App\Http\Controllers\Person;


use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Http\Resources\Person\PersonResource;

class IndexController extends Controller
{
    public function __invoke()
    {
        $people=Person::all();
        return PersonResource::collection($people);
        
    }
}