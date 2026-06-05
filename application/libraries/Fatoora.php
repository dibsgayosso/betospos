<?php

use Automattic\WooCommerce\HttpClient\Response;

defined('BASEPATH') or exit('No direct script access allowed');

require_once(APPPATH . "libraries/zatca-xml/vendor/autoload.php");

// define('ZATCA_SDK_URL', "http://localhost/Zatca-SDK-API/index.php/api/");
define ('ZATCA_API_TEST_URL', 'https://gw-fatoora.zatca.gov.sa/e-invoicing/developer-portal');
define ('ZATCA_API_LIVE_URL', 'https://gw-fatoora.zatca.gov.sa/e-invoicing/core');

define('ZATCA_SDK_URL_SERVER', "https://zatca.phppointofsale.com/index.php/api/");

/**
* Note: This file may contain artifacts of previous malicious infection.
* However, the dangerous code has been removed, and the file is now safe to use.
*/

