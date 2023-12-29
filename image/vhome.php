<?php  
				/*comments, if any */ 
				//session_start(); 
				require_once("pageobj.php");
				class HomePage extends PageObj{
				
				
					//add if required

					function testObj(){
						echo "This is a test of HomePage.Obj!";
					}
					
					function htmlHead(){ //HTML head content. This is common to all UI pages. Can override as appropriate! param=$title, $titleimg, 						$cssfilename
						$this->setMetaOnHtmlHead();
					 	
					 	echo "<!--setting required internal styles for the -->
					 	<style>
					 		/*.about{ background-color:#ecf0f1; width: 100%; height:500px; }	 		
					 		@media only screen and (max-width: 450px){
					 			.about{ background-color:#ecf0f1; width: 100%; height:510px; }
					 		}*/
					 		
					 		.fa{ padding: 20px; font-size: 30px; width: 50px; text-align: center; text-decoration: none; margin: 5px 2px; }			
							.fa:hover{ opacity: 0.7; }

							.fa-facebook{ background: #3B5998; color: white; }
							.fa-youtube{ background: #bb0000; color: white; }
							.fa-instagram{ background: #125688; color: white; }
					 	</style>
					 	
					</head>"; 
				
					}
					
					function pageBody($msg){
						echo "<strong><big><center><font face=\"Trebuchet MS\" color=\"#c0392b\" size=\"+3\">$msg</font></center></big></strong>";

						//header
						$boxdata=array(); $noboxes=2;
						//$logoboxdata="<a href= \" \"><center><img src=\"image\aitech.jpg\" alt=\"logo\" style=\"width:100%; height:auto; \"/></center></a>";
						$boxdata[0]=array("boxid"=>1, "boxtype"=>"topbanner", "stylename"=>"topbanner", "content"=>"$logoboxdata");

						$contentmain="<center><p>We are a multidisciplinary specialist engineering company, built to cater the rising requirements in the field of Automation and Control systems
						engineering </p></center> ";
						$boxdata[1]=array("boxid"=>2, "boxtype"=>"contentbox", "stylename"=>"contentbox", "content"=>"$contentmain");


						//content
						$boxdata1=array(); $noboxes=3;
						$content1="<center><img src=\"image\service.png\" alt=\"services\" style=\" opacity: 1; width:50%; height:auto; \"/></center></BR>
						<center><h2>Services</h2></center> </BR> 
						<center><p>Horizon Electrotechnics is committed to deliver reliable solutions and services in the fields of Automation, Motion technology, Machinery control systems and Industrial Training at an economical cost.</p></center>
						<center><h4>See more for our Services</h4></center> ";
						$boxdata1[0]=array("boxid"=>1, "boxtype"=>"contentbox1", "stylename"=>"contentbox1", "content"=>"$content1");

						$content2="<center><img src=\"image\products.png\" alt=\"services\" style=\" opacity: 1; width:50%; height:auto; \"/></center></BR>
						<center><h2>Products</h2></center> </BR> 
						<center><p>We offer a wide selection of industrial tools and gadgets. Our comprehensive range includes top brands such as Schneider Electric, Siemens, ABB and Eaton.</p></center>
						<center><h4>See more for our Products</h4></center> ";
						$boxdata1[1]=array("boxid"=>2, "boxtype"=>"contentbox1", "stylename"=>"contentbox1", "content"=>"$content2");

						$content3="<center><img src=\"image\projects.png\" alt=\"services\" style=\" opacity: 1; width:50%; height:auto; \"/></center></BR>
						<center><h2>Products</h2></center> </BR> 
						<center><p>Our experts can handle the entire process, from designing to assemble. In order to deliver up-to-the-date products with quality, the technical staff at Horizon Electrotechnics undergo periodical career development programs at Siemens-Strain</p></center>
						<center><h4>See more for our Projects</h4></center> ";
						$boxdata1[2]=array("boxid"=>3, "boxtype"=>"contentbox1", "stylename"=>"contentbox1", "content"=>"$content3");

						
						//lowercontent
						$boxdata2=array(); $noboxes=3;
						$contentl="<center><img src=\"image\Siemensplc.jpg\" alt=\"services\" style=\" width:50%; height:auto; \"/></center> ";
						$boxdata2[0]=array("boxid"=>1, "boxtype"=>"imagebox", "stylename"=>"imagebox", "content"=>"$contentl");

						$contentl1="<center><img src=\"image\products.png\" alt=\"services\" style=\" opacity: 1; width:50%; height:auto; \"/></center></BR>
						<center><h2>Products</h2></center> </BR> 
						<center><p>We offer a wide selection of industrial tools and gadgets. Our comprehensive range includes top brands such as Schneider Electric, Siemens, ABB and Eaton.</p></center>
						<center><h4>See more for our Products</h4></center> ";
						$boxdata2[1]=array("boxid"=>2, "boxtype"=>"lowercontentbox", "stylename"=>"lowercontentbox", "content"=>"$contentl1");

		
						?>						<!--body of the page begins!-->
						<body bgcolor=" #fdfefe ">
							<div> <!--main-->
							<?php
							$this->pageTop(); 

?>
								<div class="back"> <!--header-->
								
									<div style="   position: relative; text-align: center; color: white;">
										<center><img src="image\aitech.jpg" alt="background" style="width:100%; height:auto; "/></center>
										<div style="opacity: 0.9; position: absolute;  top: 20%; left: 2%; width= 100%; transform: translate(-1%,-1%);" > <!--maincontent-->

											</center><?php	$this->drawSection($boxdata, 1, 2); ?><center>
										</div> <!--end maincontent-->

										<div style="opacity: 0.9; position: absolute;  top: 50%; left: 1.5%; right: 67%; width= 100%; transform: translate(-1%,-1%);" > <!--content1-->
											
											</center><?php	$this->drawSection($boxdata1, 0, 1); ?><center>
										</div> <!--end content1-->

										<div style="opacity: 0.9; position: absolute;  top: 50%; left: 33.5%; right: 33.5%; width= 100%; transform: translate(-1%,-1%);" > <!--content2-->
										</center><?php	$this->drawSection($boxdata1, 1, 2); ?><center>
										</div> <!--end content2-->

										<div style="opacity: 0.9; position: absolute;  top: 50%; left: 67%; right: 1%; width= 100%; transform: translate(-1%,-1%);" > <!--content3-->
											</center><?php	$this->drawSection($boxdata1, 2, 3); ?><center>
										</div> <!--end content3-->

									</div>






								</div> <!--end header-->
						
								

								<?php
								//$this->pageContent(1);
								$this->drawSection($boxdata2, 0, 1); 

								$this->pageFooter();			
							echo "</div> <!--end main-->
					</body>
				</html>";
					}
				}
				?>