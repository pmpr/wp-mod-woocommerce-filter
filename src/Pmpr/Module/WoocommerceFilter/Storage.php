<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce11f60f809             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; use Exception; class Storage extends Container { const ouqgiccuookgiioq = "\143\157\x6f\x6b\151\145"; const moocuyskywyosass = "\164\x72\141\x6e\x73\151\x65\x6e\x74"; const sokgkegywgcccmwc = "\x73\x65\x73\x73\151\157\x6e"; protected ?string $ip = null; protected ?string $key = null; protected ?string $type = self::moocuyskywyosass; public function __construct($sqeykgyoooqysmca = '') { if (!$sqeykgyoooqysmca) { goto cecuyayqoioasumi; } $this->aseocggwwegcmqes($sqeykgyoooqysmca); cecuyayqoioasumi: if (!($this->gueasuouwqysmomu() === self::moocuyskywyosass && !session_id())) { goto qiaqsassksqiuyae; } try { @session_start(); } catch (Exception $wgaoewqkwgomoaai) { } qiaqsassksqiuyae: $this->ksqoomuuqmwowiim($this->caokeucsksukesyo()->issssuygyewuaswa()->mmscegoieayuaguo()); $this->gcgmwakaoecqcuwo(md5($this->meymqemgekqiawec() . WoocommerceFilter::geiygweugseyomyy . "\163\141\x6c\x74")); parent::__construct(); } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function ksqoomuuqmwowiim(?string $kucumcusyyckayas) : self { $this->ip = $kucumcusyyckayas; return $this; } public function meymqemgekqiawec() : ?string { return $this->ip; } public function gcgmwakaoecqcuwo(?string $uusmaiomayssaecw) : self { $this->key = $uusmaiomayssaecw; return $this; } public function cisyiemkeykgkomc() : ?string { return $this->key; } public function set($uusmaiomayssaecw, $eqgoocgaqwqcimie) { switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: $this->caokeucsksukesyo()->wikusamwomuogoau()->giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie); goto qogqewiwmwiwskgm; case self::sokgkegywgcccmwc: $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $icwicymcioeyeyek = $qkqgcaykemoiecma->igqksmmwesguiaae($this->cisyiemkeykgkomc()); if (is_array($icwicymcioeyeyek)) { goto qwigomakwmyiwkgo; } $icwicymcioeyeyek = []; qwigomakwmyiwkgo: $icwicymcioeyeyek[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $qkqgcaykemoiecma->gawcqwcqgwgucgya($this->cisyiemkeykgkomc(), $icwicymcioeyeyek, DAY_IN_SECONDS); goto qogqewiwmwiwskgm; case self::ouqgiccuookgiioq: setcookie($uusmaiomayssaecw, $eqgoocgaqwqcimie, time() + DAY_IN_SECONDS); goto qogqewiwmwiwskgm; } qgoiooayqmqqsiok: qogqewiwmwiwskgm: } public function get(?string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if (!$uusmaiomayssaecw) { goto cuykwgmswkskqkyi; } switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: if (!$this->has($uusmaiomayssaecw)) { goto csscmcacoikwsecs; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wikusamwomuogoau()->wugwewwmekuaamos($uusmaiomayssaecw); csscmcacoikwsecs: goto myoicgcuugciueis; case self::sokgkegywgcccmwc: $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->igqksmmwesguiaae($this->cisyiemkeykgkomc()); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); goto myoicgcuugciueis; case self::ouqgiccuookgiioq: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($_COOKIE, $uusmaiomayssaecw, $ggauoeuaesiymgee); goto myoicgcuugciueis; } asmecuqiyyswueqe: myoicgcuugciueis: cuykwgmswkskqkyi: return $eqgoocgaqwqcimie; } public function has(?string $uusmaiomayssaecw) : bool { $oyuakceioggwckok = false; if (!$uusmaiomayssaecw) { goto sciwggaeogcoesiu; } switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: $oyuakceioggwckok = $this->caokeucsksukesyo()->wikusamwomuogoau()->mawiagaeusgooyuk($uusmaiomayssaecw); goto kuicqywysciceggs; case self::sokgkegywgcccmwc: $oyuakceioggwckok = !empty($this->get($uusmaiomayssaecw)); goto kuicqywysciceggs; case self::ouqgiccuookgiioq: $oyuakceioggwckok = isset($_COOKIE[$uusmaiomayssaecw]); goto kuicqywysciceggs; } mkwskuycuyguqqok: kuicqywysciceggs: sciwggaeogcoesiu: return $oyuakceioggwckok; } public function remove(?string $uusmaiomayssaecw) { if (!$uusmaiomayssaecw) { goto sqiciiuwmykocycc; } switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: if (!$this->has($uusmaiomayssaecw)) { goto yowsmsiyimmimemc; } $this->caokeucsksukesyo()->wikusamwomuogoau()->aakkiwusygocokce($uusmaiomayssaecw); yowsmsiyimmimemc: goto eqkauqciwewmgeoi; case self::sokgkegywgcccmwc: if (!$this->has($uusmaiomayssaecw)) { goto kiqogmwcgcamwiig; } $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $icwicymcioeyeyek = $qkqgcaykemoiecma->igqksmmwesguiaae($this->cisyiemkeykgkomc()); $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($icwicymcioeyeyek, $uusmaiomayssaecw); $qkqgcaykemoiecma->gawcqwcqgwgucgya($this->cisyiemkeykgkomc(), $icwicymcioeyeyek, DAY_IN_SECONDS); kiqogmwcgcamwiig: goto eqkauqciwewmgeoi; case self::ouqgiccuookgiioq: if (!$this->has($uusmaiomayssaecw)) { goto iomcaiwewsawiamu; } unset($_COOKIE[$uusmaiomayssaecw]); setcookie($uusmaiomayssaecw, '', time() - 3600, "\57"); iomcaiwewsawiamu: goto eqkauqciwewmgeoi; } kwagwqyusyiyoaqs: eqkauqciwewmgeoi: sqiciiuwmykocycc: } }
