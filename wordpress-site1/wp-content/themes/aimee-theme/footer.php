<aside class="col-md-4 blog-sidebar">
        <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
           <?php dynamic_sidebar( 'sidebar' ); ?>
        <?php endif; ?>
    </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
    <p>copyright <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
    <a href="#">Back to top</a>
    </p>
</footer>
<?php wp_footer() ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
</body>
</html>