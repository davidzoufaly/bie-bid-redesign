<? /* Template Name: Invoice */ ?>

<?php get_template_part('/components/invoice-header'); ?>

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

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

$get_invoice_number = "SELECT number FROM invoice_number WHERE id = 1";

$result = mysqli_query($conn, $get_invoice_number);
$invoice_number = mysqli_fetch_assoc($result)["number"];

$sql_update_number = "UPDATE invoice_number SET number = $invoice_number + 1 WHERE id = 1";
$result2 = mysqli_query($conn, $sql_update_number);

$sql_save_invoice = "INSERT INTO invoices VALUES ($invoice_number, '$school_id', '$school_name','$school_street', '$school_city', '$school_code', '$school_country', '$payment_currency', '$date')";
$result3 = mysqli_query($conn, $sql_save_invoice);

mysqli_close($conn);
?>

<body>
    <div class="invoice-page-wrapper">
        <div class="invoice-page">
            <div class="invoice-subpage invoice">
                <h1 class="invoice__title"><?php _e('Invoice', 'BIE') ?></h1>
                <div class="invoice__meta">
                    <p><?php _e('Number:', 'bie'); ?> <?php echo $invoice_number ?></p>
                    <p><?php _e('Date:', 'bie'); ?> <?php echo $date ?></p>
                    <p><?php _e('ID:', 'bie'); ?> <?php echo $school_id ?></p>
                </div>

                <div class="invoice__logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logocz.svg" />
                </div>

                <div class="invoice__bill-from">
                    <h2><?php _e('Bill from:', 'bie')?></h2>
                    <p><?php _e('Czech-us Studium v zahraničí s.r.o.', 'bie')?></p>
                    <p><?php _e('Vodičkova 791/41') ?></p>
                    <p><?php _e('11000', 'bie')?></p>
                    <p><?php _e('Prague, Czech Republic', 'bie') ?></p>
                </div>

                <div class="invoice__bill-to">
                    <h2><?php _e('Bill to:', 'bie') ?></h2>
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
                                    <?php _e('item', 'bie') ?>
                                </th>
                                <th>
                                    <?php _e('amount', 'bie') ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                   <?php _e('Best In English 2019 license fee', 'bie') ?>
                                </td>
                                <td>
                                    <?php echo $total_amount; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="invoice__total-amount">
                    <h2><?php _e('Payment information:', 'bie') ?></h2>
                    <p><strong><?php _e('Amount:', 'bie') ?></strong> <?php echo $total_amount ?></p>
                    <p><?php echo $bank_account ?></p>
                    <p><strong><?php _e('Reference number:', 'bie') ?></strong> <?php echo $invoice_number ?></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
    window.addEventListener("DOMContentLoaded", function CreatePDFfromHTML() {
        html2canvas($(".invoice-page")[0]).then(function(canvas) {
            var imgData = canvas.toDataURL("image/jpeg", 1.0);
            var pdf = new jsPDF();
            pdf.addImage(imgData, 'JPG', 0, 0);

            pdf.save("BIE-invoice-<?php echo $invoice_number ?>.pdf");
        });
    });
    </script>
</body>
</html>