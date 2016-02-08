<?php include "../layout/header.php"; ?>
<link rel="stylesheet" href="../styles/login.css" rel="stylesheet" type="text/css">
<link rel="import" href="/elements/usertype-tabs.html">
<link rel="import" href="/bower_components/paper-material/paper-material.html">

<h2 class="like-h1">Login</h2>
<div id="login-main-wrapper">
  <usertype-tabs>
  </usertype-tabs>
  <div id="login-content-wrapper">
    <p>Email Adresse:</p>
    <input type="text" name="Username"/>
    <br />
    <p>Passwort:</p>
    <input type="password" name="Password" />
    <br>
    <paper-button>
      login
    </paper-button>
  </div>
</div>
<!--<%
  try{
    String username = request.getParameter("Username");
    String password = request.getParameter("Password");
    if(username!=null && password!=null){
      String back = Login.Login(username,password);
      if(back!="Failed")
        out.print("Hallo " + back);
      else
        out.print("please login.");
    }
    else
      out.print("please login..");
  }
  catch(Exception e){
    out.print("please login...");
  }
%>-->
<?php include "../layout/footer.php"; ?>
