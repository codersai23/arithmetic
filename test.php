
<?php 

    $chk1 = "checked";

    $infotext = $ans = $chk2 = $chk3 = $chk4 = $chk5 = "";

    $num1 = isset($_POST['txtNum1'])  ? floatval($_POST['txtNum1']) : "";

    $num2 = isset($_POST['txtNum2'])  ? floatval($_POST['txtNum2']) : "";

    $rad  = isset($_POST['txtRadio']) ? $_POST['txtRadio'] : "";

    $visibility = "visibility_off";



    if(isset($_POST['btnCalculate'])) {

        $visibility = "visibility_on";


        switch ($rad) {

            case "Addition":

                $ans = round(($num1 + $num2), 2);

                $infotext = '<div class="answer"> Answer = '.$ans.'</div>';

                $chk1 = 'checked';

                break;

            case "Subtraction":

                $ans = round(($num1 - $num2), 2);

                $infotext = '<div class="answer"> Answer = '.$ans.'</div>';

                $chk1 = "";

                $chk2 = "checked";

                break;

            case "Multiplication":

                $ans = round(($num1 * $num2), 2);

                $infotext = '<div class="answer"> Answer = '.$ans.'</div>';

                $chk1 = "";

                $chk3 = "checked";

                break;

            case "Division":

                $ans = round(($num1 / $num2), 2);

                $infotext = '<div class="answer"> Answer = '.$ans.'</div>';

                $chk1 = "";

                $chk4 = "checked";

                break;

            case "Modulo":

                $ans = round(($num1 % $num2), 2);

                $infotext = '<div class="answer"> Answer = '.$ans.'</div>';

                $chk1 = "";
    
                $chk5 = "checked";
    
                break;

        }

    }

?>

<!DOCTYPE html>

<html lang="en">

    <head>


    </head>

    <body>

        <main>
                <div class="container-wrapper">

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="frmBasicMath">

                        Enter First Value: <input type="number" step=".01" name="txtNum1" class="txtbox" value="<?php echo $num1; ?>" placeholder="Input First Number" required> <br>

                        Enter Second<input type="number" step=".01" name="txtNum2" class="txtbox" value="<?php echo $num2; ?>" placeholder="Input Second Number" required> <br>



                        <div class="radioboxWrapper">

                            <label class="radiobox">

                                <input type="radio" name="txtRadio" value="Addition" <?php echo $chk1; ?>> Addition

                                <span class="checkmark"></span>

                            </label>

                            <label class="radiobox">

                                <input type="radio" name="txtRadio" value="Subtraction" <?php echo $chk2; ?>>Subtraction

                                <span class="checkmark"></span>

                            </label>

                            <label class="radiobox">

                                <input type="radio" name="txtRadio" value="Multiplication" <?php echo $chk3; ?>> Multiplication

                                <span class="checkmark"></span>

                            </label>

                            <label class="radiobox">

                                <input type="radio" name="txtRadio" value="Division" <?php echo $chk4; ?>>Division

                                <span class="checkmark"></span>

                            </label>
                            
                            <label class="radiobox">

                                <input type="radio" name="txtRadio" value="Modulo" <?php echo $chk5; ?>>Modulo
                                
                                <span class="checkmark"></span>
                            
                            </label>

                        </div>



                        <div class="btnWrapper">

                            <button type="submit" class="btnCalculate" name="btnCalculate">Calculate</button>

                        </div>



                        <?php echo $infotext; ?>

                    </form>

                </div>

            </div>

        </main>

    </body>

</html>
