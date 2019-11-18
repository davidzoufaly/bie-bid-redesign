<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__).'/common.php';

try {
    $currency = $_POST["payment_currency"];
    $currency === "CZK" ? $price = 900 : $price = 35;
    $invoice_number = $_POST["invoice_number"];
    $currency === "CZK" ? $lang = "cs" : $lang = "en";

    if(!empty($_POST['method'])) {       
        $method = $_POST['method'];
    } else {
        $method = "CARD_CZ_BS";
    }
    // "CARD_CZ_BS" 

    // prepare payment parameters
    $refId = $paymentsDatabase->createNextRefId();

     // create new payment transaction
     $paymentsProtocol->createTransaction(
         'ALL',                 // country
         $price,             // price
         $currency,          // currency
         $invoice_number,     // label
         $refId,             // refId
         NULL,               // payerId
         'STANDARD',         // vatPL
         'PHYSICAL',         // category
         $method,   // method
         '',
         isset($_POST['email']) ? $_POST['email'] : '',
         '',
         '',
         $lang
     );

     $transId = $paymentsProtocol->getTransactionId();

    // save transaction data
    $paymentsDatabase->saveTransaction(
        $transId,       // transId
        $refId,         // refId
        $price,         // price
        $currency,      // currency
        'PENDING'       // status
    );

    // save trans ID to invoice DB
    $servername = "localhost";
    $username = "bestinenglis4165";
    $password = "EwRsrWJLSU";
    $dbname = "bestinenglish2028";
    // $servername = "localhost";
    // $username = "root";
    // $password = "root";
    // $dbname = "bie_invoice";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $stmt = $conn->prepare("UPDATE `invoices` SET `trans_id`=? WHERE `invoice_id`=?");
    
    $stmt->bind_param("si", $transId, $invoice_number);
    $stmt->execute();
    $stmt->close();
    mysqli_close($conn);

    // redirect to agmo payments system
    header('location: '.$paymentsProtocol->getRedirectUrl());

}
catch (Exception $e) {
    header('Content-Type: text/plain; charset=UTF-8');
    echo "ERROR\n\n";
    echo $e->getMessage();
}
