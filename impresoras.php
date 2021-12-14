<?php
require_once ("functions/functions.php");
insertPrinter();
include_once ("includes/header.php")
?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Impresoras</h1>
        <div class="btn-toolbar mb-2 mb-md-0">


        </div>
    </div>



    <h2>Impresoras</h2>
    <div class="table-responsive">

        <a class="btn btn-primary" href="computadoras.php">Computadoras</a>
        <a class="btn btn-primary" href="impresoras.php">Impresoras</a>


        <div class="row">

            <form method="post">


                <div class="form-group">
                    <label for="">Marca</label>
                    <input type="text" name="brand" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Modelo</label>
                    <input type="text" name="model" class="form-control">
                </div>

                <div class="form-group">
                    <label for=""># Serie</label>
                    <input type="text" name="serial" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Puerto</label>
                    <input type="text" name="port" class="form-control">
                </div>



                <input type="submit" name="submit" value="Guardar" class="btn btn-primary">
            </form>

        </div>


        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Serial</th>
                <th scope="col">Puerto</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            <?php viewPrinters(); ?>
            </tbody>
        </table>
    </div>
</main>
</div>
</div>

<?php include_once ("includes/footer.php"); ?>
