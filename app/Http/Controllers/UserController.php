<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('users');
    }

    public function getUsers(Request $request) {
        /*$users = DB::select(DB::raw("SELECT u.id as id, 
                                        u.name as name, 
                                        u.email as email, 
                                        u.code as code, 
                                        u.password as password, 
                                        r.description as r_description, 
                                        u.id_seats as s_id, 
                                        s.name as s_name,
                                        st.name as st_name 
                                    FROM users u, 
                                        seats s, 
                                        status st, 
                                        role_user ru, 
                                        roles r 
                                    WHERE u.id_seats = s.id 
                                        AND u.id_status = st.id
                                        AND u.id = ru.user_id
                                        AND r.id = ru.role_id
                                        AND r.id <> 1"));*/
        $users = DB::select(DB::raw("SELECT u.id as id, 
                                        u.name as name, 
                                        u.email as email, 
                                        u.code as code, 
                                        u.password as password
                                    FROM users u"));
        return datatables()->of($users)
                ->addColumn('complet_surname', function($users) {
                    return $users->name;
                })
                ->addColumn('actions', function($users) {
                    return '<button class="btn btn-info" data-remote="'.$users->id.'" data-toggle="tooltip" data-placement="top" title="Editar">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                            <button class="btn btn-danger" data-remote="'.$users->id.'" data-toggle="tooltip" data-placement="top" title="Inactivar">
                                <i class="zmdi zmdi-delete"></i>
                            </button>';
                })
                ->rawColumns(array("complet_surname", "actions"))
                ->toJson();
    }

    public function getUserById(Request $request) {
        $user = User::where('id', '=', $request->id_user)->first();
        //$user = DB::table('users')->where('id', '=', $request->id_user)->first();
        //$user = DB::select('select id, name, code, email, id_seats from users where id = :id', ['id' => $request->id_user])[0];
        return \Response::json($user);
    }

    public function createUser(Request $request) {
        try {
            if ($request->password == $request->confirmation) {
                $user = User::where('code', '=', $request->code)->orWhere('email', '=', $request->email)->get();
                if (count($user) == 0) {
                    $user = User::create([
                        'name' => $request->name,
                        'code' => $request->code,
                        'email' => $request->email,
                        'id_status' => 1,
                        'password' => bcrypt($request->password),
                        'password2' => $request->password,
                    ]);
                    $user->roles()->attach(Role::where('name', $request->typeuser)->first());
                    $status = 'OK';
                    $text = 'Exito, usuario registrado.';
                } else {
                    $status = 'ERROR';
                    $text = 'Fallo, usuario existente.';
                }
            } else {
                $status = 'ERROR';
                $text = 'Fallo, las contraseñas no coinciden.';
            }
        } catch (\Illuminate\Database\QueryException $e) {
            Log::error('Exception: '.$e->getMessage());
            //Log::error('Exception: '.$e->getCode());
            $status = 'ERROR';
            $text = 'Fallo interno.';
        }
        $data = array('status'=>$status, 'text'=>$text);
        return \Response::json($data);
    }

    public function updateUser(Request $request) {
        try {
            $user = User::where('id', '=', $request->id)->first();
            Log::info($user->name);
            if (count($user) > 0) {
                $user->update([
                    'name' => $request->name,
                    /*'id_status' => 1,
                    'password' => bcrypt($request->password),
                    'password2' => $request->password,*/
                ]);
                //$user->roles()->attach(Role::where('name', $request->typeuser)->first());
                $status = 'OK';
                $text = 'Exito, usuario registrado.';
            } else {
                $status = 'ERROR';
                $text = 'Fallo, usuario existente.';
            }
        } catch (\Illuminate\Database\QueryException $e) {
            Log::error('Exception: '.$e->getMessage());
            //Log::error('Exception: '.$e->getCode());
            $status = 'ERROR';
            $text = 'Fallo interno.';
        }
        $data = array('status'=>$status, 'text'=>$text);
        return \Response::json($data);
    }

    /*public function updateUser(Request $request) {
        $status = 'ERROR';
        if ($request->status_change_password == 'No') {
            $user = User::find($request->id);
            $user->update(
                    ['name' => $request->name,
                     'id_seats' => $request->id_seats,
                    ]);
            $status = 'OK';
            $type_msg = 'success';
            $title_msg = 'Correcto';
            $text_msg = 'Se modificó la información con exito.';
        }

        if ($request->status_change_password == 'Si') {
            if ($request->password == $request->password_confirmation) {
                $user = User::find($request->id);
                if (Hash::check($request->current_password, $user->password)) {
                    $user->update(
                            ['name' => $request->name,
                             'id_seats' => $request->id_seats,
                             'password' => bcrypt($request->password),
                             'password2' => $request->password,
                            ]);
                    $status = 'OK';
                    $type_msg = 'success';
                    $title_msg = 'Correcto.';
                    $text_msg = 'Se actualizó la información de manera exitosa.';
                } else {
                    $type_msg = 'fail';
                    $title_msg = 'Falló.';
                    $text_msg = 'La contraseña actual no coincide.';
                }
            } else {
                $type_msg = 'fail';
                $title_msg = 'Falló.';
                $text_msg = 'La confirmación de la contraseñas no coincide.';
            }
        }
        $data = array('status'=>$status, 'type_msg'=>$type_msg, 'title_msg'=>$title_msg, 'text_msg'=>$text_msg);
        return \Response::json($data);
    }*/
}
