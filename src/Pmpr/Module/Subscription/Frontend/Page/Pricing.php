<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64730e303b82e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription\Frontend\Page; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Subscription\Model\Plan; use Pmpr\Module\Subscription\Setting; class Pricing extends Common { public function __construct() { $this->slug = "\x70\x72\151\143\151\x6e\147"; $this->isPrivate = false; $this->hasBreadcrumb = false; parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\120\x72\x69\x63\151\x6e\x67", PR__MDL__SUBSCRIPTION); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = []; if (!($omouioamescuegke = Plan::symcgieuakksimmu())) { goto kaiesowkgwogqseg; } $qookweymeqawmcwo = ["\160\x6c\x61\x6e\x73" => $omouioamescuegke->qyaiiayimwmuomey(), self::qescuiwgsyuikume => $this->weysguygiseoukqw(Setting::ysgwugcqguggmigq), "\146\145\x61\x74\165\x72\x65\137\x69\x63\x6f\156" => IconInterface::ggokgkyiweugsokc, self::eqkeooqcsscoggia => $this->weysguygiseoukqw(Setting::bweaoswakkswcwms), self::uookioyeieiswoew => self::uookioyeieiswoew === $this->weysguygiseoukqw(Setting::quaagiciyoskcygq)]; kaiesowkgwogqseg: return $qookweymeqawmcwo; } }
