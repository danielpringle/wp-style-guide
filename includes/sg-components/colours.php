<?php 

function sg_colours(){

?>
<div class="sg-section">
    <div class="sg-section-wrap">
        <div class="sg-section-heading">
            <span class="sg-section-title">COLORS</span>
            <div class="sg-section-seperator"></div>
        </div>
        <div class="sg-colours sg-row">
            <div class="sg-colour sg-column">
                <div class="sg-colour-swatch colour-1" id="colour-1">
                </div>
                <div class="sg-colour-name">Turquoise</div>
                <div class="sg-colour-hex">#e3e1ba</div>
            </div>

            <div class="sg-colour sg-column">
                <div class="sg-colour-swatch colour-2" id="colour-2">
                </div>
                <div class="sg-colour-name">Turquoise</div>
                <div class="sg-colour-hex">#000000</div>
            </div>

            <div class="sg-colour sg-column">
                <div class="sg-colour-swatch colour-3" id="colour-3">
                </div>
                <div class="sg-colour-name">Turquoise</div>
                <div class="sg-colour-hex">#d3d3d3</div>
            </div>

            <div class="sg-colour sg-column">
                <div class="sg-colour-swatch colour-4" id="colour-4">
                </div>
                <div class="sg-colour-name">Turquoise</div>
                <div class="sg-colour-hex">#e5edc2</div>
            </div>
            <div class="sg-colour sg-column">
                <div class="sg-colour-swatch colour-4" id="colour-4">
                </div>
                <div class="sg-colour-name">Turquoise</div>
                <div class="sg-colour-hex">#e5edc2</div>
            </div>
        </div>
    </div>
</div>


<div class="sg-section">
    <div class="sg-section-wrap">
        <div class="sg-section-heading">
            <span class="sg-section-title">COLOR SHADES</span>
            <div class="sg-section-seperator"></div>
        </div>
        <div class="sg-colours sg-row">
            <div class="sg-colour sg-column">
                <div class="sg-colour-shades">
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-pr-colour-shade-1">
                        </div>
                        <div class="sg-colour-name">pr-100</div>
                    </div>
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-pr-colour-shade-2">
                        </div>
                        <div class="sg-colour-name">pr-300</div>
                    </div>
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-pr-colour-shade-3">
                        </div>
                        <div class="sg-colour-name">pr-500</div>
                    </div>
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-pr-colour-shade-4">
                        </div>
                        <div class="sg-colour-name">pr-700</div>
                    </div>
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-pr-colour-shade-5">
                        </div>
                        <div class="sg-colour-name">pr-900</div>
                    </div>
                </div>
            </div>

            <div class="sg-colour sg-column">
            <div class="sg-colour-shades">
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-se-colour-shade-1">
                        </div>
                        <div class="sg-colour-name">se-100</div>
                    </div>
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-se-colour-shade-2">
                        </div>
                        <div class="sg-colour-name">se-300</div>
                    </div>
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-se-colour-shade-3">
                        </div>
                        <div class="sg-colour-name">se-500</div>
                    </div>
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-se-colour-shade-4">
                        </div>
                        <div class="sg-colour-name">se-700</div>
                    </div>
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-se-colour-shade-5">
                        </div>
                        <div class="sg-colour-name">se-900</div>
                    </div>
                </div>
            </div>

            <div class="sg-colour sg-column">
                <div class="sg-colour-shades">
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-monochrome-colour-shade-1">
                        </div>
                        <div class="sg-colour-name">mono-100</div>
                    </div>
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-monochrome-colour-shade-2">
                        </div>
                        <div class="sg-colour-name">mono-300</div>
                    </div>
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-monochrome-colour-shade-3">
                        </div>
                        <div class="sg-colour-name">mono-500</div>
                    </div>
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-monochrome-colour-shade-4">
                        </div>
                        <div class="sg-colour-name">mono-700</div>
                    </div>
                    <div class=sg-colour-shade>
                        <div class="sg-colour-swatch" id="sg-monochrome-colour-shade-5">
                        </div>
                        <div class="sg-colour-name">mono-900</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>

function get_background_colour_hex(be_colour){

const rgb2hex = (rgb) => `#${rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/).slice(1).map(n => parseInt(n, 10).toString(16).padStart(2, '0')).join('')}`

var mycss = window.getComputedStyle(document.getElementById(be_colour));
let col = mycss.getPropertyValue("background-color");

let beHex = rgb2hex(col);


    const node = document.createElement("div");
    const textnode = document.createTextNode(beHex);
    node.appendChild(textnode);
    document.getElementById(be_colour).parentElement.appendChild(node);

}





function get_background_colour(be_colour){

    
    var mycss = window.getComputedStyle(document.getElementById(be_colour));
    let col = mycss.getPropertyValue("background-color");
  

        const node = document.createElement("div");
        const textnode = document.createTextNode(col);
        node.appendChild(textnode);
        document.getElementById(be_colour).parentElement.appendChild(node);
    
}



   //const rgb2hex = (rgb) => `#${rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/).slice(1).map(n => parseInt(n, 10).toString(16).padStart(2, '0')).join('')}`



    // let colour = get_background_colour();
    // alert(colour);

    // const hexCol = colour.substr(4).slice(0, -1);
    // alert(hexCol);
    // let hex3 = ConvertRGBtoHex(hexCol);
    // alert(hex3);

    // let tt = rgb2hex(colour);

    // alert("tt");


    function add_div(){


        // let be_colour = 'colour-4';
        // get_background_colour(be_colour);

        // let be_colour2 = 'colour-2';
        // get_background_colour(be_colour2);


        const scores = ["colour-1", "colour-2", "colour-3", "colour-4"];

        for (let i = 0; i < scores.length; i++) {
            console.log(scores[i]);

            get_background_colour(scores[i]);
        }

    }

    

    function add_div_hex(){


// let be_colour = 'colour-4';
// get_background_colour(be_colour);

// let be_colour2 = 'colour-2';
// get_background_colour(be_colour2);


const scores = ["colour-1", "colour-2", "colour-3", "colour-4"];

for (let i = 0; i < scores.length; i++) {
    console.log(scores[i]);

    get_background_colour_hex(scores[i]);
}

}

add_div_hex();
add_div();




</script>
<?php 
}