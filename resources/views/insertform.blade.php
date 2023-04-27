<html>
<table>
<h1>Insert form</h1>
<form action="/insertDatatoDB" method="post">
@csrf

Name: <input type="text" name="name"><br>
Phone number: <input type="tel" name="ph"><br>
City: <input type="text" name="city"><br>
<button type="submit">Insert</button>
</form>
</table>

</html>