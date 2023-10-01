<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6519580b5b352             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Subscription\Woocommerce; use Pmpr\Module\Subscription\Container; use WC_Product; abstract class Common extends Container { public function ucygcmiuugoemkeo($oammesyieqmwuwyi) : bool { $skksumsyamssouqc = false; if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) { goto gqmewagyagamokok; } $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!($igqsaukqcqscimok instanceof WC_Product && $this->cuisyayqcsoqcueq($igqsaukqcqscimok) || $this->cuisyayqcsoqcueq($ekymkycgewkiouqe->yykskyuueocaceui($igqsaukqcqscimok)))) { goto oyiuemaaykgkqqam; } $skksumsyamssouqc = true; goto mkomygccqkmkumsi; oyiuemaaykgkqqam: ussceseaimqywuiy: } mkomygccqkmkumsi: gqmewagyagamokok: return $skksumsyamssouqc; } }
