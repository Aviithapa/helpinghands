<?php
/**
 * Created by PhpStorm.
 * User: Saurav KC
 * Date: 2/14/2018
 * Time: 2:17 PM
 */

if (!function_exists('pagination_links')) {

    /**
     * @param $data
     * @param null $view
     *
     * @return mixed
     */
    function pagination_links($data, $view = null)
    {
        if ($query = Request::query()) {
            $request = array_except($query, 'page');

            return $data->appends($request)->render($view);
        }

        return $data->render($view);
    }

}
if(!function_exists('defaultRequirementsFiles')){
    function defaultRequirementFiles()
    {
        return [
            0=>[
             "title"=>'Passport',
             "description"=>'Please upload your both front and back page of your passport.The given passport must be valid.'
            ],
            1=>[
                "title"=>'IELTS',
                "description"=>'Please upload a  copy of your IELTS test result.Note that IELTS score shouldnot be older than 2 years'
            ],
            2=>[
                "title"=>"Marksheet",
                "description"=>'Please upload your marksheet.'
            ],
            3=>[
                "title"=>"Character Certificate",
                "description"=>"Please upload a clear copy of your character certificate"
            ],
            4=>[
                "title"=> "SLC/COM Marksheet",
                "description"=>"Please upload a SLC/COM marksheet."
            ],
            5=>[
                "title"=>"CV/Resume",
                "description"=>"Please upload your CV/Resume."
            ],
            6=>[
                "title"=>"Recommendation Letter",
                "description"=>"Please upload your recommendation letter"
            ],
            7=>[
                "title"=>"Bank",
                "description"=>"Please upload your bank transactions"
            ],
            8=>[
                "title"=>"Work",
                "description"=>"Please upload your work resume data"
            ],
            9=>[
                "title"=>"Others",
                "description"=>"Please upload your other document"
            ]
        ];
    }
}

if (!function_exists('getPermissionList')) {
    function getPermissionList()
    {
        $permission_lists = [];
        $permissions = \App\Models\Auth\Permission::latest()->pluck('name', 'id');
        foreach ($permissions as $key => $value) {
            if ($pos = strpos($value, '-')) {
                $key_one = substr($value, 0, $pos);
                $permission_lists[$key_one][$key] = $value;
            } else {
                $permission_lists[$key] = $value.'1';
            }
        }
        return $permission_lists;
    }
}

if(!function_exists('pluckRoleList'))
{
    /**
     * Pluck role ID and Name in Array
     * @return mixed
     */
    function pluckRoleList()
    {
        return \App\Models\Auth\Role::pluck('name','id');
    }
}


if(!function_exists('optionsToArray')) {
    function optionsToArray($options, $id = 'id')
    {
        $array = [];
        foreach($options as $option)
        {
            $array[] = $option->$id;
        }
        return $array;
    }
}

if(! function_exists('getStatusList')){
    function getStatusList()
    {
        $status = [
            'draft' => 'Draft',
            'hidden' => 'Hidden',
            'published' => 'Published',
            'spam' => 'Spam',
            'suspended' => 'Suspended'
        ];
        return $status;
    }
}



if(!function_exists('getSettingValue')) {
    /**
     * Gets setting value
     *
     * @param $key
     * @return string
     */
    function getSettingValue($key)
    {
        return null;
        /*$service = app(App\Modules\Saurav\Setting\Repositories\SettingRepository::class);
        return $service->getValue($key);*/
    }
}

if(!function_exists('getSettingValueAsArray')) {
    /**
     * Gets setting value
     *
     * @param $key
     * @return array
     */
    function getSettingValueAsArray($key)
    {
        return [];
        /*$service = app(App\Modules\Saurav\Setting\Repositories\SettingRepository::class);
        return $service->getValueAsArray($key);*/
    }
}


if (!function_exists('getSiteSetting')) {
    /**
     * @param $name
     * @return null
     */
    function getSiteSetting($name)
    {
         if($name==='logo_image'){
            return App\Models\Website\SiteSetting::getLogoImage($name);
        }

        return App\Models\Website\SiteSetting::getValue($name);
    }
}

if(!function_exists('checkForPermission')) {
    /**
     * @param $permission_name
     * @return bool
     */
    function checkForPermission($permission_name)
    {
        $user = Auth::User();
        if(Auth::check() && ($user->isSuperAdmin() || $user->can($permission_name))) {
            return true;
        }
        else {
            return false;
        }
    }
}

if (! function_exists('uploadedAsset')) {
    /**
     * Generates an asset path for the uploads.
     * @param null $path
     * @param null $file_name
     * @return string
     */
    function uploadedAsset($path = null, $file_name = null)
    {
        $path  = Storage::url($path.'/'.$file_name);
        return $path;
    }
}


if(!function_exists('imageNotFound')) {
    /**
     * @param null $type
     * @return string
     */
    function imageNotFound($type = null)
    {
        switch ($type){
            case 'user':
                return '/assets/img/profiles/avatar.jpg';
                break;
            case 'small':
                return 'https://via.placeholder.com/350x150';
                break;
            default:
                return 'https://via.placeholder.com/350x150';
            //return asset('images/default.png');

        }
    }
}

if(!function_exists('getDateFormat'))
{
    function getDateFormat($date = null)
    {
        if(is_null($date)) {
            $date = now();
        }
        return date('jS M, Y', strtotime($date));
    }

}

if(!function_exists('getActiveInactiveStatus'))
{
    function getActiveInactiveStatus()
    {
        return ['active' => 'Active', 'in-active' => 'In Active'];
    }

}


if(!function_exists('getCountryList'))
{
    function getCountryList()
    {
        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
        foreach ($countries as $country)
        {
            $new_array[$country] = $country;
        }
        return $new_array;
    }

}
if(!function_exists('getSchoolType'))
{
    function getSchoolType()
    {
        $schoolTypes = array("Public", "Private", "Government");
        foreach ($schoolTypes as $school)
        {
            $new_array[$school] = $school;
        }
        return $new_array;
    }

}

if(!function_exists('generateSlug'))
{
    /**
     * Generates the alias equivalent for the provided string
     *
     * @param $string
     * @return mixed|string
     */
    function generateSlug($string)
    {
        $string = strtolower($string);
        $string = str_replace(" ", "-", $string);
        $string = str_replace(".", "-", $string);
        $string = str_replace("--", "-", $string);
        $string = str_replace("--", "-", $string);
        $string = str_replace("--", "-", $string);
        $string = str_replace("&", "and", $string);
        $string = str_replace("@", "", $string);
        $string = str_replace("(", "", $string);
        $string = str_replace(")", "", $string);
        $string = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $string);
        return $string;
    }

}


if(!function_exists('getSliderType')) {
    function getSliderType()
    {
        $array = [
            'image' => 'Image', 'video' => 'Video'
        ];
        return $array;
    }
}


if(!function_exists('getNationalityList')) {
    function getNationalityList()
    {
        $array = [  "afghanistan" => "Afghanistan",
            "aland-islands" => "Aland islands",
            "albania" => "Albania",
            "algeria" => "Algeria",
            "american-samoa" => "American samoa",
            "andorra" => "Andorra",
            "angola" => "Angola",
            "anguilla" => "Anguilla",
            "antigua-and-barbuda" => "Antigua and barbuda",
            "argentina" => "Argentina",
            "armenia" => "Armenia",
            "aruba" => "Aruba",
            "australia" => "Australia",
            "austria" => "Austria",
            "azerbaijan" => "Azerbaijan",
            "azores-islands" => "Azores islands",
            "bahamas" => "Bahamas",
            "bahrain" => "Bahrain",
            "balearic-islands" => "Balearic islands",
            "bangladesh" => "Bangladesh",
            "barbados" => "Barbados",
            "basque-country" => "Basque country",
            "belarus" => "Belarus",
            "belgium" => "Belgium",
            "belize" => "Belize",
            "benin" => "Benin",
            "bermuda" => "Bermuda",
            "bhutan" => "Bhutan",
            "bolivia" => "Bolivia",
            "bonaire" => "Bonaire",
            "bosnia-and-herzegovina" => "Bosnia and herzegovina",
            "botswana" => "Botswana",
            "brazil" => "Brazil",
            "british-columbia" => "British columbia",
            "british-indian-ocean-territory" => "British indian ocean territory",
            "british-virgin-islands" => "British virgin islands",
            "brunei" => "Brunei",
            "bulgaria" => "Bulgaria",
            "burkina-faso" => "Burkina faso",
            "burundi" => "Burundi",
            "cambodia" => "Cambodia",
            "cameroon" => "Cameroon",
            "canada" => "Canada",
            "canary-islands" => "Canary islands",
            "cape-verde" => "Cape verde",
            "cayman-islands" => "Cayman islands",
            "central-african-republic" => "Central african republic",
            "ceuta" => "Ceuta",
            "chad" => "Chad",
            "chile" => "Chile",
            "china" => "China",
            "christmas-island" => "Christmas island",
            "cocos-island" => "Cocos island",
            "colombia" => "Colombia",
            "comoros" => "Comoros",
            "cook-islands" => "Cook islands",
            "corsica" => "Corsica",
            "costa-rica" => "Costa rica",
            "croatia" => "Croatia",
            "cuba" => "Cuba",
            "curacao" => "Curacao",
            "cyprus" => "Cyprus",
            "czech-republic" => "Czech republic",
            "democratic-republic-of-congo" => "Democratic republic of congo",
            "denmark" => "Denmark",
            "djibouti" => "Djibouti",
            "dominica" => "Dominica",
            "dominican-republic" => "Dominican republic",
            "east-timor" => "East timor",
            "ecuador" => "Ecuador",
            "egypt" => "Egypt",
            "el-salvador" => "El salvador",
            "england" => "England",
            "equatorial-guinea" => "Equatorial guinea",
            "eritrea" => "Eritrea",
            "estonia" => "Estonia",
            "ethiopia" => "Ethiopia",
            "european-union" => "European union",
            "falkland-islands" => "Falkland islands",
            "faroe-islands" => "Faroe islands",
            "fiji" => "Fiji",
            "finland" => "Finland",
            "france" => "France",
            "french-polynesia" => "French polynesia",
            "gabon" => "Gabon",
            "galapagos-islands" => "Galapagos islands",
            "gambia" => "Gambia",
            "georgia" => "Georgia",
            "germany" => "Germany",
            "ghana" => "Ghana",
            "gibraltar" => "Gibraltar",
            "greece" => "Greece",
            "greenland" => "Greenland",
            "grenada" => "Grenada",
            "guam" => "Guam",
            "guatemala" => "Guatemala",
            "guernsey" => "Guernsey",
            "guinea-bissau" => "Guinea bissau",
            "guinea" => "Guinea",
            "haiti" => "Haiti",
            "hawaii" => "Hawaii",
            "honduras" => "Honduras",
            "hong-kong" => "Hong kong",
            "hungary" => "Hungary",
            "iceland" => "Iceland",
            "india" => "India",
            "indonesia" => "Indonesia",
            "iran" => "Iran",
            "iraq" => "Iraq",
            "ireland" => "Ireland",
            "isle-of-man" => "Isle of man",
            "israel" => "Israel",
            "italy" => "Italy",
            "ivory-coast" => "Ivory coast",
            "jamaica" => "Jamaica",
            "japan" => "Japan",
            "jersey" => "Jersey",
            "jordan" => "Jordan",
            "kazakhstan" => "Kazakhstan",
            "kenya" => "Kenya",
            "kiribati" => "Kiribati",
            "kosovo" => "Kosovo",
            "kuwait" => "Kuwait",
            "kyrgyzstan" => "Kyrgyzstan",
            "laos" => "Laos",
            "latvia" => "Latvia",
            "lebanon" => "Lebanon",
            "lesotho" => "Lesotho",
            "liberia" => "Liberia",
            "libya" => "Libya",
            "liechtenstein" => "Liechtenstein",
            "lithuania" => "Lithuania",
            "luxembourg" => "Luxembourg",
            "macao" => "Macao",
            "madagascar" => "Madagascar",
            "madeira" => "Madeira",
            "malawi" => "Malawi",
            "malaysia" => "Malaysia",
            "maldives" => "Maldives",
            "mali" => "Mali",
            "malta" => "Malta",
            "marshall-island" => "Marshall island",
            "martinique" => "Martinique",
            "mauritania" => "Mauritania",
            "mauritius" => "Mauritius",
            "melilla" => "Melilla",
            "mexico" => "Mexico",
            "micronesia" => "Micronesia",
            "moldova" => "Moldova",
            "monaco" => "Monaco",
            "mongolia" => "Mongolia",
            "montenegro" => "Montenegro",
            "montserrat" => "Montserrat",
            "morocco" => "Morocco",
            "mozambique" => "Mozambique",
            "myanmar" => "Myanmar",
            "namibia" => "Namibia",
            "nauru" => "Nauru",
            "nepal" => "Nepal",
            "netherlands" => "Netherlands",
            "new-zealand" => "New zealand",
            "nicaragua" => "Nicaragua",
            "niger" => "Niger",
            "nigeria" => "Nigeria",
            "niue" => "Niue",
            "norfolk-island" => "Norfolk island",
            "north-korea" => "North korea",
            "northen-cyprus" => "Northen cyprus",
            "northern-marianas-islands" => "Northern marianas islands",
            "norway" => "Norway",
            "oman" => "Oman",
            "orkney-islands" => "Orkney islands",
            "ossetia" => "Ossetia",
            "otan" => "Otan",
            "pakistan" => "Pakistan",
            "palau" => "Palau",
            "palestine" => "Palestine",
            "panama" => "Panama",
            "papua-new-guinea" => "Papua new guinea",
            "peru" => "Peru",
            "philippines" => "Philippines",
            "pitcairn-islands" => "Pitcairn islands",
            "poland" => "Poland",
            "portugal" => "Portugal",
            "puerto-rico" => "Puerto rico",
            "qatar" => "Qatar",
            "rapa-nui" => "Rapa nui",
            "republic-of-macedonia" => "Republic of macedonia",
            "republic-of-the-congo" => "Republic of the congo",
            "romania" => "Romania",
            "russia" => "Russia",
            "rwanda" => "Rwanda",
            "saba-island" => "Saba island",
            "sahrawi-arab-democratic-republic" => "Sahrawi arab democratic republic",
            "saint-kitts-and-nevis" => "Saint kitts and nevis",
            "samoa" => "Samoa",
            "san-marino" => "San marino",
            "sao-tome-and-principe" => "Sao tome and principe",
            "sardinia" => "Sardinia",
            "saudi-arabia" => "Saudi arabia",
            "scotland" => "Scotland",
            "senegal" => "Senegal",
            "serbia" => "Serbia",
            "seychelles" => "Seychelles",
            "sicily" => "Sicily",
            "sierra-leone" => "Sierra leone",
            "singapore" => "Singapore",
            "sint-eustatius" => "Sint eustatius",
            "sint-maarten" => "Sint maarten",
            "slovakia" => "Slovakia",
            "slovenia" => "Slovenia",
            "solomon-islands" => "Solomon islands",
            "somalia" => "Somalia",
            "somaliland" => "Somaliland",
            "south-africa" => "South africa",
            "south-korea" => "South korea",
            "south-sudan" => "South sudan",
            "spain" => "Spain",
            "sri-lanka" => "Sri lanka",
            "st-barts" => "St barts",
            "st-lucia" => "St lucia",
            "st-vincent-and-the-grenadines" => "St vincent and the grenadines",
            "sudan" => "Sudan",
            "suriname" => "Suriname",
            "swaziland" => "Swaziland",
            "sweden" => "Sweden",
            "switzerland" => "Switzerland",
            "syria" => "Syria",
            "taiwan" => "Taiwan",
            "tajikistan" => "Tajikistan",
            "tanzania" => "Tanzania",
            "thailand" => "Thailand",
            "tibet" => "Tibet",
            "togo" => "Togo",
            "tokelau" => "Tokelau",
            "tonga" => "Tonga",
            "transnistria" => "Transnistria",
            "trinidad-and-tobago" => "Trinidad and tobago",
            "tubalu" => "Tubalu",
            "tunisia" => "Tunisia",
            "turkey" => "Turkey",
            "turkmenistan" => "Turkmenistan",
            "turks-and-caicos" => "Turks and caicos",
            "uganda" => "Uganda",
            "ukraine" => "Ukraine",
            "united-arab-emirates" => "United arab emirates",
            "united-kingdom" => "United kingdom",
            "united-nations" => "United nations",
            "united-states-of-america" => "United states of america",
            "uruguay" => "Uruguay",
            "uzbekistn" => "Uzbekistn",
            "vanuatu" => "Vanuatu",
            "vatican-city" => "Vatican city",
            "venezuela" => "Venezuela",
            "vietnam" => "Vietnam",
            "virgin-islands" => "Virgin islands",
            "wales" => "Wales",
            "yemen" => "Yemen",
            "zambia" => "Zambia",
            "zimbabwe" => "Zimbabwe"];
        return $array;
    }
}

if(!function_exists('getSalutation')) {
    function getSalutation()
    {
        return ['Mr.' => 'Mr.','Ms.' => 'Ms.','Mrs.' => 'Mrs.','Mx.' => 'Mx.', 'Sir' => 'Sir', 'Madam' => 'Madam'];
    }
}
if(!function_exists('removeKeyFromArray')){
    function removeKeyFromArray($array,$removeKeys)
    {
        foreach($removeKeys as $removeKey)
//        dd($array[$removeKey]);
        unset($array[$removeKey]);
        return $array;
    }
}





