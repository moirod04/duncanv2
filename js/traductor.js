var arrLang={
	'es':{
		'qs': '¿QUIÉNES SOMOS?',
		'mision': 'MISIÓN Y VISIÓN',
		'mercados': 'MERCADO',
		'certificacion': 'CERTIFICACIONES',
		'premio': 'PREMIOS',
		'responsabilidades': 'RESPONSABILIDAD SOCIAL EMPRESARIAL',
		'productos' : 'PRODUCTOS',
		'auto' : 'AUTOMOVILES',
		'buses' : 'AUTOBUSES',
		'embarca' : 'EMBARCACIONES',
		'industrial' : 'INDUSTRIALES',
		'sistema_respaldo' : 'SISTEMAS DE RESPALDO DE ENERGÍA',
		'sistema_alterno' : 'SISTEMAS ALTERNOS DE GENERACIÓN DE ENERGÍA',
		'servicios' : 'SERVICIOS',
		'servicentro' : 'SERVICENTROS DUNCAN',
		'servicio_indrustrial' : 'SERVICIOS INDUSTRIALES',
		'contacto' 	: 'CONTACTO',
		'ven' 	: 'VENEZUELA',
		'col' 	: 'COLOMBIA',
		'trab' 	: 'TRABAJA CON NOSOTROS',
		'parrafo1'	: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		'parrafo2'	: 'OFRECEMOS',
		'gratis'		: 'SERVICIO GRATUITO',
		'parrafo20'	: 'DE REVISIÓN DE LA BATERÍA Y DEL SISTEMA DE TU VEHICULO.',
		'encuentra-bateria'	: 'ENCUENTRA TU BATERÍA',
		'buscala-por'	: 'BÚSCALA POR:' ,
		'tipo-vehiculo'	: 'TIPO DE VEHICULO',
		'grupo-bateria'	: 'GRUPO DE BATERÍA',
		'marca'		: 'MARCA',
		'year'		: 'AÑO',
		'modelo'	: 'MODELO',
		'buscar'	: 'BUSCAR',
		'donde-comprar'	: '¿DONDE COMPRAR?',
		'ciudad'	: 'CIUDAD',
		'nuestros-productos' : '	NUESTROS PRODUCTOS',
		'tienes-preguntas' : '¿TIENES PREGUNTAS? HABLA CON NOSOTROS',
		'numero-contacto' : 'NÚMEROS DE CONTACTO',
		'correo-electronico' : 'CORREO ELECTRÓNICO',
		'consejos'	: 'CONSEJOS PRÁCTICOS',
		'instala_bateria'	: 'INSTALA TU BATERÍA',
		'auxiliar_vehiculo'	: '¿CÓMO AUXILIAR UN VEHÍCULO?',
		'tip'	: 'TIPS DE MANTENIMIENTO',
		'recicla'	: 'RECICLA',
		'volver-arriba' : 'VOLVER ARRIBA'	
	},
	'en':{
		'qs': 'ABOUT US?',
		'mision': 'MISSION AND VISION',
		'mercados': 'MARKET',
		'certificacion': 'CERTIFICATIONS',
		'premio': 'AWARDS',
		'responsabilidades': 'CORPORATE SOCIAL RESPONSIBILITY',
		'productos' : 'PRODUCTS',
		'auto' : 'AUTOMOBILES',
		'buses' : 'BUSES',
		'embarca' : 'BOATS',
		'industrial' : 'INDUSTRIAL',
		'sistema_respaldo' : 'POWER SUPPORT SYSTEMS',
		'sistema_alterno' : 'ALTERNATE ENERGY GENERATION SYSTEMS',
		'servicios' : 'SERVICES',
		'servicentro' : 'DUNCAN SERVICENTERS',
		'servicio_indrustrial' : 'INDUSTRIAL SERVICES',
		'contacto' 	: 'CONTACT',
		'ven' 	: 'VENEZUELA',
		'col' 	: 'COLOMBIA',
		'trab' 	: 'WORK WITH US',
		'parrafo1'	: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		'parrafo2'	: 'WE OFFER',
		'gratis'		: 'FREE SERVICE',
		'parrafo20'	: 'OF REVIEW OF THE BATTERY AND THE SYSTEM OF YOUR VEHICLE',
		'encuentra-bateria'	: 'FIND YOUR BATTERY',
		'buscala-por'	: 'SEARCH FOR:' ,
		'tipo-vehiculo'	: 'TYPE OF VEHICLE',
		'grupo-bateria'	: 'BATTERY GROUP',
		'marca'		: 'BRAND',
		'year'		: 'YEAR',
		'modelo'	: 'MODEL',
		'buscar'	: 'SEARCH',
		'donde-comprar'	: 'WHERE TO BUY?',
		'ciudad'	: 'CITY',
		'nuestros-productos' : 'OUR PRODUCTS',
		'tienes-preguntas' : 'DO YOU HAVE QUESTIONS? TALK WITH US',
		'numero-contacto' : 'CONTACT NUMBER',
		'correo-electronico' : 'EMAIL',
		'consejos'	: 'PRACTICAL TIPS',
		'instala_bateria'	: 'INSTALL YOUR BATTERY',
		'auxiliar_vehiculo'	: 'HOW TO HELP A VEHICLE?',
		'tip'	: 'MAINTENANCE TIPS',
		'recicla'	: 'RECYCLE',
		'volver-arriba' : 'GO BACK UP'
	}
};

$(function(){
	$('.translate').click(function(){
		var lang = $(this).attr('id');
		if (lang== 'en' ) {
			document.getElementById("img1").src="images/produc1.png";
			document.getElementById("img2").src="images/produc2.png";
			document.getElementById("img3").src="images/produc3.png";
			document.getElementById("img4").src="images/produc4.png";
			document.getElementById("img5").src="images/produc6.png";
			document.getElementById("img6").src="images/produc7.png";

		}else{
			document.getElementById("img1").src="images/carro.png";
			document.getElementById("img2").src="images/bus.png";
			document.getElementById("img3").src="images/barco.png";
			document.getElementById("img4").src="images/industria.png";
			document.getElementById("img5").src="images/bateria.png";
			document.getElementById("img6").src="images/panel.png";
		}

		$('.lang').each(function(index, element){
			$(this).text(arrLang[lang][$(this).attr('key')])
		});
	});
});