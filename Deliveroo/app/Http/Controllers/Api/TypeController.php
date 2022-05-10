<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Type;

class TypeController extends Controller
{
    public function index() {
        
        $types = Type::all();

        $types->each(function($type) {
            $type->id;
            $type->name;
            
            
        });

        return response()->json(
            [
                'results' => $types,
            ]
        );

    }
}
