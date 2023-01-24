<?php 
   $db = new PDO('mysql:dbname=gs_memo;host=localhost;charset=utf8', 'root', '');
   if (isset($_GET['id']) && is_numeric($_GET['id'])) { 
      $id = $_GET['id'];
      $memos = $db->prepare('DELETE FROM memos WHERE id=?');
      $memos->bindParam(1, $id, PDO::PARAM_INT);
      $memos->execute();
      echo '削除しました。';
   }
?>
<a href="view.php">戻る</a></p>