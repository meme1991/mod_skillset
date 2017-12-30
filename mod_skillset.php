<?php
/**
 * @version    3.0.x
 * @package    Spedi Labs skillset
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) 1991 - 2016 Spedi srl. Tutti i diritti riservati.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;

JLoader::register('ModSkillsetHelper', __DIR__ . '/helper.php');

/* general params */
$document     = JFactory::getDocument();
$bootstrap    = $params->get('spskill-bootstrap');
$jquery       = $params->get('spskill-jquery');
$bgImage      = $params->get('spskill-bg-image');
$bgColor      = $params->get('spskill-bg-color');
$description  = $params->get('spskill-description');

if($bgColor){
  $bgColor = ModSkillsetHelper::hexToRGB($bgColor);
  $document->addStyleDeclaration(' .skillset::before{background-color: rgba('.$bgColor.', 0.6);}'."\n");
}
$pattern      = $params->get('spskill-pattern');
if($pattern){
  $document->addStyleDeclaration(' .skillset::after{background-image: url("modules/'.$module->module.'/images/pattern.png")}'."\n");
}

/* script */
if($jquery)
  JHtml::_('jquery.framework');
$document->addScript(JUri::base(true).'/modules/'.$module->module.'/dist/jquery.counterup.min.js');
$document->addScriptDeclaration("
  // skillset
  jQuery(document).ready(function($){
    $('.skillset .counting').counterUp({time: 1000});
  });
");

/* skill params */
$k = 0;
for($c = 1; $c < 5; $c++){
  if($params->get('spskill-name-'.$c) != ''){
    $k++;
    $skills[] = array('skillname'  => $params->get('spskill-name-'.$c),
                      'skillicon'  => $params->get('spskill-icon-'.$c),
                      'skillcount' => $params->get('spskill-count-'.$c)
                     );
  }
}
/* colonne */
$col = 12 / $k;

/* layout */
require JModuleHelper::getLayoutPath($module->module, $params->get('layout', 'default'));
