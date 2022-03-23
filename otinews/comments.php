<div class="comments-wrapper">
    <div class="comments">
        <h2 class="comment-title">
            <?php 
                if(! have_comments()){
                    echo "Leave a Comment";
                } else {
                    echo get_comments_number() . " Comments";
                }
            ?>
        </h2>
        <div class="comments-inner">
            <?php
                $comment_options = array(
                    'avatar_size'           =>  120,
                    'style'                 =>  'div'
                );
                wp_list_comments($comment_options)
            ?>
        </div>
    </div>
    <hr aria-hidden="true">
    <div class="comment-respond">
        <?php 
            $comment_form_option = array(
                'class_form'            => '',
                'title_replay_before'   => '<h2 id="replay-title" class="comment-replay-title">',
                'title_replay_after'    => '</h2>',
            );
            if(comments_open() ){
                comment_form($comment_form_option);
            }
        ?>
    </div>
</div>