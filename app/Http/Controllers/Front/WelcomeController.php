<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FileController;
use App\Models\Activity;
use App\Models\Attendee;
use App\Models\Entreprise;
use App\Models\Importation;
use App\Models\Registration;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        return view('front.welcome');
    }

    public function item($attendee)
    {
        $registration = Registration::with('attendee')->where('attendee_id', $attendee)->get()->first();

        if ($registration) {
            $url = url('attendee/' . $attendee);

            $qrcode = QrCode::size(300)->format('png')->merge('/public/front/images/logo-img.png', .4)->generate($url);
            return view('front.attendee', compact('registration', 'qrcode'));
        } else {
            return back()->with('error', "Aucun billet trouvé");
        }
    }

    public function store(Request $request)
    {
        $rules = [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->with('error', $validator->errors());
        }

        $attendee = new Attendee();

        $attendee->last_name = $request->last_name;
        $attendee->first_name = $request->first_name;
        $attendee->phone = $request->phone;
        $attendee->email = $request->email;

        if ($attendee->save()) {
            $registration = new Registration();

            $registration->attendee_id = $attendee->id;
            $registration->presence = $request->presence;

            $url = url('attendee/' . $attendee->id);

            //$qrcode = QrCode::size(300)->format('png')->merge('/public/front/images/logo-img.png', .4)->generate($url);
            $qrcode = QrCode::size(300)->generate($url);

            if ($registration->save()) {
                $registration->load(['attendee']);
                return view('front.attendee', compact('registration', 'qrcode'))->with('success', 'Votre inscription a bien été enregistrée. <a href="#" target="_blank">Télécharger votre Qr Code ici</a>.');
            }
        }

        return back()->with('error', 'Une erreur est survenue lors de l\'inscription.');
    }

    public function search(Request $request)
    {
        $rules = [
            's' => ['required'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->with('success', $validator->errors());
        }

        $attendee = Attendee::where('email', $request->s)->orWhere('phone', $request->s)->get()->first();

        if ($attendee) {
            $url = url('attendee/' . $attendee->id);

            $qrcode = QrCode::size(300)->format('png')->merge('/public/front/images/logo-img.png', .4)->generate($url);

            $registration = Registration::with('attendee')->where('attendee_id', $attendee->id)->get()->first();
            return view('front.attendee', compact('registration', 'qrcode'));
        } else {
            return back()->with('error', "Aucun billet trouvé");
        }
    }
}
