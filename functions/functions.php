<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'inventario';

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$connection){
    die("Error de conexion");
}


function insertComputer(){
    global $connection;

    if(isset($_POST['submit'])){
        $modelo = $_POST['modelo'];
        $name = $_POST['computername'];
        $serial = $_POST['serial'];
        $hd = $_POST['hd'];
        $memory = $_POST['memory'];
        $class = $_POST['class'];
        $os = $_POST['os'];
        $location = $_POST['location'];
        $user = $_POST['username'];

        $query = "INSERT INTO computers (modelo, computername, serial, hd, memory, class, os, location, username) VALUES 
        ('$modelo', '$name', '$serial', '$hd', '$memory', '$class', '$os', '$location', '$user')";

        $run = mysqli_query($connection, $query);
        if($run){
            echo "Computadora Agregada con exito!";
        }
        else{
            echo "Error al agregar computadora" . $query;
        }

    }
}

function updateComputer(){
    global $connection;

    if(isset($_POST['submit'])){

        $id = $_GET['id'];

        $modelo = $_POST['modelo'];
        $name = $_POST['computername'];
        $serial = $_POST['serial'];
        $hd = $_POST['hd'];
        $memory = $_POST['memory'];
        $class = $_POST['class'];
        $os = $_POST['os'];
        $location = $_POST['location'];
        $user = $_POST['username'];

        $query = "UPDATE computers SET modelo = '$modelo', computername='$name', 
                     serial='$serial', hd='$hd', memory='$memory', class='$class', 
                     os='$os', location = '$location', username= '$user' WHERE id=$id";

        $run = mysqli_query($connection, $query);
        if($run){
            header("Location: computadoras.php?success=true");
        }
        else{
            echo "Error al agregar computadora" . $query;
        }

    }
}



function deleteComputer(){
    global $connection;

    if(isset($_POST['submit'])){

        $id = $_GET['id'];

        $query = "DELETE FROM computers WHERE id=$id";

        $run = mysqli_query($connection, $query);
        if($run){
            header("Location: computadoras.php?success=true");
        }
        else{
            echo "Error al eliminar computadora" . $query;
        }

    }
}




function viewComputers(){
    global $connection;



    $query = "SELECT * FROM computers";
    $run = mysqli_query($connection, $query);

    if($run){
        while($row = mysqli_fetch_array($run)){
        echo "
        <tr>
                        <td clas=''>{$row['id']}</td>
                        <td>{$row['modelo']}</td>
                        <td>{$row['computername']}</td>
                        <td>{$row['serial']}</td>
                        <td>{$row['hd']}</td>
                        <td>{$row['memory']}</td>
                        <td>{$row['class']}</td>
                        <td>{$row['os']}</td>
                        <td>{$row['location']}</td>
                        <td>{$row['username']}</td>
                        <td>
                            <a class='btn btn-primary' href='editar_computadora.php?id={$row['id']}'>Editar</a>
                            <a class='btn btn-danger' href='eliminar_computadora.php?id={$row['id']}'>Eliminar</a>
                        </td>
        </tr>
        
        ";
        }
    }
    else{
        echo "Error al ver computadoras" . $query;
    }

}




function insertPrinter(){
    global $connection;

    if(isset($_POST['submit'])){
        $marca = $_POST['brand'];
        $modelo = $_POST['model'];
        $serial = $_POST['serial'];
        $port = $_POST['port'];

        $query = "INSERT INTO printer (brand, modelo, serial, port) VALUES ('$marca', '$modelo', '$serial', '$port')";

        $run = mysqli_query($connection, $query);
        if($run){
            echo "Impresora Agregada con exito!";
        }
        else{
            echo "Error al agregar impresora" . $query;
        }

    }
}



function viewPrinters(){
    global $connection;



    $query = "SELECT * FROM printer";
    $run = mysqli_query($connection, $query);

    if($run){
        while($row = mysqli_fetch_array($run)){
            echo "
        <tr>
                        <td clas=''>{$row['id']}</td>
                        <td>{$row['brand']}</td>
                        <td>{$row['modelo']}</td>
                        <td>{$row['serial']}</td>
                        <td>{$row['port']}</td> 
                        <td>
                            <a class='btn btn-primary' href='editar_impresora.php?id={$row['id']}'>Editar</a>
                            <a class='btn btn-danger' href='eliminar_impresora.php?id={$row['id']}'>Eliminar</a>
                        </td>
        </tr>
        
        ";
        }
    }
    else{
        echo "Error al ver impresoras" . $query;
    }

}




function updatePrinter(){
    global $connection;

    if(isset($_POST['submit'])){
        $id    = $_GET['id'];
        $marca = $_POST['brand'];
        $modelo = $_POST['model'];
        $serial = $_POST['serial'];
        $port = $_POST['port'];

        $query = "UPDATE printer SET brand = '$marca', modelo = '$modelo', serial = '$serial', port = '$port' WHERE id = $id";
        $run = mysqli_query($connection, $query);
        if($run){
            header("Location: impresoras.php");
        }
        else{
            echo "Error al agregar impresora" . $query;
        }

    }
}


function deletePrinter(){
    global $connection;

    if(isset($_POST['submit'])){
        $id    = $_GET['id'];

        $query = "DELETE FROM printer WHERE id = $id";
        $run = mysqli_query($connection, $query);
        if($run){
            header("Location: impresoras.php");
        }
        else{
            echo "Error al agregar impresora" . $query;
        }

    }
}
