<?php 

use Roots\Sage\Titles;
use Roots\Sage\Ak;

list($class, $style) = Ak\helper::get_post_bg(get_the_ID());
?>
<style type="text/css">
	@media only screen 
    and (max-width : 500px)
    {
    body.our-services>div.wrap.container>div>div.col-md-8.pull-right>main>div.page-header.has-image>h2 {
  font-size: 17px!important;
  top: 22px;
  padding-bottom: 5px;
}
}
</style>
<div class="page-header <?=$class?>" style="<?=$style?>">

  <h2 class="title dg-title-bg"><?= Titles\title(); ?></h2>

</div>