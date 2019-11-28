<?php /* Template Name: Payment result */ ?>

<?php require_once(get_template_directory() . '/scripts/pb/common.php'); ?>

<?php get_header(); ?>
<main>
    <div class="page-subheader">
        <h1 class="page-subheader__title"><?php the_title() ?></h1>
    </div>
    <section>
        <div class="container py-5">
            <?php
            $trans_id = $_GET['id'];

            try {
                // get transaction status from my database
                $status = $paymentsDatabase->getTransactionStatus(
                    $trans_id,   // transId
                    $_GET['refId'] // refId
                );

                // save ref ID to invoice DB
                $servername = "localhost";
                $username = "bestinenglis4165";
                $password = "EwRsrWJLSU";
                $dbname = "bestinenglish2028";

                $conn = new mysqli($servername, $username, $password, $dbname);

                $stmt = $conn->prepare("UPDATE `invoices` SET `transaction_status` = ? WHERE `trans_id` = ?");
                $stmt->bind_param("ss", $status, $trans_id);
                $stmt->execute();
                $stmt->close();

                mysqli_close($conn);

                if ($status === "PAID") {

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $stmt = $conn->prepare("SELECT `invoice_id` FROM `invoices` WHERE `trans_id`=?");
                    $stmt->bind_param("s", $trans_id);
                    $stmt->execute();
                    $result = $stmt->get_result()->fetch_assoc();
                    $invoice_number = $result["invoice_id"];
                    $stmt->close();

                    mysqli_close($conn);

                    echo '<h2 class="h2--nobefore mb-2 text-center">' . __('Success', 'bie') . '</h2>';
                    echo '<p class="text-center mb-1">Thank you for the payment. Please download your invoice using the button below.</p>';
                    echo '<div class="btn-wrap-center column-gap">';
                    echo '<a href="' . get_template_directory_uri() . '/scripts/pb/invoice.php?invoice_number=' . $invoice_number . '&trans_id=' . $trans_id . '" target="_blank" class="btn btn--red">' . __('invoice', 'bie') . '</a>';
                    echo '</div>';
                } else if ($status === "PENDING") {
                    echo '<h2 class="h2--nobefore mb-4 text-center">' . __('Cannot validate your payment', 'bie') . '</h2>';
                    echo '<div class="flex-center">';
                    echo '<p>' . __('Contact our team for additional information', 'bie') . '</p>';
                    echo '</div>';
                    echo '<div class="btn-wrap-center column-gap">';
                    echo '<a href="/" class="btn btn--blue">' . __('Homepage', 'bie') . '</a>';
                    echo '</div>';
                } else if ($status === "CANCELLED") {
                    
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $stmt = $conn->prepare("SELECT `invoice_id` FROM `invoices` WHERE `trans_id`=?");
                    $stmt->bind_param("s", $trans_id);
                    $stmt->execute();
                    $result = $stmt->get_result()->fetch_assoc();
                    $invoice_number = $result["invoice_id"];
                    $stmt->close();

                    mysqli_close($conn);

                    echo '<h2 class="h2--nobefore mb-4 text-center">' . __('Cancelled', 'bie') . '</h2>';
                    echo '<div class="btn-wrap-center column-gap">';
                    echo '<a href="/" class="btn btn--blue">' . __('Homepage', 'bie') . '</a>';
                    echo '<a href="/payment" class="btn btn--blue">' . __('Try again', 'bie') . '</a>';
                    echo '</div>';
                    echo '<div class="flex-center mt-3">';
                    echo '<p>' . __('Or download your invoice and pay later via standard bank transfer(if your country is not in the EU, this is only available option for you).', 'bie') . '</p>';
                    echo '</div>';
                    echo '<div class="btn-wrap-center">';
                    echo '<a href="' . get_template_directory_uri() . '/scripts/pb/invoice.php?invoice_number=' . $invoice_number . '" target="_blank" class="btn btn--red">' . __('invoice', 'bie') . '</a>';
                    echo '</div>';
                }
            } catch (Exception $e) {
                echo '<h2 class="h2--nobefore mb-4 text-center">' . __('Error. Cannot check the payment status: ' . $e, 'bie') . '</h2>';
                echo '<div class="btn-wrap-center column-gap">';
                echo '<a href="/" class="btn btn--blue">' . __('Homepage', 'bie') . '</a>';
                echo '<a href="/payment" class="btn btn--blue">' . __('Try again', 'bie') . '</a>';
                echo '</div>';
            }
            ?>
        </div>
    </section>
</main>
<?php get_template_part('modules/module-reference') ?>
<?php get_template_part('modules/module-libi-se') ?>
<?php get_template_part('modules/module-kontakt') ?>
<?php get_footer(); ?>