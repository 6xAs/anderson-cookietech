<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


################  ROTAS RECEITAS ############## (ANDERSON😒😒)
Route::get('/gerenciar-receitas', function () {
    return view('pages.receita.index');
});



################  ROTAS RECEITAS ############## (ANDERSON😒😒)



################  ROTAS CHEFE ############## (JEHE🤑)
Route::get('/gerenciar-chefe', function () {
    return view('pages.chefe.index');
});



################  ROTAS CHEFE ############## (JHE🤑)
