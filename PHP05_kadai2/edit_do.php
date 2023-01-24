<?php
   $db = new PDO('mysql:dbname=gs_memo;host=localhost;charset=utf8', 'root', '');
   if (isset($_POST['id']) && is_numeric($_POST['id'])) {
      $value = $_POST['memo'];
      $id = $_POST['id'];
      $statement = $db->prepare('UPDATE memos SET memo=? WHERE id=?');
      $statement->execute(array($value, $id));
   } 
?>
<p>編集しました。</p>
<p><a href="view.php">戻る</a></p>