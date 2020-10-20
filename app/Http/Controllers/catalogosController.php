<?php

namespace App\Http\Controllers;
use App\Models\catalogos;
use App\Models\tallas;
use App\Models\categorias;
use App\Http\Requests\CreatecatalogosRequest;
use App\Http\Requests\UpdatecatalogosRequest;
use App\Repositories\catalogosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use View;
use DB;

class catalogosController extends AppBaseController{

    function categorias(Request $request){
        $categorias =categorias::get();

        return view('catalogos.categorias',compact('categorias'));
    }

    function opciones_catalogo(Request $request){
        if($request->catalogo ==1){
            if($request->tipo==1){
                $tallas = array('id'=>0,
                                'talla'=>''); 
                $tallas = (object)$tallas;
            }else if($request->tipo==2){
                $tallas = tallas::where('id',$request->id)->get();
                $tallas = $tallas[0];
            }
            $options =  view('catalogos.tallas_fields',compact('tallas'))->render();
        }else if($request->catalogo ==2){
            $tipo = $request->catalogo;
            if($request->tipo==1){
                $categorias  = array('id'=>0,
                                      'nivel'=>1,
                                      'id_padre'=>0,
                                      'categorias'=>'');
                $categorias = (object)$categorias;
            }else if($request->tipo==2){
                $categorias = categorias::where('id',$request->id)->get();
                $categorias = $categorias[0];
            }
            $options =  view('catalogos.categorias_fields',compact('categorias','tipo'))->render();
        }


        return json_encode($options);
    }


    function guarda_catalogo(Request $request){
        if($request->id_catalogo==1){
            $existe = tallas::where('id',$request->id)->count();
            if($existe>0){
                tallas::where('id',$request->id)
                        ->update(['talla'=>$request->talla]);
            }else{
                tallas::insert(['talla'=>$request->talla]);
            }
            
            $tallas =tallas::get();
            $options = view('catalogos.table_tallas',compact('tallas'))->render();
        }else if($request->id_catalogo==2){
            $existe = categorias::where('id',$request->id)->count();
            if($existe>0){
                categorias::where('id',$request->id)
                        ->update(['id_padre'=>$request->id_padre,
                                  'categorias'=>$request->categoria]);
            }else{
                categorias::insert(['id_padre'=>$request->id_padre,
                                    'nivel'=>$request->nivel,
                                    'categorias'=>$request->categoria]);
            }
            
            $categorias =categorias::get();
            $options = view('catalogos.tablas_cat',compact('categorias'))->render();

        }

        return $options;
    }

    function elimina_catalogo(Request $request){ 
        if($request->catalogo==1){
            tallas::where('id',$request->id)->delete();
            $tallas =tallas::get();
            $options = view('catalogos.table_tallas',compact('tallas'))->render();
        }else if($request->catalogo==2){
            categorias::where('id',$request->id)->delete();
            $categorias =categorias::get();
            $options = view('catalogos.tablas_cat',compact('categorias'))->render();
        }


        return json_encode($options);
    }
}
