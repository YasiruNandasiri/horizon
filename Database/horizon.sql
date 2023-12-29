-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 29, 2023 at 01:58 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horizon`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `sid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sid`, `sname`, `email`, `msg`) VALUES
(1, 'test name1', 'testemail1@test.com', 'test 1'),
(2, 'test name2', 'testemail2@test.com', 'test msg 2');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `pid` int(11) NOT NULL,
  `vpage` varchar(100) NOT NULL,
  `cpage` varchar(100) NOT NULL,
  `pclassname` varchar(100) NOT NULL,
  `picon` varchar(100) NOT NULL,
  `pgroup` int(11) NOT NULL,
  `pcontent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPRESSED;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`pid`, `vpage`, `cpage`, `pclassname`, `picon`, `pgroup`, `pcontent`) VALUES
(1, 'vhome.php', 'chome.php', 'HomePage', 'homeb0.png~homeicon', 11, '<div style=\"   position: relative; text-align: center; color: white;\">\r\n										<center><img src=\"image\\aitech.jpg\" alt=\"background\" style=\"width:100%; height:auto; \"/></center>\r\n										<div style=\"opacity: 0.9; position: absolute;  top: 20%; left: 2%; width= 100%; transform: translate(-1%,-1%);\" > <!--maincontent-->\r\n\r\n											</center>			<div class=\"contentbox\">\r\n				<center><p>We are a multidisciplinary specialist engineering company, built to cater the rising requirements in the field of Automation and Control systems engineering </p></center> 			</div>\r\n<center>\r\n										</div> <!--end maincontent-->\r\n\r\n										<div style=\"opacity: 0.9; position: absolute;  top: 50%; left: 1.5%; right: 67%; width= 100%; transform: translate(-1%,-1%);\" > <!--content1-->\r\n											\r\n											</center>			<div class=\"contentbox1\">\r\n				<center><img src=\"image\\service.png\" alt=\"services\" style=\" opacity: 1; width:50%; height:auto; \"/></center></BR>\r\n						<center><h2>Services</h2></center> </BR> \r\n						<center><p>Horizon Electrotechnics is committed to deliver reliable solutions and services in the fields of Automation, Motion technology, Machinery control systems and Industrial Training at an economical cost.</p></center>\r\n						<center><h4>See more for our Services</h4></center> 			</div>\r\n<center>\r\n										</div> <!--end content1-->\r\n\r\n										<div style=\"opacity: 0.9; position: absolute;  top: 50%; left: 33.5%; right: 33.5%; width= 100%; transform: translate(-1%,-1%);\" > <!--content2-->\r\n										</center>			<div class=\"contentbox1\">\r\n				<center><img src=\"image\\products.png\" alt=\"services\" style=\" opacity: 1; width:50%; height:auto; \"/></center></BR>\r\n						<center><h2>Products</h2></center> </BR> \r\n						<center><p>We offer a wide selection of industrial tools and gadgets. Our comprehensive range includes top brands such as Schneider Electric, Siemens, ABB and Eaton.</p></center>\r\n						<center><h4>See more for our Products</h4></center> 			</div>\r\n<center>\r\n										</div> <!--end content2-->\r\n\r\n										<div style=\"opacity: 0.9; position: absolute;  top: 50%; left: 67%; right: 1%; width= 100%; transform: translate(-1%,-1%);\" > <!--content3-->\r\n											</center>			<div class=\"contentbox1\">\r\n				<center><img src=\"image\\projects.png\" alt=\"services\" style=\" opacity: 1; width:50%; height:auto; \"/></center></BR>\r\n						<center><h2>Products</h2></center> </BR> \r\n						<center><p>Our experts can handle the entire process, from designing to assembling. In order to deliver up-to-the-date products with quality, the technical staff at Horizon Electrotechnics undergo periodical career development programs at Siemens-Strain</p></center>\r\n						<center><h4>See more for our Projects</h4></center> 			</div>\r\n<center>\r\n										</div> <!--end content3-->\r\n\r\n									</div>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `poduct`
--

CREATE TABLE `poduct` (
  `productid` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `imagename` varchar(100) NOT NULL,
  `productcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `poduct`
--

INSERT INTO `poduct` (`productid`, `productname`, `imagename`, `productcontent`) VALUES
(1, 'DIN rail terminal accessories', 'DINrailterminalacce.jpg', '<center><p>(Manufacturer : RS Pro, Weidmuller)</p></center>\r\n									<center><ul style=\" text-align: justify; text-justify: inter-word;\">\r\n												<li>End brackets and intermediate plates</li>\r\n												<li>Jumper bars (Terminal jumper bars 10 way)</li>\r\n												<li>Terminal Marker strips (1-50 numbers or blank)</li>\r\n												<li>Shield connectors (for grounding the signal cable shields)</li>\r\n												\r\n							  		</ul> </center>'),
(2, 'DIN rail terminal blocks', 'DINrailterminal.jpg', '<center><p>(Manufacturer : RS Pro, Weidmuller)</p></center></BR>\r\n						<center><ul style=\" text-align: justify; text-justify: inter-word;\">\r\n									<li>Feed-through terminals - Screw termination or spring cage termination</li>\r\n									<li>Double level terminals</li>\r\n									<li>Earthing terminals</li>\r\n									<li>Miniature series terminals</li>\r\n									\r\n						  </ul> </center>'),
(3, 'DIN Rail mount interface modules', 'DINRailmount.jpg', '<center><p>			(Manufacturer : RS Pro)</p></center></BR>\r\n										<center><p align =\'justify\'>Interface modules connect electronic devices\r\n										to electrical systems at the control level. These modules perform signal transmission and distribution functions\r\n										within the device and the system. </BR></BR> Types : D-SUB or IDC (09, 25, 37, AND 50 poles)</p></center>'),
(4, 'Wire terminals and splices', 'Wireterminalsandsplices .jpg', '<center><p>(maker - RS Pro - 0.75 sqmm - 16 sqmm)</p></center></BR>\r\n							<center><ul style=\" text-align: justify; text-justify: inter-word;\">\r\n										<li>Insulated crimp bootlace ferrules (German colour code)</li>\r\n										<li>Non-Insulated crimp bootlace ferrules</li>\r\n										<li>Twin entry bootlace ferrules.</li>\r\n										<li>Self adjusting crimping plier / knipex, Germany / 0.5 sqmm to 16 sqmm</li>\r\n										\r\n							  </ul> </center>'),
(5, 'Power line passive filters', 'Powerlinepassivefilters.jpg', '<center><p>(Manufacturer - RS Pro, Schaffner)</p></center></BR></BR>\r\n									<center><p>Chassis mount or DIN Rail mount 400HZ 250V AC/DC, 520/300V AC/DC, 3 X 520/300 VAC Single phase or three phase.</p></center>'),
(6, 'Isolated DC-DC Power converters', 'IsolatedDC-DCPowerconverters.jpg', '<center><p>(Manufacturer - RS Pro, Traco Power, TDK-Lambda)</p></center>\r\n									<center><p>Chassis mount or DIN Rail mount </BR>\r\n									Output - 5VDC / 12VDC / 24VDC / 48VDC</p></center>'),
(7, 'DIN rail mount Power supply units', 'DINrailmountPowersupplyunits.jpg', '<center><p>Maker - RS pro, PULS, Mean Wel</p></center>'),
(8, 'Power supply unit redundancy module', 'powersupplyredundancy.jpg', '<center><p></BR></BR> \r\n									Maker - Phoenix Contact</p></center></BR></BR>'),
(9, 'Miniature Circuit Breakers', 'mcb.jpg', '<center><p>			(Maker - Schneider)</p></center></BR>\r\n						<center><p>500mA / 1A / 2A / 3A / 4A / 5A </BR>\r\n						Single pole or two pole / Type - C </p></center>'),
(10, 'Opto-couplers or Opto-Isolators', 'Opto-couplers.jpg', '<center><p>(Maker - RS Pro, ABB)</p></center></BR>\r\n										<center><p align =\'justify\'>Forward Voltage - 5V, 12V, 24V or 230 - 240VAC\r\n</BR>Input Current - 6mA, 1A, 3A, 5A </p></center>'),
(11, 'Monitoring Relays', 'MonitoringRelays.jpg', '<center><p>(Maker - RS Pro, Carlo Gavazzi, Phoenix Contact)\r\n</p></center></BR>\r\n										<center><p align =\'justify\'>For monitoring parameters - Frequency, Liquid Level, Speed, Voltage and Thermistor protection relay\r\nfor motor control circuits.</p></center>'),
(12, 'Signal conditioning relays', 'Signalconditioningrelays.jpg', '<center><p>(Maker - RS Pro, Weidmuller, Phoenix Contact)\r\n\r\n</p></center></BR>\r\n										<center><p align =\'justify\'>A signal conditioner is a device that converts one type of electronic signal into another type of signal.\r\nIts primary use is to convert a signal that may be difficult to read by conventional instrumentation into a\r\nmore easily read format.</BR>\r\nInput - Voltage(0-10V, +/-10V), Current(0-20mA, 4-20mA), frequency, Resistance, Temperature,\r\nOutput - Voltage(0-10V, +/-10V), Current(0-20mA, 4-20mA), frequency</p></center>'),
(13, 'Linear Actuators', 'LinearActuators.jpg', '<center><p>			(Maker - RS Pro, festo, SKF)</p></center></BR>\r\n										<center><p align =\'justify\'>Linear actuators create a straight line motion and have been designed to withstand a range of operating\r\nconditions.</BR>\r\nActuation type - Stepper drive, Lead screw, Electric, Belt driven</BR>\r\nDC motor driven Input Voltage - 12 to 24VDC</BR>\r\nStroke - 10mm, 50mm, 100mm, 200mm, 300mm, 500mm, etc </p></center>'),
(14, 'Servo motors, Servo drives and accessories', 'Servomotors.jpg', '<center><p>			(Maker - Siemens, Schneider, Delta Electronics)\r\n</p></center></BR>\r\n										<center><p align =\'justify\'>Siemens SINAMIC and SIMOTION series.</BR>\r\nVoltage - 200-240VAC Single phase or 380-480VAC three phase</BR>\r\nGear boxes, Optical rotary encoders, cable harnesses, etc</p></center>'),
(15, 'Fluid Control systems', 'FluidControlsystems.jpg', '<center><p>(Maker - Burkert, SMC)</p></center>\r\n									<center><ul style=\" text-align: justify; text-justify: inter-word;\">\r\n												<li>Mass flow controllers</li>\r\n												<li>Flow transducers.</li>\r\n												<li>Inline flow meters.</li>\r\n												<li>Flow switches.</li>\r\n		<li> Level sensors - Capacitance, Ultrasonic, Optical, Guided wave radar and Fork level switch.</li>\r\n												\r\n							  		</ul> </center>'),
(16, 'Industrial push. Buttons, Pilot lights, and Control stations.', 'Industrialpush.jpg', '<center><p>(Maker - Schneider, EATON)</p></center>\r\n<center><p>We offer a wide selection of industrial push buttons, pilot lights and control stations. You will also find a variety of accessories including enclosures and contact blocks. Our comprehensive range includes top\r\nbrands such as Schneider Electric, Siemens, ABB and Eaton.</p></center>\r\n\r\n								<center><ul style=\" text-align: justify; text-justify: inter-word;\">\r\n												<li>Contact blocks and light blocks</li>\r\n												<li>Selector switch and key switch control units</li>\r\n												<li>Key switch and control switch heads</li>\r\n												<li>Pilot light complete units and pilot light heads</li>\r\n\r\n		<li>Push button complete unit and push button heads</li>\r\n\r\n<li>Push button pendant stations</li>\r\n		<li>Illuminated push buttons</li>\r\n												\r\n							  		</ul> </center>'),
(17, 'Industrial switches', 'Magneticreedswitch.jpg', '						<center><ul style=\" text-align: justify; text-justify: inter-word;\">\r\n									<li>Magnetic proximity reed switch</li>\r\n									<li>non-Fused switched disconnectors With or without enclosure / 3 pole or 4 pole 4A to 63A</li>\r\n									<li>Rotary cam switches - Various pole and throw configuration.</li>\r\n									\r\n									\r\n						  </ul> </center>'),
(18, 'PLC, HMI and data acquisition solutions ', 'plc.jpg', '<center><p>(Maker - Siemens)</p></center>\r\n									<center><ul style=\" text-align: justify; text-justify: inter-word;\">\r\n												<li>PLC CPU : SIMATIC S7-1200 and SIMATIC S7-1500 series</li>\r\n												<li>PLC expansion modules and I/O modules</li>\r\n												<li>PLC Backplanes</li>\r\n												<li>SITOP power supply modules</li>\r\n		<li>Communication modules</li>\r\n\r\n<li>LOGIC modules - Siemens LOGO! 8</li>\r\n												<li>Touch screen HMI</li>\r\n		<li>Siemens SIMATIC accessories, simulator modules and cable assemblies</li>\r\n												\r\n							  		</ul> </center>'),
(19, 'Sensors and Transducers', 'SensorsandTransducers.jpg', '<center><p>(Maker -Pepper + Fuchs)</p></center>\r\n									<center><ul style=\" text-align: justify; text-justify: inter-word;\">\r\n												<li>Capacitive Proximity sensors</li>\r\n												<li>Inductive Proximity sensors</li>\r\n												<li>Optical Rotary Encoders and encoder measuring wheels</li>\r\n												<li>Linear transducers</li>\r\n		<li>Load cells</li>\r\n\r\n<li>Pressure sensors and Platinum resistance temperature sensors</li>\r\n												<li>Sensor reflectors</li>\r\n		<li>Ultrasonic proximity sensors</li>\r\n\r\n<li>Sensor accessories including cable assemblies</li>\r\n												\r\n							  		</ul> </center>'),
(20, 'Temperature and Process heating / cooling controllers', 'coolingcontrollers.jpg', ' <center><p>(Makers - RS Pro, Jumo, Euro Therm)</p></center>\r\n\r\n			<center><ul style=\" text-align: justify; text-justify: inter-word;\">\r\n							<li>On / Off temperature controllers</li>\r\n							<li>PID temperature controllers</li>\r\n							<li>Temperature controller accessories, Sensors and Transmitters</li>\r\n							\r\n												\r\n			</ul> </center>'),
(21, 'Cable Accessories Including Cable clips & retainers, Cable markers, and heat / cold shrink sleeves i', 'shrinksleeve.jpg', '<center><p>(Can be ordered according to the sleeve colour, Shrink ratio and Diameter)</p></center>\r\n<center><p>Cable Printers and spare cassette - Brother, Dymo</p></center>'),
(22, 'Enclosure Accessories', 'Enclosure.jpg', '<center><ul style=\" text-align: justify; text-justify: inter-word;\">\r\n							<li> Axial cooling fans, Extractor fans, Filter modules, and protective grills</li>\r\n							<li>Electronic Enclosure heating / cooling controllers (Thermostats)</li>\r\n							<li>Space heaters for enclosures.</li>\r\n							\r\n												\r\n			</ul> </center>\r\n'),
(23, 'Relays', 'relays.jpg', '<center><p>We stock a large choice of relay products for a wide variety of applications. Within our range, you will find products such as latching and non-latching relays, solid state relays, interface relays and reed relays. All from trusted brands such as RS PRO, Omron, Finder</p></center>\r\n\r\n<center><ul style=\" text-align: justify; text-justify: inter-word;\">\r\n				<li>General purpose relay and accessories (Non-latching relays)</li>\r\n				<li>Interface relay and accessories including bus bar</li>\r\n				<li>Solid state relays</li>\r\n				\r\n									\r\n</ul> </center>'),
(24, 'Switches', 'footswitch.jpg', '<center><p>We stock a variety of special purpose switches to suit machine controllers and safety functions.</p></center>\r\n\r\n<center><ul style=\" text-align: justify; text-justify: inter-word;\">\r\n				<li>Detector switch</li>\r\n				<li>Foot switch</li>\r\n				<li>Joystick switch</li>\r\n				<li>Rotary switch</li>\r\n				\r\n									\r\n</ul> </center>'),
(25, 'Hand Tools', 'Handtools.jpg', '<center><p>Industrial tool kits essential for Engineers and Technicians, whose job scope involves Repair or Maintenance of control gear and switchgear panels.</p></center>\r\n<center><p>Tested to 10,000V As per IEC 60900 and VDE safety standards. (Working voltage is 1000V Max)</BR>\r\nKnipex, Wera - Made in Germany</BR>\r\nPortable flashlights and Head lamps from Maglite - USA and Petzl - France</BR>\r\nPersonal Protective Equipment (PPE) and Workwear </BR>\r\nEar defenders, Safety glasses, Hyflex Work gloves</p></center>'),
(26, '', '', ''),
(27, 'Electrical Testing and Measuring Instruments', 'Oscilloscope.jpg', '<center><p>Brand - Fluke, Chauvin Arnoux - France</p></center> <center><p>Horizon Electrotechnics offer an expansive range of test and measuring instruments used in electrical and electronic work. We also stock a variety of test lead and accessories as well.</p></center>  <center><ul style=\" text-align: justify; text-justify: inter-word;\"> 							<li>Digital handheld multimeters</li> 							<li>Digital clip-on current meters</li> 							<li>Portable calibrators and signal simulators (0-10VDC, 0-20mA, 4-20mA, Frequency, PT-100, Thermocouple)</li> 							<li>Digital storage oscilloscopes - bench or Handheld models are available</li> 							<li>Optical tachometers</li> 							<li>Insulation resistance meters (Megger testers)</li> 												 			</ul> </center>');

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

CREATE TABLE `styles` (
  `styleid` int(11) NOT NULL,
  `boxtype` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'textbox',
  `stylename` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'maintext',
  `margin` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `border` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `padding` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `width` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'fit-content',
  `max-width` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `height` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `max-height` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `background-color` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '#ebf5fb',
  `float1` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'left',
  `color` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '#273746',
  `font-family` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Monospace',
  `font-size` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '1.3em',
  `box-sizing` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'border-box',
  `extra2` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra3` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra4` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra5` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `styles`
--

INSERT INTO `styles` (`styleid`, `boxtype`, `stylename`, `margin`, `border`, `padding`, `width`, `max-width`, `height`, `max-height`, `background-color`, `float1`, `color`, `font-family`, `font-size`, `box-sizing`, `extra2`, `extra3`, `extra4`, `extra5`) VALUES
(1, 'bodycontent', 'bodycontent', 'none', 'none', 'none', '100%', '100%', 'none', 'none', '#fdfefe', 'left', ' #2c3e50 ', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(2, 'aboutbanner', 'aboutbanner', 'none', 'none', '16px', '50%', '45%', 'none', 'none', 'none', 'left', 'none', 'none', 'none', 'border-box', '', '', '', ''),
(3, 'menubox', 'menubox', 'none', 'none', '1.5% 5px 10px 25px', '75%', '75%', '150px', '150px', '#F7F9F9', 'left', ' #1b4f72 ', 'sans-serif', '1.6em', 'border-box', '', '', '', ''),
(4, 'videobox', 'videobox', '15px', 'none', '15px', '550px', '550px', 'none', 'none', '#ebf5fb', 'left', '#5dade2', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(5, 'logobox', 'logobox', 'none', 'none', '1% 0% 0% 15%', '25%', '25%', '150px', '150px', '#fdfefe', 'left', '#5dade2', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(6, 'productbox', 'productbox', 'none', 'none', '52px', '25%', '25%', 'none', 'none', 'none', 'left', '#d35400', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(7, 'topbar', 'topbar', 'none', 'none', '4px 4px 0px 4px', '100%', '100%', 'none', 'none', '#154360', 'left', '#FDFEFE', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(9, 'contactpara', 'contactpara', 'none', 'none', '60px 0px 0px 63px', '50%', '45%', 'none', 'none', 'none', 'left', '#17202a', 'sans-serif', '1.5em', 'border-box', '', '', '', ''),
(10, 'title', 'title', 'none', 'none', '1.5% 0% 1% 0%', '100%', '100%', 'none', 'none', '#D6EAF8', 'left', ' #1b4f72 ', 'sans-serif', '1.5em', 'border-box', '', '', '', ''),
(11, 'sitemap', 'sitemap', 'none', 'none', '52px', '25%', '25%', 'none', 'none', 'none', 'left', '#fdfefe', 'Trebuchet MS', '1em', 'border-box', '', '', '', ''),
(13, 'sidemenu', 'sidemenu', 'none', 'none', '30px 25px 10px 25px', '20%', '20%', 'none', 'none', 'none', 'left', ' #21618c ', 'Trebuchet MS', '1.1em', 'border-box', '', '', '', ''),
(14, 'sidemenu1', 'sidemenu1', 'none', 'none', '30px 25px 10px 25px', '20%', '20%', 'none', 'none', 'none', 'right', ' #21618c ', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(15, 'sitemapmain', 'sitemapmain', 'none', 'none', '50px 0px 0px 0px', '33.36%', '33.4%', '450px', '350px', '#1b4f72', 'left', '#fdfefe', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(16, 'sitemapsignup', 'sitemapsignup', 'none', 'none', '50px 0px 0px 0px', '33.33%', '33.3%', '450px', '350px', '#1b4f72', 'left', '#fdfefe', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(17, 'sitemapabout', 'sitemapabout', 'none', 'none', '50px 0px 0px 10%', '33.33%', '33.3%', '450px', '350px', '#1b4f72', 'left', '#fdfefe', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(18, 'copyrightbox', 'copyrightbox', 'none', 'none', '10px', '99.98%', '100%', 'none', 'none', '#1b4f72', 'left', '#fdfefe', 'sans-serif', '0.8em', 'border-box', '', '', '', ''),
(24, 'menubar3', 'menubar3', '2% 0% 1% 1%', 'none', '10px 10px 10px 10px', '15%', '15%', '120px', '120px', '#fdfefe', 'right', '#3498db', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(27, 'contentbox', 'contentbox', 'none', 'none', '5%', '100%', '100%', 'none', 'none', '#fdfefe', 'left', ' #2874a6 ', 'sans-serif', '2em', 'border-box', '', '', '', ''),
(28, 'contentbox1', 'contentbox1', '1%', 'none', '1% 1% 1% 1%', '31%', '33.3%', '560px', '560px', '#fdfefe', 'left', '#17202a', 'sans-serif', '1.1em', 'border-box', '', '', '', ''),
(29, 'imagebox', 'imagebox', 'none', 'none', '1% 5% 1% 5%', '50%', '50%', '550px', '550px', '#fdfefe', 'left', '#17202a', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(30, 'lowercontentbox', 'lowercontentbox', 'none', 'none', '3% 6% 0% 6%', '50%', '50%', '550px', '550px', '#fdfefe', 'left', '#17202a', 'sans-serif', '1.4em', 'border-box', '', '', '', ''),
(32, 'contactcontentbox1', 'contactcontentbox1', 'none', 'none', '5%', '100%', '100%', 'none', '750px', '#fdfefe', 'left', '#17202a', 'sans-serif', '1.2em', 'border-box', '', '', '', ''),
(34, 'servicelowerlbox', 'servicelowerlbox', 'none', 'none', '1% 5% 1% 5%', '50%', '50%', '550px', '550px', '#fdfefe', 'left', '#17202a', 'sans-serif', '1.1em', 'border-box', '', '', '', ''),
(35, 'logbox', 'logbox', 'none', 'none', '5% 5% 5% 5%', 'none', 'none', '700px', 'none', '#FEF9E7', 'center', '#1b4f72', 'sans-serif', '1.1em', 'border-box', '', '', '', ''),
(36, 'aboutcontentbox1', 'aboutcontentbox1', '1%', 'none', '2%', '31.3%', '31.3%', '350px', '750px', '#fdfefe', 'left', '#17202a', 'sans-serif', '1.2em', 'border-box', '', '', '', ''),
(37, 'productbox', 'productbox', '2%', 'none', 'none', '29%', '30%', '650px', '750px', ' #d6eaf8', 'left', '#17202a', 'sans-serif', '0.8em', 'border-box', '', '', '', ''),
(38, 'productbox1', 'productbox1', '2%', 'none', 'none', '29%', '30%', '650px', '750px', '#fdebd0', 'left', '#17202a', 'sans-serif', '0.8em', 'border-box', '', '', '', ''),
(42, 'backproduct', 'backproduct', 'none', 'none', '3% 5% 2% 5%', '100%', '100%', 'none', 'none', ' #fdfefe ', 'left', 'none', 'sans-serif', 'none', 'border-box', '', '', '', ''),
(43, 'contentboxcontact', 'contentboxcontact', '1.5% 0% 1% 6%', 'none', '1% 5% 2% 5%', '31%', '33.3%', '560px', '560px', '#fdfefe', 'left', ' #515a5a ', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(44, 'imagebox1', 'imagebox1', 'none', 'none', '1% 5% 1% 5%', '50%', '50%', '550px', '550px', '#FEF9E7', 'left', '#17202a', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(45, 'lowercontentbox1', 'lowercontentbox1', 'none', 'none', '3% 6% 0% 6%', '50%', '50%', '550px', '550px', '#FEF9E7', 'left', '#17202a', 'sans-serif', '1.4em', 'border-box', '', '', '', ''),
(46, 'servicelowerlbox1', 'servicelowerlbox1', 'none', 'none', '1% 5% 1% 5%', '50%', '50%', '550px', '550px', '#FEF9E7', 'left', '#17202a', 'sans-serif', '1.1em', 'border-box', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stylesmobile`
--

CREATE TABLE `stylesmobile` (
  `styleid` int(11) NOT NULL,
  `boxtype` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'textbox',
  `stylename` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'maintext',
  `margin` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `border` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `padding` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `width` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'fit-content',
  `max-width` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `height` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `max-height` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `background-color` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '#ebf5fb',
  `float1` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'left',
  `color` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '#273746',
  `font-family` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Monospace',
  `font-size` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '1.3em',
  `box-sizing` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'border-box',
  `extra2` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra3` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra4` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra5` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stylesmobile`
--

INSERT INTO `stylesmobile` (`styleid`, `boxtype`, `stylename`, `margin`, `border`, `padding`, `width`, `max-width`, `height`, `max-height`, `background-color`, `float1`, `color`, `font-family`, `font-size`, `box-sizing`, `extra2`, `extra3`, `extra4`, `extra5`) VALUES
(1, 'aboutpara', 'aboutpara', 'none', 'none', 'none', '100%', '60%', 'none', 'none', 'none', 'left', '#d35400', 'sans-serif', '1em', 'none', '', '', '', ''),
(2, 'aboutbanner', 'aboutbanner', 'none', 'none', 'none', '100%', '90%', 'none', 'none', 'none', 'left', 'none', 'none', 'none', 'none', '', '', '', ''),
(3, 'menubox', 'menubox', '10px', 'none', '10px', 'fit-content', 'none', 'none', 'none', 'none', 'left', '#fdfefe', 'sans-serif', '2em', 'border-box', '', '', '', ''),
(4, 'videobox', 'videobox', '15px', 'none', '15px', '550px', '550px', 'none', 'none', '#ebf5fb', 'left', '#5dade2', 'sans-serif', '1em', 'none', '', '', '', ''),
(5, 'logobox', 'logobox', '15px', 'none', 'none', '150px', '150px', 'none', 'none', '#ebf5fb', 'left', '#5dade2', 'sans-serif', '1em', 'none', '', '', '', ''),
(6, 'productbox', 'productbox', 'none', 'none', 'none', '100%', '70%', 'none', 'none', 'none', 'left', '#d35400', 'sans-serif', '0.7em', 'none', '', '', '', ''),
(7, 'topbanner', 'topbanner', 'none', 'none', 'none', '100%', '90%', 'none', 'none', 'none', 'left', 'none', 'none', 'none', 'none', '', '', '', ''),
(8, 'compname', 'compname', 'none', 'none', 'none', '100%', '100%', 'none', 'none', 'none', 'left', '#283747', 'sans-serif', '1em', 'none', '', '', '', ''),
(9, 'contactpara', 'contactpara', 'none', 'none', 'none', '100%', '70%', 'none', 'none', 'none', 'left', '#17202a', 'sans-serif', '1em', 'none', '', '', '', ''),
(10, 'productstitle', 'productstitle', 'none', 'none', 'none', '100%', '100%', 'none', 'none', 'none', 'left', '#283747', 'sans-serif', '1em', 'none', '', '', '', ''),
(11, 'sitemap', 'sitemap', 'none', 'none', 'none', '100%', '100%', 'none', 'none', 'none', 'left', '#fdfefe', 'Trebuchet MS', '1em', 'none', '', '', '', ''),
(12, 'copyrightbox', 'copyrightbox', 'none', 'none', '10px', '100%', '100%', 'none', 'none', 'none', 'left', '#fdfefe', 'Trebuchet MS', '1em', 'none', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `sid` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`sid`, `sname`, `email`) VALUES
(1, 'Yohan Pandigama', 'pandig911@gmail.com'),
(2, 'Yohan Pandigama', 'pandig911@gmail.com'),
(3, 'Your Name', 'Your E-mail'),
(4, 'Your Name', 'Your E-mail'),
(5, 'Yohan Pandigama', 'y@p.com'),
(6, 'Yohan Pandigama', 'ymig@mail.com'),
(7, 'John Jayapala', 'johnmail.com'),
(8, 'Arya', 'a@p.com'),
(9, 'Meth and Sukliri', 'mns@mail.com'),
(10, 'Saman De Silva', 'saman@mail.com'),
(11, 'Soma Silva', 'soma@mail.com'),
(12, '', ''),
(13, 'yasiru', 'yy@g.com'),
(14, 'yasiru', 'yasiru@dfjhn.com'),
(15, 'test name1', 'testemail1@test.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `poduct`
--
ALTER TABLE `poduct`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`styleid`);

--
-- Indexes for table `stylesmobile`
--
ALTER TABLE `stylesmobile`
  ADD PRIMARY KEY (`styleid`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poduct`
--
ALTER TABLE `poduct`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `styles`
--
ALTER TABLE `styles`
  MODIFY `styleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `stylesmobile`
--
ALTER TABLE `stylesmobile`
  MODIFY `styleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
