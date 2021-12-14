<?php
require_once ("functions/functions.php");
updatePrinter();
$id = $_GET['id'];
$query = "SELECT * FROM printer WHERE id = $id";
$run = mysqli_query($connection,  $query);
$row = mysqli_fetch_array($run);
include_once ("includes/header.php");
?>


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Impresoras</h1>
                <div class="btn-toolbar mb-2 mb-md-0">


                </div>
            </div>


            
            <h2>Equipos</h2>
            <div class="table-responsive">

                <a class="btn btn-primary" href="computadoras.php">Computadoras</a>
                <a class="btn btn-primary" href="impresoras.php">Impresoras</a>


                <div class="row">

                    <form method="post">


                        <div class="form-group">
                            <label for="">Marca</label>
                            <input type="text" name="brand" value="<?php echo $row['brand'] ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Modelo</label>
                            <input type="text" name="model" value="<?php echo $row['modelo'] ?>"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label for=""># Serie</label>
                            <input type="text" name="serial" value="<?php echo $row['serial'] ?>"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Puerto</label>
                            <input type="text" name="port" value="<?php echo $row['port'] ?>"  class="form-control">
                        </div>



                        <input type="submit" name="submit" value="Guardar" class="btn btn-primary">
                    </form>

                </div>
                
                

            </div>
        </main>
    </div>
</div>

<?php include_once ("includes/footer.php");?>
