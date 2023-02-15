<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ed49368ca83             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Module\Subscription\Frontend\Frontend; use Pmpr\Module\Subscription\Model\Model; use Pmpr\Module\Subscription\Woocommerce\Woocommerce; class Subscription extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\123\x75\142\163\143\162\x69\x70\164\x69\x6f\x6e", PR__MDL__SUBSCRIPTION); }]); if (!$this->gmiyqqaekqcsoime()) { goto goqmywuiicciasyk; } parent::__construct(); $this->iemaakgqgqosiecm(); goqmywuiicciasyk: } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); Manager::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); Woocommerce::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto siecswkggyikqkga; } Ajax::symcgieuakksimmu(); siecswkggyikqkga: } }
