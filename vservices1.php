<?php
/*comments, if any
*/

//session_start();
require_once("pageobj.php");

class Service1Page extends PageObj{
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

		<div style="background-color:  #fdfefe; height:890px; padding: 0% 4% 0% 4%"> <!--page top-->
			<?php $this->drawSection($boxdata, 1, 4);?>
		</div> <!--end page top-->
<?php
}

function bodycontent(){

	$boxdata=array(); $noboxes=5;
	$title="<center><big><strong>SERVICES</strong></big></center>";
	$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
	$contentl="<center><img src=\"image\plc.jpg\" alt=\"Programming and Upgrading the Programmable Logic Controllers (PLC) & Human Machine Interface (HMI) devices.\" style=\" object-fit: cover; width:100%; height:520px; box-sizing: border-box \"/></center> ";
	$boxdata[1]=array("boxid"=>2, "boxtype"=>"imagebox", "stylename"=>"imagebox", "content"=>"$contentl");

	$contentl1="<center><h2 style=\"color: #2874a6 ;\" >Programming and Upgrading the Programmable Logic Controllers (PLC) & Human Machine Interface (HMI) Devices.</h2></center> </BR>
	
	<center><p align='justify'>We proudly stand alongside the handful of Automation Engineers who are qualified and certified by Siemens, The world's leading Automation solutions provider from Germany. In order to deliver up-to-date products with quality, the technical staff at Horizon Electrotechnics undergo periodical career development programs at Siemens-Strain.</p></center> </BR>

	<center><ul style=\" text-align: justify;
	text-justify: inter-word;\">
		<li>Programming and installation of new PLCs for industrial and Commercial applications.(Siemens SIMATIC S7-1200 Series, Siemens SIMATIC S7-1500 Series)</li>
		<li>Migrating from obsolete Siemens PLCs into Newly arrived Siemens PLCs. (Added benefits & Cos efficiency can be discussed by contacting our customer support line)<ul>
					<li>From Siemens S7-200 - To Siemens S7-1200</li>
					<li>From Siemens S7-300 / S7- 400 - To Siemens S7-1500</li>
				
			</ul></li>
		<li>Upgrading Or replacement of 3rd Party PLCs in Control panels into Siemens PLCs</li>
		<li>Commissioning and Configuring of new VFDs in machinery and plants.</li>
		<li>PLCs and HMIs of any other brand can be supplied, Programmed, and Installed at request (Subject to the Availability and Compatibility of the products).</li>
	  </ul> </center>
	 ";
	$boxdata[2]=array("boxid"=>3, "boxtype"=>"servicelowerlbox", "stylename"=>"servicelowerlbox", "content"=>"$contentl1");

	//lowercontent
	
	$contentl="<center><img src=\"image\Motion.jpg\" alt=\"Motion technology solutions\" style=\" object-fit: cover; width:100%; height:520px; box-sizing: border-box \"/></center> ";
	$boxdata[4]=array("boxid"=>4, "boxtype"=>"imagebox1", "stylename"=>"imagebox1", "content"=>"$contentl");

	$contentl1="<center><h2 style=\"color: #2874a6 ;\" >Motion Technology Solutions</h2></center> </BR>
	<center><p align='justify'>Horizon Electrotechnics offers a wide range of Products and Service solutions to address the growing demand in the field of Motion Technology.</BR>
	With the aid of OEM software, Computer simulations, and measuring / calibration instruments from Fluke-USA), our experts deliver the following services to Motion-controlled machinery in the Packaging, Printing, F&B, Medical, and Textile industries.</p></center> </BR>
	


	<center><ul style=\" text-align: justify;
	text-justify: inter-word;\">
		<li>Designing, Configuring, and installation of Siemens Motion controllers to newly built machines and Plants. (Siemens SINAMICS Series, Siemens SIMOTION Series.)</li>
		<li>Upgrading or Replacement of obsolete 3rd party Motion controllers and servo motors to Siemens Motion controllers. This also includes Any modifications done to Speed / Position feedback encoders, Planetary gearbox, and External drive controllers as well.</li>
		<li>Design, Installation, and repair of motion controllers that use Stepper motors and Indexers.</li>
		<li>Configuring and installation of Variable Frequency drives (VFD) and feedback systems.</li>
		<li>Designing, Configuring and installation of any 3rd party Motion controllers and Servo Motors is also available on request (Subject to Availability and Compatibility of Products).</li>
	  </ul> </center>
 ";
	$boxdata[3]=array("boxid"=>5, "boxtype"=>"servicelowerlbox1", "stylename"=>"servicelowerlbox1", "content"=>"$contentl1");

?>
	<div> <!--page top-->
		<?php $this->drawSection($boxdata, 0, 1);?>
	</div> <!--end page top-->

	<div id="plc"> <!--page top-->
		<?php $this->drawSection($boxdata, 1, 3);?>
	</div> <!--end page top-->

	<div  id="motion"> <!--page top-->
		<?php $this->drawSection($boxdata, 3, 5);?>
	</div> <!--end page top-->
<?php

}

function internForm(){

	$boxdata=array(); $noboxes=5;
	$title="<center><big><strong>CAREERS</strong></big></center>";
	$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
	$form="<form name=\"formlog\" method=\"GET\" action=\"#\">

				<p><input type=\"text\" placeholder=\"Name\" name=\"name\" size=\"28\" style=\"width: 35%; box-sizing: border-box; padding: 6px; margin-top: 8px; margin-right: 16px; font-size: 0.8em;\"></p>	
					
				<p><input type=\"email\" placeholder=\"Email\" name=\"email\" size=\"28\" style=\"width: 35%; box-sizing: border-box; padding: 6px; margin-top: 8px; margin-right: 16px; font-size: 0.8em;\"></p>

							
				<p><textarea id=\"cover\" name=\"cover\" rows=\"4\" cols=\"40\" placeholder=\"Professional Summary\"  size=\"28\" style=\"width: 35%; box-sizing: border-box; padding: 6px; margin-top: 8px; margin-right: 16px; font-family: sans-serif; font-size: 0.8em;\"></textarea></p>

				<p><label for=\"cv\" style=\"width:20%; box-sizing: border-box; padding: 6px; margin-top: 8px; margin-right: 16px; font-size: 0.8em;\">Select a file:</label></br>
				<input type=\"file\" id=\"cv\" name=\"cv\" value=\"Send\"  style=\"width: 35%; box-sizing: border-box; padding: 6px; margin-top: 8px; margin-right: 16px; font-size: 0.7em;\"></br></p>

				<p><input name=\"send\" type=\"submit\" value=\"Send\"  size=\"28\" style=\"width: 35%; box-sizing: border-box; border: 1.5px solid black; padding: 10px 114px; margin-top: 8px; margin-right: 16px; background: #85c1e9; color: white; font-size: 0.8em; cursor: pointer;\"></p>
			</form>";
	$formbox="<big style=\" color:#2874a6; font-size: 0.8em;\">Send us your CV for Internship</big></BR>$form";
	$boxdata[1]=array("boxid"=>2, "boxtype"=>"contentbox", "stylename"=>"contentbox", "content"=>"<center>$formbox<center>");

?>
		<div  id="intern"> <!--page top-->
				<?php $this->drawSection($boxdata, 0, 2);?>
		</div> <!--end page top-->
<?php

}
  
function pageContent($newItems=array()){ 
  	
	$this-> quicklinks();
	$this-> bodycontent();
	$this-> internForm();
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


