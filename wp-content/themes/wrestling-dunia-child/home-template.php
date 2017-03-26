<?php
/*
Template Name: Home
*/
get_header();
get_sidebar("left-menu");
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
   <div class="main-grids">
      <div class="top-grids">
         <div class="recommended-info">
            <h3>Recent Videos</h3>
         </div>
         <?php 
         $recent_posts = getRecentPosts();
         foreach( $recent_posts as $recent ){
         	$permalink = get_permalink( $recent['ID'] );     ?>
         <div class="col-md-4 resent-grid recommended-grid slider-top-grids">
            <div class="resent-grid-img recommended-grid-img">
               <a href="<?php echo $permalink; ?>">
               <img src="<?php echo get_the_post_thumbnail_url( $recent['ID'] ); ?>" alt="<?php echo $recent["post_title"]; ?>" />
               </a>
               <div class="time">
                  <p><?php echo get_the_time('H:i', $recent['ID']); ?></p>
               </div>
               <div class="clck">
                  <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
               </div>
            </div>
            <div class="resent-grid-info recommended-grid-info">
               <h3><a href="<?php echo $permalink; ?>" class="title title-info"><?php echo $recent["post_title"]; ?></a></h3>
               <ul>
                  <li>
                     <p class="commentcount author-info"><a href="#" class="commentcount">36</a></p>
                  </li>
                  <li class="right-list">
                     <p class="views views-info">2,114,200 views</p>
                  </li>
               </ul>
            </div>
         </div>
         <?php } ?>
         <div class="clearfix"> </div>
      </div>
      <div class="recommended">
         <div class="recommended-grids">
            <div class="recommended-info">
               <h3>Animated Cartoon</h3>
            </div>
            <script src="<?php echo ChildTemplateDirectoryPath_JS; ?>/responsiveslides.min.js"></script>
            <script>
               // You can also use "$(window).load(function() {"
               $(function () {
                 // Slideshow 4
                 $("#slider3").responsiveSlides({
               	auto: true,
               	pager: false,
               	nav: true,
               	speed: 500,
               	namespace: "callbacks",
               	before: function () {
               	  $('.events').append("<li>before event fired.</li>");
               	},
               	after: function () {
               	  $('.events').append("<li>after event fired.</li>");
               	}
                 });
               
               });
                
            </script>
            <div  id="top" class="callbacks_container">
               <ul class="rslides" id="slider3">
                  
                     	<?php 
                     	$myposts = getHomeScrollPosts(); 
                     	$counter = 1;
						foreach ( $myposts as $post ) : setup_postdata( $post );
                     	if($counter == 1 ) { ?><li><div class="animated-grids"><?php } ?>
                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                           <div class="resent-grid-img recommended-grid-img">
                              <a href="<?php the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>" alt="<?php the_title(); ?>" /></a>
                              <div class="time small-time slider-time">
                                 <p><?php echo get_the_time('H:i', get_the_ID() ); ?></p>
                              </div>
                              <div class="clck small-clck">
                                 <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                              </div>
                           </div>
                           <div class="resent-grid-info recommended-grid-info">
                              <h5><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h5>
                              <div class="slid-bottom-grids">
                                 <div class="slid-bottom-grid">
                                    <p class="commentcount author-info"><a href="#" class="commentcount">98</a></p>
                                 </div>
                                 <div class="slid-bottom-grid slid-bottom-right">
                                    <p class="views views-info">2,114,200 views</p>
                                 </div>
                                 <div class="clearfix"> </div>
                              </div>
                           </div>
                        </div>
                        	<?php $counter++; if($counter == 5 ) { $counter = 1; ?> 
                        	<div class="clearfix"> </div>
	                     </div>
	                  </li>
                        	<?php }
                        endforeach; 
    					wp_reset_postdata();
    					?>
               </ul>
            </div>
         </div>
      </div>
      <div class="recommended">
         <div class="recommended-grids">
            <div class="recommended-info">
               <h3>Recommended</h3>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/r1.jpg" alt="" /></a>
                  <div class="time small-time">
                     <p>2:34</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Varius sit sed viverra viverra nullam nullam interdum metus</a></h5>
                  <ul>
                     <li>
                        <p class="commentcount author-info"><a href="#" class="commentcount">10</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/r2.jpg" alt="" /></a>
                  <div class="time small-time">
                     <p>3:02</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                  <ul>
                     <li>
                        <p class="commentcount author-info"><a href="#" class="commentcount">70</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/r3.jpg" alt="" /></a>
                  <div class="time small-time">
                     <p>1:34</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
                  <ul>
                     <li>
                        <p class="commentcount author-info"><a href="#" class="commentcount">25</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/r4.jpg" alt="" /></a>
                  <div class="time small-time">
                     <p>2:09</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Nullam interdum viverra nullam metus varius sit sed viverra</a></h5>
                  <ul>
                     <li>
                        <p class="commentcount author-info"><a href="#" class="commentcount">56</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="clearfix"> </div>
         </div>
         <div class="recommended-grids">
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/r4.jpg" alt="" /></a>
                  <div class="time small-time">
                     <p>6:34</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
                  <ul>
                     <li>
                        <p class="commentcount author-info"><a href="#" class="commentcount">45</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/r5.jpg" alt="" /></a>
                  <div class="time small-time">
                     <p>7:34</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                  <ul>
                     <li>
                        <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/r6.jpg" alt="" /></a>
                  <div class="time small-time">
                     <p>6:09</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
                  <ul>
                     <li>
                        <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/r1.jpg" alt="" /></a>
                  <div class="time small-time">
                     <p>9:04</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                  <ul>
                     <li>
                        <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
      <div class="recommended">
         <div class="recommended-grids">
            <div class="recommended-info">
               <h3>Sports</h3>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/g.jpg" alt="" /></a>
                  <div class="time small-time">
                     <p>7:30</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
                  <ul>
                     <li>
                        <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/g1.jpg" alt="" /></a>
                  <div class="time small-time">
                     <p>9:34</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Nullam interdum viverra nullam metus varius sit sed viverra</a></h5>
                  <ul>
                     <li>
                        <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/g2.jpg" alt="" /></a>
                  <div class="time small-time">
                     <p>5:34</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
                  <ul>
                     <li>
                        <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/g3.jpg" alt="" /></a>
                  <div class="time small-time">
                     <p>6:55</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                  <ul>
                     <li>
                        <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="clearfix"> </div>
         </div>
         <div class="recommended-grids">
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/we2.jpg" alt=""></a>
                  <div class="time small-time">
                     <p>7:30</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
                  <ul>
                     <li>
                        <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/we1.jpg" alt=""></a>
                  <div class="time small-time">
                     <p>9:34</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Nullam interdum viverra nullam metus varius sit sed viverra</a></h5>
                  <ul>
                     <li>
                        <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/we4.jpg" alt=""></a>
                  <div class="time small-time">
                     <p>5:34</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
                  <ul>
                     <li>
                        <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
               <div class="resent-grid-img recommended-grid-img">
                  <a href="single.html"><img src="<?php echo ChildTemplateDirectoryPath_IMAGE; ?>/we3.jpg" alt=""></a>
                  <div class="time small-time">
                     <p>6:55</p>
                  </div>
                  <div class="clck small-clck">
                     <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="resent-grid-info recommended-grid-info video-info-grid">
                  <h5><a href="single.html" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                  <ul>
                     <li>
                        <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                     </li>
                     <li class="right-list">
                        <p class="views views-info">2,114,200 views</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
   </div>
   <?php get_footer(); ?>
</div>
<?php get_footer('scripts'); ?>