<?php

namespace App\Http\Controllers;

use App\Exports\RegistrationsExport;
use App\Models\Registration;
use Maatwebsite\Excel\Facades\Excel;
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
        $registered = Registration::where('status', true)
                        ->orderBy('created_at')
                        ->simplePaginate(2);
        // return $registered;
        return view('home', ['registered'=>$registered]);
    }

    public function printAll(){
        return Excel::download(new RegistrationsExport, 'registration.xlsx');
        // $registered = Registration::where('status', true)
        // ->get();
        // $data = [
        //     'registered'=>$registered
        // ];
        // view()->share($data);
        // $pdf = PDF::loadView('print')->setPaper('a4');
        // return $pdf->inline('print_all.pdf');
    }
}
