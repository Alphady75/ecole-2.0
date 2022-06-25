<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('accueil');
    }

    public function about()
    {
        return view('about');
    }

    public function ateliers()
    {
        return view('ateliers');
    }

    public function actualites()
    {
        $actualites = Actualite::orderBy('created_at', 'desc')->paginate(6);

        return view('actualites', compact('actualites'));
    }

    public function showActualite($slug)
    {
        $actualite = Actualite::where('slug', $slug)->first();

        return view('show-actualite', compact('actualite'));
    }

    public function contact()
    {
        return view('contact');
    }
}
