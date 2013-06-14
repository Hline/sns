<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>무제 문서</title>
</head>

<body>
<?
$host  = "localhost";
$user	= "aaaa";
$passwd	= "1234";
$db	= "pj";

//DB에 연결
$connect = mysql_connect ($host,$user, $passwd)
or die ("DB에 연결을 할 수가 없습니다.");
mysql_select_db ($db, $connect);
?>
</body>
</html>
