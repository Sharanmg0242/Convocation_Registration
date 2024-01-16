<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convocation Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="log.png">
</head>
<body class="body-home">
    <div class="black-fill"><br /> <br />
        <div class="container">
            <h3>Convocation Registration</h3>
            <form action="process_registration.php" method="post">
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="degree" class="form-label">Degree Program</label>
                    <input type="text" class="form-control" id="degree" name="degree" required>
                </div>
                <div class="mb-3">
                    <label for="Gender" class="form-label">Gender</label>
                    <input type="text" class="form-control" id="Gender" name="Gender" required>
                </div>
                <div class="mb-3">
                    <label for="Nationality" class="form-label">Nationality</label>
                    <input type="text" class="form-control" id="Nationality" name="Nationality" required>
                </div>
                <div class="mb-3">
                    <label for="Permenent Address" class="form-label">Permenent Address</label>
                    <input type="text" class="form-control" id="Permenent Address" name="Permenent Address" required>
                </div>
                <div class="mb-3">
                    <label for="Mobile Number" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="Mobile Number" name="Mobile Number" required>
                </div>
                <div class="mb-3">
                    <label for="graduationYear" class="form-label">Graduation Year</label>
                    <input type="number" class="form-control" id="graduationYear" name="graduationYear" required>
                </div>
                <div class="mb-3">
                    <label for="degree" class="form-label">College from which appered</label>
                    <input type="text" class="form-control" id="degree" name="degree" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <a href="index.php" class="text-decoration-none">Home</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
