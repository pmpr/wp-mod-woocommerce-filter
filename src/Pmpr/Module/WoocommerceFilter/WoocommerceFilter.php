<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ecdf0a55e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; use CMB2; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\WoocommerceFilter\Frontend\Frontend; use Pmpr\Module\WoocommerceFilter\Refinement\Element; use Pmpr\Module\WoocommerceFilter\Refinement\Refinement; use Pmpr\Module\WoocommerceFilter\Traits\CommonTrait; use WP_Query; use WP_Taxonomy; class WoocommerceFilter extends ComponentInitiator { use CommonTrait; const eigiqicogcmgmgwi = "\160\146"; const cgckcqysmyiikaqw = "\167\x6f\x6f\x63\x6f\155\x6d\145\x72\x63\145\137\x66\151\154\164\x65\x72"; const geiygweugseyomyy = self::cgckcqysmyiikaqw . Constants::wassgkgmoyygyaya; const ugygausceickekgo = "\145\170\x63\x6c\x75\144\145\144\137" . self::cgckcqysmyiikaqw; const eyemkmiomkkwessc = self::cgckcqysmyiikaqw . "\x5f\x72\x65\141\x6c\154\171\137\143\x75\x72\x72\145\x6e\164\137\164\x65\162\155"; const kgowyeaekuwwskco = "\x70\x75\163\150\137\162\x65\x70\x6c\x61\x63\x65\155\145\156\x74\x5f" . self::cgckcqysmyiikaqw; const oqmosiywgecmeqig = "\160\165\154\154\x5f\162\145\x70\x6c\x61\x63\145\x6d\145\x6e\164\137" . self::cgckcqysmyiikaqw; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x57\157\x6f\143\157\x6d\x6d\145\162\143\x65\40\106\x69\x6c\164\145\162", PR__MDL__WOOCOMMERCE_FILTER); }, Constants::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto cecuyayqoioasumi; } Setting::symcgieuakksimmu(); cecuyayqoioasumi: Frontend::symcgieuakksimmu(); Refinement::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\x69\156\x69\164"])->qcsmikeggeemccuu("\167\160", [$this, "\145\156\161\x75\145\165\x65"])->qcsmikeggeemccuu("\x77\157\x6f\143\157\155\155\145\162\143\145\137\x70\x72\157\x64\x75\x63\164\137\x71\165\x65\x72\x79", [$this, "\165\157\163\153\165\x6b\x79\x71\165\x67\155\x71\161\x69\x65\x63"])->qcsmikeggeemccuu("\x63\155\142\62\x5f\163\141\x76\145\x5f\x74\x65\162\155\137\x66\151\x65\154\144\x73\137" . Constants::cmckeoksigiaqykc, [$this, "\157\x6d\151\171\x69\145\x75\x67\x79\x65\x79\163\x6d\x71\153\x6b"], 99, 3); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x63\162\x6f\x6e\x5f\163\143\150\145\144\x75\x6c\145\163", [$this, "\157\x65\153\153\155\157\x67\153\x75\143\153\165\145\171\145\171"])->cecaguuoecmccuse("\167\157\x6f\x63\x6f\x6d\155\x65\162\143\x65\x5f\x74\x61\170\x6f\x6e\157\x6d\171\137\141\x72\147\163\x5f\x70\x61\x5f\x63\157\x6c\x6f\162", [$this, "\155\143\147\145\x75\141\171\x6f\141\155\167\x75\163\143\141\x79"]); $this->aqaqisyssqeomwom(self::geiygweugseyomyy . "\155\157\144\x69\146\x79\137\x71\x75\x65\x72\171\x5f\141\x72\147\x73", [$this, "\163\143\x67\x75\141\165\x75\141\145\x6f\145\145\167\167\145\x65"], 1)->aqaqisyssqeomwom(self::geiygweugseyomyy . "\163\x6f\162\164\137\x74\145\162\x6d\x73\137\142\x65\146\x6f\162\x65\x5f\157\165\x74", [$this, "\167\163\x6d\x77\x77\157\167\155\x6d\x71\x79\145\141\153\161\165"], 5); } public function init() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto asmecuqiyyswueqe; } $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $seyqqsmuaiegkeeq = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->mqmocoguqcyymgqu(); foreach ($seyqqsmuaiegkeeq as $ymqmyyeuycgmigyo => $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto myoicgcuugciueis; } if ($mqeowykqcggsieya->cekoogweeooasayu($kesssewsiegssiya)) { goto qgoiooayqmqqsiok; } $seyqqsmuaiegkeeq[$ymqmyyeuycgmigyo] = $mqeowykqcggsieya->qcgakseyaikigqco($kesssewsiegssiya); goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: unset($seyqqsmuaiegkeeq[$ymqmyyeuycgmigyo]); qwigomakwmyiwkgo: myoicgcuugciueis: qogqewiwmwiwskgm: } qiaqsassksqiuyae: $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $uuyucgkyusckoaeq->scyscgskcwukckyy("\160\x72\x6f\144\165\143\164\x5f\x64\x65\x74\x61\151\154\x73")->gswweykyogmsyawy(__("\x50\162\x6f\x64\x75\143\164\x20\104\145\164\141\151\154\x73", PR__MDL__WOOCOMMERCE_FILTER))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::oqmosiywgecmeqig)->gswweykyogmsyawy(__("\x50\x75\154\x6c\40\x52\x65\160\154\141\143\x65\x6d\x65\156\164", PR__MDL__WOOCOMMERCE_FILTER))->gucwmccyimoagwcm(__("\122\x65\160\154\x61\143\x65\155\145\156\164\40\146\x72\157\x6d\x20\160\141\162\145\156\164", PR__MDL__WOOCOMMERCE_FILTER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::ugygausceickekgo)->gswweykyogmsyawy(__("\x45\170\143\154\165\144\x65\40\x46\x69\x6c\x74\x65\x72\163", PR__MDL__WOOCOMMERCE_FILTER))->acauweqyyugwisqc($seyqqsmuaiegkeeq)->oikgogcweiiaocka())->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::kgowyeaekuwwskco)->gswweykyogmsyawy(__("\120\165\x73\150\40\122\x65\x70\154\x61\143\145\x6d\145\x6e\x74", PR__MDL__WOOCOMMERCE_FILTER))->gucwmccyimoagwcm(__("\x52\x65\x70\154\x61\143\145\x6d\145\x6e\164\x20\x69\156\164\157\40\x63\150\x69\154\x64\x72\x65\156", PR__MDL__WOOCOMMERCE_FILTER)))->auoaeeuwaqswggqg(Constants::cmckeoksigiaqykc)->register(); asmecuqiyyswueqe: } public function enqueue() { if (!$this->wwqoiqcoccacyyyc()) { goto csscmcacoikwsecs; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ieayqiyiuuguowyq(Setting::ykqqgqskiygugscu, $this->qeomwskywaguqyyu())->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis(self::cgckcqysmyiikaqw, $eygsasmqycagyayw->get("\x66\162\157\x6e\164\x2e\x6a\163"))->simswskycwagoeqy()); csscmcacoikwsecs: } public function scguauuaeoeewwee($query_args) { if (!isset($_REQUEST[self::eigiqicogcmgmgwi], $_REQUEST[self::geiygweugseyomyy . "\167\160\x5f\x71\165\x65\162\x79\x5f\x61\162\x67\x73"])) { goto cuykwgmswkskqkyi; } $query_args[Constants::cuoyscoiacswuauq] = $_REQUEST[self::geiygweugseyomyy . "\x77\x70\137\x71\165\x65\x72\x79\x5f\141\162\147\163"][Constants::cuoyscoiacswuauq]; $query_args[Constants::kymceekcoyyeuocm] = $_REQUEST[self::geiygweugseyomyy . "\x77\x70\137\161\x75\145\x72\x79\x5f\141\162\x67\163"][Constants::kymceekcoyyeuocm]; $query_args[Constants::kkcqmwgccaygggcu] = $_REQUEST[self::geiygweugseyomyy . "\x77\160\137\161\x75\x65\162\x79\137\x61\x72\x67\163"][Constants::kkcqmwgccaygggcu]; cuykwgmswkskqkyi: return $query_args; } public function oekkmogkuckueyey($immuisiomomksweo) { if (!is_array($immuisiomomksweo)) { goto eqkauqciwewmgeoi; } $ciyackuwsqkoqese = 2; sciwggaeogcoesiu: if (!($ciyackuwsqkoqese <= 7)) { goto kuicqywysciceggs; } $immuisiomomksweo["\144\141\x79\163" . $ciyackuwsqkoqese] = ["\151\x6e\x74\145\x72\166\x61\x6c" => $ciyackuwsqkoqese * DAY_IN_SECONDS, "\144\151\x73\160\154\141\x79" => sprintf(__("\145\x61\x63\x68\x20\x25\163\x20\x64\141\171\163", PR__MDL__WOOCOMMERCE_FILTER), $ciyackuwsqkoqese)]; mkwskuycuyguqqok: $ciyackuwsqkoqese++; goto sciwggaeogcoesiu; kuicqywysciceggs: eqkauqciwewmgeoi: return $immuisiomomksweo; } public function wsmwwowmmqyeakqu($uyuaosigqymaqsaa) : array { if (is_array($uyuaosigqymaqsaa)) { goto kwagwqyusyiyoaqs; } $uyuaosigqymaqsaa = []; kwagwqyusyiyoaqs: $iwewcwusemqaiggk = reset($uyuaosigqymaqsaa); if ($iwewcwusemqaiggk) { goto yowsmsiyimmimemc; } return $uyuaosigqymaqsaa; yowsmsiyimmimemc: $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $kesssewsiegssiya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwewcwusemqaiggk, Constants::gmmygyiecgmggaam); $sikaymiwcesagayc = $ykquycoiqesuckco->giiuwsmyumqwwiyq($kesssewsiegssiya . Element::lowmsmaykkuowskm, -1); $umwqusowiqmyseom = $ykquycoiqesuckco->giiuwsmyumqwwiyq($kesssewsiegssiya . Element::uucggqgemiykigga, Constants::eeccqomoaqsawouy); if (!($sikaymiwcesagayc != -1)) { goto mswsoaimesegiiic; } switch ($sikaymiwcesagayc) { case Constants::gouqcwikiiygyasc: if ($umwqusowiqmyseom === Constants::eeccqomoaqsawouy) { goto uukumskkeggaowck; } uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if (!((int) $mmeioagwmyscwumo[Constants::ooqggksagkoaeeke] === (int) $csougakqegqiqsgi[Constants::ooqggksagkoaeeke])) { goto eequksumcoogyoem; } return 0; eequksumcoogyoem: return (int) $mmeioagwmyscwumo[Constants::ooqggksagkoaeeke] > (int) $csougakqegqiqsgi[Constants::ooqggksagkoaeeke] ? -1 : 1; }); goto cggowoquuiwqkyew; uukumskkeggaowck: uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if (!((int) $mmeioagwmyscwumo[Constants::ooqggksagkoaeeke] === (int) $csougakqegqiqsgi[Constants::ooqggksagkoaeeke])) { goto sqiciiuwmykocycc; } return 0; sqiciiuwmykocycc: return (int) $mmeioagwmyscwumo[Constants::ooqggksagkoaeeke] < (int) $csougakqegqiqsgi[Constants::ooqggksagkoaeeke] ? -1 : 1; }); cggowoquuiwqkyew: goto kiqogmwcgcamwiig; case Constants::NAME: if ($umwqusowiqmyseom === Constants::eeccqomoaqsawouy) { goto ocokwuuquaokmasc; } uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { return strnatcasecmp($csougakqegqiqsgi[Constants::NAME], $mmeioagwmyscwumo[Constants::NAME]); }); goto yiwiqaqmwiogawym; ocokwuuquaokmasc: uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { return strnatcasecmp($mmeioagwmyscwumo[Constants::NAME], $csougakqegqiqsgi[Constants::NAME]); }); yiwiqaqmwiogawym: goto kiqogmwcgcamwiig; case "\156\165\x6d\145\162\x69\x63": if ($umwqusowiqmyseom === Constants::eeccqomoaqsawouy) { goto wcesymwqykqoyuqk; } uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if (!((int) $mmeioagwmyscwumo[Constants::ouywiegeiyuaaawo] === (int) $csougakqegqiqsgi[Constants::ouywiegeiyuaaawo])) { goto meawswgwagoqgkye; } return 0; meawswgwagoqgkye: return (int) $mmeioagwmyscwumo[Constants::ouywiegeiyuaaawo] > (int) $csougakqegqiqsgi[Constants::ouywiegeiyuaaawo] ? -1 : 1; }); goto usqgaogkqgemuima; wcesymwqykqoyuqk: uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if (!((int) $mmeioagwmyscwumo[Constants::ouywiegeiyuaaawo] === (int) $csougakqegqiqsgi[Constants::ouywiegeiyuaaawo])) { goto goacqqsgaaigyuaw; } return 0; goacqqsgaaigyuaw: return (int) $mmeioagwmyscwumo[Constants::ouywiegeiyuaaawo] < (int) $csougakqegqiqsgi[Constants::ouywiegeiyuaaawo] ? -1 : 1; }); usqgaogkqgemuima: goto kiqogmwcgcamwiig; } iomcaiwewsawiamu: kiqogmwcgcamwiig: mswsoaimesegiiic: return $uyuaosigqymaqsaa; } public function mcgeuayoamwuscay($iyaskikkeegoiucg) { if (!is_array($iyaskikkeegoiucg)) { goto egasokooagakisiy; } $iyaskikkeegoiucg["\x71\x75\x65\162\x79\x5f\166\141\162"] = true; egasokooagakisiy: return $iyaskikkeegoiucg; } public function uoskukyqugmqqiec($gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto kecwuwwcwokuksyq; } $ugugimquukqwogge = $this->ocksiywmkyaqseou(self::geiygweugseyomyy . "\x67\x65\164\x5f\x6d\x65\x74\141\x5f\x71\x75\x65\162\171", $gqgemcmoicmgaqie->get(Constants::cuoyscoiacswuauq)); $gqgemcmoicmgaqie->set(Constants::cuoyscoiacswuauq, $ugugimquukqwogge); kecwuwwcwokuksyq: } public function omiyieugyeysmqkk($aokagokqyuysuksm, $ecukkacusqswqoem, $wggksywsgqeiaqcc) { if (!($wggksywsgqeiaqcc instanceof CMB2 && $aokagokqyuysuksm)) { goto qgegkeomwscwwiuw; } $this->uoioccymskiiwgsg($aokagokqyuysuksm, $wggksywsgqeiaqcc->data_to_save); qgegkeomwscwwiuw: } public function uoioccymskiiwgsg($aokagokqyuysuksm, $ugugimquukqwogge) { if (!isset($ugugimquukqwogge[self::kgowyeaekuwwskco])) { goto eyiamcekkgkiawqy; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if (!($okcscwesammossuq = $aoskwucuugeuaeus->mmoaikqueyiwcesm($aokagokqyuysuksm))) { goto mqccmesakuemceqi; } foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $wcgsoqmmciswkmiq = $aoskwucuugeuaeus->iooowgsqoyqseyuu($wcgsoqmmciswkmiq); $aowmesqseaiqimyu = $ugugimquukqwogge[self::ugygausceickekgo] ?? null; $oaskiuwaqyqssquy = $aoskwucuugeuaeus->igawqaomowicuayw($wcgsoqmmciswkmiq, self::oqmosiywgecmeqig, true); if (!$oaskiuwaqyqssquy) { goto igymseewwyiocoug; } if ($aowmesqseaiqimyu) { goto cgewcsueoyaeikgm; } $aoskwucuugeuaeus->smqukgcyacswysqa($wcgsoqmmciswkmiq, self::ugygausceickekgo); goto sukskmcwsoysiuqu; cgewcsueoyaeikgm: $cyqqgsieawoiiskk = $aoskwucuugeuaeus->igawqaomowicuayw($wcgsoqmmciswkmiq, self::ugygausceickekgo); foreach ($cyqqgsieawoiiskk as $yemgmmgogcwccuky) { if (in_array($yemgmmgogcwccuky, $aowmesqseaiqimyu, true)) { goto qmeoaqmsuseueqiy; } $aoskwucuugeuaeus->smqukgcyacswysqa($wcgsoqmmciswkmiq, self::ugygausceickekgo, $aowmesqseaiqimyu); qmeoaqmsuseueqiy: ickcmqoiosquugwe: } eiawsoasmscmqswa: $ewieakkmayyseocu = array_diff($aowmesqseaiqimyu, $cyqqgsieawoiiskk); foreach ($ewieakkmayyseocu as $uwomkgseoiegeume) { $aoskwucuugeuaeus->giwmekimakcaawsq($wcgsoqmmciswkmiq, self::ugygausceickekgo, $uwomkgseoiegeume); cuoqqgaygogsmmic: } ygkcacsyyckescqs: sukskmcwsoysiuqu: igymseewwyiocoug: $this->uoioccymskiiwgsg($wcgsoqmmciswkmiq, $aoskwucuugeuaeus->igawqaomowicuayw($wcgsoqmmciswkmiq)); goeoymmqqqeeoime: } qmiwsequckckoaei: mqccmesakuemceqi: eyiamcekkgkiawqy: } }
