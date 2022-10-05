@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12 col-xm-12 mx-auto">
            <div class="card">
                <div class="card-header row">
                    <div class="col-md-10">
                      <h3 class="p-3">{{ __('Dashboard') }}</h3>
                    </div>
                    <div class="col-md-2 float-right">
                      <a class="btn btn-sm btn-success p-3" target="_blank" href={{ Route('admin.print') }}>Export All</a>
                    </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-md-12 col-lg-12 col-xm-12 mx-auto table-responsive">
                        <table class="table table-sm table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nominee Details</th>
                                    <th scope="col">Overall Information About The Enterprise</th>
                                    <th scope="col">Why do you think your outlet is best in the category/categories you have contested for?</th>
                                    <th scope="col">The dish/ item that you are proud of in your menu?</th>
                                    <th scope="col">How often do you add a new dish/ item to your menu?</th>
                                    <th scope="col">Do you think you need to improve in any of the areas? If yes, where?</th>
                                    <th scope="col">Do you accept cashless payment modes like Debit/ Credit Card, eWallets etc. at your outlet?</th>
                                    <th scope="col">What are the different advertising modules have you opted so far to promote your Outlet?</th>
                                    <th scope="col">Please mention your outlet’s rating on the following platforms?</th>
                                    <th scope="col">How did you get your idea or concept for the business?</th>
                                    <th scope="col">Have you participated in the previous editions of Guwahati Food Awards?</th>
                                    <th scope="col">Other Information about the Enterprise</th>
                                    <th scope="col">Summary of your Enterprise</th>
                                    <th scope="col">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php($i = $registered->firstItem())
                                @foreach ($registered as $register)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>Name of the Enterprise: </b></label> <br>{{ $register->name_of_enterprise }}<br>
                                            <label class="form-label "> <b>Name of the Promoter/ Owner/ Head: </b></label><br>{{ $register->name_of_promoter }} <br>
                                            <label class="form-label "> <b>Designation:</b></label><br> {{ $register->designation }} <br>
                                            <label class="form-label "> <b>Company Name:</b></label><br> {{ $register->company_name }}<br>
                                            <label class="form-label "> <b>Business address:</b></label><br> {{ $register->business_address}}<br>
                                            <label class="form-label "> <b>Phone:</b></label> <br>{{ $register->phone }}<br>
                                            <label class="form-label "> <b>Email: </b></label><br> {{ $register->email }}<br>
                                            <label class="form-label "> <b>Website: </b></label> <br>{{ $register->website }}<br>
                                            <label class="form-label "> <b>Type of Restaurant: </b></label> <br>{{ $register->fran_type?'Franchise':'Non-Franchise' }}<br>
                                            <label class="form-label "> <b><u>Menu Options:- </u></b></label> <br>
                                                <label class="form-label "> <b>Veg: </b></label> {{ $register->food_type_veg ? 'Yes':'No'}}<br>
                                                <label class="form-label "> <b>Non-Veg: </b></label> {{ $register->food_type_non_veg ? 'Yes':'No' }}<br>
                                            <label class="form-label "> <b>Average Order Value per person: </b></label> <br>{{ $register->order_value_type }}<br>
                                            <label class="form-label "> <b><u>Services:- </u></b></label> <br>
                                                <label class="form-label "> <b>Delivery: </b></label> {{ $register->service_type_delivery ? 'Yes':'No'}}<br>
                                                <label class="form-label "> <b>Dine-In: </b></label> {{ $register->service_type_dine ? 'Yes':'No' }}<br>
                                                <label class="form-label "> <b>Take-Away: </b></label> {{ $register->service_type_take ? 'Yes':'No' }}<br>
                                            <label class="form-label "> <b><u>Available in: </u></b></label> <br>
                                                <label class="form-label "> <b>Swiggy: </b></label> {{ $register->available_in_swiggy ? 'Yes':'No'}}<br>
                                                <label class="form-label "> <b>Zomato: </b></label> {{ $register->available_in_zomato ? 'Yes':'No' }}<br>
                                                <label class="form-label "> <b>None: </b></label> {{ $register->available_in_none ? 'Yes':'No' }}<br>
                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>In which month/ year was the business started? : </b></label> <br>{{ $register->business_start_year }}<br>
                                            <label class="form-label "> <b>What is the legal status of the Enterprise? : </b></label><br>{{ $register->legal_status }} <br>
                                            @if($register->legal_status == 'Other')<label class="form-label "> <b>Please Specify : </b></label><br> {{ $register->legal_status_other }}@endif
                                            <label class="form-label "> <b>Is the Founder/Promoter still actively involved in top management? :</b></label><br> {{ $register->founder_active?'Yes':'No' }} <br>
                                            <label class="form-label "> <b>Categories Applied for :</b></label> <br>
                                                @if($register->best_bakery == 'Yes')<label class="form-label "><b>Best Bakery :</b></label> {{ $register->best_bakery }} <br>@endif
                                                @if($register->best_cafe == 'Yes')<label class="form-label "><b>Best Café :</b></label> {{ $register->best_cafe }} <br>@endif
                                                @if($register->best_club == 'Yes')<label class="form-label "><b>Best Club/ Lounge :</b></label> {{ $register->best_club }} <br>@endif
                                                @if($register->best_bar == 'Yes')<label class="form-label "><b>Best Pub/ Bar :</b></label> {{ $register->best_bar }} <br>@endif
                                                @if($register->best_fast_food == 'Yes')<label class="form-label "><b>Best Fast Food Joint :</b></label> {{ $register->best_fast_food }} <br>@endif
                                                @if($register->best_mithai == 'Yes')<label class="form-label "><b>Best Mithai Shop :</b></label> {{ $register->best_mithai }} <br>@endif
                                                @if($register->best_multi == 'Yes')<label class="form-label "><b>Best Multi-Cuisine Restaurant :</b></label> {{ $register->best_multi }} <br>@endif
                                                @if($register->best_for_assamese == 'Yes')<label class="form-label "><b>Best Restaurant For Assamese Cuisine :</b></label> {{ $register->best_for_assamese }} <br>@endif
                                                @if($register->best_for_european == 'Yes')<label class="form-label "><b>Best Restaurant For European Cuisine (Continental) :</b></label> {{ $register->best_for_european }} <br>@endif
                                                @if($register->best_for_north == 'Yes')<label class="form-label "><b>Best Restaurant for North Indian Cuisine :</b></label> {{ $register->best_for_north }} <br>@endif
                                                @if($register->best_for_ethnic == 'Yes')<label class="form-label "><b>Best Restaurant for Ethnic Cuisine :</b></label> {{ $register->best_for_ethnic }} <br>@endif
                                                @if($register->best_for_south == 'Yes')<label class="form-label "><b>Best Restaurant For South Indian Cuisine :</b></label> {{ $register->best_for_south }} <br>@endif
                                                @if($register->best_cloud == 'Yes')<label class="form-label "><b>Best Cloud Kitchen of the Year :</b></label> {{ $register->best_cloud }} <br>@endif
                                                @if($register->best_for_veg == 'Yes')<label class="form-label "><b>Best Restaurant For Vegetarian Food :</b></label> {{ $register->best_for_veg }} <br>@endif
                                                @if($register->most_instagrammable == 'Yes')<label class="form-label "><b>Most Instagrammable Restaurant :</b></label> {{ $register->most_instagrammable }} <br>@endif
                                                @if($register->best_open_air == 'Yes')<label class="form-label "><b>Best Open-Air Space :</b></label> {{ $register->best_open_air }} <br>@endif
                                                @if($register->best_hangout == 'Yes')<label class="form-label "><b>Best Hangout Place :</b></label> {{ $register->best_hangout }} <br>@endif
                                                @if($register->best_for_fine == 'Yes')<label class="form-label "><b>Best Restaurant for Fine Dining :</b></label> {{ $register->best_for_fine }} <br>@endif
                                                @if($register->bartender_of_year == 'Yes')<label class="form-label "><b>BarTender of the Year :</b></label> {{ $register->bartender_of_year }} <br>@endif
                                                @if($register->most_hygienic == 'Yes')<label class="form-label "><b>Most Hygienic and Sanitised Restaurants :</b></label> {{ $register->most_hygienic }} <br>@endif
                                                @if($register->promising_new == 'Yes')<label class="form-label "><b>Promising New Entrant :</b></label> {{ $register->promising_new }} <br>@endif
                                                @if($register->best_brand == 'Yes')<label class="form-label "><b>Best Brand for home Delivery :</b></label> {{ $register->best_brand }} <br>@endif
                                                @if($register->best_dessert == 'Yes')<label class="form-label "><b>Best Dessert & Ice Cream Parlour :</b></label> {{ $register->best_dessert }} <br>@endif
                                                @if($register->best_for_oriental == 'Yes')<label class="form-label "><b>Best Restaurant For Oriental Cuisine :</b></label> {{ $register->best_for_oriental }} <br>@endif
                                                @if($register->most_accessible == 'Yes')<label class="form-label "><b>Most Accessible Restaurant :</b></label> {{ $register->most_accessible }} <br>@endif
                                                @if($register->restaurant_of_year == 'Yes')<label class="form-label "><b>Restaurant of the Year :</b></label> {{ $register->restaurant_of_year }} <br>@endif

                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>Why do you think your outlet is best in the category/categories you have contested for? : </b></label> <br>{{ $register->category_remark }}<br>
                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>The dish/ item that you are proud of in your menu? : </b></label><br> {{ $register->dish_proud }}<br>
                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>How often do you add a new dish/ item to your menu? : </b></label><br> {{ $register->add_dish }}<br>
                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>Do you think you need to improve in any of the areas? If yes, where? : </b></label><br> {{ $register->improve_dish }}<br>
                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>Do you accept cashless payment modes like Debit/ Credit Card, eWallets etc. at your outlet? : </b></label> <br>{{ $register->cashless?'Yes':'No' }}<br>
                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>What are the different advertising modules have you opted so far to promote your Outlet? : </b></label> <br>{{ $register->advertise }}<br>
                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>Please mention your outlet’s rating on the following platforms? : </b></label> <br>{{ $register->outlet_rating }}<br>
                                            <label class="form-label "> <b>Google : </b></label> <br>{{ $register->google_rating }}<br>
                                            <label class="form-label "> <b>Facebook : </b></label><br>{{ $register->facebook_rating }} <br>
                                            <label class="form-label "> <b>Zomato :</b></label> <br>{{ $register->zomato_rating }} <br>
                                            <label class="form-label "> <b>Swiggy :</b></label> <br>{{ $register->swiggy_rating }}<br>
                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>How did you get your idea or concept for the business? : </b></label> <br>{{ $register->business_concept }}<br>
                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>Have you participated in the previous editions of Guwahati Food Awards? : </b></label><br> {{ $register->previous_gfa? 'Yes':'No' }}<br>
                                            @if($register->previous_gfa)<label class="form-label "> <b>Mention year(s) : </b></label><br> {{ $register->previous_gfa_year }}@endif
                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>Total No. of Employees : </b></label> <br>{{ $register->total_employee }}<br>
                                            <label class="form-label "> <b>Approx. Monthly Billing : </b></label><br>{{ $register->monthly_bill }} <br>
                                            <label class="form-label "> <b>Approx. Monthly Footfall :</b></label> <br>{{ $register->monthly_footfall }} <br>
                                            <label class="form-label "> <b>Name of the internet service provide :</b></label> <br>{{ $register->isp_name }}<br>
                                            <label class="form-label "> <b>Bank Name :</b></label> <br>{{ $register->bank_name }}<br>
                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>Summary of your Enterprise : </b></label> <br>{{ $register->summary }}<br>
                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>Status : </b></label> <br>{{ $register->status?'Active':'Deactive' }}<br>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    {{ $registered->links() }}
</div>
@endsection
