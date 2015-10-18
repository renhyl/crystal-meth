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
<div id="carousel-id" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item">
            <img alt="First slide" src="<?php echo the_field('slide_one_image');?>">
        </div>
        <div class="item">
            <img alt="Second slide" src="<?php echo the_field('slide_two_image');?>">
        </div>
        <div class="item active">
            <img alt="Third slide" src="<?php echo the_field('slide_three_image');?>">
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
</div>

<div class="row get-quote">
	<div class="col-xs-12 col-sm-4 col-sm-offset-3">
		<h2 class="text-uppercase"><?php echo the_field('cta_one_text');?></h2>
	</div>
	<div class="col-xs-12 col-sm-4">
		<a href="<?php echo the_field('cta_one_button_url');?>" class="btn btn-default promo-button hvr-sweep-to-right"><?php echo the_field('cta_one_button');?></a>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
		<h2 class="text-uppercase"><?php echo the_field('content_heading');?></h2>
		<?php echo the_field('content_text');?>
	</div>
</div>
<div class="row promo-icons">
	<div class="col-xs-12 col-sm-4 col-sm-offset-2">
		<?php echo the_field('icon_one');?>
		<h3><?php echo the_field('icon_one_heading');?></h3>
		<?php echo the_field('icon_one_text');?>
	</div>
	<div class="col-xs-12 col-sm-4">
		<?php echo the_field('icon_two');?>
		<h3><?php echo the_field('icon_two_heading');?></h3>
		<?php echo the_field('icon_two_text');?>
	</div>
</div>
<div class="row promo-icons">
	<div class="col-xs-12 col-sm-4 col-sm-offset-2">
		<?php echo the_field('icon_three');?>
		<h3><?php echo the_field('icon_three_heading');?></h3>
		<?php echo the_field('icon_three_text');?>
	</div>
	<div class="col-xs-12 col-sm-4">
		<?php echo the_field('icon_four');?>
		<h3><?php echo the_field('icon_four_heading');?></h3>
		<?php echo the_field('icon_four_text');?>
	</div>
	<div class="col-xs-12">
		<a href="<?php echo the_field('icons_button_url');?>" class="btn btn-default promo-button hvr-sweep-to-right"><?php echo the_field('icons_button_text');?></a>
	</div>
</div>

<div class="row small-services">
	<div class="col-xs-12 col-sm-6">
	</div>
	<div class="col-xs-12 col-sm-6 text-center">
		<h3><?php echo the_field('offers_heading');?></h3>
		<?php echo the_field('offers_text');?>
		<?php echo the_field('offers_list');?>
		<a href="<?php echo the_field('offers_button_link');?>" class="btn btn-default promo-button hvr-sweep-to-right"><?php echo the_field('offers_button_text');?></a>
	</div>
</div>

<div class="row offer text-center">
		<div class="col-xs-10 col-sm-10 col-sm-offset-1">
			<div class="col-xs-12 col-sm-4">
				<a href="<?php echo the_field('promo_one_url');?>" class="text-uppercase"><img src="<?php echo the_field('promo_one_image');?>" class="img-responsive" alt="Image"><?php echo the_field('promo_one_heading');?></a>
			</div>
			<div class="col-xs-12 col-sm-4">
				<a href="<?php echo the_field('promo_two_url');?>" class="text-uppercase"><img src="<?php echo the_field('promo_two_image');?>" class="img-responsive" alt="Image"><?php echo the_field('promo_two_heading');?></a>
			</div>
			<div class="col-xs-12 col-sm-4">
				<a href="<?php echo the_field('promo_three_url');?>" class="text-uppercase"><img src="<?php echo the_field('promo_three_image');?>" class="img-responsive" alt="Image"><?php echo the_field('promo_three_heading');?></a>
			</div>
		</div>
</div>
<?php get_footer(); ?>