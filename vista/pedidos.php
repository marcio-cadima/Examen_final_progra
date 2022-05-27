<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/3-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/css_pedidos.css">
    
<script type="text/javascript">
/* Funcion suma. */
    function suma()
    {
        var sum1 = document.getElementById("sum1");
        var sum2 = document.getElementById("sum2");

        result = parseInt(sum1.value) * parseInt(sum2.value);

        document.getElementById("precio_t").value = result;
    }   
 </script>   
 
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Venta de Poleras</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.html">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pagina_1.html">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca.html">Acerca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="servicios.html">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactenos.html">Contactos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-white">
        <h2>Pedidos</h2>
        <h6>Llene los datos para realizar su pedido</h6>


    </div>

    <div class="container">
        
        <?php
            if(isset($_POST['btnenviar']))
            {
                $a = $_POST['p1'];
                $b = $_POST['c1'];
            }
        ?>

        <form name ="f1" method="post" action="../enrutador/enr_pedido.php" class="form-group">

            <div class="form-group">
                <label for="exampleFormControlInput1">
                    <h6 class="text-white">Su nombre:</h6>
                </label>
                <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">
                    <h6 class="text-white">Su correo electronico:</h6>
                </label>
                <input type="email" name="correo" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">
                    <h6 class="text-white">Su telefono:</h6>
                </label>
                <input type="tel" name="telefono" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">
                    <h6 class="text-white">Producto Selecionado</h6>
                </label>
                <input type="text" name="producto" class="form-control" value="<?php echo $a ?>" readonly>
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlInput1">
                    <h6 class="text-white">Precio unitario Bs.</h6>
                </label>
                <input onblur="if(this.value == ''){this.value='0'}"  onKeyUp="suma();" id="sum1" type="text" name="precio_unidad" class="form-control" value="<?php echo $b ?>" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">
                    <h6 class="text-white">Cantidad:</h6>
                </label>
                <input onblur="if(this.value == ''){this.value='0'}"  onKeyUp="suma();" id="sum2" type="number" name="cantidad" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>

           <div class="form-group">
                <label for="exampleFormControlInput1">
                    <h6 class="text-white">Precio total</h6>
                </label>
                <input type="text" name="precio_total" id="precio_t" class="form-control" readonly>
            </div>
           
            <div>
                <button type="submit" name="btn" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
