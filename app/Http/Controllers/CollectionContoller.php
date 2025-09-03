<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionContoller extends Controller
{
    public function one()
    {
        $collection = collect([
            ['name' => 'motin', 'age' => 30],
            ['name' => 'andu', 'age' => 40]

        ]);
        $filter = $collection->filter(function ($item) {
            return $item['age'] > 30;
        });
        return $filter->all();
    }

    function two()
    {
        $collection = [
            [
                'name' => 'John Doe',
                'age' => 40,
                'address' => '123 Main Street, Cityville',
                'children' => [
                    'sons' => [
                        ['name' => 'Michael', 'age' => 15],
                    ],
                    'daughters' => [
                        ['name' => 'Emma', 'age' => 10],
                    ],
                ],
            ],
            [
                'name' => 'Jane Smith',
                'age' => 35,
                'address' => '456 Elm Road, Townsville',
                'children' => [
                    'sons' => [
                        ['name' => 'Liam', 'age' => 8],
                    ],
                    'daughters' => [
                        ['name' => 'Olivia', 'age' => 5],
                    ],
                ],
            ],
        ];
        $collec = collect($collection);
        return  $collec->pluck('children.daughters');
    }

    public function three()
    {
        $collection = collect([
            'Motin',
            'Mona',
            'Jaz',
            'Noon',
            'Moon',
            'soon',
            'khun',
            'poon'
        ]);
        [$four, $five] = $collection->partition(function ($item) {
            return strlen($item) > 4;
        });
        return $four->all();
    }
}
