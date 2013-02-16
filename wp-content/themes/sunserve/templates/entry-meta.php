<div class="row">
	<div class="span8">
		<p class="post-meta">
			<span class="post-meta-part"><i class="icon-user"></i><span class="byline author vcard"><?php echo __('by', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></span></span>
			<span class="post-meta-part"><i class="icon-calendar"></i><time class="updated" datetime="<?php echo get_the_time('c'); ?>" pubdate><?php echo sprintf(__('on ') . get_the_date()); ?></time></span>
    		<span class="post-meta-part"><i class="icon-comment"></i><a href="<?php comments_link(); ?>"><?php echo( get_comments_number() ); ?></a></span>
    		<span class="post-meta-part"><i class="icon-tags"></i><?php the_tags( '<span class="label label-tag">', '</span> <span class="label label-tag">', '</span>'); ?></span>
    	</p>
  	</div>
</div>