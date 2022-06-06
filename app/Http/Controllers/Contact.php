<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Contact extends Controller
{
    function showContactForm(){
        return view('contact');
    }

    function sendMail(Request $request){
        
        $subject = "Masukan Website Bro mobil oleh " . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
           // $mail->SMTPDebug = 2;  
           $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );                               // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'allaboutacoustic27@gmail.com';                 // SMTP username
            $mail->Password = 'byunghee123';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            // Siapa yang mengirim email
            $mail->setFrom("riskyshaan27@gmail.com", "Bro Mobil");

            // Siapa yang akan menerima email
            $mail->addAddress('allaboutacoustic27@gmail.com', 'Risky Saputra');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);
            
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return view('contact');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }
}