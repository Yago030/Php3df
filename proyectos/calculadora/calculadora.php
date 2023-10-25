<?php   

    if(isset($_POST['operacion']) ){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['operacion'];
        if(!empty($num1) && !empty($num2) & !empty($op)){
            //comprobamos que los numerros y valriables no esten vacios
                if(is_numeric($num1) && is_numeric($num2)){
                    //comprobamos que nos esten seteando numeros y no letras, sea seguro
                        if($op =="+"){
                            $resultado = $num1 + $num2;
                        }
                        else if($op =="-"){
                            $resultado = $num1 - $num2;
                        }
                        else if($op == "*"){
                            $resultado = $num1 * $num2;
                        }
                        else if(($op == "/") && ($num1 != 0)&& ($num2 != 0)){
                            $resultado = $num1 / $num2;
                        }else{
                            $resultado = "Esta no es una operación valida";
                        }
                }
            }else{
                //is numeric else
                $resultado = "No has ingresado numeros, por favor revisa";
            };
    }else{
        $resultado = "Debes completar ambos campos";
    };
    
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
    
    <title>Calculadora</title>
</head>
<body>

    <div class="container">
        <div class="calc">
            <h2>Calculadora</h2>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <label for="num1">Digita el primer Numero : </label>
                    <input type="number" name="num1" value="<?php  if(isset($_POST['num1'])){
                        echo $_POST['num1'];
                    } ?>">
                    <label for="num1">Digita el Segundo Numero : </label>
                    <input type="number" name="num2"  value="<?php  if(isset($_POST['num2'])){
                        echo $_POST['num2'];
                    } ?>">

                    <div class="op">
                        <input type="submit" name="operacion" value="+">
                    </div>

                    <div class="op">
                        <input type="submit" name="operacion" value="-">
                    </div>

                    <div class="op">
                        <input type="submit" name="operacion" value="/">
                    </div>

                    <div class="op">
                        <input type="submit" name="operacion" value="*">
                    </div>

                    <h3 class="resultado"> 
                        <?php if(isset($resultado)){
                            echo $resultado;
                        } ?>
                    </h3>

            </form>
        </div>
    </div>

    
</body>
</html>