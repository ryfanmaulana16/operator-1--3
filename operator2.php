<?php
$var1=$_POST['Ryfan1'];
$var2=$_POST['Operator'];
$var3=$_POST['Ryfan2'];
if($var2== "tambah"){
  echo "$var1 + $var3 = ",$var1+$var3;
}
else if($var2=="error"){
  echo "Operator Tidak Ditemukan, Silahkan Input Kembali";
}
else if($var2 == "kurang"){
  echo "$var1 - $var3 = ",$var1-$var3;
}
else if($var2 == "kali"){
  echo "$var1 * $var3 = ",$var1*$var3;
}
else if($var2 == "bagi"){
  echo "$var1 / $var3 = ",$var1/$var3;
}
else if($var2 == "modulo"){
  echo "$var1 % $var3 = ",$var1%$var3;
}
 ?>
 <form action="operator2.html">
   <input type="submit" value="Kembali">
