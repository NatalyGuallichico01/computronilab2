<?php include ("db.php") ?>
<div class="container p-4">
    <form action="equipos" method="POST">
    <div class="equiments">
    <input type="submit" class="btn btn-success btn-block" name="saveEquipment" value="Guardar">
    <input type="submit" class="btn btn-danger" name="saveEquiment" value="Eliminar">
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
                <!--<input type="text" name="names" >-->
            </label>
        </div>
        <div class="form-group">
            <?php 
            $query= "SELECT * FROM equipo";
            $result=mysqli_query($conn, $query);
            
              ?>
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
                    <!--<option value="2">Impresora</option>
                    <option value="3">CPU</option>
                    <option value="4">Monitor</option>
                    <option value="5">Teblet</option>
                    <option value="6">Todo en uno</option>
                    <option value="7">Disco</option>
                    <option value="8">Play station</option>-->
                </select>
        </div>
        <div class="form-group">
            <label>Estado: 
                <input type="text" name="estado" >
            </label>
        </div>
        <br>
        <br>
        <div class="tableEquiments">
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>IdCliente</th>
                    <th>Cliente</th>
                    <th>Equipo</th>
                    <th>Serie</th>
                    <th>Aprobación</th>
                    <th>Reparación</th>
                </tr>
            </thead>
            <tbody>
              
                
                <td>1</td>
                <td>Kevin Gramal</td>
                <td>portatil</td>
                <td>a43d</td>
                <td>En espera</td>
                <td>Finalizado</td>
            </tbody>
            </table>
        </div>

        <div class="footer">
            <label>Saldo pendiente:
                <input type="text">
            </label>
            <input type="submit" class="btn btn-info" name="saveEquiment" value="Por entregar">
        </div>
</div>
    </form>
</div>




