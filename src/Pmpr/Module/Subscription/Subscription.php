<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ee0e68c08c5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Module\Subscription\Frontend\Frontend; use Pmpr\Module\Subscription\Model\Model; use Pmpr\Module\Subscription\Woocommerce\Woocommerce; class Subscription extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x53\x75\142\x73\x63\162\151\160\164\151\x6f\x6e", PR__MDL__SUBSCRIPTION); }]); if (!$this->gmiyqqaekqcsoime()) { goto mqiiqkuaoekeuswo; } parent::__construct(); $this->iemaakgqgqosiecm(); mqiiqkuaoekeuswo: } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); Manager::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); Woocommerce::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto qmoocweoekqueuyy; } Ajax::symcgieuakksimmu(); qmoocweoekqueuyy: } }
