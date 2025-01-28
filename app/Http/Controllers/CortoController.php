<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CortoController extends Controller
{
    private array $cortos = [
        [
            'id' => 1,
            'titulo' => 'Teoría de PHP para dormir',
            'director' => 'Ricardo',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ],
        [
            'id' => 2,
            'titulo' => 'React para dummies',
            'director' => 'Dani',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ],
        [
            'id' => 3,
            'titulo' => 'Despliegue con Docker',
            'director' => 'Alex',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ],
        [
            'id' => 4,
            'titulo' => 'Interfaces gráficas con Java',
            'director' => 'Ginés',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ],
        [
            'id' => 5,
            'titulo' => 'MariaDB',
            'director' => 'Gonzalo',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]
    ];

    public function index()
    {
        return view('cortos.listado')->with('cortos', $this->cortos);
    }

    public function show(string $id)
    {
        foreach ($this->cortos as $corto) {
            if ($corto['id'] == $id) {
                return view('cortos.show')->with('corto', $corto);
            }
        }
    }
}
