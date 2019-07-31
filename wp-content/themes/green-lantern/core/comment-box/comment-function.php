<?php
// code for comment
if ( ! function_exists( 'weblizar_comment' ) ) :
function weblizar_comment( $comment, $args, $depth ) 
{
	//get theme data
	global $comment_data;

	//translations
	$leave_reply = $comment_data['translation_reply_to_coment'] ? $comment_data['translation_reply_to_coment'] : 
	__('Reply','green-lantern'); ?>
	
          <div class="media hc_comment_box">
			<a class="pull_left_comment">
            <?php echo get_avatar($comment,$size = '60'); ?>
            </a>
           <div class="media-body">
			   <div class="comment_detail">
				<h4 class="comment_detail_title"><?php comment_author();?><span>&nbsp;&nbsp;<?php comment_time('F j, Y');?>&nbsp;<?php esc_html_e('at','green-lantern');?>&nbsp;<?php comment_time('g:i a'); ?></span></h4>
				<p><?php comment_text() ; ?></p>				
				<div class="reply"><i class="fa fa-mail-forward"></i>&nbsp;<?php comment_reply_link(array_merge( $args, array('reply_text' => $leave_reply,'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div>
				<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'green-lantern' ); ?></em>
				<br/>
				<?php endif; ?>				
				</div>
			</div>
		  </div>
<?php
}
endif;
add_filter('get_avatar','wl_add_gravatar_class');
function wl_add_gravatar_class($class) {
	$class = str_replace("class='avatar", "class='comment_img", $class);
    return $class;
}
?>