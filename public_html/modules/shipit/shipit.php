<?php
if (!defined('_PS_VERSION_'))
    exit;
 
class Shipit extends CarrierModule{
    private $_html        = '';
    protected $_errors    = array();
 
    public function    __construct(){
        $this->name        = 'shipit';
        $this->tab         = 'analytics_stats';
        $this->author      = '4tiempos';
        $this->version     = '1.0.0';
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => '1.7');
        $this->bootstrap   = true;
     
        parent::__construct();
     
        $this->displayName = $this->l('Modulo de prueba');
        $this->description = $this->l('Este modulo permite incluir el codigo de Google Analytics y generar un mensaje de politicas de privacidad');
    }
    public function    install(){}
    public function    uninstall()
    public function    getContent(){
    private function   _postValidation(){}
    private function   _postProcess(){}
    private function   _displayForm(){}
    public function    hookDisplayHeader($params){}
    public function    hookDisplayFooter($params){}
    private function   _hex2rgb($hex) {}
}
?>