
<?php
include("init.php");
session_start();

        $rollno=$_POST['rollno'];
        $course=$_POST['course'];
        $semester=$_POST['semester'];
        $subject1=$_POST['subject1'];
        $subject2=$_POST['subject2'];
        $subject3=$_POST['subject3'];
        $subject4=$_POST['subject4'];
        $subject5=$_POST['subject5'];
        $subject6=$_POST['subject6'];
        $subject7=$_POST['subject7'];
        $subject8=$_POST['subject8'];
        $mark1=$_POST['mark1'];
        $mark2=$_POST['mark2'];
        $mark3=$_POST['mark3'];
        $mark4=$_POST['mark4'];
        $mark5=$_POST['mark5'];
        $mark6=$_POST['mark6'];
        $mark7=$_POST['mark7'];
        $mark8=$_POST['mark8'];


        // $marks=$mark1+$mark2+$mark3+$mark4+$mark5+$mark6+$mark7+$mark8;
        // $percentages=$marks/8;

        // validation
        if (empty($course) or empty($semester) or empty($subject1) or empty($subject2) or empty($subject3) or empty($subject4) or empty($subject5) or empty($subject6) or empty($subject7) or empty($subject8) or $mark1>100 or  $mark2>100 or $mark3>100 or $mark4>100 or $mark5>100 or $mark6>100 or $mark7>100 or $mark8>100 or $mark1<0 or  $mark2<0 or $mark3<0 or $mark4<0 or $mark5<0 or $mark6<0 or $mark7<0 or $mark8<0 ) {

            if(empty($course))
                echo '<p class="error">Please enter course</p>';
            if(empty($semester))
                echo '<p class="error">Please enter semester</p>';
            if(empty($subject1))
                echo '<p class="error">Please enter subject1</p>';
            if(empty($subject2))
                echo '<p class="error">Please enter subject2</p>';
            if(empty($subject3))
                echo '<p class="error">Please enter subject3</p>';
            if(empty($subject4))
                echo '<p class="error">Please enter subject4</p>';
            if(empty($subject5))
                echo '<p class="error">Please enter subject5</p>';
            if(empty($subject6))
                echo '<p class="error">Please enter subject6</p>';
            if(empty($subject7))
                echo '<p class="error">Please enter subject7</p>';
            if(empty($subject8))
                echo '<p class="error">Please enter subject8</p>';
    
            if($mark1>100 or  $mark2>100 or $mark3>100 or $mark4>100 or $mark5>100 or $mark6>100 or $mark7>100 or $mark8>100 or $mark1<0 or  $mark2<0 or $mark3<0 or $mark4<0 or $mark5<0 or $mark6<0 or $mark7<0 or $mark8<0)
                echo '<p class="error">Please enter valid marks</p>';
            exit();
        }


        $sql="INSERT INTO marks(rollno, course, semester, subject1, subject2, subject3, subject4, subject5, subject6, subject7, subject8, mark1, mark2, mark3, mark4, mark5, mark6, mark7, mark8) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        try {
            $stmt = $conn->prepare($sql);  
            $stmt->bind_param("sssssssssssssssssss",$rollno, $course, $semester, $subject1, $subject2, $subject3, $subject4, $subject5, $subject6, $subject7, $subject8, $mark1, $mark2, $mark3, $mark4, $mark5, $mark6, $mark7, $mark8);
        }
        catch(Exception $e) {
            echo $e;
        }
        
                    $stmt->execute();
                    $stmt->close();
                    $_SESSION["rollno"] = $rollno;
                    $_SESSION["course"] = $course;
                    $_SESSION["semester"] = $semester;
                    $_SESSION["subject1"] = $subject1;
                    $_SESSION["subject2"] = $subject2;
                    $_SESSION["subject3"] = $subject3;
                    $_SESSION["subject4"] = $subject4;
                    $_SESSION["subject5"] = $subject5;
                    $_SESSION["subject6"] = $subject6;
                    $_SESSION["subject7"] = $subject7;
                    $_SESSION["subject8"] = $subject8;
                    $_SESSION["mark1"] = $mark1;
                    $_SESSION["mark2"] = $mark2;
                    $_SESSION["mark3"] = $mark3;
                    $_SESSION["mark4"] = $mark4;
                    $_SESSION["mark5"] = $mark5;
                    $_SESSION["mark6"] = $mark6;
                    $_SESSION["mark7"] = $mark7;
                    $_SESSION["mark8"] = $mark8;

                    $_SESSION["marks"]=$mark1+$mark2+$mark3+$mark4+$mark5+$mark6+$mark7+$mark8;
                    $_SESSION["percentages"]=($mark1+$mark2+$mark3+$mark4+$mark5+$mark6+$mark7+$mark8)/8;
                  
                    
                    header("Location:student.php");
                    exit();
                
            $conn->close();
    
?>