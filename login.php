<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    // Khỏi tạo session
    session_start();
    // Lấy giá trị từ form
    $Email = $_POST['txtEmail'];
    $Password = $_POST['txtPassword'];

    // Khởi tạo connection
    $con = mysqli_connect("localhost", "root", "", "shopping");
    // Tạo câu truy vấn check email
    $sqlCheckEmail = "select * from Customer_Registration where Email='" . $Email."'";
    // Thực thi truy vấn Email
    $resultEmail = mysqli_query($con, $sqlCheckEmail);
    // Kiểm tra số dòng
    $numRowEmail = mysqli_num_rows($resultEmail);
    // Kiểm tra
    if ($numRowEmail == 0) {
        echo '<script type="text/javascript">alert("Email không tồn tại!");window.history.back();</script>';
    }

    // Tạo câu truy vấn Password và Email
    $sql = "select * from Customer_Registration where Email='" . $Email . "' and Password='" . $Password . "' ";
    // Thực thi câu truy vấn
    $result = mysqli_query($con, $sql);
    // Kiểm tra số dòng
    $records = mysqli_num_rows($result);
    // Đọc dữ liệu
    $row = mysqli_fetch_array($result);
    if ($records == 0) {
        echo '<script type="text/javascript">alert("Sai mật khẩu!");window.history.back();</script>';
    } else {
        // Lưu session
        $_SESSION['ID'] = $row['CustomerId'];
        $_SESSION['Name'] = $row['CustomerName'];

        $rememberMe = $_POST['rememberMe'];
        if ($rememberMe) {
            // Lưu cookie
            setcookie("CustomerId",$row['CustomerId'], time() + (86400 * 3),"/");
            setcookie("CustomerName",$row['CustomerName'], time() + (86400 * 3),"/");
            setcookie("CustomerEmail",$row['Email'], time() + (86400 * 3),"/");
            setcookie("CustomerPassword",$row['Password'], time() + (86400 * 3),"/");
        }

        // Chuyển sang trang index.php
        header("location:index-2.php");
    }
    // mysql_close($con);


    ?>

</body>

</html>