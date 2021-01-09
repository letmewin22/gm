<?php function get_router($val) {
  ?>
    <div class="site-wrapper" data-router-wrapper>
    <div 
    data-current-lang="<?php echo translateRuUaEn('Ru', 'Ua', 'En');?>" 
    data-translate-urls="<?php echo implode(",", show_translate()) ?>"
    data-router-view="<?php echo $val ?>"
    >
  <?php
} ?>