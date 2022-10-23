<?php 

function sg_form_fieldset(){

?>
<div class="sg-section">
    <div class="sg-section-wrap">
        <div class="sg-section-heading">
            <span class="sg-section-title">fieldset</span>
            <div class="sg-section-seperator"></div>
        </div>
        <div class="sg-form-fieldset">
            <!-- -->
            <fieldset class="fieldset">
                <legend class="fieldset__legend">
                    <h1 class="fieldset__heading">
                    H2 title?
                    </h1>
                </legend>

                <div class="form-group">
                    <label class="label" for="address-line-1">
                    Address line 1
                    </label>
                    <input class="input" id="address-line-1" name="address-line-1" type="text" autocomplete="address-line1">
                </div>

                <div class="form-group">
                    <label class="label" for="address-line-2">
                    Address line 2 (optional)
                    </label>
                    <input class="input" id="address-line-2" name="address-line-2" type="text" autocomplete="address-line2">
                </div>

                <div class="form-group">
                    <label class="label" for="address-town">
                    Town or city
                    </label>
                    <input class="input !-width-two-thirds" id="address-town" name="address-town" type="text" autocomplete="address-level2">
                </div>

                <div class="form-group">
                    <label class="label" for="address-postcode">
                    Postcode
                    </label>
                    <input class="input input--width-10" id="address-postcode" name="address-postcode" type="text" autocomplete="postal-code">
                </div>

            </fieldset>
            <!-- -->
        </div>
    </div>
</div>


<?php 
}