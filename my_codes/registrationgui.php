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


<form>
    <fieldset action="registrationgui.php" method="post" class="form-group">
        <div class="jumbotron bg-dark text-light" style="font-family:sans">
            <fieldset class="form-group bg-transparent text-light" style="font-family:cursive; text-align-last: center;">
                <label class="col-sm-5 " ><h2><strong>Reverse Coding</strong></h2></label>

            </fieldset>
            <fieldset class="form-group row">
                <label class="col-sm-5" ><h3><strong>Team Members</strong></h3></label>
            </fieldset>
            <fieldset class="form-group row">
                <label class="col-sm-2">Team Leader</label>
            </fieldset>
            <fieldset class="form-group row">

                <fieldset class="form-group">
                    <label class="col-sm-2">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="leaderName" name="leaderName">
                    </div>

                </fieldset>
                <fieldset class="form-group">
                    <label class="col-sm-2">USN</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="text" name="leaderUsn">
                    </div>

                </fieldset>
                <fieldset class="form-group">
                    <label class="col-sm-2">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="leaderEmail">
                    </div>

                </fieldset>
                <fieldset class="form-group">
                    <label class="col-sm-2">Phone</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control " id="phonr" name="leaderPhone">
                    </div>

                </fieldset>

            </fieldset>

            <fieldset class="form-group row">
                <label class="col-sm-2">Team Member 1</label>
            </fieldset>
            <fieldset class="form-group row" >

                <fieldset class="form-group">
                    <label class="col-sm-2">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="leaderName" name="member1Name">
                    </div>

                </fieldset>
                <fieldset class="form-group">
                    <label class="col-sm-2">USN</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="text" name="member1Usn">
                    </div>

                </fieldset>
                <fieldset class="form-group">
                    <label class="col-sm-2">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="member1Email">
                    </div>

                </fieldset>
                <fieldset class="form-group">
                    <label class="col-sm-2">Phone</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control " id="phonr" name="member1Phone">
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