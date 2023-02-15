<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ed29f00e00e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Module\Subscription\Frontend\Frontend; use Pmpr\Module\Subscription\Model\Model; use Pmpr\Module\Subscription\Woocommerce\Woocommerce; class Subscription extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\123\x75\x62\163\143\x72\151\160\x74\151\157\156", PR__MDL__SUBSCRIPTION); }]); if (!$this->gmiyqqaekqcsoime()) { goto goqmywuiicciasyk; } parent::__construct(); $this->iemaakgqgqosiecm(); goqmywuiicciasyk: } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); Manager::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); Woocommerce::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto siecswkggyikqkga; } Ajax::symcgieuakksimmu(); siecswkggyikqkga: } }
