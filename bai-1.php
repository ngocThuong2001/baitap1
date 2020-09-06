<html>

<div id="bang">
<form method="post">
<h1><center>Tính toán giảm giá sản phẩm</center></h1>
Nhập tên sản phẩm <input type="text" name ="ten_sp"> <br>
Giá bán <input type="text" name ="gia_ban"> <br>
Giảm giá <input type="text" name ="giam_gia"> % <br>

<input type="submit" name="calc" value="tính toán">

</form>
</div>
<?php 
if(isset($_POST['calc'])){
$ten_sp=filter_input(INPUT_POST,'ten_sp');
$gia_ban=filter_input(INPUT_POST,'gia_ban');
$giam_gia=filter_input(INPUT_POST,'giam_gia');
$so_tien_giam_gia=($gia_ban*$giam_gia)/100;
echo"tên sản phẩm" . $ten_sp ."<br>";
echo"giá bán".number_format($gia_ban) ."<br>";
echo"phần trăm giảm giá".number_format($giam_gia )."%" ."<br>";
echo" số tiền giảm giá : ". number_format($so_tien_giam_gia) ."<br>";
echo"thành tiền : ".number_format( ($gia_ban - $so_tien_giam_gia)) ."<br>";
}
?>
</html>