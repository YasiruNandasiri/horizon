<style>

	div.gallery {
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
	margin-bottom: 25px;
	}


	div.polaroid {
	  width: 30%;
	  background-color: white;
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	  margin-right: 25px;
	  margin-bottom: 25px;
	}
	
	div.container {
	  text-align: center;
	  padding: 10px 20px;
	}
</style>
<?php
/*comments, if any
*/

//session_start();
require_once("pageobj.php");

class ProductsPage extends PageObj{
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

  public function productContent(){
						
	//product content

	
	$boxdata4 = array(); $noboxes = 1;
	$link = $this->connect();
	
	$rs = $this->selectRecords($fields = array("*"), $tables = array("poduct"), "");
	while ($row = $rs->fetch()) {
		$i=$row["productid"];
		$productname = $row["productname"];
		$imagename = $row["imagename"];
		$productcontent = $row["productcontent"];

		//echo $age=$row["age"]; echo "</BR>";

		 $bodycontent = "<center><img src=\"image\product\\" .$row["imagename"]. "\" alt=\"" . $row["productname"] . "\" style=\"box-sizing: border-box; object-fit: cover; width:100%; height:auto; \"/></center></BR>
		 <div class=\"container\"><center><p><strong>" . $row["productname"] . "</strong></BR></p></center>
						<center><p>" . $row["productcontent"] . "</p></center></div>" ;

		$boxdata4[0] = array("boxid" => 1, "boxtype" => "polaroid", "stylename" => "polaroid", "content" => $bodycontent);
		
		
	?>
		
		
			<?php $this->drawSection($boxdata4, 0, 1); ?>
			
		
	<?php
	}
	
	$link = $this->closeLink();
	
  
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

  
function pageContent($newItems=array()){ 
  	
	$this-> quicklinks();

	$boxdata=array(); $noboxes=4;
	$title="<center><big><strong>PRODUCTS</strong></big></center>";
	$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");

?>
	<div> <!--page top-->
		<?php $this->drawSection($boxdata, 0, 1);?>
	</div> <!--end page top-->
	
	<div class="backproduct">
		<div style="opacity: 95%; position: absolute;  top: 55%; left: 2%; right: 0.2%; width= 100%; transform: translate(-1%,-1%);" > <!--content1-->


		</div> <!--end content1-->

		<div class="gallery">
			<?php	$this->productContent(); ?>
		</div>

	</div>

<?php
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


