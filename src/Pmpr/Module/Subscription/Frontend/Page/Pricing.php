<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffc4a44fa49             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription\Frontend\Page; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Subscription\Model\Plan; use Pmpr\Module\Subscription\Setting; class Pricing extends Common { public function __construct() { $this->slug = "\160\162\x69\x63\x69\x6e\147"; $this->isPrivate = false; $this->hasBreadcrumb = false; parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\120\162\151\x63\151\x6e\147", PR__MDL__SUBSCRIPTION); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = []; if (!($omouioamescuegke = Plan::symcgieuakksimmu())) { goto wgiygcmqaokywuqa; } $qookweymeqawmcwo = ["\x70\154\141\x6e\163" => $omouioamescuegke->qyaiiayimwmuomey(), self::qescuiwgsyuikume => $this->weysguygiseoukqw(Setting::cyksikyqoyugoscw), "\146\145\x61\x74\165\x72\145\137\x69\143\157\x6e" => IconInterface::ggokgkyiweugsokc, self::eqkeooqcsscoggia => $this->weysguygiseoukqw(Setting::bweaoswakkswcwms), self::uookioyeieiswoew => self::uookioyeieiswoew === $this->weysguygiseoukqw(Setting::quaagiciyoskcygq)]; wgiygcmqaokywuqa: return $qookweymeqawmcwo; } }
