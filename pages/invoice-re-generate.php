<? /* Template Name: Invoice re-generate */ ?>
<?php get_header(); ?>

<?php
if (isset($_POST['invoice_id'])) {
    $invoice_id = $_POST['invoice_id'];

    $servername = "localhost";
    $username = "bestinenglis4165";
    $password = "EwRsrWJLSU";
    $dbname = "bestinenglish2028";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");
    $stmt = $conn->prepare("SELECT * FROM `invoices` WHERE `invoice_id`=?");
    $stmt->bind_param('i', $invoice_id);
    $stmt->execute();
    $stmt->store_result();
    $result = $stmt->num_rows;
    $stmt->close();

    mysqli_close($conn);

    if($result === 1) {
        header("Location:".get_template_directory_uri()."/scripts/pb/invoice.php?invoice_number=".$invoice_id);
    }
}
?>

<main>
    <div class="page-subheader">
        <h1 class="page-subheader__title"><?php the_title() ?></h1>
    </div>
    <section>
        <div class="registrace">
            <div class="registrace-formular container">
                <form method="POST">
                    <fieldset class="invoice-form__fieldset--school-info">
                        <div class="registrace-formular__row">
                            <label for="invoice-id"><?php _e('Invoice ID', 'bie') ?></label>
                            <span><input type="number" id="invoice-id" class="animation-input" name="invoice_id" /></span>
                            <?php if ($result === 0) {
                                echo '<span class="wpcf7-not-valid-tip" id="phone-valid">' . __('Invoice ID you have filled is wrong. Try it again.', 'bie') . '</span>';
                            } ?>
                        </div>
                    </fieldset>
                    <div class="btn-wrap-center">
                        <button type="submit" class="btn btn--red"><?php _e('Re-generate Invoice', 'bie') ?></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php get_template_part('modules/module-reference') ?>
<?php get_template_part('modules/module-libi-se') ?>
<?php get_template_part('modules/module-kontakt') ?>
<?php get_footer(); ?>