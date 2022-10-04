<!DOCTYPE html>
<html lang="en">

<head>

    <title>Registered Users</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;

            font-size: 16px;
            font-kerning: normal;
            text-rendering: optimizeLegibility;
            line-height: 1.5;
            font-weight: 100;
        }

        .loi {
            width: 40%;
            margin-left: 30%;
            margin-top: 20px;
            text-align: center;
        }

        strong {
            font-weight: bold;
        }

        .fw-bold {
            font-weight: bold;
        }

        .border-table,
        .border-table td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        th {
            background-color: black;
            color: white;
            padding: 5px;
        }

    </style>
</head>

<body>
    <div>
        <div class="loi">
            <h3 style="background-color: #222; padding: 5px; color: #fff;">Registered Users</h3>
        </div>
        @php($i = 1)
        @foreach ($registered as $register)
        <div style="text-align: left;">
            <h2>{{ $i++ }}. {{ $register->name_of_enterprise }}</h2>
            <h3>Nominee Details</h3>
            <table class="border-table">
                <thead>
                    <th>Name of the Enterprise</th>
                    <th>Name of the Promoter/ Owner/ Head</th>
                    <th>Designation</th>
                    <th>Company Name</th>
                    <th>Business address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Website</th>
                </thead>
                <tbody>
                        <td>{{ $register->name_of_enterprise }}</td>
                        <td>{{ $register->name_of_promoter }}</td>
                        <td>{{ $register->designation }}</td>
                        <td>{{ $register->company_name }}</td>
                        <td>{{ $register->business_address}}</td>
                        <td>{{ $register->phone }}</td>
                        <td>{{ $register->email }}</td>
                        <td>{{ $register->website }}</td>                    
                </tbody>
            </table>
            <h3>Overall Information About The Enterprise</h3>
            <table class="border-table">
                <thead>
                    <th>In which month/ year was the business started?</th>
                    <th>What is the legal status of the Enterprise?</th>
                    <th>Is the Founder/Promoter still actively involved in top management?</th>
                    <th>Categories Applied for</th>
                </thead>
                <tbody>
                        <td>{{ $register->business_start_year }}</td>
                        <td>{{ $register->legal_status_name }}</td>
                        <td>{{ $register->founder_active?'Yes':'No' }}</td>
                        <td>{{ $register->category_id }}</td>                 
                </tbody>
            </table>
            <h3>Why do you think your outlet is best in the category/categories you have contested for?</h3>
            <table class="border-table">
                <thead>
                    <th>Why do you think your outlet is best in the category/categories you have contested for?</th>
                </thead>
                <tbody>
                        <td>{{ $register->category_remark }}</td>              
                </tbody>
            </table>
            <h3>The dish/ item that you are proud of in your menu?</h3>
            <table class="border-table">
                <thead>
                    <th>The dish/ item that you are proud of in your menu?</th>
                </thead>
                <tbody>
                        <td>{{ $register->dish_proud }}</td>              
                </tbody>
            </table>
            <h3>How often do you add a new dish/ item to your menu?</h3>
            <table class="border-table">
                <thead>
                    <th>How often do you add a new dish/ item to your menu?</th>
                </thead>
                <tbody>
                        <td>{{ $register->add_dish }}</td>              
                </tbody>
            </table>
            <h3>Do you think you need to improve in any of the areas? If yes, where?</h3>
            <table class="border-table">
                <thead>
                    <th>Do you think you need to improve in any of the areas? If yes, where?</th>
                </thead>
                <tbody>
                        <td>{{ $register->improve_dish }}</td>              
                </tbody>
            </table>
            <h3>Do you accept cashless payment modes like Debit/ Credit Card, eWallets etc. at your outlet?</h3>
            <table class="border-table">
                <thead>
                    <th>Do you accept cashless payment modes like Debit/ Credit Card, eWallets etc. at your outlet?</th>
                </thead>
                <tbody>
                        <td>{{ $register->cashless?'Yes':'No' }}</td>              
                </tbody>
            </table>
            <h3>What are the different advertising modules have you opted so far to promote your Outlet?</h3>
            <table class="border-table">
                <thead>
                    <th>What are the different advertising modules have you opted so far to promote your Outlet?</th>
                </thead>
                <tbody>
                        <td>{{ $register->advertise_name }}</td>              
                </tbody>
            </table>
            <h3>Please mention your outlet’s rating on the following platforms?</h3>
            <table class="border-table">
                <thead>
                    <th>Please mention your outlet’s rating on the following platforms?</th>
                </thead>
                <tbody>
                        <td>{{ $register->outlet_rating_name }}</td>              
                </tbody>
            </table>
            <h3>How did you get your idea or concept for the business?</h3>
            <table class="border-table">
                <thead>
                    <th>How did you get your idea or concept for the business?</th>
                </thead>
                <tbody>
                        <td>{{ $register->business_concept }}</td>              
                </tbody>
            </table>
            <h3>Have you participated in the previous editions of Guwahati Food Awards?</h3>
            <table class="border-table">
                <thead>
                    <th>Have you participated in the previous editions of Guwahati Food Awards?</th>
                    @if ($register->previous_gfa)
                    <th>Mention year(s)</th>
                    @endif
                </thead>
                <tbody>
                        <td>{{ $register->previous_gfa? 'Yes':'No' }}</td>
                        @if ($register->previous_gfa)
                            <td>{{ $register->previous_gfa_year }}</td>
                        @endif              
                </tbody>
            </table>
            <h3>Other Information about the Enterprise</h3>
            <table class="border-table">
                <thead>
                    <th>Total No. of Employees</th>
                    <th>Approx. Monthly Billing</th>
                    <th>Approx. Monthly Footfall</th>
                    <th>Name of the internet service provide</th>
                    <th>Bank Name</th>
                </thead>
                <tbody>
                        <td>{{ $register->total_employee }}</td>
                        <td>{{ $register->monthly_bill }}</td>
                        <td>{{ $register->monthly_footfall }}</td>
                        <td>{{ $register->isp_name }}</td>    
                        <td>{{ $register->bank_name }}</td>                 
             
                </tbody>
            </table>
            <h3>Summary of your Enterprise</h3>
            <table class="border-table">
                <thead>
                    <th>Summary of your Enterprise</th>
                </thead>
                <tbody>
                        <td>{{ $register->summary }}</td>              
                </tbody>
            </table>
        </div>
        @endforeach
       

        {{-- <div style="text-align: left;">
            <h2>Building Details</h2>
            <h4><u>Building Related Details</u></h4>
            <table class="border-table">
                <thead>
                    <th>#</th>
                    <th>Particulars</th>
                    <th>Norms</th>
                    <th>Availability</th>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Building Plan Document</td>
                        <td>Mandatory</td>
                        <td>@if($institute->building_plan_document) Uploaded @else Not Uploaded @endif</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Building Completion/ Occupancy Certificate</td>
                        <td>Mandatory</td>
                        <td>@if($institute->building_completion_certificate) Uploaded @else Not Uploaded @endif</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Fire Safety Certificate(s)</td>
                        <td>Mandatory</td>
                        <td>@if($institute->fire_safety_certificate) Uploaded @else Not Uploaded @endif</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Is the building integrated?</td>
                        <td>As mentioned in civil norms</td>
                        <td>{{ $institute->integrated_building == true ? 'Yes' : 'No' }}</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Plot entrance gate</td>
                        <td>As per civil norms</td>
                        <td>@if($institute->plot_entrance_gate) Uploaded @else Not Uploaded @endif</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Building entrance gate</td>
                        <td>As per civil norms</td>
                        <td>@if($institute->building_entrance_gate) Uploaded @else Not Uploaded @endif</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Open Spaces around the Building</td>
                        <td>As mentioned in civil norms</td>
                        <td>{{ $institute->open_space_around_building == true ? 'Yes' : 'No' }}</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Open Spaces Separate for each Building</td>
                        <td>As mentioned in civil norms</td>
                        <td>{{ $institute->open_space_separate_for_each_building == true ? 'Yes' : 'No' }}</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Ceiling Height of Building</td>
                        <td>As mentioned in civil norms</td>
                        <td>{{ $institute->ceiling_height_of_building == true ? 'Yes' : 'No' }}</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Building Photograph</td>
                        <td>As per civil norms</td>
                        <td>@if($institute->building_photpgraph) Uploaded @else Not Uploaded @endif</td>
                    </tr>


                </tbody>
            </table>
        </div>

        <div style="text-align: left;">
            <h2>Workshop & Classroom Details</h2>
            <h4><u>Classroom Related Details</u></h4>
            <table class="border-table">
                <thead>
                    <th>#</th>
                    <th>Trade Name</th>
                    <th>No. of Classrooms Required</th>
                    <th>No. of Classrooms Available</th>
                    <th>Space norms per Classroom(in sqm)</th>
                    <th>Actual area of smallest classroom(in sqm)</th>
                    <th>Minimum width of each classroom(in m)</th>
                    <th>Floor type</th>
                    <th>Photographs</th>
                </thead>
                <tbody>
                    @php($i=1)
                    @foreach($instructional_classroom as $classroom)
                      <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $classroom->trade_name }}</td>
                          <td>{{ $classroom->classroom_required }}</td>
                          <td>{{ $classroom->classroom_available }}</td>
                          <td>{{ $classroom->classroom_space_norm_in_sqm }}</td>
                          <td>{{ $classroom->area_of_smallest_classroom }}</td>
                          <td>{{ $classroom->minimum_width_of_each_classroom }}</td>
                          <td>{{ $classroom->floor_type_name }}</td>
                          <td><img src="{{ storage_path('app/'.$classroom->classroom_photo.'') }}" style="height:100px;"/></td>
                      </tr>
                      @endforeach
                  </tbody>

            </table>
        </div>

        <div style="text-align: left;">
            <h4><u>Workshop Area Details</u></h4>
            <table class="border-table">
                <thead>
                    <th>#</th>
                    <th>Trade Name</th>
                    <th>Space Norms(in Sq. m)</th>
                    <th>Actual Area Available (in Sq. m)</th>
                    <th>Width(in m)</th>
                    <th>Workshop height from lower end(in ft)</th>
                    <th>Workshop Roof</th>
                    <th>Floor type</th>
                    <th>Photographs</th>
                </thead>
                <tbody>
                    @php($i=1)
                    @foreach($instructional_workshop as $workshop)
                      <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $workshop->trade_name }}</td>
                          <td>{{ $workshop->workshop_area_in_sqm }}</td>
                          <td>{{ $workshop->workshop_area_available }}</td>
                          <td>{{ $workshop->workshop_area_width_in_m }}</td>
                          <td>{{ $workshop->workshop_height_from_lower_end }}</td>
                          <td>{{ $workshop->roof_type_name }}</td>
                          <td>{{ $workshop->floor_type_name }}</td>
                          <td><img src="{{ storage_path('app/'.$workshop->workshop_photo.'') }}" style="height:100px;"/></td>
                      </tr>
                      @endforeach
                  </tbody>

            </table>
        </div>

        <div style="text-align: left;">
            <h4><u>IT Lab Details</u></h4>
            <table class="border-table">
                <thead>
                    <th>#</th>
                    <th>Space Norms(in Sq. m)</th>
                    <th>Actual Area Available (in Sq. m)</th>
                    <th>Width(in m)</th>
                    <th>Floor type</th>
                    <th>Upload photographs</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>25</td>
                        <td>{{ $it_lab->it_lab_actual_area }}</td>
                        <td>3</td>
                        <td>{{ $it_lab->floor_type_name }}</td>
                        <td><img src="{{ storage_path('app/'.$it_lab->itlab_photo.'') }}" style="height:100px;"/></td>
                    </tr>
                </tbody>

            </table>
        </div>

        <div style="text-align: left;">
            <h4><u>Drawing Hall Details</u></h4>
            <table class="border-table">
                <thead>
                    <th>#</th>
                    <th>Space Norms(in Sq. m)</th>
                    <th>Actual Area Available (in Sq. m)</th>
                    <th>Upload photographs</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>50</td>
                        <td>{{ $institute->drawing_hall_actual_area }}</td>
                        <td><img src="{{ storage_path('app/'.$institute->drawing_hall_photo.'') }}" style="height:100px;"/></td>
                    </tr>
                </tbody>

            </table>
        </div>

        <div style="text-align: left;">
            <h2>Administrative and other details</h2>
            <h4><u>Administrative Area Details</u></h4>
            <table class="border-table">
                <thead>
                    <th>#</th>
                    <th>Details</th>
                    <th>Space norms (in Sqm)</th>
                    <th>Actual area available(in Sqm)</th>
                    <th>Width(in m)</th>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Reception cum waiting lobby</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->reception_cum_waiting_looby_actual_area }}</td>
                        <td>{{ $administrative->reception_cum_waiting_looby_width }}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Principal room</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->primcipal_room_actual_area }}</td>
                        <td>{{ $administrative->primcipal_room_width }}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Staff room</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->staff_room_actual_area }}</td>
                        <td>{{ $administrative->staff_room_width }}</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Administrative hall/section</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->administrative_hall_actual_area }}</td>
                        <td>{{ $administrative->administrative_hall_width }}</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Placement/Counselling room</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->placement_room_actual_area }}</td>
                        <td>{{ $administrative->placement_room_width }}</td>
                    </tr>

                </tbody>

            </table>

            <h4><u>Amenities Area Details</u></h4>
            <table class="border-table">
                <thead>
                    <th>#</th>
                    <th>Details</th>
                    <th>Space norms (in Sqm)</th>
                    <th>Actual area available(in Sqm)</th>
                    <th>Width(in m)</th>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Multipurpose Hall/ Courtyard</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->multipurpose_hall_actual_area }}</td>
                        <td>{{ $administrative->multipurpose_hall_width }}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Library & Reading Room</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->library_actual_area }}</td>
                        <td>{{ $administrative->library_actual_width }}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Canteen (including kitchen & pantry)</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->canteen_actual_area }}</td>
                        <td>{{ $administrative->canteen_width }}</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>First-Aid Room</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->first_aid_room_actual_area }}</td>
                        <td>{{ $administrative->first_aid_room_width }}</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Playground</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->playground_actual_area }}</td>
                        <td>{{ $administrative->playground_width }}</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Drinking Water Facility</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->drinking_water_facility_actual_area }}</td>
                        <td>{{ $administrative->drinking_water_facility_width }}</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Storage Room for raw material and for Gases/ Oil drums etc.</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->storage_room_actual_area }}</td>
                        <td>{{ $administrative->storage_room_width }}</td>
                    </tr>

                </tbody>

            </table>
            <br>
            <br>

            <table class="border-table">
                <thead>
                    <th>#</th>
                    <th>Details</th>
                    <th>Norms</th>
                    <th>Availability</th>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Availability of staircase as per standards/ Local Building bye-laws or NBC of India</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->staircase_availability == true ? 'Yes' : 'No' }}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Availability of treated drinking water fountains as per standards</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->treated_drinking_water_foundations == true ? 'Yes' : 'No' }}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Toilets/ Water Closet details (As per Local Building bye-laws or NBC of India)</td>
                        <td colspan="2">As mentioned in Civil Norms</td>
                        <tr>
                           <td></td>
                            <td>a. For Staff</td>
                            <td>As mentioned in Civil Norms</td>
                            <td>{{ $administrative->toilet_for_staff == true ? 'Yes' : 'No' }}</td>
                         </tr>

                         <tr>
                            <td></td>
                            <td>b. For Trainee</td>
                            <td>As mentioned in Civil Norms</td>
                            <td>{{ $administrative->toilet_for_trainee == true ? 'Yes' : 'No' }}</td>
                         </tr>
                         <tr>
                            <td></td>
                            <td>c. Parking Details(As per Local Building bye-laws or NBC of India)</td>
                            <td>As mentioned in Civil Norms</td>
                            <td>{{ $administrative->parking_availability == true ? 'Yes' : 'No' }}</td>
                         </tr>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Parking</td>
                        <td colspan="2">As mentioned in Civil Norms</td>
                         <tr>
                            <td></td>
                            <td>a. Car Parking</td>
                            <td>As mentioned in Civil Norms</td>
                            <td>{{ $administrative->car_parking == true ? 'Yes' : 'No' }}</td>
                         </tr>
                         <tr>
                            <td></td>
                            <td>b. Scooter/ Two-wheeler</td>
                            <td>As mentioned in Civil Norms</td>
                            <td>{{ $administrative->two_wheeler_parking == true ? 'Yes' : 'No' }}</td>
                         </tr>
                         <tr>
                            <td></td>
                            <td>c. Bicycle</td>
                            <td>As mentioned in Civil Norms</td>
                            <td>{{ $administrative->bicycle_parking == true ? 'Yes' : 'No' }}</td>
                         </tr>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Ramps and Infrastructure necessary for disabled persons as per local bye-laws</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->ramps_for_disabled_person == true ? 'Yes' : 'No' }}</td>
                    </tr>

                </tbody>

            </table>

            <h4><u>Finishing Details</u></h4>
            <table class="border-table">
                <thead>
                    <th>#</th>
                    <th>Details</th>
                    <th>Norms</th>
                    <th>Availibility</th>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Plastering and painting of internal and external walls and ceiling</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->plastering_and_painting_of_external_walls == true ? 'Yes' : 'No' }}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Painting/ lamination of door, window, ventilator, gate, grill, railing of the institute</td>
                        <td>As mentioned in Civil Norms</td>
                        <td>{{ $administrative->lamination_of_door == true ? 'Yes' : 'No' }}</td>
                    </tr>
                </tbody> --}}

            </table>
        </div>

    </div>

</body>

</html>
