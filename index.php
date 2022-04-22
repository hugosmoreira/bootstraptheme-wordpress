<?php get_header(); ?>
    <section class="default-holder mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="list-group">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action small">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-4">
                                <?php 
                                
                                if ( has_post_thumbnail() ) { ?>
                                    <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                <?php }else{ ?>
                                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title(); ?>">
                                <?php }

                                ?>
                                
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <h3 class="fs-5 fw-100 "><?php echo get_the_title(); ?></h3>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                </div>
                            </div>
                        </a>
                        <?php endwhile; else : ?>
                            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-3">
                    <?php if ( is_active_sidebar( 'default_sidebar' ) ) : ?>
                       
                        <?php dynamic_sidebar( 'default_sidebar' ); ?>
                           
                    <?php endif; ?>



                     <aside class="card small mb-3">
                         <h3 class="card-header fs-5">Widget Name</h3>
                         <ul class="list-group list-group-flush">
                             <li class="list-group-item"><a href="#" class="text-decoration-none text-dark" >Item 1</a></li>
                             <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Item 2</a></li>
                             <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Item 3</a></li>
                             <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Item 4</a></li>
                         </ul>
                     </aside>

                     <aside class="card small mb-3">
                         <h3 class="card-header fs-5">Widget Name</h3>
                         <ul class="list-group list-group-flush">
                             <li class="list-group-item"><a href="#" class="text-decoration-none text-dark" >Item 1</a></li>
                             <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Item 2</a></li>
                             <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Item 3</a></li>
                             <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Item 4</a></li>
                         </ul>
                     </aside>
                 </div>           



            </div>
        </div>
    </section>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
<?php get_footer(); ?>
