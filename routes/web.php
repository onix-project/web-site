<?php

    Route::group(['prefix' => '', 'middleware'=> 'lang'], function () {
        Route::get('/', 'indexController@index')->name('index');
        Route::get('/descarga', 'descargaController@index')->name('descarga');
        Route::get('/proyecto', 'proyectoController@index')->name('proyecto');
        Route::get('/ficha', 'fichaController@index')->name('ficha');
        Route::get('/team', 'teamController@index')->name('team');
        Route::get('/ayuda', 'ayudaController@index')->name('ayuda');
        Route::get('/roadmap', 'roadmapController@index')->name('roadmap');
        Route::get('/plan_estrategico', 'planController@index')->name('plan_estrategico');
        Route::get('/rentabilidad', function(){
            return view('pagina::calculadora');
        })->name('rentabilidad');
    });

    Route::get('lenguaje/{lang}', function($lang){
        Session::put('locale', $lang);
        App::setLocale($lang);
        return redirect()->back();
    })->name('lenguaje');