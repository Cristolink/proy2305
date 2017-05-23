<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <?php if(isset($_SESSION['USR'])) { ?>
            <A href="cerrar.php">Cerrar Sesión</a>
            <?php }
            ?>
        </div>
        
     
          <?php if (!isset($_SESSION['USR'])){ ?>
          <form action="revision.php" method="POST">
              <table border="3"><tr><td>Usuario</td><td>Contraseña</td></tr>
                  <tr><td><input type="text" name="nombre"/></td><td><input type="paswword" name="clave"/></td></tr>
                  <tr rowspan="2"><td rowspan="2"> <input type="submit" value="Acceder"></td></tr>
              </table>
              
              
             
          </form>
          <?php }?>
    </body>
</html>
