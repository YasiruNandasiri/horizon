<?php
/*comments, if any
*/

//session_start();
require_once("pageobj.php");

class ContactPage extends PageObj{
	//add if required
	
	function testObj(){
	  echo "This is a test of HomePageObj!";
	}
	
	function htmlHead(){ //HTML head content. This is common to all UI pages. Can override as appropriate! param=$title, $titleimg, $cssfilename
		$this->setMetaOnHtmlHead();
?>	 	
	 	<!--setting required internal styles for the page-->
	 	<style>
	 		/*.about{ background-color:#ecf0f1; width: 100%; height:600px }
	 		@media only screen and (max-width: 450px){
	 			.about{ background-color:#ecf0f1; width: 100%; height:510px; }
	 		}
	 		/*a:link{color: #FDFEFE;} a:visited{color: green;}	a:hover{color: hotpink;}*/
	 		
	 		.fa{ padding: 10px; font-size: 30px; width: 30px; text-align: center; text-decoration: none; margin: 5px; }			
			.fa:hover{ opacity: 0.7; }

			.fa-facebook{ background: #3B5998; color: white; }
			.fa-youtube{ background: #bb0000; color: white; }
			.fa-instagram{ background: #125688; color: white; }
			
			/* Fading animation */
			.fade { animation-name: fade; animation-duration: 1.5s; }

			@keyframes fade { from {opacity: .4} to {opacity: 1} }
		</style>		 		 	
	</head>
<?php
  }
  


function quicklinks(){
	$boxdata=array(); $noboxes=4;
	$title="<center><big><strong>QUICK LINKS</strong></big></center>";
	$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
	$content1="<center><img src=\"image\service.png\" alt=\"services\" style=\" box-sizing: border-box;  width:100%; height:300px;\"/></center>
				<center><h2 style=\"color: #2874a6 ;\" >Services</h2></center>
				<center><p>Horizon Electrotechnics is committed to delivering reliable solutions and services in the fields of Automation, Motion technology, Machinery control systems, and Industrial Training.</p></center>
				<center><h4>See more about our Services</h4></center> ";
	$boxdata[1]=array("boxid"=>2, "boxtype"=>"contentbox1", "stylename"=>"contentbox1", "content"=>"<a style=\"text-decoration: none; color: inherit;\" href=\"cservices.php\">$content1</a>");

	$content2="<center><img src=\"image\products.png\" alt=\"Products\" style=\" box-sizing: border-box; width:100%; height:300px; \"/></center>
				<center><h2 style=\"color: #2874a6 ;\" >Products</h2></center>
				<center><p>We offer a wide selection of industrial tools and gadgets. Our comprehensive range includes top brands such as Schneider Electric, Siemens, ABB, and Eaton.</p></center>
				<center><h4>See more about our Products</h4></center> ";
	$boxdata[2]=array("boxid"=>3, "boxtype"=>"contentbox1", "stylename"=>"contentbox1", "content"=>"<a style=\"text-decoration: none; color: inherit;\" href=\"cproducts.php\">$content2</a>");

	$content3="<center><img src=\"image\projects.png\" alt=\"Projects\" style=\" box-sizing: border-box; width:100%; height:300px; \"/></center>
				<center><h2 style=\"color: #2874a6 ;\" >Projects</h2></center> 
				<center><p>Our experts can handle the entire process, from designing to assembling.The Staff at Horizon Electrotechnics undergo periodical career development programs at Siemens-Strain</p></center>
				<center><h4>See more about our Projects</h4></center> ";
	$boxdata[3]=array("boxid"=>4, "boxtype"=>"contentbox1", "stylename"=>"contentbox1", "content"=>"<a style=\"text-decoration: none; color: inherit;\" href=\"cprojects.php\">$content3</a>");
?>
		<div> <!--page top-->
			<?php $this->drawSection($boxdata, 0, 1);?>
		</div> <!--end page top-->

		<div style="background-color: #fdfefe; height:890px; padding: 0% 4% 0% 4%"> <!--page top-->
			<?php $this->drawSection($boxdata, 1, 4);?>
		</div> <!--end page top-->
<?php
}

function bodycontent(){

	$boxdata=array(); $noboxes=5;
	$title="<center><big><strong>CONTACT US</strong></big></center>";
	$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
	$contentl="<center><big><strong><p style=\"color: #2874a6;\" >Horizon Electrotechnics (Pvt.) Ltd.</p></strong></big></BR></BR><img src=\"image\smalllogo.png\" alt=\"Horizon\" style=\"width:35%; height:auto; box-sizing: border-box;\"/></center></BR></BR>
				<strong><div style=\"display: flex; align-items: center; margin-bottom: 10px;\">
					<div style=\"flex: 0 0 25%;\">
						<img src=\"image/iconcall.png\" alt=\"Phone\" width=\"50\" height=\"50\">
					</div>
					<div style=\"flex: 0 0 65%;\">
						+94 112 948 533 <br> +94 711 397 922
					</div>
				</div>

				<div style=\"display: flex; align-items: center; margin-bottom: 10px;\">
					<div style=\"flex: 0 0 25%;\">
						<img src=\"image/iconemail.png\" alt=\"Email\" width=\"50\" height=\"50\">
					</div>
					<div style=\"flex: 0 0 65%;\">
					info.horizonelectro@gmail.com
					</div>
				</div>

				<div style=\"display: flex; align-items: center; margin-bottom: 10px;\">
					<div style=\"flex: 0 0 25%;\">
						<img src=\"image/iconaddress.png\" alt=\"Address\" width=\"50\" height=\"50\">
					</div>
					<div style=\"flex: 0 0 65%;\">
						1/41, Cardinal Cooray Mw, Dikowita, Hendala, 11300, Wattala, Sri Lanka.
					</div>
				</div>

				<div style=\"display: flex; align-items: center; margin-bottom: 10px;\">
					<div style=\"flex: 0 0 25%;\">
						<img src=\"image/iconweb.png\" alt=\"Web\" width=\"50\" height=\"50\">
					</div>
					<div style=\"flex: 0 0 65%;\">
						www.Horizonelectrotechnics.com
					</div>
				</div></strong>

			";
	$boxdata[1]=array("boxid"=>2, "boxtype"=>"contentboxcontact", "stylename"=>"contentboxcontact", "content"=>"$contentl");

	$form="<form name=\"formlog\" method=\"GET\" style=\" box-sizing: border-box;\" action=\"#\">

				<p><input type=\"text\" placeholder=\"Name\" name=\"sname\" size=\"28\" style=\"width: 35%; box-sizing: border-box; padding: 6px; margin-top: 8px; margin-right: 16px; font-size: 1em;\"></p>	
					
				<p><input type=\"email\" placeholder=\"Email\" name=\"email\" size=\"28\" style=\"width: 35%; box-sizing: border-box; padding: 6px; margin-top: 8px; margin-right: 16px; font-size: 1em;\"></p>

							
				<p><textarea id=\"message\" name=\"msg1\" rows=\"4\" cols=\"40\" placeholder=\"Type your message here...\"  size=\"28\" style=\"width: 35%; box-sizing: border-box; padding: 6px; margin-top: 8px; margin-right: 16px; font-family: sans-serif; font-size: 1em;\"></textarea></p>

				<p><input name=\"send\" type=\"submit\" value=\"Send\"  size=\"28\" style=\"width: 35%; box-sizing: border-box; border: 1.5px solid black; padding: 10px 114px; margin-top: 8px; margin-right: 16px; background: #aed6f1; color: Black; font-size: 16px; cursor: pointer;\"></p>
			</form>";
	$formbox="</BR></BR><h2 ><big>Drop Us Your Thoughts</big></h2></BR></BR>$form</BR></BR>";
	$boxdata[2]=array("boxid"=>3, "boxtype"=>"logbox", "stylename"=>"logbox", "content"=>"<center>$formbox</center>");


	?>
	<div> <!--page top-->
		<?php $this->drawSection($boxdata, 0, 3);?>
	</div> <!--end page top-->
<?php

}
  
function pageContent($newItems=array()){ 
  	
	$this-> quicklinks();
	$this-> bodycontent();
	//$this->slide($newItems=array(), $backbtnstyling, $contentstyling, $nextbtnstyling);
}
  
function pageBody($msg){ 
?>		
		<!--body of the page begins!-->
			<body bgcolor="#FDFEFE">
				<div id="main"> <!--main-->
					<div>
						<strong><big><center><font face="Trebuchet MS" color="#c0392b" size="+3"><?php echo $msg; ?></font></					center></big></strong>
					</div>
					<?php
						$this->pageTop();  
						$this->pageContent(/*$newItems=array()*/);
						$this->pageFooter();
					?>
				</div> <!--end main-->
			</body>
		</html>
<?php
	}
}
?>


