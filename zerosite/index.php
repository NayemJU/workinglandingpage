    <?php
        // header
        get_header();
    ?>
    
    <?php
          $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
       $the_query = new WP_Query( array(
        'post_type' => 'Slider',
        'paged' => $paged,
        'orderby' =>'ID',
        'order' =>'asc',        
        'posts_per_page' => 9)
       );      
       while ( $the_query->have_posts() ) : $the_query->the_post();        
       $custom = get_post_custom( get_the_ID() ); ?>
       

<header id="first">
    
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive"><?php echo get_the_title(); ?></h1>
                <h4><?php echo get_the_content(); ?></h4>
                <hr>

                <a href="#video-background" id="toggleVideo" data-toggle="collapse" class="btn btn-primary btn-xl"><?php echo $custom['Donate'][0]; ?></a> &nbsp; <a href="#one" class="btn btn-primary btn-xl page-scroll">Get Started</a>
            </div>
        </div>
        <video autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background">
            <source src="https://s3-us-west-2.amazonaws.com/coverr/mp4/Traffic-blurred2.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
    </header>
                
     <?php endwhile; ?>


     <?php
          $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
       $the_query = new WP_Query( array(
        'post_type' => 'SecA',
        'paged' => $paged,
        'orderby' =>'ID',
        'order' =>'asc',        
        'posts_per_page' => 9)
       );      
       while ( $the_query->have_posts() ) : $the_query->the_post();        
       $custom = get_post_custom( get_the_ID() ); ?>
       


       <section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary"><?php echo get_the_title(); ?></h2>
                    <br>
                    <p class="text-faded">
                    <?php echo get_the_content(); ?>
                    </p>
                    <a href="#three" class="btn btn-default btn-xl page-scroll">Learn More</a>
                </div>
            </div>
        </div>
    </section>

                
    <?php endwhile; ?>

    <section id="two">
    <div class="container">
            <div class="row">
    <?php
          $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
       $the_query = new WP_Query( array(
        'post_type' => 'SecB',
        'paged' => $paged,
        'orderby' =>'ID',
        'order' =>'asc',        
        'posts_per_page' => 9)
       );      
       while ( $the_query->have_posts() ) : $the_query->the_post();        
       $custom = get_post_custom( get_the_ID() ); ?>
       


       
        
        
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <i class="icon-lg ion-android-laptop wow fadeIn" data-wow-delay=".3s"></i>
                        <h3><?php echo get_the_title(); ?></h3>
                        <p class="text-muted"><?php echo get_the_content(); ?></p>
                    </div>
                </div>
                
                
    <?php endwhile; ?>
    </div>
        </div>
    </section>
    


    <section id="three" class="no-padding">
        <div class="container-fluid">
            <div class="row no-gutter">
    <?php
          $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
       $the_query = new WP_Query( array(
        'post_type' => 'SecC',
        'paged' => $paged,
        'orderby' =>'ID',
        'order' =>'asc',        
        'posts_per_page' => 9)
       );      
       while ( $the_query->have_posts() ) : $the_query->the_post();        
       $custom = get_post_custom( get_the_ID() ); 
       $ids=get_the_ID();?>
       
       
       <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->$ids ), 'single-post-thumbnail' ); ?>


       <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="<?php echo $image[0]; ?>">
                        <img src="<?php echo $image[0]; ?>" class="img-responsive" alt="Image 1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
        
        
              
                
                
    <?php endwhile; ?>
    </div>
        </div>
    </section>




    <section class="container-fluid" id="four">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
    <?php
          $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
       $the_query = new WP_Query( array(
        'post_type' => 'SecD',
        'paged' => $paged,
        'orderby' =>'ID',
        'order' =>'asc',        
        'posts_per_page' => 9)
       );      
       while ( $the_query->have_posts() ) : $the_query->the_post();        
       $custom = get_post_custom( get_the_ID() ); ?>
       


       <div class="media wow fadeInRight">
                    <h3><?php echo get_the_title(); ?></h3>
                    <div class="media-body media-middle">
                        <p><?php echo get_the_content(); ?></p>
                    </div>
                    <div class="media-right">
                        <i class="icon-lg ion-ios-bolt-outline"></i>
                    </div>
                </div>
                <hr>
        
        
                
                
                
    <?php endwhile; ?>
    </div>
        </div>
    </section>
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2 class="text-primary">Get Started</h2>
                <a href="http://www.bootstrapzero.com/bootstrap-template/landing-zero" target="ext" class="btn btn-default btn-lg wow flipInX">Free Download</a>
            </div>
            <br>
            <hr/>
            <br>
    <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row">
    <?php
          $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
       $the_query = new WP_Query( array(
        'post_type' => 'SecE',
        'paged' => $paged,
        'orderby' =>'ID',
        'order' =>'asc',        
        'posts_per_page' => 9)
       );      
       while ( $the_query->have_posts() ) : $the_query->the_post();        
       $custom = get_post_custom( get_the_ID() ); ?>
       

       <div class="col-sm-3 col-xs-6 text-center">
       <?php echo get_the_content(); ?>                     
       <i class="icon-lg ion-social-html5-outline" title="html 5"></i>
                        </div>

       <div class="media wow fadeInRight">
                    <h3><?php echo get_the_title(); ?></h3>
                    <div class="media-body media-middle">
                        <p><?php echo get_the_content(); ?></p>
                    </div>
                    <div class="media-right">
                        <i class="icon-lg ion-ios-bolt-outline"></i>
                    </div>
                </div>
                <hr>
        
        
                
                
                
    <?php endwhile; ?>
    </div>
        </div>
    </div>
    </div>
    </aside>

    
    
    
    <section id="last">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="margin-top-0 wow fadeIn">Get in Touch</h2>
                    <hr class="primary">
                    <p>We love feedback. Fill out the form below and we'll get back to you as soon as possible.</p>
                </div>
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <form class="contact-form row">
                    <?php echo do_shortcode('[contact-form-7 id="5ed4de0" title="Contact form 1"]',false);?>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
        // footer
        get_footer();
    ?>
   