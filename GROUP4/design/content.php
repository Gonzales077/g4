<section class="vh-100" id="backgroundSection" style="position: relative; overflow: hidden;">
  <div class="background-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-size: cover; background-position: center; transition: opacity 1s ease-in-out, transform 4s ease-in-out; z-index: -1;"></div>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card shadow-sm" style="border-radius: 10px;">
          <div class="card-body p-4">
            <div class="text-center">
              <img src="design/logo.png" style="width: 150px;" alt="Logo">
              <h4 class="mt-3 mb-4 pb-1">Login</h4>
            </div>

            <form id="loginForm">
              <div class="mb-3">
                <label class="form-label" for="loginStudentID">Student Name</label>
                <input type="name" id="loginStudentID" name="student_id" class="form-control" placeholder="Enter Name" style="border: 1px solid gray;">
              </div>
              <div class="mb-3">
                <label for="loginPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="loginPassword" placeholder="Enter Password" style="background-color: white; border: 1px solid gray;">
              </div>
              <button type="submit" id="loginButton" class="btn btn-primary w-100">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>