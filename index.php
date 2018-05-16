<html>
<head>
	<title>Kalkulator Sederhana</title>
	<script text="text/javascript">
		function tambah() {
			document.getElementById("hasil").value='';

			if (document.getElementById("cek1").checked && document.getElementById("cek2").checked) {
				a=eval(document.getElementById("a").value);
				b=eval(document.getElementById("b").value);
				if (document.getElementById("cek1").checked) {
					d=eval(document.getElementById("d").value);
					c=a+b+d;
				}
				else {
					c=a+b;
				}
				
				document.getElementById("hasil").value=c;
			}
		}
		function kurang(){
			document.getElementById("hasil").value='';
			if (document.getElementById("cek1").checked && document.getElementById("cek2").checked) {
				a=document.getElementById("a").value;
				b=document.getElementById("b").value;
				if (document.getElementById("cek3").checked) {
					d=eval(document.getElementById("d").value);
					c=a-b-d;
				} else {
					c=a-b;
				}
				document.getElementById("hasil").value=c;
			}
		}
		function kali(){
			document.getElementById("hasil").value='';

			if (document.getElementById("cek1").checked && document.getElementById("cek2").checked) {
				a=document.getElementById("a").value;
				b=document.getElementById("b").value;
				if (document.getElementById("cek3").checked) {
					d=eval(document.getElementById("d").value);
					c=a*b*d;
				} else {
					c=a*b;
				}
				
				document.getElementById("hasil").value=c;
			}
		}
		function bagi(){
			document.getElementById("hasil").value='';

			if (document.getElementById("cek1").checked && document.getElementById("cek2").checked) {
				a=document.getElementById("a").value;
				b=document.getElementById("b").value;
				if (document.getElementById("cek3").checked) {
					d=eval(document.getElementById("d").value);
					c=a/b/d;
				} else {
					c=a/b;
				}
				
				document.getElementById("hasil").value=c;
			}
		}
	</script>
</head>
<body>
	<form>
		<table>
			<tr>
				<td>Inputan 1</td>
				<td>:</td>
				<td><input type="text" id="a" name="a" value="0"><input type="checkbox" name="cek1" id="cek1"></td>
			</tr>  
			<tr>
				<td>Inputan 2</td>
				<td>:</td>
				<td><input type="text" id="b" name="b" value="0"><input type="checkbox" name="cek2" id="cek2"></td>
			</tr> 
			<tr>
				<td>Inputan 3</td>
				<td>:</td>
				<td><input type="text" id="d" name="d" value="0"><input type="checkbox" name="cek3" id="cek3"></td>
			</tr> 
			<tr>
				<td>Hasil</td>
				<td>:</td>
				<td><input type="text" id="hasil" name="hasil"></td>
			</tr> 
			<tr>
				<td></td><td></td>
				<td><input type="button" value="+" onClick="tambah()">
					<input type="button" value="-" onClick="kurang()">
					<input type="button" value="x" onClick="kali()">
					<input type="button" value="/" onClick="bagi()"> 
				</tr>
			</table>
		</form>
	</body>
	</html>