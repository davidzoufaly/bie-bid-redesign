<? /* Template Name: Payment data */ ?>
<?php get_header(); ?>

<?php 
        $servername = "localhost";
        $username = "bestinenglis4165";
        $password = "EwRsrWJLSU";
        $dbname = "bestinenglish2028";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        $conn->set_charset("utf8");
        $query = ("SELECT * FROM `invoices`");
        $header = $conn->query($query);
        $body = $conn->query($query);
       
?>

<main>
    <div class="page-subheader">
        <h1 class="page-subheader__title"><?php the_title() ?></h1>
    </div>
    <section>
        <div class="py-5 px-2">
            <section class="layout__section">
                <?php the_content() ?>
                <?php if ( ! post_password_required() ) : ?>
                    <table>
                        <thead>
                            <tr>
                                <?php 
                                $table_headings = array_keys($header->fetch_assoc());
                                foreach ($table_headings as $val) {
                                    echo '<th>'.strtoupper($val).'</th>';
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if ($body->num_rows > 0) {
                                while($row = $body->fetch_assoc()) {
                                    echo '<tr>';
                                    foreach ($row as $val) {
                                        echo '<td>'.$val.'</td>';
                                    }
                                    echo '</tr>';
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                <?php endif ?>
            </section>
        </div>
    </section>
</main>
<?php get_template_part('modules/module-reference') ?>
<?php get_template_part('modules/module-libi-se') ?>
<?php get_template_part('modules/module-kontakt') ?>
<?php get_footer(); ?>

