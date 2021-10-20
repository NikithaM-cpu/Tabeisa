<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MogenController extends Controller
{
    public function send()
    {
        $details = [
            'title' => 'Mail from AGDK',
            'body' => 'We are a good Company!'

        ];
        \Mail::to('kesselokinga@gmail.com')->send(new \App\Mail\ContactMail($details));


        // Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
        // {
        //     $message->subject('Mailgun and Laravel are awesome!');
        //     $message->from('alainkabutu@gmail.com', 'Website Name');
        //     $message->to('kesselokinga@gmail.com');
        // });

        return 'Email sent Successfully';
    }

    public function generateDocx()
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();


        $section = $phpWord->addSection();


        $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


        $section->addImage("https://www.itsolutionstuff.com/frontTheme/images/logo.png");
        $section->addText($description);


        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('helloWorld.docx'));
        } catch (Exception $e) {
        }


        return response()->download(storage_path('helloWorld.docx'));
    }
}
