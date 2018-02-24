<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shemahin | Cloud Print</title>

<?php
include('head.php');
?>

  <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="e5f8ac9e-23bb-4e6e-8483-225af7f908b6";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/appbase-js/0.11.1/appbase.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>

  <script src="https://cdn.snipcart.com/scripts/2.0/snipcart.js" id="snipcart" data-api-key="Zjc2MTc2NmUtZDU4OS00ZDdlLTg3MTctNGFlYjVjZDA2MjAzNjM2Mzk3ODM4NTU4MDE0OTI2"></script>
  <link href="https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/uppy/dist/uppy.min.css">

  <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
  <script type="text/javascript">
     (function(){
        emailjs.init("user_qw4y92CtPXcUkGvXDwcAQ");
     })();
  </script>
  <link href="/assets/fonts/stylesheet.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="/assets/css/w3.css">
  <link rel="stylesheet" href="/assets/css/style.css">
<script>
  
var appbaseapp = "shemahin"
var appbaseappurl = "https://s6Fc4nfaG:f75e7d8e-358c-4aca-81e5-11c2361b35ae@scalr.api.appbase.io"

</script>
</head>
<body>
<!-- Navbar -->
<!-- <div class="w3-top">
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="https://shemahin.com" class="w3-bar-item w3-button w3-padding-large active">HOME</a>
    <a href="/2" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">2</a>
    <a href="/3" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">3</a>
    <a href="/4" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">4</a>
    <a href="/5" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">5</a>
    <a href="/6" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">6</a>
    <a href="/7" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">7</a>
    <a href="/8" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">8</a>
    <a href="/9" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">9</a>
    <a href="/10" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">10</a>
    <a href="/11" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">11</a>
    <a href="/12" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">12</a>
    <a href="/13" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">13</a>
    <a href="/14" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">14</a>
    <a href="/about" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">ABOUT</a>
    <span class="w3-padding-large w3-right">Tariqul Design Dump / a site for depositing garbage. </span>
  </div>
</div> -->
<!-- Navbar on small screens -->
<!-- <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="/2" class="w3-bar-item w3-button w3-padding-large ">2</a>
    <a href="/3" class="w3-bar-item w3-button w3-padding-large ">3</a>
    <a href="/4" class="w3-bar-item w3-button w3-padding-large ">4</a>
    <a href="/5" class="w3-bar-item w3-button w3-padding-large ">5</a>
    <a href="/6" class="w3-bar-item w3-button w3-padding-large ">6</a>
    <a href="/7" class="w3-bar-item w3-button w3-padding-large ">7</a>
    <a href="/8" class="w3-bar-item w3-button w3-padding-large ">8</a>
    <a href="/9" class="w3-bar-item w3-button w3-padding-large ">9</a>
    <a href="/10" class="w3-bar-item w3-button w3-padding-large ">10</a>
    <a href="/11" class="w3-bar-item w3-button w3-padding-large ">11</a>
    <a href="/12" class="w3-bar-item w3-button w3-padding-large ">12</a>
    <a href="/13" class="w3-bar-item w3-button w3-padding-large ">13</a>
    <a href="/14" class="w3-bar-item w3-button w3-padding-large ">14</a>
    <a href="/about" class="w3-bar-item w3-button w3-padding-large ">ABOUT</a>
</div> -->
<!-- Main Content for all the images (100 images per page) -->



<!-- Sidebar (hidden by default) -->
<?php
include('nav.php');
?>


<!-- Header -->
<?php
include('header.php');
?>
<!-- header --> 


<div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
  <div class="banner" style="width: 100%;">
              <img src="https://res.cloudinary.com/shemahin/image/upload/images/banner/Shemahin-Cloudprint-banner2-Vertical.jpg" srcset="https://res.cloudinary.com/shemahin/image/upload/images/banner/Shemahin-Cloudprint-banner2-Vertical.jpg 1000w, https://res.cloudinary.com/shemahin/image/upload/images/banner/Shemahin-Cloudprint-banner2.jpg 2000w" alt="Shemahin Cloud Print">
  </div>
</div>


<div style="max-width:1200px;margin:auto">

			<br><br>
			        
			<div class="front">
			    <h1>Simplify your life.</h1>
			    <h2>Shemahin Cloud Print, prints your document, so you don't have to.</h2>
			</div>


			<div class="upload">
			                <h1>Send us Your File</h1>
			             
			  <form class="form-inline">
			   

			      <div class="form-group">
			      <i class="fa fa-user" aria-hidden="true"></i>&nbsp; <label for="name">Name:</label><br>
			      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name"><br>
			    </div>


			   <div class="form-group">
			      <i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp; <label for="email">Mobile:</label><br>
			      <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile"><br>
			    </div>


			    <div class="form-group">
			     <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; <label for="email">Email:</label><br>
			      <input type="email" class="form-control" id="email" placeholder="Enter email address" name="email"><br>
			    </div>


			  
			  </form>
			  
			  <br>

			              <!-- Basic Uppy styles. You can use a CDN: https://unpkg.com/uppy/dist/uppy.min.css -->

			              <div class="UppyDragDrop"></div>
			              <div id="uploading">
			                  <button class="loading-close"><i class="fa fa-times" aria-hidden="true"></i></button>
			                  <img src="/assets/images/content_Loading-Loop-1.gif">
			              </div>
			              <div id="customer"></div>

			</div>


			<br><br>
	

	<div id="preview">
			<h1><a id="Shemahin_3"></a>Shemahin</h1>
			<p>Shemahin is a online print service business. Our aim is to provide large volumn print service at the cheapest price for a single user.</p>
			<ul>
			<li>Shemahin is a online Printing Service.</li>
			<li>You can print Ebook/PDF using our service.</li>
			<li>You can also order a book from our book collection.</li>
			</ul>
			<p>Our mission is to empower individual who is willing to read a wide range of books without the limiting constrain of availability and costs and hassale relating to books. So they can read whatever they want.</p>

			<h1><a id="Pricing_Strategy_59"></a>Pricing</h1>
			<p>We want to keep the price as cheap as possible. We wiil encourage for quantity and large volumn. We are offering flat rates.</p>
			<ul>
			<li>for - A5 (5.8 x 8.3 inches) : <strong>2 taka/both page</strong> ( A5 size is generally half of the size of A4 size)</li>
			<li>for - A4 (8.3 x 11.7 inches) : <strong>4 taka/both page</strong></li>
			 <!--<li>for example a Book size 500 page book will be priced at 250taka and for A4 size Book 500page book will be priced at 500taka</li> -->
			</ul>
			<h1><a id="Delivery_Strategy_65"></a>Delivery</h1>
			<p>We use third-party parcel delivery service for delivering our books like Pathao, e-courier, Sundarban Courier, Sonar Courier, SA Paribahan.</p>
			<ul>
			<li>Free Home Delivery All over Bangladesh</li>
			<li>Home delivery within 3-4 DAYS.</li>
			</ul>
			<h1>How to Order</h1>
			<ol>
			<li>
			<p>Order on our Website<br>
			(i) Upload a Ebook/PDF<strong> or</strong><br>

			(ii) Select a book from our site</p>
			</li>
			<li>
			<p>Order via Email. Email: <a href="mailto:contact@shemahin.com">contact@shemahin.com</a></p>
			</li>
			<li>
			<p>Order via Phone. Call: 01921244808</p>
			</li>
			</ol>
			 </div>

			    <br>
			    <div class="banner">
			    <img src="https://res.cloudinary.com/shemahin/image/upload/v1505321800/images/banner/Shemahin_Online_Book_Shop_3_824.jpg">
			    </div>
			    
			    <br>
</div>

<!-- Load Uppy pre-built bundled version. You can use a CDN: https://unpkg.com/uppy/dist/uppy.min.js -->
<script src="https://unpkg.com/uppy"></script>

<script>

$("div.upload input.form-control").click(function(){
    $("#uploading").slideDown('fast');

});

$(".loading-close").click(function( event ){

    $("#uploading").slideUp('fast');

});

      var uppy = Uppy.Core()
  uppy.use(Uppy.DragDrop, { target: '.UppyDragDrop' })
    uppy.use(Uppy.ProgressBar, {target: 'body', fixed: true})
  uppy.use(Uppy.Tus, { endpoint: 'https://master.tus.io/files/' })
  uppy.run()
  .on('complete', (result) => {
    console.log('Upload result:', result)
    console.log(result.successful["0"].uploadURL)
    
    var url = result.successful["0"].uploadURL
    
                  var name = $("#name").val(); 
            var mobile = $("#mobile").val(); 
            var email = $("#email").val(); 

            emailjs.send("gmail","template_rHl6oz8r",{name: name , mobile: mobile, email: email, url: url, filename: result.successful["0"].name});
             $("#uploading").slideUp('fast');
             $("#uploading").html("");
            $("#customer").slideDown();
            $("#customer").append("<h1>Success</h1><p>Thank you <em>" + name + "</em> for submitting your file. </p><p>Your file: <em> "+ result.successful["0"].name +"</em> has been received. </p><p>Some will contact with you soon. </p><p>For any kind of information please call our customer care number: 01921244808</p>")





  })




  // emailjs.send("gmail","template_rHl6oz8r",{to_name: "James", from_name: "How are you"});

</script>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <a href="https://www.facebook.com/shemahinbangladesh/" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>

  <div class="footer">© 2016—2017 Shemahin</div>

</footer>


<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
