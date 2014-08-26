var server_list = {};

countrycodes = {
  AF: "Afghanistan",
  AX: "Åland Islands",
  AL: "Albania",
  DZ: "Algeria",
  AS: "American Samoa",
  AD: "Andorra",
  AO: "Angola",
  AI: "Anguilla",
  AQ: "Antarctica",
  AG: "Antigua and Barbuda",
  AR: "Argentina",
  AM: "Armenia",
  AW: "Aruba",
  AU: "Australia",
  AT: "Austria",
  AZ: "Azerbaijan",
  BS: "Bahamas",
  BH: "Bahrain",
  BD: "Bangladesh",
  BB: "Barbados",
  BY: "Belarus",
  BE: "Belgium",
  BZ: "Belize",
  BJ: "Benin",
  BM: "Bermuda",
  BT: "Bhutan",
  BO: "Bolivia, Plurinational State of",
  BQ: "Bonaire, Sint Eustatius and Saba",
  BA: "Bosnia and Herzegovina",
  BW: "Botswana",
  BV: "Bouvet Island",
  BR: "Brazil",
  IO: "British Indian Ocean Territory",
  BN: "Brunei Darussalam",
  BG: "Bulgaria",
  BF: "Burkina Faso",
  BI: "Burundi",
  KH: "Cambodia",
  CM: "Cameroon",
  CA: "Canada",
  CV: "Cape Verde",
  KY: "Cayman Islands",
  CF: "Central African Republic",
  TD: "Chad",
  CL: "Chile",
  CN: "China",
  CX: "Christmas Island",
  CC: "Cocos (Keeling) Islands",
  CO: "Colombia",
  KM: "Comoros",
  CG: "Congo",
  CD: "Congo, the Democratic Republic of the",
  CK: "Cook Islands",
  CR: "Costa Rica",
  CI: "Côte d'Ivoire",
  HR: "Croatia",
  CU: "Cuba",
  CW: "Curaçao",
  CY: "Cyprus",
  CZ: "Czech Republic",
  DK: "Denmark",
  DJ: "Djibouti",
  DM: "Dominica",
  DO: "Dominican Republic",
  EC: "Ecuador",
  EG: "Egypt",
  SV: "El Salvador",
  GQ: "Equatorial Guinea",
  ER: "Eritrea",
  EE: "Estonia",
  ET: "Ethiopia",
  FK: "Falkland Islands (Malvinas)",
  FO: "Faroe Islands",
  FJ: "Fiji",
  FI: "Finland",
  FR: "France",
  GF: "French Guiana",
  PF: "French Polynesia",
  TF: "French Southern Territories",
  GA: "Gabon",
  GM: "Gambia",
  GE: "Georgia",
  DE: "Germany",
  GH: "Ghana",
  GI: "Gibraltar",
  GR: "Greece",
  GL: "Greenland",
  GD: "Grenada",
  GP: "Guadeloupe",
  GU: "Guam",
  GT: "Guatemala",
  GG: "Guernsey",
  GN: "Guinea",
  GW: "Guinea-Bissau",
  GY: "Guyana",
  HT: "Haiti",
  HM: "Heard Island and McDonald Islands",
  VA: "Holy See (Vatican City State)",
  HN: "Honduras",
  HK: "Hong Kong",
  HU: "Hungary",
  IS: "Iceland",
  IN: "India",
  ID: "Indonesia",
  IR: "Iran, Islamic Republic of",
  IQ: "Iraq",
  IE: "Ireland",
  IM: "Isle of Man",
  IL: "Israel",
  IT: "Italy",
  JM: "Jamaica",
  JP: "Japan",
  JE: "Jersey",
  JO: "Jordan",
  KZ: "Kazakhstan",
  KE: "Kenya",
  KI: "Kiribati",
  KP: "Korea, Democratic People's Republic of",
  KR: "Korea, Republic of",
  KW: "Kuwait",
  KG: "Kyrgyzstan",
  LA: "Lao People's Democratic Republic",
  LV: "Latvia",
  LB: "Lebanon",
  LS: "Lesotho",
  LR: "Liberia",
  LY: "Libya",
  LI: "Liechtenstein",
  LT: "Lithuania",
  LU: "Luxembourg",
  MO: "Macao",
  MK: "Macedonia, The Former Yugoslav Republic of",
  MG: "Madagascar",
  MW: "Malawi",
  MY: "Malaysia",
  MV: "Maldives",
  ML: "Mali",
  MT: "Malta",
  MH: "Marshall Islands",
  MQ: "Martinique",
  MR: "Mauritania",
  MU: "Mauritius",
  YT: "Mayotte",
  MX: "Mexico",
  FM: "Micronesia, Federated States of",
  MD: "Moldova, Republic of",
  MC: "Monaco",
  MN: "Mongolia",
  ME: "Montenegro",
  MS: "Montserrat",
  MA: "Morocco",
  MZ: "Mozambique",
  MM: "Myanmar",
  NA: "Namibia",
  NR: "Nauru",
  NP: "Nepal",
  NL: "Netherlands",
  NC: "New Caledonia",
  NZ: "New Zealand",
  NI: "Nicaragua",
  NE: "Niger",
  NG: "Nigeria",
  NU: "Niue",
  NF: "Norfolk Island",
  MP: "Northern Mariana Islands",
  NO: "Norway",
  OM: "Oman",
  PK: "Pakistan",
  PW: "Palau",
  PS: "Palestinian Territory, Occupied",
  PA: "Panama",
  PG: "Papua New Guinea",
  PY: "Paraguay",
  PE: "Peru",
  PH: "Philippines",
  PN: "Pitcairn",
  PL: "Poland",
  PT: "Portugal",
  PR: "Puerto Rico",
  QA: "Qatar",
  RE: "Réunion",
  RO: "Romania",
  RU: "Russian Federation",
  RW: "Rwanda",
  BL: "Saint Barthélemy",
  SH: "Saint Helena, Ascension and Tristan da Cunha",
  KN: "Saint Kitts and Nevis",
  LC: "Saint Lucia",
  MF: "Saint Martin (French part)",
  PM: "Saint Pierre and Miquelon",
  VC: "Saint Vincent and the Grenadines",
  WS: "Samoa",
  SM: "San Marino",
  ST: "Sao Tome and Principe",
  SA: "Saudi Arabia",
  SN: "Senegal",
  RS: "Serbia",
  SC: "Seychelles",
  SL: "Sierra Leone",
  SG: "Singapore",
  SX: "Sint Maarten (Dutch part)",
  SK: "Slovakia",
  SI: "Slovenia",
  SB: "Solomon Islands",
  SO: "Somalia",
  ZA: "South Africa",
  GS: "South Georgia and the South Sandwich Islands",
  SS: "South Sudan",
  ES: "Spain",
  LK: "Sri Lanka",
  SD: "Sudan",
  SR: "Suriname",
  SJ: "Svalbard and Jan Mayen",
  SZ: "Swaziland",
  SE: "Sweden",
  CH: "Switzerland",
  SY: "Syrian Arab Republic",
  TW: "Taiwan, Province of China",
  TJ: "Tajikistan",
  TZ: "Tanzania, United Republic of",
  TH: "Thailand",
  TL: "Timor-Leste",
  TG: "Togo",
  TK: "Tokelau",
  TO: "Tonga",
  TT: "Trinidad and Tobago",
  TN: "Tunisia",
  TR: "Turkey",
  TM: "Turkmenistan",
  TC: "Turks and Caicos Islands",
  TV: "Tuvalu",
  UG: "Uganda",
  UA: "Ukraine",
  AE: "United Arab Emirates",
  GB: "United Kingdom",
  US: "United States",
  UM: "United States Minor Outlying Islands",
  UY: "Uruguay",
  UZ: "Uzbekistan",
  VU: "Vanuatu",
  VE: "Venezuela, Bolivarian Republic of",
  VN: "Viet Nam",
  VG: "Virgin Islands, British",
  VI: "Virgin Islands, U.S.",
  WF: "Wallis and Futuna",
  EH: "Western Sahara",
  YE: "Yemen",
  ZM: "Zambia",
  ZW: "Zimbabwe"
};
factions = {
  cf: "Canadian Forces",
  ch: " Chinese Forces",
  chinsurgent: "Militia",
  fr: "French Forces",
  gb: "British Armed Forces",
  ger: "German Forces",
  hamas: "Hamas",
  idf: "Israeli Defence Forces",
  mec: "Middle East Coalition",
  meinsurgent: "Iraqi Insurgents",
  ru: "Russian Armed Forces",
  taliban: "Taliban",
  us: "United States Marine Corps",
  usa: "United States Army",
  ww2ger: "Wehrmacht",
  ww2usa: "United States Army",
  vnnva: "North Vietnamese Army",
  vnusa: "United States Army",
  vnusmc: "United States Marine Corps",
  vnvc: "Viet Cong",
  arg82: "Argentine Armed Forces",
  gb82: "British Armed Forces",
  arf: "African Resistance Fighters"
};

jQuery(document).ready(function() {

  if (jQuery.cookie('hide_prspy') == "true") {
    jQuery('#prspy-hidden').show();
    jQuery('#prspy-visible').hide();
    if (prspy_timeout)
      clearTimeout(prspy_timeout);
  } else {
    jQuery('#prspy-hidden').hide();
    jQuery('#prspy-visible').show();
    prspy_update();
  }

  jQuery('#prspy-hidden').click(function() {
    jQuery('#prspy-hidden').hide();
    jQuery('#prspy-visible').show();
    jQuery.cookie('hide_prspy', null);
    prspy_update();
  });

  jQuery('#prspy-close').click(function() {
    jQuery('#prspy-hidden').show();
    jQuery('#prspy-visible').hide();
    jQuery.cookie('hide_prspy', 'true');
    if (prspy_timeout)
      clearTimeout(prspy_timeout);
  });

  jQuery('#prspy-refresh').click(function() {
    jQuery('#prspy-empty').hide();
    jQuery('#prspy-unavailible').hide();
    //clear timeout and set a new one
    if (prspy_timeout)
      clearTimeout(prspy_timeout);
    prspy_update();
  });
});
var prspy_timeout = null;

function prspy_update() {
  jQuery('#prspy-unavailible').hide();
  jQuery('#prspy-empty').hide();
  jQuery('#prspy-loading').show();
  jQuery('.prspy-server').remove();
  server_list = {};
  jQuery.ajax({
    url: prspydata,
    dataType: 'json',
    timeout: 10000, //10 second timeout
    error: function() {
      jQuery('#prspy-loading').hide();
      jQuery('#prspy-empty').hide();
      jQuery('.prspy-server').remove();
      jQuery('#prspy-unavailible').show();
    },
    success: function(json) {
      jQuery('#prspy-loading').hide();
      jQuery('#prspy-empty').show();
      jQuery('.prspy-server').remove();
      jQuery('#prspy-unavailible').hide();
      jQuery.each(json["Data"], function(ip, server) {
        player_count = 0;
        player_list = "";
        jQuery.each(server["Players"], function(key, player) {
          if (player["Name"].indexOf(clantag) !== -1) {
            player_list = player_list + player["Name"].replace(clantag + " ", "") + ', ';
            player_count++;
          }
        });
        // Cut last comma
        player_list = player_list.substring(0, player_list.length - 2);
        if (player_count > 0) {
          // If first player found hide empty box
          jQuery('#prspy-empty').hide();
          var isare = "are";
          var s = "s";
          if (player_count == 1) {
            isare = "is";
            s = "";
          };
          var servername = server["ServerName"].substring(14);
          if(servername.length >= 34)
            servername = servername.substring(0,34) + "... ";
          // Map
          if (server["MapName"].length == 0) map = "Unknown";
          else {
            var mode = server["GameMode"].replace("gpm_cq", "AAS").replace("gpm_coop", "Co-Operative").replace(
              "gpm_insurgency", "Insurgency").replace("gpm_skirmish", "Skirmish");
            var layout = server["MapSize"].toString().replace("16", "Infantry").replace("32",
              "Alternative").replace("64", "Standard").replace("128", "Large");
            var map = 'Map: ' + server["MapName"] + ' | Mode: ' + mode + ' | Layout: ' + layout;
          }
          // Players
          var players = server["NumPlayers"].toString() + '/' + server["MaxPlayers"].toString();
          if (parseInt(server["ReservedSlots"], 10) > 0) players = players + '(' + server["ReservedSlots"]
            .toString() + ')';
          // Teams and points
          var faction1 = server["Teams"][0]["Name"].toLowerCase();
          var faction2 = server["Teams"][1]["Name"].toLowerCase();
          var team1 = '<div title="' + factions[faction1] +
            '" class="prspy-icon ancient-factionflag ancient-factionflag-' + faction1 + '"></div> (Points: ' +
            server["Teams"][0]["Score"].toString() + ', KD: ' + server["Teams"][0]["Kills"].toString() +
            ':' + server["Teams"][0]["Deaths"].toString() + ')';
          var team2 = '<div title="' + factions[faction2] +
            '" class="prspy-icon ancient-factionflag ancient-factionflag-' + faction2 + '"></div> (Points: ' +
            server["Teams"][1]["Score"].toString() + ', KD: ' + server["Teams"][1]["Kills"].toString() +
            ':' + server["Teams"][1]["Deaths"].toString() + ')';
          jQuery('#prspy-servers').append(
            '<div class="prspy-server" style="border-bottom:1px solid;border-collapse:collapse;"><div class="number">' +
            player_list + ' ' + isare +
            ' playing on:</div><div class="prspy-icon ancient-countryflag ancient-countryflag-' + server[
              "Country"].toLowerCase() + '" title="' + countrycodes[server["Country"]] +
            '"></div> <a class="name" href="http://www.realitymod.com/prspy/" target="_blank">' + servername + '</a>' + players + '<div class="next">' + map +
            '</div><div class="next">' + team1 + ' <b>vs.</b> ' + team2 + '</div></div>');
        }
      });
      var lastUpdate = new Date(json["Time"]);
      jQuery('#prspy-refresh').attr('title', 'Last updated: ' + lastUpdate.toLocaleString());
    }
  });
  prspy_timeout = setTimeout("prspy_update()", interval);
}