<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb5238a9c8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use WP_Taxonomy; class Container extends BaseClass { const omumymwakeoiwouc = "\164\x61\170\137"; const eigiqicogcmgmgwi = "\160\146"; const cgckcqysmyiikaqw = "\167\x6f\x6f\143\x6f\x6d\155\145\x72\x63\x65\x5f\x66\151\154\164\145\162"; const mkikoewciywmikok = "\137\163\157\x72\164\x5f\x74\145\162\x6d\163"; const uucggqgemiykigga = "\137\163\x6f\162\164\x5f\x6f\162\144\145\162"; const smommoywqawkuceg = "\137\150\x69\144\145\x5f\x65\155\160\x74\x79"; const ssugumysagumgqqm = "\x5f\x66\x69\x65\x6c\x64\x5f\x74\x79\x70\145"; const muquksiqukuayaos = "\137\x63\x6f\x6d\x70\x72\x65\x73\163\151\x6f\156\137\154\157\147\151\143"; const ugygausceickekgo = "\145\x78\x63\x6c\x75\144\145\144\x5f" . self::cgckcqysmyiikaqw; const eyemkmiomkkwessc = self::cgckcqysmyiikaqw . "\x5f\x72\145\x61\x6c\x6c\171\x5f\143\165\x72\162\145\x6e\164\x5f\164\145\162\x6d"; const kgowyeaekuwwskco = "\160\x75\163\150\137\162\145\160\x6c\141\x63\145\x6d\145\x6e\x74\x5f" . self::cgckcqysmyiikaqw; const oqmosiywgecmeqig = "\160\165\x6c\154\x5f\x72\x65\160\x6c\x61\143\x65\155\x65\156\x74\137" . self::cgckcqysmyiikaqw; protected ?Helper $helper = null; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function caokeucsksukesyo() : Helper { if ($this->helper) { goto siqagquguiemuoku; } $this->helper = Helper::symcgieuakksimmu(); siqagquguiemuoku: return $this->helper; } public function qeomwskywaguqyyu() : bool { return $this->weysguygiseoukqw(Setting::ykqqgqskiygugscu, false); } public function guecmwukeoqiwyac($ymqmyyeuycgmigyo) : string { return ManipulateString::wiecmkiugmyyqiqc(self::omumymwakeoiwouc, '', $ymqmyyeuycgmigyo); } public function mqmocoguqcyymgqu() : ?array { return ManipulateWoocommerce::ucqakycuekccuocw(); } public function ieiyuwkyiagkscmk() { $sogksuscggsicmac = []; $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto sycygoiaiqqageym; } $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $sogksuscggsicmac[$ymqmyyeuycgmigyo] = $this->weysguygiseoukqw($ymqmyyeuycgmigyo . self::muquksiqukuayaos, self::iamiiekkgssgeaew); sycygoiaiqqageym: oouoqimaaqcmccay: } ycakugokkqkuqyiu: return $sogksuscggsicmac; } public function wwqoiqcoccacyyyc() : bool { return ManipulateWoocommerce::uiskcesaqyyewwsa(); } public function qacygisasqiuosci() : bool { return (bool) $this->weysguygiseoukqw(Setting::wsyysggyumwguois, false); } }
