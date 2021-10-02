<!DOCTYPE html>
<html lang="en">
    <title>Result </title>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/student.css">
    <a href="logout.php" style="color: black">
    <button><span class="fa fa-sign-out fa-2x">LOGOUT</span></a></button>
</head>
<body>


        <?php
        include("init.php");
        session_start();

        

      
    //  $name_sql=mysqli_query($conn,"SELECT `USN` FROM `result` WHERE `USN`='$USN' ");
    //     while($row = mysqli_fetch_assoc($name_sql))
    //     {

    //     $USN = $row['USN'];
    //     }


     /*   $result_sql=mysqli_query($conn,"SELECT *from marks");
        while($row = mysqli_fetch_assoc($result_sql))
        
        {
            
          //  $rollno =$row['rollno'];
            $course = $row['course'];
            $semester = $row['semester'];
            $subject1 = $row['subject1'];
            $subject2 = $row['subject2'];
            $subject3 = $row['subject3'];
            $subject4 = $row['subject4'];
            $subject5 = $row['subject5'];
            $subject6 = $row['subject6'];
            $subject7 = $row['subject7'];
            $subject8 = $row['subject8'];
            $mark1 = $row['mark1'];
            $mark2 = $row['mark2'];
            $mark3 = $row['mark3'];
            $mark4 = $row['mark4'];
            $mark5 = $row['mark5'];
            $mark6 = $row['mark6'];
            $mark7 = $row['mark7'];
            $mark8 = $row['mark8'];
           
            
           
        }*/
       // $marks=$mark1+$mark2+$mark3+$mark4+$mark5+$mark6+$mark7+$mark8;
       // $percentages=$marks/8;
      /*  if(mysqli_num_rows($result_sql)==0){
            echo "no result";
            exit();
        }*/
    ?>


  

    <div class="container">
        <div class="details">
               
            
        <?php echo "USN:  ".$_SESSION["rollno"]; ?><br>
        <?php echo "course:  ".$_SESSION["course"]; ?><br>
        <?php echo "semester:  ".$_SESSION["semester"]; ?><br>
        
    
     

        <div class="main">
            <div class="s1">
               <p>  Subjects&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</p>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["subject1"]; ?><br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["subject2"]; ?><br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["subject3"]; ?><br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["subject4"]; ?><br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["subject5"]; ?><br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["subject6"]; ?><br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["subject7"]; ?><br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["subject8"]; ?><br>
               
            </div>
            <div class="s2">
                <p>Marks&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["mark1"]; ?><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["mark2"]; ?><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["mark3"]; ?><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["mark4"]; ?><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["mark5"]; ?><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["mark6"]; ?><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["mark7"]; ?><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo " ".$_SESSION["mark8"]; ?><br>
             </div>
        </div>
<br><br>
        <div class="result">
            <?php echo 'Total Marks:&nbsp'.$_SESSION['marks'];?><br>
            <?php echo 'Percentage:&nbsp'.$_SESSION['percentages'];?>
        </div>
       
<br>
<br>
<br>

        <div class="button" >
            <button onclick="window.print()">Print Result</button>
        </div>
    </div>
</body>
</html>
