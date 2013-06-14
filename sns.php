<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>무제 문서</title>
</head>

<body>
<?
include 'connect.php';

//DB에 Query..
$query = "SELECT * FROM sns ORDER BY no DESC";
$result = mysql_query ($query, $connect);
$total = mysql_affected_rows();
$number = mysql_num_rows($result);
?>
</body>
</html>
