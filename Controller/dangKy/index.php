<?php
    /**
     * Phat Mai 30-07-2022
     * this is controler to help the dangk ky
     */
    session_start();
    require_once __DIR__ . '/../../Common/backend/dangkylib/index.php';

    $inputs = [];       // store the input return from user send
    $errors = [];       //store the errors message .


    if(isPostRequest()){

        // $_POST = [
        //     'name' => 'tui la leo',
        //     'username' => 'leoahihi',
        //     'telephone' => '123451',
        //     'useremail' => 'leo@gamil.com',
        //     'userpassword' => 'aaaaAaaa@a1',
        //     'userrepassword' => 'aaaaAaaa@a1',
        //     'agree' => 'yes',
        // ];
  
        // this contain the rule sanitization and validations for each field.
        $fields = [
            'name' => 'string| required | lettersAndSpace | between:1,255',
            'username' => 'string    | required | alphanumeric | between: 3,50 | unique:nguoidung,TenDangNhap',
            'telephone' => 'string   |   required   | numbers | between: 3,11 | unique:nguoidung,SoDienThoai',
            'useremail' => 'email   | email',
            'userpassword' => 'string| required | secure',
            'userrepassword' => 'string| required | same:userpassword',
            'agree'=>'string| required',
        ];

        $messages = [
            'name'=>[
                'required'=> 'Vui lòng nhập họ và tên.',
                'lettersAndSpace'=>'Họ và tên chỉ tồn tại ký tự a-z,A-Z và khoảng trắng.',                
            ],
            'username'=>[
                'required'=> 'Vui lòng nhập tài khoản sử dụng.',
                'alphanumeric'=>'tài khoản chỉ bao gồm chữ cái và số.',
                'unique'=>'tài khoản đã tồn tại.',
                ],
            'password2'=>[
                'required'=> 'Please enter the re-password',
                'same'=> 'The repassword must the same with the password',
            ],
            'agree' =>[
                'required'=> 'You need to agree the term of service to register',
            ]
        ];

        [$inputs,$errors] = filter($_POST, $fields,$messages);

        if($errors){
            redirect_with('personalregistration.php',[
                'inputs'=> $inputs,
                'errors'=>$errors,
            ]);
        }

        // var_dump( registerUser($inputs['name'],$inputs['username'],$inputs['telephone'],$inputs['userpassword'],$inputs['useremail']));
        // // die;
        // exit;



        if(registerUser($inputs['name'],$inputs['username'],$inputs['telephone'],$inputs['userpassword'],$inputs['useremail'])){
            redirect_with(
                'login.php',
                [
                    'inputs' => $inputs,
                    'errors' => $errors
                ]
            );
        }else{
            redirect_with('personalregistration.php',[
                'inputs'=> $inputs,
                'errors'=>$errors,
            ]);
        }



        

    }else if(isGetRequest()){
        [$inputs, $errors] = sessionFlash('inputs', 'errors');
    }

//get root directory
// $rootDir = $_SERVER['DOCUMENT_ROOT'];


// // check client request
// // handle register request
// if(isset($_POST["dangKy"])){
//     //kiem tra du lieu dau vao

//     //tao du lieu nguoi dung

//     //tao du lieu to chuc    

//     //thong bao dang ky thanh cong
//     http_response_code(201);
//     $message = "Your account has been registered successfully";
//     include_once $rootDir."\..\View\\register.php";
// } else {
//     // handle load page request
//     http_response_code(200);
//     $message = "OK";
//     include_once $rootDir."\View\userregister.php";
// }