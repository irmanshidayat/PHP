<?php
    class PesawatTerbang{
        public $warnaPesawat;

        public function __construct($warnaAwal){
            $this->warnaPesawat = $warnaAwal;
        }

        public function gantiWarna($warnaBaru){
            $this->warnaPesawat = $warnaBaru;
            return $this->warnaPesawat;
        }
        public function setWarna($warnaBaru){
            $this->warnaPesawat = $warnaBaru;
            // return $this->warnaPesawat;
        }
        public function getWarna(){
            return $this->warnaPesawat;
        }
    }

    class Mobil{
        protected $warnaMobil;
        protected $kecepatanMobil;
    
        public function __construct($warnaAwalMobil)
        {
            $this->warnaMobil = $warnaAwalMobil;
            $this->kecepatanMobil = 0;
        }
        public function tambahKecepatan($kecepatan)
        {
            $this->kecepatanMobil = $kecepatan + $this->kecepatanMobil;
        }
        public function setWarna($warnaBaru)
        {
            $this->warnaMobil = $warnaBaru;
        }
        public function getWarna()
        {
            return $this->warnaMobil;
        }
        public function getKecepatan()
        {
            return $this->kecepatanMobil;
        }
    }

    class MobilBalap extends Mobil{
        public function tambahKecepatan($kecepatan){
            $this->kecepatanMobil = (2*$kecepatan) + $this->kecepatanMobil;
        }     
    }

    // -------------------
    // class Lingkaran{
    //     protected $r, $keliling, $luas;
    
    //     public function __construct($jari_jari)
    //     {
    //         $this->r = $jari_jari;
    //     }
    //     public function setJariLingkaran($jari){
    //         $this->r = $jari;
    //     }
    //     public function getKeliling(){
    //         $this->keliling = 3.14 * $this->r * $this->r;
    //         return $this->keliling;
    //     }
    //     public function getLuas(){
    //         $this->luas = 2 * 3.14 * $this->r;
    //         return $this->luas;
    //     }
    // }

    class Lingkaran{
        protected $jariJari;
        public function __construct($r){
            $this->jariJari = $r;
        }
        public function getLuas(){
            $luas = 3.14 * $this->jariJari * $this->jariJari * $this->jariJari;
            return $luas;
        }
        public function getKeliling(){
            $keliling = 2 * 3.14 * $this->jariJari;
            return $keliling;
        }
    }
?>