<?php 

require __DIR__.'/vendor/autoload.php';


// use Serps\SearchEngine\Google\GoogleClient;
// use Serps\HttpClient\CurlClient;
// use Serps\SearchEngine\Google\GoogleUrl;

    // Create a google client using the curl http client
    $googleClient = new Serps\SearchEngine\Google\GoogleClient(new Serps\HttpClient\CurlClient());

    // Tell the client to use a user agent
    $userAgent = "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36";
    $googleClient->request->setUserAgent($userAgent);

    // Create the url that will be parsed
    $googleUrl = new Serps\SearchEngine\Google\GoogleUrl();
    $googleUrl->setSearchTerm('simpsons');
    $response = $googleClient->query($googleUrl);

    $results = $response->getNaturalResults();

    foreach($results as $result){
     // print_r($result);
     print_r($result);
     	// json_encode($result->toArray());
    }

 ?>