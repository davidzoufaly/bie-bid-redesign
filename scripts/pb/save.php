<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//POST FROM FORM
$arr = json_decode(file_get_contents('php://input'), true);

$school_id = $arr["school_id"];
$school_name = $arr["school_name"];
$school_street = $arr["school_street"];
$school_city = $arr["school_city"];
$school_code = $arr["school_code"];
$school_country_code = $arr["school_country_code"];
$school_country = $arr["school_country"];
$payment_currency = $arr["payment_currency"];
$ref_id = "";

// DB INVOICE NUMBER
$servername = "localhost";
$username = "bestinenglis4165";
$password = "EwRsrWJLSU";
$dbname = "bestinenglish2028";

$date = date('Y-m-d');
$id = 1;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT `number` FROM `invoice_number` WHERE `id`=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();
$invoice_number = $result["number"];

$new_invoice_number = $invoice_number + 1;

$stmt = $conn->prepare("UPDATE `invoice_number` SET `number`=? WHERE `id`=?");
$stmt->bind_param("ii", $new_invoice_number, $id);
$stmt->execute();
$stmt->close();

$stmt = $conn->prepare("INSERT INTO `invoices` VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssssssss", $invoice_number, $ref_id, $school_id, $school_name, $school_street, $school_city, $school_code, $school_country_code, $school_country, $payment_currency, $date);
$stmt->execute();
$stmt->close();

mysqli_close($conn);

header('Content-Type: application/json');
$response = array(
    'invoiceNumber' => $invoice_number,
    'error' => error_reporting(E_ALL),
    );
echo json_encode($response);
?>

