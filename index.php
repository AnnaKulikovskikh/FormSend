<?php
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form enctype="multipart/form-data" action="unload.php" method="post">
      <input type="text" name="filename"><br/>
      <label>С каким именем файл сохраниться на сервер</label><br/>
      <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
      <input type="file" name="file"><br/>
      <label>Поле для загрузки файла</label><br />
      <input type="submit" value="Отправить файл">
    </form>
  </body>
</html>