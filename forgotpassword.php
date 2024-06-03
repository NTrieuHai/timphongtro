<?php
  include './include/connect.php';
  include './include/data.php';
  include 'PHPMailer-master/SendMail.php';
  $err = "";
  $ok = "";
  if($_SERVER["REQUEST_METHOD"] == "POST" ){
    $email = $_POST['email'];
   // Check xem đã tồn tại chưa
    $sqlCheck ="SELECT * FROM tbl_user WHERE email = ?";
    $queryCheck= $conn -> prepare($sqlCheck);
    $queryCheck-> bindParam(':email', $email, PDO::PARAM_STR);
    $queryCheck-> execute([$email]);
    $results = $queryCheck->fetch(PDO::FETCH_OBJ);
    if($queryCheck->rowCount() == 0){  
            $err = 1;
            $error = "Email không tồn tại! Xin vui lòng thử lại"; 
    }
    //đổi pass
    else{
         $newpass = substr(md5(rand(0,999999)),0,8);
         $passHash = password_hash($newpass,PASSWORD_DEFAULT);
         $sqlUpdate ="UPDATE tbl_user SET password = ? WHERE email = ?";
         $queryUpdate= $conn -> prepare($sqlUpdate);
         $queryUpdate-> execute([$passHash,$email]);

         $kq = SendMail($email,$newpass);
         if($kq ==true){
            $ok =1;
            //$successful="$newpass";
             $successful="Chúng tôi đã gửi mật khẩu mới đến Email của bạn thành công!";
         }
        
       
    }//else

  }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quên mật khẩu</title>
    <!-- link-css -->
    <?php include('./include/link-css.php');?>
    <!-- /link-css -->
    
  </head>
  <body>
    <!-- header -->
    <?php include('./include/header.php');?>
    <!-- /header -->

    <div id="main" class="mg-t90">
      <div class="container">
        <!--main-content -->
        <div id="post">
            <div class="post-header">
                <h1 class="page-title">Hãy sử dụng Email mà bạn dùng để đăng ký tài khoản! </h1>
            </div>

            <section class="section section-login">
                <div class="login">
                    <div class="section-header">
                        <h2 class="section-title">Lấy mật khẩu mới</h2>
                    </div>
                    <?php if($err == 1){ ?>
                        <div class="errors">
                            <p>
                                <i class="fa-solid fa-triangle-exclamation" style=" margin-right: 5px;"></i>
                                <?php echo $error?>
                            </p>
                        </div>
                    <?php } 
                    if ($ok == 1){  ?>
                        <div class="successful">
                            <p>
                                <i class="fa-regular fa-circle-check" style=" margin-right: 5px;"></i>
                                <?php echo $successful?>
                            </p>
                        </div>

                        <a style = "text-align: center;display: block;font-size: 18px;" href="./login.php"> >> Đăng nhập ngay</a>

                    <?php } ?>
                    <div class="section-content">
                        <form action="" method="post" id = "frm-register">
                            <div class="form-contact form-validator ">
                                <lable class="contact-title">Email *</lable>
                                <input type="email" name="email" id="email" placeholder="VD: timphong365@gmail.com">
                                <span class="form-message"></span>
                            </div>                            
                            <div class="form-contact">
                                <input type="submit" name = "submit-form" value="Tạo mật khẩu mới" class="btn btn-login submit-button" >
                            </div>
                        </form>
                        <div class="form-footer">
                            <a style="float: right;" href="./login.php">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- main-content -->
        <!-- why-support -->
        <?php include('./include/why-support.php');?>
        <!-- /why-support -->
      </div>
    </div>

    <!-- footer + js-->
    <?php include('./include/footer.php');?>
    <!-- /footer + js -->
    <script>
        Validator({
            form: '#frm-register',
            formGroupSelector: '.form-validator',
            errorSelector: ".form-message",
            rules: [
                // Validator.isRequired('#username'), 
                // Validator.minLength('#username',4,'Tên đăng nhập phải chứa ít nhất 4 ký tự'), 
                // Validator.maxLength('#username',20,'Tên đăng nhập chứa tối đa 20 ký tự'), 
                // Validator.isUserName('#username', 'Tên đăng nhập chỉ bao gồm chữ cái, số, không chứa khoảng trống'), 

                // Validator.isRequired('#password-new'),
                // Validator.isPassword('#password-new',6, 30),

                // Validator.isRequired('#password-confirmation'),
                // Validator.isConfirmed('#password-confirmation', function (){
                //     return document.querySelector('#frm-register #password-new').value;
                // }, 'Mật khẩu không trùng khớp'),

                // Validator.isRequired('#fullname'),

                // Validator.isRequired('#phone'),
                // Validator.isPhone('#phone', 'Số điện thoại gồm 10 số và bắt đầu từ số 0'),

                Validator.isRequired('#email'),
                Validator.isEmail('#email'),
            ],
            
        });
    </script>   

  </body>
</html>