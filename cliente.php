<?php include ("db.php") ?>
<div class="container p-4">
        <div class="row">
            <div class="col-md-8">
                <?php if (isset($_SESSION['message'])){?>
                    <div  class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php session_unset();} ?>
                <div class="card card-body">
                    <form action="saveTask.php" method="POST">
                    <input type="submit" class="btn btn-success btn-block" name="saveClient" value="Guardar">
                        <h1>Información del Cliente</h1>
                        <div class="row">
                            <!-- Datos izquierda -->
                            <div class="col">
                        <div class="form-group">
                        <label>Nombre: 
                        <input type="text" name="names" autofocus>
                            </label>
                        </div>   
                        <div class="form-group">
                        <label>Apellido: 
                        <input type="text" name="lastnames" >
                            <br>
                            </label>
                        </div>
                        <div class="form-group">
                        <label>Cédula: 
                        <input type="text" name="ci">
                            <br>
                            </label>
                        </div>
                        <div class="form-group">
                        <label>Dirección: 
                        <input type="text" name="direction">
                            <br>
                            </label>
                        </div>
                        </div>

                        <!-- Datos derecha -->
                        <div class="col">
                        <div class="form-group">
                        <label>Ciudad: 
                        <input type="text" name="city">
                            </label>
                        </div>
                        <div class="form-group">
                        <label>País: 
                        <input type="text" name="country" >
                            <br>
                            </label>
                        </div>
                        <div class="form-group">
                        <label>E-mail: 
                        <input type="text" name="email">
                            <br>
                            </label>
                        </div>
                        <div class="form-group">
                        <label>Teléfono: 
                        <input type="text" name="phone">
                            <br>
                            </label>
                        </div>
                        </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
<br>
<br>
    <div class="tableClients">
        <table class="table table-bordered">
            <thead>
                <tr>
                   <th>Id</th>
                   <th>Nombres</th>
                   <th>Apellidos</th>
                   <th>Cédula</th>
                   <th>Dirección</th>
                   <th>Ciudad</th>
                   <th>País</th>
                   <th>E-mail</th>
                   <th>Teléfono</th>
                   <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Consultas a la base de datos -->
                <?php 
                $query="SELECT * FROM cliente";
                $resultClient=mysqli_query($conn, $query);
                while($row=mysqli_fetch_array($resultClient)){?>
                    <tr>
                        <td><?php echo $row['IDCLIENTE']?></td>
                        <td><?php echo $row['NOMBRE']?></td>
                        <td><?php echo $row['APELLIDO']?></td>
                        <td><?php echo $row['CI']?></td>
                        <td><?php echo $row['DIRECCION']?></td>
                        <td><?php echo $row['CIUDAD']?></td>
                        <td><?php echo $row['PAIS']?></td>
                        <td><?php echo $row['E_MAIL']?></td>
                        <td><?php echo $row['TELEFONO']?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['IDCLIENTE']?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="deleteTask.php?id=<?php echo $row['IDCLIENTE']?>" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
        </div>