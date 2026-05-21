<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Senior UI/UX Designer</title>
 <?php include 'header.php'; ?>


  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Inter, sans-serif;
      background: #F7F9FC;
      margin: 0;
      color: #0B1437;
    }

    .container {
      max-width: 1100px;
      margin: auto;
      padding: 140px 20px 80px;
    }

    .back {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      border: 2px solid #0B1437;
      border-radius: 999px;
      padding: 10px 22px;
      text-decoration: none;
      color: #0B1437;
    }

    .back::before {
      content: "←";
    }

    .row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 30px;
    }

    h1 {
      margin: 0;
    }

    .date {
      color: #6B7280;
    }

    .apply {
      display: flex;
      align-items: center;
      gap: 10px;
      border: 1px solid #0B1437;
      border-radius: 999px;
      padding: 8px 20px;
      cursor: pointer;
    }

    .circle {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: linear-gradient(135deg, #1D4ED8, #22D3EE);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
    }

    .meta {
      display: flex;
      justify-content: space-between;
      border-top: 1px solid #ddd;
      border-bottom: 1px solid #ddd;
      padding: 16px 0;
      margin-top: 25px;
    }

    .section {
      margin-top: 40px;
    }

    .section p {
      line-height: 1.7;
      color: #4B5563;
    }

    ul {
      margin-left: 20px;
      color: #4B5563;
    }

    .form {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
    }

    .field {
      display: flex;
      flex-direction: column;
    }

    input,
    select,
    textarea {
      width: 100%;
      height: 56px;
      border: 1px solid #ccc;
      border-radius: 12px;
      padding: 0 16px;
    }

    textarea {
      height: 140px;
      padding-top: 12px;
    }

    .phone,
    .salary {
      display: flex;
      border: 1px solid #ccc;
      border-radius: 12px;
      overflow: hidden;
      align-items:center;
    }

    .phone select {
      width: 90px;
      border: none;
    }

    .phone input {
      flex: 1;
      border: none;
    }

    .salary input {
      flex: 1;
      border: none;
    }

    .salary select {
      width: 110px;
      border: none;
      border-left: 1px solid #ccc;
    }

    .inline {
      display: flex;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
      align-items: center;
    }

    .full {
      grid-column: 1/-1;
    }

    .error {
      color: red;
      font-size: 12px;
      display: none;
    }

    .submit button {
      display: flex;
      align-items: center;
      gap: 10px;
      border: 1px solid #0B1437;
      border-radius: 999px;
      padding: 10px 22px;
      background: none;
      cursor: pointer;
      transition: all 0.2s ease;
      margin-top: 20px;
    }
      
      .submit button:hover{
        background:#0B1437;
        color:white;
    }

      .submit button:hover .circle{
        background:white;
        color:#0B1437;
    }

    .upload {
      border: 2px dashed #D1D5DB;
      border-radius: 16px;
      padding: 48px;
      margin-top: 20px;
      margin-bottom: 30px;
      text-align: center;
      color: #9CA3AF;
      cursor: pointer;
    }

    .auto {
      display: block;
      margin-left: auto;
      margin-bottom: 30px;
      padding: 10px 16px;
      border-radius: 999px;
      border: 1px solid #D1D5DB;
      background: white;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .auto:hover {
      background: #f3f4f6;
    }

    .error {
      color: red;
      font-size: 12px;
      margin-top: 6px;
      display: none;
    }

    .field {
      display: flex;
      flex-direction: column;
      position: relative;
    }
    
    select{
      appearance:none;
      -webkit-appearance:none;
      -moz-appearance:none;
      background:none;
      border:none;
      height:56px;
      padding:0 40px 0 16px;
      font-size:14px;
      cursor:pointer;
    }

    
    .salary select,
    .phone select,
    .inline select,
    .field > select{
      background-image:url("data:image/svg+xml;utf8,<svg fill='%230B1437' height='20' viewBox='0 0 20 20' width='20' xmlns='http://www.w3.org/2000/svg'><path d='M5 7l5 5 5-5z'/></svg>");
      background-repeat:no-repeat;
      background-position:right 12px center;
      background-size:16px;
    }
    
    .field > select{
      border:1px solid #ccc;
      border-radius:12px;
      height:56px;
      padding:0 40px 0 16px;
    }
        
    .inline select{
      border:1px solid #ccc;
      border-radius:12px;
      height:56px;
      padding:0 40px 0 16px;
      flex:1;
    }

    .inline{
      display:flex;
      gap:10px;
    }

  </style>
</head>

<body>

  <div class="container">

    <a href="https://teal-mule-553916.hostingersite.com/career.php" class="back">
      Back to Job Openings
    </a>

    <div class="row">
      <div>
        <h1>Senior UI/UX Designer</h1>
        <div class="date">Closing Date: 30 November 2026</div>
      </div>

      <div class="apply" onclick="document.getElementById('form').scrollIntoView()">
        <div class="circle">→</div>Apply for this job
      </div>
    </div>

    <div class="meta">
      <div>06+ Years | Full Time | Remote | Chennai</div>
    </div>

    <div class="section">
      <h2>About the Role</h2>
      <p>We are looking for a highly skilled and experienced Senior UI/UX Designer to lead the design of intuitive,
        engaging, and <br />
        user-centric digital experiences. In this role, you will collaborate closely with product managers, developers,
        and <br />
        stakeholders to translate complex requirements into elegant design solutions that align with business goals and
        user <br />
        needs.<br />
        You will play a key role in shaping the overall user experience, establishing design standards, and mentoring
        junior designers <br />
        while driving innovation across projects</p>
    </div>

    <div class="section">
      <h2>Key Responsibilities</h2>
      <ul>
        <li>Lead end-to-end UI/UX design processes from research and ideation to final delivery</li>
        <li>Create wireframes, prototypes, and high-fidelity designs for web and mobile platforms</li>
        <li>Conduct user research, usability testing, and gather insights to improve user experience</li>
        <li>Collaborate with cross-functional teams to define product requirements and design strategies</li>
        <li>Maintain and evolve design systems, ensuring consistency across all digital touchpoints</li>
        <li>Translate complex concepts into simple, intuitive user flows and interfaces</li>
        <li>Stay updated with the latest design trends, tools, and technologies</li>
        <li>Mentor and guide junior designers, fostering a culture of creativity and excellence</li>
      </ul>
    </div>

    <div class="section">
      <h2>Required Skills & Qualifications</h2>
      <ul>
        <li>6+ years of experience in UI/UX design or a related field</li>
        <li>Strong portfolio showcasing user-centered design solutions and case studies</li>
        <li>Proficiency in design tools such as Figma, Adobe XD, Sketch, or similar</li>
        <li>Solid understanding of UX principles, interaction design, and usability best practices</li>
        <li>Experience with responsive and mobile-first design</li>
        <li>Strong problem-solving skills and attention to detail</li>
        <li>Excellent communication and collaboration skills</li>
      </ul>
    </div>

    <div class="section">
      <h2>Preferred Qualifications</h2>
      <ul>
        <li>Experience working in Agile/Scrum environments</li>
        <li>Knowledge of front-end technologies (HTML, CSS, basic JavaScript)</li>
        <li>Experience in design systems and component libraries</li>
        <li>Exposure to industries like healthcare, enterprise IT, or SaaS platforms</li>
      </ul>
    </div>

    <div id="form" class="section">
      <h2>Enter your details</h2>


      <div class="upload" onclick="document.getElementById('resume').click()">
        Upload your resume
        <input type="file" id="resume" hidden accept=".pdf,.doc,.docx">
      </div>

      <button class="auto" type="button">Auto fill below fields</button>

      <form onsubmit="return validateForm()">

        <div class="form">

          <!-- NAME -->
          <div class="field">
            <label>First Name *</label>
            <input minlength="2" maxlength="30" oninput="this.value=this.value.replace(/[^A-Za-z ]/g,'')" required>
          </div>

          <div class="field">
            <label>Last Name *</label>
            <input minlength="2" maxlength="30" oninput="this.value=this.value.replace(/[^A-Za-z ]/g,'')" required>
          </div>

          <!-- EMAIL -->
          <div class="field">
            <label>Email *</label>
            <input id="email" required>
            <span id="emailError" class="error">Enter valid email</span>
          </div>

          <!-- PHONE -->
          <div class="field">
            <label>Phone *</label>
            <div class="phone">
              <select>
                <option>+1</option>
                <option>+91</option>
                <option>+44</option>
              </select>
              <input id="phone" maxlength="15" oninput="validatePhone(this)" required>
            </div>
            <span id="phoneError" class="error">Invalid phone number</span>
          </div>

          <!-- ROLE -->
          <div class="field">
            <label>What role are you applying for *</label>
            <select required>
              <option value="">Select</option>
              <option>Senior UI/UX Designer</option>
              <option>Product Designer</option>
              <option>Visual Designer</option>
            </select>
          </div>

          <!-- EXPERIENCE -->
          <div class="field">
            <label>Experience *</label>
            <div class="inline">
              <select required>
                <option>6</option>
                <option>5</option>
                <option>7</option>
              </select>
              <select required>
                <option>Years</option>
                <option>Months</option>
              </select>
            </div>
          </div>

          <!-- SALARY -->
          <div class="field">
            <label>Current Salary *</label>
            <div class="salary">
              <input id="currentSalary" maxlength="10" oninput="checkSalary(this,'salaryError')" required>
              <select>
                <option>INR</option>
                <option>USD</option>
                <option>EUR</option>
              </select>
            </div>
            <span id="salaryError" class="error">Enter valid salary</span>
          </div>

          <div class="field">
            <label>Expected Salary *</label>
            <div class="salary">
              <input id="expectedSalary" maxlength="10" required>
              <select>
                <option>INR</option>
                <option>USD</option>
                <option>EUR</option>
              </select>
            </div>
            <span id="expectedSalaryError" class="error">Enter valid salary</span>
          </div>

          <!-- DAYS -->
          <div class="field">
            <label>Available to join (in days) *</label>
            <div class="salary">
              <input id="days" maxlength="3" oninput="checkDays()" required>
            </div>
            <span id="daysError" class="error">Enter valid days</span>
          </div>

          <!-- URL -->
          <div class="field">
            <label>Portfolio *</label>
            <input id="url" oninput="validateURL()" required>
            <span id="urlError" class="error">Enter valid URL (https://)</span>
          </div>

          <div class="field full">
            <label>Message</label>
            <textarea></textarea>
          </div>

        </div>

        <div class="submit">
          <button type="submit">
            <div class="circle">→</div>
            Submit application
          </button>
        </div>

      </form>

    </div>

  </div>

  <script>

    document.addEventListener("DOMContentLoaded", function () {

      /* ------------------ VALIDATE ON SUBMIT ------------------ */
      window.validateForm = function () {

        let email = document.getElementById("email").value.trim();
        let url = document.getElementById("url").value.trim();
        let phone = document.getElementById("phone").value.trim();
        let currentSalary = document.getElementById("currentSalary").value.trim();
        let expectedSalary = document.getElementById("expectedSalary").value.trim();
        let days = document.getElementById("days").value.trim();

        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let urlPattern = /^(https?:\/\/)[^\s]+$/;

        let valid = true;

        /* EMAIL */
        if (!emailPattern.test(email)) {
          showError("emailError");
          valid = false;
        } else hideError("emailError");

        /* URL */
        if (!urlPattern.test(url)) {
          showError("urlError");
          valid = false;
        } else hideError("urlError");

        /* PHONE */
        if (
          phone.length < 7 || 
          phone.length > 15 || 
          /^0+$/.test(phone)
        ) {
          showError("phoneError");
          valid = false;
        } else hideError("phoneError");

        /* CURRENT SALARY */
        if (!/^[1-9][0-9]*$/.test(currentSalary)) {
          showError("salaryError");
          valid = false;
        } else hideError("salaryError");

        /* EXPECTED SALARY */
        if (!/^[1-9][0-9]*$/.test(expectedSalary)) {
          showError("expectedSalaryError");
          valid=false;
        } else hideError("expectedSalaryError");

        /* DAYS */
        if (!/^[1-9][0-9]*$/.test(days) || days > 180) {
          showError("daysError");
          valid = false;
        } else hideError("daysError");

        return valid;
      };

      /* ------------------ HELPER FUNCTIONS ------------------ */
      function showError(id) {
        document.getElementById(id).style.display = "block";
      }

      function hideError(id) {
        document.getElementById(id).style.display = "none";
      }

      /* ------------------ PHONE LIMIT ------------------ */
      window.validatePhone = function (input) {

        let code = document.querySelector(".phone select").value;
        let value = input.value.replace(/[^0-9]/g, '');

        let maxLength = 10;

        if (code === "+1") maxLength = 10;
        if (code === "+91") maxLength = 10;
        if (code === "+44") maxLength = 10;

        if (value.length > maxLength) {
          value = value.slice(0, maxLength);
        }

        input.value = value;
      };

      /* ------------------ Inline Validations ------------------ */

      // EMAIL
      document.getElementById("email").addEventListener("input", function () {
        let val = this.value.trim();
        let pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        !pattern.test(val) ? showError("emailError") : hideError("emailError");
      });

      // URL
      document.getElementById("url").addEventListener("input", function () {
        let val = this.value.trim();
        let pattern = /^(https?:\/\/)[^\s]+$/;

        !pattern.test(val) ? showError("urlError") : hideError("urlError");
      });

      // PHONE
      document.getElementById("phone").addEventListener("input", function () {
        let val = this.value;
        
        if (
            val.length < 7 ||
            /^0+$/.test(val)
        ) {
            showError("phoneError");
          } else {
            hideError("phoneError");
          }
      });

      // CURRENT SALARY
      document.getElementById("currentSalary").addEventListener("input", function () {
        let val = this.value.replace(/[^0-9]/g, '');
        this.value = val;

        !/^[1-9][0-9]*$/.test(val) ? showError("salaryError") : hideError("salaryError");
      });

      // EXPECTED SALARY
      document.getElementById("expectedSalary").addEventListener("input", function () {
        
        let val = this.value.replace(/[^0-9]/g,'');
        this.value = val;

        (!/^[1-9][0-9]*$/.test(val))
        ? showError("expectedSalaryError")
        : hideError("expectedSalaryError");
      });

      // DAYS
      document.getElementById("days").addEventListener("input", function () {
        let val = this.value.replace(/[^0-9]/g, '');
        this.value = val;

        (!/^[1-9][0-9]*$/.test(val) || val > 180)
          ? showError("daysError")
          : hideError("daysError");
      });

    });

  </script>

 <?php include 'footer.php'; ?>
</body>
</html>