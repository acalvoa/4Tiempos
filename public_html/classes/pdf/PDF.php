<?php
/**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 *  @author 	PrestaShop SA <contact@prestashop.com>
 *  @copyright  2007-2016 PrestaShop SA
 *  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

/**
 * @since 1.5
 */
class PDFCore
{
    public $filename;
    public $pdf_renderer;
    public $objects;
    public $template;
    public $send_bulk_flag = false;

    const TEMPLATE_INVOICE = 'Invoice';
    const TEMPLATE_ORDER_RETURN = 'OrderReturn';
    const TEMPLATE_ORDER_SLIP = 'OrderSlip';
    const TEMPLATE_DELIVERY_SLIP = 'DeliverySlip';
    const TEMPLATE_SUPPLY_ORDER_FORM = 'SupplyOrderForm';

    /**
     * @param $objects
     * @param $template
     * @param $smarty
     * @param string $orientation
     */
    public function __construct($objects, $template, $smarty, $orientation = 'P')
    {
        $this->pdf_renderer = new PDFGenerator((bool)Configuration::get('PS_PDF_USE_CACHE'), $orientation);
        $this->template = $template;
        $this->smarty = $smarty;

        $this->objects = $objects;
        if (!($objects instanceof Iterator) && !is_array($objects)) {
            $this->objects = array($objects);
        }
        
        if (count($this->objects)>1) { // when bulk mode only
            $this->send_bulk_flag = true;
        }
    }

    /**
     * Render PDF
     *
     * @param bool $display
     * @return mixed
     * @throws PrestaShopException
     */
    public function render($display = true)
    {
        // Log helper closure
        $log = function($message) {

          $today = date('Y-m-d');

          $now = date('Y-m-d H:i:s');

          $name = "validation.$today.log";

          // $path = _PS_MODULE_DIR_ . 'webpaykcc/logs/';

          $logPath = "/home/testing.4tiempos.cl/cgi-bin/log/";

          if($logPath){
            $path = $logPath;
          }

          $logFile = $path . $name;

          $log = fopen($logFile, 'a');

          $text = "$now : $message\n";

          fwrite($log, $text);

          fclose($log);
        };
        $render = false;
        $log("PDF-1");
        $this->pdf_renderer->setFontForLang(Context::getContext()->language->iso_code);
        $log("PDF-2");
        foreach ($this->objects as $object) {
            $log("PDF-6");    
            $this->pdf_renderer->startPageGroup();
            $log("PDF-7");
            $template = $this->getTemplateObject($object);
            $log("PDF-8");
            if (!$template) {
                continue;
            }
            $log("PDF-9");
            if (empty($this->filename)) {
                $this->filename = $template->getFilename();
                if (count($this->objects) > 1) {
                    $this->filename = $template->getBulkFilename();
                }
            }
            $log("PDF-10");
            $template->assignHookData($object);
            $log("PDF-11");
            $this->pdf_renderer->createHeader($template->getHeader());
            $log("PDF-12");
            $this->pdf_renderer->createFooter($template->getFooter());
            $log("PDF-13");
            $this->pdf_renderer->createPagination($template->getPagination());
            $log("PDF-14");
            $this->pdf_renderer->createContent($template->getContent());
            $log("PDF-15");
            $this->pdf_renderer->writePage();
            $log("PDF-16");
            $render = true;
            $log("PDF-17");
            unset($template);
        }
        $log("PDF-3");
        if ($render) {
            // clean the output buffer
            $log("PDF-4");
            if (ob_get_level() && ob_get_length() > 0) {
                ob_clean();
            }
            $log("PDF-5");
            return $this->pdf_renderer->render($this->filename, $display);
        }
    }

    /**
     * Get correct PDF template classes
     *
     * @param mixed $object
     * @return HTMLTemplate|false
     * @throws PrestaShopException
     */
    public function getTemplateObject($object)
    {
        $class = false;
        $class_name = 'HTMLTemplate'.$this->template;

        if (class_exists($class_name)) {
            // Some HTMLTemplateXYZ implementations won't use the third param but this is not a problem (no warning in PHP),
            // the third param is then ignored if not added to the method signature.
            $class = new $class_name($object, $this->smarty, $this->send_bulk_flag);

            if (!($class instanceof HTMLTemplate)) {
                throw new PrestaShopException('Invalid class. It should be an instance of HTMLTemplate');
            }
        }

        return $class;
    }
}
