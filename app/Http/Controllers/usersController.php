<?php

namespace App\Http\Controllers;
use App\Models\users;
use DB;
use App\Http\Requests\CreateusersRequest;
use App\Http\Requests\UpdateusersRequest;
use App\Repositories\usersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class usersController extends AppBaseController
{
    /** @var  usersRepository */
    private $usersRepository;

    public function __construct(usersRepository $usersRepo)
    {
        $this->usersRepository = $usersRepo;
    }

    /**
     * Display a listing of the users.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->usersRepository->all();

        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new users.
     *
     * @return Response
     */
    public function create(Request $request)
    {   
        $tipo=$request['tipo'];
        return view('users.fields',compact('tipo'));
   
    }

    /**
     * Store a newly created users in storage.
     *
     * @param CreateusersRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $input = $request->all();
        $valida=users::where('email',$input['email'])->count();

        if($valida>=1){
            return 1;
        }else{

            if (!empty($input['password'])) { 
                $input['password'] = Hash::make($input['password']);
            } else {
                unset($input['password']);
            }

            $users = $this->usersRepository->create($input);
            return 0;   
        }
    }

    /**
     * Display the specified users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('users', $users);
    }

    /**
     * Show the form for editing the specified users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {
        

        $id=$request['id'];
        $tipo=$request['tipo'];

        $users = $this->usersRepository->find($id);
        return view('users.fields',compact('tipo','users'));
  
    }

    /**
     * Update the specified users in storage.
     *
     * @param int $id
     * @param UpdateusersRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        
        $id=$request['idu'];
        $input = $request->all();

        $valida_correo=users::where('email',$request['email'])->count();

        if($valida_correo>=1){

            $valida=users::where('email',$request['email'])->get();
            $valida=$valida[0];
            $id_valida=$valida['id'];

            if($id_valida==$id){


                if (!empty($input['password'])) { 
                    $input['password'] = Hash::make($input['password']);
                } else {
                    unset($input['password']);
                }

               $users = $this->usersRepository->find($id);
               $users = $this->usersRepository->update($input, $id);

                return 0;

            }else{

                return 1;
            }

        }else{

               if (!empty($input['password'])) { 
                    $input['password'] = Hash::make($input['password']);
               } else {
                    unset($input['password']);
               }

               $users = $this->usersRepository->find($id);
               $users = $this->usersRepository->update($input, $id);

            return 0;

        }
        
    }

    /**
     * Remove the specified users from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy(Request $request)
    {
        
        $id=$request['id'];
        DB::table('users')->delete($id);

    }

    public function actualiza_usuarios(Request $request)
    {

        $users = $this->usersRepository->all();
         return view('users.table',compact('users'));

    }


    public function activa_usuario(Request $request)
    {

        $estatus=users::where('id',$request['id'])->get();
        $estatus=$estatus[0];
        $activo=$estatus->activo;
        $id=$request['id'];

        $input = $request->all();

        if($activo==1){

                $input['activo']=0;
        }else{
                $input['activo']=1;
        }

            
               $users = $this->usersRepository->find($id);
               $users = $this->usersRepository->update($input, $id);
    }

    
}
