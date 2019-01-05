<html>
<body>
<form action="tugas.asp" method="get">
<p>Nilai A adalah <input type='number' name='numbA'></p>
<p>Nilai B adalah <input type='number' name='numbB'></p>
<input type='submit' value='Jumlahkan'/><br/><br/>
</form>
<%
	dim A
	A=Request.QueryString("numbA")
	dim B
	B=Request.QueryString("numbB")
	if B<>"" and A<>"" then
	Response.Write("Nilai A adalah "&A&"<br/>")
	Response.Write("Nilai B adalah "&B&"<br/>")
	Response.Write("Jadi Nilai A ditambah Nilai B adalah "&Int(A)+Int(B)&"<br/>")
	end if
	
%>
</body>
</html>