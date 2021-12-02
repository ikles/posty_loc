  <footer class="footer">      
  	<div class="foot">
  		<div class="contain">
        <?php
  $post = get_post(109);
  ?>
  			<div class="foot-top">
  				<div class="foot-top-txt">
        <?php echo $post->post_content;?>    
          </div>
  				<div class="foot-top-soc-w">
  					<a href="<?php echo get_field('link1'); ?>" class="foot-top-soc"><img src="<? bloginfo('template_url') ?>/result/img/soc-f-1.svg" /></a>
            <a href="<?php echo get_field('link2'); ?>" class="foot-top-soc"><img src="<? bloginfo('template_url') ?>/result/img/soc-f-2.svg" /></a>
            <a href="<?php echo get_field('link3'); ?>" class="foot-top-soc"><img src="<? bloginfo('template_url') ?>/result/img/soc-f-3.svg" /></a>
  				</div>
  			</div>
  			<div class="foot-dw">
          <?php wp_nav_menu('menu=bot-mnu'); ?>
  			</div>
          <div class="foot-top-txt foot-top-txt-2">
        <?php echo $post->post_content;?>    
          </div>
  		</div>
  	</div>
  </footer>
</div>
<!--wrapper-->

<script src="<? bloginfo('template_url') ?>/result/js/jquery-3.4.1.min.js"></script>      
<script src="<? bloginfo('template_url') ?>/result/js/slick.js"></script>
<script src="<? bloginfo('template_url') ?>/result/js/common.js"></script>
<? wp_footer(); ?>
</body>
</html>