<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="css/estilo.css" />
      <script src="http://localhost/_/ckeditor/ckeditor.js"></script>
      <title>Cadastrar questões - VESTIBO LAB</title>
   </head>
   <body>
      <div id="box">
         <center>
            <img src="logo.png" id="logo">
            <br>
            <input type="button" class="btn" name="btn_listar" value="Listar questões" onclick="javascript: window.location = 'lis.php';">
            <h1>Cadastro de questões</h1>
            <form name="usrform" enctype="multipart/form-data" method="POST" action="cad.php">
               <input type="text" class="campo" name="vestibular" value="" placeholder="Vestibular" maxlength="15">
               <br>
               <input type="text" class="campo" name="ano" value="" placeholder="Ano" maxlength="4">
               <br>
               <input type="text" class="campo" name="num" value="" placeholder="Número da Questão" maxlength="4">
               <br>
               <label for="">Enunciado</label>
               <textarea class="ckeditor campo" rows="8" id="ck" name="enunciado" placeholder="Enunciado"></textarea>
               <br>
               <label for="">Alternativa 1</label>
               <textarea class="ckeditor" rows="4" id="ck" cols="50" name="alt1"></textarea>
               <br>
               <label for="">Alternativa 2</label>
               <textarea class="ckeditor" rows="4" id="ck" cols="50" name="alt2"></textarea>
               <br>
               <label for="">Alternativa 3</label>
               <textarea class="ckeditor" rows="4" id="ck" cols="50" name="alt3"></textarea>
               <br>
               <label for="">Alternativa 4</label>
               <textarea class="ckeditor" rows="4" id="ck" cols="50" name="alt4"></textarea>
               <br>
               <label for="">Alternativa 5</label>
               <textarea class="ckeditor" rows="4" id="ck" cols="50" name="alt5"></textarea>
               <br>
               <select class="campo" name="altCorreta">
                  <option value="" selected>Alternativa Correta</option>
                  <option value="alt1">Alternativa 1</option>
                  <option value="alt2">Alternativa 2</option>
                  <option value="alt3">Alternativa 3</option>
                  <option value="alt4">Alternativa 4</option>
                  <option value="alt5">Alternativa 5</option>
               </select>
               <label for="">Comentário</label>
               <textarea class="ckeditor" rows="3" cols="50" id="ck" name="comentario"></textarea>
               <br>
               <select class="campo" name="sub">
                  <option value="??-???">?? - ???</option>
                  <option value="??-???">?? - ???</option>
               </select>
               <br>
               <input type="submit" class="btn" value="Cadastrar">
            </form>
         </center>
         <p style="color: #eee">Versão 0.1.2A r1 LAMPI</p>
      </div>
      <script>CKEDITOR.replace( 'x' )</script>
   </body>
</html>