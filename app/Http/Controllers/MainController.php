<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Torann\GeoIP\Facades\GeoIP;

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
//        $location = GeoIP::getLocation();

//        Contact::create([
//            'name' => $request->name,
//            'email' => $request->email,
//            'message' => $request->message,
//            'geoip_country' => $location->iso_code,
//            'geoip_city' => $location->city,
//            'geoip_state' => $location->state,
//            'geoip_postal_code' => $location->postal_code,
//            'geoip_lat' => $location->lat,
//            'geoip_lng' => $location->lon,
//            'g_recaptcha_response' => $request['g-recaptcha-response'],
//        ]);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'geoip_country' => 'not implemented',
            'geoip_city' => 'not implemented',
            'geoip_state' => 'not implemented',
            'geoip_postal_code' => 'not implemented',
            'geoip_lat' => 'not implemented',
            'geoip_lng' => 'not implemented',
            'g_recaptcha_response' => $request['g-recaptcha-response'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

//        if ($location->iso_code !== 'JP') {
//            return back()->with('message', '日本国内からのお問い合わせのみ受け付けております。');
//        }

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
