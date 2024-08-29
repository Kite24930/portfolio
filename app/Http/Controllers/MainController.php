<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index () {
        $structuredData = [
            "@context" => "https://schema.org",
            "@type" => "Person",
            "name" => "Kanta Torida",
            "jobTitle" => "システムエンジニア",
            "worksFor" => [
                "@type" => "Organization",
                "name" => "Project M, Inc.",
            ],
            "url" => route('index'),
            "sameAs" => [
                "https://github.com/Kite24930"
            ],
            "knowsAbout" => ['Laravel', 'Webシステム開発', 'Python']
        ];
        $data = [
            'structuredData' => $structuredData,
        ];
        return view('welcome', $data);
    }

    public function contact (Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);
        $data = $request->all();
        // Send email
        Mail::send('email.contact', ['contact' => $data], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('お問い合わせありがとうございます [Kanta Torida]');
            $message->from('no-reply@laugh-cat.com', 'Kanta Torida');
            $message->bcc('contact@laugh-cat.com');
        });
        return back()->with('message', 'お問い合わせを受け付けました。');
    }
}
