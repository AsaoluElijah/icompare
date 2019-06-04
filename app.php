<?php
	require "twitteroauth/autoload.php";
	
	$max = $_REQUEST['a'];
	$item1 = $_REQUEST['item1'];
	$item2 = $_REQUEST['item2'];
	$item3 = $_REQUEST['item3'];
	
	use Abraham\TwitterOAuth\TwitterOAuth;
	$connection = new TwitterOAuth("twqnbQD4rK8iAQzsCpDEuOlTm", "9raK4EaJB243vpuNH8XFxCgjM1tSwkNpvYzFG2w5vhmLCvDcKr", "989188914773622784-YQiScGB3VvWPj5JlIAVXHAC9swPaz4E", "lQZGW7qFQL1fyQ42vkYUoPFLWvSuFi7W5EFQke9ouBYTh");
	$statuses = $connection->get("search/tweets", ["q" => [$item1, $item2, $item3]], ["max_id" => $max or 100]);
	echo $statuses;
	
?>