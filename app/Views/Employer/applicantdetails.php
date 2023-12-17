<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Job Details</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/employer/dist/css/adminlte.min.css') ?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <!-- Add your left navbar links here if needed -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- Add your navbar search form here if needed -->
    </ul>
  </nav>
  <!-- /.navbar -->
<?= $this->include('Employer/inc/sidebar')?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employer Details</h1>
          </div>
          <div class="col-sm-6">
            <!-- Add any additional content header elements here if needed -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- Employer Details Card -->
            <div class="card card-primary">
              <div class="card-body">
                <p><strong>Employer Name:</strong> <?=$details['app_fullname']?></p>
                <p><strong>Email:</strong> <?=$details['app_email']?></p>
                <p><strong>Contact Number:</strong> <?=$details['app_contact']?></p>
                <p><strong>Address:</strong> <?=$details['app_address']?></p>
                <p><strong>Status:</strong> <?=$details['app_status']?></p>
                <p><strong>Company:</strong> <?=$details['emp_company']?></p>
                <p><strong>Job Title:</strong> <?=$details['emp_title']?></p>
                <p><strong>Location:</strong> <?=$details['emp_location']?></p>
                <p><strong>Salary:</strong> <?=$details['emp_salary']?> <strong>Per:</strong> <?=$details['emp_per']?></p>
              </div>
              
                <form action="<?= site_url('applicant_hired/') . $details['application_id'] ?>" method="post">
                    <div class="form-group">
                      <label for="responseMessage">Your Response</label>
                     
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="Hired">
                        <label class="form-check-label" for="option1">
                          Hire
                        </label>
                        <br>
                        <input class="form-check-input" type="radio" name="status"  value="Reject">
                        <label class="form-check-label" for="option2">
                          Reject
                        </label>
                      </div>
                      <textarea class="form-control" id="responseMessage" name="respond" rows="3"
                        placeholder="Enter your response"></textarea>
                    </div>
                </div>
                <div class="form-check">
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Send Respond</button>
                  </div>
                </form>

                
              <div class="card-footer">
                <a href="<?= site_url('/jobpost') . $details['application_id'] ?>" class="btn btn-success">Back</a>
  

              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<!-- Bootstrap 4 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/employer/dist/js/adminlte.min.js') ?>"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url('assets/employer/plugins/bs-custom-file-input/bs-custom-file-input.min.js') ?>"></script>
<!-- Your custom scripts go here if needed -->
</body>
</html>
