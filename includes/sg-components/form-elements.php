<?php 

function sg_form_elements(){

?>
<div class="sg-section">
    <div class="sg-section-wrap">
        <div class="sg-section-heading">
            <span class="sg-section-title">Form Elements</span>
            <div class="sg-section-seperator"></div>
        </div>
        <div class="sg-form-elements">
            <!-- -->
            <h1 id="form-elements">Form Elements</h1>
                <p>The Fieldset:</p>
                <fieldset>
                <legend>Legend</legend>

                <p>The Form:</p>

                <form>
                    <p><label for="text-field">Text Field:</label><br />
                    <input type="text" id="text-field" />
                    </p>

                    <p><label for="text-field-disabled">Disabled Text Field:</label><br />
                    <input type="text" id="text-field-disabled" disabled value="I'm disabled" />
                    </p>

                    <p><label for="text-field-readonly">Readonly Text Field:</label><br />
                    <input type="text" id="text-field-readonly" readonly value="I'm readonly" />
                    </p>

                    <p><label for="text-area">Text Area:</label><br />
                    <textarea id="text-area"></textarea>
                    </p>

                    <p><label for="text-area-disabled">Disabled Text Area:</label><br />
                    <textarea id="text-area-disabled" disabled>I'm disabled</textarea>
                    </p>

                    <p><label for="text-area-readonly">Readonly Text Area:</label><br />
                    <textarea id="text-area-readonly" readonly>I'm readonly</textarea>
                    </p>

                    <p><label for="select-element">Select Element:</label><br />
                    <select id="select-element">
                        <optgroup label="Option Group 1">
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        </optgroup>
                        <optgroup label="Option Group 2">
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3" disabled>Disabled Option</option>
                        </optgroup>
                    </select>
                    </p>

                    <p><label for="select-element-disabled">Disabled Select Element:</label><br/>
                    <select id="select-element-disabled" disabled>
                        <option value="1">Unselectable Option</option>
                        <option value="2">This option should not even be seen</option>
                    </select>
                    </p>

                    <p><label for="select_multi">Select multiple</label><br/>
                    <select
                        id="select_multi"
                        multiple="multiple"
                        name="select_multi"
                    >
                        <optgroup label="Group 1">
                        <option value="1">Some text goes here </option>
                        <option value="2">Another choice could be here</option>
                        <option value="3">Yet another item to be chosen</option>
                        </optgroup>
                        <optgroup label="Group 2">
                        <option value="4">Some text goes here</option>
                        <option value="5">Another choice could be here</option>
                        <option value="6">Yet another item to be chosen</option>
                        </optgroup>
                        <optgroup label="Group 3">
                        <option value="7">Some text goes here</option>
                        <option value="8">Another choice could be here</option>
                        <option value="9">Yet another item to be chosen</option>
                        </optgroup>
                    </select>
                    </p>

                    <p><label for="select_size">Select multiple [size="2"]</label><br/>
                    <select
                        id="select_size"
                        name="select_size"
                        size="2"
                    >
                        <optgroup label="Group 1">
                        <option value="1">Some text goes here </option>
                        <option value="2">Another choice could be here</option>
                        <option value="3">Yet another item to be chosen</option>
                        </optgroup>
                        <optgroup label="Group 2">
                        <option value="4">Some text goes here</option>
                        <option value="5">Another choice could be here</option>
                        <option value="6">Yet another item to be chosen</option>
                        </optgroup>
                    </select>
                    </p>

                    <p>Radio Buttons:</p>
                    <div>
                    <input type="radio" id="radio-1" name="radios" value="1" checked />
                    <label for="radio-1">Radio 1</label>
                    </div>
                    <div>
                    <input type="radio" id="radio-2" name="radios" value="2" />
                    <label for="radio-2">Radio 2</label>
                    </div>
                    <div>
                    <input type="radio" id="radio-3" name="radios" value="3" />
                    <label for="radio-3">Radio 3</label>
                    </div>
                    <div>
                    <input type="radio" id="radio-4" name="radios" value="4" disabled />
                    <label for="radio-4">Radio Disabled</label>
                    </div>

                    <div>
                    <input type="radio" id="radio-1" name="radios" value="1" checked />
                    <label for="radio-1">Radio 1</label>

                    <input type="radio" id="radio-2" name="radios" value="2" />
                    <label for="radio-2">Radio 2</label>
 
                    <input type="radio" id="radio-3" name="radios" value="3" />
                    <label for="radio-3">Radio 3</label>

                    <input type="radio" id="radio-4" name="radios" value="4" disabled />
                    <label for="radio-4">Radio Disabled</label>
                    </div>

                    <p>Checkboxes:</p>
                    <div>
                    <input type="checkbox" id="checkbox-1" name="checkboxes" value="1" checked />
                    <label for="checkbox-1">Checkbox 1</label>
                    </div>
                    <div>
                    <input type="checkbox" id="checkbox-2" name="checkboxes" value="2" />
                    <label for="checkbox-2">Checkbox 2</label>
                    </div>
                    <div>
                    <input type="checkbox" id="checkbox-3" name="checkboxes" value="3" />
                    <label for="checkbox-3">Checkbox 3</label>
                    </div>
                    <div>
                    <input type="checkbox" id="checkbox-4" name="checkboxes" value="4" disabled />
                    <label for="checkbox-4">Checkbox Disabled</label>
                    </div>

                    <div>

                    <input type="checkbox" id="some-checkbox" onclick="this.a=this.indeterminate=!this.a " >
                    <label for="some-checkbox" >
                    Indeterminate Checkbox
                    </label>

                    </div>

                    <div>

                    <input type="checkbox" id="cb1 " onclick=" if (cb1.readOnly) cb1.checked = cb1.readOnly = false; else if (!cb1.checked) cb1.readOnly = cb1.indeterminate = true; " >
                    <label for="cb1" >
                    Indeterminate Checkbox (Rotating)
                    </label>

                    </div>

                    <p><label for="password">Password:</label><br />
                    <input type="password" class="password" id="password" />
                    </p>

                    <p><label for="file">File Input:</label><br />
                    <input type="file" class="file" id="file" />
                    </p>

                    <h3>HTML5-specific Form Elements</h3>

                    <p><label for="email">Email:</label><br />
                    <input type="email" id="email" />
                    </p>

                    <p><label for="url">URL:</label><br />
                    <input type="url" id="url" />
                    </p>

                    <p><label for="tel">Telephone:</label><br />
                    <input type="tel" id="tel" />
                    </p>

                    <p><label for="number">Number:</label><br />
                    <input type="number" id="number" min="0" max="10" step="1" value="5" />
                    </p>

                    <p><label for="search">Search:</label><br />
                    <input type="search" id="search" />
                    </p>

                    <p><label for="date">Date:</label><br />
                    <input type="date" id="date" />
                    </p>

                    <p><label for="time">Time:</label><br />
                    <input type="time" id="time" />
                    </p>

                    <p><label for="color">Color:</label><br />
                    <input type="color" id="color" />
                    </p>

                    <p><label for="datalist">Datalist:</label><br />
                    <input list="browsers" name="browser" type="datalist" id="datalist" />
                    <datalist id="browsers">
                        <option value="Internet Explorer" />
                        <option value="Firefox" />
                        <option value="Chrome" />
                        <option value="Opera" />
                        <option value="Safari" />
                    </datalist>
                    </p>

                    <p><label for="range">Range:</label><br />
                    <input type="range" id="range" name="points" min="1" max="10" />
                    </p>

                    <p><label for="output">Output:</label><br />
                    <output name="result" id="output">42</output>
                    </p>

                    <p><label for="progress">Progress:</label><br />
                    <progress id="progress" value="65" max="100"></progress>
                    </p>

                    <p><label for="meter">Meter:</label><br />
                    <meter id="meter" min="200" max="500" value="350">350 degrees</meter>
                    </p>

                    <p>
                    <button class="button">Button Element</button>
                    <input type="button" value="Input button">
                    <input class="button" type="reset" value="Clear" />
                    <input class="button" type="submit" value="Submit" />
                    </p>
                </form>

                </fieldset>
            <!-- -->
        </div>
    </div>
</div>


<?php 
}