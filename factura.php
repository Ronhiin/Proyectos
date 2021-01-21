<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <img src="logo.jpg" >
    </div>
    <div class="flex-container">
        <div class="flex1">
            <div class="grid1">
                <?php 
            echo htmlspecialchars($_POST['nempresa']); 
            ?>
            </div>
            <div class="grid2">NIE/NIF:                 <?php 
            echo htmlspecialchars($_POST['nie']); 
            ?></div>
            <div class="grid2"><?php 
            echo htmlspecialchars($_POST['domicilioempresa']); 
            ?> </div>
            <div class="grid2"><?php 
            echo htmlspecialchars($_POST['codpost']); 
            echo " - ";
            echo htmlspecialchars($_POST['poblacion']); 
            echo " - ";
            echo htmlspecialchars($_POST['provinciaempresa']); 
            ?> </div>
            </div>

            <div class="grid2"> </div>
        
        <div class="flex2">
            <div class="grid2"> </div>
            <div class="flex-container2">
                <div class=g rid3>
                    FACTURA Nº
                </div>
                <div class=g rid3>
                <?php 
            echo htmlspecialchars($_POST['numerofactura']); 
            ?>
                </div>
            </div>

            <div class="flex-container2">
                <div class=g rid3>
                    FECHA
                </div>
                <div class=g rid3>
                <?php 
            echo htmlspecialchars($_POST['fechafactura']); 
            ?>
                </div>
            </div>
        </div>
        <div class="grid2"> </div>
    </div>

    <div class="grid-container">
        <div class="item0">CLIENTE</div>
        <div class="item1">Razón Social:</div>
        <div class="item1 negrita">    <?php 
            echo htmlspecialchars($_POST['razonsocial']); 
            ?></div>
        <div class="item1">CIF:</div>
        <div class="item1"> <?php 
            echo htmlspecialchars($_POST['cif']); 
            ?></div>
        <div class="item1">Dirección:</div>
        <div class="item1"><?php 
            echo htmlspecialchars($_POST['direccion']); 
            ?>
        </div>
        <div class="item1"> </div>
        <div class="item1"> </div>
        <div class="item1">Población:</div>
        <div class="item1"><?php 
            echo htmlspecialchars($_POST['poblacioncliente']); 
            ?></div>
        <div class="item1">Provincia:</div>
        <div class="item1"><?php 
            echo htmlspecialchars($_POST['provincia']); 
            ?></div>
    </div>
    <div class="grid-container2">
        <div class="item02">CONCEPTO</div>
        <div class="item12">VEHÍCULO</div>
        <div class="item12">MATRICULA</div>
        <div class="item12 negrita">IMPORTE EUR.</div>
        <div class="item002"><?php 
            echo htmlspecialchars($_POST['concepto']); 
            ?></div>
        <div class="item22"><?php 
            echo htmlspecialchars($_POST['vehiculo']); 
            ?></div>
        <div class="item22"><?php 
            echo htmlspecialchars($_POST['matricula']); 
            ?></div>
        <div class="item22"><?php 
            echo htmlspecialchars($_POST['importe']); 
            ?>€</div>
    </div>
    <div class="grid-container3">
        <div class="item13 negrita">BASE IMPONIBLE:</div>
        <div class="item23"><?php 
            $importe = (int) ($_POST['importe']);
            echo ($importe); 
            ?>€</div>
        <div  class="item13 negrita">I.R.P.F (1%)</div>
        <div  class="item23"><?php 
            echo ($importe * 0.01);
        ?>€</div>
        <div  class="item13 negrita">I.V.A (21%)</div>
        <div  class="item23"><?php 
            echo ($importe * 0.21);
        ?>€</div>
        <div class="item13 negrita">TOTAL FACTURA:</div>
        <div class="item23 negrita"><?php 
            echo ($importe + ($importe*0.21)+ ($importe*0.01));
        ?>€</div>
    </div>
    <div  class="firma">
        <!---<p>FIRMA DEL TRANSPORTISTA:</p>-->
        <img src="firma.jpeg">
    </div>
    <div><form><input type="button" value="Imprimir" onclick="javascript:window.print()" /></form></div>
</body>

</html>