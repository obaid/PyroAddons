<?php if ( ! empty($news)): ?>
<?php foreach ($news as $post): ?>
	<div class="news_post">
		<!-- Post heading -->
		<div class="post_heading">
			<h4><?php echo anchor('news/' .date('Y/m', $post->created_on) .'/'. $post->slug, $post->title); ?></h4>
			<p class="post_date"><?php echo lang('news_posted_label');?>: <?php echo format_date($post->created_on); ?></p>
			<?php if ($post->category_slug): ?>
			<p class="post_category">
				<?php echo lang('news_category_label');?>: <?php echo anchor('news/category/'.$post->category_slug, $post->category_title);?>
			</p>
			<?php endif; ?>
		</div>
		<?php if($post->keywords): ?>
		<p class="post_keywords">
			<?php echo lang('news_tagged_label');?>:
			<?php echo $post->keywords; ?>
		</p>
		<?php endif; ?>
		<div class="post_body">
			<?php echo $post->intro; ?>
		</div>
	</div>
<?php endforeach; ?>

<?php echo $pagination['links']; ?>

<?php else: ?>
	<p><?php echo lang('news_currently_no_posts');?></p>
<?php endif; ?>