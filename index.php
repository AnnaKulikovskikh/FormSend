<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form enctype="multipart/form-data" action="unload.php" method="post">
      <input type="text" name="file_name"><br/>
      <label>С каким именем сохранить файл на сервере</label><br/>
<!--      <input type="hidden" name="MAX_FILE_SIZE" value="30000" />-->
      <input type="file" name="content"><br/>
      <label>Выберите файл</label><br />
      <input type="submit" value="Отправить файл">
    </form>
  </body>
</html>