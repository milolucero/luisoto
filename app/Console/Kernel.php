<?php

namespace App\Console;

use App\User;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        //
    ];

    protected function schedule(Schedule $schedule) {
        // $schedule->command('inspire')
        //          ->hourly();

        //$schedule->command('log:test')->everyMinute();

        // Run once per week on Monday at 1 PM...
        /*$schedule->call(function () {
            //Log::info(base_path('public'));
            Log::info(public_path());

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
            
            $mail->msgHTML(file_get_contents('correo_recaudo.html'), public_path().'/public');
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
        })->everyMinute();*/
    }

    protected function commands() {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
