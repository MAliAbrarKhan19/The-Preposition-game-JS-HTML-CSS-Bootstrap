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
        background-size: cover;  
        background-image:url(./img/classbg.jpg);
">
  <!-- header -->

<!-- Body Starts -->
<!-- Row 1 -->
<div class="row" style=" background-color:rgba(255, 211, 51, 0.6);">
  <div class="col-md-12">
    <div >
      <p class="display-4 text-success" >
        <img src="./img/theprepositiongame.png" align="center" width="120px" height="80px" style="text-shadow: black;"> The Preposition Game
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


<!-- Row 3 -->
<div class="row">
  <!-- Row 3 Col 1 //offset-md-1-->
  <div class="offset-md-1 col-md-3 g-1 ">

    <div class="row ml-4" style=" background-color:rgba(245, 237, 201, 0.7);">
      <p class="text-danger" >
        <small class="text-muted">Welcome to The Preposition Game. You will love playing it. Answer all quiz and become the winner.</small> 
      </p>

      <div id="playername">
        <h3 class="text-danger">Enter Your Name Here To Play</h3>

          <input type="text" name="name" id="name" placeholder="eg. Abrar Khan" class="form-control m-2 p-1">
          <!-- Submit Button -->
          <input type="submit" onclick="nameEntry()" value="Start" class="btn btn-danger m-3 p-2">
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


      

    <!-- Form Quiz section Ends -->
  </div>

</div>
<!-- Row 3 -->

<!--Quiz- Row 4 Col 1  -->
      <div class="row" id="quizbox">
         <div class="" style="" id="gameover">
               <script type="text/javascript">
                 function gameOver(){
                  document.getElementById("gameover").innerHTML=
                        "<div class='offset-md-4 col-md-10'style='z-index: 100; width: 100%; height: 100%; box-sizing: content-box; background-color:rgb(255, 219, 89);'>"+
                          "<div class='row' style='height: 400px;width: 90px; background-color:rgb(254, 225, 87);'>"+
                              "<blink><h1 class='col display-3 text-danger'>Game Over</h1></blink>"+
                          "</div>"+
                        "</div>";
                        setTimeout(function(){window.location.reload()},5000);
                }
               </script>
             </div>
            <!--  -->
              <div class=" offset-md-5 col-md-6 "  >
                <div class="row border border-5 border-primary rounded" style="background-color:rgba(220, 228, 252, 0.3);">
                    <b class="col-md-2 display-4 m-1" id="numOne" ></b>
                    <b class="col-md-1 display-4 m-1" id="mathsym"></b>
                    <b class="col-md-2 display-4 m-1" id="numTwo"></b>
                    <b class="col-md-1 display-4 m-1" id="eqsym"></b>
                    <!-- <b class="col-md-1  m-1" id="numThree">0</b> -->
                    <!-- <b class="col display-3" id="numThreet"></b> -->
                      
                    
                    <input type="text" name="ansvalue" id="ansvalue" placeholder="" class="col-md-3 m-1 display-4">
                    <!-- Submit Button -->
                    <input type="submit" onclick="ansSubmit()" value="Answer" class="col-md-2 btn btn-success ">
                                
                </div>
              </div>
            

          <!-- //}
           -->
        <!-- </script> -->
      <!-- </div> -->
         

  </div>    
<!--Quiz- Row 4 Col 1 -->




<!-- JavaScript  Starts-->

<script type="text/javascript">
//<!-- JavaScript -->

  //VAriables
        //var setTime=30;//set time 15 sec per 
        //var setTime=30;//set time 15 sec per 
        //var setTime=10;//set time 10 sec
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
        document.getElementById("playername").innerHTML="<h3 class='text-danger'>Lets play "+"</h3>"+"<h2 class='display-2 text-danger'>"+playername+"</h2>";
        //Starting all functions
        startgame();
        //quiz();
        }
    }

// NameEntry Function JS  Ends-->

//QUIZ JS FUnction
       function startgame(){
        //starttimer();
        quesnoprint();
        //quiz();
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
        setTime=30;//set time 15 sec per 
        setInterval(timecounter,1000);
       
        }
    
  //Time Counter JS Function   
       function timecounter(){
              
              if (setTime>0) {
               
                setTime=setTime-1;
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

      // var a=2;
      // var b=3;
     //border border-5 border-primary rounded
     //document.querySelector(div.quizbox).class="row border border-5 border-primary rounded";


      a=Math.floor(Math.random() * 101);
      b=Math.floor(Math.random() * 101);
      var result=a+b;
      sessionStorage.setItem("result",result);
      
      //print a
      document.getElementById("numOne").innerHTML=a;
      document.getElementById("mathsym").innerHTML="+";
      //print b
      document.getElementById("numTwo").innerHTML=b;
      document.getElementById("eqsym").innerHTML="=";
      document.getElementById("numThree").innerHTML=result;

      return result;
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
          score=score+1;
          document.getElementById("score").innerHTML="Score "+score;
          clearInterval(timecounter);

          startgame();
        }
      }




</script>
<!--  JavaScript -->


  <!-- JS Codes  -->







</div>
<!-- Body Ends -->

<!-- Footer  -->
<!-- ================================================================================== -->

<div class="row text-end fixed-bottom">
  <div class="offset-md-1 col-md-10">
    <p class="text-success">&copy; Copyright 2021. All rights reserved by M. Ali Abrar Khan- <a href="+8801939123946">+8801939123946</a> <a href=""> |github Link|  </a>   </p>
    
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