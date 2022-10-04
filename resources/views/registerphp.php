<?php
error_reporting(0);
require_once("connection.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//ini_set("display_errors", 0);

require_once "vendor/autoload.php";

if (isset($_POST['submit']) && $_POST['submit'] == "Register") {

  $name_of_the_enterprise = trim($_POST['name_of_the_enterprise']);
  $name_of_the_promoter = trim($_POST['name_of_the_promoter']);
  $designation = trim($_POST['designation']);
  $company_name = trim($_POST['company_name']);
  $address = trim($_POST['address']);
  $phone = trim($_POST['phone']);
  $mobile_no = trim($_POST['mobile_no']);
  $email = trim($_POST['email']);
  $website = trim($_POST['website']);
  $month_year_was_the_business_started = trim($_POST['month_year_was_the_business_started']);
  $e_status = trim($_POST['e_status']);
  $top_management = trim($_POST['top_management']);
  $categories = trim($_POST['categories']);
  $outlet_category_description = trim($_POST['outlet_category_description']);
  $dish_proud_menu = trim($_POST['dish_proud_menu']);
  $new_dish_your_menu = trim($_POST['new_dish_your_menu']);
  $improve_any_area = trim($_POST['improve_any_area']);
  $payment_mode = trim($_POST['payment_mode']);
  $promote_your_outlet = trim($_POST['promote_your_outlet']);
  $outlet = trim($_POST['outlet']);
  $business_idea = trim($_POST['business_idea']);
  $participated = trim($_POST['participated']);
  $participated_year = trim($_POST['participated_year']);
  $enterprise_total_no_employees = trim($_POST['enterprise_total_no_employees']);
  $enterprise_approx_monthly_billing = trim($_POST['enterprise_approx_monthly_billing']);
  $approx_monthly_footfall = trim($_POST['monthly_footfall']);
  $enterprise_name_of_the_internet_service_provide = trim($_POST['enterprise_name_of_the_internet_service_provide']);
  $enterprise_bank_name = trim($_POST['enterprise_bank_name']);
  $summary_of_your_enterprise = trim($_POST['summary_of_your_enterprise']);


    //validation
  if (empty($name_of_the_enterprise)) {
    $status =  "Name of the Enterprise is required";
  } else if (empty($name_of_the_enterprise)) {
    $status =  "Name of the Promoter/ Owner/ Head is required";
  } else if (empty($designation)) {
    $status =  "Designation is required";
  } else if (empty($company_name)) {
    $status =  "Company Name (If different from Enterprise name) is required";
  } else if (empty($address)) {
    $status =  "Business address is required";
  } else if (empty($phone)) {
    $status =  "Phone Number is required";
  } else if (empty($mobile_no)) {
    $status =  "mobile Number is required";
  } else if (empty($email)) {
    $status =  "Email is required";
  } else if (empty($website)) {
    $status =  "Website is required";
  } else if (empty($month_year_was_the_business_started)) {
    $status =  "which month/ year was the business started is required";
  } else if (empty($e_status)) {
    $status =  "What is the legal status of the Enterprise? Please mark a tick against option relevant to you is required";
  } else if (empty($top_management)) {
    $status =  "Is the Founder/Promoter still actively involved in top management is required";
  } else if (empty($categories)) {
    $status =  " Categories Applied for (Refer to enclosure for categories. Can apply for up to 5 categories only) is required";
  } else if (empty($outlet_category_description)) {
    $status =  " why do you think your outlet is best in the category/categories you have contested for is required";
  } else if (empty($dish_proud_menu)) {
    $status =  " The dish/ item that you are proud of in your menu? is required";
  } else if (empty($new_dish_your_menu)) {
    $status =  " How often do you add a new dish/ item to your menu is required";
  } else if (empty($improve_any_area)) {
    $status =  " Do you think you need to improve in any of the areas? If yes, where is required";
  } else if (empty($payment_mode)) {
    $status =  " Do you accept cashless payment modes like Debit/ Credit Card, eWallets etc. at your outlet is required";
  }else if (empty($promote_your_outlet)) {
    $status =  "  What are the different advertising modules have you opted so far to promote your Outlet? (Please in the appropriate box) is required";
  }else if (empty($outlet)) {
    $status =  "   Please mention your outlet’s rating on the following platforms is required";
  }else if (empty($business_idea)) {
    $status =  " How did you get your idea or concept for the business is required";
  }else if (empty($participated)) {
    $status =  "Have you participated in the previous editions of Guwahati Food Awards is required";
  }else if (empty($enterprise_total_no_employees)) {
    $status =  "Total No. of Employees is required";
  }else if (empty($enterprise_approx_monthly_billing)) {
    $status =  "Approx. Monthly Billing is required";
  }else if (empty ($approx_monthly_footfall)) {
    $status =  " Approx. Monthly Footfall is required";
  }else if (empty ($approx_monthly_footfall)) {
    $status =  " Approx. Monthly Footfall is required";
  }else if (empty ($enterprise_name_of_the_internet_service_provide)) {
    $status =  "Name of the internet service provide is required";
  }else if (empty ($enterprise_bank_name)) {
    $status =  "Bank Name is required";
  }else if (empty ($summary_of_your_enterprise)) {
    $status =  "Summary of your Enterprise is required";
  }
  else {
    try {
      $sql = "INSERT INTO `register`(`name_of_the_enterprise`,`name_of_the_promoter`,`designation`,`company_name`,`business_address`,`phone`,`mobile_no`,`email`,`website`,`month_year_business_started_for`,`legal_status_of_the_enterprise`,`Is_the_founder-or_promoter_still_actively_involved`,`categories_applied_for`,`why_do_you_think_your_outlet_is_best_in_the_category`,`item_that_you_are_proud_of_in_your_menu`,`how_often_do_you_add_a_new_dish_to_your_menu`,`do_you_think_you_need_to_improve_in_any_of_the_areas`,`do_you_accept_cashless_payment_modes_like_debit_credit`,`advertising_modules`,`outlet_rating`,`how_did_you_get_your_idea_for_the_business`,`have_you_participated_in the_previous_editions_of_guwahati_food`,`participated_year`,`enterprise_total_no_employees`,`enterprise_approx_monthly_billing`,`enterprise_approx_monthly_footfall`,`enterprise_name_of_the_internet_service_provide`,`enterprise_bank_name`,`summary_of_your_enterprise`)  VALUES('$name_of_the_enterprise','$name_of_the_promoter','$designation','$company_name','$address','$phone','$mobile_no','$email','$website','$month_year_was_the_business_started','$e_status','$top_management','$categories','$outlet_category_description','$dish_proud_menu','$new_dish_your_menu','$improve_any_area','$payment_mode','$promote_your_outlet','$outlet','$business_idea','$participated','$participated_year',' $enterprise_total_no_employees','$enterprise_approx_monthly_billing','$approx_monthly_footfall','$enterprise_name_of_the_internet_service_provide','$enterprise_bank_name','$summary_of_your_enterprise')";
      $conn->exec($sql);
      $msg = "Data Insert successfully";
    } catch (PDOException $e) {
      echo $e->getMessage();
      $warning = "Smothing is wrong";
    }
  }
  $message='<html>
  <head>
  <style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  </style>
  </head>
  <body>

  <h2>Guwahati Food award 2021</h2>
  <table style="width:100%">
  <tr>
  <th align="left">Name of the Enterprise:</th>
  <td align="left">'.$name_of_the_enterprise.'</td>  
  </tr>
  <tr>
  <th align="left">Name of the Promoter/ Owner/ Head:</th>
  <td align="left">'.$name_of_the_promoter.'</td> 
  </tr>
  <tr>
  <th align="left">Designation:</th>
  <td align="left">'.$designation.'</td> 
  </tr>
  <tr>
  <th align="left">Company Name (If different from Enterprise name):</th>
  <td align="left">'.$company_name.'</td> 
  </tr>
  <tr>
  <th align="left">Business address:</th>
  <td align="left">'.$address.'</td> 
  </tr>
  <tr>
  <th align="left">Phone:</th>
  <td>'.$phone.'</td> 
  </tr>
  <tr>
  <th align="left">Mobile: +91</th>
  <td align="left">'.$mobile_no.'</td> 
  </tr>
  <tr>
  <th align="left">Email:</th>
  <td align="left">'.$email.'</td> 
  </tr>
  <tr>
  <th align="left">Website:</th>
  <td align="left">'.$website.'</td> 
  </tr>

  </table>
  <h2>Overall Information About The Enterprise</h2>
  <table style="width:100%">
  <tr>
  <th align="left">In which month/year was the business started?</th>
  <td align="left">'.$month_year_was_the_business_started.'</td> 
  </tr>
  <tr>
  <th align="left">What is the legal status of the Enterprise? Please mark a tick against option relevant to you:</th>
  <td align="left">'.$e_status.'</td> 
  </tr>
  <tr>
  <th align="left">Is the Founder/Promoter still actively involved in top management?</th>
  <td align="left">'.$top_management.'</td> 
  </tr>
  <tr>
  <th align="left">Categories Applied for (Refer to enclosure for categories. Can apply for up to 5 categories only)</th>
  <td align="left">'.$categories.'</td> 
  </tr>
  </table>
  <h2></h2>
  <br>
  <br>
  <table style="width:100%">  
  <tr>
  <th align="left">10)Why do you think your outlet is best in the category/categories you have contested for?</th>
  <td align="left">'.$outlet_category_description.'</td> 
  </tr>
  <tr>
  <th align="left">11)The dish/ item that you are proud of in your menu?</th>
  <td align="left">'.$dish_proud_menu.'</td> 
  </tr>
  <tr>
  <th align="left">How often do you add a new dish/ item to your menu?</th>
  <td align="left">'.$new_dish_your_menu.'</td> 
  </tr>
  <tr>
  <th align="left">Do you think you need to improve in any of the areas? If yes, where?</th>
  <td align="left">'.$improve_any_area.'</td> 
  </tr>
  <tr>
  <th align="left">Do you accept cashless payment modes like Debit/ Credit Card, eWallets etc. at your outlet?</th>
  <td align="left">'.$payment_mode.'</td> 
  </tr>
  <tr>
  <th align="left">What are the different advertising modules have you opted so far to promote your Outlet? (Please in the appropriate box)</th>
  <td>'.$promote_your_outlet.'</td> 
  </tr>
  <tr>
  <th align="left">Please mention your outlet’s rating on the following platforms?</th>
  <td align="left">'.$outlet.'</td> 
  </tr>
  <tr>
  <th align="left"> How did you get your idea or concept for the business?</th>
  <td align="left">'.$business_idea.'</td> 
  </tr>
  <tr>
  <th align="left">Have you participated in the previous editions of Guwahati Food Awards?</th>
  <td align="left">'. $participated.'</td> 
  </tr>
  </table>
  <h2>Other Information about the Enterprise?</h2>
  <table style="width:100%">

  <tr>
  <th align="left">Total No. of Employees</th>
  <td align="left">'. $enterprise_total_no_employees.'</td> 
  </tr>
  <tr>
  <th align="left"> Approx. Monthly Billing</th>
  <td align="left">'. $enterprise_approx_monthly_billing.'</td> 
  </tr>
  <tr>
  <th align="left"> Approx. Monthly Footfall</th>
  <td align="left">'.  $approx_monthly_footfall.'</td> 
  </tr>
  <tr>
  <th align="left"> Name of the internet service provide</th>
  <td align="left">'.  $enterprise_name_of_the_internet_service_provide.'</td> 
  </tr>
  <tr>
  <th align="left"> Bank Name</th>
  <td align="left">'.  $enterprise_bank_name.'</td> 
  </tr>
  </table>
  <h2></h2>
  <br>
  <br>
  <table style="width:100%">
  <tr>
  <th align="left">Summary of your Enterprise</th>
  <td align="left">'.$summary_of_your_enterprise.'</td> 
  </tr>
  </table>

  </body>
  </html> ';
    //Mail

    //PHPMailer Object
  $mail = new PHPMailer(true);

    //Enable SMTP debugging.
  $mail->SMTPDebug = false;
    //Set PHPMailer to use SMTP.
  $mail->isSMTP();
    //Set SMTP host name                          
  $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = true;
    //Provide username and password     
  $mail->Username = "webcomiplghy@gmail.com";
  $mail->Password = "qwesfbrvcrueyyiw";
    //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "tls";
    //Set TCP port to connect to
  $mail->Port = 587;

  $mail->From = "webcomiplghy@gmail.com";
  $mail->FromName = "Guwahati Food award 2021";

  $mail->addAddress("info@g-plus.in", "Guwahati Food award 2021");

  $mail->isHTML(true);

  $mail->Subject = "Guwahati Food award 2021";
    //$mail->Body = "Mail body in HTML";
  $mail->msgHTML($message);
  $mail->altBody = "This is the plain text version of the email content";

  $mail->SMTPOptions = array(
    'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
    )
  );

  try {

    $mail->send();

    echo "Message has been sent successfully";
  } catch (Exception $e) {
   echo "Mailer Error: " . $mail->ErrorInfo;
 }

    //ENd mail
}

?>