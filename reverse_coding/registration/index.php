<?php
$user='root';
$pass='';
$db= 'reverse_coding';
if(array_key_exists("submit",$_POST)){

    $link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
    $query="Select * from `team` where teamName='".$_POST['teamName']."'";

    $result=mysqli_query($link,$query);
    if(mysqli_fetch_array($result)>0)
        echo "<p>Team name already exists...!</p><br>";
    elseif(!$_POST['leaderName']||!$_POST['leaderUsn']||!$_POST['leaderEmail']||!$_POST['leaderPhone']||!$_POST['member1Name']||!$_POST['member1Usn']||!$_POST['member1Email']||!$_POST['member1Phone'])
        echo "<p>Some fields are still empty...!</p><br>";
    else{
        $queryTeam="Insert into `team` (`teamName`) values('".$_POST['teamName']."')";
        echo $queryTeam;
        mysqli_query($link,$queryTeam);
        $query="Select * from `team` where teamName='".$_POST['teamName']."'";


        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        $queryParticipant1="Insert into `participants` (`name`,`usn`,`email`,`phone`,`teamId`) values('".$_POST['leaderName']."','".$_POST['leaderUsn']."','".$_POST['leaderEmail']."','".$_POST['leaderPhone']."',".$form-row1['teamID'].")";


        mysqli_query($link,$queryParticipant1);
        $queryParticipant2="Insert into `participants` (`name`,`usn`,`email`,`phone`,`teamId`) values('".$_POST['member1Name']."','".$_POST['member1Usn']."','".$_POST['member1Email']."','".$_POST['member1Phone']."',".$form-row1['teamID'].")";
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
<div class=" view overlay hm-white-light">
    <img src="../commonResources/img/cover.jpg" class="shift img-fluid" alt="">
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
                </div>
                <div style="margin-left: 15%;margin-right:15%;">
                    <fieldset1 class="form-group1 form-row1">
                        <label style="color: white" class="col-sm1-4"><h4><b>Team Name</b></h4></label>
                        <div class="col-sm1-5">
                            <input placeholder="team name" style="font-family:monospace; font-size: 120%; color:white;" type="text" class="form-control1 bg-dark1" id="teamName" name="teamName" >
                        </div>

                    </fieldset1>
                    <fieldset1 class="form-group1 form-row1">
                        <label style="color: white" class="col-sm1-4"><h5><strong>Team Leader</strong></h5></label>
                    </fieldset1>
                    <fieldset1 class="form-group1 row header-title" style="margin-left: 3%">

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


                        <fieldset1 class="md-form col-sm-7">
                            <i class="fa fa-user prefix white-text"></i>
                            <input style="font-family:monospace;color: white;" type="text" class="form-control1 bg-dark1" id="memname" name="member1Name">
                            <label for="memname">&emsp;Name</label>


                        </fieldset1><br>
                        <fieldset1 class="md-form col-sm-7">
                            <i class="fa fa-tag prefix white-text"></i>
                            <input style="font-family:monospace;color: white; text-transform: uppercase;" type="text" class="form-control1  bg-dark1" id="memusn" name="member1Usn">
                            <label for="memusn">&emsp;USN</label>

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
