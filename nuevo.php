<?php include ("db.php") ?>
<div class="container p-4">
    <?php if (isset($_SESSION['message'])){?>
        <div  class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php session_unset();} ?>
<form action="saveTask.php" method="POST">
<h3>Datos del Cliente</h3>

<div class="datosCliente">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Orden No.- 
                    <input type="text" name="idOrder" autofocus>
                </label>
            </div>
            <!-- consulta a la base de datos-->
            <?php
            include("db.php");
 

            $query= "SELECT * FROM cliente WHERE IDCLIENTE=53";
                //$query="SELECT * FROM cliente";
                $resultNew=mysqli_query($conn, $query);
                
                while($row=mysqli_fetch_array($resultNew)){?>
                    
                            <div class="form-group">
                <label>Nombre:
                <input type="text" name="names" value= "<?php echo $row['NOMBRE']?>" readonly>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCliente">
                        <i class="fas fa-plus"></i>
                        </button>
                </label>
            </div> 
            <div class="form-group">
                <label>Apellido: 
                    <input type="text" name="lastnames" value="<?php echo $row['APELLIDO']?>" readonly>
                </label>
            </div>
            <div class="form-group">
                <label>Cédula: 
                    <input type="text" name="CI" value="<?php echo $row['CI']?>" readonly>
                </label>
            </div>
            <div class="form-group">
                <label>Dirección: 
                    <input type="text" name="direction" value="<?php echo $row['DIRECCION']?>" readonly >
                </label>
            </div>
                     
                <?php } ?>
              
            
                   
            
        </div>
    </form>
        
        <div class="col-6">
        
        <form action="saveEquipment.php" method="POST">
            
        <input type="submit" class="btn btn-success btn-block" name="saveOrder" value="Guardar">
        <input type="submit" class="btn btn-success btn-warning" name="updateOrder" value="Actualizar">
        <input type="submit" class="btn btn-success btn-danger" name="deleteOrder" value="Eliminar">
        <!--Consulta a la base de datos-->
        

        <div class="form-group">
                <label>Fecha de ingreso: 
                    <input type="text" name="dateAdmission" >
                </label>
            </div>
            <div class="form-group">
                <label>Fecha posible entrega: 
                    <input type="text" name="dateDeliver" >
                </label>
            </div>
        </div>
    </div>
</div>

<br>
<br>

<div class="datosEquipo">

    <div class="row">
        <?php 
            $query= "SELECT * FROM equipo";
            $result=mysqli_query($conn, $query);
            
              ?>
        <div class="col-6">
        <div class="form-group">
                <label for="equipo">Equipo </label>
                <select name="equipo">
                    <?php
                    if ($result>0){
                       while($equipo=mysqli_fetch_array($result)){
                        ?>
                         <option value="<?php echo $equipo["IDEQUIPO"]; ?>"><?php echo $equipo["EQUIPO"] ?></option> 
                        <?php
                        } 
                       }
                    ?>
        
                </select>
            </div>
            <div class="form-group">
                <label>Marca: 
                    <input type="text" name="marca" >
                </label>
            </div>
            <div class="form-group">
                <label>Serie: 
                    <input type="text" name="serie" >
                </label>
            </div>
            <div class="form-group">
                <label>Componente: 
                    <input type="text" name="componente" >
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addComponent">
                        <i class="fas fa-plus"></i>
                        </button>
                </label>
            </div>
        </div>
        <div class="col-6">
        <div class="form-group">
                <label>Modelo: 
                    <input type="text" name="modelo" >
                </label>
            </div>
        </div>
    </div>
    </div>

    <br>
    <br>
    <div class="tableNew">
        <table class="table table-bordered">
        <thead>
                <tr>
                   <!--<th>Id</th>-->
                   <th>Equipo</th>
                   <th>Marca</th>
                   <th>Serie</th>
                   <th>Modelo</th>
                  
                </tr>
            </thead>
            <tbody>
                <!-- Consultas a la base de datos -->
                <?php 
                $queryEquipment="SELECT de.MARCA, de.SERIE, de.MODELO, e.EQUIPO FROM detalleequipos de INNER JOIN equipo e ON de.IDEQUIPO=e.IDEQUIPO; ";
                $resultEquipment=mysqli_query($conn, $queryEquipment);
                while($row=mysqli_fetch_array($resultEquipment)){?>
                    <tr>
                        <td><?php echo $row['EQUIPO']?></td>
                        <td><?php echo $row['MARCA']?></td>
                        <td><?php echo $row['SERIE']?></td>
                        <td><?php echo $row['MODELO']?></td>
                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<br/>
<br/>
    <div class="footer">
        <div class="row">
               
            <div class="col-6">
            <textarea name="notes" cols="50" rows="7" placeholder="Notas:"  ></textarea>
            </div>
            <div class="col-6">
            <textarea name="problem" cols="50" rows="7" placeholder="Problema:" ></textarea>
            </div>
                

            
        </div>
        
        
        
    </div>
    </form>
</div>

<?php

?>





<!-- Modal Datos Cliente -->
<div class="modal fade" id="addCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="saveTask.php" method="POST">
      <div class="modal-header">

      
<?php 
$alert = '';
if(!empty($_POST)){
  echo $alert ="Ha dado click en ingresar";

   }

?>


        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="form-group">
            <label>Ingrese el nombre: </label>
            <input class="form-control" type="text" name="names" id="names" placeholder="Ingrese el nombre">
            <label id="lblNombre" style="color:green"></label>
        </div>

        <div class="form-group">
            <label>Ingrese el apellido: </label>
            <input class="form-control" type="text" name="lastnames" id="lastnames" placeholder="Ingrese el apellido" >
            <label id="lblAapellido" style="color:green"></label>
        </div>

        <div class="form-group">
            <label>Ingrese la cédula: </label>
            <input class="form-control" type="text" name="ci" id="CI" placeholder="Ingrese la cédula" require>
            <label id="lblCI" style="color:green"></label>
        </div>

        <div class="form-group">
            <label>Ingrese la dirección: </label>
            <input class="form-control" type="text" name="direction" id="direction" placeholder="Ingrese la dirección" require>
            <label id="lblDireccion" style="color:green"></label>
        </div>
        <div class="form-group">
            <label>Ingrese la ciudad: </label>
            <input class="form-control" type="text" name="city" id="city" placeholder="Ingrese la ciudad" require>
            <label id="lblCiudad" style="color:green"></label>
        </div>
        <div class="form-group">
            <label>Ingrese el país: </label>
            <input class="form-control" type="text" name="country" id="country" placeholder="Ingrese el país" require>
            <label id="lblPais" style="color:green"></label>
        </div>
        <div class="form-group">
            <label>Ingrese el E-mail: </label>
            <input class="form-control" type="text" name="email" id="email" placeholder="Ingrese el E-mail" require>
            <label id="lblEmail" style="color:green"></label>
        </div>
        <div class="form-group">
            <label>Ingrese el teléfono: </label>
            <input class="form-control" type="text" name="phone" id="phone" placeholder="Ingrese el teléfono" require>
            <label id="lblTelefono" style="color:green"></label>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-success btn-block" name="saveClient" value="Guardar cambios">
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Componente -->
<div class="modal fade" id="addComponent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="saveComponent.php" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Componentes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="form-group">
            <?php 
            $query= "SELECT * FROM componente";
            $result=mysqli_query($conn, $query);
            
              ?>
            <label for="componente">Componente </label>
                <select name="componente">
                    <?php
                    if ($result>0){
                       while($componente=mysqli_fetch_array($result)){
                        ?>
                         <option value="<?php echo $componente["IDCOMPONENTE"]; ?>"><?php echo $componente["COMPONENTE"] ?></option> 
                        <?php
                        } 
                       }
                    ?>
                </select>
            
            <label id="lblComponente" style="color:green"></label>
        </div>
        <br>

        <div class="form-group">
            <label>Ingrese el modelo: </label>
            <input class="form-control" type="text" name="modelo" id="modelo" placeholder="Ingrese el modelo">
            <label id="lblModelo" style="color:green"></label>
        </div>

        <div class="form-group">
            <label>Ingrese la marca: </label>
            <input class="form-control" type="text" name="marca" id="marca" placeholder="Ingrese la marca">
            <label id="lblMarca" style="color:green"></label>
        </div>

        <div class="form-group">
            <label>Ingrese la serie: </label>
            <input class="form-control" type="text" name="serie" id="serie" placeholder="Ingrese la serie">
            <label id="lblSerie" style="color:green"></label>
        </div>
        <div class="form-group">
            <textarea name="notasComponente"  cols="50" rows="7" placeholder="Notas:"></textarea>
            <label id="lblSerie" style="color:green"></label>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar cambios">
      </div>
      </form>
    </div>
  </div>
</div>

<?php include ("footer.php")?>