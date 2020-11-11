<?php
include_once "../../src/controller/ProductController.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THÔNG TIN SẢN PHẨM</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    body {
        background-image: url("https://i.pinimg.com/originals/54/59/8e/54598efcb1fb1b0c1c6009e5ae644906.jpg");
        background-size: cover;
    }

    .table {
        background-color: wheat;
    }

    a {
        color: darkviolet;
    }

    th {
        text-align: center;
    }

</style>
<body>
<br><br>
<h1 align="center"><b>Kết Quả Tìm Kiếm Sản Phẩm</b></h1>
<br><br>
<table align="center" class="table" style="width: 1200px;border-radius: 15px">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Tên Sản Phẩm</th>
        <th scope="col">Loại Sản Phẩm</th>
        <th colspan="2" scope="col">Tùy chọn</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($input as $key => $product): ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $product->getName(); ?></td>
            <td><?php echo $product->getType(); ?></td>
            <td>
                <a class="btn btn-info" href="index.php?page=update&id=<?php echo $product->getId(); ?>">Chỉnh sửa</a>
            </td>
            <td>
                <a class="btn btn-danger" onclick="return confirm('Bạn chắc chứ?')"
                   href="index.php?page=delete&id=<?php echo $product->getId(); ?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>