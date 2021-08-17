<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="discussion hidden">
    <form action="php/shoot.php" method="POST">
        <input type="text" class="form-control" name="name" placeholder="what can I call you" required autofocus>
        <input type="text" class="form-control" name="email" placeholder="email" required>
        <textarea name="message" id="" cols="30" rows="10" class="form-control" required></textarea>
        <button class="btn">Shoot your shot!</button>
        <button class="btn btn-red" id="close-discussion">Close</button>
    </form>
</div>
    
<div class="row">
  <div class="column brief">
    <img src="images/me.jpeg" alt="Mustapha Alaba" class="profile-image" width="200">
    <h1 class="name">Mustapha Olalekan Alaba</h1>
    <p class="intro">
        I am passionate about tech and how it can help improve the life of young Africans. I am a computer science graduate from universifty of ilorin who is keen at continously increasing my knowledge in tech and imparting such knowledge to young ones earlier in their life. In summary real I build solutions as software and humans using tech skills I have acquired.
    </p>
    <div class="contact">
        <button class="btn" id="open-discussion">Open for discussion</button>
    </div>
    <div class="zuri-links">
        <a href="https://zuri.team/" target="_blank">
            <img src="images/zuri-logo-full.svg" alt="Zuri">
        </a>

        <a href="https://hng.tech/" target="_blank">
            <img src="images/hng.png" alt="HNG Internship" width="300">
        </a>
        
        <a href="http://ingressive.org/" target="_blank">
            <img src="images/ingressive.png" alt="ingressive for good" width="300">
        </a>
    </div>
  </div>
  <div class="column">
    <ul id="resume-tab">
        <li id="academics" class="active">Academics</li>
        <li id="skills">Skills</li>
        <li id="works">Work Exeperience</li>
        <li id="projects">Projects</li>
        <li id="extra">Extra</li>
    </ul>
    <div class="resume-contents">
        <div id="academics-content" class="resume-content active">
            <div class="content-group">
                <h3 class="gp-title">BSc. University of Ilorin</h3>
                <p class="gp-description">
                    Graduated with a First class Honors and a university scholar award from 2012-2015. I handled different computer scince realted courses at extra classes to help other students with their learning this helped in passing down knowledge, public speaking and also improved productivity
                </p>
                <p class="gp-year">2011 - 2015</p>
            </div>
            <div class="content-group">
                <h3 class="gp-title">SSCE. Randle Secondary School</h3>
                <p class="gp-description">
                    Assumed multiple leadership role which helped in building my interpasonal relationship. I was able to attend different competiton for the school exposing me to the possible opportunities outside a public school encironment. I graduated best student of the 2010 academic year and proceed to start my computer science journey
                </p>
                <p class="gp-year">2004 - 2010</p>
            </div>
           
        </div>
        <div id="skills-content" class="resume-content hidden">
            <div class="content-group">
                <h3 class="gp-title">Web Development</h3>
                <p class="gp-description">
                    I am experience in using different programming languages and framework to build website and web application. I code in HTML, CSS and JavaScript to build website from a designed UI. I also can had extra functionalities to website using PHP. I build different web app using PHP framework (Laravel and CodeIgniter) either from scratch or by adding extra feature to projects. I am also proficient using content manamgent system and adding advance customization and features to CMS platforms.
                </p>
                <p class="gp-year">2004 - 2010</p>
            </div>
            <div class="content-group">
                <h3 class="gp-title">Graphics design and UI Design</h3>
                <p class="gp-description">
                    My first journey in I.T. was as a graphics designer by attending a Diploma in Dekstop Publishing course at a computer center. Developing on the knowledge acquired I can using come graphic software and also I learnt how to use Figma to design User Interfaces when needed.
                </p>
                <p class="gp-year">2004 - 2010</p>
            </div>
            <div class="content-group">
                <h3 class="gp-title">DataScience, Machine Learning and A.I.</h3>
                <p class="gp-description">
                    To improve my knowlede in computer science i continually take courses in advance area such as Machine Learning, DataScience. I am still in the early part of the pratical application of the acquired knowledge, but my confidence in this domain increase daily. I am currently enrolled to 30days challenge from Kaggle, 50days Challened from DataScience Nigeria. Before this I have took a course on Udacity in this domain
                </p>
                <p class="gp-year">2004 - 2010</p>
            </div>
            <div class="content-group">
                <h3 class="gp-title">Microsoft Office</h3>
                <p class="gp-description">
                    I am comfortable at using Microsoft packages beyond basics level. I can use excel for data analysis and writing complex excel program to help business achieve their daily business need. I offer this services as Virtual Assistenace on freelance platforms
                </p>
                <p class="gp-year">2004 - 2010</p>
            </div>
            <div class="content-group">
                <h3 class="gp-title">Web Scrapping</h3>
                <p class="gp-description">
                    This is an exploration of how best to apply some of my knowledge in Python and PHP Programming. After some practices it became part of the services i render on freelance platforms
                </p>
                <p class="gp-year">2004 - 2010</p>
            </div>
        </div>
        <div id="works-content" class="resume-content hidden">
            <div class="content-group">
                <h3 class="gp-title">MEED Networks (Intern)</h3>
                <p class="gp-description">
                    University Intership program at a networking firm. I was exposed to how business operation works and the pratical feed experience on Networking and related services.
                </p>
                <p class="gp-year">2012 - 2013</p>
            </div>
            <div class="content-group">
                <h3 class="gp-title">NATVIEW</h3>
                <p class="gp-description">
                    Software developer, Facilitator and Mentor for Click On Kaduna digital skills program. Developed 6Months training curiculum for web design and development including frontend and backend technologies. I was able to mentor some of the pupils till they got paid intership at different firm.
                </p>
                <p class="gp-year">2019-2020</p>
            </div>
            


        </div>
        <div id="projects-content" class="resume-content hidden">
            <div class="content-group pl-10">
                <ul>
                    <li>Schoolite – School management system for primary and secondary schools (schoolite.redehub.ng)</li>
                    <li>Final year project management system for Nigerian University </li>
                    <li>Security Threat Analysis system – A web platform to analysis company’s security threats analysis and generation of such reports.</li>
                    <li>Sprout – Hospital Management system with chatbot for users to access different services</li>
                    <li>Websites design and development (ilmihous.org, diwafrica.org, jessking.com, adriengontier.com, tnl58.com etc.)</li>
                    <li>"Be Healthy" project - An aggregator of all drugs available in pharmacy for price comparison and proximity check </li>
                    <li>AFGRASS – A project to collate and manage all sports records in Nigeria</li>
                </ul>
            </div>
        </div>
        <div id="extra-content" class="resume-content hidden">
            <div class="content-group pl-10">
                <ul>
                    <li>2007-2010 Volunteer Corps Member Lagos, Nigeria </li>
                    <li>2010 Best Graduating Student (Randle Senior Secondary School) Lagos, Nigeria </li>
                    <li>2012-2015 University Scholar (University of Ilorin) Ilorin, Nigeria </li>
                    <li>2013-2015 MTN Foundation Scholar Ilorin, Nigeria </li>
                    <li>2018 Basic Psycho-Trauma Healing Skills by Lux Tera Foundation and Nasarawa state university Abuja, Nigeria </li>
                    <li>2018 Second runner up KADHACK 2018 Kaduna, Nigeria </li>
                    <li>2019 “Aware” Trainers program on understanding and treating pornography addiction Kaduna, Nigeria</li>
                    <li>2019 OpenVino Fundamental course in the Intel IoT Edge AI Scholarship Udacity.com</li>
                </ul>
            </div>
        </div>
    </div>
  </div>
</div>


</body>

<script src="js/main.js"></script>
</html>
