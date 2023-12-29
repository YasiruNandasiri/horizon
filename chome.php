<?php 
				/*Aug 19, 2023 (Sat). Author: YP@C2L3.
					Purpose: Controller file for vhome.php
					Version: 1.0
				*/

				require_once("vhome.php");
				
				//HomePage implementation begins
				//handling warnings, url data, meesages and input data sanitization
			 	$b=""; 
				$msg=""; //$flag=""; 
				$sname="";
				$email="";
			 	
				if(isset($_GET['submit'])) $b=htmlentities($_GET['submit'], ENT_QUOTES); else $b="";
				if(isset($_GET['sname'])) $sname=htmlentities($_GET['sname'], ENT_QUOTES); else $sname="";
				if(isset($_GET['email'])) $email=htmlentities($_GET['email'], ENT_QUOTES); else $email="";
				//echo $b;
				//if(isset($_GET['flag'])) $flag=htmlentities($_GET['flag'], ENT_QUOTES); else $flag="";
				//if(isset($_GET['msg'])) $msg=htmlentities($_GET['msg'], ENT_QUOTES); else $msg=""; 
				//handling ends
				//handling server data (for subscribe action)
				$hpobj= new HomePage(); //$hpobj->testObj();
				$title="Welcome to Horizon"; $titleimg=""; $cssfilename="./styles.css"; $cssmobile="stylesmobile.css";
				$data=array("title"=>"$title", "titleimg"=>"$titleimg", "cssfilename"=>"$cssfilename", "cssmobile"=>"$cssmobile");
				$hpobj->setPList($data);
				$hpobj->htmlHead();
				if(strcmp($b, "Subscribe")==0){ //echo "if Subscribe button is clicked";
					if( (strcmp($sname, "Your Name")==0) || (strcmp($email, "Your E-mail")==0) ) $msg="Please enter your name and e-mail address";
					else{
						$link=$hpobj->connect(); 
						$rs=$hpobj->selectRecords($fields=array("*"), $tables=array("subscribe"), " WHERE subscribe.email=\"$email\"");
						if($row=$rs->fetch()) $msg="This email address is already subscribed!";
						else{
							$res=$hpobj->insertRecords("subscribe", $fields=array("sname", "email"), $values=array("$sname", "$email")); 
							if($res==-1) $msg="Error!";
							else $msg="Your subscription is successful! Thank you!!<a href=\"./chome.php\">CONTINUE</a>";
						}	
						$link=$hpobj->closeLink();	
					}
				}
								
		
				
				$hpobj->pageBody($msg);
			?>