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
       ?>

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

                

<!-- Header-->

<?php the_content(); ?>




    <?php
        // footer
        get_footer();
    ?>
   