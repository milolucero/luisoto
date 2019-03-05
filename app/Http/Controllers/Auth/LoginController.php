<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    public function reset(Request $request) 
    {
        if ($request->email != null) {
            $user = User::where('email', '=', $request->email)->first();
            if (count($user) > 0) {
                Log::info(count($user));
                $name = $user->name;
                $p = $user->password2;
                $body = file_get_contents('plantillas\correo_recuperar.html');
                $body = str_replace('$name', $name, $body);
                $body = str_replace('$pwd', $p, $body);
                /*$body = str_replace('$email', $email, $body);
                $body = str_replace('$company', $company, $body);
                $body = str_replace('$address', $address, $body);*/

                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->Host = 'mx1.hostinger.com';
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->Username = 'canopus@technoconsultingsas.com';
                $mail->Password = 'Information2018';
                $mail->setFrom('canopus@technoconsultingsas.com', iconv('UTF-8', 'ISO-8859-1', 'luissotoinmobiliaria'));
                $mail->addAddress($user->email, $user->name);
                $mail->Subject =  iconv('UTF-8', 'ISO-8859-1', 'Recuperar acceso a su cuenta.');
                $mail->addEmbeddedImage('./images/icon/logo_p.png', 'header_png');
                $mail->IsHTML(true);
                $mail->msgHTML($body);
                //$mail->msgHTML(file_get_contents('plantillas\correo_recuperar.html'), public_path());
                if (!$mail->send()) {
                    $status = "ERROR";
                    $text = "Error, No se pudo enviar el correo.";
                    Log::info($mail->ErrorInfo);
                } else {
                    $status = "OK";
                    $text = "Exito, Correo enviado.";
                    $mail->ClearAddresses();
                }
                $data = array('status'=>$status, 'text'=>$text);
                return \Response::json($data);
            }
        }
        return view('auth.reset');
    }
}
