<?php get_header(); ?>
<div class="col-md-8">
	<?php the_post(); ?>
	<div class="nitrostyle-post">
		<div class="panel panel-default">
			<div class="panel-heading"><h2 class="nitrostyle-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
			<div class="panel-body">
				<span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp<?php the_time('Y-m-d') ?>
				<div class="nitrostyle-post-content">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="panel-footer">
				<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>&nbsp<?php the_category(", "); ?>&nbsp
				<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>&nbsp<?php comments_popup_link("0", "1", "%", "", ""); ?>
				<?php if ( has_tag() ) : ?>&nbsp<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>&nbsp<?php the_tags("", ", ", ""); endif; ?>
			</div>
		</div>
	</div>
	<?php comments_template(); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>