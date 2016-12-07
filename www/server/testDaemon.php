<?php
set_time_limit (0);
$loginFordb = 'root';
$passFordb = '';
$db = mysql_connect('localhost',$loginFordb, $passFordb) or die(mysql_error());
$b = true;
mysql_select_db('test', $db) or die("ERROR");

$sql="SELECT * FROM  `newslist` ORDER BY  `id` DESC"; 
$sql2="SELECT * FROM  `hzlist` ORDER BY  `id` DESC"; 
$ss = "SELECT id FROM newslist ORDER BY id DESC LIMIT 1";
$rez = mysql_query($ss);
$row2=mysql_fetch_array($rez);
$id2=$row2['id']; 
if( $_POST['id'] < $id2){
	
//while($b) {
include('onOff.php');
$response = array();
$posts = array();
$posts2 = array();
$result=mysql_query($sql);
$result2=mysql_query($sql2);
while($row=mysql_fetch_array($result)) {
$id=$row['id']; 
$title=$row['title']; 
$content=$row['content']; 

$posts[] = array('id'=> $id,'title'=> $title, 'content'=> $content);

};
while($row=mysql_fetch_array($result2)) {
$id=$row['id']; 
$type=$row['type']; 
$includes=$row['includes']; 

$posts2[] = array('id'=> $id,'type'=> $type, 'includes'=> $includes);

};

$response = array('posts'=> $posts, 'posts2'=> $posts2);

//$fp = fopen('object.json', 'w');
//fwrite($fp, json_encode($response));	
//sleep(15);	
//};
echo json_encode($response);
} else {
	echo "upToDate";
}
?>