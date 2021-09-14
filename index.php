<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-utilities.min.css">
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-reboot.min.css">


  <!-- Bootstrap CSS -->
  <!-- <link rel="icon" type="text/css" href="./img/game.svg" class="text-danger" > -->
  <link rel="icon" type="text/css" href="./img/theprepositiongame.png" class="text-danger" >
    
  
  <title class="text-danger">The Preposition Game</title>

<style type="text/css">
 


</style>

</head>
<body class="container-fluid"
 style="
        background-repeat: no-repeat;
        background-size: inherit;  
        background-image:url(./img/classbg.jpg);
">
  <!-- header -->

<!-- Body Starts -->
<!-- Row 1 -->
<div class="row" style=" background-color:rgba(245, 237, 201, 0.3);">
  <div class="offset-md-6 col-md-1">
    <div >
      <p class="display-4 text-success" >
        <img src="./img/theprepositiongamelogo.png" align="center" width="340px" height="110px" style="text-shadow: black;"> 
      </p>

    </div>    
  </div>
</div>
<!-- Row 1 -->

<div class="row" >
<div class="col-md-12" >
  





<!-- Row 2 -->


<div class="row">
  <div class="col-md-4">
    
    
  </div>

  <div class="bg-light offset-md-4 col-md-3">

    <!-- <p id="currenttime"></p> -->
    
  </div>
  <div class="col-md-1"></div>
</div>
<!-- Row 2 -->


<!-- Row 3 Col 1 -->
<div class="row">

  <!-- Row 3 Col 1 //offset-md-1-->
  <div class="offset-md-1 col-md-3 g-1 ">

    <div class="row ml-4" style=" background-color:rgba(245, 237, 201, 0.7);">
      <p class="text-danger" >
        <small class="text-muted">Welcome to The Preposition Game. You will love playing it. Answer all quiz and become the winner.</small> 
      </p>
      <div>
        <img src="img/theprepositiongame.png" class="img-fluid">
      </div>
      <div id="playername">
        <h3 class="text-success">Enter Your Name </h3>

          <input type="text" name="name" id="name" placeholder="eg. Abrar Khan" class="form-control m-2 p-1">
          <!-- Submit Button -->
          <input type="submit" onclick="nameEntry()" value="Start" class="btn btn-success m-3 p-2">
      </div>
      
    </div>

  </div>
  <!-- Row 3 Col 1 -->


  <!-- Row 3 Col 2 -->

  <div class="offset-md-1 col-md-6">
    <!-- Form Quiz section Starts -->
      
      <!--Quiz- Row 3 Col 2 Row 1  -->
      <div class="row gx-6">
        <!-- Score -->
        <div class="col-md-3">
          <div class="badge rounded-pill " style="background-color: rgba(250, 14, 5, 0.8);">
            <p class="h3 text-light" id="score">Score 00</p>
          </div>
        </div>
        <!-- Questions Answered -->
        <div class="col-md-3">
          <div class="badge rounded-pill " style="background-color: rgba(35, 91, 247, 0.8);">
            <p class="h3 text-light" id="quesno">Question 00</p>
        </div>
        </div>
        <!-- Time -->
        <div class="offset-md-1 col-md-3">
          <div class="badge rounded-pill " style="background-color: rgba(250, 14, 5, 0.8);">
            <p class="h3 text-light" id="currenttime">Timer</p>
          </div>
        </div>

      </div>
      <!--Quiz- Row 3 Col 2 Row 1  -->


            <div class="row" id="quizbox">
               <div class="" style="" id="gameover">
                     <script type="text/javascript">
                      
                     </script>
                   </div>
                  <!--  -->
      <!--Quiz- Row 3 Col 2 Row 2 -->
      <div class="row " 
                          style="
                          background-color:rgba(220, 228, 252, 0.3);
                          background-image: url(img/chalkboard2.png);
                          background-repeat: no-repeat;
                          background-size:cover;
                          padding: 18%;

                          ">
                        <div class="col-md-12 chalkboard">
                          <div class="row">
                            <h4 class="col-md-12 text-light" id="qtxt">
                              Fill in the gap sentence here_______ type answer below.........and click answer button.
                            </h4>
                            <p id="qans"></p>

                          </div>
                          <div class="row">
                            <input type="text" name="ansvalue" id="ansvalue" placeholder="Type your answer here " class="col-md-8 m-1">
                            <!-- Submit Button -->
                            <input type="submit" onclick="ansSubmit()" value="Answer" class="col-md-4 btn btn-outline-light ">
                          </div>
                          
                        
                      </div>
                    
                  

                <!-- //}
                 -->
              <!-- </script> -->
            <!-- </div> -->
               

      </div>    
      <!--Quiz- Row 3 Col 2 Row 2 -->

      

    <!-- Form Quiz section Ends -->
  </div>

</div>
<!-- Row 3 -->




<!-- JavaScript  Starts-->
<script type="text/javascript" src="./questions.js"></script>
<script type="text/javascript">
//<!-- JavaScript -->
      gameOver();//for testing

  //VAriables
        
        var score=0;
        var quesnum=0;
        var ans=0;
        var num=0;
        var a=0;
        var b=0;
        var result=0;
        var playername="";
  //Name Entry JS Function
    function nameEntry() {
      //gameOver();//for testing
      // Selecting the input element and get its value 
      var name = document.getElementById("name").value;
      if (name=="") {
        alert("Please enter your name ..")
      } else{
          playername = name;
          
            // Displaying the value
          document.getElementById("playername").innerHTML="<h4 class='text-success'>Lets play "+"</h4>"+"<h2 class='display-2 text-success'>"+playername+"</h2>";
          //Starting all functions
          startgame();
          //quiz();
        }
    }

// NameEntry Function JS  Ends-->

//QUIZ JS FUnction
       function startgame(){
        starttimer();
        quesnoprint();
        quiz();
        }
//Question no updater
        function quesnoprint() {
        quesno();
        document.getElementById("quesno").innerHTML="Question "+quesnum;
        starttimer();      
        quiz();

        }
        function quesno(){
          quesnum=quesnum+1;
        }

//QUIZ JS start timerFUnction
       function starttimer(){
        setTime=120;//set time 15 sec per 
        setInterval(timecounter,1000);
       
        }
    
  //Time Counter JS Function   
       function timecounter(){
              setTime=setTime-1;
              
              if (setTime>0) {
               
                //setTime=setTime-1;
                document.getElementById("currenttime").innerHTML="<h3 class='text-light' >"+"Time: "+setTime+"</h3>";
              }
              else if (setTime==0){
                document.getElementById("currenttime").innerHTML="<h2 class='text-' >"+"Time's Up!!"+"</h2>";
                //GAME OVER
                gameOver();
                clearInterval(timecounter);
              }
           }


//Quiz Function
    function quiz(){

      // var a=0;
      // var b=3;
      a=Math.floor(Math.random()*23);

      ///
      var result=questions[a].qans;
      sessionStorage.setItem("result",result);
      //print a
      document.getElementById("qtxt").innerHTML=questions[a].qtxt;
      document.getElementById("qans").innerHTML=result;
      

      return result;
    }
 function gameOver(){
      document.getElementById("qtxt").innerHTML=
          ""+
          "<div class='col-md';>"+"<h1 class=' text-danger'><blink>Game Over</blink></h1>"+"</div>";
          setTimeout(function(){window.location.reload()},5000);
                      }
//ansSubmit
        function ansSubmit() {
          // Ans
          var playerans=document.getElementById("ansvalue").value;
          //alert("function ansSubmit() playerans "+playerans);
          //return ans=playerans; 
          //result= quiz();
          result= sessionStorage.getItem("result");
          ans=playerans;
          checkans(ans, result);
        }           

// function
      function checkans(ans,result) {
      //  alert("function calculate() Answer "+ans+" \n function calculate() Result "+result);
        if (ans!=result) {
          gameOver();
        }else if(ans==result){
          score=score+1;//now adding score
          document.getElementById("score").innerHTML="Score "+score;
          clearInterval(timecounter);
          setTime=0;
          startgame();// restarting the game
        }
      }




</script>
<!--  JavaScript -->


  <!-- JS Codes  -->







</div>
<!-- Body Ends -->

<!-- Footer  -->
<!-- ================================================================================== -->

<div class="row text-end fixed-bottom" style=" background-color:rgba(45, 237, 20, 0.7);">
  <div class="offset-md-1 col-md-10">
    <p class="text-primary h6">&copy; Copyright 2021. All rights reserved by M. Ali Abrar Khan- <a href="+8801939123946" style="color:whitesmoke; ">+8801939123946</a> <a href="https://github.com/MAliAbrarKhan19/The-Preposition-game-JS-HTML-CSS-Bootstrap" style="text-decoration: none;color: whitesmoke;"> |github Link|  </a>   </p>
    
  </div>
</div>

</div>

<!-- Javascripts  -->
  <script type="text/javascript" src="./bootstrap/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="./bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="./bootstrap/bootstrap.esm.min.js"></script>


<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    

</body>
</html>