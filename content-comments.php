<?php if ( comments_open() && !have_comments() ) : ?>
<section class="comments"><div class="container"><?php comments_template('', true); ?></div></section>
<?php elseif ( !comments_open() && get_comments_number() > 0 ) : ?>
<section class="comments"><div class="container"><?php comments_template('', true); ?></div></section>
<?php else : ?>
<?php endif; ?>