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
  <div class="adv" id="adant">
    <div class="contain">
      <div class="adv-w">
        <?php
        $post = get_post(16);
        ?>
        <div class="adv-col-1">
          <?php echo $post->post_content;?>          
        </div>
        <div class="adv-col-2">
          <div class="adv-col-2-row">
            <div class="adv-col-2-numb">1</div>
            <div class="adv-col-2-txt">
              <!-- <?php echo get_field('num1'); ?> -->

              <strong>Сильный заголовок.</strong> Обложки постов — это <br> рекламные креативы. Заголовки написаны <br> по специальной формуле повышающей охваты.


            </div>
          </div>
          <div class="adv-col-2-row">
            <div class="adv-col-2-numb">2</div>
            <div class="adv-col-2-txt">
              <?php echo get_field('num2'); ?>
            </div>
          </div>
          <div class="adv-col-2-row">
            <div class="adv-col-2-numb">3</div>
            <div class="adv-col-2-txt">
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
<!--             <picture>
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
          <!-- <picture>
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
          <a href="#" class="posts-r-top-nm">
            <div class="posts-r-top-nm-ava">
              <img src="<? bloginfo('template_url') ?>/result/img/ava.png">
            </div>
            <div class="posts-r-top-nm-txt">vitaliystrong</div>
          </a>
          <a href="#" class="posts-r-top-unf"><img src="<? bloginfo('template_url') ?>/result/img/unf.svg"></a>
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
  <div class="posts-r-sl-txt">Листай карусель<span>, чтобы прочитать пост</span></div>              
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

      <?php echo get_field('link'); ?>
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
          <div class="gt-ac-r-adv">
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
          <div class="gt-ac-r-adv">
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





