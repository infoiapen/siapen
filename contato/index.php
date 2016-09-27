<html>
    <head> 
        <meta charset="utf-8">
        <title>Formulário de Contato</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
<body>
    <div class="container">
       <br>
       <div class='row'>
          <div class="col-sm-offset-2 col-md-8">
             <h1 class="text-center">Formulário de Contato</h1>
             <form class="form-horizontal" method="post" action="" id="formulario">
                 <div id="mensagem" class=""></div>
                <div class="form-group">
                   <label for="inputEmail3" class="col-sm-2 control-label">Nome *</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe seu Nome" required>
                   </div>
                </div>
                <div class="form-group">
                   <label for="inputEmail3" class="col-sm-2 control-label">Assunto *</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Informe o Assunto" required>
                   </div>
                </div>
                <div class="form-group">
                   <label for="inputEmail3" class="col-sm-2 control-label">E-mail *</label>
                   <div class="col-sm-10">
                       <input type="email" class="form-control" id="email" name="email" placeholder="Informe seu E-mail" required>
                   </div>
                </div>
                <div class="form-group">
                   <label for="inputEmail3" class="col-sm-2 control-label">Mensagem *</label>
                   <div class="col-sm-10">
                       <textarea class="form-control" id='mensagem' name="mensagem"  placeholder="Digite sua mensagem" required></textarea>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-10">
                       <input type="submit" class="btn btn-primary" name="enviar" value="Enviar E-mail">
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#formulario').submit(function() {
                var dados = $('#formulario').serialize();

                $.ajax({
                    type : 'POST',
                    url  : 'envia_email.php',
                    data : dados,
                    dataType: 'json',
                    success :  function(response){
                        $('#mensagem').css('display', 'block')
                            .removeClass()
                            .addClass(response.tipo)
                            .html('')
                            .html('<p>' + response.mensagem + '</p>');
                    }
                });

                return false;
            });
        });
    </script>
</body>
</html>