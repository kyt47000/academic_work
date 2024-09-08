<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Add Employee</h1>
        <form action="add_employee.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" class="form-control" id="department" name="department" required>
            </div>
            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" class="form-control" id="designation" name="designation" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Employee</button>
            <a href="index.php" class="btn btn-primary">Back</a>
        </form>
        <?php
        require_once 'db.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $department = $_POST["department"];
            $designation = $_POST["designation"];

            $sql = "INSERT INTO emp (name, email, phone, department, designation) VALUES ('$name', '$email', '$phone', '$department', '$designation')";

            if (mysqli_query($conn, $sql)) {
                echo "Employee added successfully";
            } else {
                echo "Error adding employee: " . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>