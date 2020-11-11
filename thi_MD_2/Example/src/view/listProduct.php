<?php
include_once "src/controller/ProductController.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DANH SÁCH SẢN PHẨM</title>
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
    tbody{
        text-align: center;
    }

    a {
        color: darkviolet;
    }

    th {
        text-align: center;
        color: darkviolet;
    }

    h1 {
        font-family: -apple-system, serif;
        font-size: 70px;
        text-align: center;
        color: darkviolet;
    }
</style>
<body>
<br>
<h1 align="center"><b>Danh Sách Sản Phẩm</b></h1>
<br>
<div align="center">
    <table>
        <tr>
            <th>
                Nhập Tên Sản Phẩm : <form style="display: inline; width: 100px; height: 50px" class="form-inline my-2 my-lg-0;" method="post"
                      action="index.php?page=showInfo">
                    <input name="search" class="form-control" type="search" aria-label="Search" placeholder="Tìm Kiếm">
                    <button style="background-color: black" class="btn btn-success" type="submit">Tìm kiếm</button>
                </form>
            </th>
            <th>
                <a style="background-color: " class="btn btn-success" data-toggle="animation" data-animation="zoom-in" href="index.php?page=add">Thêm Sản Phẩm</a>
            </th>
        </tr>
    </table>
</div>
<br>
<table align="center" class="table" style="width: 1200px;border-radius: 15px">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Tên Sản Phẩm</th>
        <th scope="col">Loại Sản Phẩm</th>
        <th style="width: 300px" colspan="1" scope="col">Tùy chọn</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $product): ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $product->getName(); ?></td>
            <td><?php echo $product->getType(); ?></td>
            <td style="text-align: center">
                <a style="width: 100px" class="btn btn-outline-secondary" href="index.php?page=update&id=<?php echo $product->getId(); ?>">Chỉnh sửa</a>
                <a style="width: 80px" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn với quyết định này chứ ??')"
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