<?php get_header(); ?>

<!-- <div class="posts-slide-w">
<picture class="posts-slide">
<source media="(max-width: 479px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-1-288.jpg">
<source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-1-432.jpg">
<source media="(max-width: 991px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-1-288.jpg">
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-1-625.jpg">
<img type="image/jpeg" src="/wp-content/uploads/2021/12/sl-img-1-625.jpg" />
</picture>
</div> -->

<main class="main">
  <div class="sl">
    <div class="contain">
      <?php
      $post = get_post(10);
      ?>
      <div class="sl-w">
        <div class="sl-txt"><?php echo $post->post_title;?></div>
        <div class="sl-btn-w">
          <?php echo $post->post_content;?>          
        </div>
      </div>
    </div>
  </div>
  <div class="adr" id="adant">
    <div class="contain">
      <div class="adr-w">
        <?php
        $post = get_post(16);
        ?>
        <div class="adr-col-1">
          <?php echo $post->post_content;?>          
        </div>
        <div class="adr-col-2">
          <div class="adr-col-2-row">
            <div class="adr-col-2-numb">1</div>
            <div class="adr-col-2-txt">
              <?php echo get_field('num1'); ?>

            </div>
          </div>
          <div class="adr-col-2-row">
            <div class="adr-col-2-numb">2</div>
            <div class="adr-col-2-txt">
              <?php echo get_field('num2'); ?>
            </div>
          </div>
          <div class="adr-col-2-row">
            <div class="adr-col-2-numb">3</div>
            <div class="adr-col-2-txt">
              <?php echo get_field('num3'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="stat">
    <div class="contain">
      <div class="stat-w">
        <?php
        $post = get_post(24);
        ?>
        <div class="stat-l">        
          <?php echo get_field('img1'); ?>
   <!--          <picture>
          <source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/stat-1-288.jpg">
          <source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/stat-1-407.jpg">
          <source media="(max-width: 1330px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/stat-1-407.jpg">
          <source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/stat-1-407.jpg">
          <img type="image/jpeg" src="/wp-content/uploads/2021/12/stat-1-407.jpg" />
          </picture>  -->
        <div class="stat-txt"> <?php echo get_field('txt1'); ?> </div>
      </div>
      <div class="stat-r">
        <?php echo get_field('img2'); ?>
<!--     <picture>
          <source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/stat-2-288.jpg">
          <source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/stat-2-720.jpg">
          <source media="(max-width: 1330px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/stat-2-720.jpg">
          <source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/stat-2-843.jpg">
          <img type="image/jpeg" src="/wp-content/uploads/2021/12/stat-2-843.jpg" />
          </picture>  -->

          
        <div class="stat-txt"> <?php echo get_field('txt2'); ?> </div>
      </div>
    </div>
  </div>
</div>



<div class="posts" id="posts">
  <div class="contain">
    <div class="posts-w">





      <?php
      $post = get_post(30);
      ?>
      <div class="posts-l">
        <div class="posts-l-txt"><?php echo $post->post_content;?></div>
        <div class="posts-l-ex-w posts-l-ex-1">
          <div class="posts-l-ex">
            <div class="posts-l-ex-img-w"><img src="<? bloginfo('template_url') ?>/result/img/ic-1.svg" /></div>
            <div class="posts-l-ex-txt">
              <?php echo get_field('text1'); ?>
            </div>
          </div>
          <div class="posts-l-ex">
            <div class="posts-l-ex-img-w"><img src="<? bloginfo('template_url') ?>/result/img/ic-2.svg" /></div>
            <div class="posts-l-ex-txt">
              <?php echo get_field('text2'); ?>
            </div>
          </div>
          <div class="posts-l-ex">
            <div class="posts-l-ex-img-w"><img src="<? bloginfo('template_url') ?>/result/img/ic-3.svg" /></div>
            <div class="posts-l-ex-txt">
              <?php echo get_field('text2'); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="posts-r">
        <div class="posts-r-top">
          <div class="posts-r-top-nm">
            <div class="posts-r-top-nm-ava">
              <img src="<? bloginfo('template_url') ?>/result/img/ava.svg">
            </div>
            <div class="posts-r-top-nm-txt">vitaliystrong</div>
          </div>
          <div class="posts-r-top-unf"><img src="<? bloginfo('template_url') ?>/result/img/unf.svg"></div>
        </div>
        <div class="posts-slider">            

          <?php echo get_field('slider'); ?>

<!-- <picture class="posts-slide">
<source media="(max-width: 479px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-1-288.jpg">
<source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-1-432.jpg">
<source media="(max-width: 991px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-1-288.jpg">
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-1-625.jpg">
<img type="image/jpeg" src="/wp-content/uploads/2021/12/sl-img-1-625.jpg" />
</picture>
<picture class="posts-slide">
<source media="(max-width: 479px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-2-288.jpg">
<source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-2-432.jpg">
<source media="(max-width: 991px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-2-288.jpg">
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-2-625.jpg">
<img type="image/jpeg" src="/wp-content/uploads/2021/12/sl-img-2-625.jpg" />
</picture>
<picture class="posts-slide">
<source media="(max-width: 479px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-3-288.jpg">
<source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-3-432.jpg">
<source media="(max-width: 991px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-3-288.jpg">
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-3-625.jpg">
<img type="image/jpeg" src="/wp-content/uploads/2021/12/sl-img-3-625.jpg" />
</picture>
<picture class="posts-slide">
<source media="(max-width: 479px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-4-288.jpg">
<source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-4-432.jpg">
<source media="(max-width: 991px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-4-288.jpg">
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-4-625.jpg">
<img type="image/jpeg" src="/wp-content/uploads/2021/12/sl-img-4-625.jpg" />
</picture>
<picture class="posts-slide">
<source media="(max-width: 479px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-5-288.jpg">
<source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-5-432.jpg">
<source media="(max-width: 991px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-5-288.jpg">
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-5-625.jpg">
<img type="image/jpeg" src="/wp-content/uploads/2021/12/sl-img-5-625.jpg" />
</picture>
<picture class="posts-slide">
<source media="(max-width: 479px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-6-288.jpg">
<source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-6-432.jpg">
<source media="(max-width: 991px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-6-288.jpg">
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/sl-img-6-625.jpg">
<img type="image/jpeg" src="/wp-content/uploads/2021/12/sl-img-6-625.jpg" />
</picture> -->

</div>          
<div class="posts-r-sl">
  <div class="posts-r-sl-txt">???????????? ????????????????<span>, ?????????? ?????????????????? ????????</span></div>              
</div>

</div>

        <div class="posts-l-ex-w posts-l-ex-2">
          <div class="posts-l-ex">
            <div class="posts-l-ex-img-w"><img src="<? bloginfo('template_url') ?>/result/img/ic-1.svg" /></div>
            <div class="posts-l-ex-txt">
              <?php echo get_field('text1'); ?>
            </div>
          </div>
          <div class="posts-l-ex">
            <div class="posts-l-ex-img-w"><img src="<? bloginfo('template_url') ?>/result/img/ic-2.svg" /></div>
            <div class="posts-l-ex-txt">
              <?php echo get_field('text2'); ?>
            </div>
          </div>
          <div class="posts-l-ex">
            <div class="posts-l-ex-img-w"><img src="<? bloginfo('template_url') ?>/result/img/ic-3.svg" /></div>
            <div class="posts-l-ex-txt">
              <?php echo get_field('text2'); ?>
            </div>
          </div>
        </div>

</div>
</div>
</div>
<div class="pubs">
  <div class="contain">
    <div class="pubs-w">
     <?php
     $post = get_post(53);
     ?>
     <div class="h">
      <?php echo $post->post_content;?>        
    </div>
    <div class="pub-shadow">
      <!-- <picture>
<source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-1-288.jpg">          
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-1-350.jpg">
<source media="(max-width: 1330px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-1-304.jpg">                   
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-1-406.jpg">                   
<img type="image/jpeg" src="/wp-content/uploads/2021/12/pub-1-406.jpg" />
</picture>

<picture>
<source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-2-288.jpg">          
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-2-350.jpg">
<source media="(max-width: 1330px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-2-304.jpg">                   
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-2-406.jpg">                   
<img type="image/jpeg" src="/wp-content/uploads/2021/12/pub-2-406.jpg" />
</picture>

<picture>
<source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-3-288.jpg">          
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-3-350.jpg">
<source media="(max-width: 1330px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-3-304.jpg">                   
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-3-406.jpg">                   
<img type="image/jpeg" src="/wp-content/uploads/2021/12/pub-3-406.jpg" />
</picture>

<picture>
<source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-4-288.jpg">          
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-4-350.jpg">
<source media="(max-width: 1330px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-4-304.jpg">                   
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-4-406.jpg">                   
<img type="image/jpeg" src="/wp-content/uploads/2021/12/pub-4-406.jpg" />
</picture> 

<picture>
<source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-5-288.jpg">          
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-5-350.jpg">
<source media="(max-width: 1330px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-5-304.jpg">                   
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-5-406.jpg">                   
<img type="image/jpeg" src="/wp-content/uploads/2021/12/pub-5-406.jpg" />
</picture>

<picture>
<source media="(max-width: 767px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-6-288.jpg">          
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-6-350.jpg">
<source media="(max-width: 1330px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-6-304.jpg">                   
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/pub-6-406.jpg">                   
<img type="image/jpeg" src="/wp-content/uploads/2021/12/pub-6-406.jpg" />
</picture> -->
<?php echo get_field('img'); ?>
</div>
</div>
</div>
</div>
<div class="vid" id="video">
  <div class="contain">
    <div class="vid-w">
     <?php
     $post = get_post(55);
     ?>
     <div class="h">
      <?php echo $post->post_content;?>
    </div>
    <div class="vid-pl">

<div class="embed-responsive embed-responsive-16by9">
      <?php echo get_field('link'); ?>
  <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe> -->
</div>

    </div>
  </div>
</div>
</div>
<div class="vid-les">
  <div class="contain">
    <?php
    $post = get_post(81);
    ?>

    <div class="vid-les-w">
      <div class="vid-les-it-1"><?php echo $post->post_content;?></div>

<!-- <picture>
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-1-288.jpg">
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-1-304.jpg">
<source media="(max-width: 1330px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-1-304.jpg">
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-1-407.jpg">
<img type="image/jpeg" src="/wp-content/uploads/2021/12/vid-les-1-407.jpg" />
</picture>

<picture>
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-2-288.jpg">
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-2-304.jpg">
<source media="(max-width: 1330px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-2-304.jpg">
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-2-407.jpg">
<img type="image/jpeg" src="/wp-content/uploads/2021/12/vid-les-2-407.jpg" />
</picture>

<picture>
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-3-288.jpg">
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-3-304.jpg">
<source media="(max-width: 1330px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-3-304.jpg">
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-3-407.jpg">
<img type="image/jpeg" src="/wp-content/uploads/2021/12/vid-les-3-407.jpg" />
</picture>

<picture>
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-4-288.jpg">
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-4-304.jpg">
<source media="(max-width: 1330px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-4-304.jpg">
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-4-407.jpg">
<img type="image/jpeg" src="/wp-content/uploads/2021/12/vid-les-4-407.jpg" />
</picture>

<picture>
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-5-288.jpg">
<source media="(max-width: 768px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-5-304.jpg">
<source media="(max-width: 1330px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-5-304.jpg">
<source media="(max-width: 1367px)" type="image/jpeg" srcset="/wp-content/uploads/2021/12/vid-les-5-407.jpg">
<img type="image/jpeg" src="/wp-content/uploads/2021/12/vid-les-5-407.jpg" />
</picture> -->

      <?php echo get_field('img'); ?>

    </div>
  </div>
</div>
<div class="gt-ac" id="conts">
  <div class="contain">
    <?php
    $post = get_post(88);
    ?>
    <div class="gt-ac-w">
      <div class="gt-ac-l">
        <div class="gt-ac-l-txt-1"><?php echo $post->post_content;?></div>
                <div class="gt-ac-r gt-ac-r-2">
        <div class="gt-ac-r-inn">
          <div class="gt-ac-r-txt-1"><?php echo get_field('txt3'); ?></div>
          <div class="gt-ac-r-txt-2"><?php echo get_field('txt4'); ?></div>
          <div class="gt-ac-r-adr">
            <?php echo get_field('txt5'); ?>
          </div>
          <a href="<?php echo get_field('txt7'); ?>" class="gt-ac-r-btn"><?php echo get_field('txt6'); ?></a>
        </div>
      </div>
        <div class="gt-ac-l-p-w">
          <?php echo get_field('txt1'); ?>
        </div>

        <div class="gt-ac-l-dif">
          <?php echo get_field('txt2'); ?>
        </div>
      </div>
      <div class="gt-ac-r gt-ac-r-1">
        <div class="gt-ac-r-inn">
          <div class="gt-ac-r-txt-1"><?php echo get_field('txt3'); ?></div>
          <div class="gt-ac-r-txt-2"><?php echo get_field('txt4'); ?></div>
          <div class="gt-ac-r-adr">
            <?php echo get_field('txt5'); ?>
          </div>
          <a href="<?php echo get_field('txt7'); ?>" class="gt-ac-r-btn"><?php echo get_field('txt6'); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
</main>
<?php get_footer(); ?>





