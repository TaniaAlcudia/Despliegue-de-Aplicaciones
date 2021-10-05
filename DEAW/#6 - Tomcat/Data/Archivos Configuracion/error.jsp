<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Error</title>
</head>
<body>
<form name='login' action='${pageContext.request.contextPath}/j_security_check' method='POST'> User:<br> <input type='text' name='j_username'>
<br>Pass:<br> <input type='password' name='j_password'><br>
<input name="submit" type="submit" value="Acceder">
</form>
<div align="center">
<p style="color:red"> User or Pass incorrect!</p>
</div>
</body>
</html>
