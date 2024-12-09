<?php
function ExitAlert($msg){
    exit("gg.alert('".$msg."')");
}

$JDecode = json_decode(file_get_contents('php://input'),true); 
$FileName = "LoginData.data";
$ScriptName = "MAX 4X.lua";
$username= $JDecode["Username"];
$password=  $JDecode["Password"];
$content =json_decode(file_get_contents($FileName),true);
if ($content == null){
$content =[];
}
if(isset($username) == false || isset($password)== false ||trim($password) == ""|| trim($username) == ""){
ExitAlert('🚫Invalid Username Or Password🚫');
}


if($content[$username] <> null){
	if($content[$username]["password"] == $password){
exit(file_get_contents($ScriptName));
}
else{
ExitAlert('❎Wrong Password❄1�7');
}
	}
	else{
		ExitAlert("⚠Non Existent User⚄1�7");
		}
?>
