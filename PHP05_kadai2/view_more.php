<?php 
   $db = new PDO('mysql:dbname=gs_memo;host=localhost;charset=utf8', 'root', '');
   $id = $_GET['id'];
   $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
   $memos->bindParam(1, $id, PDO::PARAM_INT);
   $memos->execute();
   $memo = $memos->fetch();
?>
<pre>
   <h3><?php echo $memo['memo']; ?></h3>
   <time><strong><?php echo '登録日 : '. $memo['created_at']; ?></strong></time>
</pre>
<p><a href="edit.php?id=<?php echo $id ?>">編集する</a>
 |
<a href="delete.php?id=<?php echo $id ?>">削除する</a>
 |
<a href="view.php">戻る</a></p>