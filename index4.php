<html>
<head>
<center>
  <h1>������� 4.1</h1>
<TITLE>������������ ������</TITLE>
<center>
<?php
$mas=array("���������","����","�������","������","������","����","�������","�������");
print_r(array_unique($mas));
?>
 <h1>������ 4. ������� 4.1a</h1>
<?php
$pervmass = array("���������","����","�������","����","����","����","�������");
$toomass = array_keys($pervmass, "����");
echo "���� ������ � ������ ". count($toomass) . " ���(�):<br>";
foreach ($toomass as $val) 
{
echo "��� ������� $val <br>";
}

?>
<h1>������ 4. ������� 4.1c</h1>
<?php
$langs = array("���������","����","�������","������","����","����","�������","�������");
$avd = array_unique($langs);
print_r($avd);
$keys=array_keys($avd,"����");
foreach ($keys as $key) {
	echo " <br>������ ���� $key <br>";
}
unset($avd[1]);
print_r($avd);
?>
<h1>������ 4. ������� 4.1d</h1>
<?php
$langs = array("���������","����","�������","������","����","����","�������","�������");
$avd = array_unique($langs);
print_r($avd);
$keys=array_keys($avd,"����");
foreach ($keys as $key) {
	echo " <br>������ ���� $key <br>";
}
unset($avd[1]);
print_r($avd);
sort($avd);
?>
<br>
<?php
print_r($avd);
?>
<h1>������ 4. ������� 4.2a</h1>
<?php
$mass = array("���������","����","�������","������","����","����","�������");
$sub_mass=array_slice($mass,2,2);
$sub=array_slice($mass,-3,3);
$sub1=array_slice($mass,0,-1);
$sub2=array_slice($mass,-4,-2);
print_r($sub2);
?>
<h1>������ 4. ������� 4.2b</h1>
<?php
$mass = array("���������","����","�������","������","����","����","�������","�����");
$doubles=array_chunk($mass,3);
foreach($doubles as $k=>$tables) {
echo"�� �������� ����� $k �����: <ul>";
foreach ($tables as $pers)
     echo "<li>   $pers";
    echo"</ul>";   }
?>
<h1>������ 4. ������� 4.3</h1>
<?php
$mass = array (
   "������"=>array("���","������","���","�����"),
   "��������"=>array("������","������","�������","�������"),
   "������"=>array("���","���������","�������","�����"));
foreach ($mass as $type=>$val) {
echo("<h2>$type</h2>". "<br>"   );
foreach($val as $city){
echo"<I>$city,</I>";
}
}

?>
<h1>������ 4. ������� 4.4</h1>
<?php
$sotrudniki=array(
		"names" => array("���������","�������","�������","����"),
			"surnames" => array("�������","������","�����������","��������"),
			"age" => array(35,28,28,44),
			"address" => array("��. ������ 99","��. ������������� 61","��. ���������������� 25","��. �������� 11"),
			"phone" => array("125-89-63","256-89-63","100-89-63","330-80-63"),
			"pay" => array(5000,5500,10000,4998)
);
?>
<br>
<br>
<table bordercolor=grey border="2">
<tr>
<td><B>���</B></td>
<td><B>�������</B></td>
<td><B>�������</B></td>
<td><B>�����</B></td>
<td><B>�������</B></td>
<td><B>������� �� ����</B></td>
</tr>
			
<?php
for($n=0;$n<=3;$n++)
{
echo "<tr>";
foreach ($sotrudniki as $val)
{
echo "<td>$val[$n]</td>";
}
echo "</tr>";				
}
?>				
</table>
</Font>
<?php
$sum=0;
foreach ($sotrudniki["pay"] as $money)
$sum=$sum+$money;
echo "<B>��������� ������� �� ����: $sum</B>";
?>
</center>
</body>
</HEAD>
</html>
