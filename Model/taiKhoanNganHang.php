<?php
    /**
    * Truong Pham 23-07-2022
    * this is a class help to manipulate with database concern to bank account table.
    */

    // Get root directory
    $rootDir = $_SERVER['DOCUMENT_ROOT'];

    // Import database manipulation class
    include_once $rootDir."/../Model/connectdb.php";
    // Construct connection to database
    //$database = new DB_Manipulation();

    // Class manipulation for bank account table
    class TaiKhoanNganHang{

        // Property declaration
        private $soTaiKhoan;
        private $maNguoiDung;
        private $maNganHang;
        private $maChiNhanh;
        private $tenTaiKhoan;
        private $connection; //instance of DB_Manipulation class

        // Method Declaration

        /**
         * Constructor of this class
         * Create a bank account object with OPTIONAL infomation but $maNguoiDung is mandatory
         */
        function __construct($maNguoiDung, $soTaiKhoan = NULL, $maNganHang = NULL, $maChiNhanh = NULL, $tenTaiKhoan = NULL){
            $this->soTaiKhoan = $soTaiKhoan;
            $this->maNguoiDung = $maNguoiDung;
            $this->maNganHang = $maNganHang;
            $this->maChiNhanh = $maChiNhanh;
            $this->tenTaiKhoan = $tenTaiKhoan;
        }

        /**
         * This function is a getter for $maNguoiDung
         * Input: Nothing
         * Output: value of maNguoiDung (int)
         */
        function get_maNguoiDung(){
            return $this->maNguoiDung;
        }

        
        /**
         * This function is a getter for $soTaiKhoan
         * Input: Nothing
         * Output: value of soTaiKhoan (encrypted string)
         */
        function get_soTaiKhoan(){
            return $this->soTaiKhoan;
        }

        /**
         * This function is a getter for $maNganHang
         * Input: nothing
         * Output: maNganHang (int)
         */
        function get_maNganHang(){
            return $this->maNganHang;
        }

        /**
         * This function is a getter for $maChiNhanh
         * Input: nothing
         * Output: maChiNhanh (int)
         */
        function get_maChiNhanh(){
            return $this->maChiNhanh;
        }

        /**
         * This function is a getter for $tenTaiKhoan
         * Input: nothing
         * Output: tenTaiKhoan (encrypted string)
         */
        function get_tenTaiKhoan(){
            return $this->tenTaiKhoan;
        }

        /**
         * This function is a setter for $maNguoiDung
         * Input: $maNguoiDung (int)
         * Output: nothing
         */
        function set_maNguoiDung($maNguoiDung){
            $this->maNguoiDung = $maNguoiDung;
        }

        
        /**
         * This function is a setter for $soTaiKhoan
         * Input: $soTaiKhoan (encripted string)
         * Output: nothing
         */
        function set_soTaiKhoan($soTaiKhoan){
            $this->soTaiKhoan = $soTaiKhoan;
        }

        /**
         * This function is a setter for $maNganHang
         * Input: $maNganHang (int)
         * Output: nothing
         */
        function set_maNganHang($maNganHang){
            $this->maNganHang = $maNganHang;
        }

        /**
         * This function is a setter for $maChiNhanh
         * Input: $maChiNhanh (int)
         * Output: nothing
         */
        function set_maChiNhanh($maChiNhanh){
            $this->maChiNhanh = $maChiNhanh;
        }

        /**
         * This function is a setter for $tenTaiKhoan
         * Input: $tenTaiKhoan (encrypted string)
         * Output: nothing
         */
        function set_tenTaiKhoan($tenTaiKhoan){
            $this->tenTaiKhoan = $tenTaiKhoan;
        }

        /**
         * This function is for retrieving data of bank account table
         * Input: maNguoiDung (int)
         * Output: Infomation of all bank accounts relative with that maNguoiDung (Array)
         */
        function get_data(){
            // Initial DB_manipulation object

            // calling function on database

            // Kill DB_Manipulation object
        }

        /**
         * This function is for inserting data of bank account table
         * Input: no thing
         * Usage: call procedure to insert current infomation of object
         * Output: true on success; false on failure
         */
        function insert_data(){
            // Initial DB_manipulation object

            // calling procedure

            // Kill DB_Manipulation object
        }
    }