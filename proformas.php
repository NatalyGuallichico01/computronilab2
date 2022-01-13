<?php include ("db.php") ?>
<div class="container p-4">
    <div class="proforma" >
        <form action="" method="POST">
            <div class="btnProforma" style="text-align:end">
                <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar" >
                <input type="submit" class="btn btn-success btn-danger" name="save" value="Eliminar">
            </div>
            <br>
            <br>
            <div class="form-group">
                <label>No.- Orden: 
                    <input type="text" name="orden" >
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

            

            <br>
            <br>
            <div class="tableProforma">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Precio Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <div class="costos" style="text-align:center">
                <div class="form-group">
                    <label>Subtotal: 
                        <input type="text" name="subtotal" >
                    </label>
                </div>
                <div class="form-group">
                    <label>IVA (12%): 
                        <input type="text" name="iva" >
                    </label>
                </div>
                <div class="form-group">
                    <label>Descuento: 
                        <input type="text" name="descuento" >
                    </label>
                </div>
                <div class="form-group" style="font-weight:bold">
                    <label>Total: 
                        <input type="text" name="total" >
                    </label>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Abono: 
                            <input type="text" name="total" >
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pago con: </label>
                            <select name="formaPago">
                            <option value="..." selected></option>
                            <option value="transferencia" >transferencia</option>
                            <option value="efectivo">efectivo</option>
                            <option value="cheque">cheque</option>
                            </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>