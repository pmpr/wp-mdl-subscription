<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63f694d801dc8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription\Frontend\Page; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Subscription\Model\Plan; use Pmpr\Module\Subscription\Setting; class Pricing extends Common { public function __construct() { $this->slug = "\160\162\x69\x63\151\x6e\x67"; $this->isPrivate = false; $this->hasBreadcrumb = false; parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\120\x72\151\143\x69\156\147", PR__MDL__SUBSCRIPTION); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = []; if (!($omouioamescuegke = Plan::symcgieuakksimmu())) { goto skuqigsokaguscas; } $qookweymeqawmcwo = ["\160\x6c\141\156\x73" => $omouioamescuegke->qyaiiayimwmuomey(), self::qescuiwgsyuikume => $this->weysguygiseoukqw(Setting::cyksikyqoyugoscw), "\146\x65\x61\x74\165\x72\145\137\151\x63\x6f\156" => IconInterface::ggokgkyiweugsokc, self::eqkeooqcsscoggia => $this->weysguygiseoukqw(Setting::bweaoswakkswcwms), self::uookioyeieiswoew => self::uookioyeieiswoew === $this->weysguygiseoukqw(Setting::quaagiciyoskcygq)]; skuqigsokaguscas: return $qookweymeqawmcwo; } }
