<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<div class=""><img src="cover.jpg" class="img-fluid embed-responsive " ></div>
<form style="width: 100%;">
    <fieldset action="registrationgui.php" method="post" class="form-group ">
        <div class="jumbotron bg-dark text-light " style="font-family:sans">

            <fieldset class="form-group row">
                <label class="col-sm-2"><h3>Team Name</h3></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="teamName" name="teamName">
                </div>

            </fieldset>
            <fieldset class="form-group row">
                <label class="col-sm-5" ><h4><strong>Team Members</strong></h4></label>
            </fieldset>
            <fieldset class="form-group row">
                <label class="col-sm-3">Team Leader</label>
            </fieldset>
            <fieldset class="form-group row">

                <fieldset class="form-group">
                    <label class="col-sm-3">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="leaderName" name="leaderName">
                    </div>

                </fieldset>
                <fieldset class="form-group">
                    <label class="col-sm-3">USN</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="text" name="leaderUsn">
                    </div>

                </fieldset>
                <fieldset class="form-group">
                    <label class="col-sm-3">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="leaderEmail">
                    </div>

                </fieldset>
                <fieldset class="form-group">
                    <label class="col-sm-3">Phone</label>
                    <div class="col-sm-10">
                        <input type="number"  class="form-control " id="phone" name="leaderPhone"  max="9999999999">
                    </div>

                </fieldset>

            </fieldset>

            <fieldset class="form-group row">
                <label class="col-sm-3">Team Member 1</label>
            </fieldset>
            <fieldset class="form-group row" >

                <fieldset class="form-group">
                    <label class="col-sm-3">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="leaderName" name="member1Name">
                    </div>

                </fieldset>
                <fieldset class="form-group">
                    <label class="col-sm-3">USN</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="text" name="member1Usn">
                    </div>

                </fieldset>
                <fieldset class="form-group">
                    <label class="col-sm-3">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="member1Email">
                    </div>

                </fieldset>
                <fieldset class="form-group">
                    <label class="col-sm-3">Phone</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control " id="phone" name="member1Phone"  max="9999999999" >
                    </div>

                </fieldset>

            </fieldset>
            <input type="submit" value="Register" class="btn btn-outline-success font-weight-bold">

        </div>
    </fieldset>
</form>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>