<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554af63776da             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription\Frontend\Page; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Subscription\Model\Plan; use Pmpr\Module\Subscription\Setting; class Pricing extends Common { public function __construct() { $this->slug = "\160\x72\x69\143\151\x6e\147"; $this->isPrivate = false; $this->hasBreadcrumb = false; parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\x50\162\151\143\x69\x6e\x67", PR__MDL__SUBSCRIPTION); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = []; if (!($omouioamescuegke = Plan::symcgieuakksimmu())) { goto wmywuusgukmmaams; } $qookweymeqawmcwo = ["\x70\154\141\156\163" => $omouioamescuegke->qyaiiayimwmuomey(), self::qescuiwgsyuikume => $this->weysguygiseoukqw(Setting::ysgwugcqguggmigq), "\x66\145\x61\164\165\162\145\x5f\x69\143\x6f\x6e" => IconInterface::ggokgkyiweugsokc, self::eqkeooqcsscoggia => $this->weysguygiseoukqw(Setting::bweaoswakkswcwms), self::uookioyeieiswoew => self::uookioyeieiswoew === $this->weysguygiseoukqw(Setting::quaagiciyoskcygq)]; wmywuusgukmmaams: return $qookweymeqawmcwo; } }
