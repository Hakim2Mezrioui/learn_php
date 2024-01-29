<?php

/*
|--------------------
| Project 3
|--------------------
*/

/*
* PROBLEM:
* we have a json string of countries with their phone numbers 
* 1 - we want to read it and find the phone code based on country
*       for example if I write turkey I would get 0090
* 2 - then we want to write all of the data to a csf file
*/


$data = '{
    "countries": {
      "Argentina": "54",
      "Indonesia": "62",
      "Pakistan": "92",
      "Saudi Arabia": "966",
      "Iran": "98",
      "Vietnam": "84",
      "Thailand": "66",
      "Sweden": "46",
      "Norway": "47",
      "Denmark": "45",
      "Finland": "358",
      "Portugal": "351",
      "Greece": "30",
      "Netherlands": "31",
      "Belgium": "32",
      "Switzerland": "41",
      "Austria": "43",
      "Poland": "48",
      "Czech Republic": "420",
      "Hungary": "36",
      "Romania": "40",
      "Bulgaria": "359",
      "Croatia": "385",
      "Ukraine": "380",
      "Belarus": "375",
      "Kazakhstan": "7",
      "Uzbekistan": "998",
      "Mongolia": "976",
      "Malaysia": "60",
      "Philippines": "63",
      "Singapore": "65",
      "New Zealand": "64",
      "Chile": "56",
      "Colombia": "57",
      "Peru": "51",
      "Venezuela": "58",
      "Ecuador": "593",
      "Bolivia": "591",
      "Paraguay": "595",
      "Uruguay": "598",
      "Morocco": "212",
      "Algeria": "213",
      "Tunisia": "216",
      "Libya": "218",
      "Niger": "227",
      "Mali": "223",
      "Senegal": "221",
      "Ivory Coast": "225",
      "Ghana": "233",
      "Kenya": "254",
      "Uganda": "256",
      "Ethiopia": "251",
      "South Sudan": "211",
      "Australia": "61",
      "Fiji": "679",
      "Papua New Guinea": "675",
      "Solomon Islands": "677",
      "Vanuatu": "678",
      "Samoa": "685",
      "Tonga": "676",
      "Tuvalu": "688",
      "Kiribati": "686",
      "Marshall Islands": "692"
      // Add more countries as needed
    }
  }';

/*
|--------------------
| End Project 3
|--------------------
*/