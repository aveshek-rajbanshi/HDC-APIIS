<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Registration</title>
    <link rel="stylesheet" href="../../public/stylesheets/registration.css">
</head>
<body>
  <div class="container">
    <header>Registration</header>

    <form action="../../Backend/registration_action_form.php" method="POST" enctype="multipart/form-data">
      <!-- FIRST FORM -->
      <div class="form first">
        <div class="title">Personal Details</div>
        <div class="fields">

          <div class="input-field">
            <label for="std_name">Student Name</label>
            <input type="text" name="std_name" id="std_name" placeholder="Enter your name" required />
          </div>

          <div class="input-field">
            <label for="std_email">College Email Address</label>
            <input type="email" name="std_email" id="std_email" placeholder="Enter your email" required />
          </div>

          <div class="input-field">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter password" required />
          </div>

          <div class="input-field">
            <label for="comform_password">Comform Password</label>
            <input type="password" name="comform_password" id="comform_password" placeholder="Comform password" required />
          </div>

          <div class="input-field">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" required>
              <option value="" disabled selected>Select your gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <div class="input-field">
            <label for="dob">Birth Date</label>
            <input type="date" name="dob" id="dob" required />
          </div>

          <div class="input-field">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" placeholder="Enter your address" />
          </div>

          <div class="input-field">
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" placeholder="Enter phone number" />
          </div>

        </div>

        <div class="nextBtn"><span>Next</span></div>
      </div>

      <!-- SECOND FORM -->
      <div class="form second">
        <div class="title">Academic Details</div>
        <div class="fields">

          <div class="input-field">
            <label for="std_crn">CRN</label>
            <input type="number" name="std_crn_number" id="std_crn" placeholder="Enter your CRN number" min="0" />
          </div>

          <div class="input-field">
            <label for="std_batch">Batch</label>
            <input type="text" name="std_batch" id="std_batch" placeholder="Enter batch year" />
          </div>

          <div class="input-field">
            <label for="program">Program</label>
            <select name="program" id="program" required>
              <option value="" disabled selected>Select your program</option>
              <option value="BIM">BIM</option>
              <option value="BCA">BCA</option>
              <option value="Bsc.IT">Bsc.IT</option>
            </select>
          </div>

          <div class="input-field">
            <label for="semester">Semester</label>
            <select name="semester" id="semester" required>
              <option value="" disabled selected>Select your semester</option>
              <option value="1st Semester">1st Semester</option>
              <option value="2nd Semester">2nd Semester</option>
              <option value="3rd Semester">3rd Semester</option>
              <option value="4th Semester">4th Semester</option>
              <option value="5th Semester">5th Semester</option>
              <option value="6th Semester">6th Semester</option>
              <option value="7th Semester">7th Semester</option>
              <option value="8th Semester">8th Semester</option>
            </select>
          </div>

          <!-- ===== Custom File Upload ===== -->
          <!-- <div class="input-field profile-file">
            <label for="profile_picture">Profile Picture</label>
            <div class="file-input-container">
              <input type="file" name="profile_picture" id="profile_picture" required />
              <label for="profile_picture" class="file-label">
                <span class="file-text">Choose a file</span>
              </label>
            </div>
          </div> -->

        </div>

        <div id="academic_form_buttons">
          <div class="backBtn"><span>Back</span></div>
          <div class="submitBtn">
            <input type="submit" name="Register" value="Register" />
          </div>
        </div>
      </div>
    </form>
  </div>

  <!-- ===== Simple JS to Show File Name ===== -->
  <script>
    const fileInput = document.getElementById('profile_picture');
    const fileText = document.querySelector('.file-text');

    fileInput.addEventListener('change', function() {
      if (this.files && this.files[0]) {
        fileText.textContent = this.files[0].name;
      } else {
        fileText.textContent = 'Choose a file';
      }
    });
  </script>

    <script src="../../public/javascripts/std_script.js"></script>
</body>
</html>
