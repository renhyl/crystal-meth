<?php
/**
* Template Name: Home Page Template
*
*
* @package Crystal Meth
* @since Crystal Meth 0.1
*/
get_header(); ?>
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 blog-main text-center">
            <?php echo the_field('slide_one_heading');?>
        </div><!-- /.blog-main -->
    </div><!-- /.row -->

	<div class="row">
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		        <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
		        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
		        <li data-target="#carousel-id" data-slide-to="2" class=""></li>
		    </ol>
		    <div class="carousel-inner">
		        <div class="item active">
		            <img alt="First slide" src="http://mmc-london.com/wp-content/uploads/2015/10/tlo-1.jpg">
		            <div class="container">
		                <div class="carousel-caption">
		                    <h1>Example headline.</h1>
		                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
		                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
		                </div>
		            </div>
		        </div>
		        <div class="item">
		            <img alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
		            <div class="container">
		                <div class="carousel-caption">
		                    <h1>Another example headline.</h1>
		                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
		                </div>
		            </div>
		        </div>
		        <div class="item">
		            <img alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
		            <div class="container">
		                <div class="carousel-caption">
		                    <h1>One more for good measure.</h1>
		                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
		                </div>
		            </div>
		        </div>
		    </div>
		    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div>


<?php get_footer(); ?>