<?php try { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brenda Nguy</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <nav>
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="#Education">Education</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Professional Experience">Professional Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Certificates & Awards">Certificates & Awards</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#references">References</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Contact">Contact</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <section id="home">
        <h1>Brenda Nguy</h1>
        <img src="Headshot.jpg" height="200px" alt="Avatar">
        <p>I enjoy outdoor activities such as hiking, riding bikes, longboarding etc.<br> 
        My other hobbies include creativity like: drawing, building, and crafting.<br> 
        I appreciate learning new skills and concepts.</p>
        </section> 
    
        <section id="Education">
        <h2 class="headingstyle">Education</h2>
        <h3 class="school">Granger High School</h3>
                <p class="school-subtext">High School Diploma - (June 2014)<br>
                Received High School Diploma. Completed concurrent enrollment and honor classes. Dance Company team member for 3 years.</p>
        <h3 class="school">Salt Lake Community College</h3>
                <p class="school-subtext">Certificate of Completion - (May 2017)<br>
                Awarded Certificate of Completion in General Studies AS with 3.4 GPA. Gained college-level knowledge for general classes in Math, English, History, etc.</p>
        </section>
    
        <section id="Professional Experience">
        <h2 class="headingstyle">Professional Experience</h2>
        <div class="toggle-info">
        <h3><a href="https://www.skechers.com/en-us/" target="_blank">SKECHERS</a></h3>
        <ul>
            <li><h4>Sales Associate - (August 2013 – April 2014)</h4></li>
        </ul>
            <ul style="list-style: circle" class="indent">
                <li>Sale of different products</li>
                <li>Provided customer service</li> 
                <li>Contributed to on-floor recovery and restocking</li> 
                <li>Managed inventory checks</li>
                <li>Cashier</li>
            </ul>
    
            <h3><a href="https://pinnacleqi.com/" target="_blank">Pinnacle Quality Insight</a></h3>
            <ul>
                <li><h4>In-office Interviewer - (July 2014 – November 2014)</h4></li>
            </ul>
            Conducting customer satisfaction surveys with patients who use(d) Home Health and/or Hospice services.
            <ul>
                <li><h4>Quality Assurance, Editor, and Trainer - (November 2014 – February 2015)</h4></li>
            </ul>
            Listened and ensured quality assurance for calls made by in-office interviewers for Home Health and/or Hospice surveys. 
            Survey editor for completed Home Health and/or Hospice surveys. 
            Trainer for new employees conducting Home Health and/or Hospice surveys.
            <ul>
                <li><h4>Account Manager - (February 2015 – Present)</h4></li>
            </ul>
            Responsible for many client accounts. Working closely with clients to answer questions and/or concerns. 
            Performs quality control and sends completed customer satisfaction reports for many different care type facilities like, skilled nursing, assisted living, etc. for resident/patient and employee respondents. 
            In charge of gathering contact information to conduct monthly surveys. Builds web-based questionnaires using applications. Meets many different deadlines within the month. 
        </div>
        </section>

        <?php
        $mySkills = ["High Attention to Detail", "Organization", "Communication", "Customer Service", "Computer Skills (Microsoft, FileZilla, Crystal Reports)", "Problem Solving"];
        ?>

        <section id="Skills">
            <h2 class="headingstyle">Skills</h2>
            <?php
            echo "<ul>";
            foreach ($mySkills as $Skills) {
                echo "<li>" . $Skills . "</li>";
            }
            echo "</ul>";
            ?>
        </section>

        <section id="Certificates & Awards">
            <h2 class="headingstyle">Certificates & Awards</h2>
        </section>
        <section id="Portfolio">
            <h2 class="headingstyle">Portfolio</h2>
        </section>

        <section id="references">
            <h2 class="headingstyle">References</h2>
            <table id="references-table" class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email Address</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- References will be inserted using JS -->
                </tbody>
            </table>
            </section>
        
        <section id="Contact">
            <h2 class="headingstyle">Contact Me</h2>
        <?php
        try {
            $tableName = "bnguy_contact_info";

            function get_db_connection() {
                // mysql -u millersummer2020 -p -h mysql.slccwebdev.com millersummer2020
                $servername = 'mysql.slccwebdev.com';
                $database = 'millersummer20';
                $username = 'millersummer2020';
                $password = 'SLCCMillerSummer2020';
                $connection;

                try {
                    $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    print 'Connected Successfully<br>';
                } catch (PDOException $e) {
                    print 'Connection failed';
                    print $e->getMessage();
                }

                return $connection;
            }

            function create_table() {
                $conn = get_db_connection();

                try {
                    $sql = "CREATE TABLE bnguy_contact_info (
                            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            date TIMESTAMP,
                            name VARCHAR(255),
                            email VARCHAR(255),
                            phone VARCHAR(255),
                            contact_reason VARCHAR(255),
                            comment VARCHAR(255)
                        )";

                    $conn->exec($sql);
                    print "Table $tableName created successfully";

                } catch(PDOException $e) {
                    print "Could not create table: ".$e->getMessage();
                }

                $conn = null;
            }

            function populateData() {
                $conn = get_db_connection();

                try {
                    $sql = "INSERT INTO bnguy_contact_info
                                (date, name, email, phone, contact_reason, comment)
                            VALUES
                            ('".date("Y-m-d H:i:s")."','Brenda Nguy', 'brenda-nguy@hotmail.com', '801-953-2586', 'testimonial', 'Hello!')";
                    $conn->exec($sql);
                    print "Successfully inserted";
                } catch(PDOException $e) {
                    print "Could not create table $tableName: ".$e->getMessage();
                } finally {
                    $conn->close();
                }   
            }

            // create_table();
            
            populateData();

            function recordContactInformaion() {
                $connection = get_db_connection();
            }

            function cleanData($data) {
                $data = htmlspecialchars($data);
                $data = trim($data);
                $data = stripslashes($data);

                return $data;
            }
            
            $name = "";    
            $nameErr = "";
            $email = "";
            $emailErr = "";
            $phone = "";
            $phoneErr = "";
            $reasonForContacting = "";
            $reasonForContactingErr = "";
            $comments = "";
            $successMessage = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {         
        if (empty($_POST["name"])) {
            $nameErr = "The name field is required.";
        } else {
            $name = cleanData($_POST["name"]);

            if (preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $name)) {
                echo $name;
            } else {
                $nameErr = "Please enter a valid name.";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "The email field is required.";
        } else {
            $email = cleanData($_POST["email"]);

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo $email;
            } else {
                $nameErr = "Please enter a vaild email address.";
            }
        }

        if (!empty($_POST["phone"])) {
            $phone = cleanData($_POST["phone"]);

            if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)) {
                echo $phone;
            } else {
                $phoneErr = "Please enter a valid phone number.";
            }
        }

        if (empty($_POST["reasonForContacting"])) {
            $reasonForContactingErr = "The reason for contacting field is required.";
        } else {
            $reasonForContacting = cleanData($_POST["reasonForContacting"]);
            echo $reasonForContacting;
        }

        if (!empty($_POST["comments"])) {
            $comments = cleanData($_POST["comments"]);
        }

        if (!empty($name) && !empty($email) && !empty($reasonForContacting)) {
            $to = 'brenda-nguy@hotmail.com';
            $subject = 'You Have a New Message.';

            if ($reasonForContacting === 'reference') {
                $subject = 'You Have a New Reference';
            } elseif ($reasonForContacting === 'testimonial') {
                $subject = 'You Have a New Testimonial'; 
            } elseif ($reasonForContacting === 'Service-Request') {
                    $subject = 'You have a New Service Request';
            }

            $headers = "From: ".$email."\r\n";
            $headers .= "Reply-To: ".$email."\r\n";

            $emailBody = $name.' has contacted you via your resume site. Their contact information is as follows:\r\n'
                .'Name: '.$name.'\r\n'
                .'Email: '.$email.'\r\n'
                .'Phone Number: '.$phone.'\r\n'
                .'Reason For Contacting: '.$reasonForContacting.'\r\n'
                .'Comments: '.$comments.'\r\n';

            if (mail($to, $subject, $emailBody, $headers)) {
                $headers = "From: ".$to."\r\n";
                $headers .= "Reply-To: ".$to."\r\n";

                if (mail($email, 'Thank you. Your email has been sent.', $headers)) {
                    $successMessage = 'Thank you for your contact information!';
                } else {
                    // Something Broke
                }
            } else {
                // Something Broke
            }
        }
    }

    recordContactInformaion();
} catch (Exception $e) {
    echo $e;
}
    ?>

        <div class="container">       
        <section id="Contact-form">
            <form method="POST" id="form" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <label>
                    Name:<br>
                    <input type="text" id="name" name="name" placeholder=" Your Name" required>
                    
                    <?php
                    echo '<p class="invalid">'.$nameErr.'</p>';
                    ?>

                    <div class="alert alert-danger fade" role="alert" id="name-alert">
                        Please enter your full name.
                      </div>
                </label>
                <label>
                    Email Address:<br>
                    <input type="text" id="email" name="email" placeholder=" email@address.com" required>
                    
                    <?php
                    echo '<p class="invalid">'.$emailErr.'</p>';
                    ?>

                    <div class="alert alert-danger fade" role="alert" id="email-alert">
                        Please enter a valid email address.
                      </div>
                </label>
                <div>Phone Number:<br>
                <input type="text" id="phone" name="phone" placeholder=" 555-555-5555" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                    
                <?php
                echo '<p class="invalid">'.$phoneErr.'</p>';
                ?>
                    
                    </div>
            </label><br>
                <label>
                <p>Reason for contacting:</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="reasonForContacting" id="inlineRadio1" value="Reference" required>
                        <label class="form-check-label" for="inlineRadio1">Reference</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="reasonForContacting" id="inlineRadio2" value="Testimonial" required>
                        <label class="form-check-label" for="inlineRadio2">Testimonial</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="reasonForContacting" id="inlineRadio3" value="Request-Service" required>
                        <label class="form-check-label" for="inlineRadio3">Request Service</label>
                      </div>
                </label><br>

                <?php
                echo '<p class="invalid">'.$reasonForContactingErr.'</p>';
                ?>

                <label>
                    <textarea id="comments" name="comments" class="form-control" rows="5" cols="50" maxlength="280" placeholder="Comments?"></textarea>
                </label><br>
                <input type="submit" id="submit">

                <?php echo $successMessage; ?>
            
            </form>
        </section>

        <section id="contact-info">
            <h4>Contact Info</h4><br>
            <div>Email Address: brenda-nguy@hotmail.com<br><br>
            Phone Number: 801-953-2586</div>
        </section>
        </div>

        <footer>
            <a href="Brenda Nguy - Resume.pdf" target="_blank">Resume</a>
        </footer>

        <div class="modal fade" id="getUserName" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="getUserNameLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="getUserNameLabel">Welcome!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div>
                    <label for="greetingName">Please enter your name:</label>
                    <input type="text" id="greetingName">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick="greetUser();">Submit</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="greetUser" tabindex="-1" role="dialog" aria-labelledby="greetUserLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="greetUserLabel">Welcome!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <p><span id="message">Hi</span>, <span id="userName"></span>! Thank you for reviewing my resume site.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>        
    <script src="js/myJavaScript.js"></script>    
</body>
</html>
<?php } catch (Exception $e) {
    echo $e;
} ?>