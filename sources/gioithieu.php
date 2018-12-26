<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./Bootraps/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Bootraps/js/bootstrap.min.js">
    <link rel="stylesheet" type='text/css' href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include "include/header.php" ;      	  
    ?>
<div class="container-fluid">
	<div class="row">
        <h2>Cơ cấu tổ chức</h2>
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr style="background-color:#20c997">
						<th>#</th>
						<th>Họ tên</th>
						<th>Năm sinh</th>
						<th>Chức vụ</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Nguyễn Văn Thi</td>
						<td>1998</td>
						<td>Trưởng nhóm</td>
					</tr>
					<tr class="table-active">
						<td>2</td>
						<td>Nguyễn Thành Tôn</td>
						<td>1998</td>
						<td>Thành viên</td>
					</tr>
				</tbody>
            </table>
        </div>
        <div class="nhiemvu row">
            <div class="col-md-8">
            <table cellpadding="0" cellspacing="0" id="nhm_title_noboder">
  
            <tbody><tr>
      <td>
       <h1>Nhiệm vụ</h1>
      </td>
  
  </tr>
</tbody></table>
            </div>
            <div class="col-md-4"></div>
        </div>
</div>
<?php
        include "include/footer.php" ;		  
    ?>
</body>
</html>