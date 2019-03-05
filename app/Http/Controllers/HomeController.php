<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use App\Fuentes;
use App\Recaudo;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Excel;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        
        if ($request->user()->authorizeRoles(['administrador'])) {
            return view('home');
        } else if ($request->user()->authorizeRoles(['inquilino'])) {
            return view('tenant');
        } else if ($request->user()->authorizeRoles(['propietario'])) {
            return view('owner');
        } /*else {
            return view('/');
        }*/
    }

    public function tenant(Request $request) {
        return view('tenant');
    }

    public function store(Request $request) {
        $status = 'ERROR';
        $text = 'Fallo interno.';
        if($request->file('filenames')) {
            $id_user = $request->id_user;
            $file = $request->file('filenames');
            $name = substr($file->getClientOriginalName(), 0, strlen($file->getClientOriginalName())-4);
            $type = substr($name, 15);
            //Archivos de Recaudo
            if ($type == '01') {
                $idFuente = Fuentes::create([
                    'id_user' => $id_user,
                    'name' => $file->getClientOriginalName(),
                ])['id'];
                $data = Excel::load($file->getRealPath())->get()->toArray();
                foreach ($data as $obj) {
                    $value = $obj[$name];
                    $reg = explode("|", $value);
                    //Log::info($reg);
                    if (count($reg) == 25) {
                        // crear los usuarios
                        if (strlen(trim($reg[24])) > 0) {
                            if (strlen(trim($reg[24])) > 0) {
                                if (filter_var(trim($reg[24]), FILTER_VALIDATE_EMAIL)) {
                                    if (count(User::where('code', '=', ltrim($reg[2], '0'))->get()) == 0) {
                                        $user = User::create([
                                            'name'      => rtrim(ltrim($reg[9])),
                                            'code'      => ltrim($reg[2], '0'),
                                            'email'     => strtolower(trim($reg[24])),
                                            'id_status' => 1,
                                            'password'  => bcrypt(ltrim($reg[2], '0')),
                                            'password2' => ltrim($reg[2], '0'),
                                        ]);
                                        $user->roles()->attach(Role::where('name', 'inquilino')->first());
                                    }
                                }
                            }
                        }

                        Recaudo::create([
                            'id_fuentes' => $idFuente,
                            'tipo' => $reg[0],
                            'cuenta' => $reg[1],
                            'documento' => ltrim($reg[2], '0'),
                            'valor_neto_1' => ltrim($reg[3], '0'),
                            'fecha_max_recaudo_1' => $reg[4],
                            'valor_neto_2' => ltrim($reg[5], '0'),
                            'fecha_max_recaudo_2' => $reg[6],
                            'valor_neto_3' => ltrim($reg[7], '0'),
                            'fecha_max_recaudo_3' => $reg[8],
                            'nombre_inquilino' => rtrim(ltrim($reg[9])),
                            'direccion_inmueble' => rtrim(ltrim($reg[10])),
                            'ciudad_inmueble' => rtrim(ltrim($reg[11])),
                            'mes_a_pagar' => rtrim(ltrim($reg[12])),
                            'año_mes_a_pagar' => $reg[13],
                            'valor_canon_mensual' => ltrim($reg[14], '0'),
                            'valor_iva_canon' => ltrim($reg[15], '0'),
                            'valor_administracion' => ltrim($reg[16], '0'),
                            'valor_servicios' => ltrim($reg[17], '0'),
                            'gastos_bancarios' => ltrim($reg[18], '0'),
                            'valor_retefuente' => ltrim($reg[19], '0'),
                            'valor_retencion_iva' => ltrim($reg[20], '0'),
                            'valor_retencion_ica' => ltrim($reg[21], '0'),
                            'valor_retencion_cree' => ltrim($reg[22], '0'),
                            'mensaje' => rtrim(ltrim($reg[23])),
                            'email' => strtolower(trim($reg[24])),
                        ]);
                    }
                }
                $status = 'OK';
                $text = 'Exito, se cargó la información correctamente.';
            }

        }

        /*$mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'mx1.hostinger.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'canopus@technoconsultingsas.com';
        $mail->Password = 'Information2018';
        $mail->setFrom('canopus@technoconsultingsas.com', iconv('UTF-8', 'ISO-8859-1', 'Comprobante de Recaudo.'));
        
        $users = User::where('notification', '0')->get();
        Log::info('Mi Comando Funciona! '.count($users));
        foreach ($users as $user) {
            $mail->addAddress('elleryrobles@gmail.com', 'Ellery R.');
            $mail->Subject =  iconv('UTF-8', 'ISO-8859-1', 'Encuentra aqui el detalle de su comprobante de recaudo.');
            $mail->msgHTML(file_get_contents('correo_recaudo.html'), public_path());
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message sent!';
                $mail->ClearAddresses();
                Log::info($user->email);
            }
        }*/


        /*$this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'mimes:txt,doc,docx,csv,pdf,zip'
        ]);
        
        if($request->hasfile('filenames')) {
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'mx1.hostinger.com';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = 'canopus@technoconsultingsas.com';
            $mail->Password = 'Information2018';
            $mail->setFrom('canopus@technoconsultingsas.com', iconv('UTF-8', 'ISO-8859-1', 'Comprobante de Recaudo.'));

            foreach($request->file('filenames') as $file) {
                $idFuenteRecaudo = FuenteRecaudo::create([
                    'name' => $file->getClientOriginalName(),
                ])['id'];
                //Log::info($idFuenteRecaudo);
                $name = substr($file->getClientOriginalName(), 0, strlen($file->getClientOriginalName())-4);
                if (strstr($name, 'volantes')) {
                    $data = Excel::load($file->getRealPath())->get()->toArray();
                    foreach ($data as $obj) {
                        //Log::info($obj);
                        $value = $obj[$name];
                        $reg = explode("|", $value);
                        if (count($reg) == 25) {
                            //Log::info($idFuenteRecaudo.' - ');
                            //Log::info($reg);

                            if (trim($reg[24])) {
                                if (count(User::where('code', '=', ltrim($reg[2], '0'))->get()) == 0) {
                                    $user = User::create([
                                        'name' => rtrim(ltrim($reg[9])),
                                        'code' => ltrim($reg[2], '0'),
                                        'email' => strtolower(trim($reg[24])),
                                        'id_status' => 1,
                                        'password' => bcrypt(ltrim($reg[2], '0')),
                                        'password2' => ltrim($reg[2], '0'),
                                    ]);
                                    $user->roles()->attach(Role::where('name', 'inquilino')->first());
                                    //$this->sendMail();
                                    $mail->addAddress('elleryrobles@gmail.com', 'Ellery R.');
                                    $mail->Subject =  iconv('UTF-8', 'ISO-8859-1', 'Encuentra aqui el detalle de su comprobante de recaudo.');
                                    $mail->msgHTML(file_get_contents('correo_recaudo.html'), public_path());
                                    $mail->send();
                                    $mail->ClearAddresses();
                                }
                            }

                            Recaudo::create([
                                'id_fuente_recaudos' => $idFuenteRecaudo,
                                'tipo' => $reg[0],
                                'cuenta' => $reg[1],
                                'documento' => ltrim($reg[2], '0'),
                                'valor_neto_1' => ltrim($reg[3], '0'),
                                'fecha_max_recaudo_1' => $reg[4],
                                'valor_neto_2' => ltrim($reg[5], '0'),
                                'fecha_max_recaudo_2' => $reg[6],
                                'valor_neto_3' => ltrim($reg[7], '0'),
                                'fecha_max_recaudo_3' => $reg[8],
                                'nombre_inquilino' => rtrim(ltrim($reg[9])),
                                'direccion_inmueble' => rtrim(ltrim($reg[10])),
                                'ciudad_inmueble' => rtrim(ltrim($reg[11])),
                                'mes_a_pagar' => rtrim(ltrim($reg[12])),
                                'año_mes_a_pagar' => $reg[13],
                                'valor_canon_mensual' => ltrim($reg[14], '0'),
                                'valor_iva_canon' => ltrim($reg[15], '0'),
                                'valor_administracion' => ltrim($reg[16], '0'),
                                'valor_servicios' => ltrim($reg[17], '0'),
                                'gastos_bancarios' => ltrim($reg[18], '0'),
                                'valor_retefuente' => ltrim($reg[19], '0'),
                                'valor_retencion_iva' => ltrim($reg[20], '0'),
                                'valor_retencion_ica' => ltrim($reg[21], '0'),
                                'valor_retencion_cree' => ltrim($reg[22], '0'),
                                'mensaje' => rtrim(ltrim($reg[23])),
                                'email' => strtolower(trim($reg[24])),
                            ]);
                        }
                        
                        //$exp_row = explode("|", $row);
                        //Log::info($exp_row[1]);

                        //if (count($name) > 0) {
                            //$exp_row = explode("|", $name);
                            //Log::info($exp_row[1]);
                            //Log::info($row[$name]);
                            //Log::info($row);
                        //}

                        //$data['title'] = $row['title'];
                        //$data['description'] = $row['description'];
                        //if(!empty($data)) {
                        //    DB::table('post')->insert($data);
                        //}
                    }
                }
            }
        }*/

        /*if($request->hasfile('filenames')) {
            foreach($request->file('filenames') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/files/', $name);
                $data = \Excel::load(public_path().'/files/'.$name)->get();
                //Log::info($data->count());
                if ($data->count()) {
                    foreach ($data as $row) {
                        //Log::info($row);
                        Log::info(json_encode($row));
                        $col[] = explode(":", $row);
                        //Log::info($col);
                        //for ($i=0; $i<count($col); $i++) {
                        //    Log::info($col[$i]);
                        //}

                        //$row[] = explode("|", $value);
                        //Log::info(count($value).' '.$value);
                    }
                }
            }
            //return \Excel::download($data, 'users.xlsx');
        }*/

         //$file= new File();
         //$file->filenames=json_encode($data);
         //$file->save();
         //return back()->with('success', 'Data Your files has been successfully added');
        //return view('home');

            /*$status = 'ERROR';
            $type_msg = 'fail';
            $title_msg = 'Error';
            $text_msg = 'Intento de registro fallido.';
            $data = array('status'=>$status, 'type_msg'=>$type_msg, 'title_msg'=>$title_msg, 'text_msg'=>$text_msg);*/
            $data = array('status'=>$status, 'text'=>$text);
        return \Response::json($data);
    }

    public function notificationUserNew() {
        $phpmailer = new PHPMailer;
        
        //Notificar usuarios nuevos
        $users = User::where('notification', '=', '0')->get();
        if (count($users) > 0) {
            foreach ($users as $user) {
                if ($this->sendMail($phpmailer, 'Acceso a su cuenta.', 'plantillas\correo_usuario.html', 'elleryrobles@gmail.com', $user->name)) {
                    $user->update(['notification' => 1]);
                }
            }
        }

        //Notificar comporbantes de recaudos
        $recaudos = Recaudo::where('notification', '=', '0')->get();
        if (count($recaudos) > 0) {
            foreach ($recaudos as $recuado) {
                $user = User::where('code', '=', $recuado->documento)->first();
                if (count($user) > 0) {
                    if ($this->sendMail($phpmailer, 'Comprobante de recaudo.', 'plantillas\correo_recaudo.html', 'elleryrobles@gmail.com', $user->name)) {
                        $recuado->update(['notification' => 1]);
                    }
                }
            }
        }

    }

    /*public function notificationPayment() {
        $phpmailer = new PHPMailer;
        $recuado = DB::select(DB::raw("SELECT f.id as id, 
                                        u.name as u_name, 
                                        f.name as name, 
                                        f.created_at as created_at 
                                    FROM fuentes f, users u 
                                    WHERE f.id_user = u.id"));

        Log::info(count($recuado));

        if (count($recuado) > 0) {
            foreach ($recuado as $recuado) {
                if ($this->sendMail($phpmailer, 'Comprobante de recaudo.', 'plantillas\correo_recaudo.html', 'elleryrobles@gmail.com', 'test')) {
                    $recuado->update(['notification' => 1]);
                }
            }
        }
    }*/

    public function sendMail(PHPMailer $phpmailer, $subject, $template, $mail, $name) {
        $phpmailer->isSMTP();
        $phpmailer->Host = 'mx1.hostinger.com';
        $phpmailer->Port = 587;
        $phpmailer->SMTPAuth = true;
        $phpmailer->Username = 'canopus@technoconsultingsas.com';
        $phpmailer->Password = 'Information2018';
        $phpmailer->setFrom('canopus@technoconsultingsas.com', iconv('UTF-8', 'ISO-8859-1', 'luissotoinmobiliaria'));
        $phpmailer->addAddress($mail, $name);
        $phpmailer->Subject =  iconv('UTF-8', 'ISO-8859-1', $subject);
        $phpmailer->msgHTML(file_get_contents($template));
        if (!$phpmailer->send()) {
            //Log::info($phpmailer->ErrorInfo);
            return false;
        } else {
            $phpmailer->ClearAddresses();
            return true;
        }
    }
    
    /*public function importFile(Request $request){
        if($request->hasFile('sample_file')){
            $path = $request->file('sample_file')->getRealPath();
            $data = \Excel::load($path)->get();

            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = ['title' => $value->title, 'body' => $value->body];
                }

                if(!empty($arr)){
                    DB::table('products')->insert($arr);
                    dd('Insert Recorded successfully.');
                }
            }
        }
        dd('Request data does not have any files to import.');      
    }*/

    public function getFiles(Request $request) {
        $files = DB::select(DB::raw("SELECT f.id as id, 
                                        u.name as u_name, 
                                        f.name as name, 
                                        f.created_at as created_at 
                                    FROM fuentes f, users u 
                                    WHERE f.id_user = u.id"));
        return datatables()->of($files)
                ->addColumn('actions', function($files) {
                    return '<button class="btn btn-danger" data-remote="'.$files->id.'" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                <i class="zmdi zmdi-delete"></i>
                            </button>';
                })
                ->rawColumns(array("actions"))
                ->toJson();
    }

    public function deleteInfoFile(Request $request) {
        $status = 'ERROR';
        try {
            //$file = Fuentes::find($request->id_file);
            //$file->update(['name' => 'eliminar3']);
            Recaudo::where('id_fuentes', $request->id_file)->delete();
            Fuentes::where('id', $request->id_file)->delete();
            $status = 'OK';
            $text = 'Se eliminó la información de manera exitosa.';
            /*$type_msg = 'success';
            $title_msg = 'Correcto.';
            $text_msg = 'Se deshabilitó el usuario de manera exitosa.';*/
        } catch (\Illuminate\Database\QueryException $e) {
            Log::error('Exception: '.$e->getMessage());
            $status = 'ERROR';
            $text = 'Fallo interno.';
            /*$type_msg = 'fail';
            $title_msg = 'Error';
            $text_msg = 'Falló deshabilitar el usuario.';*/
        }
        //$data = array('status'=>$status, 'type_msg'=>$type_msg, 'title_msg'=>$title_msg, 'text_msg'=>$text_msg);
        $data = array('status'=>$status, 'text'=>$text);
        return \Response::json($data);
    }
}
