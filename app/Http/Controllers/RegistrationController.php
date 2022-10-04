<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            try{
                $register = new Registration();
                $register->name_of_enterprise = $request->name_of_enterprise;
                $register->name_of_promoter = $request->name_of_promoter;
                $register->designation = $request->designation;
                $register->company_name = $request->company_name;
                $register->business_address = $request->business_address;
                $register->phone = $request->phone;
                $register->mobile = $request->mobile;
                $register->email = $request->email;
                $register->website = $request->website;
                $register->business_start_year = $request->business_start_year;
                $register->legal_status_id = $request->legal_status;
                $register->founder_active = $request->founder_active;
                $register->category_id = $request->category_id;
                $register->category_remark = $request->category_remark;
                $register->dish_proud = $request->dish_proud;
                $register->add_dish = $request->add_dish;
                $register->improve_dish = $request->improve_dish;
                $register->cashless = $request->cashless;
                $register->advertise_id = $request->advertise_id;
                $register->outlet_rating_id = $request->outlet_rating_id;
                $register->business_concept = $request->business_concept;
                $register->previous_gfa = $request->previous_gfa;
                $register->previous_gfa_year = $request->previous_gfa_year;
                $register->total_employee = $request->total_employee;
                $register->monthly_bill = $request->monthly_bill;
                $register->monthly_footfall = $request->monthly_footfall;
                $register->isp_name = $request->isp_name;
                $register->bank_name = $request->bank_name;
                $register->summary = $request->summary;
                $register->created_at = now();


                if($register->save()){
                    return redirect()->back()->with('message','Registration Completed Successfully!');
                }
                else{
                    return back()->withInput()->with('message', 'Something went wrong! Try Again!');
                }
                
            }catch(Exception $e){
                return $e;
            }
        }
        return view('register-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
