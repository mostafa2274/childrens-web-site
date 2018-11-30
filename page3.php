<!DOCTYPEhtml>
<html>
<head>
<title>
mostafa mohamed ali
</title>
<style>
body{background-color:rgb(190,111,100)}
.e{background-color:rgb(172,217,223); width:400px; hight:200px;}
.u{background-color:rgb(177,2115,100);width:400px; hight:200px;}
p{color:red; font-size:50px;}
.s{color:green; font-size:30px;}
.a{background:red;}
#s{background:red;}
.a input[type="button"]{background:green;}
#s input[type="button"]{background:green;}
#q input[type="button"]{background:yellow;}
input[type="reset"]{background:gray;}
table{color:blue}
</style>
</head>
<body>
<p class="s"><a href="index.php">back to home page</a></p>
<h1>what do you want to learn...</h1>
<br>
<a href="page6.php">
<div class="e">
<p>
arabic
</p>
</div>
</a>
<a href="page7.php">
<div class="u">
<p>
English
</p>
</div>
</a>
<br/>
<p class="s">Train your child on the computer calculus
</p>
<table border="10" width="200" height="200" align="center">
<form>
<caption>mostafa mohamed ali</caption>
<tr><td colspan="4"><input type="text" name="input"></td></tr>
<tr><td><input type="button" name="1" value="1" onclick="input.value+='1'"></td>
<td><input type="button" name="2" value="2" onclick="input.value+='2'"></td>
<td><input type="button" name="3" value="3" onclick="input.value+='3'"></td>
<td class="a"><input type="button" name="+" value="+" onclick="input.value+='+'"></td>
</tr>
<tr>
<td><input type="button" name="4" value="4" onclick="input.value+='4'"></td>
<td><input type="button" name="5" value="5" onclick="input.value+='5'"></td>
<td><input type="button" name="6" value="6" onclick="input.value+='6'"></td>
<td id="s"><input type="button" name="-" value="-" onclick="input.value+='-'"></td>
</tr>
<tr><td><input type="button" name="7" value="7" onclick="input.value+='7'"></td>
<td><input type="button" name="8" value="8" onclick="input.value+='8'"></td>
<td><input type="button" name="9" value="9" onclick="input.value+='9'"></td>
<td id="s"><input type="button" name="*" value="x" onclick="input.value+='*'"></td>
</tr>
<tr><td id="s"><input type="reset" name="reset" value="c"></td>
<td><input type="button" name="0" value="0" onclick="input.value+='0'"></td>
<td id="q"><input type="button" name="=" value="=" onclick="input.value = eval(input.value)"></td>
<td id="s"><input type="button" name="/" value="/" onclick="input.value+='/'"></td>
</tr>
</form>
</table>
</body>
<html>