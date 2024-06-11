<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\CodeCoverage\NoCodeCoverageDriverWithPathCoverageSupportAvailableException;


class EmailController extends Controller
{
    public function sendEmail()
    {
        $toEmail = 'hlo000kumar@gmail.com';
        $msg = 'Congratulations, Mail Send Successfully';
        $subject = 'Subject of This Email';
        $name = 'VIKAS KUMAR';

        $response = Mail::to($toEmail)->Send(new WelcomeEmail($msg, $subject, $name));
        dd($response);
    }






    public function EmailView()
    {
        return view('mail.mail_temp');
    }
}
