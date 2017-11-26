<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Viora</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fonts/fonts.css">
<link rel="stylesheet" type="text/css" href="css/visible.css">
<link rel="stylesheet" type="text/css" href="css/general.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/hover.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/turn.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/motion.js"></script>
<script type="text/javascript" src="js/function.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/motionblur.js"></script>
<script src="js/menu.js"></script>
<script>
 $(document).ready(function(e) {
       

	   
	    if($(window).width() > 1100) {
		   $("#viora").turn("size", 900, 600);
		   $('#viora').css({'transform':'scale(0.6,0.6) translate(300px, -50px)','cursor':'pointer'}); 
		}
		
		if($(window).width() <= 1100) {
			$('#viora').css({'transform':'scale(0.6,0.6) translate(250px, 0px)','cursor':'pointer'}); 
		}
			
			
   
	

    /*$('#viora').bind('start', function(event, pageObject, corner) {
	  if (corner=="tl" || corner=="tr") {
		event.preventDefault();
	  }
    });*/

	
	$('#viora').on('click', function() {		
       if($(this).turn("page") == 1) {
	   
	   $('.intro').addClass('animated fadeOut'); 
		
  
	   $(this).css({'-moz-transition':'0.5s','-webkit-transition':'0.5s','-o-transition':'0.5s','transition':'0.5s'});
	   
	   $(this).css({'transform':'scale(1,1) translate(0px, 0px)','cursor':'normal'});
       
	   
	    if($(window).width() > 1100) {
		   $('#viora').css({'transform':'scale(1,1) translate(0px, 0px)','cursor':'normal'}); 
		}
		
		if($(window).width() <= 1100) {
			$('#viora').css({'transform':'scale(1,1) translate(0px, 0px)','cursor':'normal'}); 
		}
		
	
		setTimeout(function() { 
		              $('#viora').turn('next');
		}, 500);
		
		setTimeout(function() { 
					  $('.top_panel ul li').each(function(i) {
						$(this).delay((i++)*800).css('opacity','1');   
					  });
		 }, 1500);  
	   
	   }
    });  
	
	
 });
</script>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="filters hidden">
		<defs>
			<filter id="blur" x="-20%" y="0" width="140%" height="100%">
				<feGaussianBlur in="SourceGraphic" stdDeviation="0,0" />
			</filter>
		</defs>
	</svg>
    
    <div class="menu">
			<div class="menu-bg js-blur"></div>
			<nav class="menu-items">
				<a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i> Same page   2-3</span>
				</a>
				<a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i> Same page   3-4</span>
				</a>
				<a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page   5-6</span>
				</a>
				<a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page   7-8</span>
				</a>
				<a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page   9-10</span>
				</a>
                <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  11-12</span>
				</a>
                <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  13-14</span>
				</a>
                <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  15-16</span>
				</a>
                <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  17-18</span>
				</a>
                <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  19-20</span>
				</a>
                <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  21-22</span>
				</a>
                <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  23-24</span>
				</a>
                <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  25-26</span>
				</a>
                <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  27-28</span>
				</a>
                 <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  29-30</span>
				</a>
                 <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  31-32</span>
				</a>
                 <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  33-34</span>
				</a>
                 <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  35-36</span>
				</a>
                 <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  37-38</span>
				</a>
                 <a href="#" class="menu-item">
					<span class="js-blur"><i class="fa fa-file-o"></i>Same page  39-40</span>
				</a>
			</nav>
		</div>
		<button class="menu-toggle"><span>Open Menu</span></button>
        
        
    <a class="lrow"></a>
    <a class="rrow"></a>
   
    <div class="top_panel">
      <ul>
        <li><a href=""><i class="fa fa-facebook"></i></a></li>
        <li><a href=""><i class="fa fa-twitter"></i></a></li>
        <li><a href=""><i class="fa fa-youtube"></i></a></li>
        <li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
         <li><a href=""><h3>in</h3></a></li>
        <li><a href=""><i class="fa fa-instagram"></i></a></li>
      </ul>   
    </div>
    
    <!--*****************************************-->
     <div class="viora_box">
            <div class="intro">
              <h2>Viora</h2>
              
              <h3>Make a flip book with HTML5</h3>
              
              <p>Works on most browsers and devices</p>
              <p>Simple and clean API</p>
              <p>Lightweight, 10K</p>
              
              <button class="btn">Download</button>
            </div>
            
            <div id="viora">
                <!------page 1------>
                
                
                
                <div id="p1">
                  <div class="inner_p1">
                    <?php require_once "page_1.php" ?>
                  </div>
                </div>
                
                
                
                <!------page 2------>
                
                
                
                <div id="p2">
                  <div class="inner_p2">
                    <?php require_once "page_2.php" ?>
                  </div>
  
                </div>
                
                
                
                <!------page 3------>
                
              
               <div id="p3">
                  <div class="inner_p3">
                    <?php require_once "page_3.php" ?>
                  </div>
  
                </div>
                
                
                <!------page 4------>
                
                
                
                <div id="p4">
                  <div class="inner_p4">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page4/page4.png" alt="" class="lft"/>
                  </div>
                </div>
                
                
                
                <!------page 5----->
                
                
                
               <div id="p5">
                  <div class="inner_p5">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page5/page5.png" alt="" class="lft"/>
                  </div>
                </div>
                
                <!------page 6------>
                
                <div id="p6">
                  <div class="inner_p6">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page6/bk.png" alt="" class="rght"/>
                  </div>
                </div>
                
                <!------page 7------>
                
                <div id="p7">
                  <div class="inner_p7">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page7/bk.png" alt="" class="rght"/>
                  </div>
                </div>
                
                <!------page 8------>
                
                <div id="p8">
                  <div class="inner_p8">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page8/bk.png" alt="" class="rght"/>
                  </div>
                </div>
                
                 <!------page 9------>
                
                <div id="p9">
                  <div class="inner_p9">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page9/bk.png" alt=""/>
                  </div>
                </div>
                
                 <!------page 10------>
                
                <div id="p10">
                  <div class="inner_p10">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page10/bk.png" alt=""/>
                  </div>
                </div>
                
                 <!------page 11------>
                
                <div id="p11">
                  <div class="inner_p11">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page11/bk.png" alt=""/>
                  </div>
                </div>
                
                 <!------page 12------>
                
                <div id="p12">
                  <div class="inner_p12">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page12/bk.png" alt=""/>
                  </div>
                </div>
                
                 <!------page 13------>
                
                <div id="p13">
                  <div class="inner_p13">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page13/bk.png" alt=""/>
                  </div>
                </div>
                
                 <!------page 14------>
                
                <div id="p14">
                  <div class="inner_p14">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page14/bk.png" alt=""/>
                  </div>
                </div>
                
                
                 <!------page 15------>
                
                <div id="p15">
                  <div class="inner_p15">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page15/bk.png" alt=""/>
                  </div>
                </div>
                
                
                <!------page 16------>
                
                <div id="p16">
                  <div class="inner_p16">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page16/bk.png" alt=""/>
                  </div>
                </div>
                
                
                
                
                
                

                
                <!------page 17------>
                
                <div id="p17">
                  <div class="inner_p17">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page17/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 18------>
                
                <div id="p18">
                  <div class="inner_p18">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page18/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 19------>
                
                <div id="p19">
                  <div class="inner_p19">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page19/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 20------>
                
                <div id="p20">
                  <div class="inner_p20">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page20/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 21------>
                
                <div id="p21">
                  <div class="inner_p21">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page21/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 22------>
                
                <div id="p22">
                  <div class="inner_p22">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page22/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 23------>
                
                <div id="p23">
                  <div class="inner_p23">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page23/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 24------>
                
                <div id="p24">
                  <div class="inner_p24">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page24/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 25------>
                
                <div id="p25">
                  <div class="inner_p25">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page25/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 26------>
                
                <div id="p26">
                  <div class="inner_p26">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page26/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 27------>
                
                <div id="p27">
                  <div class="inner_p27">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page27/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 28------>
                
                <div id="p28">
                  <div class="inner_p28">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page28/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 29------>
                
                <div id="p29">
                  <div class="inner_p29">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page29/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 30------>
                
                <div id="p30">
                  <div class="inner_p30">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page30/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 31------>
                
                <div id="p31">
                  <div class="inner_p31">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page31/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 32------>
                
                <div id="p32">
                  <div class="inner_p32">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page32/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 33------>
                
                <div id="p33">
                  <div class="inner_p33">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page33/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 34------>
                
                <div id="p34">
                  <div class="inner_p34">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page34/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 35------>
                
                <div id="p35">
                  <div class="inner_p35">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page35/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 36------>
                
                <div id="p36">
                  <div class="inner_p36">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page36/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 37------>
                
                <div id="p37">
                  <div class="inner_p37">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page37/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 38------>
                
                <div id="p38">
                  <div class="inner_p38">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page38/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 39------>
                
                <div id="p39">
                  <div class="inner_p39">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page39/bk.png" alt=""/>
                  </div>
                </div>
                
                <!------page 40------>
                
                <div id="p40">
                  <div class="inner_p40">
                    <img ondrag="return false" ondragdrop="return false" ondragstart="return false"  src="images/page40/bk.png" alt=""/>
                  </div>
                </div>
               
            </div>

           
    </div>
       
    <!--*************************************************-->
    
    
    
    <div class="footer">
       <center>All Rights Reserved &copy; 2016</center>
    </div>
    <!--script type="text/javascript" src="js/sizeViora.js"></script-->
    
    <!----video---->
    <div class="homepage-hero-module">
    <div class="filter"></div>
    <div class="video-container">
        
        <video autoplay loop class="fillWidth">
            <source src="video/Up.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="video/Up.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="video/Up.ogv" type="video/ogg" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class="poster hidden">
            <img src="video/Up.jpg" alt="">
        </div>
    </div>
   </div>
   <!------->
   <script>
     //jQuery is required to run this code
$( document ).ready(function() {

    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

function scaleVideoContainer() {

    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){

    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
    windowHeight = $(window).height() + 5,
    videoWidth,
    videoHeight;

    console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

            $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });
}
   </script>
</body>
</html>

