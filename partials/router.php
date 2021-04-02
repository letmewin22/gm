<?php function get_router($val) {
  ?>
    <div class="site-wrapper" data-router-wrapper>
    <div 
    data-current-lang="<?php echo translateRuUaEn('Ru', 'Ua', 'En');?>" 
    data-codes="<?php echo implode(",", show_translate_code()) ?>" 
    data-translate-urls="<?php echo implode(",", show_translate()) ?>"
    data-router-view="<?php echo $val ?>"
    >
  <?php
} ?>