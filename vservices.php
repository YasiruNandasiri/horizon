<?php
/*comments, if any
*/

//session_start();
require_once("pageobj.php");

class ServicePage extends PageObj{
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
	$content1="<center><img src=\"image\plc.jpg\" alt=\"services\" style=\" opacity: 1; width:100%; height:300px; \"/></center>
				<center><h2 style=\"color: #2874a6 ;\" >Programming and Upgrading the PLC & HMI devices.</h2></center> 
				<center><p>We proudly stand alongside the handful of Automation Engineers that are qualified and certified by Siemens...</p></center>
				<center><h4>See More</h4></center> ";
	$boxdata[1]=array("boxid"=>2, "boxtype"=>"contentbox1", "stylename"=>"contentbox1", "content"=>"<a style=\"text-decoration: none; color: inherit;\" href=\"cservices1.php#plc\">$content1</a>");

	$content2="<center><img src=\"image\Motion.jpg\" alt=\"services\" style=\" opacity: 1; width:100%; height:300px; \"/></center>
				<center><h2 style=\"color: #2874a6 ;\" >Motion technology solutions</h2></center> 
				<center><p>Horizon Electrotechnics offers a wide range of Products and Service solutions to address the growing demand in the field.</p></center>
				<center><h4>See More</h4></center> ";
	$boxdata[2]=array("boxid"=>3, "boxtype"=>"contentbox1", "stylename"=>"contentbox1", "content"=>"<a style=\"text-decoration: none; color: inherit;\" href=\"cservices1.php#motion\">$content2</a>");

	$content3="<center><img src=\"image\industrialtraining.jpg\" alt=\"services\" style=\" opacity: 1; width:100%; height:300px; \"/></center>
				<center><h2 style=\"color: #2874a6 ;\" >Industrial Training programs</h2></center>
				<center><p>The target group includes, but is not limited to Plant Engineers, Technicians, and enthusiasts whose job scope involves installation and/or maintenance of Siemens products.</p></center>
				<center><h4>Apply</h4></center> ";
	$boxdata[3]=array("boxid"=>4, "boxtype"=>"contentbox1", "stylename"=>"contentbox1", "content"=>"<a style=\"text-decoration: none; color: inherit;\" href=\"cservices1.php#intern\">$content3</a>");
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

	$boxdata=array(); $noboxes=11;
	$title="<center><big><strong>SERVICES</strong></big></center>";
	$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
	$contentl="<center><img src=\"image\Siemensplc.jpg\" alt=\"Industrial IT, Communication, and Software Solutions\" style=\" object-fit: cover; width:100%; height:520px; box-sizing: border-box \"/></center> ";
	$boxdata[1]=array("boxid"=>2, "boxtype"=>"imagebox", "stylename"=>"imagebox", "content"=>"$contentl");

	$contentl1="<center><h2 style=\"color: #2874a6 ;\" >Industrial IT, Communication and Software solutions</h2></center> </BR>
						<center><ul style=\" text-align: justify;
						text-justify: inter-word;\">
							<li>Set-up and installation of Industrial communication for Distributed Control systems (DCS) in plants. This service includes PROFINET, PROFIBUS, MODBUS TCP / RTU or serial communication protocols.</li>
							<li>Real-time remote viewing and logging of precious process variables (Ex: Temperature, Pressure, Level) for reliable process control, Including Automatic SQL Database entry.</li>
							<li>Tailor-made software, IOT solutions, and for Industrial and commercial purposes.</li>
					  	</ul> </center>
						 ";
	$boxdata[2]=array("boxid"=>3, "boxtype"=>"servicelowerlbox", "stylename"=>"servicelowerlbox", "content"=>"$contentl1");

	//lowercontent
	
	$contentl="<center><img src=\"image\hydrolics.jpg\" alt=\"Electro-Pneumatic and Electro-Hydraulic Applications\" style=\" object-fit: cover; width:100%; height:520px; box-sizing: border-box \"/></center> ";
	$boxdata[4]=array("boxid"=>4, "boxtype"=>"imagebox1", "stylename"=>"imagebox1", "content"=>"$contentl");

	$contentl1="<center><h2 style=\"color: #2874a6 ;\" >Electro-Pneumatic and Electro-Hydraulic Applications</h2></center> </BR>
						<center><ul style=\" text-align: justify;
						text-justify: inter-word;\">
							<li>Designing and Installation of Electro-Pneumatic Automation Systems for newly built machines and plants. </BR> (Trusted brands - Festo, Germany)</li>
							<li>Designing and Installation of Electro-Hydraulic Applications for newly built machines and plants.</li>
							<li>Modifications and Troubleshooting of Complex Electro-Pneumatic or Electro-Hydraulic Circuits.</li>
							<li>Commissioning of Existing circuits using modern calibrators and simulation software.</li>
					  	</ul> </center>
						 ";
	$boxdata[3]=array("boxid"=>5, "boxtype"=>"servicelowerlbox1", "stylename"=>"servicelowerlbox1", "content"=>"$contentl1");

	$contentl="<center><img src=\"image\controlpanel.jpg\" alt=\"Design and Manufacture of Machinery control panels\" style=\" object-fit: cover; width:100%; height:520px; box-sizing: border-box \"/></center> ";
	$boxdata[5]=array("boxid"=>6, "boxtype"=>"imagebox", "stylename"=>"imagebox", "content"=>"$contentl");

	$contentl1="<center><h2 style=\"color: #2874a6 ;\" >Design and Manufacture of Machinery Control Panels</h2></center> </BR>
				<center><p align='justify'>Our experts can handle the entire process, from designing to assembling and commissioning of control panels, to suit any kind of complex machine on the factory floor.</p></center>
				<center><strong><p align='justify'>All our Control panels and Switchgear panels strictly comply with IEC 61439-1/2:2011 and EN 60204-1 International safety standards.</p></strong></center></BR>
				<center><p>We also undertake the following Job scopes:</p></center> </BR>


				<center><ul style=\" text-align: justify;
				text-justify: inter-word;\">
					<li>Upgrading, Retrofitting, or even re-designing of entire control systems of used / obsolete machinery.</li>
					<li>Commissioning of Automated plants and machinery. This includes calibration or Fine tuning as well.</li>
					<li>Upgrading or Replacement of existing PLCs and Servo drives in machinery control systems with the latest Siemens PLCs.</li>
					<li>Manufacture of Low voltage switchgear and Automatic Change-Over (ATS) switches.</li>
				</ul> </center>
			 ";
	$boxdata[6]=array("boxid"=>7, "boxtype"=>"servicelowerlbox", "stylename"=>"servicelowerlbox", "content"=>"$contentl1");

	$contentl="<center><img src=\"image\DriveRepairs.jpg\" alt=\" Horizon Electrotechnics - Drive Repairs and Servicing Centre\" style=\" object-fit: cover; width:100%; height:520px; box-sizing: border-box \"/></center> ";
	$boxdata[8]=array("boxid"=>8, "boxtype"=>"imagebox1", "stylename"=>"imagebox1", "content"=>"$contentl");

	$contentl1="<center><h2 style=\"color: #2874a6 ;\" >Horizon Electrotechnics - Drive Repairs and Servicing Centre</h2></center> </BR>

				<center><p align='justify'>Now you have Horizon Electrotechnics by your side to help keep your business up and running at all times. For the first time in Sri Lanka, we proudly own and operate a full-fledged Drive repair center to offer below services to all major brands in the present market.</p></center> </BR>

				<center><ul style=\" text-align: justify;
				text-justify: inter-word;\">
					<li>Repairing Variable Frequency Drives (VFD) of all major brands.</li>
					<li>Field Testing and Troubleshooting of VFDs.</li>
					<li>Modifications and Troubleshooting of Complex Electro-Pneumatic or Electro-Hydraulic Circuits.</li>
					<li>Commissioning and Configuring of new VFDs in machinery and plants.</li>
				</ul> </center>
				 ";
	$boxdata[7]=array("boxid"=>9, "boxtype"=>"servicelowerlbox1", "stylename"=>"servicelowerlbox1", "content"=>"$contentl1");

						
	//lowercontent
	
	$contentl="<center><img src=\"image\shipcontrol.jpg\" alt=\"Horizon Marine Electrotechnics\" style=\" object-fit: cover; width:100%; height:520px; box-sizing: border-box \"/></center> ";
	$boxdata[9]=array("boxid"=>10, "boxtype"=>"imagebox", "stylename"=>"imagebox", "content"=>"$contentl");

	$contentl1="<center><h2 style=\"color: #2874a6 ;\" >Horizon Marine Electrotechnics</h2></center> </BR>
				<center><p align='justify'>Established as a subsidiary of Horizon Electrotechnics (Pvt) Ltd, Horizon Marine Electrotechnics is purposely built to cater to the Marine Electrical and Automation Engineering requirements on Commercial ships in International voyages.  </BR>
							A team of Professional Marine Engineers provides the following Engineering Services for ships calling various domestic or international ports.  </BR>
							Horizon Marine Electrotechnics is also listed in the Ship Serv as a professional marine electrical and automation engineering service provider.</p></center> 
							


				<center><ul style=\" text-align: justify;
				text-justify: inter-word;\">
					<li>Designing and upgrading or retrofitting of existing Ship's automation systems using modern Siemens PLCs.</li>
					<li>Design and installation of automated Variable Speed Drives (VFD) systems for pumps and fans on ships for energy conservation.</li>
					<li>Repairs and upgrades Control and Alarm Monitoring Systems (CAMS) in Engine rooms.</li>
					<li>Repairs and retrofitting for the following marine electrical equipment are also available: <ul>
									<li>Marine boiler and Incinerator control panels.</li>
									<li>Main Switchboards (MSB) and Emergency Switchboards (ESB) repairs.</li>
									<li>Pump / Fan stater panels, Sequential starter circuits.</li>
									<li>Marine compressor starters and automation systems.</li>
				  				</ul></li>
				</ul> </center>
			 ";
	$boxdata[10]=array("boxid"=>11, "boxtype"=>"servicelowerlbox", "stylename"=>"servicelowerlbox", "content"=>"$contentl1");


	?>
	<div> <!--page top-->
		<?php $this->drawSection($boxdata, 0, 11);?>
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


