<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $registered = DB::table('registrations as r')
                        ->select('r.*','ls.legal_status_name','or.outlet_rating_name','a.advertise_name')
                        ->join('legal_status as ls','ls.id','r.legal_status_id')
                        ->join('advertise as a','a.id','r.advertise_id')
                        ->join('outlet_rating as or','or.id','r.outlet_rating_id')
                        ->where('r.status', true)
                        ->orderBy('created_at')
                        ->paginate(2);
        // return $registered;
        return view('home', ['registered'=>$registered]);
    }

    public function printAll(){
       $registered = DB::table('registrations as r')
                    ->select('r.*','ls.legal_status_name','or.outlet_rating_name','a.advertise_name')
                    ->join('legal_status as ls','ls.id','r.legal_status_id')
                    ->join('advertise as a','a.id','r.advertise_id')
                    ->join('outlet_rating as or','or.id','r.outlet_rating_id')
                    ->where('r.status', true)
                    ->get();
        $data = [
            'registered'=>$registered
        ];
        view()->share($data);
        $pdf = PDF::loadView('print')->setPaper('a4');
        return $pdf->inline('print_all.pdf');
    }
}
