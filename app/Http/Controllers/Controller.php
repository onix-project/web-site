<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Session;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(){
        Session::put('precios', $this->preciosApi());

    }
    public function preciosApi(){
		
		$p = (object) [

				'onx_btc' => 1,
				'onx_usd' =>1, 
				'onx_bsf_compra'=>1,
				'volumen'=>1
			];	
		return $p;
	}
}
