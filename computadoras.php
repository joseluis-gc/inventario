<?php
require_once ("functions/functions.php");
insertComputer();
include_once ("includes/header.php")
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
                            <input type="text" name="modelo" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Nombre del equipo</label>
                            <input type="text" name="computername" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for=""># Serie</label>
                            <input type="text" name="serial" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Disco Duro</label>
                            <input type="text" name="hd" class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="">Memoria</label>
                            <input type="text" name="memory" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Clase</label>
                            <input type="text" name="class" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">OS</label>
                            <input type="text" name="os" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Ubicacion</label>
                            <input type="text" name="location" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Usuario</label>
                            <input type="text" name="username" class="form-control">
                        </div>

                        <input type="submit" name="submit" value="Guardar" class="btn btn-primary">
                    </form>

                </div>
                
                
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Serial</th>
                        <th scope="col">HD</th>
                        <th scope="col">Memoria</th>
                        <th scope="col">Clase</th>
                        <th scope="col">OS</th>
                        <th scope="col">Ubicacion</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php viewComputers(); ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<?php include_once ("includes/footer.php"); ?>
