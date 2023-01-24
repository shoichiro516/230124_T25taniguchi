<?php 
   $db = new PDO('mysql:dbname=gs_memo;host=localhost;charset=utf8', 'root', '');
   $memos = $db->query('SELECT * FROM memos ORDER BY id DESC');
   while ($memo = $memos->fetch() ): 
?>
<pre>
 <h2><a href="view_more.php?id=<?php echo $memo['id'] ?>"><?php echo $memo['memo']; ?></a></h2>
 <time><strong><?php echo '登録日 : '. $memo['created_at']; ?></strong></time>
</pre>
<hr>
<?php endwhile ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<form action="index.html" method="post">
   <input type="submit" value="自分軸日報の入力画面へ">
</form>

</body>
</html>
