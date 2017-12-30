<?php
/**
 * @version    3.0.x
 * @package    Spedi Labs skillset
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) 1991 - 2016 Spedi srl. Tutti i diritti riservati.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;

/**
 * Helper for mod_spskillset
 *
 * @since 1.0
 */
class ModSkillsetHelper
{
	/**
	 * Conversione da esadecimale a rgb
	 * @param string $hexcode
	 * @return string $rgb
	 */
	public static function hexToRGB($hexcode){
    $redhex  = substr( $hexcode, 1, 2 );
  	$greenhex = substr( $hexcode, 3, 2 );
  	$bluehex = substr( $hexcode, 5, 2 );

  	$r = hexdec($redhex);
  	$g = hexdec($greenhex);
  	$b = hexdec($bluehex);

		$rgb = $r.','.$g.','.$b;

  	return $rgb;
	}
}
