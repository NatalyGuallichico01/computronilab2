<?php include ("db.php") ?>
<div class="container p-4">
    <div class="producto">
        <form action="readProduct.php" method="POST">
            <div class="btnProducto" style="text-align:end">
                <input type="submit" class="btn btn-success btn-block" name="save" value="Nuevo" >
                <input type="submit" class="btn btn-success btn-info" name="save" value="Actualizar">
                <input type="submit" class="btn btn-success btn-danger" name="save" value="Eliminar">
            </div>
            <br>
            <br>
            <div class="componentesProducto">
                <!-- <div class="form-group">
                    <label>Categoría: 
                        <input type="text" name="orden" >
                    </label>
                </div> -->
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
                 <?php 
                    $query= "SELECT * FROM informacioncomponente";
                    $result=mysqli_query($conn, $query);
                    while ($row=mysqli_fetch_array($result)){
                        ?>
                        <a href="readProduct.php?id=<?php echo $row['IDCOMPONENTE']?>" class="btn btn-secondary">
                    <i class="fas fa-search"></i>
                </a> 
                        <?php
                    }
                    ?>
                
                </div>
            </div>
            <br>
            <br>
            <div class="tablaProducto">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Serie</th>
                            <th>Notas</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                       <!-- consulta en la base de datos -->
                        <?php 
                        
                       $query= "SELECT * FROM informacioncomponente WHERE IDCOMPONENTE=1";
                     $resultNew=mysqli_query($conn, $query); 
                        while($row=mysqli_fetch_array($resultNew)){?>
                    <tr>
                        
                        <td><?php echo $row['MARCA']?></td>
                        <td><?php echo $row['MODELO']?></td>
                        <td><?php echo $row['SERIE']?></td>
                        <td><?php echo $row['NOTAS']?></td>
                        <?php } ?>
                    </tr>
                
                    </tbody>
                </table>
            </div>
            
        </form>
    </div>
</div>



