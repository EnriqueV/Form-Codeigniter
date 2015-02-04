<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="<?= base_url() ?>css/estilos.css" type="text/css" />
        <title>Contactanos</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#send_data").submit(function(){
                $.ajax({
                    url: $(this).attr("action"),
                    type: $(this).attr("method"),
                    data: $(this).serialize(),
                    beforeSend:function(){
                        $(".loader").show();
                    },
                    success:function(){
                        $(".loader").fadeOut("slow");
                    }
                });
 
            });
            return false;
        });
        </script>
    </head>
    <body>
        <fieldset>
            <legend>Envianos Tu Mensaje:</legend>
            <div class="row">
                 <form id="send_data" action="http://localhost/formulario_cod_ajax/formulario/nuevo_comentario" method="post" class="col s12">
                     <div class="input-field col s12"><label for="first_name">Nombre:</label><input type="text"  name="nom" value="<?php echo set_value('nom'); ?>" /><?php echo form_error('nom', '<span class="error">', '</span>'); ?></div>
                     <div class="row">
                     <div class="input-field col s12"><label for="email">Email:</label><input type="text" name="email" value="<?php echo set_value('email'); ?>" /><?php echo form_error('email', '<span class="error">', '</span>'); ?></div></div>
                     <div class="input-field col s12" ><label for="username">Asunto:</label><input type="text" name="asunto" value="<?php echo set_value('asunto'); ?>" /><?php echo form_error('asunto', '<span class="error">', '</span>'); ?></div>
                     <div class="input-field col s12"><label>Mensaje:</label><textarea
                     class="materialize-textarea" name="mensaje"><?php echo set_value('mensaje'); ?></textarea><?php echo form_error('mensaje', '<span class="error">', '</span>'); ?></div>
                     <div><label></label><input class="btn waves-effect waves-light" type="submit" value="Enviar mensaje" title="Enviar mensaje"></div ><div class="loader"><img src="http://localhost/formulario_cod_ajax/images/282.gif"></div>
                     <input type="hidden" name="grabar" />
                     <?php
                     if($this->uri->segment(1)=="mensaje" and $this->uri->segment(2)=="enviado")
                     {
                     ?>
                         <div class="correcto">El mensaje se envío correctamente</div>
                     <?php
                     }
                     ?>
                </form>
                </div>
        </fieldset>

         <footer class="page-footer card-panel teal lighten-2">
                  <div class="container">
                    <div class="row">
                      <div class="col l6 s12">
                        <h5 class="white-text"> Webslinder</h5>
                        <p class="grey-text text-lighten-4"></p>
                      </div>
                      <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                          <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                          <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                          <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                          <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        <ul>
                      </div>
                    </div>
                  </div>
                  <div class="footer-copyright">
                    <div class="container">
                    © 2015 WebSlinder
                    <a class="grey-text text-lighten-4 right" href="#!"></a>
                    </div>
                  </div>
                </footer>
 </footer>       
    </body>
</html>
