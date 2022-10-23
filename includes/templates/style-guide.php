<?php /* Template Name: Style Guide 2 */ 

get_header();
?>

<div class="sg-container">
    <div class="sg-inner">
        <div id="sg-title-area">
            <span id="sg-title">Style Guide</span> <br/>
            <span id="sg-desc">The style guide for the project</span>
            <div class="sg-seperator"></div>
        </div>
        <?php
        sg_fonts();
         sg_colours();
         sg_address();
         sg_blockquote();
         sg_details();
         sg_figure();
         sg_form_buttons();
         sg_form_elements();
         sg_form_fieldset();
         sg_pagination();
         sg_tooltip();
         sg_checkbox();
         sg_grid();
         sg_tables();
         sg_text_elements();
         sg_preformated_text();
         sg_headings();
        ?>
    </div>
</div> 


<?php get_footer(); ?>