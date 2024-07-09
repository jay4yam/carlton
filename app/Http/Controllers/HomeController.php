<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Mail\BookingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Retourne la vue principale du site
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Gère le formulaire de demande de réservation
     * @param BookingRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function bookingRequest(BookingRequest $request)
    {
        try{
            Mail::to(['team-locations-cannes@michaelzingraf.com'])
                ->cc('marketing@michaelzingraf.com')
                ->queue(new BookingMail($request->all()));
        }catch (\Exception $exception){
            return back()->with('error', $exception->getMessage());
        }

        return redirect()->route('thanks');
    }

    /**
     * Affiche la page de remerciement
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function thanks()
    {
        return view('thanks');
    }
}
