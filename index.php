<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI calculator</title>
</head>
<body>
    <main style="padding-inline-start: 1rem">
        <h1>BMI calculator</h1>
        <p>Vul hieronder je lengte in centimeters in en je gewicht in kilogram. Ben je kleiner dan 100 centimeter of weeg je minder dan 35 kilogram? Dan werkt deze tool niet goed voor jou.</p>
        <form id="bmi-form" action="" method="POST" style="padding-block-end: 1rem">
            <label for="length">lengte</label>
            <input name="length" id="length" type="number" placeholder="in cm" min="100" required>
            <label for="weight">gewicht</label>
            <input name="weight" id="weight" type="number" placeholder="in kg" min="35" required>
            <input type="submit" value="Bereken BMI">
        </form>

        <?php 
            $bmi = '';
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // show inputed data
                function displayInput() { 
                        echo "Je bent " . ($_POST["length"]/100) . " meter en je hebt een gewicht van " . $_POST["weight"] . " kilogram. </br>";
                };
                displayInput();

                // calculate BMI
                function calculateBmi() {
                global $bmi;
                $bmi = $_POST["weight"] / (($_POST["length"]/100) * ($_POST["length"] / 100));
                echo "Je BMI is " . $bmi . ".</br>";
                };
                calculateBmi();

                function displayOutcome() {
                    global $bmi; 
                // if BMI is less than 18.5 display ondergewicht (te laag gewicht)
                if($bmi < 18.5) 
                    echo "Je hebt ondergewicht (te laag gewicht).";
                // if BMI is bigger than 18.5 and less than 24.9 display Je hebt een gezond gewicht
                elseif($bmi >= 18.5 && $bmi < 25 ) 
                    echo "Je hebt een gezond gewicht.";
                // if BMI is bigger than 25 and less than 30 display Je hebt overgewicht
                elseif($bmi >= 25 && $bmi <= 30 ) 
                    echo "Je hebt overgewicht.";
                // if BMI is bigger than 30 display Je hebt overgewicht (obesitas)
                elseif($bmi > 30)
                    echo "Je hebt ernstig overgewicht (obesitas).";
                };
                displayOutcome();
            }
        ?>
    </main>
</body>
</html>