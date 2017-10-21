<div class="ap-list-blog">
	<h3 class="widget-title"><?php echo $title; ?></span></h3>
	<div class="ap-list-blog-content">
		<marquee onmouseover="this.stop()" onmouseout="this.start()" direction="up" style="width:100%; height:300px">
		<?php $news =  new WP_Query(array( 'cat' => $ids,'orderby' => '','order'=> '','posts_per_page' => $count ));
            if($news->have_posts())
			{
				while($news->have_posts())
				{
					$news->the_post();
			?>
				<div class="ap-list-blog-item">
				    <div class="ap-list-blog-obj">
	                	<div class="ap-list-blog-item-intro">
	                		<h3>
			                    <a class="wi-title" href="<?php echo esc_url( get_permalink()); ?>" title="<?php echo the_title(); ?>">
			                    	<?php the_title(); //echo wp_trim_words( get_the_title(), $num_words = 7, $more = '… ' ); ?>
			                    </a>
			                </h3>
							<p><?php echo the_excerpt();?></p>
							<a href="<?php echo esc_url( get_permalink()); ?>">
									Xem chi tiết
							</a>
							<hr/>
	                	</div>
						<!--div class="date-create">
	                		<div class="w-time ap-time">
	                			<?php //the_date("g:i d/m/Y");  ?>
								<?php //echo (get_the_date("g:i d/m/Y")); ?>
							</div>
	                	</div-->
	                </div>
	                <div style="clear:both;"></div>
				</div>
		
		<?php } 
			} 
		?>
		</marquee>
	</div>
	
</div>

<?php wp_reset_query(); ?>


