<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Cory Trbojevic</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee|Fira+Sans" rel="stylesheet">
  </head>

  <body>
    <header>
      <p class="picture">
        <img src="images/headshot.png" alt="headshot of myself" id="headshot"/>
      </p>

      <div id="nav" class="nav">
        <nav>
          <ul>
            <li class="menu">
              <a href="#about">BIO</a>
            </li>
            <li class="menu">
              <a href="#education">EDUCATION</a>
            </li>
            <li class="menu">
              <a href="#experience">EXPERIENCE</a>
            </li>
            <li class="menu">
              <a href="#contact">CONTACT</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="aboutMe">
      <div id="aboutDiv">
        <a name="about"></a>
        <h1>Bio</h1>
        <p>
          Hi! I'm a Computer Science student at the University of Pittsburgh.<br>
          I also work for the university as a technical consultant at the IT support desk.<br>
          When I'm not studying or working, I'm probably playing an RPG, listening to music,<br>
          or reading about politics.
        </p>
      </div>
    </section>

    <section id="myEducation">
      <div id="educationDiv">
        <a name="education"></a>
        <h1>Education</h1>

        <ul class="outer">
          <li>
            <p>
              University of Pittsburgh, Pittsburgh, PA (August 2013 to present)
            </p>

            <ul class="inner">
              <li>
                <p>
                  B.S. Computer Science (May 2017)
                </p>
              </li>
              <li>
                <p>
                  GPA 3.9
                </p>
              </li>
            </ul>
          </li>
          <li>
            <p>
              Duquesne University, Pittsburgh, PA (August 2012 to May 2013)
            </p>

            <ul class="inner">
              <li>
                <p>
                  GPA 3.75
                </p>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </section>


    <section id="myExperience">
      <div id="experienceDiv">
        <a name="experience"></a>
        <h1>Experience</h1>

        <ul class="outer">
          <li>
            <p>
              Software Engineering Internship (June 2016 to August 2016)<br>
              PNC, Pittsburgh, PA<br>
              <em>Internship</em>
            </p>

            <ul class="inner">
              <li>
                <p>
                  Wrote an SDK for utilizing the new corporate and institutional banking check deposit API
                </p>
              </li>
              <li>
                <p>
                  Created two sample applications (Android and iOS) which used the MiSnap check scanning SDK to demonstrate best practices for creating check deposit applications using the check deposit SDK
                </p>
              </li>
              <li>
                <p>
                  Utilized the Agile-Scrum software development methodology
                </p>
              </li>
            </ul>
          </li>
          <li>
            <p>
              Software Engineering Internship (June 2015 to August 2015)<br>
              PNC, Pittsburgh, PA<br>
              <em>Internship</em>
            </p>

            <ul class="inner">
              <li>
                <p>
                  Utilized Java Server Faces, Primefaces, Spring IO, and MyBatis to create a graphical CRUD application for an Oracle database used by a data transformation system, along with a database backed service registry to display the web services offered by the engineering team
                </p>
              </li>
              <li>
                <p>
                  Gained knowledge about service oriented architecture and java enterprise frameworks, along with experience in a corporate software engineering environment
                </p>
              </li>
            </ul>
          </li>
          <li>
            <p>
              Student Technical Consultant (August 2014 to Present)<br>
              University of Pittsburgh CSSD, Pittsburgh, PA<br>
              <em>Student position</em>
            </p>

            <ul class="inner">
              <li>
                <p>
                  Troubleshooting for network connectivity, software errors, malware, etc. on PCs (Windows, Macintosh, and Linux) and mobile devices (Android, iOS, and Windows)
                </p>
              </li>
              <li>
                <p>
                  Software installation: supported and unsupported applications, along with operating systems and the appropriate drivers
                </p>
              </li>
              <li>
                <p>
                  Involved cooperating with coworkers to ensure the best possible solution for the issues the client was facing
                </p>
              </li>
            </ul>
          </li>
          <li>
            <p>
              Landscaping Crew Member (June 2007 to August 2014)<br>
              Donald and Son Tree Service and Landscaping, Glassport, PA<br>
              <em>Summer position</em>
            </p>

            <ul class="inner">
              <li>
                <p>
                  Landscaping and tree removal
                </p>
              </li>
              <li>
                <p>
                  Required working as a team to ensure the safe and efficient completion of the job and the satisfaction of the customer
                </p>
              </li>
            </ul>
          </li>
        </ul>


        <h1>Skills</h1>

        <ul class="outer">
          <li>
            <p>
              Programming Languages
            </p>

            <ul class="inner">
              <li>
                <p>
                  Proficient: Java, C, MIPS
                </p>
              </li>
              <li>
                <p>
                  Prior Experience: Swift, Javascript, HTML/CSS, SQL
                </p>
              </li>
            </ul>
          </li>
          <li>
            <p>
              Development Tools
            </p>

            <ul>
              <li>
                <p>
                  Build Tools: Gradle, Maven
                </p>
              </li>
              <li>
                <p>
                  IDEs: Eclipse, Xcode, Android Studio (IDEA)
                </p>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </section>

    <section id="contactMe">
      <div id="contactDiv">
        <a name="contact"></a>
        <h1>Contact Me</h1>

        <div class="flex-parent">
          <div id="inputs">
            <form action="php/insertData.php" method=POST onsubmit="return submitForm();">
              <fieldset class="flex-field">
                <ul class="flexed">
                  <li>
                    <label for="firstName">First Name:</label>
                    <input id="firstName" type="text" name="firstName" placeholder="First Name">
                  </li>
                  <li>
                    <label for="lastName">Last Name:</label>
                    <input id="lastName" type="text" name="lastName" placeholder="Last Name">
                  </li>
                  <li>
                    <label for="email">Email Address:</label>
                    <input id="email" type="text" name="email" placeholder="Email Address"><br>
                  </li>
                </ul>
              </fieldset>

              <div id="messageBox">
                <textarea id="message" name="message" rows="15" cols="50" placeholder="Message"></textarea>
                <p id="error">
                  <!-- JavaScript will fill this as part of error handling. -->
                </p>

                <input type="submit" value="Submit">
              </div>

              <div class="clear"></div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/myScript.js"></script>
    <noscript>You need to turn on JavaScript for this to work!</noscript>
  </body>
</html>