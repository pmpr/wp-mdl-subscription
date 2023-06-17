<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             648d50d84c504             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription\Woocommerce; use Pmpr\Module\Subscription\Container; use WC_Product; abstract class Common extends Container { public function ucygcmiuugoemkeo($oammesyieqmwuwyi) : bool { $skksumsyamssouqc = false; if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) { goto ocokwuuquaokmasc; } $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!($igqsaukqcqscimok instanceof WC_Product && $this->cuisyayqcsoqcueq($igqsaukqcqscimok) || $this->cuisyayqcsoqcueq($ekymkycgewkiouqe->yykskyuueocaceui($igqsaukqcqscimok)))) { goto cggowoquuiwqkyew; } $skksumsyamssouqc = true; goto eequksumcoogyoem; cggowoquuiwqkyew: uukumskkeggaowck: } eequksumcoogyoem: ocokwuuquaokmasc: return $skksumsyamssouqc; } }
