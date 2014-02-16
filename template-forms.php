<?php
/*
Template Name: Forms
*/
?><?php get_header(); ?>

<div class="container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php get_template_part( 'content', 'entryheader' ); ?>


<form>

<label>Button</label>
<input type="button" value="Button">

<label>Select</label>
<select>
	<option>Option</option>
	<option>Option</option>
	<option>Option</option>
	<option>Option</option>
	<option>Option</option>
</select>

<label>Checkbox</label>
<input type="checkbox">

<label>Radio Button</label>
<input type="radio">

<label>Colorpicker</label>
<input type="color">

<label>Date</label>
<input type="date">

<label>Datetime</label>
<input type="datetime">

<label>Datetime Local</label>
<input type="datetime-local">

<label>E-Mail</label>
<input type="email">

<label>File</label>
<input type="file">

<label>Image</label>
<input type="image">

<label>Month</label>
<input type="month">

<label>Number</label>
<input type="number">

<label>Password</label>
<input type="password">

<label>Radio-Button</label>
<input type="radio">

<label>Reset</label>
<input type="reset">

<label>Search</label>
<input type="search">

<label>Submit</label>
<input type="submit">

<label>Tel</label>
<input type="tel">

<label>Text</label>
<input type="text">

<label>Time</label>
<input type="time">

<label>URL</label>
<input type="url">

<label>Week</label>
<input type="week">

<label>Textarea</label>
<textarea placeholder="Your Text"></textarea>

</form>

</article>		

<?php endwhile; ?>

<?php get_template_part( 'content', 'nexpost' ); ?>

<?php else : ?>

<?php get_template_part( 'content', 'noposts' ); ?>

<?php endif; ?>
</div>

<?php get_footer(); ?>