<?php 
$product_name =  $_POST["product_name"]. " #  ".$_POST["product_name"];
$price = $_POST["product_price"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
print_r($_POST);
//die();
include 'src/instamojo.php';

$api = new Instamojo\Instamojo('test_6cf9994e136c86f70121fc72046', 'test_392be58dd70c2ecfe4a28e48a4c','https://test.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => substr($product_name,0,30),
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://pscquestion.in/payment/thankyou.php",
        "webhook" => "http://pscquestion.in/payment/webhook.php"
        ));
//    print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
  ?>