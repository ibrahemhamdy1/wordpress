
<?php get_header();?>


<div class="container">
  <div class="row">
      <div class="category-information">
        <h1 class="text-center category-title"><?php single_cat_title() ?></h1>
        <p class="category-descripation"><?php echo  category_description() ?></p>
        <div class="cat-stats text-center">
          <span >Atricles  :    20</span><br>
          <span>Comment Count :100</span>
        </div>
      </div>
  </div>
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
                     
              </p>

                    </div>
                </div>
        <div class="clear-fix"> </div>
      <?php
          }
        }

        /*echo "<div class='post-pagination text-center'>";
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
        echo "</div>";*/
        echo "<div class='post-pagination text-center'>";

          echo numbering_pagination();
        echo "</div>";  
       ?>
  </div>
</div>      



<?php include('footer.php');?>

