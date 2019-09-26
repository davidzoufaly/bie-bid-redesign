<?php

if (get_field('funkce_member')) {
    $funkce = '<p class="osoba__position">'.get_field('funkce_member').'</p>';
} else {
    $funkce = null;
}

if (get_field('email_member')) {
    $email = '<a class="btn btn--link btn--line-height-low btn--small-text" href="mailto:'.get_field('email_member').'">'.get_field('email_member').'</a>';
} else {
    $email = null;
}

if (get_field('telefon_member')) {
    $telefon = '<a class="btn btn--link btn--line-height-low btn--small-text" href="tel:'.str_replace(' ', '', get_field('telefon_member')).'">'.get_field('telefon_member').'</a>';
} else {
    $telefon = null;
}

?>

<div class="osoba">
    <div class="osoba-wrapper">
            <img class="osoba__avatar" src="<?php echo get_field('foto_member')['url'] ?>" alt="<?php echo get_field('foto_member')['alt'] ?>" loading="lazy">
            <div class="osoba__background"></div>
    </div>
    <p class="osoba__name"><?php the_title() ?></p>
    <?php echo $funkce ?>
    <?php echo $telefon ?>
    <?php echo $email ?>
</div>