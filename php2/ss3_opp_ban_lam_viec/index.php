<?php 
 
 class BanLamViec{
    public $maBan;
    public $loaiBan;
    public $chieuDai;
    public $chieuRong;
    public $chieuCao;
    
    public function __construct( $maBan,$loaiBan,$chieuDai,$chieuRong,$chieuCao) {
        $this->maBan = $maBan;
        $this->loaiBan = $loaiBan;
        $this->chieuDai = $chieuDai;
        $this->chieuRong = $chieuRong;
        $this->chieuCao = $chieuCao;
    }

    function dienTich(){
        return $this->chieuDai * $this->chieuRong;
    }

    function hienThiThongTin(){
       $dientich = $this->dienTich();
       echo "Mã bàn : ". $this->maBan ." có diện tích là ". $dientich;
    }
 }

 $ban1 = new BanLamViec(1,"Bàn Học",3,4,5);
 $ban2 = new BanLamViec(2,"Bàn Ăn",3,4,5);
 $ban1 = new BanLamViec(3,"Bàn Uống nước",10,11,12);

 $ban1->hienThiThongTin();

?>