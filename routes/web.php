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



################  ROTAS JHE ############## (JEHE🤑)
Route::get('/rota-jhenniffer', function () {
    return view('pages.jhenniffer.index');
});


################  ROTAS JHE ############## (JHE🤑)




################  ROTAS JÚLIA ############## (JÚLIA🤑)
Route::get('/rota-julia', function () {
    return view('pages.julia.index');
});

################  ROTAS JÚLIA ############## (JÚLIA🤑)
