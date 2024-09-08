<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pt4(i)</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    .container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 10px;
    }

    select, button {
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    button {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    p {
        margin-top: 10px;
    }

    @media only screen and (max-width: 600px) {
        .container {
            width: 90%;
            margin: 10px auto;
        }
    }
</style>
</head>
<body>

<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="carName">Select Car Name:</label>
        <select id="carName" name="carName" required>
            <option value="">Select Car</option>
            <option value="Safari">Safari</option>
            <option value="Nexon">Nexon</option>
            <option value="Tigor">Tigor</option>
            <option value="Tiago">Tiago</option>
            <option value="XUV700">XUV700</option>
            <option value="XUV300">XUV300</option>
            <option value="Bolero">Bolero</option>
            <option value="i20">i20</option>
            <option value="Verna">Verna</option>
            <option value="Venue">Venue</option>
            <option value="Creta">Creta</option>
            <option value="Swift">Swift</option>
            <option value="Alto">Alto</option>
            <option value="Baleno">Baleno</option>
            <option value="Brezza">Brezza</option>
        </select>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $carName = $_POST["carName"];

        // Lookup table for car companies
        $carCompanies = [
            "Safari" => "Tata",
            "Nexon" => "Tata",
            "Tigor" => "Tata",
            "Tiago" => "Tata",
            "XUV700" => "Mahindra",
            "XUV300" => "Mahindra",
            "Bolero" => "Mahindra",
            "i20" => "Hyundai",
            "Verna" => "Hyundai",
            "Venue" => "Hyundai",
            "Creta" => "Hyundai",
            "Swift" => "Suzuki",
            "Alto" => "Suzuki",
            "Baleno" => "Suzuki",
            "Brezza" => "Suzuki"
        ];

        // Check if car name exists in the lookup table
        if (array_key_exists($carName, $carCompanies)) {
            $company = $carCompanies[$carName];
            echo "<p>The car \"$carName\" belongs to \"$company\".</p>";
        } else {
            echo "<p>No company found for the car \"$carName\".</p>";
        }
    }
    ?>

</div>

</body>
</html>
