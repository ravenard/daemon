<?php

$loginFordb = 'root';
$passFordb = '';
$db = mysql_connect('localhost',$loginFordb, $passFordb) or die(mysql_error());

mysql_select_db('test', $db) or die("ERROR");

$sql="SELECT * FROM  `newslist` ORDER BY  `id` DESC"; 
$sql2="SELECT * FROM  `hzlist` ORDER BY  `id` DESC"; 
$dateKeyNews=mysql_fetch_array(mysql_query("SELECT id FROM newslist ORDER BY id DESC LIMIT 1"));
$key1=$dateKeyNews['id']; 
if( $_POST['id'] < $key1){
	
//while($b) {

$response = array();
$posts = array();
$posts2 = array();
$result=mysql_query($sql);
$result2=mysql_query($sql2);
while($row=mysql_fetch_array($result)) {
$id=$row['id']; 
$title=$row['title']; 
$content=$row['content']; 
$categ=$row['categories']; 
$filename=$row['filename']; 
$filetype=$row['filetype']; 
$rating=$row['rating']; 

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
} elseif( $_POST['id'] > $key1) {
	echo "upToDate";
}
if ($gh = 0){
	$response = array();
	$posts = array();
	$posts2 = array();
	$result=mysql_query($sql);
	$result2=mysql_query($sql2);
	while($row=mysql_fetch_array($result)) {
	$id=$row['id']; 
	$title=$row['title']; 
	$content=$row['content']; 
	$categ=$row['categories']; 
	$filename=$row['filename']; 
	$filetype=$row['filetype']; 
	$rating=$row['rating']; 

	$posts[] = array('id'=> $id,'title'=> $title, 'content'=> $content);

	};

	$response = array('posts'=> $posts, 'posts2'=> $posts2);

	$fp = fopen('object.json', 'w');
	fwrite($fp, json_encode($response));
}
?>