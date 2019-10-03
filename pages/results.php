<? /* Template Name: Results */ ?>
<?php get_header(); ?>
<script>
const schoolData = "<?php the_field('soubor_s_daty_schools'); ?>";
const studentsData = "<?php the_field('soubor_s_daty_students'); ?>";
</script>
<main>
    <div class="page-subheader">
        <h1 class="page-subheader__title"><?php the_title() ?></h1>
    </div>
    <section class="container py-5 results">
            <div class="top-wrapper">
                <h2 class="results__instruction">
                    <?php _e('Input your school ID (e.g. FM7QU2Y7)', 'bie')?><span><?php _e('Results will display automatically', 'bie') ?></span>
                </h2>
                <input id="input" class="input" type="text" placeholder="<?php _e('type ID here', 'bie')?>">
                <p class="char-counter" id="char-counter"></p>

                <p id="wrong-id" class="wrong-id"></p>
            </div>
            <div class="school-wrapper hide" id="school-wrapper">
            </div>
            <div class="table-wrapper hide" id='table-wrapper'>
            </div>
    </section>
</main>
<?php get_template_part('modules/module-reference') ?>
<?php get_template_part('modules/module-libi-se') ?>
<?php get_template_part('modules/module-kontakt') ?>
<?php get_footer(); ?>