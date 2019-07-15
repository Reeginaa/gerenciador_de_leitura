<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Carregando...</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
    <div id="percentCount" class="percent-count"></div>
    <div class="progress-bar">
      <div class="progress" id="progress"></div>
    </div>


    <script type="text/javascript">
      function progress(){
        var prg = document.getElementById('progress');
        var percent = document.getElementById('percentCount');
        var counter = 5;
        var progress = 25;
        var id = setInterval(frame, 50);

        function frame(){
          if(progress == 500 && counter == 100){
            clearInterval(id);
          } else {
            progress += 5;
            counter += 1;
            prg.style.width = progress + 'px';
            percent.innerHTML = 'Calculando ' + counter + '%';

            if (counter == 100) {
              window.location.assign('View/Meta/MetaViewResult.php');
            }
          }
        }
      }
      progress();
    </script>

    <div id="rodape">
        <div>
			Maria Regina Cerbaro &copy 2019 Todos os direitos reservados
    	</div>
    </div>
  </body>
</html>
