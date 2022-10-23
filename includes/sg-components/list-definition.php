<?php 

function sg_lists(){

?>
<div class="sg-section">
    <div class="sg-section-wrap">
        <div class="sg-section-heading">
            <span class="sg-section-title">Lists</span>
            <div class="sg-section-seperator"></div>
        </div>
        <div class="sg-lists">
            <!-- -->
            <h1 id="list-types">List Types</h1>

            <h2 id="ordered-list">Ordered List</h2>
            <ol>
            <li>List Item 1</li>
            <li>List Item 2</li>
            <li>List Item 3
                <ol>
                <li>List Item 3.1</li>
                <li>List Item 3.2
                    <ol>
                    <li>List Item 3.2.1</li>
                    <li>List Item 3.2.2</li>
                    </ol>
                </li>
                <li>List Item 3.3</li>
                </ol>
            </li>
            <li>List Item 4</li>
            </ol>

            <h2 id="unordered-list">Unordered List</h2>
            <ul>
            <li>List Item 1</li>
            <li>List Item 2</li>
            <li>List Item 3
                <ul>
                <li>List Item 3.1</li>
                <li>List Item 3.2
                    <ul>
                    <li>List Item 3.2.1</li>
                    <li>List Item 3.2.2</li>
                    </ul>
                </li>
                <li>List Item 3.3</li>
                </ul>
            </li>
            <li>List Item 4</li>
            </ul>

            <h2 id="definition-list">Definition List</h2>
            <dl>
            <dt>Definition Term 1</dt>
            <dd>Definition Description 1</dd>
            <dt>Definition Term 2</dt>
            <dd>Definition Description 2</dd>
            </dl>
            <!-- -->
        </div>
    </div>
</div>


<?php 
}