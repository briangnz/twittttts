<?php

include "twitteroauth/twitteroauth.php";

$consumer_key = "eeMNrQl5ttn5M9PFN3p4T8WZ8";
$consumer_secret = "BjqNjwgO4gKBygdjDcshG83d2sh8Mb3FteWsC30WQwBGZFzE6j";
$access_token = "846118586091556864-ZeAlkVV5UrMfOGKXNrvUIEW2g88IUGS";
$access_token_secret = "dPtJgfTLLkMwfx8PmBB5yrCaPhlBTJ36b8qV3mYYjdugl";

$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=AVecesQuisiera&result_type=recent&count=1');

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Twitter API SEARCH</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="animate.css">
    </head>

    <body>
        <div id="load">
            <?php foreach ($tweets->statuses as $key => $tweet) { ?>

            <div >
                <p id="tweet" class="tweet"><img src="<?=$tweet->user->profile_image_url;?>" />
                    <?="<span>".$tweet->text; ?>"</span>"</p>
            </div><br>
            <?php } ?>
        </div>

        <script type="text/javascript" src="jquery.js"></script>
        

    </body>

    </html>
