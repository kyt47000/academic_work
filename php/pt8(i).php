<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2>Employee Information</h2>
    <form method="post">
        <?php
        $fields = [
            "First Name" => "firstName",
            "Last Name" => "lastName",
            "Address" => "address",
            "Phone Number" => "phoneNumber",
            "Date of Birth" => "dob",
            "Position" => "position",
            "Joining Date" => "joiningDate"
        ];

        foreach ($fields as $label => $name) {
            echo '<div class="form-group">';
            echo '<label for="' . $name . '">' . $label . ':</label>';
            echo '<input type="' . ($name == 'dob' || $name == 'joiningDate' ? 'date' : 'text') . '" class="form-control" name="' . $name . '" required>';
            echo '</div>';
        }
        ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Employee Details</h2>";
        echo "<p><strong>Company Name:</strong> XYZ Company</p>";
        foreach ($_POST as $key => $value) {
            if ($key != 'submit') {
                echo "<p><strong>" . $key. ":</strong> $value</p>";
            }
        }
    }
    ?>
</div>

</body>
</html>
