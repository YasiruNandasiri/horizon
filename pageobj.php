<?php
/*October 09, 2023 (Mon). Author: YP@C2L3.
  Purpose: Page class of yFramework 2.0R2023. 
  Version: 2.0
*/

//require_once("genobj.php");
require_once("boxobj.php");

class PageObj extends GenObj{
  //properties list, if applicable
  
  function testObj(){
	  echo "This is a test of PageObj!";
	}
	
	function setMetaOnHtmlHead(){
		$title=$this->getData("title"); $titleimg=$this->getData("titleimg"); $cssfilename=$this->getData("cssfilename"); $cssmobile=$this->getData("cssmobile");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php echo $title; ?></title>
		<link rel="icon" type="image/x-icon" href="<?php echo $titleimg; ?>">
		 
	 	<!-- tablet stylesheet -->
	 	<!--<link rel="stylesheet" media="(max-width:800px) and (min-width:451px)" href="tablet.css">-->
		<!-- main stylesheet-->
		<link rel="stylesheet" href="<?php echo $cssfilename; ?>">
		<!-- smartphone stylesheet -->
	 	<link rel="stylesheet" media="(max-width:450px)" href="<?php echo $cssmobile; ?>">
	 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
	}
	
	function htmlHead(){ //HTML head content. This is common to all UI pages. Can override as appropriate! param=$title, $titleimg, $cssfilename
		$this->setMetaOnHtmlHead();
?>	 	
	 	<style>
	 		/*styling common to the entire website*/
	 	</style>
	 	
	</head>
<?php
  }
  
  function drawSection($boxdata=array(), $start, $stop){
  	$bobj=array();
  	
		//$start=0; $stop=3;
		for($i=$start; $i<$stop; $i++){
			$bobj[$i]=new BoxObj();
			$bobj[$i]->setPList($boxdata[$i]);
			$bobj[$i]->draw();
		}	
  }
  
  function menuBar(){
  	//menubar

	  	$boxdata1=array(); $noboxes=3;

		$logobox="<a href=\"chome.php\"><img src=\"image\smalllogo.png\" style=\" width:auto; height:100%; box-sizing: border-box;\" alt=\"Horizon\" /></a>";
		$boxdata1[0]=array("boxid"=>1, "boxtype"=>"logobox", "stylename"=>"logobox", "content"=>"$logobox");

		$menudata="<center></BR><b>
			&emsp;<a style=\"text-decoration: none; color: inherit;\" href=\"chome.php\">Home</a>
			&emsp;<a style=\"text-decoration: none; color: inherit;\" href=\"cservices.php\">Services</a>
			&emsp;<a style=\"text-decoration: none; color: inherit;\" href=\"cproducts.php\">Products</a>
			&emsp;<a style=\"text-decoration: none; color: inherit;\" href=\"cprojects.php\">Projects</a>
			&emsp;<a style=\"text-decoration: none; color: inherit;\" href=\"cabout.php\">About</a>

			&emsp;&emsp;&emsp;&emsp;<a href=\"ccontact.php\"style=\" background-color: #f1c40f;border: none; color:black; padding: 15px 32px; text-align: center; text-decoration: none; font-size:1.5vw;\">Contact Us</a>
			
			</b></center>";
		$boxdata1[1]=array("boxid"=>2, "boxtype"=>"menubox", "stylename"=>"menubox", "content"=>"$menudata");

		
?>		
		<div> <!--menubar-->
			<?php	$this->drawSection($boxdata1, 0, 2); ?>
		</div> <!--end menubar-->
<?php
  }
  
  function leftMenu(){
  	//leftmenu
		$boxdata2=array(); $noboxes=1;
		$menudata1="<a style=\"text-decoration: none;\" href=\"http://localhost/slgems/chome.php\">Home</a>
					</BR><a style=\"text-decoration: none;\" href=\"http://www.C2L3.org/\">Other Gemstones</a>";
		$boxdata2[0]=array("boxid"=>1, "boxtype"=>"sidemenu", "stylename"=>"sidemenu", "content"=>"$menudata1");
?>		
		<div> <!--left menu-->
			<?php	$this->drawSection($boxdata2, 0, 1); ?>
		</div> <!--end leftmenu-->
<?php
  }
  
  function rightMenu(){
  	//rightmenu
		$boxdata3=array(); $noboxes=1;
		$menudata2="<center><a href=\"http://www.C2L3.org/\"><img src=\"Green Sapphire.jpg\" alt=\"slgems\" style=\"width:45%; height:45%;\"/></a></center>";
		$boxdata3[0]=array("boxid"=>1, "boxtype"=>"sidemenu1", "stylename"=>"sidemenu1", "content"=>"$menudata2");
?>		
		<div> <!--right menu-->
			<?php	$this->drawSection($boxdata3, 0, 1); ?>
		</div> <!--end rightmenu-->
<?php
  }

  function topBar(){
	$boxdata=array(); $noboxes=1;
	 $topbar="<center>&emsp;&emsp; <a href=\"#\" class=\"fa fa-facebook\"></a><a href=\"#\" class=\"fa fa-youtube\"></a><a href=\"#\" class=\"fa fa-instagram\"></a>          
		  &emsp;&emsp;&emsp;<a style=\"color:#fdfefe; text-decoration: none;\" href=\"http://www.C2L3.org/\">+94 112 948 533 | info.horizonelectro@gmail.com</a>
		  &emsp;&emsp;&emsp;&emsp;<a href=\"http://localhost/olees/index.php\"><img src=\"sinbw.png\" alt=\"sinbtn\" style=\"width:110px; height:20px;\"/></a>
		  <a href=\"http://localhost/olees/index.php\"><img src=\"enbw.png\" alt=\"enbtn\" style=\"width:110px; height:20px;\"/></a>
		  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href=\"http://localhost/olees/index.php\"><img src=\"loginbw.png\" alt=\"loginbtn\" style=\"width:120px; height:20px;\"/></a>
		  </center>";
		$boxdata[0]=array("boxid"=>1, "boxtype"=>"topbar", "stylename"=>"topbar", "content"=>"$topbar");
?>      
  	<div> <!--topbar-->
		<?php    $this->drawSection($boxdata, 0, 1); ?>
	</div> <!--end topbar-->
<?php
}
  
  function pageTop(){
?>
		<div> <!--page top-->
			<?php
				$this->topBar();	
				$this->menuBar();
				//$this->drawSection($boxdata, 0, 3); 		
						//$this->leftMenu();
						//$this->rightMenu();
			?>
		</div> <!--end page top-->
<?php
  }
  
  function pageContent($pid){
  	//body content
  	$boxdata4=array(); $noboxes=1;
  	$link=$this->connect();
  	$rs=$this->selectRecords($fields=array("*"), $tables=array("page"), " WHERE pid=$pid");
		while($row=$rs->fetch()){
			$pcontent=$row["pcontent"]; 
			//echo $age=$row["age"]; echo "</BR>";
		
			$bodycontent="$pcontent"; $footergems="";
			$bodycontent=$bodycontent. $footergems;
			$boxdata4[0]=array("boxid"=>1, "boxtype"=>"bodycontent", "stylename"=>"bodycontent", "content"=>"$bodycontent");
?>		
			<div> <!--body content-->
				<?php	$this->drawSection($boxdata4, 0, 1); ?>
			</div> <!--end body content-->
<?php
		}
		$link=$this->closeLink();
  }

  
  function pageFooter(){
  	//footer
		$boxdata=array(); $noboxes=5;
		$boxdata[0]=array("boxid"=>1, "boxtype"=>"sitemapabout", "stylename"=>"sitemapabout", "content"=>"<a style=\"text-decoration: none; color:#fdfefe \" href=\"chome.php\">&emsp;&emsp; Home</a></BR></BR><a style=\"text-decoration: none; color:#fdfefe \" href=\"cservices.php\">&emsp;&emsp; Services</a></BR></BR><a style=\"text-decoration: none; color:#fdfefe \" href=\"cproducts.php\">&emsp;&emsp; Products</a></BR></BR><a style=\"text-decoration: none; color:#fdfefe \" href=\"cprojects.php\">&emsp;&emsp; Projects</a></BR></BR><a style=\"text-decoration: none; color:#fdfefe \" href=\"cabout.php\">&emsp;&emsp; About</a></BR></BR><a style=\"text-decoration: none; color:#fdfefe \" href=\"ccontact.php\">&emsp;&emsp; Contact Us</a>");
		$contactbox="<center><big><strong>Horizon Electrotechnics (Pvt.) Ltd.</strong></big></BR></BR>1/41, Cardinal Cooray Mw, Dikowita, Hendala, 11300, Wattala, Sri Lanka.</BR></BR>+94 112 948 533 </BR>+94 711 397 922</BR></BR>info.horizonelectro@gmail.com</BR>www.Horizonelectrotechnics.com </BR></BR><a href=\"#\" class=\"fa fa-facebook\"></a><a href=\"#\" class=\"fa fa-youtube\"></a><a href=\"#\" class=\"fa fa-instagram\"></a></center>";
		$boxdata[1]=array("boxid"=>2, "boxtype"=>"sitemapmain", "stylename"=>"sitemapmain", "content"=>"$contactbox");
		$signupform="<form name=\"subscribe\" method=\"GET\" style=\" box-sizing: border-box;\" action=\"chome.php\">
                                        <p><input type=\"text\" placeholder=\"Your Name\" name=\"sname\" size=\"20\" style=\" width: 50%; box-sizing: border-box; padding: 6px; margin-top: 8px; margin-right: 16px; font-size: 1em;\"></p>
                                        <p><input type=\"text\" placeholder=\"Your E-mail\" name=\"email\" size=\"20\" style=\" width: 50%; box-sizing: border-box; padding: 6px; margin-top: 8px; margin-right: 16px; font-size: 1em;\"></p>
                                        <p><input name=\"submit\" type=\"submit\" value=\"Subscribe\" style=\" width: 50%; box-sizing: border-box; padding: 10px;  margin-top: 8px; margin-right: 16px; background: white; color: #2874a6; border-radius: 0px;  border: none; font-size: 16px; cursor: pointer;\"></p>
                                    </form>";
		$signupbox="<center><big>Sign up for our newsletter</big></BR>$signupform</center>";
		$boxdata[2]=array("boxid"=>3, "boxtype"=>"sitemapsignup", "stylename"=>"sitemapsignup", "content"=>"$signupbox");
		$boxdata[3]=array("boxid"=>4, "boxtype"=>"copyrightbox", "stylename"=>"copyrightbox", "content"=>"<center>Privacy Policy</center>");
		$boxdata[4]=array("boxid"=>5, "boxtype"=>"copyrightbox", "stylename"=>"copyrightbox", "content"=>"<center>&copy;2023 Horizon Electrotechnics (Pvt.) Ltd. All rights reserved. <a style=\"color: #fdfefe ; text-decoration:none\" href=\"http://www.C2L3.org/\">Powered by yF20l0 of C2L3.org</a></center>");	
?>  	
  	<div> <!--page footer-->
			<?php	$this->drawSection($boxdata, 0, 5); ?>
		</div> <!--end page footer-->
<?php
  }
}
?>

<?php //echo "Testing of the Page class"; ?>

