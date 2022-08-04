<?php
    /**
     * Phat Mai 30-07-2022
     * this is contain all function help to register feature.
     */

    /**
     * isPostRequest (function): check weather the HTTP method is POST
     * @return (bool)
     */
    function isPostRequest(){
        return strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';
    }

    /**
     * isGetRequest (function): check weather the HTTP method is GET
     * @return (bool)
     */    
    function isGetRequest(){
        return strtoupper($_SERVER['REQUEST_METHOD']) === 'GET';
    }   
    
    /**
     * redirect_to (function): redirect to url immediatly and exit current flow.
     * @param (string) $url: url want to redirect.
     * @return (void).
     */
    function redirect_to(string $url){
        header('Location:'.$url);
        exit;
    }

    /**
     * redirect_with (function): help to keep data into session before redirect to url for using that data later url page.
     * @param (string) $url: url want to redirect
     * @param (array) $items: associative array store data use in url page after redirect.
     * @return (void).
     */
    function redirect_with(string $url, array $items){
        foreach ($items as $key => $value) {
            $_SESSION[$key] = $value;
        }

        redirect_to($url);
    }

    /**
     * sessionFlash (function) : get data from the $_SESSION and clear it to clean Session.
     * @param (mix) ...$keys
     * return (array).
     */
    function sessionFlash(...$keys){
        $data = [];
        foreach($keys as $key){
            if(isset($_SESSION[$key])) {
                $data[] = $_SESSION[$key];
                unset($_SESSION[$key]);
            } else{
                $data[] = [];
            }
        }
        return $data;
    }

    /**
     * registerUser (function): used to insert user to database.
     */
    function registerUser($name,$username,$telephone,$userpassword,$useremail=' '){
        $sql = 'INSERT INTO nguoidung (TenDangNhap,MatKhau,MaPhanVai,SoDienThoai,ThuDienTu) VALUES (?,?,?,?,?)';
        $db_class = new DB_Manipulation();
        $db =$db_class->get_connection();
        $stmt = $db->prepare($sql);
        $phanvai=1;
        $hashPassword = password_hash($userpassword,PASSWORD_BCRYPT);
        $stmt->bind_param("ssiss", 
            $username,
            $hashPassword,
            $phanvai,
            $telephone,
            $useremail
        );
        $inserUser = $stmt->execute();
        if(!$inserUser){
            return $inserUser;
        }
        $sql ='SELECT MaNguoiDung FROM  nguoidung WHERE TenDangNhap = ? limit 1';
        $stmt = $db->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $inseredUser = $result->fetch_assoc(); 
        $inseredUserCode =  $inseredUser['MaNguoiDung'] ;


        $sql = 'INSERT INTO canhan (HoTen,MaNguoiDung) VALUES (?,?)';
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ss", 
            $name,
            $inseredUserCode
        );
        return $stmt->execute();
    }