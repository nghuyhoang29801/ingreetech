<!-- Thực hiện các công việc liên quan đến bảng CaNhan -->

<?php

// get root directory path
$rootDir = $_SERVER['DOCUMENT_ROOT'];

// <!-- import connectdb.php -->
include_once $rootDir."\..\Model\connectdb.php";

// <!-- tạo class, định nghĩa hàm  -->


class CaNhan {
    private $maCaNhan;
    private $hoTen;
    private $maLoaiGiayToTuyThan;
    private $ngayCap;
    private $noiCap;
    private $lienKetAnhGiayTo;
    function __construct($maCaNhan, $hoTen, $loaiGiayTo, $ngayCap, $noiCap, $lienKet){
        $this->maCaNhan = $maCaNhan;
        $this->hoTen = $hoTen;
        $this->$maLoaiGiayToTuyThan = $loaiGiayTo;
        $this->ngayCap = $ngayCap;
        $this->lienKetAnhGiayTo = $lienKet;
    }
    function get_caNhan_by_id($id){
        $sql = "exec ";
    }
}