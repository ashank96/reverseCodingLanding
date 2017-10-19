<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mdb.min.css" integrity="sha384-k5bjxeyx3S5yJJNRD1eKUMdgxuvfisWKku5dwHQq9Q/Lz6H8CyL89KF52ICpX4cL" crossorigin="anonymous">
</head>
<body>


<form class="form-group" style="margin:0% 0.5% 0% 0.5%;">
        <img src="cover.jpg" class="img-fluid embed-responsive bg-dark" style="padding: 5px;" >
        <fieldset action="registrationgui.php" method="post" >
            <div  class="jumbotron bg-dark text-light" style="font-family:serif">


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
                <input type="submit" value="Register" class="btn btn-outline-success font-weight-bold">

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