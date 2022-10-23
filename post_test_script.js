

let button = document.querySelector('#get-post-btn');

let button2 = document.getElementById('get-post-btn');

// button2.addEventListener('click', function(){

//     alert('clicked');
// })

function myFunction() {
    alert('clicked');
    get_post_data();
}

function get_post_data() {

    let be_url = 'https://woo.localhost/wp-json/wp/v2/pages/2';

    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', be_url);
    ourRequest.onload = function() {
      if (ourRequest.status >= 200 && ourRequest.status < 400) {
        // console.log(ourRequest.responseText);
        var data = JSON.parse(ourRequest.responseText);
        console.log(data);

        update_page(data);
  
      } else {
        console.log("We connected to the server, but it returned an error.");
      }
    };
  
    ourRequest.onerror = function() {
      console.log("Connection error");
    };
  
    ourRequest.send();


}


function update_page(data) {

    


        var updateProduct = new XMLHttpRequest();
        updateProduct.open('POST', 'https://Dan:KakdelaDan@developer.localhost/wp-json/wp/v2/pages/317?_method=PUT', true);
        updateProduct.setRequestHeader("Accept", "application/json");
        updateProduct.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        // updateProduct.setRequestHeader("Authorization", ck+":"+cs);
    
        // updateProduct.send(JSON.stringify(ourPostData));
    
        //console.log(JSON.stringify(ourPostData));
        updateProduct.onload = () => console.log(updateProduct.responseText);
        
        updateProduct.send(JSON.stringify(data));
      

}


jQuery.ajax({
    url: 'https://developer.localhost/wp-json/wp/v2/pages/139',
    method: 'DELETE',
    crossDomain: true,
    beforeSend: function ( xhr ) {
        xhr.setRequestHeader( 'Authorization', 'Basic ' + Base64.encode( 'Dan:KakdelaDan' ) );
    },
    success: function( data, txtStatus, xhr ) {
        console.log( data );
        console.log( xhr.status );
    }
 });