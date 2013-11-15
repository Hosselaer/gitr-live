<?php
		// set appropriate headers
		header('Cache-Control: no-cache, must-revalidate');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Content-type: application/json');

		// construct endpoint url
		$url = "http://symbid.nl/api/v1/ideas/" . $_GET["id"];

		// configure curl
	    $ch = curl_init();
	    curl_setopt ($ch, CURLOPT_URL, $url);
	    curl_setopt ($ch, CURLOPT_HTTPHEADER, array("Authorization: OAuth 6b0zr1g3ssh8jlna1p2j1wj5t"));

	    // execute http request
	    $result = curl_exec ($ch);

	    //remove last character at the end 
	    $retval = substr($result, 0, -1);

	    //print
	    echo $retval;

	    //clean up
	    curl_close($ch);
	    exit;
?>