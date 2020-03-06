<?php 
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Trang Chủ</title>
<link href="Format1.css" type="text/css" rel="stylesheet">
</head>
<body>
      <div id="tong">
   <div id="header"><marquee direction="left">Welcome to Thue Nha 247 - Chào Mừng bạn đến với Thuê Nhà 247 Website hỗ trợ thuê nhà tiện lợi</marquee></div>	
      	<div id="banner"><nav>
    <h1>
      <a href="" class="logo"><img src="ImageDesign/LogoWeb.jpg"></a>
      <a href="" class="logo"><img src="ImageDesign/Header1.png" style="padding-left:200px"></a>
    </h1></nav></div>
        <div id="left"><img src="ImageDesign/left1.jpg"><img src="ImageDesign/left2.jpg"><img src="ImageDesign/left3.jpg"></div>
        <div id="center">
        	<div class="topnav">
  <a class="active" href="TrangChu.php">Home</a>
  <a href="#about">Introduce</a>
  <a href="#contact">Contact</a>
  <a href="LoginCN.php">Log In</a>
  <a href="">House Owner</a>
  <a href="">Advanced Search</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Tìm kiếm.." name="search">
      <button type="submit">Search</button>
    </form>
  </div>
</div>
    <button class="toggle-menu" aria-label="Responsive Navigation Menu">☰</button><main>
  <!-- content here -->
</main>
            <div class="content">
			<?php 
				include('connect.php');
				$sqlht="select * from motanha";
				$thucthiht=mysqli_query($conn,$sqlht);
				while($row=mysqli_fetch_array($thucthiht)){
					$ma=$row['ID'];
					$cn=$row['Chunha'];
					$dc=$row['DCnha'];
					$imgn=$row['ImageN'];
					$dt=$row['dientich'];
                    $ht=$row['hientrang'];
					?>
					<div style="float:left; width:300px; height:285px ; margin:auto" >
					<div class="anhN"><img src="ImageHouse/<?php echo $row['ImageN']?>">
					<p>Mã số nhà :<?php echo $row['ID']?></p>
					<p>Chủ sở hữu :<?php echo $row['Chunha']?></p>
                    <p>Địa chỉ nhà :<?php echo $row['DCnha']?></p>
					<p>Diện tích :<?php echo $row['dientich']?> m<sup>2</sup></p>
                    <p>Tình trạng :<?php echo $row['hientrang']?></p>
                    <a href="chitiet.php?code=<?php echo $row['Code']?>" style="color:black"> Chi Tiết</a>
                    <a href="muahang.php?code=<?php echo $row['Code']?>" style="color:black">|| Thuê Nhà</a>	</div></div><?php }?>
        </div></div>
        <div id="clr"></div>
        <div id="footer">
            <div class="footer1">
                 <td>Công Ty Cổ Phần Đầu Tư Bất Động Sản Hactech Việt Nam</td><br>
                 <td>Address: A17 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội</td><br>
                 <td>Hotline: <a href=" tel:0384774066">0384774066</a></td><br>
                 <td>Mailbox Support: <a href="mailto:thuenha247@gmail.com">thuenha247@gmail.com</a></td><br>	
                 <td>Website: <a href="https://thuenha247.com.vn">thuenha247.com.vn</a></td>
                 <p> Copyright © 2017 Công Ty TNHH  do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp </p></div>
                <div class="footer2">
                    <h1 align="center">Các đối tác lớn</h1>
                    <div class="imageft">
                        <img src="ImageDesign/Logo1.jpg" alt="" class="anhf">
                        <img src="ImageDesign/Logo2.jpg" alt="" class="anhf">
                        <img src="ImageDesign/tải xuống (1).jpg" alt="" class="anhf">
                        <img src="ImageDesign/tải xuống (2).jpg" alt="" class="anhf">
                        <img src="ImageDesign/tải xuống.jpg" alt="" class="anhf">
                    </div>
               </div>
               <div class="bot" style="text-align: center;"> 
                 <span class="currentpage"><b>1</b></span> 
                 <a class="pagenav" href="">2</a> 
                 <a class="pagenav" href="">3</a> ... 
                 <a class="pagenav" href="">6</a> 
                 <a class="pagenav" href="">&gt;&gt;</a></div>
       </div>

</html>