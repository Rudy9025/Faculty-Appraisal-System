<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      margin: 0;
      overflow: hidden;
    }
    
    #background-images {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      background-size: cover;
      background-repeat: no-repeat;
    }
    
  .container {
    position: relative;
    width: 100%;
}

.image {
opacity: 1;
display: block;
transition: .1s ease;
backface-visibility: hidden;
background-repeat: no-repeat;
background-size: auto;
}

.middle {
transition: .1s ease;
opacity: 0;
position: absolute;
top: 60%;
left: 50%;
transform: translate(-50%, -50%);
backface-visibility: hidden;

}

.container:hover .image {
opacity: 0.7;
}

.container:hover .middle {
opacity: 0.5;
}

.text {
 background: linear-gradient(225deg, rgba(255,0,0,0.9865196078431373) 30%, rgba(0,35,255,1) 56%, rgba(27,235,34,1) 71%);
              background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
       font-weight: bold;
      text-align: center;
      padding: 40px;
   text-transform: uppercase;
  font-family: titlefont;
  font-style: italic;
  font-size: 40px;
  padding-top: 300px;
  
  }
  </style>
</head>
<body>
  <div id="background-images">
    <div class="container">
        <div class="middle">
        <div class="text">  <br> <br> <br> <br> <br>
           Presidency University <br> BCA<br>Faculty Appraisal System<br> 2022-2023</div>
       </div>
  </div>
  </div>

  <script>
   
    var images = [
      "c.jpg",
      "presidency.jpg",
      "presi2.jpeg"
    ]; 
    
    var imageIndex = 0;
    var imageElement = document.getElementById("background-images");
    var scrollSpeed = 1;

    function scrollBackground() {
      var xPos = window.pageXOffset / scrollSpeed;
      imageElement.style.backgroundPosition = xPos + "px 0px";
    }

    function changeBackgroundImage() {
      imageIndex = (imageIndex + 1) % images.length;
      var imageUrl = "url('" + images[imageIndex] + "')";
      imageElement.style.backgroundImage = imageUrl;
    }

    window.addEventListener("scroll", scrollBackground);
    window.addEventListener("load", changeBackgroundImage);
    setInterval(changeBackgroundImage, 2480);
  </script>
</body>
</html>
