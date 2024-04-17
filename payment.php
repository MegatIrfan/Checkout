<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$some_data = array(
    'userSecretKey' => 'mfwdfvfn-8g6m-gmtk-c8ua-wx26kn1xsdnr',
    'categoryCode' => '48qug1l2',
    'billName' => 'Apple Product ',
    'billDescription' => 'iPhone 15 Pro 1TB' ,
    'billPriceSetting' => 1,
    'billPayorInfo' => 1,
    'billAmount' => '200',
    'billReturnUrl' => 'http://localhost/checkout/payment/status.php',
    'billCallbackUrl' => 'http://localhost/checkout/payment/status.php',
    'billExternalReferenceNo' => '',
    'billTo' => $name, //select from database to echo the name
    'billEmail' => $email, //select from database to echo the email
    'billPhone' => $phone, //select from database to echo the email
    'billSplitPayment' => 0,
    'billSplitPaymentArgs' => '',
    'billPaymentChannel' => 0,
);
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_URL, 'https://dev.toyyibpay.com/index.php/api/createBill');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);
$result = curl_exec($curl);
$info = curl_getinfo($curl);
curl_close($curl);
$obj = json_decode($result, true);
$billcode = $obj[0]['BillCode'];
?>
<!--SEND USER TO TOYYIBPAY PAYMENT-->
<script type="text/javascript">
    //redirect to payment gateway
    window.location.href = "https://dev.toyyibpay.com/<?php echo $billcode; ?>";
</script>