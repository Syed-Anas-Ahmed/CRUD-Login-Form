<!DOCTYPE html>
<html>
<head>
  <title>Simple Form</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .form-row {
      display: flex;
      align-items: flex-start;
      margin-bottom: 10px;
    }
    .form-row label {
      margin-right: 10px;
    }
    .form-row input[type="text"],
    .form-row input[type="email"] {
      width: 200px;
    }
    .button-group {
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }
    .button-group input {
      margin-right: 10px;
    }
  </style>
</head>

<body>
  <form action="save_form.php" method="POST" class="container">
  <div class="form-row">
    <h2>Data Entry Form</h2>
    </div>
    <div class="form-row">
      <label for="fullname">Full Name:</label>
      <input type="text" id="fullname" name="fullname" required class="form-control">
    </div>

    <div class="form-row">
      <label>Gender:</label>
      <div class="form-check form-check-inline">
        <input type="radio" id="male" name="gender" value="male" required class="form-check-input">
        <label for="male" class="form-check-label">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" id="female" name="gender" value="female" required class="form-check-input">
        <label for="female" class="form-check-label">Female</label>
      </div>
    </div>

    <div class="form-row">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required class="form-control">
    </div>

    <div class="form-row">
      <label for="phone">Phone:</label>
      <input type="text" id="phone" name="phone" required class="form-control">
    </div>

    <div class="button-group">
      <input type="submit" value="Submit" class="btn btn-primary">
      <input type="button" value="Next" class="btn btn-secondary">
    </div>
  </form>

  <!-- Include Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
