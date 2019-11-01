<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$invoice_number = $_GET['invoice_number'];

// DB 
$servername = "localhost";
$username = "bestinenglis4165";
$password = "EwRsrWJLSU";
$dbname = "bestinenglish2028";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

$stmt = $conn->prepare("SELECT * FROM invoices WHERE invoice_id = ?");
$stmt->bind_param("i", $invoice_number);
$stmt->execute();
$school_data = $stmt->get_result()->fetch_assoc();
$stmt->close();

mysqli_close($conn);

$school_id = $school_data["school_id"];
$school_vat = $school_data["school_vat"];
$school_name = $school_data["school_name"];
$school_street = $school_data["school_street"];
$school_city = $school_data["school_city"];
$school_code = $school_data["school_code"];
$school_country = $school_data["school_country"];
$invoice_date = $school_data["invoice_date"];
$payment_currency = $school_data["payment_currency"];

$iban;
$bic;

if($payment_currency === "CZK") {
    $bank_account = "Account: 2800518093/2010";
} else {
    $bank_account = "Account: 2200526292";
    $iban = "IBAN: CZ1020100000002200526292";
    $bic = "BIC/SWIFT: FIOBCZPPXXX";
} 

$total_amount = $payment_currency === "CZK" ? "900CZK" : "35EUR";

require('./fpdf/fpdf.php');

class PDF extends FPDF {
// Page header
function Header() {
    global $invoice_number;
    global $invoice_date;
    global $school_id;

    // Logo
    $this->SetY(15);
    $this->Image('../../img/czech-us_transparent.png',25,15,55);
    $this->Cell(120);
    $this->SetFont('Roboto','',8);
    $this->Cell(40,5,'Inv number: '.$invoice_number, 0,2,'L');
    $this->Cell(40,5,'Date: '.$invoice_date, 0,2,'L');
    $this->Cell(40,5,'ID: '.$school_id, 0,1,'L');
}

function Main() {
    global $school_name;
    global $school_street;
    global $school_code;
    global $school_city;
    global $school_country;
    global $school_vat;
    global $total_amount;
    global $bank_account;
    global $invoice_number;
    global $iban;
    global $bic;
    
    //TITLE
    $this->Cell(55);
    $this->SetFont('Roboto','',22);
    $this->Cell(40,40,'Invoice',0,1,'C');
    //BILL FROM / TO
    $this->SetFont('Roboto','',18);
    $this->Cell(40, 12,'Bill from:',0,0,'L');
    $this->Cell(40);
    $this->Cell(40, 12,'Bill to:',0,1,'L');    
    $this->SetFont('Roboto','',12);
    $this->Cell(40, 10,iconv('UTF-8', 'ISO-8859-2', 'Czech-us Studium v zahraničí s.r.o.'),0,0,'L');
    $this->Cell(40);
    $this->MultiCell(0, 10,iconv('UTF-8', 'ISO-8859-2', $school_name),0,'L');
    $this->Cell(40, 10,'CZ02419386',0,0,'L');
    $this->Cell(40);
    $this->Cell(0, 10,$school_vat,0,1,'L');
    $this->Cell(40, 10,iconv('UTF-8', 'ISO-8859-2','Vodičkova 791/41'),0,0,'L');
    $this->Cell(40);
    $this->Cell(0, 10,iconv('UTF-8', 'ISO-8859-2', $school_street),0,1,'L');
    $this->Cell(40, 10,'11000',0,0,'L');
    $this->Cell(40);
    $this->Cell(0, 10,$school_code,0,1,'L');
    $this->Cell(40, 10,'Prague',0,0,'L');
    $this->Cell(40);
    $this->Cell(0, 10,iconv('UTF-8', 'ISO-8859-2',$school_city),0,1,'L');
    $this->Cell(40, 10,'Czech Repbublic',0,0,'L');
    $this->Cell(40);
    $this->Cell(0, 10,iconv('UTF-8', 'ISO-8859-2', $school_country),0,1,'L');
    // TABLE
    $this->Ln(10);
    $this->SetFillColor(200,200,200);
    $this->Cell(110,10,'ITEM',0,0,'L', true);
    $this->Cell(50,10,'AMOUNT',0,0,'L', true);
    $this->Ln(12);
    $this->SetFillColor(0);
    $this->Cell(110,10,'Best In English 2019 license fee',0,0,'L');
    $this->Cell(50,10,$total_amount,0,1,'L');
    $this->Ln(5);
    // IF REF ID -> ALREADY PAID 
    if (isset($_GET['trans_id'])) {
        $this->SetFont('Arial', 'b', 25);
        $this->SetTextColor(255,0,0);
        $this->SetDrawColor(255,0,0);
        $this->Cell(0, 10, 'ALREADY PAID', 0, 1, 'C');
        $this->SetTextColor(0,0,0);
        $this->SetFont('Roboto','',12);
    }
    $this->Ln(5);
    // PAYMENT INFORMATION
    $this->SetFont('Roboto','',15);
    $this->Cell(0,12,'Payment information:',0,1,'L');
    $this->SetFont('Roboto','',12);
    $this->Cell(0,10,'Amount: '.$total_amount,0,1,'L');
    $this->Cell(0,10,$bank_account,0,1,'L');
    $this->Cell(0,10,'Reference number: '.$invoice_number,0,1,'L');
    if($iban) {
        $this->Cell(0,10,$iban,0,1,'L');
        $this->Cell(0,10,$bic,0,1,'L');
    }
    $this->Cell(0,10,'Fio banka, a.s., V Celnici 1028/10, Prague 1, Czech Republic',0,1,'L');
}

// Page footer
function Footer() {
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Roboto italic 8
    $this->SetFont('Roboto','',10);
    // Page number
    $this->Cell(0,10,iconv('UTF-8', 'ISO-8859-2', 'Czech-us Studium v zahraničí s.r.o.'),0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AddFont('Roboto','','Roboto-Regular.php');
$pdf->SetMargins(25, 25, 25);
$pdf->AddPage();
$pdf->Main();
$pdf->Output('I', 'invoice-bie-'.$invoice_number.'.pdf',true);

?>

