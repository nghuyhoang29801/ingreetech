<?php
    /**
     * Pham Hoang Truong 23-07-2022
     * This file include a class definition for manipulation on table TheTinDung
     */

    // Get root directory
    $rootDir = $_SERVER['DOCUMENT_ROOT'];

    // Import database manipulation class
    include_once $rootDir."/../Model/connectdb.php";

    // Class for table TheTinDung
    class TheTinDung{

        // Class attribute
        private $maThe;
        private $tenNhaPhatHanh;
        private $hanThe;
        private $maCVV;
        private $maNganHang;
        private $maNguoiDung;
        private $connection; // An instance of DB_Manipulation

        // Method definition

        /**
         * Constructor for this class
         * Usage: create an object with optional infomation but $maThe and $maNguoiDung is mandatory
         * Input: all attribute
         * Output: nothing
         */
        function __constructor($mathe, $maNguoiDung, $tenNhaPhatHanh = NULL, $hanThe = NULL, $maCVV = NULL, $maNganHang = NULL){
            $this->maThe = $mathe;
            $this->tenNhaPhatHanh = $tenNhaPhatHanh;
            $this->hanThe = $hanThe;
            $this->maCVV = $maCVV;
            $this->maNganHang = $maNganHang;
            $this->maNguoiDung = $maNguoiDung;
        }

        /**
         * This function is for retrieving data from database
         * Usage: call sql function to get data about all "the tin dung"  according to $maNguoiDung
         * Input: nothing
         * Ouput: data (array)
         */
        function get_data(){
            // Initial DB_Manipulation class

            // Call sql function

            // Kill DB_Manipulation class

            //return data
        }

        /**
         * This function is for inserting data to database
         * Usage: call sql procedure to insert current data of object to database
         * Input: nothing
         * Output: true on success; false on failure
         */
        function insert_data(){
            // Initial DB_Manipulation class

            // Call sql function

            // Kill DB_Manipulation class

            //return data
        }
    }