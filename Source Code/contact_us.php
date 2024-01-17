<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Contact_us | Faculty Appraisal System</title>
    <link rel="stylesheet" href="contact_us.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" viewBox="10 10 80 80">
    <defs>
        <style>
            @keyframes rotate {
                100% {
                    transform: rotate(360deg);
                }
            }
            .out-top {
                animation: rotate 20s linear infinite;
                transform-origin: 13px 25px;
            }
            .in-top {
                animation: rotate 10s linear infinite;
                transform-origin: 13px 25px;
            }
            .out-bottom {
                animation: rotate 25s linear infinite;
                transform-origin: 84px 93px;
            }
            .in-bottom {
                animation: rotate 15s linear infinite;
                transform-origin: 84px 93px;
            }
            body {
                background-color: #fee440;
            }
            svg {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
            }
            
            
            .links {
                position: fixed;
                bottom: 20px;
                right: 20px;
                font-size: 18px;
                font-family: sans-serif;
            }
            a {
                text-decoration: none;
                color: black;
                margin-left: 1em;
            }
            a:hover {
                text-decoration: underline;
            }
            a img.icon {
                display: inline-block;
                height: 1em;
                margin: 0 0 -0.1em 0.3em;
            }
            /* Google Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: #c8e8e9;
  display: flex;
  align-items: center;
  justify-content: center;
}
.abc{
    position:absolute;
    top: 0px;;
    left:0;
    right: 0;

}
.container{
  width: 50%;
  position: absolute;
  top: 150px;
   background: #fff;
  border-radius: 6px;
  padding: 10px 60px 30px 40px;
  box-shadow: 0 15px 20px #d40808;
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.a{
  border-radius: 6px;
  position: absolute;
  top: 505px;
  padding: 3px 10px 12px 12px;
   left: 880px;
   font-weight: 500;
  box-shadow: 2px 5px 10px rgb(5, 227, 27);
}

.b{
  border-radius: 6px;
  position: absolute;
  top: 645px;
   padding: 3px 10px 12px 12px;
   background-color: black;
   color: aliceblue;
  left: 1200px;
  box-shadow: 3px 5px 10px rgba(247, 255, 5, 0.97);
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #afafb6;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #3e2093;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #5029bc;
}

@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}
        </style>
    </defs>
    <path fill="#9b5de5" class="out-top" d="M37-5C25.1-14.7,5.7-19.1-9.2-10-28.5,1.8-32.7,31.1-19.8,49c15.5,21.5,52.6,22,67.2,2.3C59.4,35,53.7,8.5,37-5Z"/>
    <path fill="#f15bb5" class="in-top" d="M20.6,4.1C11.6,1.5-1.9,2.5-8,11.2-16.3,23.1-8.2,45.6,7.4,50S42.1,38.9,41,24.5C40.2,14.1,29.4,6.6,20.6,4.1Z"/>
    <path fill="#00bbf9" class="out-bottom" d="M105.9,48.6c-12.4-8.2-29.3-4.8-39.4.8-23.4,12.8-37.7,51.9-19.1,74.1s63.9,15.3,76-5.6c7.6-13.3,1.8-31.1-2.3-43.8C117.6,63.3,114.7,54.3,105.9,48.6Z"/>
    <path fill="#00f5d4" class="in-bottom" d="M102,67.1c-9.6-6.1-22-3.1-29.5,2-15.4,10.7-19.6,37.5-7.6,47.8s35.9,3.9,44.5-12.5C115.5,92.6,113.9,74.6,102,67.1Z"/>
</svg>
   </head>
<body>

	<div class="abc"> <?php include 'header.php';?></div>

  <div class="container">
    <div class="content">

      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Presidency University,Yelahanka</div>
          <div class="text-two">Bangalore </div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 9025305010</div>
          <div class="text-two">+91 8277781366</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">sicira4117@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any questions or concerns about our faculty appraisal system,<br>
			 please don't hesitate to contact us. Our team is committed to providing
			  you <br>with the support and assistance you need.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" id="name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" id="email">
        </div>
        <div class="input-box message-box">
          
        </div>
        <div class="button">
          <input type="button" value="Send Now"  onclick="submitForm()">
        </div>
      </form>
    </div>
    </div>
  </div>
  
<div class="a"> We will do our best to respond to your inquiry as soon as possible.  <br> Thank you for using our faculty appraisal system, and we look forward <br> to hearing from you soon.
</div> 
<div class="b">
  <p>Best regards,</p>
  <ul style="list-style: none;">
<li>Mohammed Anfal- 20201BCA0043</li>  
<li>Nitish Kumar- 20201BCA0047</li>  
<li>Rudresh- 20201BCA0055</li>  
<li>Syed Mudassir Hussain - 20201BCA0066</li>  
<li>Usman Ghani Khan - 20201BCA0082
</li>  
</ul>
</div>


<script>
  function submitForm() {
    var inputFieldValue = document.getElementById("name").value;
    var inputFieldValuee = document.getElementById("email").value;
    // check if input field is empty
    if (inputFieldValue === "" || inputFieldValuee === "") {
      // display error message
      alert("Input field cannot be empty!");
    } else {
   
    alert("Sent successfully! \n you'll be redirected to another page where you can contact us");

    localStorage.setItem("Ping me here", "Thank you for submitting the form!");

    window.location.href = "https://chat.whatsapp.com/EmcukBxzb8S66EFmHvKox4";
    }
  }
var message = localStorage.getItem("message");
if (message) {
  alert(message);
  localStorage.removeItem("message");
}
    
 
</script>


 

</body>
</html>