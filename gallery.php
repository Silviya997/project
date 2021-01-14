<?php

include_once('conn.php');
include_once('style/gallery_style.php');


?>

<body>

  <form method="post" action="index.php?action=gallery">


  <div class="header" id="myHeader">
    <h1>Gallery</h1>
    <div class="property-meta primary-tooltips">	
      <div class="row" style="border: 1px solid black">	
        <div class="col-sm-4 col-md-3">
          <div class="meta-title"><i class="fa fa-expand"></i></div>
          <div class="meta-data" data-toggle="tooltip" title="" data-original-title="Площ">Area: 755 m2</div>
        </div>
        <div class="col-sm-4 col-md-3">
          <div class="meta-title"><i class="fa fa-bed"></i></div>
          <div class="meta-data" data-toggle="tooltip" title="" data-original-title="Bedrooms">6 Bedrooms</div>
        </div>
        <div class="col-sm-4 col-md-3">
          <div class="meta-title"><i class="fa fa-tint"></i></div>
          <div class="meta-data" data-toggle="tooltip" title="" data-original-title="Бани">5 Bathrooms</div>
        </div>
        <div class="col-sm-4 col-md-3">
          <div class="meta-title"><i class="fa fa-car"></i></div>
          <div class="meta-data" data-toggle="tooltip" title="" data-original-title="Garages">3 Garages</div>
        </div>
    </div>

    <div class="row"> 
      <div class="column">
        <img src="img/1.jpg" style="width:100%">
        <img src="img/2.jpg" style="width:100%">
        <img src="img/3.jpg" style="width:100%">
        <img src="img/4.jpeg" style="width:100%">
        <img src="img/5.jpg" style="width:100%">
      </div>
      <div class="column">
        <img src="img/6.jpeg" style="width:100%">
        <img src="img/7.jpg" style="width:100%">
        <img src="img/8.jpg" style="width:100%">
        <img src="img/9.jpeg" style="width:100%">
        <img src="img/10.jpg" style="width:100%">
        <img src="img/11.jpg" style="width:100%">
      </div>
    </div>
  </div>
</body>
</html>

