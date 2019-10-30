<?php

require_once dirname(__FILE__).'/common.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang='cs' xml:lang='cs' xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='content-type' content='text/html; charset=utf-8' />
    <title>Payments protocol simple</title>
</head>
<body>

<?php

try {
    // get transaction status from my database
    $status = $paymentsDatabase->getTransactionStatus(
        $_GET['id'],   // transId
        $_GET['refId'] // refId
    );

    if ($status === "PAID") {
        // save ref ID to invoice DB
        $servername = "localhost";
        $username = "bestinenglis4165";
        $password = "EwRsrWJLSU";
        $dbname = "bestinenglish2028";
    
        $conn = new mysqli($servername, $username, $password, $dbname);

        $refId = $_GET['refId'];

        $stmt = $conn->prepare("SELECT `invoice_id` FROM `invoices` WHERE `ref_id`=?");
        $stmt->bind_param("i", $refId);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        $invoice_number = $result["invoice_id"];
        $stmt->close();

        mysqli_close($conn);
        echo '<h2>Thank your for your payment</h2>';
        echo '<a href="./invoice.php/?invoice_number='.$invoice_number.'&ref_id='.$refId.'" target="_blank">Download your invoice</a>';
        echo '<a href="/">Go to homepage!</a>';
    } else if ($status === "PENDING") {
        echo '<H2>Cannot validate your payment!</H2>';
        echo '<p>Contact our team or try payment later.</p>';
        echo '<a href="/">Go to homepage!</a>';
    } else if ($status === "CANCELLED") {
        echo '<p>Cannot check the payment status!</p>';
        echo '<a href="/form.php">Try again later!</a>';
        echo '<a href="/">Go to homepage!</a>';
    }
}
catch (Exception $e) {
    echo '<H2>Cannot check the payment status!</H2>';
    echo '<a href="/form.php">Try again later!</a>';
    echo '<a href="/">Go to homepage!</a>';
}
?>
</body>
</html>

