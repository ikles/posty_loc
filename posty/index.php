<?php get_header(); ?>



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

        <div class="stat-txt"> <?php echo get_field('txt1'); ?> </div>
      </div>
      <div class="stat-r">
        <?php echo get_field('img2'); ?>


          
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





