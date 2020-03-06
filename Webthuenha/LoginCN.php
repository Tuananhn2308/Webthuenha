<?php 
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>LoginCN</title>
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
            <div class="content"><form method="post" enctype="multipart/form-data">
                	<table class="tableC">
                        <tr>
                            <td colspan="2" align="center"><h3>Đăng Nhập</h3></td>
                        </tr>
                        <tr>
                            <td width="200">Tên đăng nhập</td>
                            <td width="500"><input type="text" name="tk"></td>
                        </tr>
                        
                        <tr>
                            <td width="200">Mật Khẩu</td>
                            <td width="500"><input type="password" name="mk"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><button type="submit" name="okdn">Đăng Nhập</button><button type="submit"><a href="RegisterCN.php" style="color:black">Đăng Ký</a></button></td>
                        </tr>
                	</table>
                </form>
<?php 
	include ('connect.php');
	if (isset($_POST['okdn']))
	{
		$user=$_POST['tk'];
		$pass=$_POST['mk'];
		if ($user==""||$pass=="")
			echo "<script> alert ('Mật khẩu và tài khoản không được để trống!')</script>";
		else
		{
		$sqldn="select * from dkttchunha where taikhoan='$user' and matkhau='$pass'";
		$thucthidn=mysqli_query($conn,$sqldn);
		$numr=mysqli_num_rows($thucthidn);
		if ($numr!=0)
			{
			$_SESSION['taikhoan']=$user;
			{header ('location:Hienthi.php');}
			}
		else echo "<script>alert ('Sai tài khoản hoặc mật khẩu!')</script>";
			
		}
	}
?>
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