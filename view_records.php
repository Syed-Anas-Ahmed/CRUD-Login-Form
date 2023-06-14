<!DOCTYPE html>
<html>
<head>
    <title>View Records</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            display: inline;
        }

        body {
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            margin-bottom: 20px;
        }

        .btn {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>View Records</h1>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
            <?php include('display_records.php')?>
        </table>

        <form method="POST" action="delete_all_records.php">
            <input type="submit" name="delete_all" value="Delete All" class="btn btn-danger">
            <a href="form.php" class="btn btn-secondary">Go back to the form</a>
        </form>

        <br>

    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
