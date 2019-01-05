<html>
	<body>
		<form action = "form.asp" method = "get">
			Nama kamu : <input type = "text" name = "fname" size = "20" />
			<br />
			Pilih Mobil favorit kamu :
			<br />
			<input type = "radio" name = "cars" <%if cars = "BMW" then Response.Write("checked")%> value = "BMW">BMW</input>			
			<br />
			<input type = "radio" name = "cars" <%if cars = "Kijang" then Response.Write("checked")%> value = "Kijang">Kijang</input>			
			<br />
			<input type = "radio" name = "cars" <%if cars = "Timor" then Response.Write("checked")%> value = "Timor">Timor</input>			
			<br />
			<input type = "submit" value = "submit" />
		</form>
		<%
			dim fname
			fname = Request.QueryString("fname")
			
			dim cars
			cars = Request.QueryString("cars")
			
			If fname<>"" Then
				Response.Write("Hello " & fname & "!<br />")
				Response.Write("Bagaimana kabar kamu?")
				End If
			
			If cars<>"" then
				Response.Write("<p>Mobil favorit kamu adalah : " & cars & "</p>")
				end if
		%>
	</body>
</html>