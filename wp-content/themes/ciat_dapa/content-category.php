<?php
	
/**
 *
 * content*.php
 *
 * The post format template. You can change the structure of your posts or add/remove post elements here.
 * 
 * 'id' - post id
 * 'class' - post class
 * 'thumbnail' - post icon
 * 'title' - post title
 * 'before' - post header metadata
 * 'content' - post content
 * 'after' - post footer metadata
 * 
 * To create a new custom post format template you must create a file "content-YourTemplateName.php"
 * Then copy the contents of the existing content.php into your file and edit it the way you want.
 * 
 * Change an existing get_template_part() function as follows:
 * get_template_part('content', 'YourTemplateName');
 *
 */	

	global $post;
	theme_post_wrapper(
		array(
				'id' => theme_get_post_id(), 
				'class' => theme_get_post_class(),
				'thumbnail' => theme_get_post_thumbnail(),
				'title' => '<a href="' . get_permalink( $post->ID ) . '" rel="bookmark" title="' . strip_tags(get_the_title()) . '">' . get_the_title() . '</a>', 
        'heading' => theme_get_option('theme_'.(is_single()?'single':'posts').'_article_title_tag'),
				'before' => theme_get_metadata_icons( 'date,author,edit', 'header' ),
				'content' => custom_text_length(155, ' Read more...', '')
                                
			)	
	);
?>
