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

// Site name
$site_name = 'Daily todo';
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
  // I declare predefined variable global
  global $site_name;
  // I pass data to view
  return view('home',
    [
      'site-name' => $site_name,
      'title' => $list_title,
      'list' => $list
    ]
  );
});
// Route to following-day-todo
Route::get('/following-day-todo', function () {
  // I create a todo list to insert data dinamically
  $list_title = 'Todo 22/10/24';
  $list = [
    'guardare le nuove slide su Laravel',
    'riguardare la parte di lezione su blade (template engine)',
    'restitituire alcuni dati dinamicamente con la sintassi di Laravel',
    'comprare l\'avvolgitore della tapparella',
    'allenamento alle 18',
  ];
  // I declare predefined variable global
  global $site_name;
  // I pass data to view
  return view('following-day-todo',
    [
      'site-name' => $site_name,
      'title' => $list_title,
      'list' => $list
    ]
  );
});
// Route to everyday-todo
Route::get('/everyday-todo', function () {
    // I create a todo list to insert data dinamically
  $list_title = 'Todo everyday';
  $list = [
    'fare l\'esercizio alle 15',
    'approfondire Laravel',
    'leggere qualcosa di proprio interesse',
    'credere in se stessi, anche negli errori',
    'considerare di allenarsi',
  ];
  // I declare predefined variable global
  global $site_name;
  // I pass data to view
  return view('everyday-todo',
    [
      'site-name' => $site_name,
      'title' => $list_title,
      'list' => $list
    ]
  );
});
