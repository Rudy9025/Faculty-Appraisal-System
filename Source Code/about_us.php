<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
  <title>About_us | Faculty Appraisal</title>
<style>

  body {
    margin: auto;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    overflow: auto;
    background: linear-gradient(315deg, rgba(101,0,94,1) 3%, rgba(60,132,206,1) 38%, rgba(48,238,226,1) 68%, rgba(255,25,25,1) 98%);
    animation: gradient 15s ease infinite;
    background-size: 400% 400%;
    background-attachment: fixed;
    font-family: Arial, sans-serif;
    background-color: #e38888;
    color: rgb(48, 59, 45);
    margin: 0;
    padding: 0;
}

@keyframes gradient {
    0% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 100% 100%;
    }
    100% {
        background-position: 0% 0%;
    }
}

.wave {
    background: rgb(255 255 255 / 25%);
    border-radius: 1000% 1000% 0 0;
    position: fixed;
    width: 200%;
    height: 12em;
    animation: wave 10s -3s linear infinite;
    transform: translate3d(0, 0, 0);
    opacity: 0.8;
    bottom: 0;
    left: 0;
    z-index: -1;
}

.wave:nth-of-type(2) {
    bottom: -1.25em;
    animation: wave 18s linear reverse infinite;
    opacity: 0.8;
}

.wave:nth-of-type(3) {
    bottom: -2.5em;
    animation: wave 20s -1s reverse infinite;
    opacity: 0.9;
}

@keyframes wave {
    2% {
        transform: translateX(1);
    }

    25% {
        transform: translateX(-25%);
    }

    50% {
        transform: translateX(-50%);
    }

    75% {
        transform: translateX(-25%);
    }

    100% {
        transform: translateX(1);
    }
}
  
  .container {
    width: 80%;
    max-width: 600px;
    margin: 0 auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 60px;
    box-shadow: 0 0 10px rgb(1, 255, 18);
  }
  
  /* Header styles */
  header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
  }
  
  h1 {
    margin: 0;
  }
  
  /* Section styles */
  section {
    margin-bottom: 30px;
  }
  
  h2 {
    margin-top: 0;
  
  }
  
  ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  li {
    margin-bottom: 10px;
    font-size: large;
  }
  
  /* Footer styles */
  footer {
    background-color: #555;
    color: #fff;
    text-align: center;
    padding: 10px 0;
  }
  p{
    font-size: large;
  }
  .img1{
    
    position: absolute;
   top: 685px;
   right: 270px;
    height: 335px;
    width: 500px;
  }
  .img2{
    
    position: absolute;
  top: 1070px;
   right: 520px;
    height: 50px;
    width: 100px;
  }
  .img3{
    
    position: absolute;
  top: 1070px;
   right: 420px;
    height: 50px;
    width: 100px;
  }
  .img2:hover {
   opacity: 0.7;
   background-color: bisque;
}
.img3:hover {
   opacity: 0.7;
   background-color: bisque;
}
  
</style>
<body>
    <?php include 'header.php';?>
   
  <div>
     <div class="wave"></div>
     <div class="wave"></div>
     <div class="wave"></div>
  </div>
</body>
  <header>
    <h1>About Us</h1>
  </header>
  <br>
  <section class="container">
  <b><h2>Our Story</h2></b>  
    <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; At Presidency University, we believe in 
        providing the highest quality education and
         supporting our faculty members in their professional 
         development. With this in mind, we have developed a 
         Faculty Appraisal System that helps us to ensure that our faculty
         members are performing to the best of their abilities
          and providing our students with the best possible education.
         Our Faculty Appraisal System is designed to be fair,
          objective, and transparent. It involves a comprehensive
           evaluation of a faculty member's teaching, research, and 
           service contributions, as well as their professional development
            activities. The evaluation process is conducted annually, with
             the goal of providing each faculty member with constructive 
             feedback that will help them to improve their performance and advance their careers.
         The Faculty Appraisal System is overseen by a dedicated committee of fac
         ulty members and administrators who are committed to upholding the highest
          standards of excellence in education. We also regularly seek feedback from 
          our faculty members and other stakeholders to ensure that the appraisal process
           is meeting their needs and providing the best possible outcomes for our institution.
         At Presidency University, we are proud of our faculty members and the contributions
          they make to our institution and the wider community. We are committed to providing
           them with the support they need to succeed and to continuously improve our Faculty
            Appraisal System to ensure that it remains an effective tool for promoting excellence in education.
        
        </p>

    <h2>Our Team</h2>
    <ul>
      <li>Mohammed Anfal- Frontend,Documentation</li>
      <li>Nitish Kumar-  Frontend,Backend</li>
      <li>Rudresh-  Backend,Git</li>
      <li>Syed Mudassir Hussain -  Frontend,Documentation</li>
      <li>Usman Ghani Khan - Backend,Git</li>
    </ul>
    <img src="f.png" class="img1" alt="">
   
    <a href="https://www.youtube.com/@PresidencyuniversityInBlr">
   <img src="utube.png"  class="img2" alt="alternative-text">
</a>
<a href="https://instagram.com/presidencyuniversity?igshid=NTc4MTIwNjQ2YQ==">
   <img src="insta.png"  class="img3" alt="alternative-text">
</a>



  <?php include 'footer.php';?>
  </section>
<br>

  <footer>
    <p>&copy; 2023 Faculty Appraisal System. All rights reserved.</p>
  </footer>

</body>
</html>
