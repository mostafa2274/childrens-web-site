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
			sel=25;
			xs.src=men[sel].value;
			men.selectedIndex=sel;
	 }
	function changenext()
	 {
		var men=document.getElementById("m")
		var x=document.getElementById("s")
		var sel=men.selectedIndex
		sel=sel+1
		if(sel>25)
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
   if ($_GET['a']=="2")
   {
	   $count++;
   }
    if ($_GET['b']=="1")
   {
	   $count++;
   }
       if ($_GET['c']=="2")
   {
	   $count++;
   }
       if ($_GET['d']=="2")
   {
	   $count++;
   }
       if ($_GET['e']=="2")
   {
	   $count++;
   }
   echo "<h1>"."result  =".$count."/5"."</h1>";
  }
  }
  ?>
<form name="fname">
      <img src="img\aa.jpg" id="s" name="show" width="400" height="400">
      <select id="m" name="img" onchange="change()">
		<option value="img\aa.jpg">A</option>
		<option value="img\bb.jpg">B</option>
		<option value="img\cc.jpg">C</option>
		<option value="img\ddd.jpg">D</option>
		<option value="img\e.jpg">E</option>
		<option value="img\ff.jpg">F</option>
		<option value="img\gg.jpg">G</option>
		<option value="img\hhh.jpg">H</option>
		<option value="img\ii.jpg">I</option>
		<option value="img\jj.jpg">J</option>
		<option value="img\kk.jpg">K</option>
		<option value="img\ll.jpg">L</option>
		<option value="img\mm.jpg">M</option>
		<option value="img\nn.jpg">N</option>
		<option value="img\oo.jpg">O</option>
		<option value="img\pp.jpg">P</option>
		<option value="img\qq.jpg">Q</option>
		<option value="img\rr.jpg">R</option>
		<option value="img\sss.jpg">S</option>
		<option value="img\ttt.jpg">T</option>
		<option value="img\uu.jpg">U</option>
		<option value="img\vv.jpg">V</option>
		<option value="img\ww.jpg">W</option>
		<option value="img\xx.jpg">X</option>
		<option value="img\yy.jpg">Y</option>
		<option value="img\zz.jpg">Z</option>
      </select>
	  <input type="button" value="<<" id="b1" onclick="changepre()">
		<input type="button" value=">>" id="b3" onclick="changenext()">
		<input type="button" value="start" id="b2" onclick="chang()">
  </form>
  <p>(simple quiz)</p>
  <?php
include('database.php');
$rows=$db->getRows("SELECT * FROM quiz ORDER BY uid",array());
?>
  <form action="page5.php" method="get">
  <?php
         foreach($rows as $res) {
			echo "<p>".$res['q']."</p>";	 
 echo "<p>".$res['c1']."</p>"."<input type=\"radio\" name=".$res['n']." value=\"1\" checked=\"checked\"/>";
 echo "<p>".$res['c2']."</p>"."<input type=\"radio\" name=".$res['n']." value=\"2\"/>";
 echo "<p>".$res['c3']."</p>"."<input type=\"radio\" name=".$res['n']." value=\"3\"/><br>";
		 }
		 ?>
 <input type="submit" name="formSubmit" value="Submit"/>
 </form>
  
</body>
</html>