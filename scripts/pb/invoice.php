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
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "bie_invoice";

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
$invoice_date = new DateTime($school_data["invoice_date"]);
$payment_currency = $school_data["payment_currency"];
$payment_due_date = !empty($school_data["payment_due_date"]) ? new DateTime($school_data["payment_due_date"]) : new DateTime(date('Y-m-d', strtotime("+1 week", strtotime($school_data["invoice_date"]))));
$trans_id = $school_data["trans_id"];

if ($payment_currency === "CZK") {
    $lang = "cz";
    $date_formated = $invoice_date->format('d.m.Y');
    $due_date_formated = $payment_due_date->format('d.m.Y');
} else {
    $lang = "en";
    $date_formated = $invoice_date->format('Y-m-d');
    $due_date_formated = $payment_due_date->format('Y-m-d');
}

$strings = array(
    "cz" => array(
        "invoice" => "Faktura",
        "bill_from" => "Dodavatel",
        "bill_to" => "Odběratel",
        "bank_account" => "2800518093/2010",
        "bic" => "",
        "iban" => "",
        "item" => "Předmět",
        "amount" => "Částka",
        "prague"=> "Praha",
        "total_amount" => "900,- Kč",
        "payment_information" => "Informace o platbě",
        "account" => "Číslo účtu",
        "reference_number" => "Variabilní číslo",
        "inv_number" => "Číslo faktury",
        "date" => "Datum vystavení",
        "due_date" => "Datum splatnosti",
        "license_fee" => "licenční poplatek (přefakturace bez DPH)",
        "already_paid" => "JIŽ UHRAZENO", 
        "commercial_register" => "zapsané v obchodním rejstříku vedeném Městským soudem v Praze pod sp. zn. C 218282",
        "ic_dic" => "02419386",
        "tax" => ""
    ),
    "en" => array(
        "invoice" => "Invoice",
        "bill_from" => "Bill from",
        "bill_to" => "Bill to",
        "bank_account" => "2800518093",
        "bic" => "BIC/SWIFT: FIOBCZPPXXX",
        "iban" => "IBAN: CZ1020100000002200526292",
        "item" => "Item",
        "amount" => "Amount",
        "prague"=> "Prague",
        "total_amount" => "35,- EUR",
        "payment_information" => "Payment information",
        "account" => "Account",
        "reference_number" => "Reference number",
        "inv_number" => "Invoice number",
        "date" => "Date of issue",
        "due_date" => "Due date",
        "license_fee" => "license fee",
        "already_paid" => "ALREADY PAID",
        "commercial_register" => "entered into the Commercial register administered by the City court of Prague under C 218282",
        "ic_dic" => "CZ02419386",
        "tax" => "Value added tax - forwarded invoicing without VAT charged", 
    )
);
require('./tfpdf/tfpdf.php');

class PDF extends tFPDF
{
    // Page header 
    function Header()
    {
        global $invoice_number;
        global $date_formated;
        global $due_date_formated;
        global $school_id;
        global $lang;
        global $strings;

        // Logo
        $this->SetY(15);
        $this->Image('../../img/czech-us_transparent.png', 25, 15, 55);
        $this->Cell(120);
        $this->SetFont('DejaVu', '', 8);
        $this->Cell(40, 5,  $strings[$lang]["inv_number"] . ': ' . $invoice_number, 0, 2, 'L');
        $this->Cell(40, 5, $strings[$lang]["date"] . ': ' . $date_formated, 0, 2, 'L');
        $this->Cell(40, 5, $strings[$lang]["due_date"] . ': ' . $due_date_formated, 0, 2, 'L');
        $this->Cell(40, 5, 'ID: ' . $school_id, 0, 1, 'L');
    }

    function Main()
    {
        global $school_name;
        global $school_street;
        global $school_code;
        global $school_city;
        global $school_country;
        global $school_vat;
        global $invoice_number;
        global $lang;
        global $strings;
        global $trans_id;

        //TITLE
        $this->Cell(55);
        $this->SetFont('DejaVu', '', 22);
        $this->Cell(40, 20, $strings[$lang]["invoice"], 0, 1, 'C');
        //BILL FROM / TO
        $this->SetFont('DejaVu', '', 18);
        $this->Cell(40, 12, $strings[$lang]["bill_from"], 0, 0, 'L');
        $this->Cell(40);
        $this->Cell(40, 12, $strings[$lang]["bill_to"], 0, 1, 'L');
        $this->SetFont('DejaVu', '', 12);
        $this->Cell(40, 8, 'Czech-us Studium v zahraničí s.r.o.', 0, 0, 'L');
        $this->Cell(40);
        $this->MultiCell(0, 8, $school_name, 0, 'L');
        $this->Cell(40, 8, $strings[$lang]["ic_dic"], 0, 0, 'L');
        $this->Cell(40);
        $this->Cell(0, 8, $school_vat, 0, 1, 'L');
        $this->Cell(40, 8, 'Vodičkova 730/9', 0, 0, 'L');
        $this->Cell(40);
        $this->Cell(0, 8, $school_street, 0, 1, 'L');
        $this->Cell(40, 8, '11000', 0, 0, 'L');
        $this->Cell(40);
        $this->Cell(0, 8, $school_code, 0, 1, 'L');
        $this->Cell(40, 8, $strings[$lang]['prague'], 0, 0, 'L');
        $this->Cell(40);
        $this->Cell(0, 8, $school_city, 0, 1, 'L');
        $this->Cell(40, 8, 'Czech Republic', 0, 0, 'L');
        $this->Cell(40);
        $this->Cell(0, 8, $school_country, 0, 1, 'L');
        // TABLE
        $this->Ln(5);
        $this->SetFillColor(200, 200, 200);
        $this->Cell(130, 10, $strings[$lang]['item'], 0, 0, 'L', true);
        $this->Cell(30, 10, $strings[$lang]['amount'], 0, 0, 'L', true);
        $this->Ln(12);
        $this->SetFillColor(0);
        $this->Cell(130, 8, 'Best In English 2020 ' . $strings[$lang]['license_fee'], 0, 0, 'L');
        $this->Cell(20, 8, $strings[$lang]['total_amount'], 0, 1, 'L');
        if ($lang === "en") {
            $this->Cell(130, 8, $strings[$lang]['tax'], 0, 1, 'L');
        }
        $this->Ln(5);
        // IF REF ID -> ALREADY PAID 
        if (isset($_GET['trans_id']) && $_GET['trans_id'] === $trans_id) {
            $this->SetFont('DejaVu', '', 25);
            $this->SetTextColor(255, 0, 0);
            $this->SetDrawColor(255, 0, 0);
            $this->Cell(0, 10, $strings[$lang]["already_paid"], 0, 1, 'C');
            $this->SetTextColor(0, 0, 0);
            $this->SetFont('DejaVu', '', 12);
        }
        $this->Ln(5);
        // PAYMENT INFORMATION
        $this->SetFont('DejaVu', '', 15);
        $this->Cell(0, 12, $strings[$lang]["payment_information"], 0, 1, 'L');
        $this->SetFont('DejaVu', '', 12);
        $this->Cell(0, 8, $strings[$lang]['amount'] . ': ' . $strings[$lang]['total_amount'], 0, 1, 'L');
        $this->Cell(0, 8, $strings[$lang]['account'] . ': ' . $strings[$lang]['bank_account'], 0, 1, 'L');
        $this->Cell(0, 8, $strings[$lang]['reference_number'] . ': ' . $invoice_number, 0, 1, 'L');
        if (strlen($strings[$lang]['iban']) > 0) {
            $this->Cell(0, 8, $strings[$lang]['iban'], 0, 1, 'L');
            $this->Cell(0, 8, $strings[$lang]['bic'], 0, 1, 'L');
        }
        $this->Cell(0, 8, 'Fio banka, a.s., V Celnici 1028/10, Prague 1, Czech Republic', 0, 1, 'L');
        $this->Cell(100);
        $this->Image('../../img/podpis-studium.jpg', null, null, 60);
    }

    // Page footer
    function Footer()
    {
        global $strings;
        global $lang;
        // Position at 1.5 cm from bottom
        $this->SetY(-25);
        // DejaVu italic 8
        $this->SetFont('DejaVu', '', 10);
        // Page number
        $this->MultiCell(0, 5, 'Czech-us Studium v zahraničí s.r.o. ' . $strings[$lang]["commercial_register"], 0, 'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AddFont('DejaVu', '', './DejaVuSansCondensed.ttf', true);
$pdf->SetFont('DejaVu', '', 14);
$pdf->SetMargins(25, 15, 25);
$pdf->AddPage();
$pdf->Main();
$pdf->Output('bie-invoice-' . $invoice_number . '.pdf', 'I', true);
