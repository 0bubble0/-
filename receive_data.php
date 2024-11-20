<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = isset($_POST["message"])? $_POST["message"] : "";
    // 这里简单地将接收到的数据返回给请求的客户端（用于在网页上显示），实际可以存储到数据库等做更多处理
    echo $message; 
}
?>
