<?php
include 'testInput.php';
$user='root';
$pass='';
$db= 'reverse_coding';
$error="";
$errorFound=false;
$teamErr=$lNameErr=$lUsnErr=$lEmailErr=$lPhoneErr=$mNameErr=$mUsnErr=$mEmailErr=$mPhoneErr="";
if(array_key_exists("submit",$_POST)){

    $link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
    $query="Select * from `team` where teamName='".$_POST['teamName']."'";

    $result=mysqli_query($link,$query);
    $result2=mysqli_query($link,"Select * from `participants`");
    if($_POST['leaderUsn']==$_POST['member1Usn']){
        $mUsnErr.="*Leader USN and Member USN cannot be same";
        $lUsnErr.="*Leader USN and Member USN cannot be same";
        $errorFound=true;
    }
    if(mysqli_num_rows($result2)>0){
        $i=0;
        while($row=mysqli_fetch_array($result2)){
            if($row['usn']==$_POST['leaderUsn']){
                $lUsnErr.="*USN already Registered";
                $i=-1;
            }
            if($row['usn']==$_POST['member1Usn']){
                $mUsnErr.="*USN already Registered";
                $i=-1;
            }
            if($i==-1)
                $errorFound=true;
          }
        
    }
    if(mysqli_num_rows($result)>0){
        $teamErr="*Team name already exists";   
        $errorFound=true;
    }
    if(test_input($teamErr,$lNameErr,$lUsnErr,$lEmailErr,$lPhoneErr,$mNameErr,$mUsnErr,$mEmailErr,$mPhoneErr)==-1){
        $error="*Some fields are still empty or have invalid entries";
        $errorFound=true;
    }
    if(!$errorFound){
        $queryTeam="Insert into `team` (`teamName`) values('".$_POST['teamName']."')";
        mysqli_query($link,$queryTeam);
        $query="Select * from `team` where teamName='".$_POST['teamName']."'";


        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        $queryParticipant1="Insert into `participants` (`name`,`usn`,`email`,`phone`,`teamId`) values('".$_POST['leaderName']."','".$_POST['leaderUsn']."','".$_POST['leaderEmail']."','".$_POST['leaderPhone']."',".$row['teamID'].")";


        mysqli_query($link,$queryParticipant1);
        $queryParticipant2="Insert into `participants` (`name`,`usn`,`email`,`phone`,`teamId`) values('".$_POST['member1Name']."','".$_POST['member1Usn']."','".$_POST['member1Email']."','".$_POST['member1Phone']."',".$row['teamID'].")";
        mysqli_query($link,$queryParticipant2);
        

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>DeCoders - inSight 2K17</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="myOwn.css">

    <?php include('../commonResources/includeCss.php');?>

</head>
<body>
<?php include('../../commonResources/navigation.inc.php');?>
<!--poster-->

<!--/.poster-->
<!--main content-->
<div class=" view overlay hm-green-slight hm-zoom hoverable">
    <img src="../commonResources/img/cover.jpg" class="shift img-fluid img-responsive  center-block"  alt="">
    <a href="#">
        <div class="mask waves-effect waves-light"></div>
    </a>
</div>
<div class="main-content">
    <form class="form-group1" method="post" >

        <fieldset1 class="form-group1 row">
            <div  class="jumbotron1 bg-dark1 text-white" style="font-family:serif;margin-top: -3.5%">
                <div class="header-title">
                    <h1 class="h2-responsive font-weight-bold " style="text-align: center;color: white;">Reverse Coding</a></h1>
                    <span class="error"><?php echo $error ?></span>
                </div>
                <div style="margin-left: 15%;margin-right:15%;">

                    <fieldset1 class="form-group1 form-row1">
                        <label style="color: white" class="col-sm1-4"><h4><b>Team Name</b></h4></label>
                        <div class="col-sm1-5">
                            <input placeholder="team name" style="font-family:monospace; font-size: 120%; color:white;" type="text" class="form-control1 bg-dark1" id="teamName" name="teamName" >
                            <span class="error"><?php echo $teamErr ?></span>
                        </div>

                    </fieldset1>
                    <fieldset1 class="form-group1 form-row1">
                        <label style="color: white" class="col-sm1-4"><h5><strong>Team Leader</strong></h5></label>
                    </fieldset1>
                    <fieldset1 class="form-group1 row header-title" style="margin-left: 3%">

                        <fieldset1 class="form-group1 ">
                            <label style="color: white" class="col-sm1-2">Name</label>
                            <div class="col-sm1-5">
                                <input style="font-family:monospace; color:white;" placeholder="full name" type="text" class="form-control1 bg-dark1" id="leaderName" name="leaderName"><span class="error"><?php echo $lNameErr ?></span>
                            </div>

                        </fieldset1>
                        <fieldset1 class="form-group1 ">
                            <label style="color: white" class="col-sm1-2">USN</label>
                            <div class="col-sm1-5">
                                <input style="font-family:monospace;color:white; text-transform: uppercase;" placeholder="1SIYYCSXYZ" type="text" class="form-control1 bg-dark1" id="text" name="leaderUsn"><span class="error"><?php echo $lUsnErr ?></span>
                            </div>

                        </fieldset1>
                        <fieldset1 class="form-group1 ">
                            <label style="color: white" class="col-sm1-2">E-mail</label>
                            <div class="col-sm1-5">
                                <input style="font-family:monospace;color: white;" placeholder="example@email.com" type="email" class="form-control1 bg-dark1" id="email" name="leaderEmail"><span class="error"><?php echo $lEmailErr ?></span>
                            </div>

                        </fieldset1>
                        <fieldset1 class="form-group1 ">
                            <label style="color: white" class="col-sm1-2">Phone</label>
                            <div class="col-sm1-5">
                                <input style="font-family:monospace;color: white;" placeholder="phone number" type="tel"  class="form-control1  bg-dark1" id="phone" name="leaderPhone"  maxlength="10"><span class="error"><?php echo $lPhoneErr ?></span>
                            </div>

                        </fieldset1>

                        <fieldset1 class="md-form col-sm-7">
                            <i class="fa fa-user prefix white-text"></i>
                            <input style="font-family:monospace; color:white;"  type="text" class="form-control1 bg-dark1" id="ln" name="leaderName">
                            <label for="ln">&emsp;Name</label>


                        </fieldset1><br>
                        <fieldset1 class="md-form col-sm-7">
                            <i class="fa fa-tag prefix white-text"></i>
                            <input style="font-family:monospace;color:white; text-transform: uppercase;" type="text" class="form-control1 bg-dark1" id="lusn" name="leaderUsn">
                            <label for="lusn">&emsp;USN</label>

                        </fieldset1><br>
                        <fieldset1 class="md-form col-sm-7">
                            <i class="fa fa-envelope prefix white-text"></i>
                            <input style="font-family:monospace;color: white;" type="email" class="form-control1 bg-dark1" id="lemail" name="leaderEmail">
                            <label for="lemail">&emsp;E-mail</label>

                        </fieldset1><br>
                        <fieldset1 class="md-form col-sm-7">
                            <i class="fa fa-pencil  prefix white-text"></i>
                            <input style="font-family:monospace;color: white;" type="tel"  class="form-control1  bg-dark1" id="phone" name="leaderPhone"  maxlength="10">
                            <label for="lemail">&emsp;Phone</label>

                        </fieldset1><br><br>


                    </fieldset1>

                    <fieldset1 class="form-group1 form-row1">
                        <label style="color: white" class="col-sm1-4"><h5><strong>Team Member 1</strong></h5></label>
                    </fieldset1>
                    <fieldset1 class="form-group1 row header-title" style="margin-left: 3%">


                        <fieldset1 class="form-group1">
                            <label style="color: white" class="col-sm1-2">Name</label>
                            <div class="col-sm1-5">
                                <input style="font-family:monospace;color: white;" placeholder="full name" type="text" class="form-control1 bg-dark1" id="leaderName" name="member1Name">
                                <span class="error"><?php echo $mNameErr ?></span>
                            </div>

                        </fieldset1>
                        <fieldset1 class="form-group1">
                            <label style="color: white" class="col-sm1-2">USN</label>
                            <div class="col-sm1-5">
                                <input style="font-family:monospace;color: white; text-transform: uppercase;" placeholder="1SIYYCSXYZ" type="text" class="form-control1  bg-dark1" id="text" name="member1Usn">
                                <span class="error"><?php echo $mUsnErr ?></span>
                            </div>

                        </fieldset1>
                        <fieldset1 class="form-group1">
                            <label style="color: white" class="col-sm1-2">E-mail</label>
                            <div class="col-sm1-5">
                                <input style="font-family:monospace;color: white;" placeholder="example@email.com" type="email" class="form-control1 bg-dark1" id="email" name="member1Email">
                                <span class="error"><?php echo $mEmailErr ?></span>
                            </div>


                        <fieldset1 class="md-form col-sm-7">
                            <i class="fa fa-user prefix white-text"></i>
                            <input style="font-family:monospace;color: white;" type="text" class="form-control1 bg-dark1" id="memname" name="member1Name">
                            <label for="memname">&emsp;Name</label>



                        </fieldset1><br>
                        <fieldset1 class="md-form col-sm-7">
                            <i class="fa fa-tag prefix white-text"></i>
                            <input style="font-family:monospace;color: white; text-transform: uppercase;" type="text" class="form-control1  bg-dark1" id="memusn" name="member1Usn">
                            <label for="memusn">&emsp;USN</label>

                                <input style="font-family:monospace;color: white;"  placeholder="phone number" type="tel" class="form-control1 bg-dark1"   id="phone" name="member1Phone"  maxlength="10" >
                                <span class="error"><?php echo $mPhoneErr ?></span>
                            </div>

                        </fieldset1><br>
                        <fieldset1 class="md-form col-sm-7">
                            <i class="fa fa-envelope prefix white-text"></i>
                            <input style="font-family:monospace;color: white;" type="email" class="form-control1 bg-dark1" id="mememail" name="member1Email">
                            <label for="mememail">&emsp;E-mail</label>


                        </fieldset1><br>
                        <fieldset1 class="md-form col-sm-7">
                            <i class="fa fa-pencil  prefix white-text"></i>
                            <input style="font-family:monospace;color: white;" type="tel" class="form-control1 bg-dark1"   id="memphone" name="member1Phone"  maxlength="10" >
                            <label for="memphone">&emsp;Phone</label>

                        </fieldset1><br><br>
                    </fieldset1>
                    <fieldset1 class="form-group1">
                        <input style="float: right;margin-right: 20px;" type="submit" value="Register" name="submit" class="btn1  btn1-outline1-success1 font-weight-bold">
                    </fieldset1>
                </div>
            </div>
        </fieldset1>
    </form>
    <!--main content-->
</div>
    <?php include('../../commonResources/footer.inc.php');?>

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <?php include('../commonResources/includeScripts.php');?>
</body>
</html>
