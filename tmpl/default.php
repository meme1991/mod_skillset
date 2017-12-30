<?php
/**
 * @version    3.0.x
 * @package    Spedi Labs skillset
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) 1991 - 2016 Spedi srl. Tutti i diritti riservati.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;

/* style */
$document->addStyleSheet(JUri::base(true).'/modules/'.$module->module.'/css/default.min.css');
?>
<section class="skillset" <?php if($bgImage) : ?> style="background-image: url(<?php echo $bgImage ?>)" <?php endif; ?>>
  <div class="container">
    <div class="row">
      <?php if($module->showtitle) : ?>
      <div class="col-12 title-section">
        <h2><?php echo $module->title ?></h2>
      </div>
      <?php endif; ?>

      <?php foreach($skills as $item) : ?>
        <div class="skill col-12 col-sm-12 col-md-6 col-lg-<?php echo $col ?>">
          <div class="icon"><i class="fa <?php echo $item['skillicon'] ?> fa-3x" aria-hidden="true"></i></div>
          <div class="counting"><?php echo $item['skillcount'] ?></div>
          <div class="description"><?php echo $item['skillname'] ?></div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>
