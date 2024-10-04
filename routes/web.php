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


################  ROTAS JÚLIA ############## (JHE🤑)

################  ROTAS CHEFE ############## (JÚLIA🤑)
Route::get('/index-julia', function () {
    return view('pages.julia.index');
});



################  ROTAS JÚLIA ############## (JÚLIA🤑)
