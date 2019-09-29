<table>
    <thead>
        <tr>
            <?php if(have_rows('zahlavi_tabulky_layout')) : ?>
                <?php while(have_rows('zahlavi_tabulky_layout')) : the_row() ?>
                <th><?php the_sub_field('polozka_sloupce_v_zahlavi_layout') ?></th>
                <?php endwhile; ?>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php if(have_rows('radek_tabulky_layout')) : ?>
            <?php while(have_rows('radek_tabulky_layout')) : the_row() ?>
                <tr>
                    <?php if(have_rows('polozka_sloupce_v_radku_tabulky_layout')) : ?>
                        <?php while(have_rows('polozka_sloupce_v_radku_tabulky_layout')) : the_row() ?>
                            <td><?php the_sub_field('polozka_sloupce_v_radku_tabulky_item_layout') ?></td>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </tr>
                <?php endwhile; ?>
        <?php endif; ?>
    </tbody>
</table>