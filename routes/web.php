<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route to homepage
Route::get('/', function () {
    // I create a todo list to insert data dinamically
    $list_title = 'Todo 21/10/24';
    $list = [
        'guardare le slide introduttive',
        'installare composer',
        'creare un nuovo progetto con composer',
        'riguardare la parte di lezione su blade (template engine)',
        'restitituire alcuni dati dinamicamente con la sintassi di Laravel',
        'comprare l\'avvolgitore della tapparella',
        'allenamento alle 18',
    ];

    // I pass data to view
    return view('home',
        [
            'title'=>$list_title,
            'list'=>$list
        ]
    );
});
