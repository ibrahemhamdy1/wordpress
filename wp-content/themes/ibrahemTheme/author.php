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
		<!-- end the  row -->
		<!-- start the  Posts section  -->
<?php
		if (have_posts()) {
			    ?> <h1 style="margin-left: 15px"><?php the_author_meta('nickname') ; ?></h1>
			    <?php
    			while (have_posts()) {
    				the_post()?>
    				<div class="author-page row"> 
	    				<div class="col-md-2">
	    					<?php  the_post_thumbnail('',['class'=>'img-responsive img-circle','title'=>'Post Image',]); ?>

	    				</div>
	    				<div class="col-md-10">
	            	  		<div class="main-post">
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

					<div class="clear-fix">	</div>
	    	<?php
    			}
    		}
    		?>
		<!--end the posts  section  -->
	</div>	
<?php  get_footer()?>