<?php
    require_once('includes/functions.php');

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if($_POST['submit']) {
    $from_value = $_POST['from_value'];
    $from_unit = $_POST['from_unit'];
    $to_unit = $_POST['to_unit'];

    $to_value = convert_volume($from_value, $from_unit, $to_unit);
}

$volume_options = array(
    'gallons', 'quarts', 'liters', 'pints', 'cups', 'ounces', 'tablespoons', 'teaspoons', 'milliliters'
);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Cook's Converter</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="main">
        <section>
            <h1>The Cook's Converter</h1>
    
            <form action="" method="post" class="form-container">
    
                <div class="form">
                    <label class="text">Your Measurement:</label>&nbsp;
                    <br>
                    <input class="input-field" type="text" name="from_value" value="<?php echo $unit; ?>" />
                    <div name="convert-from" class="buttons">

                        <?php 
                        foreach($volume_options as $unit) {
                            echo "<input type=\"radio\" id=\"from_$unit\" name=\"from_unit\" value={$unit}>";
                            // if(isset($_POST[$unit])) { echo $_POST[$unit]; };
                            echo "<label for=\"from_$unit\" class=\"button\">{$unit}</label>";
                            
                        };

                        ?>
                    </div> <!--convert-from -->
                </div><!--from form -->
                <div class="form">
                    <label class="text">Converted Measurement:</label>&nbsp;
                    <br>
                    <input class="input-field" type="text" name="to_value" value="<?php echo $to_value; ?>"/>
                    <div name="convert-to" class="buttons">

                    <?php 
                        foreach($volume_options as $unit) {
                            echo 
                            "<input type=\"radio\" id=\"to_$unit\" name=\"to_unit\" value={$unit}>";
                            // if($to_unit == $unit) { echo "checked"; };
                            echo "<label for=\"to_$unit\" class=\"button\">{$unit}</label>";
                            
                        };

                        ?>

                    </div> <!--convert-to -->
                </div><!--to form-->
                <input class="submit" type="submit" name="submit" value="Submit">
            </form>
           
        </section>   
    </div><!--main-->
    
</body>
</html>