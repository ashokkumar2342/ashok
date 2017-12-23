<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    
    </head>
    <body>
      
 
   

    
   <!-- CSS -->
<style>
#my_camera{
 width: 320px;
 height: 240px;
 border: 1px solid black;
}
</style>

<!-- -->
<div id="my_camera"></div>
<input type=button value="Take Snapshot" onClick="take_snapshot()">
<form action="" method="post" >
   <div id="results" ></div>
   <input type="submit" value="submit" name=""> 
</form>
 

     <!-- First, include the Webcam.js JavaScript Library -->
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.23/webcam.js"></script> 

    {{-- <script type="text/javascript" src="../webcam.min.js"></script> --}}
<!-- Script -->
<script type="text/javascript" src="webcamjs/webcam.min.js"></script>

<!-- Code to handle taking the snapshot and displaying it locally -->
<script language="JavaScript">

 // Configure a few settings and attach camera
 Webcam.set({
  width: 320,
  height: 240,
  image_format: 'jpeg',
  jpeg_quality: 90
 });
 Webcam.attach( '#my_camera' );

 // preload shutter audio clip
 var shutter = new Audio();
 shutter.autoplay = true;
 shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';

function take_snapshot() {
 // play sound effect
 shutter.play();

 // take snapshot and get image data
 Webcam.snap( function(data_uri) {
 // display results in page
 document.getElementById('results').innerHTML = 
  '<img src="'+data_uri+'"/>';
 } );
}
</script>
    

    </body>
</html>
