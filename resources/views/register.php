<?php require_once("connection.php");
if (isset($_POST['submit']) && $_POST['submit'] == "Submit") {
    echo 'HIIIIIII';
    die();
}

?>
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
                                <img src="assets/logo2.png" alt="GFA">
                            </div>
                            <div class="logo-wrap-text">
                             <h1> Registration1 </h1>
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

                <div class="contact-form-area login-form-area signup-form-area">
                 
                    <form action="" method="POST">

                     <div class="box-wrap">

                         <h4> Nominee Details </h4>

                         <div class="row">
                            <div class="col-lg-6 col-md-6 wow fadeInUp">
                                <label>Name of the Enterprise:</label>
                                <input type="text" placeholder="">
                            </div>

                            <div class="col-lg-6 col-md-6 wow fadeInUp">   
                                <label>Name of the Promoter/ Owner/ Head:</label>
                                <input type="text" placeholder="">
                            </div>

                            <div class="col-lg-6 col-md-6 wow fadeInUp">
                                <label>Designation:</label>
                                <input type="text" placeholder="">
                            </div>


                            <div class="col-lg-6 col-md-6 wow fadeInUp">
                                <label>Company Name (If different from Enterprise name):</label>
                                <input type="text" placeholder="">
                            </div>

                            <div class="col-lg-6 col-md-6 wow fadeInUp">
                                <label>Business address:</label>
                                <textarea id="address" name="address" rows="4" cols="">
                                    
                                </textarea>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6 col-md-6 wow fadeInUp">
                                <label>Phone:</label>
                                <input type="text" placeholder="">
                            </div>

                            <div class="col-lg-6 col-md-6 wow fadeInUp">
                                <label>Mobile: +91</label>
                                <input type="text" placeholder="">
                            </div>

                            <div class="col-lg-6 col-md-6 wow fadeInUp">
                                <label>Email</label>
                                <input type="email" placeholder="">
                            </div> 

                            <div class="col-lg-6 col-md-6 wow fadeInUp">
                                <label>Website:</label>
                                <input type="email" placeholder="">
                            </div>

                        </div>

                    </div>

                    <div class="separator">

                        <div class="box-wrap">    

                            <h4> Overall Information about theEnterprise </h4>    

                            <div class="row">

                                <div class="col-lg-6 col-md-6 wow fadeInUp">
                                    <label>a) In which month/ year was the business started?</label>
                                    <input type="text" placeholder="">
                                </div>

                                <div class="col-lg-12 col-md-12 wow fadeInUp">
                                    <label>b) What is the legal status of the Enterprise? Please mark a tick against option relevant to you.</label>

                                    <div class="checkbox-area">

                                        <div class="checkbox-part">
                                            <input type="radio" name="e-status" id="remember">
                                            <label for="remember">Private Limited Company</label>
                                        </div>

                                        <div class="checkbox-part">
                                            <input type="radio" name="e-status" id="remember">
                                            <label for="remember">Public Limited Company</label>
                                        </div>

                                        <div class="checkbox-part">
                                            <input type="radio" name="e-status" id="remember">
                                            <label for="remember">Proprietorship</label>
                                        </div>

                                        <div class="checkbox-part">
                                            <input type="radio" name="e-status" id="remember">
                                            <label for="remember">Partnership</label>
                                        </div>

                                        <div class="checkbox-part">
                                            <input type="radio"  name="e-status" id="remember">
                                            <label for="remember">Family-Owned Business</label>
                                        </div>

                                        <div class="checkbox-part">
                                            <input type="radio"  name="e-status" id="remember">
                                            <label for="remember">Other</label>
                                        </div>
                                    </div>

                                </div>  

                                <div class="col-lg-12 col-md-12 wow fadeInUp">
                                    <label>c) Is the Founder/Promoter still actively involved in top management?</label>

                                    <div class="checkbox-area">
                                        <div class="checkbox-part">
                                            <input type="radio"  name="top-management" id="remember">
                                            <label for="remember">Yes</label>
                                        </div>

                                        <div class="checkbox-part">
                                            <input type="radio"  name="top-management" id="remember">
                                            <label for="remember">No</label>
                                        </div>
                                    </div>
                                </div> 

                                <div class="col-lg-12 col-md-12 wow fadeInUp">
                                    <label>d)  Categories Applied for (Refer to enclosure for categories. Can apply for up to 5 categories only)</label>
                                    <div class="checkbox-area">
                                        <div class="checkbox-part">
                                            <input type="radio"  name="categories" id="remember">
                                            <label for="remember">1</label>
                                        </div>

                                        <div class="checkbox-part">
                                            <input type="radio"  name="categories" id="remember">
                                            <label for="remember">2</label>
                                        </div>
                                        <div class="checkbox-part">
                                            <input type="radio"  name="categories" id="remember">
                                            <label for="remember">3</label>
                                        </div>
                                        <div class="checkbox-part">
                                            <input type="radio"  name="categories" id="remember">
                                            <label for="remember">4</label>
                                        </div>
                                        <div class="checkbox-part">
                                            <input type="radio"  name="categories" id="remember">
                                            <label for="remember">5</label>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>

                        <div class="separator">
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 wow fadeInUp">
                                        <label>3) Why do you think your outlet is best in the category/categories you have contested for?</label>
                                        <input type="text" placeholder="">
                                    </div>

                                </div>

                            </div>
                            
                        </div>    
                        <div class="separator">
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 wow fadeInUp">
                                        <label>4) The dish/ item that you are proud of in your menu? </label>
                                        <input type="text" placeholder="">
                                    </div>

                                </div>

                            </div>
                        </div>  
                        <div class="separator">
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 wow fadeInUp">
                                        <label>5) How often do you add a new dish/ item to your menu?  </label>
                                        <input type="text" placeholder="">
                                    </div>

                                </div>

                            </div>
                        </div>   
                        <div class="separator">
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 wow fadeInUp">
                                        <label>6) Do you think you need to improve in any of the areas? If yes, where?   </label>
                                        <input type="text" placeholder="">
                                    </div>

                                </div>

                            </div>
                        </div>   
                        <div class="separator">
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 wow fadeInUp">
                                        <label>7) Do you accept cashless payment modes like Debit/ Credit Card, eWallets etc. at your outlet?    </label>
                                        <div class="checkbox-area">
                                            <div class="checkbox-part">
                                                <input type="radio"  name="outlet" id="remember">
                                                <label for="remember">Yes</label>
                                            </div>
                                            
                                            <div class="checkbox-part">
                                                <input type="radio"  name="outlet" id="remember">
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
                                        <label>8) Do you accept cashless payment modes like Debit/ Credit Card, eWallets etc. at your outlet?    </label>
                                        <div class="checkbox-area">
                                            <div class="checkbox-part">
                                                <input type="radio"  name="outlet" id="remember">
                                                <label for="remember">Outdoor</label>
                                            </div>
                                            
                                            <div class="checkbox-part">
                                                <input type="radio"  name="outlet" id="remember">
                                                <label for="remember">Print</label>
                                            </div>
                                            <div class="checkbox-part">
                                                <input type="radio"  name="outlet" id="remember">
                                                <label for="remember">TV</label>
                                            </div>
                                            
                                            <div class="checkbox-part">
                                                <input type="radio"  name="outlet" id="remember">
                                                <label for="remember">Radio</label>
                                            </div>
                                            <div class="checkbox-part">
                                                <input type="radio"  name="outlet" id="remember">
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
                                        <label>9) Please mention your outlet’s rating on the following platforms? </label>
                                        <div class="checkbox-area">
                                            <div class="checkbox-part">
                                                <input type="radio"  name="outlet" id="remember">
                                                <label for="remember">Google</label>
                                            </div>
                                            
                                            <div class="checkbox-part">
                                                <input type="radio"  name="outlet" id="remember">
                                                <label for="remember">Facebook</label>
                                            </div>
                                            <div class="checkbox-part">
                                                <input type="radio"  name="outlet" id="remember">
                                                <label for="remember">Zomato</label>
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
                                        <label>10) How did you get your idea or concept for the business?  </label>
                                        <input type="text" placeholder="">
                                    </div>

                                </div>

                            </div>
                        </div> 
                        <div class="separator">
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 wow fadeInUp">
                                        <label>11) Have you participated in the previous editions of Guwahati Food Awards?   </label>
                                        <div class="checkbox-area">
                                            <div class="checkbox-part">
                                                <input type="radio"  name="outlet" id="food_award_hide">
                                                <label for="food_award_hide">No</label>
                                            </div>
                                            
                                            <div class="checkbox-part">
                                                <input type="radio"  name="outlet" id="food_award_show">
                                                <label for="food_award_show">Yes</label>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="col-lg-6 col-md-6" id="show_me" style='display:none'>
                                            <label> Mention year(s)</label>  
                                            <input type="number" placeholder="" >

                                        </div>
                                        
                                    </div>

                                </div>

                            </div>
                        </div> 
                        <div class="separator">
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 wow fadeInUp">
                                        <label>12) Other Information about the Enterprise ?   </label>
                                        <p>This financial information is considered confidential. Financial information is an important criteria for 
                                        selection/judging process, therefore it is required that the following data is as per audited books of accounts. </p>
                                        
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>1) Total No. of Employees</th>
                                                    <td style="padding-left: 10%;"><input type="text" placeholder=""></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <th>2) Approx. Monthly Billing </th>
                                                    <td style="padding-left: 10%;"><input type="text" placeholder=""></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <th>3) Approx. Monthly Footfall </th>
                                                    <td style="padding-left: 10%;"><input type="text" placeholder=""></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <th>4) Name of the internet service provide</th>
                                                    <td style="padding-left: 10%;"><input type="text" placeholder=""></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <th>5) Bank Name </th>
                                                    <td style="padding-left: 10%;"><input type="text" placeholder=""></td>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div> 
                        <div class="separator">
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 wow fadeInUp">
                                        <label>13) Summary of your Enterprise </label>
                                        <p>Please provide additionally the following (in about 500 words in total) </p>
                                        <ul>
                                            <li>1)About the promoter/nominee </li>
                                            <li>2)Current Business activity</li>
                                            <li>3)Reviews  </li>
                                            <li>4)Any innovative approach for the growth of the enterprise </li>
                                            <li>5)Any acknowledgement/ testimonials</li>
                                        </ul>
                                        
                                        <textarea rows="4" cols="">

                                        </textarea>
                                        
                                        
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="login-btn">
                            <input type="submit" name="submit" value="Submit" class="btn"/>
                            <!-- <button type="submit" name="submit" value="Submit" class="btn">Register</button> -->
                            
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
    
    $('#food_award_show').click(function() {
        if($(this).attr('id') == 'food_award_show') {          
            $('#show_me').show('slow');           
        }
    });
    $('#food_award_hide').click(function() {
        if($(this).attr('id') == 'food_award_hide') {
            $('#show_me').hide('slow');           
        }
    });
    
</script>


</body>



</html>