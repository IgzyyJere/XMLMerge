<?php
include 'books.php';
$b=new books();
//1. load books from xml to array
$arr=$b->load('cjene_3.xml');


//2. modify title
for($i=0,$ms=count($arr);$i<$ms;$i++)
{
  if($arr[$i]['fields']['amount'] != "")
  {
    $price = 0.7;
    $tecaj = 7.43;
    $field = $arr[$i]['fields']['amount'];
     $arr[$i]['fields']['amount']= ($price+$field) *$tecaj;
  }
}

//3. save array to xml
$b->save('cijeneP3.xml',$arr);
?>
