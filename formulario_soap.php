<html>

<?php

include('menu1.php');
include('header.php');

?>

<form class = "formulario" action = "conversorDivisaSOAP.php" method = "POST">  

<fieldset id = identificate>

    <label for="CurrencyFrom">Divisa origen:</label>
    <select name="CurrencyFrom" id="CurrencyFrom">
    <option value="EUR">Euros</option>
    <option value="USD">Dólares americanos</option>
    <option value="VES">Bolívares</option>
    <option value="CAD">Dólar canadiense</option>
    <option value="INR">Rupia india</option>
    </select> <br>

    <label for="CurrencyTo">Divisa destino:</label>
    <select name="CurrencyTo" id="CurrencyTo">
    <option value="EUR">Euros</option>
    <option value="USD">Dólares americanos</option>
    <option value="VES">Bolívares</option>
    <option value="CAD">Dólar canadiense</option>
    <option value="INR">Rupia india</option>
    </select> <br>

    Cantidad: <input type = "text" name = "cantidad" > <br/><br/> 



    <input type = "submit" value = "Convertir">

</fieldset>

</form> <br/>


</html>