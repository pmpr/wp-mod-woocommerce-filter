<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             639215b0e6f82             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\WoocommerceFilter\Setting; use WP_Query; class OnSale extends Element { const isasoemkymwoiqem = "\x6f\x6e\x5f\x73\x61\x6c\x65"; public function __construct() { $this->name = self::isasoemkymwoiqem; $this->type = self::semqugiuwygamias; $this->side = true; $this->title = __("\117\156\40\x53\141\x6c\145", PR__MDL__WOOCOMMERCE_FILTER); $this->description = __("\117\156\x20\x73\141\x6c\145\x20\x63\150\x65\x63\153\142\157\x78\x20\151\156\x20\x73\145\x61\x72\x63\150\40\x66\157\162\155\x20\167\x68\x65\156\40\x69\164\47\x73\x20\156\145\143\x65\163\x73\141\162\171\x2e", PR__MDL__WOOCOMMERCE_FILTER); parent::__construct(); } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $ccouywuicsaqmais = (bool) $this->caokeucsksukesyo()->oiqmuywqkkmuswuc($this->aakmagwggmkoiiyu(), false); if (!$ccouywuicsaqmais) { goto ickcmqoiosquugwe; } $eqgoocgaqwqcimie = array_merge([0], DecoratorWoocommerce::kwoeqqasyqusgmaw()); if ($gqgemcmoicmgaqie instanceof WP_Query) { goto goeoymmqqqeeoime; } if (!is_array($gqgemcmoicmgaqie)) { goto qmiwsequckckoaei; } $gqgemcmoicmgaqie[self::eqomgewoayseioos] = $eqgoocgaqwqcimie; qmiwsequckckoaei: goto eiawsoasmscmqswa; goeoymmqqqeeoime: $gqgemcmoicmgaqie->set(self::eqomgewoayseioos, $eqgoocgaqwqcimie); eiawsoasmscmqswa: ickcmqoiosquugwe: return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } public function yyiecgiosaoeeygg() : array { return [self::qgqyauaqwqmqseim => IconInterface::uaimoioocayauuca, self::ymckmcsiymwqucoq => [Setting::wcwmusaouiqaqeww(self::isasoemkymwoiqem . self::kouiwaoasqgwksas, __("\x45\x6e\141\142\x6c\x65", PR__MDL__WOOCOMMERCE_FILTER), __("\123\150\x6f\167\x20\117\x6e\x20\x73\141\154\x65\x20\x6f\156\x6c\171\40\x63\150\145\x63\153\x62\157\170\40\x69\156\163\151\144\145\40\x66\151\x6c\x74\x65\x72\40\x73\145\x61\162\x63\x68\x20\146\x6f\162\155\x2e", PR__MDL__WOOCOMMERCE_FILTER))]]; } }
