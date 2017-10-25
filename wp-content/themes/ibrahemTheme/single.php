
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
    		}echo "<div class='clear-fix'></div>";?>
        <!-- Start the Author Section  -->
        <div class="row photo main-post ">
          <div class="col-md-2 ">
            <?php 
                $avater_arguments=array(
                  'class' => 'img-responsive img-circle center-block'
                );
                 echo  get_avatar(get_the_author_meta('ID'),128,'','User Avatar',$avater_arguments);

               ?>
            </div>
            <div class="col-md-10 author-info">

                <h4>
                   <?php the_author_meta('first_name') ?>
                   <?php the_author_meta('last_name') ?>
                   <?php the_author_meta('nickname') ?>
                </h4>
              <?php if (get_the_author_meta('description')) { ?>
              <p><?php the_author_meta('description') ?></p>
              <?php }else{
                    echo  'there is  now description';
                  }?>
            </div>
            <hr>
            <p>
          User Posts Count : <span  class="posts-count"><?php count_user_posts(get_the_author_meta('ID')) ?></span>
               User Profile Link :<span><?php the_author_posts_link() ?></span>
            </p>
        </div>
    
        <!-- end of  the rad post -->
        <!-- end the Author Section  -->
        <?php
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
?>
            <!-- start of the  rand post   --> 
           <?php
            $random_posts_arguments =array(
              'posts_per_page'   => 2,
              'orderby'          =>'rand',
              'category__in'     =>wp_get_post_categories(get_queried_object_id()),
              'post__not_in'      =>array(get_queried_object_id())

            );
            $random_posts = new WP_Query($random_posts_arguments);

          while ($random_posts->have_posts()) {
            $random_posts->the_post()?>
            <div class="author-page main-post ">
              <div class="info">
                <h3 class="post-title">
                    <a href="<?php the_permalink() ?>">
                      <?php the_title() ?>
                                
                    </a>
                </h3>
                      <hr>
                </div>
            </div>  
          <div class="clear-fix"> </div>

        <?php
          }

    		comments_template();
    	 ?>

</div>    	

<!-- ################################################################################# -->




<!-- ################################################################################# -->


<?php include('footer.php');?>

