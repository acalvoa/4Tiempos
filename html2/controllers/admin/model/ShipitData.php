<?php
/**
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2015 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class ShipitData extends ObjectModel
{
	/** @var string Name */
	public $REGIONT;
	public $COMUNAT;
	public $REGION;
	public $COMUNA;
	public $PLAZO;
	public $RATE1;
	public $RATE2;
	public $RATE3;
	public $RATE4;
	public $RATE5;
	public $RATE6;
	public $RATE7;
	public $RATE8;
	public $RATE9;
	public $RATE10;
	public $RATE11;
	public $RATE12;
	public $RATE13;
	public $RATE14;
	public $RATE15;
	public $RATE16;
	public $RATE17;
	public $RATE18;
	public $RATE19;
	public $RATE20;
	public $RATE21;
	public $RATE22;
	public $RATE23;
	public $RATE24;
	public $RATE25;
	public $RATE26;
	public $RATE27;
	public $RATE28;
	public $RATE29;
	public $RATE30;
	public $RATE31;
	public $RATE32;
	public $RATE33;
	public $RATE34;
	public $RATE35;
	public $RATE36;
	public $RATE37;
	public $RATE38;
	public $RATE39;
	public $RATE40;
	public $RATE41;
	public $RATE42;
	
	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'shipit_table',
		'primary' => 'id_shipit_table',
		'multilang' => false,
		'fields' => array(
			/* Lang fields */
			'REGIONT' => 		array('type' => self::TYPE_STRING, 'required' => true, 'size' => 100),
			'COMUNAT' => 		array('type' => self::TYPE_STRING, 'required' => true, 'size' => 100),
			'REGION' => 		array('type' => self::TYPE_STRING, 'required' => true, 'size' => 100),
			'COMUNA' => 		array('type' => self::TYPE_STRING, 'required' => true, 'size' => 100),
			'PLAZO' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE1' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE2' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE3' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE4' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE5' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE6' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE7' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE8' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE9' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE10' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE11' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE12' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE13' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE14' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE15' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE16' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE17' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE18' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE19' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE20' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE21' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE22' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE23' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE24' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE25' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE26' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE27' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE28' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE29' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE30' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE31' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE32' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE33' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE34' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE35' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE36' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE37' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE38' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE39' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE40' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE41' => 		array('type' => self::TYPE_INT, 'required' => true),
			'RATE42' => 		array('type' => self::TYPE_INT, 'required' => true)
		),
	);
}