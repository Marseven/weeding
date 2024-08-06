<?php

namespace App\Exports;

use App\Models\Registration;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RegistrationExport implements FromView
{


    public function __construct()
    {
    }

    public function view(): View
    {
        $registrations = Registration::with('attendee')->where('deleted', NULL)->get();

        return view('export.registration', [
            'registrations' => $registrations,
        ]);
    }
}
