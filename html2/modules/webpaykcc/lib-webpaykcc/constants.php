<?php
/*
  Plugin Name: Prestashop Webpay KCC Plugin
  Description: A Prestashop Payment Module for Chilean Transbank's WebPay KCC.
  Author: Camilo A. Castro Cabrera
  Version: 1.0
  Author URI: www.cervezapps.cl
  Plugin URI: https://github.com/clsource/prestashop-webpay
  
  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License or any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
 
// Constants Used in Different
// Parts of the Module
define('KCC_PATH', 'WEBPAY_KCC_PATH');
define('KCC_URL', 'WEBPAY_KCC_URL');
define('KCC_LOG', 'WEBPAY_KCC_LOGPATH');

// Url for the Terms and Conditions
define('KCC_TOC_PAGE_URL', 'WEBPAY_KCC_TOC_PAGE_URL');

// Transaction Type
// Maybe Change it to something more 
// configurable in the future
define('KCC_TRANSACTION_TYPE', 'TR_NORMAL');

// Use Exec
// Eventually we could use
// perl for not using php's exec
// but for know this is just a dummy check
define('KCC_USE_EXEC', true);

// Useful Constants
// This constant is used in log
// generation
define('KCC_LOG_PREFIX', 'TBK_');

// CGI File
define('KCC_CGI_NAME', 'tbk_bp_pago.cgi');

// Check CGI File
define('KCC_CGI_CHECK', 'tbk_check_mac.cgi');

// Results
define('KCC_ACCEPTED_RESULT', 'ACEPTADO');
define('KCC_REJECTED_RESULT', 'RECHAZADO');

// Webpay Responses
define('KCC_OK_RESPONSE', 0);

define('KCC_VERIFICATION_OK', 'CORRECTO');

// Order States
define('KCC_WAITING_PAYMENT_STATE', 'PS_OS_WEBPAYKCC_OPEN');
