<?php
function test_input(&$teamErr,&$lNameErr,&$lUsnErr,&$lEmailErr,&$lPhoneErr,&$mNameErr,&$mUsnErr,&$mEmailErr,&$mPhoneErr)
{
    $i=0;
    
    if(empty($_POST['teamName'])){
        $teamErr .="*Team name required";
        $i=-1;
    }
    
    if(empty($_POST['leaderName'])){
        $lNameErr .="*Name required";
        $i=-1;
    }
    else if(!preg_match("/^[a-zA-Z ]*$/",$_POST['leaderName'])){
        $i=-1;
        $lNameErr.="*Only characters and white-spaces allowed";
    }
    
    
    if(empty($_POST['member1Name'])){
        $mNameErr.="*Name required";
        $i=-1;
    }
    else if(!preg_match("/^[a-zA-Z ]*$/",$_POST['member1Name'])){
        $i=-1;
        $mNameErr.="*Only characters and white-spaces allowed";
    }
    
    if(empty($_POST['leaderUsn'])){
        $lUsnErr.="*USN required";
        $i=-1;
    }
    else if(!preg_match("/^1[Ss][iI]1[0-7][cCiIeEmMtTbB][cCiIeEmMtTbBsS][0-9][0-9][0-9]$/",$_POST['leaderUsn'])){
        $lUsnErr.="*Invalid USN";
        $i=-1;
    }
    
    if(empty($_POST['member1Usn'])){
        $mUsnErr.="*USN required";
        $i=-1;
    }
    else if(!preg_match("/^1[Ss][iI]1[0-7][cCiIeEmMtTbB][cCiIeEmMtTbBsS][0-9][0-9][0-9]$/",$_POST['member1Usn'])){
        $mUsnErr.="*Invalid USN";
        $i=-1;
    }
    
     if(empty($_POST['member1Phone'])){
        $mPhoneErr.="*Phone number required";
         $i=-1;
     }
    else if(!preg_match("/^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/",$_POST['member1Phone']) or intval($_POST['member1Phone'])<=1000000000){
        $mPhoneErr.="*Invalid phone number";
        $i=-1;
    }
    
     if(empty($_POST['leaderPhone'])){
        $lPhoneErr.="*Phone number required";
         $i=-1;
     }
    else if(!preg_match("/^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/",$_POST['leaderPhone']) or intval($_POST['leaderPhone'])<=1000000000){
        $lPhoneErr.="*Invalid phone number";
        $i=-1;
    }
    
    if(empty($_POST['leaderEmail'])){
        $lEmailErr.="*Email Id required";
        $i=-1;
    }
    
    if(empty($_POST['member1Email'])){
        $mEmailErr.="*Email Id required";
        $i=-1;
    }
    
    return $i;
    
}
?>