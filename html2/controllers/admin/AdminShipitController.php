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
class AdminShipitControllerCore extends AdminController
{

	public $models = ['CrudModel'];
	private $regiones;
	public function __construct()
	{
		$this->bootstrap  = true;
		$this->table = 'shipit_table';
		$this->_orderBy = 'id_shipit_table';
		$this->className = 'ShipitData';
		$this->lang = false;
		$this->deleted = false;
		$this->colorOnBackground = false;
		$this->bulk_actions = array('delete' => array('text' => $this->l('Delete selected'), 'confirm' => $this->l('Delete selected items?')));
		$this->context = Context::getContext();
		// définition de l'upload, chemin par défaut _PS_IMG_DIR_
		// $this->fieldImageSettings = array('name' => 'image', 'dir' => 'example');
		$sql = new DbQuery();
		$sql->select('*');
		$sql->from('shipit_table', 'c');
		$sql->orderBy('id_shipit_table');
		$this->regiones = Db::getInstance()->executeS($sql);
		parent::__construct();
	}
	/**
	 * Function used to render the list to display for this controller
	 */
	// public function s_region($value){
	// 	foreach ($this->regiones as $key => $value2) {
	// 		if($value2['id_regiones'] == $value){
	// 			return $value2['nombre'];
	// 		}
	// 	}
	// }
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
			'id_shipit_table' => array(
				'title' => $this->l('ID'),
				'align' => 'center',
				'width' => 'auto'
			),
			'REGIONT' => array(
				'title' => $this->l('Region'),
				'align' => 'center',
				'width' => 'auto'
			),
			'COMUNAT' => array(
				'title' => $this->l('Comuna'),
				'align' => 'center',
				'width' => 'auto'
			),
			'PLAZO' => array(
				'title' => $this->l('Plazo'),
				'width' => 'auto',
			),
			'RATE1' => array(
				'title' => $this->l('0/1'),
				'width' => 'auto',
			),
			'RATE2' => array(
				'title' => $this->l('1/1.5'),
				'width' => 'auto',
			),
			'RATE3' => array(
				'title' => $this->l('1.5/2'),
				'width' => 'auto',
			),
			'RATE4' => array(
				'title' => $this->l('2/3'),
				'width' => 'auto',
			),
			'RATE5' => array(
				'title' => $this->l('3/4'),
				'width' => 'auto',
			),
			'RATE6' => array(
				'title' => $this->l('4/5'),
				'width' => 'auto',
			),
			'RATE7' => array(
				'title' => $this->l('5/6'),
				'width' => 'auto',
			),
			'RATE8' => array(
				'title' => $this->l('6/7'),
				'width' => 'auto',
			),
			'RATE9' => array(
				'title' => $this->l('7/8'),
				'width' => 'auto',
			),
			'RATE10' => array(
				'title' => $this->l('8/9'),
				'width' => 'auto',
			),
			'RATE11' => array(
				'title' => $this->l('9/10'),
				'width' => 'auto',
			),
			'RATE12' => array(
				'title' => $this->l('10/11'),
				'width' => 'auto',
			),
			'RATE13' => array(
				'title' => $this->l('11/12'),
				'width' => 'auto',
			),
			'RATE14' => array(
				'title' => $this->l('12/13'),
				'width' => 'auto',
			),
			'RATE15' => array(
				'title' => $this->l('13/14'),
				'width' => 'auto',
			),
			'RATE16' => array(
				'title' => $this->l('14/15'),
				'width' => 'auto',
			),
			'RATE17' => array(
				'title' => $this->l('15/16'),
				'width' => 'auto',
			),
			'RATE18' => array(
				'title' => $this->l('16/17'),
				'width' => 'auto',
			),
			'RATE19' => array(
				'title' => $this->l('17/18'),
				'width' => 'auto',
			),
			'RATE20' => array(
				'title' => $this->l('18/19'),
				'width' => 'auto',
			),
			'RATE21' => array(
				'title' => $this->l('19/20'),
				'width' => 'auto',
			),
			'RATE22' => array(
				'title' => $this->l('20/21'),
				'width' => 'auto',
			),
			'RATE23' => array(
				'title' => $this->l('21/22'),
				'width' => 'auto',
			),
			'RATE24' => array(
				'title' => $this->l('22/23'),
				'width' => 'auto',
			),
			'RATE25' => array(
				'title' => $this->l('23/24'),
				'width' => 'auto',
			),
			'RATE26' => array(
				'title' => $this->l('24/25'),
				'width' => 'auto',
			),
			'RATE27' => array(
				'title' => $this->l('25/26'),
				'width' => 'auto',
			),
			'RATE28' => array(
				'title' => $this->l('26/27'),
				'width' => 'auto',
			),
			'RATE29' => array(
				'title' => $this->l('27/28'),
				'width' => 'auto',
			),
			'RATE30' => array(
				'title' => $this->l('28/29'),
				'width' => 'auto',
			),
			'RATE31' => array(
				'title' => $this->l('29/30'),
				'width' => 'auto',
			),
			'RATE32' => array(
				'title' => $this->l('30/31'),
				'width' => 'auto',
			),
			'RATE33' => array(
				'title' => $this->l('31/32'),
				'width' => 'auto',
			),
			'RATE34' => array(
				'title' => $this->l('32/33'),
				'width' => 'auto',
			),
			'RATE35' => array(
				'title' => $this->l('33/34'),
				'width' => 'auto',
			),
			'RATE36' => array(
				'title' => $this->l('34/35'),
				'width' => 'auto',
			),
			'RATE37' => array(
				'title' => $this->l('35/36'),
				'width' => 'auto',
			),
			'RATE38' => array(
				'title' => $this->l('36/37'),
				'width' => 'auto',
			),
			'RATE39' => array(
				'title' => $this->l('37/38'),
				'width' => 'auto',
			),
			'RATE40' => array(
				'title' => $this->l('38/39'),
				'width' => 'auto',
			),
			'RATE41' => array(
				'title' => $this->l('39/40'),
				'width' => 'auto',
			),
			'RATE42' => array(
				'title' => $this->l('Kg Adicional'),
				'width' => 'auto',
			)
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
			$this->_orderBy = 'id_shipit_table';
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
		$sql2 = new DbQuery();
		$sql2->select('*');
		$sql2->from('comunas', 'c');
		$query2 = Db::getInstance()->executeS($sql);
		$this->fields_form = array(
			'tinymce' => true,
			'legend' => array(
				'title' => $this->l('Tabla de envio - Shipit'),
				'image' => '../img/admin/cog.gif'
			),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Nombre Region:'),
					'name' => 'REGIONT',
					'size' => 100
				),
				array(
					'type' => 'text',
					'label' => $this->l('Nombre Comuna:'),
					'name' => 'COMUNAT',
					'size' => 100
				),
				array(
					'type' => 'select',
					'label' => $this->l('Region:'),
					'name' => 'REGION',
					'options' => array(
						'query' => $query,
						'id' => 'id_regiones',
						'name' => 'nombre'
					)
				),
				array(
					'type' => 'select',
					'label' => $this->l('Comuna:'),
					'name' => 'COMUNA',
					'options' => array(
						'query' => $query2,
						'id' => 'id_comunas',
						'name' => 'nombre'
					)
				),
				array(
					'type' => 'text',
					'label' => $this->l('Plazo de entrega en dias:'),
					'name' => 'PLAZO'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 0 a 1kg:'),
					'name' => 'RATE1'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 1 a 1.5kg:'),
					'name' => 'RATE2'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 1.5 a 2kg:'),
					'name' => 'RATE3'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 2 a 3kg:'),
					'name' => 'RATE4'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 3 a 4kg:'),
					'name' => 'RATE5'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 4 a 5kg:'),
					'name' => 'RATE6'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 5 a 6kg:'),
					'name' => 'RATE7'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 6 a 7kg:'),
					'name' => 'RATE8'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 7 a 8kg:'),
					'name' => 'RATE9'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 8 a 9kg:'),
					'name' => 'RATE10'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 9 a 10kg:'),
					'name' => 'RATE11'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 10 a 11kg:'),
					'name' => 'RATE12'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 11 a 12kg:'),
					'name' => 'RATE13'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 12 a 13kg:'),
					'name' => 'RATE14'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 13 a 14kg:'),
					'name' => 'RATE15'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 14 a 15kg:'),
					'name' => 'RATE16'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 15 a 16kg:'),
					'name' => 'RATE17'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 16 a 17kg:'),
					'name' => 'RATE18'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 17 a 18kg:'),
					'name' => 'RATE19'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 18 a 19kg:'),
					'name' => 'RATE20'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 19 a 20kg:'),
					'name' => 'RATE21'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 20 a 21kg:'),
					'name' => 'RATE22'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 21 a 22kg:'),
					'name' => 'RATE23'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 22 a 23kg:'),
					'name' => 'RATE24'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 23 a 24kg:'),
					'name' => 'RATE25'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 24 a 25kg:'),
					'name' => 'RATE26'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 25 a 26kg:'),
					'name' => 'RATE27'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 26 a 27kg:'),
					'name' => 'RATE28'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 27 a 28kg:'),
					'name' => 'RATE29'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 28 a 29kg:'),
					'name' => 'RATE30'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 29 a 30kg:'),
					'name' => 'RATE31'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 30 a 31kg:'),
					'name' => 'RATE32'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 31 a 32kg:'),
					'name' => 'RATE33'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 32 a 33kg:'),
					'name' => 'RATE34'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 33 a 34kg:'),
					'name' => 'RATE35'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 34 a 35kg:'),
					'name' => 'RATE36'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 35 a 36kg:'),
					'name' => 'RATE37'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 36 a 37kg:'),
					'name' => 'RATE38'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 37 a 38kg:'),
					'name' => 'RATE39'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 38 a 39kg:'),
					'name' => 'RATE40'
				),
				array(
					'type' => 'text',
					'label' => $this->l('De 39 a 40kg:'),
					'name' => 'RATE41'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Kg Adicional:'),
					'name' => 'RATE42'
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
			$comunas_data->REGION = Tools::getValue('REGION');
			$comunas_data->COMUNA = Tools::getValue('COMUNA');
			$comunas_data->REGIONT = Tools::getValue('REGIONT');
			$comunas_data->COMUNAT = Tools::getValue('COMUNAT');
			$comunas_data->PLAZO = Tools::getValue('PLAZO');
			$comunas_data->RATE1 = Tools::getValue('RATE1');
			$comunas_data->RATE2 = Tools::getValue('RATE2');
			$comunas_data->RATE3 = Tools::getValue('RATE3');
			$comunas_data->RATE4 = Tools::getValue('RATE4');
			$comunas_data->RATE5 = Tools::getValue('RATE5');
			$comunas_data->RATE6 = Tools::getValue('RATE6');
			$comunas_data->RATE7 = Tools::getValue('RATE7');
			$comunas_data->RATE8 = Tools::getValue('RATE8');
			$comunas_data->RATE9 = Tools::getValue('RATE9');
			$comunas_data->RATE10 = Tools::getValue('RATE10');
			$comunas_data->RATE11 = Tools::getValue('RATE11');
			$comunas_data->RATE12 = Tools::getValue('RATE12');
			$comunas_data->RATE13 = Tools::getValue('RATE13');
			$comunas_data->RATE14 = Tools::getValue('RATE14');
			$comunas_data->RATE15 = Tools::getValue('RATE15');
			$comunas_data->RATE16 = Tools::getValue('RATE16');
			$comunas_data->RATE17 = Tools::getValue('RATE17');
			$comunas_data->RATE18 = Tools::getValue('RATE18');
			$comunas_data->RATE19 = Tools::getValue('RATE19');
			$comunas_data->RATE20 = Tools::getValue('RATE20');
			$comunas_data->RATE21 = Tools::getValue('RATE21');
			$comunas_data->RATE22 = Tools::getValue('RATE22');
			$comunas_data->RATE23 = Tools::getValue('RATE23');
			$comunas_data->RATE24 = Tools::getValue('RATE24');
			$comunas_data->RATE25 = Tools::getValue('RATE25');
			$comunas_data->RATE26 = Tools::getValue('RATE26');
			$comunas_data->RATE27 = Tools::getValue('RATE27');
			$comunas_data->RATE28 = Tools::getValue('RATE28');
			$comunas_data->RATE29 = Tools::getValue('RATE29');
			$comunas_data->RATE30 = Tools::getValue('RATE30');
			$comunas_data->RATE31 = Tools::getValue('RATE31');
			$comunas_data->RATE32 = Tools::getValue('RATE32');
			$comunas_data->RATE33 = Tools::getValue('RATE33');
			$comunas_data->RATE34 = Tools::getValue('RATE34');
			$comunas_data->RATE35 = Tools::getValue('RATE35');
			$comunas_data->RATE36 = Tools::getValue('RATE36');
			$comunas_data->RATE37 = Tools::getValue('RATE37');
			$comunas_data->RATE38 = Tools::getValue('RATE38');
			$comunas_data->RATE39 = Tools::getValue('RATE39');
			$comunas_data->RATE40 = Tools::getValue('RATE40');
			$comunas_data->RATE41 = Tools::getValue('RATE41');
			$comunas_data->RATE42 = Tools::getValue('RATE42');

			// Save object
			if (!$comunas_data->save())
				$this->errors[] = Tools::displayError('An error has occurred: Can\'t save the current object');
			else
				Tools::redirectAdmin(self::$currentIndex.'&conf=4&token='.$this->token);
		}
		elseif(Tools::isSubmit('delete'.$this->table)){
			// Create Object ExampleData
			// Save object
			Db::getInstance()->delete('shipit_table', 'id_shipit_table = '.Tools::getValue('id_shipit_table'), 1);
			
			Tools::redirectAdmin(self::$currentIndex.'&conf=4&token='.$this->token);
		}
	}
}