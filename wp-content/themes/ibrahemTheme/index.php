
<?php get_header();?>


<div class="container">
    <div class="row">
    	<?php 
    		if (have_posts()) {
    			while (have_posts()) {
    				the_post()?>
    				<div class="col-md-6">
            	  		<div class="main-post">
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
              				<?php  the_post_thumbnail('',['class'=>'img-responsive img-thumbnail','title'=>'Post Image']); ?>

              				<p class="post-content"><?php the_excerpt() ?></p>

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
				<div class="clear-fix">	</div>
    	<?php
    			}
    		}

    		echo "<div class='post-pagination text-center'>";
	    		if (get_previous_posts_link())
	    		{
	    			 previous_posts_link('<i class="fa fa-chevron-left  fa-lg" aria-hidden="true"></i>Prev');

	    		}else
	    		{
	    			echo "<span class='previous-span'> No Previous Page </span>";
	    		}
	    		if (get_next_posts_link())
	    		{
						next_posts_link('<i class="fa fa-chevron-right  fa-lg" aria-hidden="true"></i>Next');

	    		}else
	    		{
	    			echo " <span class='next-span'> No Next Page </span>";
	    		}
    		echo "</div>";
    	 ?>
	</div>
</div>    	
<!-- ################################################################################# -->


<!-- 	
        
              	This  the  main  our  title
              	<img  class="img-responsive img-thumbnail" src="https://pbs.twimg.com/profile_images/473506797462896640/_M0JJ0v8.png">
				<hr>
             
            
           
     -->



<!-- ################################################################################# -->


<?php include('footer.php');?>

