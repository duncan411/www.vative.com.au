
<?php /*
<time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
<p class="byline author vcard"><?= __('By', 'sage'); ?>
	<a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn">
		<?= get_the_author(); ?>
	</a>
</p>
*/?>

<div class="stats">
	<a href="#">
	  <i class="fa fa-clock-o"></i>  
	  <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
	</a>
</div>

<?php $auther_url = get_author_posts_url(get_the_author_meta('ID')); ?>
<div class="stats">
	<a href="<?= $auther_url ?>">
		<i class="fa fa-pencil"></i>
		<!-- <i class="fa fa-male"></i> -->
		<!-- <span class="byline author vcard"><?= __('By', 'sage'); ?></span> -->
		<?= get_the_author(); ?>
	</a>
</div>
