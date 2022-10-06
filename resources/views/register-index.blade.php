<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Register</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awsome-all.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style type="text/css">
        .main-wrapper {
            background-color: #ffd105;
        }

        .logo-wrap {
            max-width: 200px;
        }

        .logo-wrap-text {
            padding: 60px 0px;
        }

        .contact-form-area label {
            font-size: 17px;
            font-weight: bold;
        }

        .contact-form-area h4 {
            font-size: 26px;
            margin-bottom: 20px;
        }

        .checkbox-area label {
            font-weight: 400;
        }

        .box-wrap {
            background-color: #eee;
            padding: 30px;
            margin-bottom: 20px;
            border: 1px dashed #353434;
        }

        .writeto-us .contact-form-area h3 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        input {
            text-transform: none;
        }
    </style>
</head>

<body>

    <div class="main-wrapper">
        <!-- breadcrumb-area -->
        <div class="logo-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center">
                            <div class="logo-wrap mr-3">
                                <a href="http://167.71.235.8/gfa/">
                                    <img src="assets/logo2.png" alt="GFA">
                                </a>
                            </div>
                            <div class="logo-wrap-text">
                                <h1> Registration </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact-form-area -->
        <section class="about-area about-area2 writeto-us login-area signup-area padding-top-10 padding-bottom-60">
            <div class="form-shapes">
                <span class="fs1 item-animateOne"><img src="assets/images/shapes/1.png" alt=""></span>
                <span class="fs2 item-bounce"><img src="assets/images/shapes/12.png" alt=""></span>
                <span class="fs3"><img src="assets/images/shapes/13.png" alt=""></span>
                <span class="fs4 item-bounce"><img src="assets/images/shapes/26.png" alt=""></span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 wow fadeInUp">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center" id="msg">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="contact-form-area login-form-area signup-form-area">

                            <form action="{{ Route('registeration') }}" method="POST">
                                @csrf

                                <div class="box-wrap">

                                    <h4> Nominee Details </h4>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 wow fadeInUp">
                                            <label>Name of the Enterprise:</label>
                                            <input name="name_of_enterprise" type="text"
                                                placeholder="Enter name of the enterprise" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 wow fadeInUp">
                                            <label>Name of the Promoter/ Owner/ Head:</label>
                                            <input name="name_of_promoter" type="text"
                                                placeholder="Enter name of the promotor/owner/head" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 wow fadeInUp">
                                            <label>Designation:</label>
                                            <input name="designation" type="text" placeholder="">
                                        </div>


                                        <div class="col-lg-6 col-md-6 wow fadeInUp">
                                            <label>Company Name (If different from Enterprise name):</label>
                                            <input name="company_name" type="text" placeholder="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 wow fadeInUp">
                                            <label>Business address:</label>
                                            <textarea id="address" name="business_address" rows="4" cols="" required></textarea>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-lg-6 col-md-6 wow fadeInUp">
                                            <label>Phone:</label>
                                            <input name="phone" type="text" placeholder="" required
                                                onkeypress="return onlyNumberKey(event)" minlength="10" maxlength="10">
                                        </div>

                                        <div class="col-lg-6 col-md-6 wow fadeInUp">
                                            <label>Mobile: +91</label>
                                            <input name="mobile" type="text" placeholder="" required
                                                onkeypress="return onlyNumberKey(event)" minlength="10" maxlength="10">
                                        </div>

                                        <div class="col-lg-6 col-md-6 wow fadeInUp">
                                            <label>Email</label>
                                            <input name="email" type="email" placeholder="" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 wow fadeInUp">
                                            <label>Website:</label>
                                            <input name="website" type="text" placeholder="" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 wow fadeInUp">
                                            <label>Type of Restaurant: (select any one)</label>
                                            <div class="checkbox-area">
                                                <div class="checkbox-part">
                                                    <input type="radio" value="true" name="fran_type"
                                                        id="fran_type" required>
                                                    <label for="remember">Franchise</label>
                                                </div>

                                                <div class="checkbox-part">
                                                    <input type="radio" value="false" name="fran_type"
                                                        id="fran_type" required>
                                                    <label for="remember">Non-Franchise</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 wow fadeInUp">
                                            <label>Menu Options: (can select multiple)</label>
                                            <div class="checkbox-area">
                                                <div class="checkbox-part">
                                                    <input type="radio" value="Veg" name="food_type_veg"
                                                        id="Veg">
                                                    <label for="remember">Veg</label>
                                                </div>

                                                <div class="checkbox-part">
                                                    <input type="radio" value="Non-Veg" name="food_type_non_veg"
                                                        id="Non-Veg">
                                                    <label for="remember">Non-Veg</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 wow fadeInUp">
                                            <label>Average Order Value per person: (select any one)</label>
                                            <div class="checkbox-area">
                                                <div class="checkbox-part">
                                                    <input type="radio" value="0-200" name="order_value_type"
                                                        id="order_value_type" required>
                                                    <label for="remember">0-200</label>
                                                </div>

                                                <div class="checkbox-part">
                                                    <input type="radio" value="201-500" name="order_value_type"
                                                        id="order_value_type" required>
                                                    <label for="remember">201-500</label>
                                                </div>
                                                <div class="checkbox-part">
                                                    <input type="radio" value="501-1000" name="order_value_type"
                                                        id="order_value_type" required>
                                                    <label for="remember">501-1000</label>
                                                </div>
                                                <div class="checkbox-part">
                                                    <input type="radio" value="1000+" name="order_value_type"
                                                        id="order_value_type" required>
                                                    <label for="remember">1000+</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 wow fadeInUp">
                                            <label>Service: (can select multiple)</label>
                                            <div class="checkbox-area">
                                                <div class="checkbox-part">
                                                    <input type="radio" value="Delivery"
                                                        name="service_type_delivery" id="service_type_delivery">
                                                    <label for="remember">Delivery</label>
                                                </div>

                                                <div class="checkbox-part">
                                                    <input type="radio" value="Dine-In" name="service_type_dine"
                                                        id="service_type_dine">
                                                    <label for="remember">Dine-In</label>
                                                </div>
                                                <div class="checkbox-part">
                                                    <input type="radio" value="Take-Away" name="service_type_take"
                                                        id="service_type_take">
                                                    <label for="remember">Take-Away</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 wow fadeInUp">
                                            <label>Available in: (can select multiple)</label>
                                            <div class="checkbox-area">
                                                <div class="checkbox-part">
                                                    <input type="radio" value="Swiggy" name="available_in_swiggy"
                                                        id="available_in_swiggy">
                                                    <label for="remember">Swiggy</label>
                                                </div>

                                                <div class="checkbox-part">
                                                    <input type="radio" value="Zomato" name="available_in_zomato"
                                                        id="available_in_zomato">
                                                    <label for="remember">Zomato</label>
                                                </div>
                                                <div class="checkbox-part">
                                                    <input type="radio" value="None" name="available_in_none"
                                                        id="available_in_none">
                                                    <label for="remember">None</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="separator">

                                    <div class="box-wrap">

                                        <h4> Overall Information about the Enterprise </h4>

                                        <div class="row">

                                            <div class="col-lg-6 col-md-6 wow fadeInUp">
                                                <label>a) In which month/ year was the business started?</label>
                                                <input name="business_start_year" type="month"
                                                    value="<?= date('Y-m') ?>" placeholder="Select Month and Year"
                                                    required>
                                            </div>

                                            <div class="col-lg-12 col-md-12 wow fadeInUp">
                                                <label>b) What is the legal status of the Enterprise? Please mark a tick
                                                    against option relevant to you.</label>

                                                <div class="checkbox-area">

                                                    <div class="checkbox-part">
                                                        <input type="radio" value="Private Limited Company"
                                                            name="legal_status" id="legal_status1" required>
                                                        <label for="remember">Private Limited Company</label>
                                                    </div>

                                                    <div class="checkbox-part">
                                                        <input type="radio" name="legal_status"
                                                            value="Public Limited Company" id="legal_status2"
                                                            required>
                                                        <label for="remember">Public Limited Company</label>
                                                    </div>

                                                    <div class="checkbox-part">
                                                        <input type="radio" name="legal_status"
                                                            value="Proprietorship" id="legal_status3" required>
                                                        <label for="remember">Proprietorship</label>
                                                    </div>

                                                    <div class="checkbox-part">
                                                        <input type="radio" name="legal_status" value="Partnership"
                                                            id="legal_status4" required>
                                                        <label for="remember">Partnership</label>
                                                    </div>

                                                    <div class="checkbox-part">
                                                        <input type="radio" name="legal_status"
                                                            value="Family-Owned Business" id="legal_status5" required>
                                                        <label for="remember">Family-Owned Business</label>
                                                    </div>

                                                    <div class="checkbox-part">
                                                        <input type="radio" name="legal_status" value="Other"
                                                            id="other" required>
                                                        <label for="remember">Other</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6" id="other_div"
                                                        style='display:none'>
                                                        <label> Please specify</label>
                                                        <input name="legal_status_other" type="text"
                                                            placeholder="">

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 col-md-12 wow fadeInUp">
                                                <label>c) Is the Founder/Promoter still actively involved in top
                                                    management?</label>

                                                <div class="checkbox-area">
                                                    <div class="checkbox-part">
                                                        <input type="radio" value="1" name="founder_active"
                                                            id="founder_active" required>
                                                        <label for="remember">Yes</label>
                                                    </div>

                                                    <div class="checkbox-part">
                                                        <input type="radio" value="0" name="founder_active"
                                                            id="founder_active" required>
                                                        <label for="remember">No</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 wow fadeInUp">
                                                <label>d) Categories Applied for (Refer to enclosure for categories. Can
                                                    apply for up to 5 categories only)</label>
                                                <div class="checkbox-area">
                                                    <div class="checkbox-part">
                                                        <input type="checkbox"  class="cat_check" name="best_bakery"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Bakery</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_cafe"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Café</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_club"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Club/ Lounge</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_bar"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Pub/ Bar</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="best_fast_food" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Fast Food Joint</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_mithai"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Mithai Shop</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_multi"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Multi-Cuisine Restaurant</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="best_for_assamese" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Restaurant For Assamese
                                                            Cuisine</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="best_for_european" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Restaurant For European Cuisine
                                                            (Continental)</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="best_for_north" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Restaurant for North Indian
                                                            Cuisine</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="best_for_ethnic" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Restaurant for Ethnic
                                                            Cuisine</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="best_for_south" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Restaurant For South Indian
                                                            Cuisine</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_cloud"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Cloud Kitchen of the Year</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_for_veg"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Restaurant For Vegetarian
                                                            Food</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="most_instagrammable" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Most Instagrammable Restaurant</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_open_air"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Open-Air Space</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_hangout"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Hangout Place</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_for_fine"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Restaurant for Fine Dining</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="best_for_oriental" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Restaurant For Oriental
                                                            Cuisine</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="best_in_healthy" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best in Healthy Food</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="bartender_of_year" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">BarTender of the Year</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="most_hygienic"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Most Hygienic and Sanitised
                                                            Restaurants</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="promising_new"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Promising New Entrant</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_brand"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Brand for home Delivery</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_dessert"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Dessert & Ice Cream Parlour</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_micro"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Microbrewery of the Year</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_gigs"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Brand with Live Gigs</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_family"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Family Friendly Restaurant</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_qsr"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best QSR Brand</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_biryani"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Biryani Brand of the Year</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_money"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Value of Money Restaurant</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_barbeque"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Barbeque Brand</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="best_local_chain" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Restaurant Chain (Local)</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="best_brand_chain" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Best Restaurant Chain (Brand)</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_inno"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Setting Benchmark Through Innovation</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="best_home_baker" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Home Baker of the Year</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="most_accessible" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Most Accessible Restaurant</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="restaurant_of_year" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Restaurant of the Year</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check"
                                                            name="best_home_chef" value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Home Chef of the Year</label>
                                                    </div>
                                                    <div class="checkbox-part">
                                                        <input type="checkbox" class="cat_check" name="best_chef"
                                                            value="Yes">
                                                        <label style="margin-top: 5px; margin-left: 5px;" for="remember">Chef of the Year</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="separator">
                                        <div class="box-wrap">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 wow fadeInUp">
                                                    <label>3) Why do you think your outlet is best in the
                                                        category/categories you have contested for?</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 wow fadeInUp">
                                                    <input name="category_remark" type="text" placeholder=""
                                                        required>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="separator">
                                        <div class="box-wrap">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 wow fadeInUp">
                                                    <label>4) The dish/ item that you are proud of in your menu?
                                                    </label>
                                                    <input name="dish_proud" type="text" placeholder="" required>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="separator">
                                        <div class="box-wrap">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 wow fadeInUp">
                                                    <label>5) How often do you add a new dish/ item to your menu?
                                                    </label>
                                                    <input name="add_dish" type="text" placeholder="" required>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="separator">
                                        <div class="box-wrap">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 wow fadeInUp">
                                                    <label>6) Do you think you need to improve in any of the areas? If
                                                        yes, where? </label>
                                                    <input name="improve_dish" type="text" placeholder=""
                                                        required>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="separator">
                                        <div class="box-wrap">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 wow fadeInUp">
                                                    <label>7) Do you accept cashless payment modes like Debit/ Credit
                                                        Card, eWallets etc. at your outlet? </label>
                                                    <div class="checkbox-area">
                                                        <div class="checkbox-part">
                                                            <input type="radio" name="cashless" value="1">
                                                            <label for="remember">Yes</label>
                                                        </div>

                                                        <div class="checkbox-part">
                                                            <input type="radio" name="cashless" value="0">
                                                            <label for="remember">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="separator">
                                        <div class="box-wrap">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 wow fadeInUp">
                                                    <label>8) What are the different advertising modules have you opted
                                                        so far to promote your Outlet? (Please <i class="fa fa-check"
                                                            aria-hidden="true"></i> in the appropriate box) </label>
                                                    <div class="checkbox-area">
                                                        <div class="checkbox-part">
                                                            <input type="radio" value="Outdoor" name="advertise"
                                                                required>
                                                            <label for="remember">Outdoor</label>
                                                        </div>

                                                        <div class="checkbox-part">
                                                            <input type="radio" value="Print" name="advertise"
                                                                required>
                                                            <label for="remember">Print</label>
                                                        </div>
                                                        <div class="checkbox-part">
                                                            <input type="radio" value="TV" name="advertise"
                                                                required>
                                                            <label for="remember">TV</label>
                                                        </div>

                                                        <div class="checkbox-part">
                                                            <input type="radio" value="Radio" name="advertise"
                                                                required>
                                                            <label for="remember">Radio</label>
                                                        </div>
                                                        <div class="checkbox-part">
                                                            <input type="radio" value="Social/ Digital Media"
                                                                name="advertise" required>
                                                            <label for="remember">Social/ Digital Media</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="separator">
                                        <div class="box-wrap">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 wow fadeInUp">
                                                    <label>9) Please mention your outlet’s rating on the following
                                                        platforms? </label>
                                                    <div>
                                                        <ul class="bullet-point">
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-md-4">Google</div>
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <input name="google_rating" type="number"
                                                                            min="0" max="10"
                                                                            step="0.1" placeholder="" required>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-md-4">Facebook
                                                                    </div>

                                                                    <div class="col-lg-6 col-md-6">
                                                                        <input name="facebook_rating" type="number"
                                                                            step="0.1" min="0"
                                                                            max="10" placeholder="" required>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-md-4">Zomato
                                                                    </div>

                                                                    <div class="col-lg-6 col-md-6"><input
                                                                            name="zomato_rating" type="number"
                                                                            step="0.1" min="0"
                                                                            max="10" placeholder="" required>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-md-4">Swiggy</div>

                                                                    <div class="col-lg-6 col-md-6"><input
                                                                            name="swiggy_rating" type="number"
                                                                            min="0" max="10"
                                                                            step="0.1" placeholder=""></div>

                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="separator">
                                        <div class="box-wrap">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 wow fadeInUp">
                                                    <label>10) How did you get your idea or concept for the business?
                                                    </label>
                                                    <input name="business_concept" type="text" placeholder=""
                                                        required>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="separator">
                                        <div class="box-wrap">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 wow fadeInUp">
                                                    <label>11) Have you participated in the previous editions of
                                                        Guwahati Food Awards? </label>
                                                    <div class="checkbox-area">
                                                        <div class="checkbox-part">
                                                            <input name="previous_gfa" value="0" type="radio"
                                                                id="food_award_hide">
                                                            <label for="food_award_hide">No</label>
                                                        </div>

                                                        <div class="checkbox-part">
                                                            <input type="radio" name="previous_gfa" value="1"
                                                                id="food_award_show">
                                                            <label for="food_award_show">Yes</label>
                                                        </div>


                                                    </div>
                                                    <div class="col-lg-6 col-md-6" id="show_me"
                                                        style='display:none'>
                                                        <label> Mention year(s)</label>
                                                        <input name="previous_gfa_year" type="text"
                                                            placeholder="">

                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="separator">
                                        <div class="box-wrap">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 wow fadeInUp">
                                                    <label>12) Other Information about the Enterprise ? </label>
                                                    <p>This financial information is considered confidential. Financial
                                                        information is an important criteria for
                                                        selection/judging process, therefore it is required that the
                                                        following data is as per audited books of accounts. </p>

                                                    <div>
                                                        <ul class="bullet-point">
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-md-4">Total No. of Employees</div>

                                                                    <div class="col-lg-6 col-md-6">
                                                                        <input name="total_employee" type="text"
                                                                            placeholder="" required>
                                                                    </div>


                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-md-4">Approx. Monthly Billing
                                                                    </div>

                                                                    <div class="col-lg-6 col-md-6">
                                                                        <input name="monthly_bill" type="text"
                                                                            placeholder="" required>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-md-4">Approx. Monthly Footfall
                                                                    </div>

                                                                    <div class="col-lg-6 col-md-6"><input
                                                                            name="monthly_footfall" type="text"
                                                                            placeholder="" required></div>

                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-md-4">Name of the internet service
                                                                        provide</div>

                                                                    <div class="col-lg-6 col-md-6"><input
                                                                            name="isp_name" type="text"
                                                                            placeholder=""></div>

                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-md-4">Bank Name </div>

                                                                    <div class="col-lg-6 col-md-6"><input
                                                                            name="bank_name" type="text"
                                                                            placeholder="" required></div>

                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="separator">
                                        <div class="box-wrap">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 wow fadeInUp">
                                                    <label>13) Summary of your Enterprise </label>
                                                    <p>Please provide additionally the following (in about 500 words in
                                                        total) </p>
                                                    <ul class="bullet-point">
                                                        <li>About the promoter/nominee </li>
                                                        <li>Current Business activity</li>
                                                        <li>Reviews </li>
                                                        <li>Any innovative approach for the growth of the enterprise
                                                        </li>
                                                        <li>Any acknowledgement/ testimonials</li>
                                                    </ul>
                                                    <textarea name="summary" rows="5" cols="" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="separator">
                                        <div class="box-wrap">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 wow fadeInUp">
                                                    <label>14) Payment details: </label>
                                                    <p>Nomination fee of &#8377;3000/- for the first category and
                                                        &#8377;1000/- only to be paid for each subsequent category.
                                                        Payment can be done using UPI/Net banking to the following
                                                        account before the registration process closes.
                                                    <ul class="bullet-point">
                                                        <li>Account Holder Name: <b>Insight Media</b></li>
                                                        <li>Bank Name: <b>Axis Bank</b></li>
                                                        <li>A/C Number: <b>913020032196231</b></li>
                                                        <li>IFSC: <b>UTIB0000375</b></li>
                                                    </ul>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separator">
                                        <div class="box-wrap">
                                            <p id="amount" style="font-weight: bold;"></p>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 wow fadeInUp">
                                                    <label>15) Enter the transaction id of the payment:
                                                    </label>
                                                    <input name="transaction_id" type="text" placeholder=""
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="float:auto">
                                        <div class="col-lg-3 col-md-3 wow fadeInUp">

                                            <div class="login-btn">
                                                <input type="submit" name="submit" value="register"
                                                    class="btn btn-danger" />
                                                <!-- <button type="submit" class="btn">Register</button> -->

                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- footer area -->
    <footer class="padding-top-40 padding-bottom-40">

        <div class="copyright-area text-center">
            <p>Copyright © 2021 <a href="register.html"></a></p>
        </div>
    </footer>

    <!-- ToTop Button -->
    <button class="scrollup"><i class="fas fa-angle-up"></i></button>

    <!-- Javascript Files -->

    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/easing.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        function onlyNumberKey(evt) {

            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
    <script>
        var checks = document.querySelectorAll(".cat_check");
        var max = 5;
        for (var i = 0; i < checks.length; i++)
            checks[i].onclick = selectiveCheck;

        function selectiveCheck(event) {
            var checkedChecks = document.querySelectorAll(".cat_check:checked");

            if (checkedChecks.length >= max + 1)
                return false;
            if (checkedChecks.length == max) {
                alert("Can apply for up to 5 categories only!");
            }
            if (checkedChecks.length == 1) {
                document.getElementById("amount").innerHTML = "";
                document.getElementById("amount").textContent += "Amount Payable for the categories applied : ₹3000/- Only";
            } else if (checkedChecks.length == 2) {
                document.getElementById("amount").innerHTML = "";
                document.getElementById("amount").textContent += "Amount Payable for the categories applied : ₹4000/- Only";
            } else if (checkedChecks.length == 3) {
                document.getElementById("amount").innerHTML = "";
                document.getElementById("amount").textContent += "Amount Payable for the categories applied : ₹5000/- Only";
            } else if (checkedChecks.length == 4) {
                document.getElementById("amount").innerHTML = "";
                document.getElementById("amount").textContent += "Amount Payable for the categories applied : ₹6000/- Only";
            } else {
                document.getElementById("amount").innerHTML = "";
                document.getElementById("amount").textContent += "Amount Payable for the categories applied : ₹7000/- Only";
            }
        }
    </script>

    <script>
        $('#food_award_show').click(function() {
            if ($(this).attr('id') == 'food_award_show') {
                $('#show_me').show('slow');
            }
        });
        $('#food_award_hide').click(function() {
            if ($(this).attr('id') == 'food_award_hide') {
                $('#show_me').hide('slow');
            }
        });

        $('#other').click(function() {
            $("#other_div").css("display", "block");
        });
        $('#legal_status1').click(function() {
            $("#other_div").css("display", "none");
        });
        $('#legal_status2').click(function() {
            $("#other_div").css("display", "none");
        });

        $('#legal_status3').click(function() {
            $("#other_div").css("display", "none");
        });

        $('#legal_status4').click(function() {
            $("#other_div").css("display", "none");
        });
        $('#legal_status5').click(function() {
            $("#other_div").css("display", "none");
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>
