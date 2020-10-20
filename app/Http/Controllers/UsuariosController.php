<?php

namespace App\Http\Controllers;
use App\Models\proveedores;

use App\Http\Requests\CreateUsuariosRequest;
use App\Http\Requests\UpdateUsuariosRequest;
use App\Repositories\UsuariosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use DB;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Redirect;

class UsuariosController extends AppBaseController
{
    /** @var  UsuariosRepository */
    private $usuariosRepository;

    public function __construct(UsuariosRepository $usuariosRepo)
    {
        $this->usuariosRepository = $usuariosRepo;
    }

    /**
     * Display a listing of the Usuarios.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->usuariosRepository->pushCriteria(new RequestCriteria($request));

        $usuarios = DB::table('users') ->get();


             if(auth()->user()->id_tipo_usuario!=0){
                  return redirect('/home');
           }else{
                  
               return view('usuarios.index2') ->with('usuarios', $usuarios);

           }
       
    }


    public function  base_usuarios(Request $request){
         $usuarios = DB::table('users') ->get();
       
        return view('usuarios.index') ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new Usuarios.
     *
     * @return Response
     */
    public function create()
    {   
        
        $proveedores=proveedores::all();

        $usuarios_e=array(
          'id_tipo_usuario'=>'',
          'id_proveedor'=>'',
        );
        $editar=0;
        return view('usuarios.fields',compact('proveedores','usuarios_e','editar'));
    }

    /**
     * Store a newly created Usuarios in storage.
     *
     * @param CreateUsuariosRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $input =  $request->all();
        if (!empty($input['password'])) { 
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }
        
         $usuarios = $this->usuariosRepository->create($input);

       
    }

    /**
     * Display the specified Usuarios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuarios = $this->usuariosRepository->findWithoutFail($id);

        

        return view('usuarios.show')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for editing the specified Usuarios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {   
        
         try {
           $id = Crypt::decrypt($request['id']);


        } catch (DecryptException $e) {
          
           return redirect('/home');

        }


        $usuarios = $this->usuariosRepository->findWithoutFail($id);
        $proveedores=proveedores::all();

        $usuarios_e = DB::table('users as u')
                           ->where('u.id',$id)
                          ->get();
        $usuarios_e = $usuarios_e[0];

               if(auth()->user()->id_tipo_usuario!=0){
                  return redirect('/home');
           }else{
                  
                return view('usuarios.edit',compact('usuarios_e','proveedores'));
           }
    }

    /**
     * Update the specified Usuarios in storage.
     *
     * @param  int              $id
     * @param UpdateUsuariosRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        
        $input =  $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }
        $id=$input['id'];


          try {
           $id = Crypt::decrypt($id);

        } catch (DecryptException $e) {
          
           return redirect('/home');

        }


        $usuarios = $this->usuariosRepository->findWithoutFail($id);      
        $usuarios = $this->usuariosRepository->update($input, $id);


        
       return redirect('usuarios');
    }

    /**
     * Remove the specified Usuarios from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy(Request $request)
    {   

         $input =  $request->all();
         $id=$input['id'];
         $usuarios = $this->usuariosRepository->findWithoutFail($id);
         DB::table('users')->delete($id);
         
         $usuarios = DB::table('users')
                          ->get();

        $options =  view('usuarios.table',compact('usuarios'))->render();
        
        return ($options);
        //return redirect(route('usuarios.index'));
    }

    public function asigna_contratista(Request $request)
    {

         $proveedores=proveedores::where('id',$request['id_proveedor'])->get();
         $proveedores=$proveedores[0];


   return  $respuesta=array(
          'nombre'=>$proveedores->nombre_proveedor,
     
        );


    }
}
