<?php 

function sg_figure(){

// $img = WP_PLUGIN_URL . '/style-guide/assets/images/no-image-300x300.jpg';
$img = PLUGIN_URL . 'style-guide/assets/images/no-image-300x300.jpg';


?>
<div class="sg-section">
    <div class="sg-section-wrap">
        <div class="sg-section-heading">
            <span class="sg-section-title">FIGURE</span>
            <div class="sg-section-seperator"></div>
        </div>
        <div class="sg-figure">
            <figure>
                <img src="<?php echo $img ?>">
                <figcaption>Figcaption content</figcaption>
            </figure>
            <figure>
                <img src="<?php echo $img ?>">
                <figcaption>
                    <h4>Figure Title</h4>
                    Figcaption content
                </figcaption>
            </figure>
        </div>
    </div>
</div>


<?php 
}