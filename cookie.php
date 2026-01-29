<form method="post">
username:<input type="text" name="un"><br>
password:<input type="password" name="pw"><br>
         <input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST["submit"])){
   setcookie("username",$_POST['un'],time()+3600);
   setcookie("password", $_POST['pw'], time()+3600);
   echo "cookie is set<br>";
   echo "welcome " .$_POST["un"];
   }
?>