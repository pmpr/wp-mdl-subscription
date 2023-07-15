<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64b29b77ea814             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription\Woocommerce; use Pmpr\Module\Subscription\Container; use WC_Product; abstract class Common extends Container { public function ucygcmiuugoemkeo($oammesyieqmwuwyi) : bool { $skksumsyamssouqc = false; if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) { goto cggowoquuiwqkyew; } $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!($igqsaukqcqscimok instanceof WC_Product && $this->cuisyayqcsoqcueq($igqsaukqcqscimok) || $this->cuisyayqcsoqcueq($ekymkycgewkiouqe->yykskyuueocaceui($igqsaukqcqscimok)))) { goto uukumskkeggaowck; } $skksumsyamssouqc = true; goto sqiciiuwmykocycc; uukumskkeggaowck: eequksumcoogyoem: } sqiciiuwmykocycc: cggowoquuiwqkyew: return $skksumsyamssouqc; } }
