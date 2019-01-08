<?php

require_once __DIR__ . '/vendor/google-api-php-client-2.2.2/vendor/autoload.php';

class GAReport {

	public function getTopProducts() {
		$analytics = $this->initializeAnalytics();
    $response = $this->getReport($analytics);
    
    return $this->parseResponse($response);
	}

  function initializeAnalytics()
  {

    // Use the developers console and download your service account
    // credentials in JSON format. Place them in this directory or
    // change the key file location if necessary.
    $KEY_FILE_LOCATION = __DIR__ . '/ga_credentials.json';

    // Create and configure a new client object.
    $client = new Google_Client();
    $client->setApplicationName("Hello Analytics Reporting");
    $client->setAuthConfig($KEY_FILE_LOCATION);
    $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
    $analytics = new Google_Service_AnalyticsReporting($client);

    return $analytics;
  }

  function getReport($analytics) {

    // Replace with your view ID, for example XXXX.
    $VIEW_ID = "185276694";

    // Create the DateRange object.
    $dateRange = new Google_Service_AnalyticsReporting_DateRange();
    $dateRange->setStartDate("7daysAgo");
    $dateRange->setEndDate("today");

    // Create the Metrics object.
    $zakupy = new Google_Service_AnalyticsReporting_Metric();
    $zakupy->setExpression("ga:itemQuantity");
    $zakupy->setAlias("itemQuantity");

    // Create the Dimensions object
    $productId = new Google_Service_AnalyticsReporting_Dimension();
    $productId->setName("ga:productSku");

    // Create the ReportRequest object.
    $request = new Google_Service_AnalyticsReporting_ReportRequest();
    $request->setViewId($VIEW_ID);
    $request->setDateRanges($dateRange);
    $request->setMetrics(array($zakupy));
    $request->setDimensions(array($productId));

    $body = new Google_Service_AnalyticsReporting_GetReportsRequest();
    $body->setReportRequests( array( $request) );
    return $analytics->reports->batchGet( $body );
  }

    public function console_debug($data) {
      echo "<script>console.log(" . json_encode($data) . ")</script>";
    }

    function parseResponse($reports) { 
      $products = array();
    
      $data = $reports['reports']['0']['data']['rows'];
      for($i = 0; $i < count($data); $i++) {
        $productId = $data[$i]['dimensions']['0'];
        $quantity = $data[$i]['metrics']['0']['values']['0'];
        $products[$productId] = $quantity;

      }

      return $products;
    }
}

