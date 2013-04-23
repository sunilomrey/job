<html xmlns="http://www.w3.org/1999/xhtml" lang="it"><!--/*
 * BESPOKE SERVICE - Atlan66 for Superglamourous
 * copyright 2012 Atlan66 - ALL RIGHTS RESERVED - info@atlan66.it
 * v. 1.0 - may 2012
 */--><head><script async="" src="http://jsonip.appspot.com?callback=jQuery1720595123089151457_1366172788813&amp;_=1366172789008"></script>
	<title>Joseph's Footwear LLC</title>
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
	<meta http-equiv="Content-Language" content="it">
	<meta name="Robots" content="All">
	<meta name="Description" content="SUPERGLAMOUROUS – online bespoke corner">
	<meta name="Keywords" content="superglamourous, handmade, superfine, babouche">
	<meta name="Owner" content="Superglamourous"> 
	<meta name="Author" content="Atlan66">  
	<meta name="Copyright" content="Atlan66">
	<link href="style1.css" rel="stylesheet" type="text/css">
  	<script src="jquery-1.7.2.min.js" type="text/javascript"></script>
  	<script src="bespoke.js" type="text/javascript"></script>
  	<link href="bespoke.css" type="text/css" rel="stylesheet">

 <meta charset="utf-8" />
 
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
<?php 				
$con=mysqli_connect("127.0.0.1","root","","bespoke");
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	$result = mysqli_query($con,"SELECT * FROM admin");
	$row = mysqli_fetch_array($result);
	
echo "<script>
var modSelezionato = 'Plain';
var costo_modSelezionato = ".$row['shoesprice'].";
var originalshoeprice = ".$row['shoesprice'].";
var tasselsprice= ".$row['tasselprice'].";
var monogramprice = ".$row['monogramprice'].";
var domesticshipping = ".$row['domesticshipping'].";
var internationalshipping = ".$row['internationalshipping'].";
var tagliaSelezionata;
var matSelezionato;
var colore_matSelezionato;
var trimming;
var tassels = 'no tassels';
var monogram_Data = 'no monograms';
var deluxe = parseInt(0);
var deluxeText = 'no deluxe pack';
var shoeHorn = parseInt(0);
var shoeHornText = 'no shoe trees';
var costoDef;
var email_buyer; 
</script>"; ?>
</head>

<body>
    <div><?php echo $row['shoesprice'], $row['tasselprice'], $row['monogramprice'], $row['domesticshipping'], $row['internationalshipping'];
	?> </div>
	<div id="work_table" class="resize">
	<script type="text/javascript"> // resize work_table for smaller screens
		$.getJSON("http://jsonip.appspot.com?callback=?",
		  function(data){
		   		
			var url = "http://www.geoplugin.net/json.gp?jsoncallback=?&ip="+data.ip;
			// IP Singapore 119.56.123.160

		   	$.getJSON(url, function(data){
		   		//ci andrebbe un if geoplugin_status Ã¨ ok, cioÃ¨ ==200, allora....
		     		
		   		var nazione = data['geoplugin_countryName'];
		   		var regione = data['geoplugin_region'];
		   		var citta = data['geoplugin_city'];
		      		
		   		//alert("Ti trovi in "+ nazione +" -> "+ regione +" -> "+ citta);	
		      		
		  		//altrimenti niente		    
		  });
		      	
		});
			
		var altezza = $(document).height();
		if (altezza < 710) {
		$("#work_table").addClass("resize");
		} else {
		}
	</script>
		<div class="header">
    	<div class="logo"><a href="#"><img src="images/logo.png" alt="Joseph's Footwear LLC" /></a></div>
        <div class="company_name"><a href="#"><img src="images/company_name.png" alt="Joseph's Footwear LLC" /></a></div>
        <div class="header-third">
        	<div class="cart">
            	<a href="#"><b>My Bag<span>(0)</span></b><img src="images/cart.png" alt="My Bag" /></a>
            </div>
            <div class="search">
            	<form>
                	<input type="text" size="25" name="search" id="search" /><input type="submit" value="Search" class="submitbtn" />
                </form>
            </div>
            <div class="signinlinks">
            	<a href="#">Sign Up</a> | <a href="#">Log In</a>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="navigation">
    	<ul>
        	<li><a href="#" class="active">Home</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Men's</a></li>
            <li><a href="#">Women</a></li>
            <li><a href="#">Bespoke</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
		<div class="spacer">&nbsp;</div>

		<div id="myspace">
		<div id="speaker" style="height: 2px; width: 2px; left: 450px; display: none;">&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br><h1>WELCOME TO THE ONLINE BESPOKE CORNER</h1><br>
			&nbsp;<br>
			IN THIS EXCLUSIVE SECTION OF THE WEBSITE YOU CAN CUSTOMIZE YOUR OWN PAIR OF FLAT SHOES<br>
			CHOOSING FROM A WIDE RANGE OF COLORS AND COMBINATIONS<br>
			&nbsp;<br>
			ONCE THE CUSTOMIZATION IS DONE,<br>
			YOU CAN COMPLETE YOUR ORDER AND DECIDE TO GET YOUR CREATION WORLDWIDE DELIVERED<br>
			WITHIN 15 BUSINESS DAYS IN OUR EXCLUSIVE DELUXE PACK<br>
			&nbsp;<br>
			INCLUDE CEDAR SHOE-TREES TO OFFER YOUR SHOES MORE COMFORT AND LONGER WEAR<br>
			&nbsp;<br>
			&nbsp;<br>
			<a href="index.html" target="_self" style="border:2px solid #9D815B;">&nbsp;BACK TO MAIN SITE&nbsp;</a><br>
			&nbsp;<br>
			&nbsp;<br>
			<a href="javascript:out_of_service()" style="background-color:#9D815B;border:2px solid #9D815B;color:#1B110C">&nbsp;OK, BRING ME THERE&nbsp;</a><br>
			&nbsp;<br>
			&nbsp;<br>
			OUR <a href="mailto:hello@superglamourous.it" style="text-decoration:underline">CUSTOMER SERVICE</a> IS ALWAYS AT YOUR DISPOSAL<br>
			&nbsp;<br>
			THANK YOU<!--br />
			&nbsp;<br />
			&nbsp;<br />
			<div><a href="#" target="_self" style="border:2px solid #9D815B;">&nbsp;WATCH THE DEMO VIDEO&nbsp;</a></div-->
		</div>
		<div id="video">
			<div style="position:absolute; right:50px; top:0"><a href="javascript:closeVideo()" style="color:#FF0000; font-size:56px;">x</a>&nbsp;</div>
			&nbsp;<br>
			<iframe width="683" height="512" src="http://www.youtube.com/embed/k8wy2T6SW7M?hd=1" frameborder="0" allowfullscreen=""></iframe>
		</div>
		<div id="measurement_chart">&nbsp;</div>
    	<div id="pallini">
    		<ul>
    			<!--li id="pallino1" class="attivo">&nbsp;</li-->
    			<li id="pallino2" class="attivo" style="background-image: url(http://www.superglamourous.it/imgs/bespoke/pallino_active.png); background-position: initial initial; background-repeat: initial initial;">&nbsp;</li>
    			<li id="pallino3">&nbsp;</li>
    			<li id="pallino4">&nbsp;</li>
    			<li id="pallino5">&nbsp;</li>
    			<li id="pallino6">&nbsp;</li>
    		</ul>
		</div>
		<!--div id="worldwide"></div-->
		
		<div id="restart"><a href="javascript:restart()" style="color:#000000;">START AGAIN</a></div><div id="launch_video"><a href="javascript:openVideo()" style="color:#000000;">DEMO VIDEO</a></div>
		<div id="your_shoes">YOUR SHOES:</div>
		<div id="your_shoes_right">&nbsp;</div>
		<div id="dest1">&nbsp;</div>
		<div id="dest1_costo" style="border:2px solid #9D815B;background-color:#000000;"><p><?php echo $row['shoesprice']; ?> &#36;</p></div>
		<div id="dest1_descrizione" style="color:#9D815B">PRICE</div>
		
		<div id="dest3">&nbsp;</div>
		<div id="dest4">&nbsp;</div>
		<div id="dest4_bis">&nbsp;</div>
		<div id="dest4_left">&nbsp;</div>
		<div id="dest4_right">&nbsp;</div>
		<div id="dest3_selezioni">&nbsp;</div>
		<div id="dest4_selezioni">&nbsp;</div>
		<div id="dest4_tassels">&nbsp;</div>
		<div id="dest2">&nbsp;</div>
		<div id="dest4_monogram">
		   <!--<select id="test">
		     <option>-Select-</option>
		   <option value="mong">Monogram</option>
		   <option value="emb">Emblem</option>
		   </select> -->

  <div id="mono">
			<form id="monogram" name="monogram">
				<input type="checkbox" name="check_monogram" value="checked"> MONOGRAMS<br>
			    &nbsp;<br>
				<input style="text-align:center; width:40px" type="text" name="lettera_sx" size="1" value=" " onfocus="this.value='';" onblur="gestioneTextarea(this);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="text-align:center; width:40px" type="text" name="lettera_dx" size="1" value=" " onfocus="this.value='';" onblur="gestioneTextarea(this);"><br>
				<!--fieldset>
			        <div style="position:absolute; left:50px; width:66px;">GOTHIC<br /><input type="radio" name="selected_font" value="GOTHIC"/></div>
			        <div style="position:absolute; right:10px; width:66px;">SERIF<br /><input type="radio" name="selected_font" value="SERIF"/></div>
			    </fieldset><br /-->
			    &nbsp;<br>
				<fieldset>
			        <div style="position:absolute; left:8px; width:34px; background:url('imgs/bespoke/angle_monograms.png') top left no-repeat #FFCB53;">&nbsp;<br><input type="radio" name="color_monogram" value="YELLOW"></div>
			        <div style="position:absolute; left:48px; width:34px; background:url('imgs/bespoke/angle_monograms.png') top left no-repeat #000000;">&nbsp;<br><input type="radio" name="color_monogram" value="BLACK"></div>
			        <div style="position:absolute; left:88px; width:34px; background:url('imgs/bespoke/angle_monograms.png') top left no-repeat #c30000;">&nbsp;<br><input type="radio" name="color_monogram" value="RED"></div>
			        <div style="position:absolute; left:128px; width:34px; background:url('imgs/bespoke/angle_monograms.png') top left no-repeat #000066;">&nbsp;<br><input type="radio" name="color_monogram" value="BLUE"></div><br>&nbsp;<br>&nbsp;<br>
			        <div style="position:absolute; left:48px; width:34px; background:url('imgs/bespoke/angle_monograms.png') top left no-repeat #005100;">&nbsp;<br><input type="radio" name="color_monogram" value="GREEN"></div>
			        <div style="position:absolute; left:88px; width:34px; background:url('imgs/bespoke/angle_monograms.png') top left no-repeat #72009c;">&nbsp;<br><input type="radio" name="color_monogram" value="PURPLE"></div>
			    </fieldset>
				&nbsp;<br>
				&nbsp;<br>
				&nbsp;<br>
				<input type="button" value="APPLY!" onclick="select04_monogram();"/> 
			</form></div> 
		 </div>	
			<div id="emblem1">	
	<div id="monogram" class="mono2" name="image">
          <div id="main">
		<input type="checkbox" name="check_monogram" value="checked"> Your Emblem<br>
		<form method="post" enctype="multipart/form-data"  action="upload.php">
    		<input type="file" name="images" id="images" multiple />
    		<button type="submit" id="btn">Upload Files!</button>
    	</form>

  	    <div id="response"></div>
	    	<ul id="image-list">
		    </ul>
	    </div>
	
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
         <script src="upload.js"></script>

                </form>
				
	</div>
				</div>
		
		<div id="dest4_monogram_description">&nbsp;</div>
		<div id="bespoke_policy">
			<h1>&nbsp;<br>PRIVACY POLICY</h1><br>
			<p>SUPERGLAMOUROUS UNDERSTANDS THAT MAINTAINING THE CONFIDENTIAL INTEGRITY AND SECURITY OF ITS CUSTOMERS PERSONAL INFORMATIONS IS IMPORTANT TO ITS CUSTOMERS.<br>&nbsp;</p>
			<p>IN ORDER TO WORK ACCURATELY AND EFFICIENTLY, SUPERGLAMOUROUS MAY COLLECT AND MAINTAIN PERSONAL INFORMATION ABOUT CUSTOMERS. SUPERGLAMOUROUS COLLECTS PERSONAL INFORMATION IN CIRCUMSTANCES WHEN YOU KNOWINGLY PROVIDE SUCH INFORMATION, SUCH AS THE INFORMATION YOU ARE REQUESTED TO PROVIDE IN THIS RETAIL ORDER FORM.<br>&nbsp;</p>
			<p>THE DATA CONTROLLER IS GLAMOURAMA GOODS&amp;GARMENTS S.N.C., WITH REGISTERED OFFICE IN VIA G.B. CASELLA, 33, 20156, MILAN, ITALY. DATA IS PROCESSED BY GLAMOURAMA GOODS&amp;GARMENTS S.N.C. FURTHERMORE, AND SUBJECT TO YOUR PRIOR APPROVAL.<br>&nbsp;</p>
			<p>YOUR PERSONAL DATA MAY BE USED FOR SENDING YOU INFORMATION, ADVERTISING AND PROMOTIONAL MATERIALS, VIA MAIL OR VIA EMAIL, ABOUT SUPERGLAMOUROUS PRODUCTS, INITIATIVES AND EVENTS.<br>&nbsp;</p>
			<p>SUPERGLAMOUROUS MAY DISCLOSE PERSONAL INFORMATION TO AFFILIATES AND AGENTS.<br>&nbsp;</p>
			<p>YOU MAY AT ANY MOMENT EXERCISE YOUR RIGHTS PURSUANT TO APPLICABLE ITALIAN LAWS ON PERSONAL DATA PROTECTION (ART.7 OF THE ITALIAN LEGISLATIVE DECREE 196 OF 06/30/2003) INCLUDING THE RIGHT TO OBTAIN CONFIRMATION ABOUT THE EXISTENCE OF YOUR PERSONAL DATA AT GLAMOURAMA GOODS&amp;GARMENTS S.N.C., AND TO KNOW THEIR SOURCE AND TO OBTAIN THEIR INTEGRATION, UPDATING, RECTIFICATION, CANCELLATION, ANONYMIZATION, BLOCKING OR TO OBJECT TO THEIR PROCESSING ON LEGITIMATE GROUNDS, AS WELL AS OBTAIN A LIST OF DATA PROCESSORS AND OF THIRD PARTIES TO WHICH THE DATA IS DISCLOSED, CONTACTING GLAMOURAMA GOODS&amp;GARMENTS S.N.C. LEGAL DEPARTMENT VIA FAX NO. +39 0236523790.</p>
		</div>
		
		<div id="contenitor">
	    	<a href="#"><div id="avanti">&nbsp;</div></a>
	    	<div id="avanti_ghost">&nbsp;</div>
	    	<ul>
	    		<!--li id="step1">
	    			<div><h1>&nbsp;</h1>
	    				<div id="fondo1" class="fondo">
	    					<p>START BY SELECTING THE TYPE OF SHOES YOU WANT TO CUSTOMIZE</p>
	    					&nbsp;<br />
	    					<a href="javascript:select01('uomo','180')"><img src="imgs/bespoke/base_uomo.jpg" alt="base uomo" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a  href="javascript:select01('donna','190')"><img src="imgs/bespoke/base_donna.jpg" alt="base donna" /></a>
						</div>
	    			</div>
	    		</li-->
	    		
	    		
	    		<li id="step4">
	    			<div><h1>&nbsp;</h1>
	    				<div id="fondo2" class="fondo">
	    					<div id="upper_size" style="position:absolute; top:0; left:0; width:191px; height:126px; border-right:2px solid #9D815B; padding-right:9px; font-size:12px;">&nbsp;<br>&nbsp;<br><h1>SIZE</h1>IN THIS FIRST CUSTOMIZATION STEP YOU CAN CHOOSE THE SHOE-SIZE THAT BEST FITS YOU<!--CHOOSE THE SHOE SIZE THAT BEST FITS YOU--></div>
	    					
	    					<div id="size_numbers" style="position:absolute; top:0; left:209px; width:649px; height:126px; border-right:2px solid #9D815B;">
	    						&nbsp;<br>
	    						&nbsp;<br>
	    						&nbsp;<br>
	    						<a href="javascript:select02('34')">34</a>&nbsp;&nbsp;&nbsp;<a href="javascript:select02('35')">35</a>&nbsp;&nbsp;&nbsp;<a href="javascript:select02('36')">36</a>&nbsp;&nbsp;&nbsp;<a href="javascript:select02('37')">37</a>&nbsp;&nbsp;&nbsp;<a href="javascript:select02('38')">38</a>&nbsp;&nbsp;&nbsp;<a href="javascript:select02('39')">39</a>&nbsp;&nbsp;&nbsp;<a href="javascript:select02('40')">40</a>&nbsp;&nbsp;&nbsp;<a href="javascript:select02('41')">41</a>&nbsp;&nbsp;&nbsp;<a href="javascript:select02('42')">42</a>&nbsp;&nbsp;&nbsp;<a href="javascript:select02('43')">43</a>&nbsp;&nbsp;&nbsp;<a href="javascript:select02('44')">44</a>&nbsp;&nbsp;&nbsp;<a href="javascript:select02('45')">45</a>&nbsp;&nbsp;&nbsp;<a href="javascript:select02('46')">46</a><br>
	    						&nbsp;<br>
	    						<!--a href="javascript:measurement_chart()" style="border:0; font-size:11px;background::none">IN ORDER TO DECIDE WHICH SIZE BEST FITS YOU, CHECK OUT OUR OFFICIAL SIZING CHART</a-->
	    					</div>
						</div>
	    			</div>
	    		</li>
	    		
	    		
	    		<li id="step2">
	    			<div><h1>&nbsp;</h1>
	    				<div id="fondo3" class="fondo" style="text-align: left;">
	    					<div id="upper_material" style="position:absolute; top:0; left:0; width:191px; height:126px; border-right:2px solid #9D815B; padding-right:9px; font-size:12px; text-align:center">&nbsp;<br><h1>UPPER</h1>
	    						HERE YOU CAN CHOOSE THE MATERIAL FOR YOUR FLAT'S UPPER<br>
	    						&nbsp;<br>
	    						<a href="javascript:select03('SUEDE','0')" style="color:#000000;"><div style="width:100px; height:24px; padding-top: 6px; background-color:#9D815B;	-webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; margin-top:6px;">SUEDE</div></a>
	    						<!--a href="javascript:select03('PONY HAIR','1')"><img src="imgs/bespoke/PONYHAIR.png" alt="pony hair" /></a> <a href="javascript:select03('COMBED COTTON VELVET','2')"><img src="imgs/bespoke/cocco.png" alt="cocco" /></a><br />
	    						<a href="javascript:select03('TARTAN','3')"><img src="imgs/bespoke/cavallo.png" alt="cavallo" /></a> <a href="javascript:select03('BROCADE','4')"><img src="imgs/bespoke/BROCADE.png" alt="brocade" /></a-->
	    					</div>
	    					
	    					<div id="material_color" style="position:absolute; top:0; left:209px; width:649px; height:126px; border-right:2px solid #9D815B;">&nbsp;</div>	    					
						</div>
	    			</div>
	    		</li>
	    		
	    		
	    		<li id="step3">
	    			<div><h1>&nbsp;</h1>
	    				<div id="fondo4" class="fondo">
	    					
	    					<div id="upper_trimsTassels" style="position:absolute; top:0; left:0; width:191px; height:126px; border-right:2px solid #9D815B; padding-right:9px;text-align:center">
	    						<div style="position:absolute; top:0; left:0; height:61px; width:193px; border-bottom:2px solid #9D815B">TRIMMING<div style="width:100px; height:24px; padding-top: 6px; background-color:#9D815B;	-webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; margin-top:2px; color:#000000">NAPPA</div></div>
	    						<div style="position:absolute; top:65px; left:0; height:61px; width:193px;">TASSELS<br><a href="javascript:select04_tassels('no tassels')" style=" color:#000000"><div style="width:90px; float:left; height:30px; padding-top: 10px; background-color:#9D815B;	-webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; margin-top:2px; font-size:12px;">MONOGRAM</div></a><a href="javascript:select040_emblem" style=" color:#000000"><div style="width:90px; float:right; height:30px; padding-top: 10px; background-color:#9D815B;	-webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; margin-top:2px; font-size:12px;" id="emb">EMBLEM</div></a></div>
	    					</div>
	    					
	    					<div id="trimsTassels_color" style="position:absolute; top:0; left:209px; width:649px; height:126px; border-right:2px solid #9D815B; text-align:left">
	    						<div id="profili" style="position:absolute; top:0; left:0; height:61px; width:640px; border-bottom:2px solid #9D815B">
	    							 <a href="javascript:select04_trimming('black')"><img src="imgs/bespoke/basi/40x50_black.png" alt="black"></a><a href="javascript:select04_trimming('hotbrown')"><img src="imgs/bespoke/basi/40x50_hotbrown.png" alt="hotbrown"></a><a href="javascript:select04_trimming('urbanbrown')"><img src="imgs/bespoke/basi/40x50_urbanbrown.png" alt="urbanbrown"></a><a href="javascript:select04_trimming('smoke')"><img src="imgs/bespoke/basi/40x50_smoke.png" alt="smoke"></a><a href="javascript:select04_trimming('vanilla')"><img src="imgs/bespoke/basi/40x50_vanilla.png" alt="vanilla"></a><a href="javascript:select04_trimming('grape')"><img src="imgs/bespoke/basi/40x50_grape.png" alt="grape"></a><a href="javascript:select04_trimming('roosterred')"><img src="imgs/bespoke/basi/40x50_roosterred.png" alt="roosterred"></a><a href="javascript:select04_trimming('poppy')"><img src="imgs/bespoke/basi/40x50_poppy.png" alt="poppy"></a><a href="javascript:select04_trimming('deeppurple')"><img src="imgs/bespoke/basi/40x50_deeppurple.png" alt="deeppurple"></a><a href="javascript:select04_trimming('shockingpink')"><img src="imgs/bespoke/basi/40x50_shockingpink.png" alt="shockingpink"></a><a href="javascript:select04_trimming('royalblue')"><img src="imgs/bespoke/basi/40x50_royalblue.png" alt="royalblue"></a><a href="javascript:select04_trimming('riviera')"><img src="imgs/bespoke/basi/40x50_riviera.png" alt="riviera"></a><a href="javascript:select04_trimming('cactus')"><img src="imgs/bespoke/basi/40x50_cactus.png" alt="cactus"></a><a href="javascript:select04_trimming('daisy')"><img src="imgs/bespoke/basi/40x50_daisy.png" alt="daisy"></a>
	    						</div>
	    						<div id="nappine" style="position:absolute; top:76px; left:0; height:50px; width:640px; text-align:left">
	    							<a href="javascript:select04_tassels('black')"><img src="imgs/bespoke/basi/40x50_black.png" alt="black"></a><a href="javascript:select04_tassels('hotbrown')"><img src="imgs/bespoke/basi/40x50_hotbrown.png" alt="hotbrown"></a><a href="javascript:select04_tassels('urbanbrown')"><img src="imgs/bespoke/basi/40x50_urbanbrown.png" alt="urbanbrown"></a><a href="javascript:select04_tassels('smoke')"><img src="imgs/bespoke/basi/40x50_smoke.png" alt="smoke"></a><a href="javascript:select04_tassels('vanilla')"><img src="imgs/bespoke/basi/40x50_vanilla.png" alt="vanilla"></a><a href="javascript:select04_tassels('grape')"><img src="imgs/bespoke/basi/40x50_grape.png" alt="grape"></a><a href="javascript:select04_tassels('roosterred')"><img src="imgs/bespoke/basi/40x50_roosterred.png" alt="roosterred"></a><a href="javascript:select04_tassels('poppy')"><img src="imgs/bespoke/basi/40x50_poppy.png" alt="poppy"></a><a href="javascript:select04_tassels('deeppurple')"><img src="imgs/bespoke/basi/40x50_deeppurple.png" alt="deeppurple"></a><a href="javascript:select04_tassels('shockingpink')"><img src="imgs/bespoke/basi/40x50_shockingpink.png" alt="shockingpink"></a><a href="javascript:select04_tassels('royalblue')"><img src="imgs/bespoke/basi/40x50_royalblue.png" alt="royalblue"></a><a href="javascript:select04_tassels('riviera')"><img src="imgs/bespoke/basi/40x50_riviera.png" alt="riviera"></a><a href="javascript:select04_tassels('cactus')"><img src="imgs/bespoke/basi/40x50_cactus.png" alt="cactus"></a><a href="javascript:select04_tassels('daisy')"><img src="imgs/bespoke/basi/40x50_daisy.png" alt="daisy"></a><a href="javascript:select04_tassels('no tassels')"><img src="imgs/bespoke/basi/40x50_noTassels.png" alt="no Tassels"></a>
	    						</div>
	    					</div>
	    					
						</div>
	    			</div>
	    		</li>
	    		
				
	    		<li id="step5">
	    			<div><h1>&nbsp;</h1>
	    				<div id="fondo5" class="fondo">
	    					<div id="upper_forma" style="position:absolute; top:10px; left:0px; width:190px; height:100px; border-right:2px solid #9D815B; padding:10px, 0, 10px,0;text-align:center"><h1>Shipping </h1>
	    						
	    						<form>
	    							<fieldset style="border:0;">
								        <div style="position:absolute; left:10px; width:66px; font-size:11px;">Domestic Shipping &#8211; 20&#36;<input onclick="javascript:shoeHornYes()" type="radio" name="selected_deluxe" value="YES"></div>
								        <div style="position:absolute; right:10px; width:66px; font-size:11px;">International Shipping &#8211; 40&#36;<input onclick="javascript:shoeHornNo()" type="radio" name="selected_deluxe" value="NO"></div>
								    </fieldset>
	    							<!--fieldset style="border:0;">
								        <div style="position:absolute; left:10px; width:66px; font-size:11px;">YES<input onclick="javascript:shoeHornYes" type="radio" name="selected_font" value="SERIF"/></div>
								        <div style="position:absolute; right:10px; width:66px; font-size:11px;">NO <input onclick="javascript:shoeHornNo" type="radio" name="selected_font" value="GOTHIC"/></div>
								    </fieldset-->
	    						</form>
	    					</div>
	    					<div id="upper_deluxe" style="position:absolute; top:10px; left:210px; width:180px; height:90px; border-right:2px solid #9D815B; padding-top:10px;text-align:center"><h1>Include Greeting Card ?</h1>
	    						
	    						<form>
	    							<fieldset style="border:0;">
								        <div style="position:absolute; top:50px; left:10px; width:66px; font-size:11px;">YES<input onclick="javascript:deluxeYes()" type="radio" name="selected_deluxe" value="YES"></div>
								        <div style="position:absolute; top:50px; right:10px; width:66px; font-size:11px;">NO <input onclick="javascript:deluxeNo()" type="radio" name="selected_deluxe" value="NO"></div>
								    </fieldset>
	    						</form>
							
	    					</div>
	    					
	    					<div id="deluxe_options" style="position:absolute; top:0; left:405px; width:440px; height:126px; border-right:2px solid #9D815B;">&nbsp;</div>
						</div>
	    			</div>
	    		</li>
	    		
	    		
	    		<li id="step6">
	    			<div><h1>&nbsp;</h1>
	    				<div id="fondo6" class="fondo" style="text-align:left">&nbsp;</div>
	    			</div>
	    		</li>
	    	</ul>
	    	<!--div id="item1">ITEM1</div-->
    	</div>
    </div>

		<div class="spacer">&nbsp;</div>
<div class="footer">
    	<div class="footer_left">
        	<a href="mailto:info@josephsfootwear.com">info@josephsfootwear.com</a>
        </div>
        <div class="footer_center">
        	<div class="footernav">
            	<a href="#">Home</a>
                <a href="#">My Account</a>
                <a href="#">Shop</a>
                <a href="#">Men's</a>
                <a href="#">Women</a>
                <a href="#">Contact</a>
            </div>
            <div class="footerlinks">
            	<a href="#">Terms &amp; Conditions </a>
                <a href="#">Privacy Policy</a>
                <a href="#">Shipping Policy </a>
                <a href="#">Disclaimer</a>
            </div>
            <div class="copyright">
            	Copyright © 2013. All rights reserved	
            </div>
        </div>
        <div class="footer_right">
        	<div class="social_links">
            	<a href="#"><img src="images/fb.png" alt="Facebook" /></a>
                <a href="#"><img src="images/twitter.png" alt="Twitter" /></a>
            </div>
            <div class="powerdby">
            	Powered by <span>IE Guild</span>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
	</div>
 
</body></html>