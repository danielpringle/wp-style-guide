<?php 

function sg_form_buttons(){

?>
<div class="sg-section">
    <div class="sg-section-wrap">
        <div class="sg-section-heading">
            <span class="sg-section-title">Buttons</span>
            <div class="sg-section-seperator"></div>
        </div>
        <div class="sg-buttons">
            <!-- -->
            <button class="button">Save and continue</button>
            <button class="button button--primary">Find address</button>
            <button class="button button--secondary">Find address</button>
            <button class="button button--warning">Delete account</button>
            <button disabled="disabled" aria-disabled="true" class="button button--disabled" >Disabled button</button>
            <a href="#" role="button" class="button button--primary">Start now</a>
            <a href="#" class="back-link">Back</a>

            <!-- -->
        </div>
    </div>
</div>


<?php 
}