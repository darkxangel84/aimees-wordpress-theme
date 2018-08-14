
<?php  get_header(); ?>

   
    <div class="row mb-2">
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">World</strong>
            <h3 class="mb-0">
            <a class="text-dark" href="#">Featured post</a>
            </h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#">Continue reading</a>
        </div>
        <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
        </div>
    </div>
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-success">Design</strong>
            <h3 class="mb-0">
            <a class="text-dark" href="#">Post title</a>
            </h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#">Continue reading</a>
        </div>
        <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
        </div>
    </div>
    </div>
</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">

            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>

            <div class="blog-post">
                <h2 class="blog-post-title">
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a>
                </h2>
                <p class="blog-post-meta"><?php the_time('F j, Y g:i a'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>

                <!-- FEATURED IMAGE -->
                <?php if(has_post_thumbnail()) : ?>
                <div class="post-thumb">
                    <?php the_post_thumbnail(); ?>
                </div> 
                <?php endif; ?>
                <!-- ============= -->

               <?php the_excerpt(); ?>
            </div> <!-- /.blog-post -->
            <?php endwhile; ?>
            <?php else : ?>
                <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>

        </div><!-- /.blog-main -->

  

<?php get_footer(); ?>