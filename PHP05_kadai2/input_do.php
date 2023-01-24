
<?php
    $db = new PDO('mysql:dbname=gs_memo;host=localhost;charset=utf8', 'root', '');
    $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    $statement->execute(array($_POST['newText']));
    header('Location: view.php'); 
?>
