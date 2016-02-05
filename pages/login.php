<?php include "../layout/header.php"; ?>
  <h2>Login</h2>
  <form action="login.php" method="Post">
    Username: <input type="text" name="Username"/>
    <br />
    Password: <input type="password" name="Password" />
    <input type="submit" value="Login" />
  </form>
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