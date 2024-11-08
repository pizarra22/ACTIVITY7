<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Data</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
 
<body class="bg-success">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4" class="bg-primary">Student Information Form</h3>
                </div>
                <div class="card-body">
                    <form action="ShowData.php" method="post">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputAge" class="form-label">Age</label>
                                <input type="number" class="form-control" id="inputAge" name="age" placeholder="Enter your age" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="inputGender" class="form-label">Gender</label>
                                <input type="text" class="form-control" id="inputGender" name="gender" placeholder="Enter your gender" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCourse" class="form-label">Course</label>
                                <input type="text" class="form-control" id="inputCourse" name="course" placeholder="Enter your course" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="inputCampus" class="form-label">Campus</label>
                                <input type="text" class="form-control" id="inputCampus" name="campus" placeholder="Enter your campus" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCollege" class="form-label">College</label>
                                <input type="text" class="form-control" id="inputCollege" name="college" placeholder="Enter your college" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form>
                </div>                
            </div>
        </div>
    </div>
   
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2023</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>