<?php
/*
|--------------------
| Xml and Json
|--------------------
*/

/* what are xml and json */
/* json example */
// {
//     "accounts": {
//       "twitter": "https://twitter.com/username",
//       "facebook": "https://facebook.com/username",
//       "instagram": "https://instagram.com/username",
//       "linkedin": "https://linkedin.com/in/username"
//     }
//  }
  

/* xml example */
// <accounts>
//   <account>https://twitter.com/username</account>
//   <account>https://facebook.com/username</account>
//   <account>https://instagram.com/username</account>
//   <account>https://linkedin.com/in/username</account>
//   <!-- Add more accounts as needed -->
// </accounts>


  
// ______________________________________________ //


/* read json */
// $json = '{
//             "accounts": {
//                 "twitter": "https://twitter.com/username",
//                 "facebook": "https://facebook.com/username",
//                 "instagram": "https://instagram.com/username",
//                 "linkedin": "https://linkedin.com/in/username"
//             }
//         }';

// $array = json_decode($json, true);
// print_r($array);

// $accounts = $array['accounts'];
// print_r($accounts);
// foreach($accounts as $account => $link) {
//     echo "my address for $account is $link" . PHP_EOL;
// }


// ______________________________________________ //


/* write json */
// $array = [
//     "accounts" => [
//         "twitter" => "https://twitter.com/username",
//         "facebook" => "https://facebook.com/username",
//         "instagram" => "https://instagram.com/username",
//         "linkedin" => "https://linkedin.com/in/username"
//     ]
// ];

// $json = json_encode($array);
// echo $json;


/* read xml */
// DOMDocument
// SimpleXMLElement

$xml = '<accounts>
            <account type="twitter">https://twitter.com/username</account>
            <account type="facebook">https://facebook.com/username</account>
            <account type="instagram">https://instagram.com/username</account>
            <account type="linkdin">https://linkedin.com/in/username</account>
        </accounts>';


// $dom = new DOMDocument();
// $dom->loadXML($xml); // il y a aussi loadHTML
// $accounts = $dom->getElementsByTagName("account");

// foreach($accounts as $account) {
//     $name = $account->getAttribute('type');
//     $link = $account->nodeValue;

//     echo "the address of my $name is $link" . PHP_EOL;
// }

// $accounts = new SimpleXMLElement($xml);
// print_r($accounts);
// foreach($accounts as $account) {
//     $name = $account['type'];
//     $link = $account;

//     echo "the address of my $name is $link" . PHP_EOL;
// }


// write xml
$accounts = new SimpleXMLElement('<accounts></accounts>');
$accounts->addChild("account", 'https://linkedin.com/in/username')->addAttribute("type", "linkdin");
$finalXml = $accounts->asXML();

echo $finalXml;

/*
|--------------------
| End Of Xml and Json
|--------------------
*/