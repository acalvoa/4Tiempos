<?php
// class AdminPageControllerCore extends AdminController{
// 	public function initContent()
// 	{
// 		parent::initContent();
// 		$smarty = $this->context->smarty;

// 		$smarty->assign('test', 'test1');

// 	}
// }
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
/**
 * Tab Example - Controller Admin Example
 *
 * @category   	Module / checkout
 * @author     	PrestaEdit <j.danse@prestaedit.com>
 * @copyright  	2012 PrestaEdit
 * @version   	1.0
 * @link       	http://www.prestaedit.com/
 * @since      	File available since Release 1.0
*/
class AdminComunasControllerCore extends AdminController
{

	public $models = ['CrudModel'];
	private $regiones;
	public function __construct()
	{
		$this->bootstrap  = true;
		$this->table = 'comunas';
		$this->className = 'ComunasData';
		$this->lang = false;
		$this->deleted = false;
		$this->colorOnBackground = false;
		$this->bulk_actions = array('delete' => array('text' => $this->l('Delete selected'), 'confirm' => $this->l('Delete selected items?')));
		$this->context = Context::getContext();
		// définition de l'upload, chemin par défaut _PS_IMG_DIR_
		// $this->fieldImageSettings = array('name' => 'image', 'dir' => 'example');
		$sql = new DbQuery();
		$sql->select('*');
		$sql->from('regiones', 'c');
		$this->regiones = Db::getInstance()->executeS($sql);
		parent::__construct();
	}
	/**
	 * Function used to render the list to display for this controller
	 */
	public function s_region($value){
		foreach ($this->regiones as $key => $value2) {
			if($value2['id_regiones'] == $value){
				return $value2['nombre'];
			}
		}
	}
	public function renderList()
	{
		$this->addRowAction('edit');
		$this->addRowAction('delete');
		// $this->addRowAction('details');
		$this->bulk_actions = array(
			'delete' => array(
				'text' => $this->l('Borrar Comuna'),
				'confirm' => $this->l('¿Desea borrar estas comunas?')
				)
			);
		$this->fields_list = array(
			'id_comunas' => array(
				'title' => $this->l('Numero Comuna'),
				'align' => 'center',
				'width' => 25
			),
			'nombre' => array(
				'title' => $this->l('Nombre'),
				'width' => 'auto',
			),
			'id_region' => array(
				'title' => $this->l('Region'),
				'width' => 'auto',
				'callback' => 's_region'
			),
		);
		// Gère les positions
		// $this->fields_list['position'] = array(
		// 	'title' => $this->l('Position'),
		// 	'width' => 70,
		// 	'align' => 'center',
		// 	'position' => 'position'
		// );
		$lists = parent::renderList();
		parent::initToolbar();
		return $lists;
	}
	/**
	 * method call when ajax request is made with the details row action
	 * @see AdminController::postProcess()
	 */
	public function ajaxProcessDetails()
	{
		if (($id = Tools::getValue('id')))
		{
			// Create Object ExampleData
			$regiones_data = new RegionesData();
			$regiones_data->nombre = Tools::getValue('region');
			// Save object
			if (!$regiones_data->save())
				$this->errors[] = Tools::displayError('An error has occurred: Can\'t save the current object');
			else
				Tools::redirectAdmin(self::$currentIndex.'&conf=4&token='.$this->token);
			// override attributes
			$this->display = 'list';
			$this->lang = false;
			$this->addRowAction('edit');
			$this->addRowAction('delete');
			$this->_select = 'b.*';
			// $this->_join = 'LEFT JOIN `'._DB_PREFIX_.'tab_lang` b ON (b.`id_tab` = a.`id_tab` AND b.`id_lang` = '.$this->context->language->id.')';
			// $this->_where = 'AND a.`id_parent` = '.(int)$id;
			$this->_orderBy = 'id_regiones';
			// get list and force no limit clause in the request
			$this->getList($this->context->language->id);
			// Render list
			$helper = new HelperList();
			$helper->actions = $this->actions;
			$helper->list_skip_actions = $this->list_skip_actions;
			$helper->no_link = true;
			$helper->shopLinkType = '';
			$helper->identifier = $this->identifier;
			$helper->imageType = $this->imageType;
			$helper->toolbar_scroll = false;
			$helper->show_toolbar = false;
			$helper->orderBy = 'position';
			$helper->orderWay = 'ASC';
			$helper->currentIndex = self::$currentIndex;
			$helper->token = $this->token;
			$helper->table = $this->table;
			$helper->position_identifier = $this->position_identifier;
			// Force render - no filter, form, js, sorting ...
			$helper->simple_header = true;
			$content = $helper->generateList($this->_list, $this->fields_list);
			echo Tools::jsonEncode(array('use_parent_structure' => false, 'data' => $content));
		}
		die;
	}
	public function renderForm()
	{
		$sql = new DbQuery();
		$sql->select('*');
		$sql->from('regiones', 'c');
		$query = Db::getInstance()->executeS($sql);
		$this->fields_form = array(
			'tinymce' => true,
			'legend' => array(
				'title' => $this->l('Gestionador de Comunas'),
				'image' => '../img/admin/cog.gif'
			),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Comuna:'),
					'name' => 'comuna',
					'size' => 100
				),
				array(
					'type' => 'select',
					'label' => $this->l('Region:'),
					'name' => 'region',
					'options' => array(
						'query' => $query,
						'id' => 'id_regiones',
						'name' => 'nombre'
					)
				),
				// array(
				// 	'type' => 'text',
				// 	'label' => $this->l('Lorem:'),
				// 	'name' => 'lorem',
				// 	'readonly' => true,
				// 	'disabled' => true,
				// 	'size' => 40
				// ),
				// array(
				// 	'type' => 'date',
				// 	'name' => 'exampledate',
				// )
			),
			'submit' => array(
				'title' => $this->l('Save'),
				'class' => 'button'
			)
		);
		if (!($obj = $this->loadObject(true)))
			return;
		/* Thumbnail
		 * @todo Error, deletion of the image
		*/
		// $image = ImageManager::thumbnail(_PS_IMG_DIR_.'region/'.$obj->id.'.jpg', $this->table.'_'.(int)$obj->id.'.'.$this->imageType, 350, $this->imageType, true);
		// $this->fields_value = array(
		// 	'image' => $image ? $image : false,
		// 	'size' => $image ? filesize(_PS_IMG_DIR_.'example/'.$obj->id.'.jpg') / 1000 : false,
		// );
		// $this->fields_value = array('lorem' => 'ipsum');
		return parent::renderForm();
	}
	public function postProcess()
	{
		if (Tools::isSubmit('submitAdd'.$this->table))
		{
			// Create Object ExampleData
			$comunas_data = new ComunasData();
			$comunas_data->nombre = Tools::getValue('comuna');
			$comunas_data->id_region = Tools::getValue('region');
			// Save object
			if (!$comunas_data->save())
				$this->errors[] = Tools::displayError('An error has occurred: Can\'t save the current object');
			else
				Tools::redirectAdmin(self::$currentIndex.'&conf=4&token='.$this->token);
		}
		elseif(Tools::isSubmit('delete'.$this->table)){
			// Create Object ExampleData
			// Save object
			Db::getInstance()->delete('comunas', 'id_comunas = '.Tools::getValue('id_comunas'), 1);
			
			Tools::redirectAdmin(self::$currentIndex.'&conf=4&token='.$this->token);
		}
	}
}