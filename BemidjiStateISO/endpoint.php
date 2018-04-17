<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- trying out bootstrap/4 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="alert alert-danger" role="alert">

<?php
require 'vendor/autoload.php';
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

define("AUTHORIZENET_LOG_FILE","phplog");

// Common setup for API credentials
 $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
 $merchantAuthentication->setName(\Keys\Constants::MERCHANT_LOGIN_ID);
 $merchantAuthentication->setTransactionKey(\Keys\Constants::MERCHANT_TRANSACTION_KEY);
 $refId = 'ref' . time();

// Create the payment data for a credit card
  $creditCard = new AnetAPI\CreditCardType();
  $creditCard->setCardNumber($_POST['CreditCardNumber']);  //$_POST['CreditCardNumber'] | Default = "4111111111111111"
  $creditCard->setExpirationDate($_POST['ExpiryDate']); // $_POST['ExpiryDate'] | Default "2038-12"
  $paymentOne = new AnetAPI\PaymentType();
  $paymentOne->setCreditCard($creditCard);

// Create a transaction
  $transactionRequestType = new AnetAPI\TransactionRequestType();
  $transactionRequestType->setTransactionType("authCaptureTransaction");
  $transactionRequestType->setAmount(35); //$_POST['PaymentAmount']
  $transactionRequestType->setPayment($paymentOne);
  $request = new AnetAPI\CreateTransactionRequest();
  $request->setMerchantAuthentication($merchantAuthentication);
  $request->setRefId( $refId);
  $request->setTransactionRequest($transactionRequestType);
  $controller = new AnetController\CreateTransactionController($request);
  $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);

if ($response != null)
{
  $tresponse = $response->getTransactionResponse();
  if (($tresponse != null) && ($tresponse->getResponseCode()=="1"))
  {
	echo "<h4 class='alert-heading display-3'>"."Congratulations! ".$_POST['NameOnCard']."!!"."</h4>"."<p style='font-size:30px;'> Your payment of $35.00 has been received. \n"."Thanks for signing up for ISO membership. </p>";  
    echo "AUTH CODE : " . $tresponse->getAuthCode() . "\n";
    echo "TRANSACTION ID  : " . $tresponse->getTransId() . "\n";
  }
  else
  {
    echo "Charge Credit Card ERROR :  Invalid response\n";
  }
}
else
{
  echo  "Charge Credit Card Null response returned";
}
?>


</div>
</body>
</html>
