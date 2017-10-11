<?php 

$array=array("Henry","Bucky","Emily");
# 计算数组个数 count
echo count($array);
# 将数组开头的单元移出数组 array_shift
$newArray=array_shift($array);//返回被删除的元素
print_r($array);
echo $newArray;
# 在数组开头插入一个或多个单元 array_unshift
$value=array_unshift($array, "tom");//返回数组长度
print_r($array);
echo $value;
# 将一个或多个单元压入数组的末尾（入栈）array_push
$value1=array_push($array,"mary");//返回数组长度
print_r($array);
echo $value1;
# 弹出数组最后一个单元（出栈） array_pop
array_pop($array);
print_r($array);
# 数组排序 sort
$nums=[10,23,465,1,4,2];
sort($nums);//默认安数字排序
print_r($nums);
# 数组转字符串 implode
$arrayToString=["a","b","c"];
$string=implode(",",$arrayToString);//相当于js的join
echo $string;
# 字符串转数组 explode
$str="hellol";
$ay=explode("l", $str);//Array ( [0]=>he [1]=> [2]=>o [3]=> ),包含空格
$str1_array=array_filter($ay); 
print_r($str1_array);
$ar=array("a","b","c","a","ab");
//去除数组中重复的值,key值不变
$value_dif=array_unique($ar);
print_r($value_dif);//Array ( [0] => a [1] => b [2] => c [4] => ab )
//根据value找到键值
$key=array_search("ab", $ar);
echo $key;//4



?>
<script>
	var nums=[10,23,465,1,4,2];
	console.log(nums.sort());//js中默认转化成字符串,按编码值排序
</script>








