<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="transcenddev, Reymar V. Mirante">
  <meta name="description" content="PHP Ajax CRUD, PHP MySQL CRUD App">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Alertify CSS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <title>PHP Ajax CRUD</title>
</head>

<body>
  
  <!-- Add Student Modal -->
  <div class="modal fade" id="studentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form id="saveStudent" action="">
          <div class="modal-body">

            <div id="errorMessage" class="alert alert-warning d-none"></div>

            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3">
              <label for="course" class="form-label">Course</label>
              <input type="text" class="form-control" id="course" name="course">
            </div>
          </div>
            
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- Edit Student Modal -->  
  <div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Student</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form id="updateStudent">
          <div class="modal-body">

            <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

            <input type="hidden" name="student_id" id="student_id">

            <div class="mb-3">
            <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="edit-name" name="name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="edit-email" name="email" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="edit-phone" name="phone">
            </div>
            <div class="mb-3">
              <label for="course" class="form-label">Course</label>
              <input type="text" class="form-control" id="edit-course" name="course">
            </div>
          </div>
            
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Student</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- View Student Modal -->  
  <div class="modal fade" id="studentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">View Student</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form id="viewStudent">
          <div class="modal-body">

            <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

            <input type="hidden" name="student_id" id="student_id">

            <div class="mb-3">
            <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>
              <label for="name" class="form-label">Full Name</label>
              <p id="view-name" name="name" class="form-control"></p>
              <!-- <input type="text" class="form-control" id="view-name" name="name"> -->
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <p id="view-email" name="email" class="form-control"></p>
              <!-- <input type="email" class="form-control" id="view-email" name="email" aria-describedby="emailHelp"> -->
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <p id="view-phone" name="phone" class="form-control"></p>
              <!-- <input type="text" class="form-control" id="view-phone" name="phone"> -->
            </div>
            <div class="mb-3">
              <label for="course" class="form-label">Course</label>
              <p id="view-course" name="course" class="form-control"></p>
              <!-- <input type="text" class="form-control" id="view-course" name="course"> -->
            </div>
          </div>
            
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Student</button> -->
          </div>
        </form>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>PHP Ajax CRUD without reload page using Bootstrap Modal

              <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentAddModal">
                Add Student
              </button>
            </h4>
          </div>
          <div class="card-body">
            
            <table id="tableStudent" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Course</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require 'dbcon.php';

                $query = "SELECT * FROM students";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0)
                {
                  foreach($query_run as $student)
                  {
                    ?>
                    <tr>
                      <td><?= $student['id'] ?></td>
                      <td><?= $student['name'] ?></td>
                      <td><?= $student['email'] ?></td>
                      <td><?= $student['phone'] ?></td>
                      <td><?= $student['course'] ?></td>
                      <td>
                        <button type="button" value="<?=$student['id'];?>" class="viewStudentBtn btn btn-info">View</button>
                        <button type="button" value="<?=$student['id'];?>" class="editStudentBtn btn btn-success">Edit</button>
                        <button type="button" value="<?=$student['id'];?>" class="deleteStudentBtn btn btn-danger">Delete</button>
                      </td>
                    </tr>
                    <?php
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  


  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- Alertify -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

  <script>
    // Add Student
    $(document).on('submit', '#saveStudent', function (e) {
      e.preventDefault(); 

      var $errorMessage = $('#errorMessage');
      var $studentAddModal = $('#studentAddModal');
      var $saveStudentForm = $('#saveStudent');

      var formData = new FormData(this);
      formData.append("save_student", true);

      $.ajax({
        type: "POST",
        url: "code.php",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (response) {
          if (response.status === 422) {
            $errorMessage.removeClass('d-none').text(response.message); 
          } else if (response.status === 200) {
            $errorMessage.addClass('d-none');
            $studentAddModal.modal('hide');
            $saveStudentForm[0].reset();

            alertify.set('notifier','position', 'top-right');
            alertify.success(response.message);

            $('#tableStudent').load(location.href + " #tableStudent");
          }
        }
      });
    });
    
    // Edit Button
    $(document).on('click', '.editStudentBtn', function (e) {
      e.preventDefault(); 

      const student_id = $(this).val();
      const url = `code.php?student_id=${student_id}`;

      $.ajax({
          type: "GET",
          url,
          dataType: "json",
          success: function (response) {
            console.log(response); 

          if (response.status === 422) {
            alert(response.message);
          } else if (response.status === 200) {
            $('#student_id').val(response.data.id);
            $('#edit-name').val(response.data.name);
            $('#edit-email').val(response.data.email);  
            $('#edit-phone').val(response.data.phone);
            $('#edit-course').val(response.data.course);
            $('#studentEditModal').modal('show');
          }
        }
      });
    });

    // Update Student
    $(document).on('submit', '#updateStudent', function (e) {
      e.preventDefault();

      var $errorMessage = $('#errorMessageUpdate');
      var $studentEditModal = $('#studentEditModal');
      var $updateStudent = $('#updateStudent');

      var formData = new FormData(this);
      formData.append("update_student", true);

      $.ajax({
        type: "POST",
        url: "code.php",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json", 
        success: function (response) {

          if (response.status === 422) {
            $errorMessage.removeClass('d-none').text(response.message);
          } else if (response.status === 200) {

            $errorMessage.addClass('d-none');

            alertify.set('notifier','position', 'top-right');
            alertify.success(response.message);

            $studentEditModal.modal('hide');
            $updateStudent[0].reset();

            $('#tableStudent').load(location.href + " #tableStudent");
          }
        }
      });
    });

    // View Button
    $(document).on('click', '.viewStudentBtn', function (e) {
      e.preventDefault(); 

      const student_id = $(this).val();
      const url = `code.php?student_id=${student_id}`;

      $.ajax({
          type: "GET",
          url,
          dataType: "json",
          success: function (response) {
            console.log(response); 

          if (response.status === 422) {

            alert(response.message);
          } else if (response.status === 200) {
            $('#view-name').text(response.data.name);
            $('#view-email').text(response.data.email);  
            $('#view-phone').text(response.data.phone);
            $('#view-course').text(response.data.course);

            $('#studentViewModal').modal('show');
          }
        }
      });
    });

    // Delete Student
    $(document).on('click', '.deleteStudentBtn', function (e) {
      e.preventDefault(); 

      if(confirm('Are you sure you want to delete this data?')) 
      {
        var student_id = $(this).val();
        $.ajax({
          type: "POST",
          url: "code.php",
          data: {
            'delete_student': true,
            'student_id': student_id
          },
          dataType: "json",
          success: function (response) {
            if (response.status === 500) {

            alert(response.message);
            } else if (response.status === 200) {

              // alert(response.message);
              alertify.set('notifier','position', 'top-right');
              alertify.success(response.message);

              $('#tableStudent').load(location.href + " #tableStudent");
            }
          }
        });
      }
    });

  </script>

</body>

</html>