<section class="two_col_text_and_image">
    <div class="container">
        <div class="grid-x">
            <div class="large-6 medium-12 center">
                <?php if($image = get_sub_field('image')): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <?php endif; ?>
            </div>
            <div class="large-6 medium-12 text-white cntr-mob">
                <?php if($title = get_sub_field('title')): ?>
                    <h2><?php echo $title; ?></h2>
                <?php endif; ?>
                <div class="small-text">
                    <?php if($text = get_sub_field('text')): ?>
                        <?php echo $text; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>
