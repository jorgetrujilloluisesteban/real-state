<?php
$url1 = Url::ctrUrlimg();


if(isset($_GET["id"])){

      //$url1 = Url::ctrUrlimg();

      $property = ControllerProperty::ctrShowProperty2($_GET["id"]);

          if(!$property){

            echo '<div class="col-xs-12 error404 text-center">

                 <h1><small>¡Oops!</small></h1>

                 <h2>There are no properties in this section yet</h2>

              </div>';

          }else{

                echo '

                      <!--=====================================
                      PROPERTYS
                      ======================================-->

                      <div class="container-fluid">
                  
                          
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="properties">

                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <h2 style="color:blue;">'.$property["name"].'</h2>

                                        <h4>'.$property["person-in-charge"].'</h4>

                                        <h3>£'.$property["price"].'pcm</h3>

                                        <div class="card">

                                            <img class="card-img-top" src="'.$url1.$property["photo1"].'" style="width:100%">

                                            <div class="card-body">

                                                <h5 class="card-title">'.$property["descripcion"].'</h5>

                                                <h4 class="card-text"><b>Call:</b> Phone '.$property["telephone"].'</h4>
                                                <br>

                                            </div>

                                        </div>

                                  </div>


                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <h2 style="color:blue;">'.$property["name"].'</h2>

                                        <h4>'.$property["person-in-charge"].'</h4>

                                        <h3>£'.$property["price"].'pcm</h3>

                                        <div class="card">

                                            <img class="card-img-top" src="'.$url1.$property["photo2"].'" style="width:100%">

                                            <div class="card-body">

                                                <h5 class="card-title">'.$property["descripcion"].'</h5>

                                                <p class="card-text">&nbsp;</p>

                                            </div>

                                        </div>
                                  </div>

                                  <div class="col-xs-12">
                                      <a href="#" class="btn btn-primary btn-lg">Request Details</a>

                                      <a href="index.php" class="btn btn-primary btn-lg">Back</a>
                                  </div>


                                  <div class="col-xs-12"><hr></div>
                                  </div>


                      </div>
                     ';

            }

}

?>

    <!--=====================================
        MODAL WINDOW FOR REGISTRATION
        ======================================-->

        <div class="modal fade modalFormulario" id="modalRegistro" role="dialog">

            <div class="modal-content modal-dialog">

                <div class="modal-body modalTitulo">

                  <h3 class="backColor2">REGISTER</h3>

                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                  

              <!--=====================================
              DIRECT REGISTRATION
              ======================================-->

              <form method="post" onsubmit="">

                <div class="form-group">
                  
                  <div class="input-group">
                    
            <span class="input-group-addon">
              
              <i class="glyphicon glyphicon-user"></i>
            
            </span>

                    <input type="text" class="form-control" id="regUsuario" name="regUsuario" placeholder="Name" value="" pattern="^([a-zA-Z]+[0-9]{0,2}){5,12}$" required>

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">
                    
            <span class="input-group-addon">
              
              <i class="glyphicon glyphicon-envelope"></i>
            
            </span>

                    <input type="email" class="form-control" id="regEmail" name="regEmail" placeholder="Email" value="" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">
                    
            <span class="input-group-addon">
              
              <i class="glyphicon glyphicon-lock"></i>
            
            </span>

                    <input type="password" class="form-control" id="regPassword" name="regPassword" placeholder="Password" value="" pattern="[A-Za-z0-9!?-]{5,12}" required>

                  </div>

                </div>


                <?php

                  $registro = new ControllerUser();
                  $registro -> ctrRegisterUser();

                  //unset($_POST['regUsuario']);
                  //unset($_POST['regEmail']);
                  //unset($_POST['regPassword']);

                ?>
                
                <input type="submit" id="cleanInput" class="btn btn-default backColor2 btn-block" value="SEND">  

              </form>

                </div>
              
            </div>

        </div>

    <!--=====================================
  VENTANA MODAL PARA EL INGRESO
  ======================================-->

  <div class="modal fade modalFormulario" id="modalIngreso" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

          <h3 class="backColor2">LOGIN</h3>

           <button type="button" class="close" data-dismiss="modal">&times;</button>

      <!--=====================================
      DIRECT LOGIN
      ======================================-->

      <form method="post" onsubmit="">

        <div class="form-group">
          
          <div class="input-group">
            
            <span class="input-group-addon">
              
              <i class="glyphicon glyphicon-envelope"></i>
            
            </span>

            <input type="email" class="form-control" id="ingEmail" name="ingEmail" placeholder="Email" required>

          </div>

        </div>

        <div class="form-group">
          
          <div class="input-group">
            
            <span class="input-group-addon">
              
              <i class="glyphicon glyphicon-lock"></i>
            
            </span>

            <input type="password" class="form-control" id="ingPassword" name="ingPassword" placeholder="Password" required>

          </div>

        </div>

        

        <?php

          $ingreso = new ControllerUser();
          $ingreso -> ctrLoginUser();

                  //unset($_POST['ingUsuario']);
                  //unset($_POST['ingEmail']);
                  //unset($_POST['ingPassword']);
        ?>
        
        <input type="submit" class="btn btn-default backColor2 btn-block btnIngreso" value="SEND">  

      </form>

        </div>
      
    </div>

</div>


