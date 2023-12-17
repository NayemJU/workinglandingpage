<?php
// mb vc element
vc_map(array(
	'name' => 'Section 1',
	'base' => 'mb_sec_1',
	'description' => 'Middle',
	'category' => 'MB Elements',
	'params' => array(
		
		array(
			'type' => 'textfield',
			'admin_label' => true,
			'heading' => 'Heading',
			'description' => 'Heading',
			'param_name' => 'mb_about_section_1_heading',
		),
		array(
			'type' => 'colorpicker',
			'admin_label' => true,
			'heading' => 'Background Color',
			'description' => 'Background Color',
			'param_name' => 'mb_about_section_1_background_color',
		),		
		array(
			'type' => 'textfield',
			'admin_label' => true,
			'heading' => 'Subheading',
			'description' => 'Subheading',
			'param_name' => 'mb_about_section_1_subheading',
		)
	)
));
	
// mb vc shortcode
add_shortcode('mb_sec_1', 'mb_sec_1');
function mb_about_section_1($atts, $content) {
	extract(shortcode_atts(array(	
		
		'mb_about_section_1_heading' => '',
		'mb_about_section_1_subheading' => '',
		'mb_about_section_1_background_color' => '',
	), $atts));
	
	$html = '';
	
	if ($mb_about_section_1_background_color) {
		$html .= '
		<style>
		#about-section-one {
			background-color: '.$mb_about_section_1_background_color.' !important;
		}
		</style>
		';
	}

	$html .= '
	<!-- About section one-->
    <section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary">'.$mb_about_section_1_heading.'</h2>
                    <br>
                    <p class="text-faded">
                    '.$mb_about_section_1_subheading.'
                    </p>
                    <a href="#three" class="btn btn-default btn-xl page-scroll">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    
	';
	
	return $html;
}