<?php 
    // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
    include("../config.php");

    // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
    $email = $_POST["txtEmail"];
    $mat_khau = $_POST["txtMatKhau"];

    $sql = "
            SELECT * 
            FROM tbl_nguoi_dung
            WHERE email='".$email."' AND mat_khau = '".$mat_khau."'
    ";

    // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
    $noi_dung_nguoi_dung = mysqli_query($ket_noi, $sql);

    // 4. Lấy số lượng người dùng thỏa mãn
    $so_luong_nguoi_dung = mysqli_num_rows($noi_dung_nguoi_dung);

    // 5. Khẳng định, người dùng có quyền truy cập hay không
    if ($so_luong_nguoi_dung==1) {
        session_start();
        $_SESSION['da_dang_nhap']=1;

        echo "
            <script type='text/javascript'>
                window.alert('Bạn đã đăng nhập thành công');
                window.location.href='index.php';
            </script>
        ";
    } else {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không được phép truy cập');
                window.location.href='dang_nhap.php';
            </script>
        ";
    }
    
;?>