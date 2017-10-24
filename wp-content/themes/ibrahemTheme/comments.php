<?php 

		if (comments_open()) { ?>
		<h3><?php comments_number('0 Comments','One Comments','%Comments') ?></h3>
<?php

		echo '<ul class="list-unstyled comments-list">';
			$comment_arguments =array(
				'max_depth'   => 3,
				'type'        =>'comment',
				'avatar_size' =>46,
			);
			wp_list_comments($comment_arguments);
		echo'</ul>';	
	}else{
		echo "Sorry Comments Are Disabled";
	}
 ?>
