<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI calculator</title>
</head>
<body>
    <main>
        <h1>BMI calculator</h1>
        <p>Vul hieronder uw lengte in centimeters is en uw gewicht in kilogrammen</p>
        <label for="length">lengte</label>
        <input id="length" type="number" value=<?php $length ?> placeholder=<?php $length ?>>
        <label for="weight">gewicht</label>
        <input id="weight" type="range" min=40 max=180 stap=5 value=<?php $weight ?>>
        <input id="weight" type="number" value=<?php $weight ?>>
        <input type="button" >
        <?php echo 'hello' ?>
        <?php 

            // if BMI is less than 18.5 display Ondergewicht (te laag gewicht)
            if($bmi <= 18.5) 
                // if length is less than 150 display next line
                echo "Ondergewicht (te laag gewicht)";
                // if length is bigger than 150 and less than 170 display next line
            elseif($bmi > 18.5 && $bmi <= 24.9 ) 
                echo "Gezond gewicht";
                // if length is bigger than 170 and less than 210 display next line
            elseif($bmi > 25 && $bmi <= 30 ) 
                echo "Overgewicht";
                // if length is bigger than 210 display next line
            elseif($bmi > 30)
                echo "yErnstig overgewicht (obesitas)";
        ?>
    </main>
</body>
</html>