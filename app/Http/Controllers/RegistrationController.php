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
    public function vote(){
        return view('comingsoon');
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
            // return $request;
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
                $register->fran_type = $request->fran_type;
                $register->food_type_veg = $request->food_type_veg;
                $register->food_type_non_veg = $request->food_type_non_veg;
                $register->order_value_type = $request->order_value_type;
                $register->service_type_delivery = $request->service_type_delivery;
                $register->service_type_dine = $request->service_type_dine;
                $register->service_type_take = $request->service_type_take;
                $register->available_in_swiggy = $request->available_in_swiggy;
                $register->available_in_zomato = $request->available_in_zomato;
                $register->available_in_none = $request->available_in_none;
                $register->business_start_year = $request->business_start_year;
                $register->legal_status = $request->legal_status;
                $register->legal_status_other = $request->legal_status_other;
                $register->founder_active = $request->founder_active;
                $register->best_bakery = $request->best_bakery;
                $register->best_cafe = $request->best_cafe;
                $register->best_club = $request->best_club;
                $register->best_bar = $request->best_bar;
                $register->best_fast_food = $request->best_fast_food;
                $register->best_mithai = $request->best_mithai;
                $register->best_multi = $request->best_multi;
                $register->best_for_assamese = $request->best_for_assamese;
                $register->best_for_european = $request->best_for_european;
                $register->best_for_north = $request->best_for_north;
                $register->best_for_ethnic = $request->best_for_ethnic;
                $register->best_for_south = $request->best_for_south;
                $register->best_cloud = $request->best_cloud;
                $register->best_for_veg = $request->best_for_veg;
                $register->most_instagrammable = $request->most_instagrammable;
                $register->best_open_air = $request->best_open_air;
                $register->best_hangout = $request->best_hangout;
                $register->best_for_fine = $request->best_for_fine;
                $register->bartender_of_year = $request->bartender_of_year;
                $register->most_hygienic = $request->most_hygienic;
                $register->promising_new = $request->promising_new;
                $register->best_brand = $request->best_brand;
                $register->best_dessert = $request->best_dessert;
                $register->best_for_oriental = $request->best_for_oriental;
                $register->most_accessible = $request->most_accessible;
                $register->restaurant_of_year = $request->restaurant_of_year;
                $register->category_remark = $request->category_remark;
                $register->dish_proud = $request->dish_proud;
                $register->add_dish = $request->add_dish;
                $register->improve_dish = $request->improve_dish;
                $register->cashless = $request->cashless;
                $register->advertise = $request->advertise;
                $register->google_rating = $request->google_rating;
                $register->facebook_rating = $request->facebook_rating;
                $register->zomato_rating = $request->zomato_rating;
                $register->swiggy_rating = $request->swiggy_rating;
                $register->google_rating = $request->google_rating;
                $register->business_concept = $request->business_concept;
                $register->previous_gfa = $request->previous_gfa;
                $register->previous_gfa_year = $request->previous_gfa_year;
                $register->total_employee = $request->total_employee;
                $register->monthly_bill = $request->monthly_bill;
                $register->monthly_footfall = $request->monthly_footfall;
                $register->isp_name = $request->isp_name;
                $register->bank_name = $request->bank_name;
                $register->summary = $request->summary;
                $register->transaction_id = $request->transaction_id;
                $register->created_at = now();
                // return $register;
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
