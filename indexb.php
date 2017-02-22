<!DOCTYPE html>
<html lang="en">
<head>
    <link href="prueba.css" rel="stylesheet">
</head>
<body>
<div class="slider"><!-- the slider -->
    <div><!-- a mandatory div used by the slider -->
        <!-- each div below is considered a slide -->
        <div><img src="http://placekitten.com/g/400/400"/></div>
        <div><img src="http://placekitten.com/g/400/400"/></div>
        <div><img src="http://placekitten.com/g/400/400"/></div>
        <div><img src="http://placekitten.com/g/400/400"/></div>
        <div><img src="http://placekitten.com/g/400/400"/></div>
        <div><img src="http://placekitten.com/g/400/400"/></div>
    </div>
</div>
	
<script src="jquery.diyslider.min"></script>
<script>	// initialize the slider
$("#slider").diyslider({
    width: "400px",
    height: "400px",
    animationEasing: "linear",
    animationDuration: 2000,
    animationAxis: "y"
});

// set up a timer to change slides automatically
$("#slider").diyslider("move", "forth");
setInterval(function(){
    $(".slider").diyslider("move", "forth");
}, 2000);</script>
</body>

</HTML>