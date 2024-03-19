<div id="footer">
    <div class="container">
    <div class="row">
        <div class="col-3 footer-cubes">
        <a
            class="bottom-logo logo"
            href=""
            title="cho thuê phòng trọ, cho thuê nhà trọ, tìm phòng trọ"
            >
        </a>
        <p><b>Tìm phòng 365</b> tự hào có lượng dữ liệu bài đăng lớn nhất trong lĩnh vực cho thuê phòng trọ và được nhiều người lựa chọn là website uy tín để lựa chọn phòng trọ, thuê nhà, căn hộ, homestay,..</p>
        </div>
        <div class="col-3 footer-cubes">
        <div class="footer-title">Danh mục cho thuê</div>
        <ul class="footer-category category">
            <?php 
            if(isset($dataCate)&&(count($dataCate)>1)){
                foreach($dataCate as $list){
                echo '<li>
                        <h4>
                            <a href="#">'.$list['name'].'</a>
                        </h4>
                        </li>';
                }
            }
            ?>
        </ul>
        </div>
        <div class="col-3 footer-cubes">
        <div class="footer-title">Hỗ trợ khách hàng</div>
        <ul class="footer-support category">
            <li><a href="#">Câu hỏi thường gặp</a></li>
            <li><a href="#">Hướng dẫn đăng tin</a></li>
            <li><a href="#">Bảng giá dịch vụ</a></li>
            <li><a href="#">Quy định đăng tin</a></li>
            <li><a href="#">Giải quyết khiếu nại</a></li>
        </ul>
        </div>
        <div class="col-3 footer-cubes">
        <div class="footer-title">Liên hệ với chúng tôi</div>
        <div class="social-link">
            <a href="http://" target="_blank" rel="nofollow" class="facebook"><i></i></a>
            <a href="http://" target="_blank" rel="nofollow" class="instagram"><i></i></a>
            <a href="http://" target="_blank" rel="nofollow" class="zalo"><i></i></a>
            <a href="tel:" target="_blank" rel="nofollow" class="phone"><i></i></a>
        </div>
        <div class="footer-title">Phương thức thanh toán</div>
        <span class="payment-icon-1"></span>
        <span class="payment-icon-2"></span>
        <span class="payment-icon-3"></span>
        </div>
    </div>
    
    </div>
    <div class="copyright">
        <p>Copyright © Đồ án tốt nghiệp ngành CNTT</p>
    </div>
    <div title="Về đầu trang" id="top-up">
    <i class="fa-solid fa-plane-up"></i>
    </div>

    <div class="social-button">
    <div class="social-button-content">
       <a href="tel:0962873145" class="call-icon" rel="nofollow">
          <i class="fa fa-whatsapp" aria-hidden="true"></i>
          <div class="animated alo-circle"></div>
          <div class="animated alo-circle-fill  "></div>
           <span>Hotline: 0962 873 145</span>
        </a>
        
        <a href="https://www.facebook.com/bosluci.abc" class="mes">
          <i class="fa fa-facebook" aria-hidden="true"></i>
          <span>Nhắn tin Facebook</span>
        </a>
        <a href="https://zaloapp.com/qr/p/1eebdpmpjrc98" class="zalo">
          <i class="fa fa-commenting-o" aria-hidden="true"></i>
          <span>Zalo: 0962.873.145</span>
        </a>
    </div>
       
    <a class="user-support">
      <i class="fa fa-user-circle-o" aria-hidden="true"></i>
      <div class="animated alo-circle"></div>
      <div class="animated alo-circle-fill"></div>
    </a>
  </div>

  <!--Bước 2: Hãy CSS một chút cho nó bắt mắt nhé-->
  <style>
    .social-button{
      display: inline-grid;
        position: fixed;
        bottom: 15px;
        left: 45px;
        min-width: 45px;
        text-align: center;
        z-index: 99999;
    }
    .social-button-content{
      display: inline-grid;   
    }
    .social-button a {padding:8px 0;cursor: pointer;position: relative;}
    .social-button i{
      width: 40px;
        height: 40px;
        background: #43a1f3;
        color: #fff;
        border-radius: 100%;
        font-size: 20px;
        text-align: center;
        line-height: 1.9;
        position: relative;
        z-index: 999;
    }
    .social-button span{
      display: none;
    }
    .alo-circle {
        animation-iteration-count: infinite;
        animation-duration: 1s;
        animation-fill-mode: both;
        animation-name: zoomIn;
        width: 50px;
        height: 50px;
        top: 3px;
        right: -3px;
        position: absolute;
        background-color: transparent;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid rgba(30, 30, 30, 0.4);
        opacity: .1;
        border-color: #0089B9;
        opacity: .5;
    }
    .alo-circle-fill {
      animation-iteration-count: infinite;
      animation-duration: 1s;
      animation-fill-mode: both;
      animation-name: pulse;
        width: 60px;
        height: 60px;
        top: -2px;
        right: -8px;
        position: absolute;
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -ms-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid transparent;
        background-color: rgba(0, 175, 242, 0.5);
        opacity: .75;
    }
    .call-icon:hover > span, .mes:hover > span, .sms:hover > span, .zalo:hover > span{display: block}
    .social-button a span {
        border-radius: 2px;
        text-align: center;
        background: rgb(103, 182, 52);
        padding: 9px;
        display: none;
        width: 180px;
        margin-left: 10px;
        position: absolute;
        color: #ffffff;
        z-index: 999;
        top: 9px;
        left: 40px;
        transition: all 0.2s ease-in-out 0s;
        -moz-animation: headerAnimation 0.7s 1;
        -webkit-animation: headerAnimation 0.7s 1;
        -o-animation: headerAnimation 0.7s 1;
        animation: headerAnimation 0.7s 1;
    }
    @-webkit-keyframes "headerAnimation" {
        0% { margin-top: -70px; }
        100% { margin-top: 0; }
    }
    @keyframes "headerAnimation" {
        0% { margin-top: -70px; }
        100% { margin-top: 0; }
    }
    .social-button a span:before {
      content: "";
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 10px 10px 10px 0;
      border-color: transparent rgb(103, 182, 52) transparent transparent;
      position: absolute;
      left: -10px;
      top: 10px;
    }
  </style>

  <!--Bước 3: Thêm 1 chút hiệu ứng vào nữa là Ok rồi!-->
  <script>
  $(document).ready(function(){
    $('.user-support').click(function(event) {
      $('.social-button-content').slideToggle();
    });
    });
</script>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
    type="text/javascript"
    src="https://code.jquery.com/jquery-1.11.0.min.js"
></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
<script
    type="text/javascript"
    src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
></script>
<script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
></script>
<!-- select search -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="./js/getdata.js"></script>
<script src="./js/validator-form.js"></script>
<script src="./js/script.js"></script>
