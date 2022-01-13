<?php include ("db.php") ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-6">

        <?php if (isset($_SESSION['message'])){?>
            <div  class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset();} ?>

            <form action="saveComponent.php" method="POST">
            <div class="form-group">
                <label>Orden No.-
                    <input type="text" name="orden" autofocus>
                </label>
            </div>
            <div class="form-group">
                <label>Cliente: 
                    <select name="names">
                    <?php 
                        $sql="select * from cliente";
                        $buscador=$conn->query($sql);
                        while ($fila=$buscador->fetch_array()){
                           echo "<option value='".$fila['IDCLIENTE']."'>".$fila['NOMBRE']." ".$fila['APELLIDO']."</option>";
                        }

                     ?>
                     </select> 
                </label>
            </div>
            <div class="form-group">
                <label>Equipo: 
                    <input type="text" name="equipo" >
                </label>
            </div>
            <div class="form-group">
            <label>Estado: </label>
                <select name="estado">
                    <option value="..." selected></option>
                    <option value="diagnosticada" >diagnosticada</option>
                    <option value="en proceso">en proceso</option>
                    <option value="por diagnosticar">por diagnosticar</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label>Componentes: 
                <input type="text" name="componentes" >
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addComponent">
                    
                    <i class="fas fa-plus"></i>
                    </button>
                </label>
                <br>
                <br>
                <textarea name="diagnostico"  cols="50" rows="7" placeholder="Diagnóstico"></textarea>
                
            </div>
            
        </div>
        
        <div class="col-md-6">
            <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
            <input type="submit" class="btn btn-success btn-info" name="save" value="En proceso">
            <input type="submit" class="btn btn-success btn-warning" name="save" value="Finalizado">
            <input type="submit" class="btn btn-success btn-danger" name="save" value="Eliminar">
        </div>
    </div>

    <div class="footerDiagnostico">
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>Garantía: </label>
                <select name="garantia">
                    <option value="..." selected></option>
                    <option value="3meses" >3 meses</option>
                    <option value="6meses">6 meses</option>
                    <option value="12meses">12 meses</option>
                    
                </select>
            </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Técnico Responsable: 
                    <input type="text" name="names" >
                    </label>
                </div>
                <div class="form-group">
                    <label>Fecha de reparación: 
                    <input type="text" name="names" >
                    </label>
                </div>
                <br>
                <br>
                <input type="submit" class="btn btn-outline-info" name="save" value="Proforma">
            </div>
        </div>
    </div>
    </form>
</div>








<!-- Button trigger modal -->


<!-- Modal -->
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