<?php include ("db.php") ?>
<div class="container p-4">
    <div class="reportes">
        <form action="" method="POST">
            <div class="btnReportes" style="text-align:end">
                <input type="submit" class="btn btn-success btn-warning" name="save" value="Actualizar" >
            </div>
            <br>
            <br>
            <div class="contenidoReportes">
                <div class="form-group">
                    <label>No.- Orden: 
                        <input type="text" name="orden" >
                    </label>
                </div>
                <div class="form-group">
                    <label>Cliente: 
                        <input type="text" name="cliente" >
                    </label>
                </div>
                <div class="form-group">
                    <label>Equipo </label>
                        <select name="equipo">
                        <option value="..." selected></option>
                        <option value="portatil">Portátil</option>
                        <option value="impresora">Impresoras</option>
                        <option value="cpu">CPU</option>
                        <option value="pantalla">Pantalla</option>
                        <option value="teclado">Teclado</option>
                        </select>
                </div>
                <div class="form-group">
                    <label>Estado: 
                        <input type="text" name="estado" >
                    </label>
                </div>
            </div>
            <br>
            <br>
            <div class="tableReportes">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id Equipo</th>
                            <th>Equipo</th>
                            <th>Cliente</th>
                            <th>Serie</th>
                            <th>Aprobación</th>
                            <th>Reparación</th>
                            <th>Forma de Pago</th>
                            <th>Entrega</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>