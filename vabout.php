<?php
/*comments, if any
*/

//session_start();
require_once("pageobj.php");

class AboutPage extends PageObj{
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
  


function companyStatement(){
	$boxdata=array(); $noboxes=4;
	$title="<center><big><strong>COMPANY STATEMENTS</strong></big></center>";
	$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
	$content1="<center><h2 style=\"color: #2874a6 ;\" >Vision</h2></center> </BR> 
				<center><p align='justify'>To be the marine and industrial trade engineering company of choice, leader in the industry and inspire the clients with latest technology, products and design being a valuable asset to our clients. We will be an organization that capitalizes on our strength, take advantage of opportunities, foster continually learning and developing to stay relevant, effective and efficient. </p></center>";
	$boxdata[1]=array("boxid"=>2, "boxtype"=>"aboutcontentbox1", "stylename"=>"aboutcontentbox1", "content"=>"$content1");

	$content2="<center><h2 style=\"color: #2874a6 ;\" >Mission</h2></center> </BR> 
				<center><p align='justify'>In line with our Core Values and Vision, Horizon Electronics (Pvt) Ltd will be the provider of choice dedicated to quality electronic solutions, solving problems, designing products, supplying products and services to the related field and industries. </p></center>";
	$boxdata[2]=array("boxid"=>3, "boxtype"=>"aboutcontentbox1", "stylename"=>"aboutcontentbox1", "content"=>"$content2");


	$content3="<center><h2 style=\"color: #2874a6 ;\" >Standards</h2></center> </BR> 
				<center><p align='justify'>Professionalism, hard work, and dedication, applying the highest standard of excellence in pursuit of absolute client satisfaction. </BR>
				Diversity of culture, beliefs, experiences and ideas. </BR>
				A safe and healthy work environment where we treat each other with dignity and respect. 
				</p></center>";
	$boxdata[3]=array("boxid"=>4, "boxtype"=>"aboutcontentbox1", "stylename"=>"aboutcontentbox1", "content"=>"$content3");
?>
		<div> <!--page top-->
			<?php $this->drawSection($boxdata, 0, 1);?>
		</div> <!--end page top-->

		<div style="background-color:  #fdfefe; height:700px; padding: 0% 4% 0% 4%"> <!--page top-->
			<?php $this->drawSection($boxdata, 1, 4);?>
		</div> <!--end page top-->
<?php
}

function bodycontent(){

	$boxdata=array(); $noboxes=5;
	$title="<center><big><strong>THE FOUNDERS</strong></big></center>";
	$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
	$contentl="<center><img src=\"image\pfounder1.jpg\" alt=\"services\" style=\" width:Auto; height:520px; box-sizing: border-box \"/></center> ";
	$boxdata[1]=array("boxid"=>2, "boxtype"=>"imagebox", "stylename"=>"imagebox", "content"=>"$contentl");

	$contentl1="<center><h2 style=\"color: #2874a6 ;\" >person One</h2></center> </BR>
				<center><h3 style=\"color: #566573 ;\" >Co-Founder</h3></center> </BR>
				<center><p align='justify'>Individuals have been professionals in their respective fields, with expertise in diverse roles. They have served as specialists in various domains, contributing to the success of organizations. Whether in legal, corporate, or other sectors, they have been instrumental in the growth and development of their respective companies.</p></center>
				 ";
	$boxdata[2]=array("boxid"=>3, "boxtype"=>"lowercontentbox", "stylename"=>"lowercontentbox", "content"=>"$contentl1");

	//lowercontent
	
	$contentl="<center><img src=\"image\pfounder2.jpg\" alt=\"services\" style=\"  width:Auto; height:520px; box-sizing: border-box \"/></center> ";
	$boxdata[3]=array("boxid"=>4, "boxtype"=>"imagebox1", "stylename"=>"imagebox1", "content"=>"$contentl");

	$contentl1="<center><h2 style=\"color: #2874a6 ;\" >Person Two</h2></center> </BR>
				<center><h3 style=\"color: #566573 ;\" >Co-Founder</h3></center> </BR>
				<center><p align='justify'>Individuals have been professionals in their respective fields, with expertise in diverse roles. They have served as specialists in various domains, contributing to the success of organizations. Whether in legal, corporate, or other sectors, they have been instrumental in the growth and development of their respective companies.</p></center>
				 ";
	$boxdata[4]=array("boxid"=>5, "boxtype"=>"lowercontentbox1", "stylename"=>"lowercontentbox1", "content"=>"$contentl1");

	?>
	<div> <!--page top-->
		<?php $this->drawSection($boxdata, 0, 5);?>
	</div> <!--end page top-->
<?php

}
  
function pageContent($newItems=array()){ 
  	
	$this-> companyStatement();
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


