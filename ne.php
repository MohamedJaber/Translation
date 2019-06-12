<?php
require_once ('vendor/autoload.php');
    use \Statickidz\GoogleTranslate;
    $write="";
    $bt="";
    $btn="";
    $am="";
if($_POST['h'])
{
	$write=htmlentities($_POST['write']);
	$btn1=htmlentities($_POST['selec']);
    $btn2=htmlentities($_POST['selec1']);
    $bt=$btn1;
	$btn=$btn2;
    $source = $btn1;
    $target = $btn2;
    $text = $write;
    $trans = new GoogleTranslate();
    $result = $trans->translate($source, $target, $text);
    $am=$result;
	/*$q=mysql_query("select $btn from language where $bt='$write'");
	$r=mysql_fetch_assoc($q);
	$ar=$r["$btn"];*/
      
}   

?>
<html>
		<head>
			<title>translation</title>
			<link rel="stylesheet" href="s.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		</head>
		<body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <a class="navbar-brand" href="in.php">TRANSLATOR</a>
    </nav>
			<div id="ab">
				<?php
				$arr=array("Arabic","English","French","Spanish","Italian");
				$ar=array("Ar","En","Fr","Sp","It");
				$x=count($arr);
				?>
			<form action='ne.php' method='post'>
			<div id="o">
				<div id="c">
				<input type="text"  name="btm" id="w"<?php echo "value='".$bt."'" ?> readonly>
				<select name="selec" > 
					<?php
					for($i=0;$i<$x;$i++)
					{
						if($bt==$ar[$i])
						echo "<option value='$ar[$i]' selected>$arr[$i]</option>";
					else
						echo "<option value='$ar[$i]'>$arr[$i]</option>";
					}
					?>
				</select>
				<br>
					<input type='text' name='write' class="form-control" id="a" placeholder="Enter a Word" <?php echo "value='".$write."'" ?> onblur="this.form.submit()">
						
					</div>
					
					<div id="c">

					<input type="text"  name="btm2" id="d" <?php echo "value='".$btn."'" ?> readonly>
					<select name="selec1" onchange="this.form.submit()"> 
					<?php
					for($i=0;$i<$x;$i++)
					{
						if($btn==$ar[$i])
						echo "<option value='$ar[$i]' selected>$arr[$i]</option>";
					else
						echo "<option value='$ar[$i]'>$arr[$i]</option>";
					}
					?>
				</select>
					<br>
					<input type="text" name='read'  id="a" <?php echo "value='".$am."'" ?> readonly>
					</div>
					<br>
					<div id="ad">
					<input type='submit'  value='Translate' id="u">
					</div>
				<input type='hidden' name='h' value='1'>
				</div>
			</form>
			</div>
		</body>
	</html>