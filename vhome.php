<?php
/*comments, if any
*/

//session_start();
require_once("pageobj.php");

class HomePage extends PageObj{
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
	$title="<center><big><strong>HIGHLIGHTS</strong></big></center>";
	$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
	$contentl="<center><img src=\"image\Siemensplc.jpg\" alt=\"services\" style=\" object-fit: cover; width:100%; height:520px; box-sizing: border-box;\"/></center> ";
	$boxdata[1]=array("boxid"=>2, "boxtype"=>"imagebox", "stylename"=>"imagebox", "content"=>"$contentl");

	$contentl1="<center><h2 style=\"color: #2874a6 ;\" >Experts in DCS</h2></center> </BR>
	<center><p>installation of Industrial communication for Distributed Control systems (DCS) in plants for real-time remote viewing and logging of precious process variables facilitating reliable process control</p></center>
	 ";
	$boxdata[2]=array("boxid"=>3, "boxtype"=>"lowercontentbox", "stylename"=>"lowercontentbox", "content"=>"$contentl1");

	//lowercontent
	
	$contentl="<center><img src=\"image\hydrolics.jpg\" alt=\"services\" style=\" object-fit: cover; width:100%; height:520px; box-sizing: border-box \"/></center> ";
	$boxdata[4]=array("boxid"=>4, "boxtype"=>"imagebox1", "stylename"=>"imagebox1", "content"=>"$contentl");

	$contentl1="<center><h2 style=\"color: #2874a6 ;\" >Electro-Pneumatic and Electro-Hydraulic Applications</h2></center> </BR>
	<center><p>Designing and Installation of Electro-Pneumatic Automation Systems for newly built machines and plants.</p></center>
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


