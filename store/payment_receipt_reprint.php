<?php

require '../db_dbase/dbConfig.php';

//example of payment link
//http://localhost/securetech/store/payment_receipt_reprint.php?session_id=cs_test_b1MKZolfEBQntGYBK0YB4lI5kTPiCrNuA7OH9PIwm8DyOXqxttTcX847yI

$session_id = $_GET['session_id'];


$select = "SELECT * FROM store_shop WHERE session_id = '$session_id'  ";
$result = mysqli_query($con, $select);
$user = mysqli_fetch_array($result);


$length = mysqli_num_rows($result);



$billing_address = trim($user['billing_address']);
$phone_number = $user['customers_phone_number'];
$customer_name = $user['customers_name'];
$customer_email = $user['customers_email'];

$address_and_email = $billing_address."\n".$customer_email;








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
$pdf->Cell(80,10,'Secure Tech Securities', $no_border, $position_right, $align_left );
$pdf->Cell(110,10,'Bill To', $no_border, $position_next_line, $align_left );


$pdf->SetFont('Arial', '', 13);
$pdf->Cell(80,10,'+1 974-256-5647', $no_border, $position_right, $align_left );
$pdf->Cell(110,10,$customer_name, $no_border, $position_next_line, $align_left );

$pdf->Cell(80,1,'', $no_border, $position_next_line, $align_left );

$pdf->Cell(80,10,'support@securetech.co', $no_border, $position_right, $align_left );
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




$total_amount = [];

$select2 = "SELECT * FROM store_shop WHERE session_id = '$session_id'  ";
$result2 = mysqli_query($con, $select2);
while($user_loop = mysqli_fetch_array($result2)){

    $pdf->ln();

    $pdf->SetDrawColor(0,0,0);
    

    $pdf->Cell(95,10,$user_loop['product_name'], $border_bottom, $position_right, $align_left );
    $pdf->Cell(25,10,$user_loop['quantity'], $border_bottom, $position_right, $align_center );
    $pdf->Cell(35,10,$user_loop['unit_price'],$border_bottom, $position_right, $align_center );
    $pdf->Cell(35,10, $user_loop['amount_total'], $border_bottom, $position_right, $align_center );

    array_push($total_amount, $user_loop['amount_total'] );

}





//loop section end




$pdf->ln();
$pdf->ln();
$pdf->SetDrawColor(0,0,0);


$pdf->Cell(100,10,'', $no_border, $position_right, $align_left );
$pdf->Cell(45,10,'Subtotal', $border_bottom, $position_right, $align_left );
$pdf->Cell(45,10, array_sum($total_amount).'.00', $border_bottom, $position_right, $align_right );

$pdf->ln();



$pdf->Cell(100,10,'', $no_border, $position_right, $align_left );
$pdf->Cell(45,10,'Total', $border_bottom, $position_right, $align_left );
$pdf->Cell(45,10, array_sum($total_amount).'.00', $border_bottom, $position_right, $align_right );

$pdf->ln();


$pdf->Cell(100,10,'', $no_border, $position_right, $align_left );

$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(45,10,'Amount due', $border_bottom, $position_right, $align_left );
$pdf->Cell(45,10, array_sum($total_amount).'.00', $border_bottom, $position_right, $align_right );


//$pdf->GetX();



$pdf->ln(); $pdf->ln();

$pdf->SetFillColor(84, 1, 144);
$pdf->setTextColor(255,255,255);
$pdf->SetFont('Arial', '', 13);

$pdf->Cell(190,10,'  A receipt download link has been sent to your mail. ', $no_border, 
$position_right, $align_left, true );



$pdf->Output('I', 'payment_receipt.pdf', 'boolean isUTF8' );


?>