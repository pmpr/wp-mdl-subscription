<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64440366815ff             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription\Woocommerce; use Pmpr\Module\Subscription\Container; use WC_Product; abstract class Common extends Container { public function ucygcmiuugoemkeo($oammesyieqmwuwyi) : bool { $skksumsyamssouqc = false; if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) { goto giaacoqqqsekcayy; } $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!($igqsaukqcqscimok instanceof WC_Product && $this->cuisyayqcsoqcueq($igqsaukqcqscimok) || $this->cuisyayqcsoqcueq($ekymkycgewkiouqe->yykskyuueocaceui($igqsaukqcqscimok)))) { goto syiqkaasoueowwui; } $skksumsyamssouqc = true; goto skkamseieeusycye; syiqkaasoueowwui: cgiscsqwwgqqaeqi: } skkamseieeusycye: giaacoqqqsekcayy: return $skksumsyamssouqc; } }
