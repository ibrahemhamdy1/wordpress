
<?php get_header();?>


<div class="container">
    	<?php 
    		if (have_posts()) {
    			while (have_posts()) {
    				the_post()?>
    				<div class="">
            	  		<div class="main-post single-post">
            	  			<?php edit_post_link('Edit <i  class="fa fa-pencil"></i>') ?>
            	  			<h3 class="post-title">
            	  				<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            	  			</h3>
            	  			<span class="post-author">
            	  				<i class="fa fa-user fa-fw"></i><?php the_author_posts_link() ?>
            	  			</span>
              				<span class="post-date">
              					<i class="fa fa-calendar  fa-fw"></i></i><?php the_time('F J ,Y') ?>
              				</span>
              				<span class="post-comments">
              					<i class="fa fa-comments fa-fw"></i>
              					<?php comments_popup_link('0 comments','One comment','% Comment','comment-url','Comments Disabled') ?>
              				</span>
              				

              				<div class="row">
              					<div class="col-md-6">
              						<?php  the_post_thumbnail('',['class'=>'img-responsive img-thumbnail','title'=>'Post Image']); ?>
              					</div>
              					<div class="col-md-6">
              						<p class="post-content"><?php the_content() ?></p>
              						
              					</div>
              				</div>
              				<hr>

							<p class="psot-categories">
								<i class="fa fa-tags fa-fw"></i>
									<?php the_category(', ') ?>
								
							</p>
							<p class="psot-categories">
								<?php 			
									if (has_tag()) {
										the_tags();
									}else{
										echo 'Tags: there is  no tags';
									}

								 ?>
								
							</p>

	            	  	</div>
	            	</div>
    	<?php
    			}
    		}

    		echo "<div class='post-pagination text-center'>";
	    		if (get_previous_post_link())
	    		{
	    			 previous_post_link('%link','<i class="fa fa-chevron-left  fa-lg" aria-hidden="true"></i> Previous Articls:%title');

	    		}else
	    		{
	    			echo "<span class='previous-span'> No Previous Page </span>";
	    		}
	    		if (get_next_post_link())
	    		{
						next_post_link('%link','Next Articls:%title <i class="fa fa-chevron-right  fa-lg" aria-hidden="true"></i> ');

	    		}else
	    		{
	    			echo " <span class='next-span'> No Next Page </span>";
	    		}
    		echo "</div>";
    		echo '<hr class="comment-separator">';
    		comments_template();

    	 ?>
</div>    	

<!-- ################################################################################# -->




<!-- ################################################################################# -->


<?php include('footer.php');?>

