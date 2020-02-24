<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>

<header class="w3-container w3-theme w3-padding" id="myHeader"> 
  <div class="w3-center">
  <h1>Alex Sandham Stoarage Repo</h1>
      <h4 class="w3-xxxlarge w3-animate-bottom">All Unit CourseWork</h4>
  </div>
</header>


<!Week 1 PHP Tutorial>
<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container w3-blue">
    <div class="w3-padding-32">
      <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" onclick="document.getElementById('id_Unit27').style.display='block'" style="font-weight:900; overflow-wrap: break-word;">Unit 27 - 24/02/2020</button>
    </div>
  </div>
</div>
<div id="id_Unit27" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id_Unit27').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <h2>PHP Intro</h2>
      </header>
      <div class="w3-padding">
        <?php
          $name = "alex sandham";
          $randomnum = rand(0, 100);
          $sentence = "there are three teens in the tree";
          echo "My name is ".strtoupper("$name");
          echo "<br>";       
          echo "My name is " .strlen("$name") ." characters long";       
          echo "<br>";
          echo "10 + 6 = " .(10 + 16);
          echo "<br>";
          echo "23 / 4 = " .(23/4);
          echo "<br>";
          echo "13.5768 / 5.2 = " .round(13.5768/5.2);
          echo "<br>";
          echo "13.5768 / 5.2 = " .round(13.5768/5.2 ,2);
          echo "<br>";
          echo "A random number between 0 and 100: $randomnum";
          echo "<br>";
          echo "It's Square Root is: " .sqrt($randomnum);
          echo "<br>";
          echo "$sentence";
          echo "<br>";
          echo count_chars($sentence, 3);
          echo "<br>";
          echo ucwords($sentence);
        ?>
        <br>
        <p><a href="#">Download</a></p>
      </div>
      <footer class="w3-container w3-theme-l1">
        <p>24/02/2020</p>
      </footer>
    </div>
</div>


</body>
</html>
