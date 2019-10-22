
<?php
// POST FROM FORM
$school_id = $_POST["school_id"];
$school_name = $_POST["school_name"];
$school_street = $_POST["school_street"];
$school_city = $_POST["school_city"];
$school_code = $_POST["school_code"];
$school_country = $_POST["school_country"];
$payment_currency = $_POST["payment_currency"];

$date = date('Y-m-d');

if($payment_currency === "CZK") {
    $bank_account = "<p><strong>Bank account:</strong> 2800518093/2010</p>";
} else {
    $bank_account =  "<p><strong>Bank account ID:</strong> 2200526292</p>
    <p><strong>IBAN:</strong> CZ5220100000002200526292</p>
    <p><strong>BIC/SWIFT:</strong> FIOBCZPPXXX</p>
    ";
} 

$total_amount = $payment_currency === "CZK" ? "900CZK" : "35EUR";

// DB INVOICE NUMBER
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

$get_invoice_number = "SELECT number FROM invoice_number WHERE id = 1";

$result = mysqli_query($conn, $get_invoice_number);
$invoice_number = mysqli_fetch_assoc($result)["number"];

$sql_update_number = "UPDATE invoice_number SET number = $invoice_number + 1 WHERE id = 1";
$result2 = mysqli_query($conn, $sql_update_number);

$sql_save_invoice = "INSERT INTO invoices VALUES ($invoice_number, '$school_id', '$school_street', '$school_city', '$school_code', '$school_country', '$payment_currency', '$date')";
$result3 = mysqli_query($conn, $sql_save_invoice);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="./style.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>
<div class="book">
    <div class="page-wrapper">
        <div class="page">
            <div class="subpage invoice">
                <h1 class="invoice__title">Invoice</h1>
                <div class="invoice__meta">
                    <p>Number: <?php echo $invoice_number ?></p>
                    <p>Date: <?php echo $date ?></p>
                    <p>ID: <?php echo $school_id ?></p>    
                </div>

                <div class="invoice__logo">
                    <img src="logo.svg" />
                </div>

                <div class="invoice__bill-from">
                    <h2>Bill from:</h2>
                    <p>Czech-us Studium v zahraničí s.r.o.</p>
                    <p>Vodičkova 791/41</p>
                    <p>11000</p>
                    <p>Prague, Czech Republic</p>
                </div>

                <div class="invoice__bill-to">
                    <h2>Bill to:</h2>
                    <p><?php echo $school_name ?></p>
                    <p><?php echo $school_street ?></p>
                    <p><?php echo $school_city ?></p>
                    <p><?php echo $school_code ?></p>
                    <p><?php echo $school_country ?></p>
                </div>
                
                <div class="invoice__description">
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    item
                                </th>
                                <th>
                                    amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Best In English 2019
                                    license fee
                                </td>
                                <td>
                                    <?php 
                                    echo $total_amount
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="invoice__total-amount">
                        <h2>Payment information:</h2>
                        <p><strong>Amount:</strong> <?php echo $total_amount ?></p>
                        <p><?php echo $bank_account ?></p>
                        <p><strong>Reference number:</strong> <?php echo $invoice_number ?></p>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  
<script>
(function CreatePDFfromHTML() {
    html2canvas($(".page")[0]).then(function (canvas) {
        var imgData = canvas.toDataURL("image/jpeg", 1.0);
        var pdf = new jsPDF();
        pdf.addImage(imgData, 'JPG', 0, 0);

        pdf.save("BIE-invoice-<?php echo $invoice_number ?>.pdf");
    });
})();
</script>
</body>
</html>