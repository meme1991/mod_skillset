<?php
# @Author: SPEDI srl
# @Date:   23-01-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 23-01-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (C) SPEDI srl

defined('_JEXEC') or die;

/* style */
$document->addStyleSheet(JUri::base(true).'/modules/'.$module->module.'/css/default.min.css');
?>
<section class="skillset" <?php if($bgImage) : ?> style="background-image: url(<?php echo $bgImage ?>)" <?php endif; ?>>
  <div class="container">
    <div class="row">
      <?php if($module->showtitle) : ?>
      <div class="title-section">
        <h2><?php echo $module->title ?></h2>
      </div>
      <?php endif; ?>

      <?php foreach($skills as $item) : ?>
        <div class="skill col-12 col-sm-12 col-md-6 col-lg-<?php echo $col ?>">
          <div class="icon"><i class="<?php echo $item['skillicon'] ?>"></i></div>
          <div class="counting"><?php echo $item['skillcount'] ?></div>
          <div class="description"><?php echo $item['skillname'] ?></div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>
