<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Thêm mới tin tức</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
            // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muốn lấy, thêm, sửa, xóa DỮ LIỆU
            $ket_noi = mysqli_connect("localhost", "root", "", "k22htttc_db");

            // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            $tieu_de = $_POST['txtTieuDe'];
            $mo_ta = $_POST['txtMoTa'];
            $noi_dung = $_POST['txtNoiDung'];

            $sql = "
                INSERT INTO `tbl_tin_tuc` (`id_tin_tuc`, `tieu_de`, `mo_ta`, `noi_dung`, `anh_minh_hoa`, `so_lan_doc`, `ngay_dang`, `ghi_chu`) 
                VALUES (NULL, '".$tieu_de."', '".$mo_ta."', '".$noi_dung."', NULL, '0', CURRENT_TIMESTAMP, NULL)";

            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $tin_tuc = mysqli_query($ket_noi, $sql);

            // 4. Thông báo chèn dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã thêm mới bài viết thành công');
                    window.location.href='tin_tuc.php';
                </script>

            ";

        ;?>

    </body>
</html>
