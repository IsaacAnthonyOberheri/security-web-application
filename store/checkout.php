
<?php
session_start();

require 'vendor/autoload.php';


$stripeSecretKey = 'sk_test_51LFGHWCcZd9r1KONZVTMhWdkfF1dTZIi1IxdFQe1ViSVAsmqS9JfhLcpDimiTQAlU28t73yDKxXEy6oQFSHSiPab00ZSE52UMT';

$stripe = new \Stripe\StripeClient($stripeSecretKey);
$YOUR_DOMAIN = 'http://localhost/securetech/store';



$details = json_decode($_POST['details']);
$other_details = json_decode($_POST['other_details']);

$_SESSION['customer_email'] = $other_details[0]->email;
$_SESSION['customer_full_names'] = $other_details[0]->full_names;
$_SESSION['customer_phone_number'] = $other_details[0]->phone_number;
$_SESSION['customer_shipping_address'] = trim($other_details[0]->shipping_address);

//print_r($other_details);

//echo $details[1]->increment;

$length = count($details);

$increment = [];
$item_name = [];
$price = [];

for ($i =0; $i<$length; $i++){
  array_push($increment,  $details[$i]->increment);
  array_push($item_name,  $details[$i]->item_name);
  array_push($price,  $details[$i]->price );
}

$zip_up = array_map(null, $increment, $item_name, $price);

//echo print_r($zip_up);
//echo $zip_up[0][0];
//echo count($zip_up);



$empty_info = [];

for($i=0; $i<$length; $i++){

  array_push($empty_info, [
    'price_data' => [
      'currency' => 'usd',
      'product_data' => [
        'name' => $item_name[$i],
      ],
      'unit_amount' => $price[$i]*100,
    ],
    'quantity' => $increment[$i],
  ]);

}





  
    $checkout_session = $stripe->checkout->sessions->create([

      'line_items' => [

        $empty_info

    ],
    // 'retrieve' => [
    //   'email' => $customer_email
    // ],

      'mode' => 'payment',
      'success_url' => $YOUR_DOMAIN."/success.php",
      'success_url' => $YOUR_DOMAIN."/success.php?session_id={CHECKOUT_SESSION_ID}",
      'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
    ]);






//header("HTTP/1.1 303 See Other");
if($length >0){
  //header("Location: " .$checkout_session->url);
 echo $checkout_session->url;
}

?>


