<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63275f301c301             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\WoocommerceFilter\Setting; use WP_Query; use WP_Taxonomy; use WP_Term; class Attribute extends Element { const caieqgyycuwysqkc = "\137\143\x75\x73\164\157\x6d\137\154\x61\x62\x65\154"; protected ?string $taxonomy = null; public function __construct() { $this->name = self::ATTRIBUTE; $this->type = self::ugmwekegkosuuwii; $this->side = true; $this->priority = 0; parent::__construct(); } public function render() { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$seyqqsmuaiegkeeq) { goto iggyqogweyosuikc; } $wekcyscwqougqoam = $this->weysguygiseoukqw(Setting::amoaaekaumwisuic, false); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto kqksuugcgsyeoayy; } $ywwsukisoiguygwm = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); if (!$this->ayseokmqycoqaigc($ywwsukisoiguygwm)) { goto ygcsmkuycoagwyou; } $muuwyqowekmoqoig = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::smommoywqawkuceg, false); $sikaymiwcesagayc = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::mkikoewciywmikok, "\111\104"); $umwqusowiqmyseom = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::uucggqgemiykigga, self::eeccqomoaqsawouy); $omwmuycmeqcqokom = $this->wqiaaecemqgacuww($ywwsukisoiguygwm); $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($ywwsukisoiguygwm, ["\157\x72\144\145\x72" => $umwqusowiqmyseom, "\x70\x61\162\145\156\x74" => $omwmuycmeqcqokom, "\x6f\162\x64\x65\162\142\171" => $sikaymiwcesagayc, "\x68\x69\144\x65\137\145\x6d\x70\x74\x79" => $muuwyqowekmoqoig]); if (!$uyuaosigqymaqsaa) { goto omugkkesagcyagmk; } $ymqmyyeuycgmigyo = self::omumymwakeoiwouc . $ywwsukisoiguygwm; $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->oiqmuywqkkmuswuc($ymqmyyeuycgmigyo); $omwmuycmeqcqokom = null; if (!is_string($eqgoocgaqwqcimie)) { goto quwcqmyokicssyew; } $eqgoocgaqwqcimie = DecoratorTerm::woimamkkeyoyauoa(self::ouywiegeiyuaaawo, $eqgoocgaqwqcimie, $ywwsukisoiguygwm); $omwmuycmeqcqokom = ManipulateTerm::owaokmsayecmasqu($eqgoocgaqwqcimie); quwcqmyokicssyew: foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { if (!$iwewcwusemqaiggk instanceof WP_Term) { goto ayyweymyuuiauamo; } if ($omwmuycmeqcqokom instanceof WP_Term && $omwmuycmeqcqokom->term_id === $iwewcwusemqaiggk->term_id) { goto cmqucgoewuyieoyk; } ManipulateArray::set($iwewcwusemqaiggk, [self::iuqumwggccmcuyem => 1]); goto yqykqysmiquwoasu; cmqucgoewuyieoyk: ManipulateArray::set($iwewcwusemqaiggk, [self::iuqumwggccmcuyem => 0]); yqykqysmiquwoasu: ayyweymyuuiauamo: gimmuoqwckiseaik: } iqcogmsguwoikame: $qookweymeqawmcwo = $this->gayqqwwuycceosii($ymqmyyeuycgmigyo); if (!($wekcyscwqougqoam && $eqgoocgaqwqcimie)) { goto mosqsmqimqgqoase; } $uyuaosigqymaqsaa = ManipulateArray::yaeiiwwyckwugsem($uyuaosigqymaqsaa); mosqsmqimqgqoase: $qookweymeqawmcwo[self::NAME] = $ymqmyyeuycgmigyo; $qookweymeqawmcwo[self::qwumqqyuasyskkkc] = $uyuaosigqymaqsaa; $qookweymeqawmcwo[self::qescuiwgsyuikume] = $this->uikgwcuascgeissw($kesssewsiegssiya); $qookweymeqawmcwo["\x68\x69\x64\145\x5f\x65\x6d\x70\x74\x79"] = $muuwyqowekmoqoig; $qookweymeqawmcwo["\x68\x69\144\145\x5f\143\150\151\x6c\144\162\x65\x6e"] = $this->weysguygiseoukqw(Setting::wsckiussqwckiwae, false); echo $this->iuygowkemiiwqmiw($this->aakmagwggmkoiiyu(), $qookweymeqawmcwo); omugkkesagcyagmk: ygcsmkuycoagwyou: kqksuugcgsyeoayy: kiwqkcaekqqyuegq: } qsygcycwieukkgwc: iggyqogweyosuikc: } public function gayqqwwuycceosii($ymqmyyeuycgmigyo = null) : array { $qookweymeqawmcwo = parent::gayqqwwuycceosii($ymqmyyeuycgmigyo); $qookweymeqawmcwo["\163\145\154\x65\143\164\145\144"] = $this->yuaqmekuuqoyiwoc($ymqmyyeuycgmigyo); return $qookweymeqawmcwo; } public function yuaqmekuuqoyiwoc($ymqmyyeuycgmigyo) : array { $icwicymcioeyeyek = $this->caokeucsksukesyo()->ioegacqacywgucsc(); $ymmmmaiuoocagigk = []; if (!$this->caokeucsksukesyo()->sacmaiqouaeswkyy($icwicymcioeyeyek)) { goto soqqemyioggmoakg; } foreach ($icwicymcioeyeyek as $aaokuekaimigoyue => $uyuaosigqymaqsaa) { if (!($aaokuekaimigoyue !== self::eigiqicogcmgmgwi && $ymqmyyeuycgmigyo === $aaokuekaimigoyue)) { goto wmmggowmigekyoso; } if (is_array($uyuaosigqymaqsaa)) { goto eegqyykygiccaoeo; } $ymmmmaiuoocagigk[] = $this->igaqgiyuucyuyswk($aaokuekaimigoyue, $uyuaosigqymaqsaa); goto ywqgcegomwaiuquc; eegqyykygiccaoeo: foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ymmmmaiuoocagigk[] = $this->igaqgiyuucyuyswk($aaokuekaimigoyue, $iwewcwusemqaiggk); miyqyeiwquwsacsm: } qkcyqocqqwmqgqww: ywqgcegomwaiuquc: wmmggowmigekyoso: ssoucoucsgccekwe: } qqewoyookaskiuek: soqqemyioggmoakg: return $ymmmmaiuoocagigk; } public function igaqgiyuucyuyswk($ymqmyyeuycgmigyo, $iwewcwusemqaiggk) { $kesssewsiegssiya = $this->guecmwukeoqiwyac($ymqmyyeuycgmigyo); $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa(self::ouywiegeiyuaaawo, $iwewcwusemqaiggk, $kesssewsiegssiya); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto acaqummmoyiemqss; } $iwewcwusemqaiggk = ["\146\151\154\x74\145\162" => $kesssewsiegssiya, self::ciyoccqkiamemcmm => ManipulateTerm::aqcogscycyycgkuq($iwewcwusemqaiggk), self::qescuiwgsyuikume => ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), self::NAME => $ymqmyyeuycgmigyo]; acaqummmoyiemqss: return $iwewcwusemqaiggk; } public function qgamykugookscsye(array $uiewakwqscemywuo = []) : array { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$seyqqsmuaiegkeeq) { goto foeeqckqsyockkak; } $qgeeqyucwycemwmo = [self::imigwosicasiemwu => __("\122\x61\x64\151\157", PR__MDL__WOOCOMMERCE_FILTER), self::SELECT => __("\x44\x72\x6f\x70\x64\157\x77\156", PR__MDL__WOOCOMMERCE_FILTER), self::ogmccgakwygeuqao => __("\x4d\165\154\164\x69\40\x44\162\157\x70\x64\x6f\167\x6e", PR__MDL__WOOCOMMERCE_FILTER), self::ecusimegeasyeese => __("\x4d\165\x6c\164\x69\40\x43\150\x65\143\153\142\x6f\170", PR__MDL__WOOCOMMERCE_FILTER)]; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto oqugqwcyomiaaoqu; } $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $pkyyagewkiyckmwy = ManipulateTaxonomy::qcgakseyaikigqco($kesssewsiegssiya); $uiewakwqscemywuo[] = [self::NAME => $ymqmyyeuycgmigyo, self::qgqyauaqwqmqseim => IconFontawesomeInterface::yukwuuuaiyqqcukw, self::qescuiwgsyuikume => $pkyyagewkiyckmwy, self::ymckmcsiymwqucoq => [Setting::wcwmusaouiqaqeww($ymqmyyeuycgmigyo . self::kouiwaoasqgwksas, __("\105\x6e\141\x62\154\x65", PR__MDL__WOOCOMMERCE_FILTER), sprintf(__("\105\156\141\142\154\x65\40\x25\x73\40\x66\151\x6c\164\x65\162\x2e", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy)), Setting::ymuegqgyuagyucws($ymqmyyeuycgmigyo . self::caieqgyycuwysqkc, __("\124\x61\170\157\x6e\x6f\155\171\40\x63\165\163\x74\x6f\x6d\40\x6c\x61\x62\145\x6c", PR__MDL__WOOCOMMERCE_FILTER), sprintf(__("\x46\x6f\x72\40\145\x78\141\155\x70\154\145\40\171\x6f\165\40\x77\141\156\164\x20\x74\x6f\x20\x73\150\157\x77\x20\164\x69\164\154\145\x20\157\146\40\x25\x73\x20\x61\x73\x20\42\115\x79\x20\120\x72\157\144\x75\143\164\x73\x22\56\40\112\x75\163\x74\x20\146\157\162\40\171\157\165\x72\40\143\157\156\166\x65\156\151\x65\156\x63\x65\56", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy)), Setting::ckuwucygcwsiawms($ymqmyyeuycgmigyo . self::ssugumysagumgqqm, __("\x46\151\x6c\x74\x65\x72\40\x54\x79\160\x65", PR__MDL__WOOCOMMERCE_FILTER), $qgeeqyucwycemwmo, sprintf(__("\x56\x69\145\x77\x20\x6f\x66\40\x74\x68\x65\40\x25\163\40\x74\145\162\155\x73\40\157\x6e\40\x74\150\x65\x20\146\162\x6f\156\164\x2e", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy))->eyygsasuqmommkua(self::imigwosicasiemwu), Setting::wcwmusaouiqaqeww($ymqmyyeuycgmigyo . self::smommoywqawkuceg, __("\110\x69\144\x65\x20\x55\x6e\x75\163\x65\144", PR__MDL__WOOCOMMERCE_FILTER), __("\103\x68\x65\143\153\x20\x74\x68\151\x73\40\151\x74\145\x6d\x20\x66\x6f\x72\x20\142\145\x74\164\145\x72\x20\160\145\x72\146\157\162\x6d\141\156\143\145\56", PR__MDL__WOOCOMMERCE_FILTER)), Setting::yyuwuqsiucweeoue($ymqmyyeuycgmigyo . self::mkikoewciywmikok, __("\123\157\x72\x74\x20\164\x65\x72\155\x73", PR__MDL__WOOCOMMERCE_FILTER), ["\55\x31" => __("\104\145\146\141\165\154\x74", PR__MDL__WOOCOMMERCE_FILTER), self::gouqcwikiiygyasc => __("\x49\104", PR__MDL__WOOCOMMERCE_FILTER), self::NAME => __("\x4e\141\155\145", PR__MDL__WOOCOMMERCE_FILTER), "\x6e\165\x6d\x65\162\x69\x63" => __("\116\165\x6d\x65\x72\x69\143", PR__MDL__WOOCOMMERCE_FILTER)], __("\x48\157\x77\x20\164\157\x20\163\x6f\162\164\40\164\145\162\x6d\x73\40\151\x6e\x73\151\144\x65\x20\x6f\x66\x20\146\x69\x6c\164\145\x72\40\x62\x6c\157\x63\x6b", PR__MDL__WOOCOMMERCE_FILTER))->mkmssscwmeekwgqo()->eyygsasuqmommkua("\55\x31"), Setting::yyuwuqsiucweeoue($ymqmyyeuycgmigyo . self::uucggqgemiykigga, __("\123\157\x72\x74\40\157\x72\144\145\x72", PR__MDL__WOOCOMMERCE_FILTER), [self::eeccqomoaqsawouy => __("\x41\x53\103", PR__MDL__WOOCOMMERCE_FILTER), self::omaksceqmigeaoko => __("\x44\105\x53\103", PR__MDL__WOOCOMMERCE_FILTER)], __("\110\157\x77\40\x74\x6f\x20\163\x6f\162\x74\40\164\145\162\x6d\x73\40\x69\156\163\151\144\x65\x20\157\x66\x20\146\x69\154\x74\145\162\40\142\154\x6f\x63\153", PR__MDL__WOOCOMMERCE_FILTER))->mkmssscwmeekwgqo()->eyygsasuqmommkua(self::eeccqomoaqsawouy)]]; oqugqwcyomiaaoqu: eeqesooyqagwawae: } suswcqoyyqkkquuo: foeeqckqsyockkak: return $uiewakwqscemywuo; } public function ewewecscqocemiqs($iwewcwusemqaiggk) { $bgscekiuycggmyci = ManipulateTerm::igawqaomowicuayw($iwewcwusemqaiggk, self::oqmosiywgecmeqig); $egcqoiemwoyoaewe = ManipulateTerm::get($iwewcwusemqaiggk); if ($bgscekiuycggmyci && $egcqoiemwoyoaewe instanceof WP_Term && $egcqoiemwoyoaewe->parent) { goto iekumemscwieugqw; } $ugugimquukqwogge = ManipulateTerm::igawqaomowicuayw($iwewcwusemqaiggk, self::ugygausceickekgo); goto hoeeyiowekaeemko; iekumemscwieugqw: $ugugimquukqwogge = self::ewewecscqocemiqs($egcqoiemwoyoaewe->parent); hoeeyiowekaeemko: return $ugugimquukqwogge; } public function ayseokmqycoqaigc($ymqmyyeuycgmigyo = null) { if (!($guwumyyyakswawas = $this->wqiaaecemqgacuww())) { goto usquiuuyiyqaeyiu; } $ugugimquukqwogge = $this->ewewecscqocemiqs($guwumyyyakswawas); if (!(is_array($ugugimquukqwogge) && in_array($ymqmyyeuycgmigyo, $ugugimquukqwogge, true))) { goto kymkucucyeoeikim; } return false; kymkucucyeoeikim: usquiuuyiyqaeyiu: if (!(!$ymqmyyeuycgmigyo || $ymqmyyeuycgmigyo === $this->aakmagwggmkoiiyu())) { goto qicwaskssogcokgm; } return true; qicwaskssogcokgm: return parent::ayseokmqycoqaigc($ymqmyyeuycgmigyo); } private function wqiaaecemqgacuww(?string $ymqmyyeuycgmigyo = null) : int { if ($ymqmyyeuycgmigyo) { goto uguigkcmukuouway; } $ymqmyyeuycgmigyo = self::cmckeoksigiaqykc; uguigkcmukuouway: $sogksuscggsicmac = 0; if (!(self::cmckeoksigiaqykc === $ymqmyyeuycgmigyo && DecoratorTaxonomy::qmssqeyayicowkgy($ymqmyyeuycgmigyo))) { goto uqqaiagaeqgqgaiy; } $sogksuscggsicmac = get_queried_object_id(); uqqaiagaeqgqgaiy: return $sogksuscggsicmac; } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->ioegacqacywgucsc(); $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto cgiscsqwwgqqaeqi; } $esygomwiykacwkye = $gqgemcmoicmgaqie->tax_query; if (!($esygomwiykacwkye && isset($esygomwiykacwkye->queries))) { goto skkamseieeusycye; } $esygomwiykacwkye = $esygomwiykacwkye->queries; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto wiysogeqqwgioyka; } $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); if (!$this->ayseokmqycoqaigc($ymqmyyeuycgmigyo)) { goto soaccwqimeksgwiw; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->oiqmuywqkkmuswuc(self::omumymwakeoiwouc . $ymqmyyeuycgmigyo, null, $icwicymcioeyeyek); if (!$eqgoocgaqwqcimie) { goto suqkuqygkkgwyaie; } if (is_array($eqgoocgaqwqcimie)) { goto aegysmeecgcgayyw; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; aegysmeecgcgayyw: $esygomwiykacwkye[] = ["\x66\151\x65\154\144" => self::ouywiegeiyuaaawo, "\143\157\155\160\x61\x72\145" => self::iamiiekkgssgeaew, self::ucoiewcoucauqwko => $eqgoocgaqwqcimie, self::gmmygyiecgmggaam => $ymqmyyeuycgmigyo, "\151\x6e\143\154\165\x64\145\x5f\x63\x68\151\x6c\x64\162\145\x6e" => 1]; suqkuqygkkgwyaie: soaccwqimeksgwiw: wiysogeqqwgioyka: gaomwagkcciesyqy: } esuiysskoweawsue: skkamseieeusycye: $this->gmcqycoowqmycocs(); $gqgemcmoicmgaqie->set("\x74\141\170\137\161\165\145\x72\x79", $esygomwiykacwkye); cgiscsqwwgqqaeqi: return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } public function cccesyuceswckkqy($syquekoksmgewowm, $yygmoeguaqyumuui) { $kaigioacywcmqiam = DecoratorWoocommerce::qagkseqwwaqacakk(); $wiciwwggyauswauk = []; if (is_array($yygmoeguaqyumuui)) { goto syiqkaasoueowwui; } $yygmoeguaqyumuui = [$yygmoeguaqyumuui]; syiqkaasoueowwui: foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($eqgoocgaqwqcimie = ManipulateArray::get($kaigioacywcmqiam, $uusmaiomayssaecw))) { goto cmegwsegsosyqcai; } $wiciwwggyauswauk[] = $eqgoocgaqwqcimie; cmegwsegsosyqcai: ewymsmkkiksgwysk: } giaacoqqqsekcayy: if (!$wiciwwggyauswauk) { goto wmywuusgukmmaams; } $syquekoksmgewowm[] = ["\164\141\170\x6f\x6e\x6f\155\171" => "\x70\162\157\x64\165\x63\x74\137\x76\151\x73\151\142\x69\154\x69\164\171", "\x66\151\145\x6c\144" => "\x74\145\x72\155\x5f\164\x61\170\x6f\156\157\x6d\x79\137\151\x64", "\x74\x65\162\x6d\x73" => $wiciwwggyauswauk, "\x6f\x70\x65\x72\141\164\157\x72" => "\116\x4f\124\40\x49\116"]; wmywuusgukmmaams: return $syquekoksmgewowm; } public function eicgqsyqqsccywwq($qwcmueausqgiwigy = false) : array { $yygmoeguaqyumuui = []; if (!(self::wiquocqckkqkmayo === DecoratorOption::get("\x77\157\157\x63\x6f\x6d\155\145\x72\x63\x65\x5f\x68\151\x64\x65\x5f\157\x75\164\x5f\157\146\137\x73\x74\157\143\x6b\137\151\x74\x65\x6d\x73"))) { goto gkyawqqcmigqgaiq; } $yygmoeguaqyumuui[] = "\157\x75\164\x6f\x66\163\x74\x6f\x63\153"; gkyawqqcmigqgaiq: if (!$this->qacygisasqiuosci()) { goto scisgsyemmsekgos; } if (!$qwcmueausqgiwigy) { goto ooeausyowguqicuo; } $yygmoeguaqyumuui[] = "\x65\x78\x63\x6c\165\x64\145\x2d\146\x72\x6f\155\55\163\x65\141\162\143\150"; goto egyyiccaeeiooaua; ooeausyowguqicuo: $yygmoeguaqyumuui[] = "\x65\170\x63\x6c\x75\x64\x65\55\x66\162\157\155\x2d\x63\141\x74\x61\x6c\157\147"; egyyiccaeeiooaua: scisgsyemmsekgos: return $yygmoeguaqyumuui; } public function gmcqycoowqmycocs() { $this->cecaguuoecmccuse("\x77\157\x6f\143\157\x6d\155\x65\x72\x63\x65\x5f\160\x72\x6f\x64\165\143\164\x5f\x71\x75\x65\x72\x79\137\164\x61\x78\x5f\161\165\x65\162\x79", function ($syquekoksmgewowm, $_this) { foreach ($syquekoksmgewowm as $uusmaiomayssaecw => $ieqocgiosekoeoqe) { if (!("\x70\x72\157\144\165\143\164\x5f\x76\x69\x73\x69\142\151\154\x69\x74\x79" === ManipulateArray::get($ieqocgiosekoeoqe, self::gmmygyiecgmggaam))) { goto omqiayeucoioqoao; } unset($syquekoksmgewowm[$uusmaiomayssaecw]); omqiayeucoioqoao: igooksugieceoege: } cewmoqyysgsmuiya: return $this->cccesyuceswckkqy($syquekoksmgewowm, $this->eicgqsyqqsccywwq(true)); }, 10, 2); $this->cecaguuoecmccuse("\167\157\157\x63\x6f\x6d\x6d\145\162\143\145\137\x70\162\157\144\x75\x63\164\x5f\x69\x73\137\166\x69\x73\x69\142\x6c\145", function ($ioqywyyeioqywogw, $aokagokqyuysuksm) { return true; }, 10, 2); } public function uikgwcuascgeissw($kesssewsiegssiya) : ?string { $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); return $this->weysguygiseoukqw($ymqmyyeuycgmigyo . self::caieqgyycuwysqkc, ManipulateTaxonomy::qcgakseyaikigqco($kesssewsiegssiya)); } }
