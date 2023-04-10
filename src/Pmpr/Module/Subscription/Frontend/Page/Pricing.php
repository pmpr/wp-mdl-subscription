<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643426c77c25f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription\Frontend\Page; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Subscription\Model\Plan; use Pmpr\Module\Subscription\Setting; class Pricing extends Common { public function __construct() { $this->slug = "\x70\162\151\143\x69\156\x67"; $this->isPrivate = false; $this->hasBreadcrumb = false; parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\x50\x72\151\x63\151\156\147", PR__MDL__SUBSCRIPTION); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = []; if (!($omouioamescuegke = Plan::symcgieuakksimmu())) { goto aegysmeecgcgayyw; } $qookweymeqawmcwo = ["\160\154\x61\x6e\163" => $omouioamescuegke->qyaiiayimwmuomey(), self::qescuiwgsyuikume => $this->weysguygiseoukqw(Setting::cyksikyqoyugoscw), "\x66\145\141\x74\165\x72\145\x5f\x69\x63\x6f\x6e" => IconInterface::ggokgkyiweugsokc, self::eqkeooqcsscoggia => $this->weysguygiseoukqw(Setting::bweaoswakkswcwms), self::uookioyeieiswoew => self::uookioyeieiswoew === $this->weysguygiseoukqw(Setting::quaagiciyoskcygq)]; aegysmeecgcgayyw: return $qookweymeqawmcwo; } }
