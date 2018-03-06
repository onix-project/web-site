<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;

	class indexController extends Controller{
		public function index(){
			
    		return view('index', ['noticias'=> $this->noticias()]);
		}

		public function noticias(){
			return (Object) [
				'post'=>'content content',
				'guid'=>'img.png',
				'post_title'=>'Titulo de prueba',
				'post_date'=>'01/01/2018',
				'post'=>'contenido contenido'
			];	
		}
	}
?>