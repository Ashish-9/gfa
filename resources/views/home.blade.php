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
                      <a class="btn btn-sm btn-success p-3" target="_blank" href={{ Route('admin.print') }}>Print All</a>
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
                                            <label class="form-label "> <b>Website: </b></label> <br>{{ $register->website }}
                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>In which month/ year was the business started? : </b></label> <br>{{ $register->business_start_year }}<br>
                                            <label class="form-label "> <b>What is the legal status of the Enterprise? : </b></label><br>{{ $register->legal_status_name }} <br>
                                            <label class="form-label "> <b>Is the Founder/Promoter still actively involved in top management? :</b></label><br> {{ $register->founder_active?'Yes':'No' }} <br>
                                            <label class="form-label "> <b>Categories Applied for :</b></label> <br>{{ $register->category_id }}<br>
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
                                            <label class="form-label "> <b>What are the different advertising modules have you opted so far to promote your Outlet? : </b></label> <br>{{ $register->advertise_name }}<br>
                                        </td>
                                        <td class="text-nowrap">
                                            <label class="form-label "> <b>Please mention your outlet’s rating on the following platforms? : </b></label> <br>{{ $register->outlet_rating_name }}<br>
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
            <div class="d-flex justify-content-center">
                {{ $registered->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
