<!doctype html>
<!--
	Lamoda by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


<html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
	  <title>Trang chủ | Công ty TNHH ABC Company</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">		
		
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      

     <!--styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" href="css/etlinefont.css">
    <link href="css/style.css" type="text/css"  rel="stylesheet"/>


   <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    
	<body  data-spy="scroll" data-target="#main-menu">

  <?php 
<<<<<<< HEAD
    // Câu lệnh dùng để in dữ liệu ra màn hình  
    echo "Chào mừng bạn đã ghé thăm Website của tôi";

    # Câu lệnh in ra ngày giờ ở thời điểm hiện tại
    echo "<br><br>Hiện tại là ngày: ".date("d-m-Y H:i:s");

    /* Câu lệnh này dùng để xử lý sâu ký tự */
    echo "<br>".substr("Le Cong Hoa", 8, 3);

    // Khai báo biến tên lớp trong PHP; in ra & thử check xem biến đó có kiểu dữ liệu là gì?
    $ten_lop = "K22HTTTC";
    $tuoi = 21;
    $nam_sinh = 2001;

    # Thử nghiệm câu lệnh print_r
    print_r("<br>".$ten_lop);

    # Thử check xem kiểu dữ liệu của nó là gì
    print_r("<br>".gettype($ten_lop));
    print_r("<br>".gettype($tuoi));
    print_r("<br>".gettype($nam_sinh));

    # Thử 1 biến đã được gán giá trị hay chưa?
    if (isset($nam_sinh)==1) {
      echo "<br> Biến $nam_sinh đã được gán giá trị";
    } else {
      echo "<br> Biến $nam_sinh chưa được gán giá trị";
    }

    unset($nam_sinh);
    if (isset($nam_sinh)==1) {
      echo "<br> Biến $nam_sinh đã được gán giá trị";
    } else {
      echo "<br> Biến $nam_sinh chưa được gán giá trị";
    }

    $nam_sinh = 2001;
    if (empty($nam_sinh)==1) {
      echo "Biến NĂM SINH rỗng";
    } else {
      echo "Biến NĂM SINH không rỗng";
    }
    
    $diem_chuan = 26.3;
    echo "<br><br>"."Điểm chuẩn vào Khoa HTTTQL năm 2021 là: ".$diem_chuan." điểm."."<br><br>";

    $ket_qua_tuyen_sinh;  // Đỗ hoặc Trượt
    $diem_thi = 25;

    // Cách 1: Sử dụng tới 5 dòng mã lệnh
    // if ($diem_thi>=$diem_chuan) {
    //   $ket_qua_tuyen_sinh = "Đỗ";
    // } else {
    //   $ket_qua_tuyen_sinh = "Trượt";
    // }

    // Cách 2: Sử dụng 1 dòng mã lệnh là giải quyết được
    $ket_qua_tuyen_sinh = $diem_thi>=$diem_chuan ? "Đỗ" : "Trượt";

    echo "<br><br>Kết quả thi đại học của bạn là: ".$ket_qua_tuyen_sinh."<br><br>";
    
    // Thử nghiệm vòng lặp FOR trong PHP
    for ($i=1; $i <= 5; $i++) { 
      echo "<br>Lần lặp thứ ".$i.", giá trị = ".$i*$i;
    }

    // Thử nghiệm câu lệnh var_dump();
    var_dump($ten_lop);

    // Khởi tạo 1 mảng 1 chiều trong PHP chỉ có giá trị
    $sinh_vien = array("Trần Thu An", "Nguyễn Ngọc Anh", "Nguyễn Linh Chi", "Trần Quốc Cường", "Hà Anh Tuấn");

    // Cách 1: In thông tin của các phần tử trong mảng thông qua truy cập trực tiếp từng phần tử
    echo "<br>Bạn sinh viên viên thứ 1 là: ".$sinh_vien[0];
    echo "<br>Bạn sinh viên viên thứ 2 là: ".$sinh_vien[1];
    echo "<br>Bạn sinh viên viên thứ 3 là: ".$sinh_vien[2];
    echo "<br>Bạn sinh viên viên thứ 4 là: ".$sinh_vien[3];
    echo "<br>Bạn sinh viên viên thứ 5 là: ".$sinh_vien[4];

    // Cách 2: In thông tin của các phần tử trong mảng thông qua vòng lặp FOR
    $so_luong_phan_tu = count($sinh_vien);
    echo "<br>Mảng SINH VIÊN gồm: ".$so_luong_phan_tu." phần tử";

    for ($i=0; $i < $so_luong_phan_tu; $i++) { 
      echo "<br>Cách 2: Thông tin tạn sinh viên thứ ".($i+1)." là: ".$sinh_vien[$i];
    }

    // Khởi tạo 1 mảng 1 chiều trong PHP nhưng nó có chỉ số
    $hoc_vien = array("gioi_tinh" => "Nam", "so_thich" => "Nghe nhạc, Chơi thể thao", "thu_nhap" => "10.000.000 đ/tháng", "phuong_tien_di_chuyen" => "Xe máy Air Blate");

    // Cách 1: In thông tin của mảng trên thông qua truy xuất trực tiếp từng phần tử trong mảng
    echo "<br>Thông tin của bạn Học viên X có giới tính là".$hoc_vien["gioi_tinh"]." ; sở thích là: ".$hoc_vien["so_thich"]." ; có thu nhập thụ động ngay từ khi còn ngồi trên ghế nhà trường là: ".$hoc_vien["thu_nhap"]." ; có phương tiện di chuyển là: ".$hoc_vien["phuong_tien_di_chuyen"];

    // Cách 2: In thông tin của mảng trên thông qua vòng lặp FOR
    foreach ($hoc_vien as $key => $value) {
      echo "<br>Bạn học viên có ".$key." là: ".$value;
    }

    /*
    Khai báo 1 mảng 2 chiều trong PHP
    Tên Sản phẩm          Số lượng còn          Giá bán
    iPhone 13             5                     33.000.000đ
    iPad 4                20                    18.000.000đ
    Macbook Pro M1        2                     31.500.000đ  
    */

    // Khai báo mảng 2 chiều này
    $san_pham = array(
        array("iPhone 13", 5, 33000000),
        array("iPad 4", 20, 18000000),
        array("Macbook Pro M1", 2, 31500000)
    );

    // In ra thông tin liên quan đến từng sản phẩm trong mảng 2 chiều trên "Tên sản phẩm (Giá bán)"
    echo "<br>Sản phẩm thứ 1: ".$san_pham[0][0]." (".$san_pham[0][2].")";
    echo "<br>Sản phẩm thứ 2: ".$san_pham[1][0]." (".$san_pham[1][2].")";
    echo "<br>Sản phẩm thứ 3: ".$san_pham[2][0]." (".$san_pham[2][2].")";

    // Thử khai bảo 1 LỚP (CLASS) trong PHP
    class xe_hoi
    {
      # Thuộc tính trong lớp XE HƠI
      public $hang_xe;
      public $ten_xe;
      public $mau_sac;
      public $nam_san_xuat;

      # Phương thức 1: tác dụng nó sẽ gán giá trị cho thuộc tính $ten_xe
      function khai_bao_ten_xe($ten_xe)
      {
        $this->ten_xe = $ten_xe;
      }
    }

    // Khởi tạo 1 đối tượng XE HƠI từ lớp XE HƠI mà chúng ta mới tạo ra
    $mazda = new xe_hoi();

    // Thực hiện phương thức Khai báo tên xe
    $mazda->khai_bao_ten_xe("Mazda CX8");

    // IN tên của xe mà các bạn mới khởi tạo
    echo "<br>Tên xe mà bạn vừa đề cập là: ".$mazda->ten_xe;
  ?>

=======
    echo "Chào mừng bạn đã ghé thăm Website của tôi";
  ?>

  <?php 
    echo "<br><br>Hiện tại là ngày: ".date("d-m-Y H:i:s");

    echo "<br>".substr("Le Cong Hoa", 8, 3);
  ?>

 

>>>>>>> 61ce33b286cd5afe6725c20742d4f3667242d767
  <!--Start Page loader -->
  <div id="pageloader">   
        <div class="loader">
          <img src="images/progress.gif" alt='loader' />
        </div>
   </div>
   <!--End Page loader -->
   
      
   <!--Start Navigation-->
		<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only">Toggle navigation</span>
								<span class="fa fa-bars"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                            <!--Start Logo -->
							<div class="logo-nav">
								<a href="index.html">
									<img src="images/logo.png" alt="Company logo" />
								</a>
							</div>
                            <!--End Logo -->
							<div class="clear-toggle"></div>
							<div id="main-menu" class="collapse scroll navbar-right">
								<ul class="nav">
                                
									<li class="active"> <a href="#home">Trang chủ</a> </li>
									
									<li> <a href="#about">Giới thiệu</a> </li>
                                    
                                    <li> <a href="#history">Lịch sử</a> </li>
                                    
                                    <li> <a href="#works">Sản phẩm</a> </li>
                                    
                                     <li> <a href="#team">Chuyên gia</a> </li>
                                   
								    <li> <a href="#services">Dịch vụ</a> </li>
																		
									<li> <a href="#blog">Tin tức</a></li>
                                    
                                    <li> <a href="#testimonials">Phản hồi</a></li>
                                     
									<li> <a href="#contact">Liên hệ</a> </li>
										
								</ul>
							</div><!-- end main-menu -->
						</div>
					</div>
				</div>
			</header>
    <!--End Navigation-->

      
        <!-- Start Slider  -->
        <section id="home" class="home">
             <div class="slider-overlay"></div>
            <div class="flexslider">
                <ul class="slides scroll">
                    <li class="first">
                        <div class="slider-text-wrapper">  
                            <div class="container">
                                <div class="big">Giải pháp </div>          
                                <div class="small">ABC : Doanh nghiệp lớn</div>
                                <a href="#works" class="middle btn btn-white">Chi tiết</a>
                            </div>       
                        </div>
                        <img src="images/slider/1.jpg" alt="">
                    </li>
                    
                    <li class="secondary">
                        <div class="slider-text-wrapper"> 
                            <div class="container">                       
                                <div class="big">Giải pháp </div>          
                                <div class="small">ABC : Doanh nghiêp nhỏ và vừa</div>
                                <a href="#works" class=" middle btn btn-white">Chi tiết</a>
                            </div>
                         </div>
                        <img src="images/slider/2.jpg" alt="">
                    </li>
                    
                    <li class="third">
                        <div class="slider-text-wrapper"> 
                            <div class="container">                              
                                <div class="big">Giải pháp </div>          
                                <div class="small">ABC : Doanh nghiệp FDA</div>
                                <a href="#works" class="middle btn btn-white">Chi tiết</a>
                             </div>
                        </div>
                        <img src="images/slider/3.jpg" alt="">
                    </li>
                </ul>
            </div>
        </section>
          <!-- End Slider  -->


  <!--Start Features-->
  <section  id="about" class="section">
       <div class="container">
           <div class="row">
              
              <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                      <i class="fa fa-leaf"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Clean & Modern Design</h4>
                         <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                      </div>
                  </div>
              </div>
 
               <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                      <i class="fa fa-paper-plane"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Illustration</h4>
                         <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                      </div>
                  </div>
              </div>

               <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                     <i class="fa fa-life-saver"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>App Development</h4>
                         <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                      </div>
                  </div>
              </div>
 
               <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                      <i class="fa fa-paint-brush"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Web Development</h4>
                         <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                      </div>
                  </div>
              </div>

              <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                     <i class="fa fa-line-chart"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Digital Design</h4>
                         <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                      </div>
                  </div>
              </div>

              <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                      <i class="fa fa-gift"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Fully Responsive</h4>
                         <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                      </div>
                  </div>
              </div>

              
           </div> <!-- /.row-->
       </div> <!-- /.container-->
  </section> 
  <!--End Features-->

 
  <!-- Start Facts-->
  <section id="facts" class="section parallax">
    <div class="overlay"></div>
       <div class="container">
           <div class="row">
                  
                <!-- Start Item-->
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                    <span><i class="icon-happy"></i></span>
                    <h3>500 +</h3>
                    <span>Khách hàng</span>
                </div>
                <!-- End Item-->
 
                 <!-- Start Item-->
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                 <span><i class="icon-presentation"></i></span>
                    <h3>250 +</h3>
                    <span>Dự án</span>
                </div>
                <!-- End Item-->

                 <!-- Start Item-->
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                 <span><i class="icon-target"></i></span>
                    <h3>150+ %</h3>
                    <span>Tăng trưởng</span>
                </div>
                <!-- End Item-->

                 <!-- Start Item-->
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                 <span><i class="icon-trophy"></i></span>
                    <h3>15</h3>
                    <span>Giải thưởng</span>
                </div>
                <!-- End Item-->

             </div> <!-- /.row -->
       </div> <!-- /.container -->
  </section>
  <!--End Facts-->

  
  <!--Start Section-->
 <section class="section">
      <div class="container">
          <div class="row"> 
                <div class="col-md-12">
					<div class="content-tab-1">
						<ul class="nav">
							<li class="active">
								<a aria-expanded="true" href="#tab-content-1" data-toggle="tab">
								<i class="fa fa-desktop"></i>
								<h4>Responsive</h4>
								</a>
								<div class="tab-arrow">
								</div>
							</li>
                            
							  <li>
								<a aria-expanded="true" href="#tab-content-2" data-toggle="tab">
								<i class="fa fa-cubes"></i>
								<h4>Flexible</h4>
								</a>
								<div class="tab-arrow">
								</div>
							</li>
                            
							<li>
								<a aria-expanded="true" href="#tab-content-3" data-toggle="tab">
								<i class="fa fa-institution"></i>
								<h4>Support</h4>
								</a>
								<div class="tab-arrow">
								</div>
							</li>
                            
							  <li>
								<a aria-expanded="true" href="#tab-content-4" data-toggle="tab">
								<i class="fa fa-pagelines"></i>
								<h4>Clean Design</h4>
								</a>
								<div class="tab-arrow">
								</div>
							</li>
                            
							  <li>
								<a aria-expanded="true" href="#tab-content-5" data-toggle="tab">
								<i class="fa fa-pie-chart"></i>
								<h4>Easy to Use</h4>
								</a>
								<div class="tab-arrow">
								</div>
							</li>
                            
						</ul>
                        
						<div class="tab-content-main">
								<div class="container">
									<div class="tab-content">
										<div class="tab-pane active in" id="tab-content-1">
											
                                           <!-- Features Icon-->	
                                            <div class="col-md-6 margin-bottom-30">
                                                <div class="tab1-features">
                                                    <div class="icon"> <i class="fa fa-star-o"></i> </div>
                                                    <div class="info">
                                                        <h4>Dedicated Support & Updates</h4>
                                                        <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet. Et netus et malesuada fames ac turpis egestas tristique senectus. </p>
                                                    </div>
                                                </div>
                                                
                                                <div class="tab1-features">
                                                    <div class="icon"> <i class="fa fa-codepen"></i> </div>
                                                    <div class="info">
                                                        <h4>multipurpose theme</h4>
                                                        <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet. Et netus et malesuada fames ac turpis egestas tristique senectus. </p>
                                                    </div>
                                                </div>
                                              
                                                <div class="tab1-features">
                                                    <div class="icon"> <i class="fa fa-heart-o"></i></div>
                                                    <div class="info">
                                                        <h4>Design With Love</h4>
                                                        <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet. Et netus et malesuada fames ac turpis egestas tristique senectus. </p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!--End features Icon-->
                                            
                                           
                                          <!--  Start Carousel-->
                                          <div class="col-md-6">
                                              <div class="tab-carousel">
                                                    <div class="item"><img src="images/works/img4.jpg" alt=""></div>
                                                    <div class="item"><img src="images/works/img5.jpg" alt=""></div>
                                                    <div class="item"><img src="images/works/img6.jpg" alt=""></div>						 
                                              </div>
                                          </div>
                                          <!-- End Carousel-->                                            
                                            
										</div>
                                       <!-- End Tab content 1-->
                                        
                                        
                                       <!-- Start Tab content 2-->
										<div class="tab-pane" id="tab-content-2">
											 
                                            <div class="col-md-4">
                                                 <div class="tab2-services-box">
                                                     <div class="media">
                                                         <img src="images/services1.jpg"  alt="services"/>
                                                     </div>
                                                     
                                                     <div class="services-info">
                                                         <h4>Our History</h4>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                     </div>
                                                     
                                                 </div>
                                            </div>
                                            
                                           <div class="col-md-4">
                                                 <div class="tab2-services-box">
                                                     <div class="media">
                                                         <img src="images/services2.jpg"  alt="services"/>
                                                     </div>
                                                     
                                                     <div class="services-info">
                                                         <h4>What We Do</h4>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                     </div>
                                                     
                                                 </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                 <div class="tab2-services-box">
                                                     <div class="media">
                                                         <img src="images/services3.jpg"  alt="services"/>
                                                     </div>
                                                     
                                                     <div class="services-info">
                                                         <h4>Our Mission</h4>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                     </div>
                                                     
                                                 </div>
                                            </div> 
                                            	
										</div>
                                        
                                        
										<div class="tab-pane" id="tab-content-3">
                                                
                                       <div class="features-tab3">
                                        
                                            <!--Start Features Left-->
                                            <div class="col-md-4">
                                                <div class="features-left m-bot-30">
                                                        <!--Features Item #1-->
                                                        <div class="features-item">
                                                            <div class="features-icon"> <i class="fa fa-pagelines"></i> </div>
                                                            <div class="features-info">
                                                               <h4>Multipurpose & Responsive</h4>
                                                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                            </div>
                                                        </div>
                                                        
                                                        <!--Features Item #2-->
                                                        <div class="features-item">
                                                            <div class="features-icon"> <i class="fa fa-trophy"></i> </div>
                                                            <div class="features-info">
                                                               <h4>Creative Design</h4>
                                                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                            </div>
                                                        </div>
                                    
                                                        <!--Features Item #3-->
                                                        <div class="features-item">
                                                            <div class="features-icon"> <i class="fa fa-tag"></i> </div>
                                                            <div class="features-info">
                                                               <h4>Awesome Theme</h4>
                                                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                 </div>
                                           <!--End Features Left--> 
                                           
                                           <!--Start Features Image-->
                                           <div class="col-md-4 hidden-xs m-bot-30">
                                                <img src="images/device.png" alt="Features Image" />
                                           </div>
                                           <!--End Features Image-->
                                           
                                           <!--Start Features Right-->
                                           <div class="col-md-4">
                                               <div class="features-right m-bot-30">
                                                 <!--Features Item #1-->
                                                <div class="features-item">
                                                    <div class="features-icon"> <i class="fa fa-eyedropper"></i> </div>
                                                    <div class="features-info">
                                                       <h4>Strategy Solutions</h4>
                                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                    </div>
                                                </div>
                                
                                                <!--Features Item #2-->
                                                <div class="features-item">
                                                    <div class="features-icon"> <i class="fa fa-search-plus"></i> </div>
                                                    <div class="features-info">
                                                       <h4>App Development</h4>
                                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                    </div>
                                                </div>
                                
                                                <!--Features Item #3-->
                                                <div class="features-item">
                                                    <div class="features-icon"> <i class="fa fa-send-o"></i> </div>
                                                    <div class="features-info">
                                                       <h4>HTML5 & CSS3</h4>
                                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                    </div>
                                                </div>
                                                  
                                               </div>
                                           </div>
                                           <!--End Features Right -->
                                        </div> 
                                                
									</div>
                                        
										<div class="tab-pane" id="tab-content-4">
												
											<div class="tab-content-4">
                                                
                                                <div class="col-md-3">
                                                    <div class="tab4-services-box">
                                                        <div class="icon"><i class="fa fa-bolt"></i> </div>
                                                        <div class="info">
                                                            <h4>Simple and Clean Codes</h4>
                                                            <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
viverra purus tristique.</p>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="tab4-services-box">
                                                        <div class="icon"><i class="fa fa-fire"></i> </div>
                                                        <div class="info">
                                                            <h4>Responsive Layout Design</h4>
                                                            <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
viverra purus tristique.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="tab4-services-box">
                                                        <div class="icon"><i class="fa fa-chain"></i> </div>
                                                        <div class="info">
                                                            <h4>Unlimited Support</h4>
                                                            <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
viverra purus tristique.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="tab4-services-box">
                                                        <div class="icon"><i class="fa fa-shopping-cart"></i> </div>
                                                        <div class="info">
                                                            <h4>multipurpose theme</h4>
                                                            <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
viverra purus tristique.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </div>	
                                                
										</div>
                                        
                                        
										<div class="tab-pane" id="tab-content-5">
										    
                                            <div class="tab-content-5">
                                                
                                                <div class="col-md-6">
                                                     <div class="core-features">
                                                       
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing aliquam. Vestibulum in vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing aliquam. Vestibulum in vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing.</p>
                                                         
                                                   <ul class="list">
                                                        <li>Font-Awesome Integration</li>
                                                        <li>Multiple unique designs</li>
                                                        <li>Clean coded, responsive and multipurpose</li>
                                                        <li>Pages valid on w3c.</li>
                                                        <li>Well documented.</li>
                                                        <li>Easy to  customization.</li>
                                                    </ul>
                                                         
                                               </div>
                                                </div>
                                                
                                                
                                                <div class="col-md-6">
                                                    <div class="devices-image">
                                                        <img src="images/device-desktop.png" alt=""/>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
										</div>
                                        
									</div>
								</div>
						  </div>
                        <!--/.tab-content-main-->  
					</div>
				</div>
              
            </div> <!--/.row-->  
      </div> <!--/.container-->
  </section>
  <!--End Section-->
  
   
     <!--Start History-->
    <section id="history" class="section parallax">
		<div class="overlay"></div>
            <div class="container">
                
                 <div class="title-box text-center white">
                    <h2 class="title">Lịch sử thành lập công ty</h2>
                 </div>
                 
                     <!-- History Timeline -->
                    <ul class="timeline list-unstyled">
                        
                        <li class="year">2004</li>
                        
                        <!--History Item -->
                        <li class="timeline-item">
                            <h4>Công ty ABC thành lập 10/2004</h4>
                            <p>Công ty ABC thành lập ngày 10/10/2004. Người sáng lập là tỷ phú Trần Thu An</p>
                            <span> 10/10/2004</span>
                        </li>
                        <!-- End Item -->
                        
                        <!--History Item -->
                        <li class="timeline-item">
                            <h4>Công ty ABC giới thiệu giải pháp ABC : FDA</h4>
                            <p>Đây là giải pháp kết nối thông tin phục vụ quản lý điều hành tại các công ty liên doanh nước ngoài</p>
                            <span> 30/10/2004</span>
                        </li>
                        <!-- End Item -->
                        
                        <!-- History Year -->
                        <li class="year">2015</li>
                        
                        
                        <!--History Item -->
                        <li class="timeline-item">
                            <h4>Lorem ipsum dolor consectetur adipisicing.</h4>
                            <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                            <span> 10 OCT 2015</span>
                        </li>
                        <!-- End Item -->
                        
                        <!--History Item -->
                        <li class="timeline-item">
                            <h4>Lorem ipsum dolor consectetur adipisicing.</h4>
                            <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                            <span> 11 OCT 2014</span>
                        </li>
                        <!-- End Item -->
                        
                         <!--History Item -->
                        <li class="timeline-item">
                            <h4>Lorem ipsum dolor consectetur adipisicing.</h4>
                            <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                            <span> 18 OCT 2015</span>
                        </li>
                        <!-- End Item -->
                        
                         <li class="clear"></li>
                        
                        <li class="end-icon fa fa-bookmark"></li>
                    </ul>
                   <!-- End History Timeline -->
                   
           </div> <!--/.container-->
	</section>
   <!--End History-->
   

   <!--Start portfolio-->
   <section id="works" class="section">
				<!-- Filtering -->
                  <div class="title-box text-center">
                    <h2 class="title">Our Work</h2>
                 </div>


					<div class=" col-md-12 text-center">
						<!-- Filtering -->
						<ul class="filtering">
							<li class="filter" data-filter="all">All</li>
							<li class="filter" data-filter="fashion">Fashion</li>
							<li class="filter" data-filter="event">Events</li>
							<li class="filter" data-filter="wedding">Wedding</li>
							<li class="filter" data-filter="corporate">Corporate</li>
						</ul>
					</div>
                
				<div class="work-main">
					<!-- Work Grid -->
					<ul class="work-grid">
						<!-- Work Item -->
						<li class="work-item thumnail-img mix corporate">
							<div class="work-image">
                                <img src="images/works/img1.jpg" alt="thumbnail">
                                
                                 <!--Hover link-->
                                 <div class="hover-link">
                                    <a href="single-work.html">
                                        <i class="fa fa-link"></i>
                                    </a>
        
                                    <a href="images/works/img1.jpg" class="popup-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                 </div>
                                 <!--End link-->

                                 <!--Hover Caption-->
                                 <div class="work-caption">
                                     <h4>Project Title</h4>
                                     <p>Photography</p>
                                 </div>
                                 <!--End Caption-->

                            </div> <!-- /.work-image-->
						</li> 
						<!--End Work Item -->
                        
						<!-- Work Item -->
						<li class="work-item thumnail-img mix fashion wedding">
							<div class="work-image">
                                <img src="images/works/img2.jpg" alt="thumbnail">
                                
                                 <!--Hover link-->
                                 <div class="hover-link">
                                    <a href="single-work.html">
                                        <i class="fa fa-link"></i>
                                    </a>
        
                                    <a href="images/works/img2.jpg" class="popup-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                 </div>
                                 <!--End link-->

                                 <!--Hover Caption-->
                                 <div class="work-caption">
                                     <h4>Project Title</h4>
                                     <p>Photography</p>
                                 </div>
                                 <!--End Caption-->

                            </div> <!-- /.work-image-->
						</li> 
						<!--End Work Item -->
                        
						<!-- Work Item -->
						<li class="work-item thumnail-img mix corporate">
							<div class="work-image">
                                <img src="images/works/img3.jpg" alt="thumbnail">
                                
                                 <!--Hover link-->
                                 <div class="hover-link">
                                   <a href="single-work.html">
                                        <i class="fa fa-link"></i>
                                    </a>
        
                                    <a href="images/works/img3.jpg" class="popup-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                 </div>
                                 <!--End link-->

                                 <!--Hover Caption-->
                                 <div class="work-caption">
                                     <h4>Project Title</h4>
                                     <p>Photography</p>
                                 </div>
                                 <!--End Caption-->

                            </div> <!-- /.work-image-->
						</li> 
						<!--End Work Item -->

						<!-- Work Item -->
						<li class="work-item thumnail-img mix corporate">
							<div class="work-image">
                                <img src="images/works/img4.jpg" alt="thumbnail">
                                
                                 <!--Hover link-->
                                 <div class="hover-link">
                                    <a href="single-work.html">
                                        <i class="fa fa-link"></i>
                                    </a>
        
                                    <a href="images/works/img4.jpg" class="popup-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                 </div>
                                 <!--End link-->

                                 <!--Hover Caption-->
                                 <div class="work-caption">
                                     <h4>Project Title</h4>
                                     <p>Photography</p>
                                 </div>
                                 <!--End Caption-->

                            </div> <!-- /.work-image-->
						</li> 
						<!--End Work Item -->
                        
						<!-- Work Item -->
						<li class="work-item thumnail-img mix fashion wedding">
							<div class="work-image">
                                <img src="images/works/img5.jpg" alt="thumbnail">
                                
                                 <!--Hover link-->
                                 <div class="hover-link">
                                    <a href="single-work.html">
                                        <i class="fa fa-link"></i>
                                    </a>
        
                                    <a href="images/works/img5.jpg" class="popup-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                 </div>
                                 <!--End link-->

                                 <!--Hover Caption-->
                                 <div class="work-caption">
                                     <h4>Project Title</h4>
                                     <p>Photography</p>
                                 </div>
                                 <!--End Caption-->

                            </div> <!-- /.work-image-->
						</li> 
						<!--End Work Item -->
						
						<!-- Work Item -->
						<li class="work-item thumnail-img mix event wedding">
							<div class="work-image">
                                <img src="images/works/img6.jpg" alt="thumbnail">
                                
                                 <!--Hover link-->
                                 <div class="hover-link">
                                    <a href="single-work.html">
                                        <i class="fa fa-link"></i>
                                    </a>
        
                                    <a href="images/works/img6.jpg" class="popup-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                 </div>
                                 <!--End link-->

                                 <!--Hover Caption-->
                                 <div class="work-caption">
                                     <h4>Project Title</h4>
                                     <p>Photography</p>
                                 </div>
                                 <!--End Caption-->

                            </div> <!-- /.work-image-->
						</li> 
						<!--End Work Item -->

						<!-- Work Item -->
						<li class="work-item thumnail-img mix event">
							<div class="work-image">
                                <img src="images/works/img7.jpg" alt="thumbnail">
                                
                                 <!--Hover link-->
                                 <div class="hover-link">
                                    <a href="single-work.html">
                                        <i class="fa fa-link"></i>
                                    </a>
        
                                    <a href="images/works/img7.jpg" class="popup-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                 </div>
                                 <!--End link-->

                                 <!--Hover Caption-->
                                 <div class="work-caption">
                                     <h4>Project Title</h4>
                                     <p>Photography</p>
                                 </div>
                                 <!--End Caption-->

                            </div> <!-- /.work-image-->
						</li> 
						<!--End Work Item -->

						<!-- Work Item -->
						<li class="work-item thumnail-img mix corporate">
							<div class="work-image">
                                <img src="images/works/img8.jpg" alt="thumbnail">
                                
                                 <!--Hover link-->
                                 <div class="hover-link">
                                    <a href="single-work.html">
                                        <i class="fa fa-link"></i>
                                    </a>
        
                                    <a href="images/works/img8.jpg" class="popup-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                 </div>
                                 <!--End link-->

                                 <!--Hover Caption-->
                                 <div class="work-caption">
                                     <h4>Project Title</h4>
                                     <p>Photography</p>
                                 </div>
                                 <!--End Caption-->

                            </div> <!-- /.work-image-->
						</li> 
						<!--End Work Item -->

						<!-- Work Item -->
						<li class="work-item thumnail-img mix event">
							<div class="work-image">
                                <img src="images/works/img9.jpg" alt="thumbnail">
                                
                                 <!--Hover link-->
                                 <div class="hover-link">
                                    <a href="single-work.html">
                                        <i class="fa fa-link"></i>
                                    </a>
        
                                    <a href="images/works/img9.jpg" class="popup-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                 </div>
                                 <!--End link-->

                                 <!--Hover Caption-->
                                 <div class="work-caption">
                                     <h4>Project Title</h4>
                                     <p>Photography</p>
                                 </div>
                                 <!--End Caption-->

                            </div> <!-- /.work-image-->
						</li> 
						<!--End Work Item -->

						<!-- Work Item -->
						<li class="work-item thumnail-img mix wedding">
							<div class="work-image">
                                <img src="images/works/img10.jpg" alt="thumbnail">
                                
                                 <!--Hover link-->
                                 <div class="hover-link">
                                    <a href="single-work.html">
                                        <i class="fa fa-link"></i>
                                    </a>
        
                                    <a href="images/works/img10.jpg" class="popup-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                 </div>
                                 <!--End link-->

                                 <!--Hover Caption-->
                                 <div class="work-caption">
                                     <h4>Project Title</h4>
                                     <p>Photography</p>
                                 </div>
                                 <!--End Caption-->

                            </div> <!-- /.work-image-->
						</li> 
						<!--End Work Item -->

						<!-- Work Item -->
						<li class="work-item thumnail-img mix fashion">
							<div class="work-image">
                                <img src="images/works/img11.jpg" alt="thumbnail">
                                
                                 <!--Hover link-->
                                 <div class="hover-link">
                                    <a href="single-work.html">
                                        <i class="fa fa-link"></i>
                                    </a>
        
                                    <a href="images/works/img11.jpg" class="popup-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                 </div>
                                 <!--End link-->

                                 <!--Hover Caption-->
                                 <div class="work-caption">
                                     <h4>Project Title</h4>
                                     <p>Photography</p>
                                 </div>
                                 <!--End Caption-->

                            </div> <!-- /.work-image-->
						</li> 
						<!--End Work Item -->

						<!-- Work Item -->
						<li class="work-item thumnail-img mix corporate">
							<div class="work-image">
                                <img src="images/works/img12.jpg" alt="thumbnail">
                                
                                 <!--Hover link-->
                                 <div class="hover-link">
                                    <a href="single-work.html">
                                        <i class="fa fa-link"></i>
                                    </a>
        
                                    <a href="images/works/img12.jpg" class="popup-image">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                 </div>
                                 <!--End link-->

                                 <!--Hover Caption-->
                                 <div class="work-caption">
                                     <h4>Project Title</h4>
                                     <p>Photography</p>
                                 </div>
                                 <!--End Caption-->

                            </div> <!-- /.work-image-->
						</li> 
						<!--End Work Item -->
					</ul>
                    
				</div>
			</section>
  <!--End portfolio-->
 
 
   <!--Start Call To Action-->
   <section id="cta" class="parallax">
       <div class="overlay"></div>
         <div class="container">
             <div class="row text-center">
                 <h2>Are you ready to buy this theme</h2>
                 <a href="#" class="btn btn-green">GET A FREE QUOTE</a>
           </div>
         </div>
   </section>
   <!--End Call To Action-->
   
   
    
  <!--Start Team-->
  <section id="team" class="section">
		<div class="container">
            <div class="row">
                    
             <div class="title-box text-center">
                <h2 class="title">Team</h2>
             </div>
              
             </div>
			
                <!-- Team -->
				<div class="team-items team-carousel">
                      <!-- Team Member #1 -->
                      <div class="item">
                          <img src="images/team/team1.jpg" alt=""  />
                          <h4>Jonh Doe</h4>
                          <h5>Photogropher</h5>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod temporcd incididunt consectetur laboredolore dolor adipisicing. </p>
                          
                          <div class="socials">
                              <ul>
                               <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                               <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <!-- End Member -->
                      
                      <!-- Team Member #2 -->
                      <div class="item">
                          <img src="images/team/team2.jpg" alt=""  />
                          <h4>Jonh Doe</h4>
                          <h5>Web Designer</h5>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod temporcd incididunt consectetur laboredolore dolor adipisicing. </p>
                          
                          <div class="socials">
                              <ul>
                               <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                               <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <!-- End Member -->
                      
                      <!-- Team Member #3 -->
                      <div class="item">
                          <img src="images/team/team3.jpg" alt=""  />
                          <h4>Jonh Doe</h4>
                          <h5>Graphic Designer</h5>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod temporcd incididunt consectetur laboredolore dolor adipisicing. </p>
                          
                          <div class="socials">
                              <ul>
                               <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                               <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <!-- End Member -->
                      
                       <!-- Team Member #4 -->
                      <div class="item">
                          <img src="images/team/team4.jpg" alt=""  />
                          <h4>Jonh Doe</h4>
                          <h5>Photogropher</h5>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod temporcd incididunt consectetur laboredolore dolor adipisicing. </p>
                          
                          <div class="socials">
                              <ul>
                               <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                               <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <!-- End Member -->
                      
                       <!-- Team Member #5 -->
                      <div class="item">
                          <img src="images/team/team1.jpg" alt=""  />
                          <h4>Jonh Doe</h4>
                          <h5>Graphic Designer</h5>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod temporcd incididunt consectetur laboredolore dolor adipisicing. </p>
                          
                          <div class="socials">
                              <ul>
                               <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                               <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <!-- End Member -->
                      
                       <!-- Team Member #6 -->
                      <div class="item">
                          <img src="images/team/team2.jpg" alt=""  />
                          <h4>Jonh Doe</h4>
                          <h5>Web Designer</h5>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod temporcd incididunt consectetur laboredolore dolor adipisicing. </p>
                          
                          <div class="socials">
                              <ul>
                               <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                               <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <!-- End Member -->
				</div>
                <!-- End Team -->
			</div>
            <!-- End Content -->
	</section>
  <!--End Team-->


    <!--Start Skills-->
  <section  id="skills" class="section parallax">
       <div class="overlay"></div>
       <div class="container">
           <div class="row">
                    
             <div class="title-box text-center white">
                <h2 class="title">Technical Skills</h2>
             </div>
              
                 <!--Skill #1-->
                <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                    <span class="pie-chart " data-percent="87">
                        <span class="percent"></span>
                    </span>
                    <h4>Photoshop</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                
                <!--Skill #2-->
                <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                    <span class="pie-chart" data-percent="75">
                        <span class="percent"></span>
                    </span>
                    <h4>Wordpress</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                
                <!--Skill #3-->
                <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                    <span class="pie-chart " data-percent="60">
                        <span class="percent"></span>
                    </span>
                    <h4>Graphic</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                
                <!--Skill #4-->
                <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                    <span class="pie-chart" data-percent="95">
                        <span class="percent"></span>
                    </span>
                    <h4>Development</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>

            
           </div> <!-- /.row-->
       </div> <!-- /.container-->
  </section> 
  <!--End Skills-->

 
  <!--Start Services-->
   <section id="services" class="section">
        <div class="container">
            <div class="row">
            
                 <div class="title-box text-center">
                    <h2 class="title">Services</h2>
                 </div>
              
               <!--Services Item-->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-basket"></i> </div> 
                       <div class="services-desc">
                          <h4>Development</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
                <!--End services Item-->
                
                <!--Services Item-->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-shield"></i> </div> 
                       <div class="services-desc">
                          <h4>Web Design</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
               <!--End services Item-->
               
               <!--Services Item-->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-hotairballoon"></i> </div> 
                       <div class="services-desc">
                          <h4>SEO</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
                <!--End services Item-->
                
               <!--Services Item -->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-global"></i> </div> 
                       <div class="services-desc">
                          <h4>Graphic Design</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
               <!--End services Item-->
               
               <!--Services Item-->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-target"></i> </div> 
                       <div class="services-desc">
                          <h4>Content Writing</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
              <!--End services Item-->
              
               <!--Services Item -->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-aperture"></i> </div> 
                       <div class="services-desc">
                          <h4>HTML Basic</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
               <!--End services Item-->
              
            </div> <!--/.row-->
        </div> <!--/.container-->
   </section> 
  <!--End Services-->

 
     <!--Start Why Choose us-->
  <section id="why-choose" class="section">
       <div class="container">
           <div class="row">
           
                 <div class="title-box text-center">
                    <h2 class="title">Why Choose us</h2>
                 </div>
              
              <!--start tabs-->
              <div class="col-md-6">
                  <div class="tabs tabs-main">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#one" data-toggle="tab">Design</a></li>
					  <li><a href="#two" data-toggle="tab">Company</a></li>
					  <li><a href="#three" data-toggle="tab">Support</a></li>
					</ul>
					<div class="tab-content">

						<!--Start Tab Item #1 -->
						<div class="tab-pane in active" id="one">
							<p>
								Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. 
							</p>
						</div>
						<!-- End Tab -->

						<!--Start Tab Item #2 -->
						<div class="tab-pane" id="two">
							<p>
								Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.
							</p>
						</div>
						<!-- End Tab -->

						<!--Start Tab Item #3 -->
						<div class="tab-pane" id="three">
							<p>
								Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.
							</p>
						</div>
						<!-- End Tab -->

					</div>
				</div>
              </div>
             <!-- End Tabs-->
            
            <!--Start Accordion-->
            <div class="col-md-6">
               <div class="panel-group accordion-main" id="accordion">
                       <!--About accordion #1-->
				       <div class="panel">
                           <div class="panel-heading collapsed" data-toggle="collapse"
                            data-parent="#accordion" data-target="#collapseOne">
                          <h6 class="panel-title accordion-toggle">
                              Photography
                          </h6>
                        </div>
					<div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.
                            </p>
                                
                        </div>
					</div>
				  </div>
                  
                  <!--About accordion #2-->
				  <div class="panel">
                       <div class="panel-heading collapsed" data-toggle="collapse"
                        data-parent="#accordion" data-target="#collapseTwo">
                      <h6 class="panel-title accordion-toggle">
                          Web Designing
                      </h6>
                       </div>
					<div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.
                            </p>
                        </div>
					</div>
				  </div>

                 <!--About accordion #3-->
				  <div class="panel">
                      <div class="panel-heading collapsed" data-toggle="collapse"
                            data-parent="#accordion" data-target="#collapseThree">
                          <h6 class="panel-title accordion-toggle">
                              Web Development
                          </h6>
                        </div>
					<div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.
                            </p>
                                
                        </div>
					</div>
				  </div>

                <!--About accordion #4-->
				 <div class="panel">
                     <div class="panel-heading collapsed" data-toggle="collapse"
                            data-parent="#accordion" data-target="#collapseFour">
                          <h6 class="panel-title accordion-toggle">
                              Responsive Design
                          </h6>
                        </div>
					<div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.
                            </p>
                        </div>
					</div>
				  </div>
				</div>
            </div>
            <!--End Accordion-->
              
           </div> <!--/.row-->
       </div> <!--/.container-->
  </section>
  <!--End Why Choose us-->

 
    <!--Start video-->
  <section id="video" class="section parallax">
        <div class="overlay"></div>
       <div class="container">
           <div class="row">
           
                 <div class="title-box text-center white">
                    <h2 class="title">Video</h2>
                 </div>
             
             <div class="col-md-6">
                 <div class="video-caption-main">
                      <!--Video caption #1-->
                      <div class="video-caption">
                          <div class="video-icon">
                              <i class="fa fa-briefcase"></i>
                          </div>
                          <div class="video-caption-info">
                              <h4>Take a look at  this video to see how we work.</h4>
                              <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                          </div>
                      </div>
                      
                       <!--Video caption #2-->
                      <div class="video-caption">
                          <div class="video-icon">
                              <i class="fa fa-glass"></i>
                          </div>
                          <div class="video-caption-info">
                              <h4>The programming language of ios apps</h4>
                              <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                          </div>
                      </div>

                      <!--Video caption #3-->
                      <div class="video-caption">
                          <div class="video-icon">
                              <i class="fa fa-rocket "></i>
                          </div>
                          <div class="video-caption-info">
                              <h4>Take a look at  this video to see how we work.</h4>
                              <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                          </div>
                      </div>
                      
                 </div>
             </div>
            <!-- End Video caption-->
             
            <div class="col-md-6">
                <div class="play-video">
                  <iframe src="http://player.vimeo.com/video/115919099?title=0&amp;byline=0&amp;portrait=0&amp;color=fff" allowfullscreen></iframe>
                </div>
            </div> 
               
           </div> <!-- /.row-->
       </div> <!-- /.container-->
  </section>
  <!--End video-->


   <!-- Start blog-->
   <section id="blog" class="section">
       <div class="container">
           <div class="row">
           
<<<<<<< HEAD
               <div class="title-box text-center">
                  <h2 class="title">Tin tức mới nhất</h2>
               </div>

               <?php 
                  // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muốn lấy, thêm, sửa, xóa DỮ LIỆU
                  $ket_noi = mysqli_connect("localhost", "root", "", "k22htttc_db");

                  // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
                  $sql = "
                            SELECT * 
                            FROM tbl_tin_tuc 
                            ORDER BY id_tin_tuc DESC
                  ";

                  // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
                  $noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

                  // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
                  while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
               ;?>

               <div class="col-md-4">
                   <div class="blog-post">
                         <div class="post-media">
                            <img src="images/blog/blog1.jpg" alt="">
                         </div>
                       <div class="post-desc">
                           <h4><?php echo $row["tieu_de"];?></h4>
                           <h5><?php echo date("d/M/Y H:i", strtotime($row["ngay_dang"]));?> / <?php echo $row["so_lan_doc"];?> lượt đọc</h5>
                           <p><?php echo $row["mo_ta"];?></p>
                           <a href="blog.html" class="btn btn-gray-border">Chi tiết</a>
=======
                 <div class="title-box text-center">
                    <h2 class="title">Tin tức mới nhất</h2>
                 </div>
                
               <!-- Start Blog item #1-->
               <div class="col-md-4">
                   <div class="blog-post">
                         <div class="post-media">
							 <img src="images/blog/blog1.jpg" alt="">
                         </div>
                       <div class="post-desc">
                           <h4>consectetur adipisicing Inventore</h4>
                           <h5><?php echo date("d/M/Y");?> / 5 Comments</h5>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde</p>
                            <a href="blog.html" class="btn btn-gray-border">Read More</a>
                       </div>
                   </div>
               </div>
               
               <!-- Start Blog item #2-->
               <div class="col-md-4">
                   <div class="blog-post">
                         <div class="post-media">
							 <img src="images/blog/blog2.jpg" alt="">
                         </div>
                       <div class="post-desc">
                           <h4>consectetur adipisicing Inventore</h4>
                            <h5><?php echo date("d/M/Y");?> / 3 Comments</h5>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde</p>
                            <a href="blog.html" class="btn btn-gray-border">Read More</a>
                       </div>
                   </div>
               </div>
               
               <!-- Start Blog item #3-->
               <div class="col-md-4">
                   <div class="blog-post">
                         <div class="post-media">
							 <img src="images/blog/blog3.jpg" alt="">
                         </div>
                       <div class="post-desc">
                           <h4>consectetur adipisicing Inventore</h4>
                             <h5><?php echo date("d/M/Y");?> / 11 Comments</h5>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde</p>
                        <a href="blog.html" class="btn btn-gray-border">Read More</a>
>>>>>>> 61ce33b286cd5afe6725c20742d4f3667242d767
                       </div>
                   </div>
               </div>

<<<<<<< HEAD
               <?php
                  }
               ;?>
=======
>>>>>>> 61ce33b286cd5afe6725c20742d4f3667242d767
           </div> <!--/.row-->
       </div> <!--/.container-->
   </section>
   <!-- End blog-->
   
 
  <!--Start Testimonial-->  
  <section id="testimonials" class="section parallax">
     <div class="overlay"></div>
        <div class="container">
              <div class="row">
              
                  	<div class="title-box text-center white">
                        <h2 class="title">What clients say.</h2>
                     </div>
<<<<<<< HEAD
                    <div class="col-md-10 col-md-offset-1">
                        <div class="testimonials-carousel">
                        <?php 
                            // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muốn lấy, thêm, sửa, xóa DỮ LIỆU
                            $ket_noi = mysqli_connect("localhost", "root", "", "k22htttc_db");

                            // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (NGƯỜI DÙNG đã lưu trong CSDL)
                            $sql = "
                                      SELECT * 
                                      FROM tbl_nguoi_dung 
                                      ORDER BY id_nguoi_dung DESC
                            ";

                            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
                            $khach_hang = mysqli_query($ket_noi, $sql);

                            // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
                            while ($row = mysqli_fetch_array($khach_hang)) {
                        ;?>
                            <div class="items">
                                <div class="desc"><?php echo $row["ghi_chu"];?></div>
                                <img src="images/testimonial/testimonial-img1.jpg" class="testimonial-pic" alt="testimonials" />
                                <div class="name"><?php echo $row["ten_nguoi_dung"];?></div>
                            </div>
                        <?php
                            }
                        ;?>
=======

              
                    <div class="col-md-10 col-md-offset-1">
                        <div class="testimonials-carousel">
                            <!--Start Testimonial item #1-->
                            <div class="items">
                                <div class="desc">habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet habitant morbi tristique senectus et netus et malesuada fames ac quam egestas.</div>
                                <img src="images/testimonial/testimonial-img1.jpg" class="testimonial-pic" alt="testimonials" />
                                <div class="name">Andrew Doe</div>
                            </div>
                            
                              <!--Start Testimonial item #2-->
                            <div class="items">
                                <div class="desc">habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet habitant morbi tristique senectus et netus et malesuada fames ac quam egestas.</div>
                                <img src="images/testimonial/testimonial-img2.jpg" class="testimonial-pic" alt="testimonials" />
                                <div class="name">Andrew Doe</div>
                            </div>
                            
                              <!--Start Testimonial item #3-->
                            <div class="items">
                                <div class="desc">habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet habitant morbi tristique senectus et netus et malesuada fames ac quam egestas.</div>
                                <img src="images/testimonial/testimonial-img1.jpg" class="testimonial-pic" alt="testimonials" />
                                <div class="name">Andrew Doe</div>
                            </div>
>>>>>>> 61ce33b286cd5afe6725c20742d4f3667242d767
                        </div>
                    </div>
                </div> <!--/.row-->
            </div> <!--/.container-->
          </section>
        <!--Start Testimonial-->
  
 
    <!--Start clients-->
    <section id="clients" class="section">
           <div class="container">
               <div class="row">
               
            <div class="title-box text-center">
                <h2 class="title">Our Clients</h2>
             </div>
                
                   <div class="clients-carousel">
                   
                       <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                    <img src="images/clients-logo/client1.png" alt="" />
                                </figure>
                            </a>
                        </div>
                        
                       <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                      <img src="images/clients-logo/client2.png" alt="" />
                                </figure>
                            </a>
                        </div>
                        
                        <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                      <img src="images/clients-logo/client3.png" alt="" />
                                </figure>
                            </a>
                        </div>
                        
                        <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                     <img src="images/clients-logo/client4.png" alt="" />
                                </figure>
                            </a>
                        </div>
                        
                       <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                      <img src="images/clients-logo/client2.png" alt="" />
                                </figure>
                            </a>
                        </div>
                        
                       <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                      <img src="images/clients-logo/client5.png" alt="" />
                                </figure>
                            </a>
                        </div>
                        
                        <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                     <img src="images/clients-logo/client4.png" alt="" />
                                </figure>
                            </a>
                        </div>
                        
                        <!-- Clients Logo Item-->
                        <div class="item">
                            <a href="#">
                                <figure>
                                     <img src="images/clients-logo/client1.png" alt="" />
                                </figure>
                            </a>
                        </div>
		         </div>
               </div> <!--/.row-->
         </div> <!--/.container-->
    </section>
   <!--End clients-->
   
   
   <!--Start Contact-->
   <section id="contact" class="section parallax">
      <div class="overlay"></div>
       <div class="container">
           <div class="row">
           
                 <div class="title-box text-center white">
                    <h2 class="title">Contact</h2>
                 </div>
             </div>

               <!--Start contact form-->
               <div class="col-md-8 col-md-offset-2 contact-form">
               
                    <div class="contact-info text-center">
                       <p>123 4567 890</p>
                       <p>123 lorem ipsum, 4th floor, lorem, ipsum </p>
                       <p>mail@demo.com </p>
                    </div>
                     
                     <form method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <input class="form-control" id="name" placeholder="Full Name" type="text">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" id="email" placeholder="Your Email" type="email">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" id="subject" placeholder="Subject" type="text">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" id="message" rows="7" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-green">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
               </div>
              <!--End contact form-->
              
       </div> <!-- /.container-->
   </section>
   <!--End Contact-->
   
   
   <!--Start Footer-->
   <footer>
       <div class="container">
           <div class="row">
               <!--Start copyright-->
               <div class="col-md-6 col-sm-6 col-xs-6">
                   <div class="copyright"><p>Copyright © 2016 All Rights reserved by: <a href="http://templatestock.co">Template Stock</a>
                 </p></div>
               </div>
               <!--End copyright-->
               
               <!--start social icons-->
               <div class="col-md-6 col-sm-6 col-xs-6">
                   <div class="social-icons">
                       <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                       </ul>
                    </div>
               </div>
               <!--End social icons-->
           </div> <!-- /.row-->
       </div> <!-- /.container-->
   </footer>
   <!--End Footer-->

   <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

    <!--Plugins-->
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    
 </body>
</html>

