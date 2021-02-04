<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class HomeController extends Controller {

    private $destination;

    public function __construct(
        Destination $destination
    )
    {
        $this->destination = $destination;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $destinations1 = $this->destination->getLastFlightCase1();
        $destinations2 = $this->destination->getLastFlightCase2();
        $destinations3 = $this->destination->getLastFlightCase3();

        return view('home', compact('destinations1', 'destinations2', 'destinations3'));
    }
}
