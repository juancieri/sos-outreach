<?php get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<?php $url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
	<main>
            
            <section class="fullHeight" style="background-image: url('<?php echo $url[0] ?>');">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/misc.png" alt="" class="header-misc">
            </section>
            
            <section class="section bg-white separator-before">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h1 class="section-title alone">Blog</h1>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            $prev_post = get_adjacent_post(false, '', true);
            $next_post = get_adjacent_post(false, '', false);
            ?>
            <section id="post" class="section bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="blog-post-date"><?php the_time('F j, Y'); ?></div>
                            <h1 class="section-subtitle terciary"><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div id="post-content"><?php the_content();  ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <ul id="post-nav">
                                <li><?php if(!empty($prev_post)) { ?><a href="<?php echo get_permalink($prev_post->ID) ?>">Previous+</a><?php } ?></li>
                                <li><?php if(!empty($next_post)) { ?><a href="<?php echo get_permalink($next_post->ID) ?>">Next+</a><?php } ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section" id="comments">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h2 class="section-title alone">Leave a comment</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <?php //comments_template(); ?>
                            
                            <form role="form" class="form" data-toggle="validator" method="post" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php">
                                <input type="hidden" name="comment_post_ID" value="<?php the_ID(); ?>" id="comment_post_ID">
					            <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">First name*</label>
                                            <input type="text" name="author" id="author" class="form-control" required data-required-error="Required Field">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Last name*</label>
                                            <input type="text" name="lastname" class="form-control" required data-required-error="Required Field">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Email*</label>
                                            <input type="email" name="email" id="email" class="form-control" required data-required-error="Required Field">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="control-label">Comment</label>
                                            <textarea name="comment" id="comment" class="form-control" required data-required-error="Required Field"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group text-right">
                                            <button type="submit" name="submit" class="post-item-btn">Post comment+</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        
        </main>
	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
<?php get_footer(); ?>
