<?php
$user='root';
$pass='';
$db= 'reverse_coding';
if(array_key_exists("submit",$_POST)){
    $link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
    $query="Select * from `team` where teamName='".$_POST['teamName']."'";
    $result=mysqli_query($link,$query);
    if(mysqli_fetch_array($result)>0)
        echo "<p>Team name already exists!</p><br>";
    elseif(!$_POST['leaderName']||!$_POST['leaderUsn']||!$_POST['leaderEmail']||!$_POST['leaderPhone']||!$_POST['member1Name']||!$_POST['member1Usn']||!$_POST['member1Email']||!$_POST['member1Phone'])
         echo "<p>Some fields are still empty!</p><br>";
    else{
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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
</head>
<body >


<<<<<<< HEAD
<form class="form-group" method="post" >
    <div class="container">
        <img src="cover.jpg" class="img-fluid embed-responsive bg-dark" style="padding: 5px;" >
        <fieldset>
            <div  class="jumbotron bg-dark text-light " style="font-family:serif">
=======
<form class="form-group" style="margin:0% 0.5% 0% 0.5%;">
        <img src="cover.jpg" class="img-fluid embed-responsive bg-dark" style="padding: 5px;" >
        <fieldset action="registrationgui.php" method="post" >
            <div  class="jumbotron bg-dark text-light" style="font-family:serif">
>>>>>>> 9cdaa78854f6096f3d37e572dd5e2956f3885961


                <fieldset class="form-group row">
                    <label class="col-sm-2"><h4><b>Team Name</b></h4></label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="teamName" name="teamName">
                    </div>

                </fieldset>
                <fieldset class="form-group row">
                    <label class="col-sm-5" ><h5>Team Members</h5></label>
                </fieldset>
                <fieldset class="form-group row">
                    <label class="col-sm-4"><h6>Team Leader</h6></label>
                </fieldset>
                <fieldset class="form-group row" style="margin-left: 3%">

                    <fieldset class="form-group row">
                        <label class="col-sm-4">Name</label>
                        <div class="col-sm-10">
                            <input style="font-family:monospace" placeholder="full name" type="text" class="form-control" id="leaderName" name="leaderName">
                        </div>

                    </fieldset>
                    <fieldset class="form-group  row">
                        <label class="col-sm-4">USN</label>
                        <div class="col-sm-10">
                            <input style="font-family:monospace" placeholder="1SIYYCSXYZ" type="text" class="form-control" id="text" name="leaderUsn">
                        </div>

                    </fieldset>
                    <fieldset class="form-group  row">
                        <label class="col-sm-4">E-mail</label>
                        <div class="col-sm-10">
                            <input style="font-family:monospace" placeholder="example@email.com" type="email" class="form-control" id="email" name="leaderEmail">
                        </div>

                    </fieldset>
                    <fieldset class="form-group  row">
                        <label class="col-sm-4">Phone</label>
                        <div class="col-sm-10">
                            <input style="font-family:monospace" placeholder="phone number" type="tel"  class="form-control " id="phone" name="leaderPhone"  maxlength="10">
                        </div>

                    </fieldset>

                </fieldset>

                <fieldset class="form-group row">
                    <label class="col-sm-4"><h6>Team Member 1</h6></label>
                </fieldset>
                <fieldset class="form-group row" style="margin-left: 3%">

                    <fieldset class="form-group row">
                        <label class="col-sm-4">Name</label>
                        <div class="col-sm-10">
                            <input style="font-family:monospace" placeholder="full name" type="text" class="form-control" id="leaderName" name="member1Name">
                        </div>

                    </fieldset>
                    <fieldset class="form-group row">
                        <label class="col-sm-4">USN</label>
                        <div class="col-sm-10">
                            <input style="font-family:monospace" placeholder="1SIYYCSXYZ" type="text" class="form-control" id="text" name="member1Usn">
                        </div>

                    </fieldset>
                    <fieldset class="form-group row">
                        <label class="col-sm-4">E-mail</label>
                        <div class="col-sm-10">
                            <input style="font-family:monospace" placeholder="example@email.com" type="email" class="form-control" id="email" name="member1Email">
                        </div>

                    </fieldset>
                    <fieldset class="form-group row">
                        <label class="col-sm-4">Phone</label>
                        <div class="col-sm-10">

                            <input style="font-family:monospace" placeholder="phone number" type="tel" class="form-control"   id="phone" name="member1Phone"  maxlength="10" >
                        </div>

                    </fieldset>

                </fieldset>
                <fieldset class="form-group">
                    <input type="submit" value="Register" name="submit" class="btn btn-outline-success font-weight-bold">
                </fieldset>

            </div>
        </fieldset>
</form>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>