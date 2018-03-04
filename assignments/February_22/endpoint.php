<?php
require 'sdk-php-master/autoload.php';

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

define("AUTHORIZENET_LOG_FILE","phplog");

// Common setup for API credentials
$merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
$merchantAuthentication->setName("2L27nRcn"); //""
$merchantAuthentication->setTransactionKey("3yr9Zp8n8H72fN6P");
$refId = 'ref' . time();

// Create the payment data for a credit card
$creditCard = new AnetAPI\CreditCardType();
$creditCard->setCardNumber($_POST['CreditCardNumber'] ); //post variable
$creditCard->setExpirationDate( $_POST['ExpiryDate']);
$paymentOne = new AnetAPI\PaymentType();
$paymentOne->setCreditCard($creditCard);

// Create a transaction
$transactionRequestType = new AnetAPI\TransactionRequestType();
$transactionRequestType->setTransactionType("authCaptureTransaction");
$transactionRequestType->setAmount($_POST['PaymmentAmount']);
$transactionRequestType->setPayment($paymentOne);
$request = new AnetAPI\CreateTransactionRequest();
$request->setMerchantAuthentication($merchantAuthentication);
$request->setRefId( $refId);
$request->setTransactionRequest($transactionRequestType);
$controller = new AnetController\CreateTransactionController($request);
$response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);

$body = null;
if ($response != null)
{
    $tresponse = $response->getTransactionResponse();
    if (($tresponse != null) && ($tresponse->getResponseCode()=="1"))
    {
        $body .= "Charge Credit Card AUTH CODE : " . $tresponse->getAuthCode() . "\n";
        $body .= "Charge Credit Card TRANS ID  : " . $tresponse->getTransId() . "\n";
    }
    else
    {
        $body .= "Charge Credit Card ERROR :  Invalid response, error code ". $tresponse->getResponseCode() ."\n";
        $_SESSION['error'] = $body;
        header( 'Location:index.php');
        exit();
    }
}
else
{
    $body .=  "Charge Credit Card Null response returned";
}

?>