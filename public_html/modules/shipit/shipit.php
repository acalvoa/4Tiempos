<?php
if (!defined('_PS_VERSION_'))
    exit;
 
class Shipit extends CarrierModule{
    public  $id_carrier;
    private $_html = '';
    private $_postErrors = array();
    private $_moduleName = 'shipit';

    public function __construct(){
        // Variables common to all modules (no need to present them)
        $this->name = 'shipit';
        $this->tab = 'shipping_logistics';
        $this->version = '1.0';
        $this->author = '4tiempos';
        $this->limited_countries = array('cl');
        parent::__construct ();
        $this->displayName = $this->l('Shipit Shipping');
        $this->description = $this->l('Modulo de calculo de transporte de la empresa shipit');

        if (self::isInstalled($this->name))
        {
            // We retrieve the list of carrier ids
            global $cookie;
            $carriers = Carrier::getCarriers($cookie->id_lang, true, false, false,
                    NULL, PS_CARRIERS_AND_CARRIER_MODULES_NEED_RANGE);
            $id_carrier_list = array();
            foreach($carriers as $carrier)
                $id_carrier_list[] .= $carrier['id_carrier'];
           
     
     
            // We look to see if the carriers have been created for the module
            // And if any additional fees have been configured
            // // These warnings will appear on the page where the modules are listed
            // $warning = array();
            // if (!in_array((int)(Configuration::get('MYCARRIER1_CARRIER_ID')),
            //            $id_carrier_list)) $warning[] .= $this->l('"Carrier 1"').' ';
            // if (!in_array((int)(Configuration::get('MYCARRIER2_CARRIER_ID')),
            //        $id_carrier_list)) $warning[] .= $this->l('"Carrier 2 Overcost"').' ';
            // if (!Configuration::get('MYCARRIER1_OVERCOST'))
            //     $warning[] .= $this->l('"Carrier 1 Overcost"').' ';
            // if (!Configuration::get('MYCARRIER2_OVERCOST'))
            //     $warning[] .= $this->l('"Carrier 2 Overcost"').' ';
            // if (count($warning))
            // $this->warning .= implode(' , ',$warning).$this->l('must be <br />configured');
        }
        // If the module is installed, we run a few checks
        // $this->name        = 'shipit';
        // $this->tab         = 'shipping_logistics';
        // $this->author      = '4tiempos';
        // $this->version     = '1.0.0';
        // $this->ps_versions_compliancy = array('min' => '1.6', 'max' => '1.7');
        // $this->limited_countries = array('clp', 'cl');
        // $this->bootstrap = true;
        // $this->display = 'view';
        // $this->meta_title = $this->l('Shipit');
        // parent::__construct();
     
        // $this->displayName = $this->l('Shipit Shipping');
        // $this->description = $this->l('Modulo de calculo de transporte de la empresa shipit');
        // if (self::isInstalled($this->name))
        // {
        //     // We retrieve the list of carrier ids
        //     global $cookie;
        //     $carriers = Carrier::getCarriers($cookie->id_lang, true, false, false,
        //             NULL, PS_CARRIERS_AND_CARRIER_MODULES_NEED_RANGE);
        //     $id_carrier_list = array();
        //     foreach($carriers as $carrier)
        //         $id_carrier_list[] .= $carrier['id_carrier'];

        //     // We look to see if the carriers have been created for the module
        //     // And if any additional fees have been configured
        //     // These warnings will appear on the page where the modules are listed
        //     $warning = array();
        //     if (!in_array((int)(Configuration::get('MYCARRIER1_CARRIER_ID')), 
        //                $id_carrier_list)) $warning[] .= $this->l('"Carrier 1"').' ';
        //     if (!in_array((int)(Configuration::get('MYCARRIER2_CARRIER_ID')), 
        //            $id_carrier_list)) $warning[] .= $this->l('"Carrier 2 Overcost"').' ';
        //     if (!Configuration::get('MYCARRIER1_OVERCOST'))
        //         $warning[] .= $this->l('"Carrier 1 Overcost"').' ';
        //     if (!Configuration::get('MYCARRIER2_OVERCOST'))
        //         $warning[] .= $this->l('"Carrier 2 Overcost"').' ';
        //     if (count($warning))
        //     $this->warning .= implode(' , ',$warning).$this->l('must be <br />configured');
        // }
    }

    public function install()
    {
      if (!parent::install())
        return false;
      if (!$this->installCarriers())
        return false;
      return true;
    }
    public function installCarriers()
    {
        $id_lang_default = Language::getIsoById(Configuration::get('PS_LANG_DEFAULT'));
        $carriers_list = array(
          'SHIPIT_CA_SHP' => 'Shipit'
        );
        foreach ($carriers_list as $carrier_key => $carrier_name)
        {
            if (Configuration::get($carrier_key) < 1)
            {
                $carrier = new Carrier();
                $carrier->name = $carrier_name;
                $carrier->id_tax_rules_group = 0;
                $carrier->active = 1;
                $carrier->deleted = 0;
                foreach (Language::getLanguages(true) as $language)
                $carrier->delay[(int)$language['id_lang']] = 'Delay '.$carrier_name;
                $carrier->shipping_handling = false;
                $carrier->range_behavior = 0;
                $carrier->is_module = true;
                $carrier->shipping_external = true;
                $carrier->external_module_name = $this->name;
                $carrier->need_range = true;
                if (!$carrier->add())
                return false;
                 // Associate carrier to all groups
                $groups = Group::getGroups(true);
                foreach ($groups as $group)
                Db::getInstance()->insert('carrier_group',array('id_carrier' => (int)$carrier->id, 'id_group' => (int)$group['id_group']));
                // Create price range
                $rangePrice = new RangePrice();
                $rangePrice->id_carrier = $carrier->id;
                $rangePrice->delimiter1 = '0';
                $rangePrice->delimiter2 = '10000';
                $rangePrice->add();
                // Create weight range
                $rangeWeight = new RangeWeight();
                $rangeWeight->id_carrier = $carrier->id;
                $rangeWeight->delimiter1 = '0';
                $rangeWeight->delimiter2 = '10000';
                $rangeWeight->add();
                // Associate carrier to all zones
                $zones = Zone::getZones(true);
                foreach ($zones as $zone)
                {
                  Db::getInstance()->insert('carrier_zone',array('id_carrier' => (int)$carrier->id, 'id_zone' => (int)$zone['id_zone']));
                  Db::getInstance()->insert('delivery',array('id_carrier' => (int)$carrier->id, 'id_range_price' => (int)$rangePrice->id, 'id_range_weight' => NULL, 'id_zone' => (int)$zone['id_zone'], 'price' => '0'));
                  Db::getInstance()->insert('delivery',array('id_carrier' => (int)$carrier->id, 'id_range_price' => NULL, 'id_range_weight' => (int)$rangeWeight->id, 'id_zone' => (int)$zone['id_zone'], 'price' => '0'));
                }
                // Copy the carrier logo
                copy(dirname(__FILE__).'/views/img/'.$carrier_key.'.png',_PS_SHIP_IMG_DIR_.'/'.(int)$carrier->id.'.png');
                Configuration::updateValue($carrier_key, $carrier->id);
            }
        }
        return true;
    }

    public function    uninstall(){
        parent::uninstall();
    //     // We first carry out a classic uninstall of a module
    //     if (!parent::uninstall() ||
    //         !Configuration::deleteByName('MYCARRIER1_OVERCOST') ||
    //         !Configuration::deleteByName('MYCARRIER2_OVERCOST') ||
    //         !$this->unregisterHook('updateCarrier'))
    //         return false;        
    //     // We delete the carriers we created earlier
    //     $Carrier1 = new Carrier((int)(Configuration::get('MYCARRIER1_CARRIER_ID')));
    //     $Carrier2 = new Carrier((int)(Configuration::get('MYCARRIER2_CARRIER_ID')));
    //     // If one of the two modules was the default carrier, 
    //     //we choose another
    //     if (Configuration::get('PS_CARRIER_DEFAULT') == (int)($Carrier1->id) ||
    //         Configuration::get('PS_CARRIER_DEFAULT') == (int)($Carrier2->id))
    //     {
    //         global $cookie;
    //         $carriersD = Carrier::getCarriers($cookie->id_lang, true, false, false,
    //                 NULL, PS_CARRIERS_AND_CARRIER_MODULES_NEED_RANGE);
    //         foreach($carriersD as $carrierD)
    //             if ($carrierD['active'] AND !$carrierD['deleted']
    //                 AND ($carrierD['name'] != $this->_config['name']))
    //                 Configuration::updateValue('PS_CARRIER_DEFAULT',
    //                                 $carrierD['id_carrier']);
    //     }
    //     // Then we delete the carriers using variable delete
    //     // in order to keep the carrier history for orders placed with them
    //     $Carrier1->deleted = 1;
    //     $Carrier2->deleted = 1;
    //     if (!$Carrier1->update() || !$Carrier2->update())
    //         return false;

    //     return true;
    // }
    // /*
    // ** Hook update carrier
    // **
    // */
    // public function hookupdateCarrier($params)
    // {
    //     // Update the id for carrier 1
    //     if ((int)($params['id_carrier']) == (int)(Configuration::get('MYCARRIER1_CARRIER_ID')))
    //         Configuration::updateValue('MYCARRIER1_CARRIER_ID', (int)
    //                 ($params['carrier']->id));
    //     // Update the id for carrier 2
    //     if ((int)($params['id_carrier']) == (int)(Configuration::get('MYCARRIER2_CARRIER_ID')))
    //         Configuration::updateValue('MYCARRIER2_CARRIER_ID', (int)
    //                ($params['carrier']->id));
    }
    public function calculate($we){
        if(($we - 40)>0) return 'RATE42';
        $table = array(
            array('RATE1', 0, 1),array('RATE2', 1, 1.5),array('RATE3', 1.5, 2),
            array('RATE4', 2, 3),array('RATE5', 3, 4),array('RATE6', 4, 5),
            array('RATE7', 5, 6),array('RATE8', 6, 7),array('RATE9', 7, 8),
            array('RATE10', 8, 9),array('RATE11', 9, 10),array('RATE12', 10, 11),
            array('RATE13', 11, 12),array('RATE14', 12, 13),array('RATE15', 13, 14),
            array('RATE16', 14, 15),array('RATE17', 15, 16),array('RATE18', 16, 17),
            array('RATE19', 17, 18),array('RATE20', 18, 19),array('RATE21', 19, 20),
            array('RATE22', 20, 21),array('RATE23', 21, 22),array('RATE24', 22, 23),
            array('RATE25', 23, 24),array('RATE26', 24, 25),array('RATE27', 25, 26),
            array('RATE28', 26, 27),array('RATE29', 27, 28),array('RATE30', 28, 29),
            array('RATE31', 29, 30),array('RATE32', 30, 31),array('RATE33', 31, 32),
            array('RATE34', 32, 33),array('RATE35', 33, 34),array('RATE36', 34, 35),
            array('RATE37', 35, 36),array('RATE38', 36, 37),array('RATE39', 37, 38),
            array('RATE40', 38, 39),array('RATE41', 39, 40)
        );
        foreach ($table as $key => $value) {
            
            if($value[1] < $we && $value[2] >= $we) return $value[0];
        }
    }
    //3) Front office methods
    /*
    ** Front Methods
    **
    ** If you set the variable need_range to true when you created your carrier
    ** in the install() method, the method called up by the Cart class 
    ** will be getOrderShippingCost()
    ** Otherwise the method called up will be getOrderShippingCostExternal
    **
    ** The $params variable contains the basket, the customer and their addresses
    ** The $shipping_cost variable contains the cost calculated
    ** according to the price ranges set
    ** for the carrier in the backoffice
    **
    */
    public function getOrderShippingCost($params, $shipping_cost)
    {
        $address_delivery = $params->id_address_delivery;
        $address = new Address($address_delivery);
        $cost = 0;
        $productos = $params->getProducts(true);
        if($address)
        {
           foreach ($productos as $key => $value) {
                $weight = (float)$value['weight'];
                $width = (float)$value['width'];
                $height = (float)$value['height'];
                $depth = (float)$value['depth'];
                $sql = new DbQuery();
                $sql->select('*');
                $sql->from('shipit_table', 'c');
                $sql->where('c.COMUNA = '.$address->comuna);
                $comuna_output = Db::getInstance()->executeS($sql);
                $comuna_output = $comuna_output[0];
                $rate = $this->calculate($weight);
                if(!empty($rate)){
                    if($rate != 'RATE42'){
                        $cost += $comuna_output[$rate];
                    }
                    else{
                        $cost += $comuna_output['RATE41']+($comuna_output['RATE41']*ceil($weight-40));
                    }
                }
            } 
        }
        return $cost;
    }
    public function getOrderShippingCostExternal($params)
    {
        $address_delivery = $params->id_address_delivery;
        $address = new Address($address_delivery);
        $cost = 0;
        if($address){
            $productos = $params->getProducts(true);
            foreach ($productos as $key => $value) {
                $weight = (float)$value['weight'];
                $width = (float)$value['width'];
                $height = (float)$value['height'];
                $depth = (float)$value['depth'];
                $sql = new DbQuery();
                $sql->select('*');
                $sql->from('shipit_table', 'c');
                $sql->where('c.COMUNA = '.$address->comuna);
                $comuna_output = Db::getInstance()->executeS($sql);
                $rate = $this->calculate($weight);
                if(!empty($rate)){
                    if($rate != 'RATE42'){
                        $cost += $comuna_output[$rate];
                    }
                    else{
                        $cost += $comuna_output['RATE41']+($comuna_output['RATE41']*ceil($weight-40));
                    }
                }
            }
        }
        return $cost;
    }
}
?>