<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/solicitacao', function () {
    return view('solicitacao');
});

Route::get('/reclamacao', function () {
    return view('reclamacao');
});

Route::get('/elogio-sugestao', function () {
    return view('elogio-sugestao');
});

Route::get('/denuncia', function () {
    return view('denuncia');
});

Route::get('/lai', function () {
    return view('lai');
});

//Formulários

Route::post('/formularioSolicitacao', 'FormularioController@formularioSolicitacao');

Route::post('/formularioReclamacao', 'FormularioController@formularioReclamacao');

Route::post('/formularioElogioSugestao', 'FormularioController@formularioElogioSugestao');

Route::post('/formularioDenuncia', 'FormularioController@formularioDenuncia');

Route::post('/formularioLAI', 'FormularioController@formularioLAI');

// Aplicativo

Route::get('imagem/{nome}', ['as' => 'abrirImagem','uses' => 'Arquivo\ArquivoController@abrirImagem']);

Route::get('/listarStatus', 'Status\StatusController@ListarStatus');

Route::get('/listarDemandas', 'Demanda\DemandaController@ListarDemandas');

Route::get('/listarCategoria', 'Categoria\CategoriaController@ListarCategoria');

Route::post('/listarDemandasFeed', 'Demanda\DemandaController@ListarDemandasFeed');

Route::post('/listarMinhasDemandas', 'Demanda\DemandaController@ListarMinhasDemandas');

Route::post('/listarUsuarioDemanda', 'UsuarioDemanda\UsuarioDemandaController@ListarUsuarioDemanda');

Route::post('/loginApp', 'Usuario\UsuarioController@Login');

Route::post('/inserirUsuario', 'Usuario\UsuarioController@InserirUsuario');

Route::post('/inserirDemanda', 'Demanda\DemandaController@InserirDemanda');