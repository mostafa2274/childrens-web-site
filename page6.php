<!DOCTYPEhtml>
<html>
<head>
<title> mostafa mohamed ali</title>
<style>
body{background-color:rgb(172,217,223);; font-color:red}
</style>
<script>
var pos=0;
function change(){
var x=document.fname.img.selectedIndex;
document.fname.show.src=document.fname.img[x].value;
}
function changepre()
	 {
			var men=document.getElementById("m")
			var xs=document.getElementById("s")
			var sel=men.selectedIndex;
			sel=sel-1;
		    if(sel<0)
			sel=7;
			xs.src=men[sel].value;
			men.selectedIndex=sel;
	 }
	function changenext()
	 {
		var men=document.getElementById("m")
		var x=document.getElementById("s")
		var sel=men.selectedIndex
		sel=sel+1
		if(sel>7)
		sel=0;
		x.src=men[sel].value;
		men.selectedIndex=sel;
	 }
	 function start()
	 {
		var men=document.getElementById("m")
		var img=document.getElementById("s")
		var b =document.getElementById("b2")
		if(b.value == "stop")
			{	
				pos++;
				pos %= men.length
				
				img.src=men[pos].value
				window.setTimeout("start()",2000)
			}
	 }
	function stop()
     {
		var men=document.getElementById("m")
		var img=document.getElementById("s")
		var b =document.getElementById("b2")
		if(b.value == "stop")
				b.value="start"
			}
	function chang()
	 {
		var b =document.getElementById("b2")
		if(b.value == "start"){
		b.value ="stop"
					start()
				}
				else 
					b.value="start"
			}
</script>
</head>
<body>
<p class="s"><a href="index.php">back to home page</a></p>
<?php
  if(isset($_GET['formSubmit'])) {
	  $count=0;
  if($_GET['formSubmit']=="Submit") 
  {
   if ($_GET['a']=="3")
   {
	   $count++;
   }
    if ($_GET['b']=="3")
   {
	   $count++;
   }
    echo "<h1>"."result  =".$count."/2"."</h1>";
  }
  }
  ?>
<form name="fname">
      <img src="img\awf.jpg" id="s" name="show" width="500" height="500">
      <select id="m" name="img" onchange="change()">
		<option value="img\awf.jpg">1</option>
		<option value="img\4.png">2</option>
		<option value="img\5.jpg">3</option>
		<option value="img\6.jpg">4</option>
		<option value="img\8.jpg">5</option>
		<option value="img\3.jpg">6</option>
		<option value="img\7.jpg">7</option>
		<option value="img\22.jpg">8</option>
      </select>
	  <input type="button" value="<<" id="b1" onclick="changepre()">
		<input type="button" value=">>" id="b3" onclick="changenext()">
		<input type="button" value="start" id="b2" onclick="chang()">
  </form>
  <p>(simple quiz)</p>
  <form action="page6.php" method="get">
   حدد الجمله الفعليه 
  <br>
 الشجره عاليه<input type="radio" name="a" value="1" checked="checked"/><br>
 المدرسه جميله<input type="radio" name="a" value="2"/><br>
 يذهب مصطفي الي الجامعه<input type="radio" name="a" value="3"/><br>
 <hr>
  حدد الجمله الاسميه
  <br>
 يأكل السمين كثيرا<input type="radio" name="b" value="1"checked="checked"/><br>
 اكل محمد التفاحه<input type="radio" name="b" value="2"/><br>
 الجامعه جميله جدا<input type="radio" name="b" value="3"/><br>
 <hr>
  <input type="submit" name="formSubmit" value="Submit"/>
  </form>
  
</body>
</html>