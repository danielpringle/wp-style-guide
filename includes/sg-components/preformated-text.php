<?php 

function sg_preformated_text(){

?>
<div class="sg-section">
    <div class="sg-section-wrap">
        <div class="sg-section-heading">
            <span class="sg-section-title">Preformated text</span>
            <div class="sg-section-seperator"></div>
        </div>
        <div class="sg-preformated-text">
            <!-- -->

            <pre>
            P R E F O R M A T T E D T E X T
            ! " # $ % &amp; ' ( ) * + , - . /
            0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
            @ A B C D E F G H I J K L M N O
            P Q R S T U V W X Y Z [ \ ] ^ _
            ` a b c d e f g h i j k l m n o
            p q r s t u v w x y z { | } ~
            </pre>

            <pre><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p></pre>

            <h3>Pre Code</h3>
            <pre>
                <code>
                    &lt;html>
                        &lt;head>
                        &lt;/head>
                        &lt;body>
                            &lt;div class="main"> &lt;div>
                        &lt;/body>
                    &lt;/html>
                </code>
            </pre>

            <pre><code>// Loop through Divs using Javascript.
            var divs = document.querySelectorAll('div'), i;

            for (i = 0; i < divs.length; ++i) {
            divs[i].style.color = "green";
            }</code></pre>
            <!-- -->
        </div>
    </div>
</div>


<?php 
}