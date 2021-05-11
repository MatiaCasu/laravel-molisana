<?php

use Illuminate\Support\Facades\Route;

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
    $data = config('pasta-db');    

    $lunga= [];
    $corta= [];
    $cortissima= [];

    foreach($data as $id => $pasta){
        $pasta['pastaId'] = $id;


        if($pasta["tipo"] == "lunga"){
            $lunga[]= $pasta;
        }
        elseif($pasta["tipo"] == "corta"){
            $corta[]= $pasta;
        }
        elseif($pasta["tipo"] == "cortissima"){
            $cortissima[]= $pasta;
        }
    }


    return view('home', [
        'lunga' => $lunga,
        'corta' => $corta,
        'cortissima' => $cortissima,
    ]);
}) -> name('homepage');

Route::get('/products', function () {
    $data = config('pasta-db');
    $pasteId = [];  
    
    foreach($data as $id => $pasta){
        $pasta['pastaId'] = $id;
        $pasteId[]= $pasta; 
    }

    return view('products',[
        'products' => $pasteId,
    ]);

}) -> name('products');

Route::get('/products/{id}', function ($id) {
    $data = config('pasta-db');    

    $prodId= $data[$id];

    if( $id == 0){
        $prevId = count($data) - 1;
        $nextId = $id + 1;    
    }
    elseif($id == (count($data) - 1) ){
        $nextId = 0;       
        $prevId = $id - 1;
    }
    else{
        $nextId = $id + 1;
        $prevId = $id - 1;    
    }

    return view('single-product',[
        'prodId' => $prodId,
        'prevId' => $prevId,
        'nextId' => $nextId
    ]);
}) -> where('id', '[0-9]+') -> name('single-product');

