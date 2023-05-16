<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GymController extends Controller
{

    public static $courses=[
        'Sling Zone'=>[
            'nome'=>'Sling Zone',
            'orario'=> '15:00',
            'costo'=> '35€',
            'durata'=> '45 minuti',
        ],
        'The Cage'=>[
            'nome'=>'The Cage',
            'orario'=> '15:00',
            'costo'=> '35€',
            'durata'=> '45 minuti',
        ],
        'Box Workout'=>[
            'nome'=>'Box Workout',
            'orario'=> '15:00',
            'costo'=> '35€',
            'durata'=> '45 minuti',
        ],
        'Core Workout'=>[
            'nome'=>'Core Workout',
            'orario'=> '15:00',
            'costo'=> '35€',
            'durata'=> '45 minuti',
        ]
    ];

    public function home(){
        return view('home');
    }

    public function corse(){
        return view('corse', ['corsi'=>self::$courses]);
    }

    public function detail($corso){
        foreach(self::$courses as $course){
            if($course['nome']==$corso){
                return view('detail', ['corso'=>$course]); 
            }
        }
        abort(404);
        
    }

    public function contact(){
        return view('contact');
    }
}
