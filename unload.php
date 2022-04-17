<?php
  //print_r($_POST);

  if ($_POST['file_name'] === "" or !$_FILES['content']['name']) {
      header("Location: index.php");
  } else {
      $filename = $_POST['file_name'];
  }

  $info = new SplFileInfo($_FILES['content']['name']);
  $newFileName = $filename.".".$info->getExtension();
  $uploaddir = '/Users\ACER\Desktop\JS\PHP\FormSend/';
  $uploadfile = $uploaddir . $newFileName; //basename($_FILES['content']['name']);
  //print_r($_FILES);

  echo '<pre>';
  print_r($uploadfile);
  echo '<pre>';
  print_r($_FILES['content']['size']);
  echo '<pre>';

  if (move_uploaded_file($_FILES['content']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
  } else {
    echo "Возможная атака с помощью файловой загрузки!\n";
  }
