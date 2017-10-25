<?php  get_header()?>
	<div class="container author-page">
		<div class="author-main-info">
			<!-- start the  row -->
			<div class="row">
				<h1 class="profile-header text-center"><?php the_author_meta('nickname') ?></h1>
				<div class="col-md-3">
					<?php 
					  $avater_arguments=array(
	                  		'class' => 'img-responsive img-circle center-block');
	                  echo  get_avatar(get_the_author_meta('ID'),128,'','User Avatar',$avater_arguments);

					 ?>
					
				</div>

				<div class="col-md-9">
					<ul class="list-unstyled">
						<li>First Name : <?php the_author_meta('first_name') ?></li>
						<li>First Name : <?php the_author_meta('last_name') ?></li>
						<li>First Name : <?php the_author_meta('nickname') ?></li>

					</ul>
					<hr>
					<?php if (get_the_author_meta('description')) { ?>
	              <p><?php the_author_meta('description') ?></p>
	              <?php }else{
	                    echo  'there is  now description';
	                  }?>
				</div>
			</div>
		</div>	
			<!-- end the  row -->
		<!-- start the  row -->
		<div class="row">
			<div class="col-md-3">
				<div class="status">
					Posts
					<span><?php echo  count_user_posts(get_the_author_meta('ID')) ?></span>

				</div>
			</div>
			<div class="col-md-3 ">
				<div class="status">
					Comments 
					<span><?php $commentcount_arguments=array(
								'user_id' => get_the_author_meta('ID'),
								'count'   => true
								);

								echo get_comments($commentcount_arguments);
							?>			
					</span>
				</div>
			</div>	
			<div class="col-md-3">
				<div class="status">
					Tostal Post View
					<span>0</span>

				</div>
			</div>		

			<div class="col-md-3">
				<div class="status">
					Test
					<span>0</span>

				</div>
			</div>
		</div>
		<!-- end the  row -->
		<!-- start the  Posts section  -->
<?php
		if (have_posts()) {
			    ?> <h3 class="author-posts-title text-center"><?php the_author_meta('nickname') ; ?> Posts</h3>
			    <?php
			    	$author_posts_per_page=3;
			    	$author_posts_arguments =array(
			    		'author' =>get_the_author_meta('ID'),
			    		'posts_per_page' =>$author_posts_per_page
			    	);
			    	$author_posts = new WP_Query($author_posts_arguments);

    			while ($author_posts->have_posts()) {
    				$author_posts->the_post()?>
    				<div class="author-page main-post ">
	    				<div class="row"> 
		    				<div class="col-md-2">
		    					<?php  the_post_thumbnail('',['class'=>'img-responsive img-circle','title'=>'Post Image',]); ?>

		    				</div>
		    				<div class="col-md-10">
		            	  		<div class="info">
		            	  			<h3 class="post-title">
		            	  				<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
		            	  			</h3>
		              				<span class="post-date">
		              					<i class="fa fa-calendar  fa-fw"></i></i><?php the_time('F J ,Y') ?>
		              				</span>
		              				<span class="post-comments">
		              					<i class="fa fa-comments fa-fw"></i>
		              					<?php comments_popup_link('0 comments','One comment','% Comment','comment-url','Comments Disabled') ?>
		              				</span>

		              				<p class="post-content"><?php the_excerpt() ?></p>

		              				<hr>
									
			            	  	</div>
			            	</div>
			            </div>
					</div>	
					<div class="clear-fix">	</div>

	    	<?php
    			}
    		}
    		wp_reset_postdata();// Rest Loop jquery 
    		$comment_per_page =6;
    		$comment_arguments=array(
    			'user_id' 		=>get_the_author_meta('ID'),
    			'status'		=>'approve',
    			'number'		=>'publich',
    			'post_type'		=>'post',


    		);

    		$comments=get_comments($comments_arguments);
	    			# code...
	    		
	    		$ID =$comment->comment_post_ID;?>
	    			    		<hr>
 
	    		<div class="clear-fix"></div>
	    		<h3 class="author-posts-title text-center"><?php the_author_meta('nickname') ; ?> Comments</h3>

	    		<div class="row">

				<?php
	    		foreach ($comments as $comment) {?>
					<div class="col-md-12">
						<div class="comment">
			    			<a href="<?php echo get_permalink($comment->comment_post_ID) ?>">
			    				<?php echo get_the_title($ID) ?>
			    			</a>
			    			<br>
			    			<span>	<?php echo 'Added on ' .mysql2date(' l , F , j , Y',$comment->comment_date );?></span>

			    			<br>
			    			<hr>

			    			<h3><?php echo $comment->comment_content ?>	</h3>
			    		</div>	
			    	</div>		
	    		
	    		<?php
	    	   } 
    		?>
		<!--end the posts  section  -->
	</div>	
<?php  get_footer()?>