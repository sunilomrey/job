/*
 * BESPOKE SERVICE - Atlan66 for Superglamourous
 * copyright 2012 Atlan66 - ALL RIGHTS RESERVED - info@atlan66.it
 * v. 1.0 - may 2012
 */

$(document).ready(function() {

	var contatore = 2;
	$('#pallino'+contatore).css('background','url("imgs/bespoke/pallino_active.png")');
	$('#avanti').click(function() {
		//alert("destra");
		$("#avanti").css('z-index','0'); //porto dietro le freccine attive
		$('#step'+contatore).animate({ left: '-=901' }, 1000 ); //spedisco la vecchia slide
		$('#pallino'+contatore)/*.removeClass('attivo').css('background','url("imgs/bespoke/pallino_unactive.png")');//tolgo pallino attivo*/
		contatore+=1;
		$('#step'+contatore).delay(500).animate({ left: '-=901' }, 1000 );//inserisco la nuova slide
		$('#pallino'+contatore).addClass('attivo').css('background','url("imgs/bespoke/pallino_active.png")');//inserisco nuovo pallino attivo
		return false;
	});
	//faccio apparire la finestra di dialogo
	
	$("#bespoke_policy").click(
		function() {
			$("#bespoke_policy").fadeOut("slow");
		}
	);
	$("#measurement_chart").click(
		function() {
			$("#measurement_chart").fadeOut("slow");
		}
	);

  
});

function openVideo() {
	$("#video").fadeIn("slow");
};
function closeVideo() {
	$("#video").fadeOut("slow");
};



//qui facciamo sparire lo speaker. 
function out_of_service() {
	$("#speaker").animate({
	    height: '2',
	    width: '2',
	    left: '+=390',
	    top: 'toggle'
	  }, 500, function() {
	    // Animation complete.
	});
};

function restart() {
	location.reload();
};

function measurement_chart() {
	$("#measurement_chart").fadeIn("slow;");
};


//ora modifichiamo lo sfondo di dest01 alla selezione della scarpa
/*function select01(modello, costo) {
	modSelezionato = modello;
	costo_modSelezionato = costo;
	//alert('costo selezionato '+costo_modSelezionato);
	$("#dest1").fadeOut(0).css('background','url("imgs/bespoke/base_'+modello+'_big.png")').fadeIn(500);
	$("#dest1_costo").replaceWith('<div id="dest1_costo" style="border:2px solid #9D815B;background-color:#000000;"><p>'+costo+' &#36;</p></div>');
	$("#avanti").css('z-index','10');
};*/


function select02(taglia) {
	//RECUPERO IL VALORE DELLA TAGLIA SELEZIONATA, AGGIORNO IL RESOCONTO A SINISTRA, RICHIAMO IL COSTO E PROCEDO
	tagliaSelezionata = taglia;
	$("#dest2").replaceWith('<div id="dest2" style="border:2px solid #9D815B;"><p>'+taglia+'</p></div><div id="dest2_descrizione" style="color:#9D815B">SIZE</div>');
    
	$("#avanti").css('z-index','10');  
};

var colori = new Array(); //ARRAY DELLE CARTELLE COLORE
colori[0] = '<a href="javascript:select03_bis(\'black\')"><img src="imgs/bespoke/basi/40x126_black.png" alt="black" /><a><a href="javascript:select03_bis(\'trunkbrown\')"><img src="imgs/bespoke/basi/40x126_trunkbrown.png" alt="trunk brown" /><a><a href="javascript:select03_bis(\'cinnamon\')"><img src="imgs/bespoke/basi/40x126_cinnamon.png" alt="cinnamon" /><a><a href="javascript:select03_bis(\'cloud\')"><img src="imgs/bespoke/basi/40x126_cloud.png" alt="cloud" /><a><a href="javascript:select03_bis(\'sable\')"><img src="imgs/bespoke/basi/40x126_sable.png" alt="sable" /><a><a href="javascript:select03_bis(\'burgundy\')"><img src="imgs/bespoke/basi/40x126_burgundy.png" alt="burgundy" /><a><a href="javascript:select03_bis(\'ultrared\')"><img src="imgs/bespoke/basi/40x126_ultrared.png" alt="ultrared" /><a><a href="javascript:select03_bis(\'clementine\')"><img src="imgs/bespoke/basi/40x126_clementine.png" alt="clementine" /><a><a href="javascript:select03_bis(\'infraviolet\')"><img src="imgs/bespoke/basi/40x126_infraviolet.png" alt="infraviolet" /><a><a href="javascript:select03_bis(\'cosmopink\')"><img src="imgs/bespoke/basi/40x126_cosmopink.png" alt="cosmopink" /><a><a href="javascript:select03_bis(\'avio\')"><img src="imgs/bespoke/basi/40x126_avio.png" alt="avio" /><a><a href="javascript:select03_bis(\'regatablue\')"><img src="imgs/bespoke/basi/40x126_regatablue.png" alt="regatablue" /><a><a href="javascript:select03_bis(\'underwood\')"><img src="imgs/bespoke/basi/40x126_underwood.png" alt="underwood" /><a><a href="javascript:select03_bis(\'jade\')"><img src="imgs/bespoke/basi/40x126_jade.png" alt="jade" /><a><a href="javascript:select03_bis(\'daisy\')"><img src="imgs/bespoke/basi/40x126_daisy.png" alt="daisy" /><a><a href="javascript:select03_bis(\'nude\')"><img src="imgs/bespoke/basi/40x126_nude.png" alt="nude" /><a>';
colori[1] = 'COMING SOON';
colori[2] = 'COMING SOON';
colori[3] = 'COMING SOON';
colori[4] = 'COMING SOON';
function select03(materiale, number) {
	//RECUPERO IL VALORE DEL MATERIALE - per ora uno solo -, MODIFICO IL BACKGROUND E INSERISCO LA CARTELLA COLORI DEL MATERIALE SELEZIONATO
	matSelezionato = materiale;
	//$("#dest3").fadeOut(100).css('background','#'+materiale+'').fadeIn(100); //DA REINSERIRE CON BACKGROUND IMMAGINE CORRETTO
	$("#dest3_selezioni").replaceWith('<div id="dest3_selezioni" style="text-align:left"><p>&nbsp;</p><div id="dest3_colore"></div><div id="dest3_materiale" style="color:#9D815B">'+matSelezionato+'</div></div>');
	$("#material_color").html('<!--MATERIAL\'S COLOR<br />-->'+ colori[number]);
	$("#dest1_costo").replaceWith('<div id="dest1_costo" style="border:2px solid #9D815B;background-color:#000000;"><p>'+costo_modSelezionato+' &#36;</p></div><div id="dest1_descrizione" style="color:#9D815B">PRICE</div>');
	$("#your_shoes_right").fadeIn(10); 
	$("#your_shoes").fadeIn(10);
	$("#avanti").css('z-index','10');                            
	
};


function select03_bis(colore) {
	//RECUPERO IL VALORE DEL COLORE E PROCEDO
	colore_matSelezionato = colore;
	$("#dest1").fadeOut(100).css('background','url(imgs/bespoke/'+matSelezionato+'/'+colore_matSelezionato+'.png) repeat scroll 0 0 transparent').fadeIn(100); //DA REINSERIRE CON BACKGROUND IMMAGINE CORRETTO
	$("#dest3_colore").replaceWith('<div id="dest3_colore" style="border:2px solid #9D815B;background-color:#000000;"><img src="imgs/bespoke/basi/40x126_'+colore_matSelezionato+'.png" alt="'+colore_matSelezionato+'" style="margin-left:-5px; margin-top:-5px;" /></div>');
     
	$("#avanti").css('z-index','10');
};


function select04_trimming(trimColore) {
	//RECUPERO IL VALORE DEL TRIMMING, CAMBIO IL RESOCONTO A SINISTRA E PROCEDO
	trimming = trimColore;
	$("#dest4").fadeOut(100).css('background','url(imgs/bespoke/TRIMMING/'+trimming+'.png) repeat scroll 0 0 transparent').fadeIn(100);
	$("#dest4_selezioni").replaceWith('<div id="dest4_selezioni" style="text-align:right"><div id="dest4_trimmings" style="color:#9D815B">TRIMMING</div><div id="dest4_trimmings_color" style="border:2px solid #9D815B;background-color:#000000;"><img src="imgs/bespoke/basi/40x50_'+trimming+'.png" alt='+trimming+'" style="margin-left:-5px; margin-top:-5px;" /></div></div>');
	$("#avanti").css('z-index','10');
};


function select04_tassels(tassellsColore) {
	tassels = tassellsColore;
	//SE IL TASSEL NON VIENE SELEZIONATO, MOSTRO IL PANNELLO "MONOGRAM" E MODIFICO RESOCONTO A SINISTRA E COSTO
	if (tassels == "no tassels") {
		$("#dest4_bis").fadeOut(100).css('background','transparent').fadeIn(100);
		$("#dest4_monogram").fadeIn("slow");
		$("#dest4_tassels").replaceWith('<div id="dest4_tassels" style="text-align:right"><div id="dest4_tassels_left" style="color:#9D815B">TASSELS</div><div id="dest4_tassels_right" style="border:2px solid #9D815B;background-color:#000000;"><img src="imgs/bespoke/'+tassels+'.jpg" alt='+tassels+'" /></div></div>');
		costo_modSelezionato = costo_modSelezionato;
		$("#dest1_costo").replaceWith('<div id="dest1_costo" style="border:2px solid #9D815B;background-color:#000000;"><p>'+costo_modSelezionato+' &#36;</p></div>');
	} else { 
	    costo_modSelezionato = originalshoeprice;
		//ALTRIMENTI NASCONDO IL PANNELLO "MONOGRAM" E CANCELLO I MONOGRAMMI, APPLICO IL BACKGROUND CON IL TASSELLO SELEZIONATO E MODIFICO RESOCONTO A SINISTRA E COSTO
		$("#dest4_monogram").fadeOut("slow");
		$("#dest4_monogram_description").fadeOut("slow");
		$("#dest4_left").fadeOut("slow").css('background','transparent').fadeIn(100);
		$("#dest4_right").fadeOut("slow").css('background','transparent').fadeIn(100);
		$("#dest4_monogram_description").replaceWith('<div id="dest4_monogram_description">&nbsp;</div>');
		$("#dest4_bis").fadeOut(100).css('background','url(imgs/bespoke/TASSELS/'+tassels+'.png) repeat scroll 0 0 transparent').fadeIn(100);
		document.monogram.lettera_sx.value = "";
		document.monogram.lettera_dx.value = "";
		monogram_Data = "no monograms";
		$("#dest4_tassels").replaceWith('<div id="dest4_tassels" style="text-align:right"><div id="dest4_tassels_left" style="color:#9D815B">TASSELS</div><div id="dest4_tassels_right" style="border:2px solid #9D815B;background-color:#000000;"><img src="imgs/bespoke/basi/40x50_'+tassels+'.png" alt='+tassels+'" style="margin-left:-5px; margin-top:-5px;" /></div></div>');
		costo_modSelezionato = costo_modSelezionato + tasselsprice;
		$("#dest1_costo").replaceWith('<div id="dest1_costo" style="border:2px solid #9D815B;background-color:#000000;"><p>'+costo_modSelezionato+' &#36;</p></div>');
	}
};


function select04_monogram() {
	//AZZERO LA VARIABILE TASSELS
	tassels = "no tassels";
	//SE CHECKBOX Ãˆ CHECKED, RECUPERO I CAMPI, SALVO I DATI, LI ESPONGO A SINISTRA E CAMBIO BACKGROUND E COSTO
	if (document.monogram.check_monogram.checked) { 
		//RECUPERO I VALORI DEI VARI CAMPI
		var lettera_dx = document.monogram.lettera_sx.value.toUpperCase();
		var lettera_sx = document.monogram.lettera_dx.value.toUpperCase();
		var selected_font = "GOTHIC";
		var color_monogram;
		
		/*var rf = document.monogram.selected_font;
		  for(var i=0; i<rf.length; i++) {
		    if(rf[i].checked) {
		      selected_font = rf[i].value;
		      break;
		  }
		}*/
		
		var rr = document.monogram.color_monogram;
		  for(var i=0; i<rr.length; i++) {
		    if(rr[i].checked) {
		      color_monogram = rr[i].value;
		      break;
		  }
		}
		
		//LI CONTROLLO: SE MANCA ANCHE UN SOLO CAMPO LANCIO ALERT
		if (lettera_sx == "" || lettera_dx == "" || color_monogram == undefined || selected_font == undefined) {
			alert("Please, all monogram's fields are required")
		} else {
		    costo_modSelezionato = originalshoeprice;
			//ALTRIMENTI MODIFICO LA VARIABILE monogram_Data
			monogram_Data = "left: '"+lettera_dx+"'; right: '"+lettera_sx+"'; font: '"+selected_font+"'; color: '"+color_monogram+"'.";
			//CREO IL RESOCONTO A SINISTRA
			$("#dest4_monogram_description").replaceWith('<div id="dest4_monogram_description" style="text-align:right"><div id="dest4_monogram_description_left" style="color:#9D815B"> MONOGRAMS: '+lettera_dx+'&nbsp;&nbsp;'+lettera_sx+'&nbsp;&nbsp;'+selected_font+'</div><div id="dest4_monogram_description_right" style="border:2px solid #9D815B;background-color:#000000;"><img src="imgs/bespoke/basi/'+color_monogram+'.jpg" alt='+color_monogram+'" /></div></div>');
			
			//MODIFICO IL BACKGROUND
			$("#dest4_left").fadeOut(100).css('background','url(imgs/bespoke/monograms/'+selected_font+'/'+color_monogram+'/'+lettera_sx+'.png) left no-repeat').fadeIn(100);
			$("#dest4_right").fadeOut(100).css('background','url(imgs/bespoke/monograms/'+selected_font+'/'+color_monogram+'/'+lettera_dx+'.png) left no-repeat').fadeIn(100);
			
			//MODIFICO IL COSTO GLOBALE
			costo_modSelezionato += monogramprice;
			$("#dest1_costo").replaceWith('<div id="dest1_costo" style="border:2px solid #9D815B;background-color:#000000;"><p>'+costo_modSelezionato+' &#36;</p></div>');
		}; //chiusura if annidato
					
    } else { 
    	//ALTRIMENTI AZZERO LA VARIABILE monomgram_Data
    	monogram_Data = "no monograms";
    	//NASCONDO IL RESOCONTO A SINISTRA
    	$("#dest4_monogram_description").replaceWith('<div id="dest4_monogram_description">&nbsp;</div>');
    	
    	//MODIFICO IL BACKGROUND
		$("#dest4_left").fadeOut("slow").css('background','transparent').fadeIn(100);
		$("#dest4_right").fadeOut("slow").css('background','transparent').fadeIn(100);
    	
    	//MODIFICO IL COSTO GLOBALE
		costo_modSelezionato = costo_modSelezionato;
		$("#dest1_costo").replaceWith('<div id="dest1_costo" style="border:2px solid #9D815B;background-color:#000000;"><p>'+costo_modSelezionato+' &#36;</p></div>');
    };//chiusura primo if
};



function gestioneTextarea(campo) {
	//CONTROLLO INSERIMENTO MONOGRAMMI COME 1 SOLO CARATTERE ALFABETICO
	var regTest = /^$|^[a-zA-Z]/;
    if (campo.value.length>1){
        alert("Enter a maximum of one character");
        campo.value=campo.value.substring(0, 1);
        return false;
    } else if (!regTest.test(campo.value)) {
    	alert("Only alphabets letters accepted");
    	campo.value="";
    	return false;
    }
};




function openShoeHorn() {
	$("#shoehorn_image").toggle(
      function () {
        $(this).animate({ width:'627', height:'286', left: '+=136', top: '-=350' }, 500 );
      },
      function () {
        $(this).animate({ width:'191', height:'83', left: '0', top: '0' }, 500 );
      })
};

function shoeHornYes() {
	shoeHornText = "cedar shoe trees";
	shoeHorn = parseInt(domesticshipping);
	costoDef = costo_modSelezionato + deluxe + shoeHorn;
	$("#dest1_costo").fadeOut().replaceWith('<div id="dest1_costo" style="border:2px solid #9D815B;background-color:#000000;"><p>'+costoDef+' &#36;</p></div>').fadeIn();
};

function shoeHornNo() {
	shoeHornText = "no shoe trees";
	shoeHorn = parseInt(internationalshipping);
	costoDef = costo_modSelezionato + deluxe + shoeHorn;
	$("#dest1_costo").fadeOut().replaceWith('<div id="dest1_costo" style="border:2px solid #9D815B;background-color:#000000;"><p>'+costoDef+' &#36;</p></div>').fadeIn();	
};




function openDeluxe() {
	$("#gift_image").toggle(
      function () {
        $(this).animate({ width:'627', height:'286', left: '-=70', top: '-=350' }, 500 );
      },
      function () {
        $(this).animate({ width:'191', height:'83', left: '0', top: '0' }, 500 );
      })
};

function deluxeNo() {
	//MODIFICO IL COSTO COMPLESSIVO, ELIMINO L'EVENTUALE TEXTAREA CREATA, CREO IL RESOCONTO E PROCEDO
	costo_modSelezionato = parseInt(costo_modSelezionato);
	deluxe = parseInt(0);
	deluxeText = "no deluxe pack";
	costoDef = costo_modSelezionato + deluxe + shoeHorn;
	$("#dest1_costo").fadeOut().replaceWith('<div id="dest1_costo" style="border:2px solid #9D815B;background-color:#000000;"><p>'+costoDef+' &#36;</p></div>').fadeIn();
	$("#deluxe_options").replaceWith('<div id="deluxe_options" style="position:absolute; top:0; left:416px; width:440px; height:126px; border-right:2px solid #9D815B;">&nbsp;</div>');
	$("#dest4_monogram").fadeOut(10);
	$("#fondo6").replaceWith('<div id="fondo6" class="fondo" style="font-size:12px;"><div style="text-align:left; width:449px; height:126px; border-right:2px solid #9D815B; position:absolute; left:0; bottom:0;"><b>STYLE</b>: '+ modSelezionato +' &ndash; <b>SIZE</b>: '+ tagliaSelezionata +'<br /><b>UPPER</b>: suede '+ colore_matSelezionato +'<br /><b>TRIMMING</b>: nappa '+ trimming +'<br /><b>TASSELS</b>: nappa '+ tassels +'<br /><b>MONOGRAMS</b>: '+ monogram_Data+'<br /><b>SHOE TREES</b>: '+shoeHornText+'<br /><b>YOUR MESSAGE</b>: '+deluxeText+'</div><div style="width:449px; height:126px; position:absolute; left:451px; bottom:0;"><div id="email_bespoke"><form id="form_bespoke" name="form_bespoke">PLEASE, INSERT YOUR EMAIL TO CONFIRM YOUR ORDER AND CHECK OUT<br />&nbsp;<br /><input type="text" id="email_buyers" name="email_buyers" value="" />&nbsp;<input type="checkbox" id="bespoke_privacy" name="bespoke_privacy" /> <a href="javascript:bespokePolicy();">Privacy</a> &nbsp;<input type="button" value="CHECKOUT" onclick="invioEmails();" /></form></div><div id="payment_bespoke"></div></div>');
	$("#avanti").css('z-index','10');
};

function deluxeYes() {
	//MODIFICO IL COSTO COMPLESSIVO, GENERO HTML PER TEXTAREA CONTENUTO DELUXE E AZZERO L'EVENTUALE RESOCONTO GIÃ€ CREATO
	costo_modSelezionato = parseInt(costo_modSelezionato);
	deluxe = parseInt(0);
	costoDef = costo_modSelezionato + deluxe + shoeHorn;
	$("#avanti").css('z-index','0');
	$("#dest1_costo").fadeOut().replaceWith('<div id="dest1_costo" style="border:2px solid #9D815B;background-color:#000000;"><p>'+costoDef+' &#36;</p></div>').fadeIn();
	$("#deluxe_options").replaceWith('<div id="deluxe_options" style="position:absolute; top:0; left:416px; width:440px; height:126px; border-right:2px solid #9D815B; font-size:12px; text-align:left;">Send your order as a gift and include a personalized greeting card<br />&nbsp;<br /><textarea rows="4" cols="50" onFocus="this.value=\'\';" onBlur="deluxeMessage(this);">Text of the greeting card</textarea> <input type="button" value="OK" style="background-color:#9D815B; color:#000000; margin:0 0 0 12px;" /><br />&nbsp;</div>');
	$("#dest4_monogram").fadeOut(10);
	$("#fondo6").replaceWith('<div id="fondo6" class="fondo" style="text-align:left">&nbsp;</div>');
};

function deluxeMessage(area) {
	//CONTROLLO LA LUNGHEZZA MASSIMA DEL CONTENUTO TEXTAREA, CREO IL RESOCONTO E PROCEDO 
	deluxeText = area.value;
	if (deluxeText.length>120){
        alert("Enter a maximum of 120 characters");
        return false;
    } else {
    	$("#fondo6").replaceWith('<div id="fondo6" class="fondo" style="font-size:12px;"><div style="text-align:left; width:449px; height:126px; border-right:2px solid #9D815B; position:absolute; left:0; bottom:0;"><b>STYLE</b>: '+ modSelezionato +' &ndash; <b>SIZE</b>: '+ tagliaSelezionata +'<br /><b>UPPER</b>: suede '+ colore_matSelezionato +'<br /><b>TRIMMING</b>: nappa '+ trimming +'<br /><b>TASSELS</b>: nappa '+ tassels +'<br /><b>MONOGRAMS</b>: '+ monogram_Data+'<br /><b>SHOE TREES</b>: '+shoeHornText+'<br /><b>YOUR MESSAGE</b>: '+deluxeText+'</div><div style="width:449px; height:126px; position:absolute; left:451px; bottom:0;"><div id="email_bespoke"><form id="form_bespoke" name="form_bespoke">PLEASE, INSERT YOUR EMAIL TO CONFIRM YOUR ORDER AND CHECK OUT<br />&nbsp;<br /><input type="text" id="email_buyers" name="email_buyers" value="" />&nbsp;<input type="checkbox" id="bespoke_privacy" name="bespoke_privacy" /> <a href="javascript:bespokePolicy();">Privacy</a> &nbsp;<input type="button" value="CHECKOUT" onclick="invioEmails();" /></form></div><div id="payment_bespoke">&nbsp;</div></div>');
    	$("#avanti").css('z-index','10');
    } 	
};

function bespokePolicy() {
	$("#bespoke_policy").fadeIn("slow");
};




function invioEmails() {
	//CONTROLLO CAMPI EMAIL E PRIVACY
	var mail = $("#email_buyers").val();
	var privacy = $("#bespoke_privacy").attr('checked');
	if (!mail.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
		alert("A valid email is required!");
		return false;
	} if (privacy != "checked") {
		alert("Privacy agreement is required!");
		return false;
	} else {
		//INVIO I PARAMETRI RACCOLTI ALLA FUNZIONE PHP DI INVIO POSTA
		$.post('js/mailBespoke.php',{email: mail, modello: modSelezionato , taglia: tagliaSelezionata , upper: colore_matSelezionato , trimming: trimming , tassels: tassels , monogram: monogram_Data , deluxe: deluxeText , shoehorn: shoeHornText, price: costoDef},function(data){
	        //alert(data);
	        //GENERO E PUBBLICO IL PULSANTE
	        $("#payment_bespoke").delay(500).replaceWith('<div id="payment_bespoke">&nbsp;<br />'+data+'<br /><form id="payment_paypalpro" action="https://securepayments.paypal.com/cgi-bin/acquiringweb" method="post"><input type="hidden" name="cmd" value="_hosted-payment"><input type="hidden" name="buyer_email" id="buyer_email" value="'+mail+'" /><input type="hidden" name="subtotal" id="subtotal" value="'+costoDef+'" /><input type="hidden" name="business" id="business" value="49RLBD4S7BEB2" /><input type="hidden" name="paymentaction" value="sale" /><input type="hidden" name="return" value="http://www.superglamourous.it/success.html"><input type="hidden" name="currency_code" value="EUR"><input type="hidden" name="cancel_return" value="http://www.superglamourous.it/bespoke.html"><input type="hidden" name="cbt" value="BACK TO BESPOKE CORNER"><!--input type="submit" name="METHOD" value="CHECKOUT"--></form></div>').delay(500);
	        //REDIRECT A PAYPALPRO
	        document.getElementById("payment_paypalpro").submit();
	    });
	}    
};

function prova01(data) {
	alert(data);
}
