<?php 

function sg_form_buttons(){

?>
<div class="sg-section">
    <div class="sg-section-wrap">
        <div class="sg-section-heading">
            <span class="sg-section-title">Form Buttons</span>
            <div class="sg-section-seperator"></div>
        </div>
        <div class="sg-form-buttons">
            <!-- -->
            <form>
                <fieldset>
                    <legend>Buttons</legend>
                    <p><input type="button" value="Input type button"></p>
                    <p><input type="reset" value="Input type reset"></p>
                    <p><input type="submit" value="Input type submit"></p>
                    <p><input type="submit" value="Input type submit disabled" disabled></p>
                    <p><button type="button">Button type button</button></p>
                    <p><button type="reset">Button type reset</button></p>
                    <p><button type="submit">Button type submit</button></p>
                    <p><button type="button" disabled>Button type button disabled</button></p>
                    <p><button>Button</button></p>
                    <p><button class="button">Button</button></p>
                    <p><a class="button">Button</a></p>
                </fieldset>
            </form>
            <!-- -->
        </div>
    </div>
</div>


<?php 
}