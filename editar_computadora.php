<?php
require_once ("functions/functions.php");
updateComputer();
$id = $_GET['id'];
$query = "SELECT * FROM computers WHERE id = $id";
$run = mysqli_query($connection,  $query);
$row = mysqli_fetch_array($run);
include_once ("includes/header.php");
?>


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Computadoras</h1>
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
                            <label for="">Modelo</label>
                            <input type="text" name="modelo" value="<?php echo $row['modelo'] ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Nombre del equipo</label>
                            <input type="text" name="computername" value="<?php echo $row['computername'] ?>"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label for=""># Serie</label>
                            <input type="text" name="serial" value="<?php echo $row['serial'] ?>"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Disco Duro</label>
                            <input type="text" name="hd" value="<?php echo $row['hd'] ?>"  class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="">Memoria</label>
                            <input type="text" name="memory" value="<?php echo $row['memory'] ?>"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Clase</label>
                            <input type="text" name="class" value="<?php echo $row['class'] ?>"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">OS</label>
                            <input type="text" name="os" value="<?php echo $row['os'] ?>"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Ubicacion</label>
                            <input type="text" name="location" value="<?php echo $row['location'] ?>"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Usuario</label>
                            <input type="text" name="username" value="<?php echo $row['username'] ?>"  class="form-control">
                        </div>

                        <input type="submit" name="submit" value="Guardar" class="btn btn-primary">
                    </form>

                </div>
                
                

            </div>
        </main>
    </div>
</div>

<?php include_once ("includes/footer.php");?>
