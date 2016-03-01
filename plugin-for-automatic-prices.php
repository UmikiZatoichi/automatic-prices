<?php
//Api MiIndicador.cl
	$apiUrl = 'http://www.mindicador.cl/api';
    //Es necesario tener habilitada la directiva allow_url_fopen para usar file_get_contents
    if ( ini_get('allow_url_fopen') ) {
        $json = file_get_contents($apiUrl);
    } else {
        //De otra forma utilizamos cURL
        $curl = curl_init($apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($curl);
        curl_close($curl);
    }
     
    $dailyIndicators = json_decode($json);
    echo $dailyIndicators->dolar_intercambio->valor;

//Adjust all Woocommerce prices
function get_regular_price($regular_price) {
	return number_format($valor_dolar - 697 * 100 / 697); //<- X percent
	return number_format($regular_price * X percent);
	return adjust_price();
}

//This need a cron job or automated daily proces

//Adjust process for some categories

//Thanks for your support

?>
