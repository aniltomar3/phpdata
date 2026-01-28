<html>
<head>
	<title>JQuery Loader</title>
	<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
	<link rel="stylesheet" type="text/css" href="slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	 <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <style>
      .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }
    
    </style>	
</head>	
<body>
<section class="single-item slider">
    <div>
      <img src="http://websoftonic.com/wp-content/uploads/2022/09/home-slider-scaled.jpg" style="width:800px">
    </div>
    <div>
      <img src="http://websoftonic.com/wp-content/uploads/2022/09/home-slider-scaled.jpg" style="width:800px">
    </div>
    <div>
      <img src="http://websoftonic.com/wp-content/uploads/2022/09/home-slider-scaled.jpg" style="width:800px">
    </div>
    <div>
      <img src="http://websoftonic.com/wp-content/uploads/2022/09/home-slider-scaled.jpg" style="width:800px">
    </div>
</section>
  <script>
  $(document).on('ready',function(){
     $('.single-item').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});
		
  });
  </script>	

</body>
</html>



