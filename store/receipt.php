<?php
session_start();
require 'vendor/autoload.php';
$stripeSecretKey = 'sk_test_51LFGHWCcZd9r1KONZVTMhWdkfF1dTZIi1IxdFQe1ViSVAsmqS9JfhLcpDimiTQAlU28t73yDKxXEy6oQFSHSiPab00ZSE52UMT';
$stripe = new \Stripe\StripeClient($stripeSecretKey);

$value = $stripe->checkout->sessions->retrieve(
  $_GET['session_id'],
);

$value2 = $stripe->checkout->sessions->allLineItems(
  $_GET['session_id'],
);
//'cs_test_b1lJfexicoUIR8O1JECyO8kiZGhFXgGFX3tjxCt7Zy3NBmuBsUgp9UNZGp'
$total = '$'.(($value->amount_total)/100).'.00';
// $customer_email = $value->customer_details->email;
// $customer_name = $value->customer_details->name;
$session_id = $value->id;

$payment_intent =  $value->payment_intent;
//$billing_address = $value->billing_address_collection;
//$phone_number = $value->customer_details->phone;
$date_created = $value->created;


// $billing_address = '12 Ewemade avenue of number crescent off newyork';
// $phone_number = 234508349023;
// $customer_name = 'Isaac Anthony';
// $customer_email = 'anthonpc50@live.com';

$billing_address = trim($_SESSION['customer_shipping_address']);
$phone_number = $_SESSION['customer_phone_number'];
$customer_name = $_SESSION['customer_full_names'];
$customer_email = $_SESSION['customer_email'];

$address_and_email = $billing_address."\n".$customer_email;



$length = count($value2);

// echo $value2->data[0]->id;
//echo $value2->data[1]->description;


// for($i=0; $i<$length; $i++){
//   echo "<div>".$value2->data[$i]->description."</div>";
//   echo "<div>".((int) $value2->data[$i]->price->unit_amount/100)."</div>";
//   echo "<div>".$value2->data[1]->quantity."</div>";
// }

//echo $value2."<br>";



//echo $value2->data[1]->price->unit_amount;








require ('fpdf/fpdf.php');

$pdf = new FPDF('p', 'mm', 'A4' );

$pdf->AddPage();






$border = 1;
$no_border = 0;
$border_bottom = 'B';
$border_top = 'T';


$position_right = 0;
$position_next_line = 1;
$position_below = 2; 

$align_center = 'C';
$align_left = 'L';
$align_right = 'R';



$pdf->SetFont('Arial', 'B', 22);
$pdf->Cell(130,20,'Invoice', $no_border, $position_right, $align_left );
$pdf->Image('images/securetech_logo.png', 148, 10, -800);

$pdf->ln();
$pdf->Cell(60,10,'',$no_border, $position_next_line, $align_left );


$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(80,10,'Secure Tech Solutions', $no_border, $position_right, $align_left );
$pdf->Cell(110,10,'Bill To', $no_border, $position_next_line, $align_left );


$pdf->SetFont('Arial', '', 13);
$pdf->Cell(80,10,'+1 974-256-5647', $no_border, $position_right, $align_left );
$pdf->Cell(110,10,$customer_name, $no_border, $position_next_line, $align_left );

$pdf->Cell(80,1,'', $no_border, $position_next_line, $align_left );

$pdf->Cell(80,10,'sales@securetechsolutions.org', $no_border, $position_right, $align_left );
$pdf->MultiCell(0,7, $billing_address, $no_border, $align_left);

$pdf->Cell(80,6,'', $no_border, $position_right, $align_left );
$pdf->Cell(80,7,$customer_email, $no_border, $position_next_line, $align_left );

$pdf->Cell(80,6,'', $no_border, $position_right, $align_left );
$pdf->Cell(80,7, $phone_number, $no_border, $position_right, $align_left );





$pdf->ln();$pdf->ln();
$pdf->ln(); $pdf->ln();




$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(95,10,'Description', $border_bottom, $position_right, $align_left );
$pdf->Cell(25,10,'Quantity', $border_bottom, $position_right, $align_center );
$pdf->Cell(35,10,'Unit price', $border_bottom, $position_right, $align_center );
$pdf->Cell(35,10,'Amount', $border_bottom, $position_right, $align_center );








$pdf->SetFont('Arial', '', 13);
//loop section start



for($i=0; $i< $length; $i++){

    $pdf->ln();

    $pdf->SetDrawColor(0,0,0);
    

    $pdf->Cell(95,10,$value2->data[$i]->description, $border_bottom, $position_right, $align_left );
    $pdf->Cell(25,10,$value2->data[$i]->quantity, $border_bottom, $position_right, $align_center );
    $pdf->Cell(35,10, ((int)$value2->data[$i]->price->unit_amount/100),$border_bottom, $position_right, $align_center );
    $pdf->Cell(35,10, ((int)$value2->data[$i]->price->unit_amount/100) * $value2->data[$i]->quantity, $border_bottom, $position_right, $align_center );


}






//loop section end




$pdf->ln();
$pdf->ln();
$pdf->SetDrawColor(0,0,0);


$pdf->Cell(100,10,'', $no_border, $position_right, $align_left );
$pdf->Cell(45,10,'Subtotal', $border_bottom, $position_right, $align_left );
$pdf->Cell(45,10, $total, $border_bottom, $position_right, $align_right );

$pdf->ln();



$pdf->Cell(100,10,'', $no_border, $position_right, $align_left );
$pdf->Cell(45,10,'Total', $border_bottom, $position_right, $align_left );
$pdf->Cell(45,10, $total, $border_bottom, $position_right, $align_right );

$pdf->ln();


$pdf->Cell(100,10,'', $no_border, $position_right, $align_left );

$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(45,10,'Amount due', $border_bottom, $position_right, $align_left );
$pdf->Cell(45,10, $total, $border_bottom, $position_right, $align_right );


//$pdf->GetX();



$pdf->ln(); $pdf->ln();

$pdf->SetFillColor(84, 1, 144);
$pdf->setTextColor(255,255,255);
$pdf->SetFont('Arial', '', 13);

$pdf->Cell(190,10,'  A receipt download link has been sent to your mail. ', $no_border, 
$position_right, $align_left, true );



//$pdf->Output('I', 'payment_receipt.pdf', 'boolean isUTF8' );

$pdf->Output('D', 'payment_receipt.pdf');

$pdf->Close();




?>