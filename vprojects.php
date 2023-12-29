<?php
/*comments, if any
*/

//session_start();
require_once("pageobj.php");

class ProjectsPage extends PageObj{
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
	$content1="<center><img src=\"image\project1.jpg\" alt=\"services\" style=\" opacity: 1; width:100%; height:auto; \"/></center></BR>
				<center><h2 style=\"color: #2874a6 ;\" >Upgrade of Ship's Steering Control</h2></center> 
				<center><p>Steering Control system is designed for system operation that will be running smoothly and accurately with real time monitoring facilities at wheelhouse and MCR.</p></center>
				<center><h4>See More</h4></center> ";
	$boxdata[1]=array("boxid"=>2, "boxtype"=>"contentbox1", "stylename"=>"contentbox1", "content"=>"<a style=\"text-decoration: none; color: inherit;\" href=\"#\">$content1</a>");

	$content2="<center><img src=\"image\project2.jpg\" alt=\"services\" style=\" opacity: 1; width:100%; height:auto; \"/></center></BR>
				<center><h2 style=\"color: #2874a6 ;\" >Upgrade of Generator System</h2></center> 
				<center><p>As per the design auto synchronize and load sharing module monitor the ac voltage coming from busbar such as power outage, overload condition or additional demand.</p></center>
				<center><h4>See More</h4></center> ";
	$boxdata[2]=array("boxid"=>3, "boxtype"=>"contentbox1", "stylename"=>"contentbox1", "content"=>"<a style=\"text-decoration: none; color: inherit;\" href=\"#\">$content2</a>");

	$content3="<center><img src=\"image\project1.jpg\" alt=\"services\" style=\" opacity: 1; width:100%; height:auto; \"/></center></BR>
				<center><h2 style=\"color: #2874a6 ;\" >Upgrade of Ship's Steering Control</h2></center> 
				<center><p>Steering Control system is designed for system operation that will be running smoothly and accurately with real time monitoring facilities at wheelhouse and MCR.</p></center>
				<center><h4>See More</h4></center> ";
	$boxdata[3]=array("boxid"=>4, "boxtype"=>"contentbox1", "stylename"=>"contentbox1", "content"=>"<a style=\"text-decoration: none; color: inherit;\" href=\"#\">$content3</a>");
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
	$title="<center><big><strong>PROJECTS</strong></big></center>";
	$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
	$contentl="<center><img src=\"image\project1.jpg\" alt=\"services\" style=\" object-fit: cover; width:100%; height:520px; box-sizing: border-box \"/></center> ";
	$boxdata[1]=array("boxid"=>2, "boxtype"=>"imagebox", "stylename"=>"imagebox", "content"=>"$contentl");

	$contentl1="<center><h2 style=\"color: #2874a6 ;\" >Upgrade of Ship's Steering Control System with PLC Base Solutions </h2></center> </BR>
	<center><p align='justify'>Steering Control system is designed for system operation that will be running smoothly and accurately with real time monitoring facilities at wheelhouse as well as Machinery Control Room (MCR). All faults and errors will be indicated on the HMI and fault indicator panel on board safety system. System error can be corrected with HMI unit without removing or adjust sensors in the system. We are not going to change basic steering system or non-follow up systems available onboard. Thereby it will not affect emergency steering failure procedure. </p></center>
	 ";
	$boxdata[2]=array("boxid"=>3, "boxtype"=>"lowercontentbox", "stylename"=>"lowercontentbox", "content"=>"$contentl1");

	//lowercontent
	
	$contentl="<center><img src=\"image\project2.jpg\" alt=\"services\" style=\" object-fit: cover; width:100%; height:520px; box-sizing: border-box \"/></center> ";
	$boxdata[4]=array("boxid"=>4, "boxtype"=>"imagebox1", "stylename"=>"imagebox1", "content"=>"$contentl");

	$contentl1="<center><h2 style=\"color: #2874a6 ;\" >Design & Upgrade of Generator System</h2></center> </BR>
	<center><p align='justify'>As per the design auto synchronize and load sharing module monitor the ac voltage coming from busbar such as power outage, overload condition or additional demand. Upon detection of an outage for a predetermined period of time, the standby generator is started. Once the genset is reached to its rated speed, the load is shared and transferred between the generators. This automatic control system is capable of electrically monitoring fuel level, oil level, battery strength, next maintenance schedule and then start or stop the unmanned generator. Also, genset can be operated and monitored from a computer system remotely located in a comfortable operating room outside the generator site. </p></center>
	 ";
	$boxdata[3]=array("boxid"=>5, "boxtype"=>"lowercontentbox1", "stylename"=>"lowercontentbox1", "content"=>"$contentl1");

	?>
	<div> <!--page top-->
		<?php $this->drawSection($boxdata, 0, 5);?>
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


