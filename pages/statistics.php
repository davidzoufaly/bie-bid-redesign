<? /* Template Name: Statistics */ ?>
<?php get_header(); ?>
<main>
    <div class="page-subheader">
        <h1 class="page-subheader__title"><?php the_title() ?></h1>
    </div>
    <div class="container py-5">
        <?php if(have_rows('graf')) : ?>
            <?php $i = 0; ?>
            <?php while(have_rows('graf')) : the_row() ?>
                <?php $i++; ?>
                <?php $h2 = get_sub_field('nazev_grafu'); ?>
                <section class="py-5">
                    <h2 id="<?php echo change_to_id($h2) ?>"><?php echo $h2; ?></h2>
                    <canvas id="graph-<?php echo $i?>"></canvas>
                    <?php if(have_rows('graf_data')) : ?>
                        <script>
                            let graphData<?php echo $i; ?> = {
                                labels: [],
                                data: []
                            }
                        </script>
                        <?php while(have_rows('graf_data')) : the_row() ?>
                            <script>
                                graphData<?php echo $i; ?>.labels.push("<?php the_sub_field('popisek'); ?>");
                                graphData<?php echo $i; ?>.data.push("<?php the_sub_field('cislo'); ?>");
                            </script>
                        <?php endwhile; ?>
                        <script>
                            let ctx<?php echo $i; ?> = document.getElementById("graph-<?php echo $i?>");
                            let myChart<?php echo $i; ?> = new Chart(ctx<?php echo $i; ?>, {
                                type: 'bar',
                                data: {
                                    labels: graphData<?php echo $i; ?>.labels,
                                    datasets: [{
                                        label: '',
                                        data: graphData<?php echo $i; ?>.data,
                                        backgroundColor: 'rgb(121,195,217)'
                                    }]
                                },
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                            </script>
                    <?php endif; ?>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>
<?php get_template_part('modules/module-reference') ?>
<?php get_template_part('modules/module-libi-se') ?>
<?php get_template_part('modules/module-kontakt') ?>
<?php get_footer(); ?>

