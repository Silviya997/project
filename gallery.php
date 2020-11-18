<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  padding: 0 4px;
}

.column {
  -ms-flex: 50%;
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}


</style>
</head>
<body>

<div class="header" id="myHeader">
  <h1>Gallery</h1>


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

</body>
</html>

