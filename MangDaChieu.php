<?php

$DanhSach = array(
array(
'name' => 'Khoi',
'birthday' => 1997,
'gender' => 'male'
),
array(
'name' => 'Trung',
'birthday' => 1985,
'gender' => 'male'
),
array(
'name' => 'Huyen',
'birthday' => 1987,
'gender' => 'female'
),

);
function InDanhSach($DanhSach)
{
foreach ($DanhSach as  $k => $v) 
{
	
	 	echo "<br/>";
    	echo "--{$v['name']}";
   		echo "--{$v['birthday']}";
        echo "--{$v['gender']}";
 }
}
echo "<br>";
 echo "1.In Danh sách:";
InDanhSach($DanhSach);


///////////////////////////
echo "<br>";
 echo "2.Đổi tên  Danh sách:";
$DanhSach[1]['name']='Trung Doan';
InDanhSach($DanhSach);

/////////////////////////////
$new = array(
    'name' => 'Văn Khương',
    'birthday' => '1994',
    'gender' => 'female'
);
$DanhSach[] = $new;
echo "<br>";
 echo "3.Thêm Danh sách:";
 InDanhSach($DanhSach);

/////////////////
 unset($DanhSach[0]);
 echo "<br>";
 echo "4.Xóa Danh sách:";
 InDanhSach($DanhSach);

 /////////////////////
  echo "<br>";
 echo "5.In Danh sách Nam: ";
foreach ($DanhSach as  $k => $v) 
{

   if (in_array(array('gender', 'male'), $DanhSach))
	{
	     echo "<br/>";
    	echo "--{$v['name']}";
   		echo "--{$v['birthday']}";
        echo "--{$v['gender']}";	
 }
	}

?>