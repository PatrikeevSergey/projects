<html>
<head>
<center>
  <h1>������� 3.1</h1>
<TITLE>������������ ������</TITLE>
<center>
<?php

$age=22;
if ($age<=59 and $age>=18) {echo "��� ��� �������� � ��������";} elseif ($age>59) 

{echo"��� ���� �� ������";} elseif ($age<18 and $age>1) {echo "��� ��� ���� 

��������";} else {echo "����������� �������";}

?>


  <h1> ������� 3.2</h1>
<?php
$cols=10;
$rows=10;
echo "<table border=1 width='30%' height='40%'>";


for ($i=1; $i<=$cols; $i++)
{
if ($i == 1) {
        echo "<tr>";
        
        for ($x = 1; $x <= $rows; $x++) {
          echo "<th bgcolor=#345689>$x</th>";
        }

        echo "</tr>";
    } else{
    echo "<tr height=30 valign=center>";


for ($j=1; $j<=$rows; $j++)
{$p=$i*$j;
if($j==1)
{
	echo "<th bgcolor=#225577>" . $p . "</th>";
}
elseif ($i % 2 == 0)
       {
        echo '<td width=20 bgcolor=#ffff00>' . $p . '</td>';
    }
    else
    echo '<td width=20 bgcolor=#5544ff>' . $p . '</td>';

}
}
}

echo"</table>";

?>
</center>
</body>
</HEAD>
</html>
