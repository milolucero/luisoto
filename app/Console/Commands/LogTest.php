<?php

namespace App\Console\Commands;

use App\User;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class LogTest extends Command {
    protected $signature = 'log:test';

    protected $description = 'Command test';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $path = storage_path("public");
        Log::info(base_path('public'));
        Log::info(public_path());
        Log::info($path);
        Log::info(__DIR__.'/public');

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'mx1.hostinger.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'canopus@technoconsultingsas.com';
        $mail->Password = 'Information2018';
        $mail->setFrom('canopus@technoconsultingsas.com', iconv('UTF-8', 'ISO-8859-1', 'Comprobante de Recaudo.'));
        $mail->addAddress('elleryrobles@gmail.com', 'Ellery R.');
        $mail->Subject =  iconv('UTF-8', 'ISO-8859-1', 'Encuentra aqui el detalle de su comprobante de recaudo.');
        //$mail->msgHTML(file_get_contents('correo_recaudo.html'), public_path());
        
        $mail->msgHTML(file_get_contents('correo_recaudo.html'), __DIR__.'/public');
        //$mail->msgHTML(file_get_contents($path));
        
        ////$mail->AltBody = 'This is a plain text message body';
        ////$mail->addAttachment('test.txt');

        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message sent!';
            $mail->ClearAddresses();
        }



        $users = User::where('notification', '0')->get();
        Log::info('Mi Comando Funciona! '.count($users));
        foreach ($users as $i => $user) {
            $mail->Subject =  iconv('UTF-8', 'ISO-8859-1', 'Encuentra aqui el detalle de su comprobante de recaudo.');
            $mail->msgHTML(file_get_contents('correo_recaudo.html'), public_path());
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message sent!';
                $mail->ClearAddresses();
            }
            Log::info($user->email);
        }
    }
}
