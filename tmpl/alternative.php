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
$document->addStyleSheet(JUri::base(true).'/modules/'.$module->module.'/css/alternative.min.css');
?>
<section class="skillset alt-layout wrapper">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <?php if($module->showtitle) : ?>
        <h2><?php echo $module->title ?></h2>
        <?php endif; ?>
        <?php if($description) : ?>
          <p><?php echo $description ?></p>
        <?php endif; ?>
      </div>
      <div class="col-6">
        <?php foreach($skills as $item) : ?>
        <div class="skill pl-3 mb-3">
          <small class="text-uppercase"><?php echo $item['skillname'] ?></small>
          <div class="counting"><?php echo $item['skillcount'] ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
