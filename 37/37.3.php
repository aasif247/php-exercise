<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function () {
  return ['name' =>'world'];
});

Route::get('/hello/world',function () {
    echo "Asif";
  });

Route::get('/hello/{name}',function ($worldName) 
  {
    $worldName =ucwords($worldName);
    return "hello {$worldName}";
  });

Route::get('/greet/{greetings}/{name}',function ($greetings,$worldName) 
  {
    $worldName =ucwords($worldName);
    $greetings =ucwords($greetings);

    return "{$greetings}{$worldName}";
  });

