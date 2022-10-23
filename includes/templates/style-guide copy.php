<?php /* Template Name: Style Guide 2 */ 


function enqueue_style_guide_css() {

//wp_enqueue_script('post_test_script', plugin_dir_url(__FILE__) . '/post_test_script.js');


wp_enqueue_style( 'style-guide-css', get_template_directory_uri() . '/assets/css/style-guide.css', null, date("Y-m-d-h:i-s"), 'all' ) ;
}

add_action( 'wp_enqueue_scripts', 'enqueue_style_guide_css', 10 );



get_header();
?>

<div class="sg-container">
    <div class="sg-inner">
        <div id="sg-title-area">
            <span id="sg-title">Style Guide</span> <br/>
            <span id="sg-desc">The style guide for the project</span>
            <div class="sg-seperator"></div>
        </div>

        <div class="sg-section-heading">
            <span class="sg-section-title">COLORS</span>
            <div class="sg-section-seperator"></div>
        </div>




        <div class="sg-colours-section sg-row">
            <div class="sg-colour sg-column">
                <div class="sg-colour-swatch colour-1">
                </div>
                <div class="sg-colour-name">Turquoise</div>
                <div class="sg-colour-hex">#1abc9c</div>
            </div>

            <div class="sg-colour sg-column">
                <div class="sg-colour-swatch colour-2">
                </div>
                <div class="sg-colour-name">Turquoise</div>
                <div class="sg-colour-hex">#1abc9c</div>
            </div>

            <div class="sg-colour sg-column">
                <div class="sg-colour-swatch colour-3">
                </div>
                <div class="sg-colour-name">Turquoise</div>
                <div class="sg-colour-hex">#1abc9c</div>
            </div>

            <div class="sg-colour sg-column">
                <div class="sg-colour-swatch colour-4">
                </div>
                <div class="sg-colour-name">Turquoise</div>
                <div class="sg-colour-hex">#1abc9c</div>
            </div>

        </div>

        <div class="sg-section-heading">
            <span class="sg-section-title">TYPOGRAPHY</span>
            <div class="sg-section-seperator"></div>
        </div>
        <div class="sg-row">

        </div>

        <div class="sg-section-heading">
            <span class="sg-section-title">Headings</span>
            <div class="sg-section-seperator"></div>
        </div>
        <div class="sg-headers">
            <div class="sg-section-wrap">
                <h1>Heading 1</h1>
                <h2>Heading 2</h2>
                <h3>Heading 3</h3>
                <h4>Heading 4</h4>
                <h5>Heading 5</h5>
                <h6>Heading 6</h6>
            </div>
        </div>
        <div class="sg-headers-and-text">
            <div class="sg-section-wrap">
                <h1>Heading 1</h1>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
                <h2>Heading 2</h2>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
                <h3>Heading 3</h3>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
                <h4>Heading 4</h4>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
                <h5>Heading 5</h5>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
                <h6>Heading 6</h6>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
            </div>
        </div>
        <!-- -->
        <div class="sg-section-heading">
            <span class="sg-section-title">COLORS</span>
            <div class="sg-section-seperator"></div>
        </div>
        <div class="sg-headers-and-text">
            <div class="sg-section-wrap">

            </div>
        </div>

        <!-- -->
        <div class="sg-section-heading">
            <span class="sg-section-title">COLORS</span>
            <div class="sg-section-seperator"></div>
        </div>
        <div class="sg-headers-and-text">
            <div class="sg-section-wrap">

            </div>
        </div>
        
        <!-- -->
        <div class="sg-section-heading">
            <span class="sg-section-title">FORMS</span>
            <div class="sg-section-seperator"></div>
        </div>
        <div class="sg-headers-and-text">
            <div class="sg-section-wrap">
            <form>
                <fieldset>
                    <legend>Buttons</legend>
                    <p><input type="button" value="Input type button"></p>
                    <p><input type="reset" value="Input type reset"></p>
                    <p><input type="submit" value="Input type submit"></p>
                    <p><input type="submit" class="button" value="Input type submit"></p>
                    <p><input type="submit" value="Input type submit disabled" disabled></p>
                    <p><button type="button">Button type button</button></p>
                    <p><button type="reset">Button type reset</button></p>
                    <p><button type="submit">Button type submit</button></p>
                    <p><button type="button" disabled>Button type button disabled</button></p>
                    <p><button>Button</button></p>
                </fieldset>
            </form>

            <form>
                <fieldset>
                    <legend>Form Fields</legend>
                    <div><label for="text-input">Text input</label> <input id="text-input" type="text"></div>
                    <div><label for="text-input-placeholder">Text input with placeholder</label> <input id="text-input-placeholder" type="text" placeholder="I'm placeholder text"></div>
                    <div><label for="readonly-input">Readonly input</label> <input id="readonly-input" type="text" value="Read only text input" readonly></div>
                    <div><label for="disabled-input">Disabled input</label> <input id="disabled-input" type="text" value="Disabled text input" disabled></div>
                    <div><label for="required-input">Required input <span class="required">*</span></label> <input id="required-input" type="text" required aria-required="true"></div>
                    <div><label for="email-input">Email input</label> <input id="email-input" type="email"></div>
                    <div><label for="search-input">Search input</label> <input id="search-input" type="search"></div>
                    <div><label for="speech-input">Speech recognition input</label> <input id="speech-input" type="text" name="speech" x-webkit-speech=""></div>
                    <div><label for="tel-input">Tel input</label> <input id="tel-input" type="tel"></div>
                    <div><label for="url-input">URL input</label> <input id="url-input" type="url" placeholder="http://"></div>
                    <div><label for="password-input">Password input</label> <input id="password-input" type="password" value="password"></div>
                    <div><label for="select-field">Select field</label> <select id="select-field"><option selected="selected">Option 01</option><option>Option 02</option></select></div>
                    <div><label for="multiple-select-field">Multiple select field</label><select id="multiple-select-field" multiple size="5"><option>Option 1</option><option>Option 2</option><option>Option 3</option><option>Option 4</option><option>Option 5</option><option>Option 6</option><option>Option 7</option><option>Option 8</option><option>Option 9</option><option>Option 10</option></select></div>
                    <div><label for="radio-input"><input id="radio-input" type="radio" name="rad"> Radio input</label></div>
                    <div>
                        <input type="radio" id="radio-1" name="radios" value="1" checked />
                        <label for="radio-1">Radio 1</label>
                    </div>
                    <div><label for="checkbox-input"><input id="checkbox-input" type="checkbox"> Checkbox input</label></div>
                    <div><label for="file-input">File input</label> <input id="file-input" type="file"></div>
                    <div><label for="textarea">Textarea</label> <textarea id="textarea" cols="30" rows="5" >Textarea text</textarea></div>
                    <div><label for="color-input">Color input</label> <input id="color-input" type="color" value="#000000"></div>
                    <div><label for="number-input">Number input</label> <input id="number-input" type="number" value="5" min="0" max="10"></div>
                    <div><label for="range-input">Range input</label> <input id="range-input" type="range" value="0" min="0" max="100"> <output>0</output>
                        <script>
                        if (document.querySelector) {
                            document.querySelector('#range-input').onchange = function(e) {
                            e.target.nextElementSibling.innerText = e.target.value;
                            }
                        }
                        </script>
                    </div>
                    <div><label for="date-input">Date input</label> <input id="date-input" type="date"></div>
                    <div><label for="month-input">Month input</label> <input id="month-input" type="month"></div>
                    <div><label for="week-input">Week input</label> <input id="week-input" type="week"></div>
                    <div><label for="time-input">Time input</label> <input id="time-input" type="time"></div>
                    <div><label for="datetime-input">Datetime input</label> <input id="datetime-input" type="datetime"></div>
                    <div><label for="datetime-local-input">Datetime-local input</label> <input id="datetime-local-input" type="datetime-local"></div>
                </fieldset>
                <input type="submit" value="Submit form">
                </form>

            </div>
        </div>        

    </div>
</div> 


<?php get_footer(); ?>