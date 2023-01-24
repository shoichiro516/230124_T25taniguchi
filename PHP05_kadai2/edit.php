<?php
   $db = new PDO('mysql:dbname=gs_memo;host=localhost;charset=utf8', 'root', '');
   $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
   $memos->bindParam(1, $_GET['id'], PDO::PARAM_INT);
   $memos->execute();
   $memo = $memos->fetch();
?>
<form action="edit_do.php" method="POST">
   <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
   <textarea cols='50' rows="10" name="memo"><?php echo $memo['memo'] ?></textarea>
   <p><input type="submit" value="登録する"></p>
</form>