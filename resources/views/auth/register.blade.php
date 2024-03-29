  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    @include ('backend.partials.css');
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/register.css') }}">
  </head>
  <body background="https://ipdbse.com/public/css/images/sign-bg.jpg">
    <div style="">
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" style="max-width:500px;margin:auto; margin-top: 20px; padding: 20px; border: 1px solid black; color: white; background: rgba(0, 0, 0, 0.2);">
      @csrf
      <div>
      <h4 style="float: left;"><i class="fa fa-user" style="margin-right:5px"></i>Registration</h4>
      <a href="{{ route('login') }}" style="float: right; color: white;">Already A Member ?</a></div>
      <div class="input-container">
        <i class="fa fa-user icon"></i>
        <input id="name" type="text" class="form-control input-field @error('name') is-invalid @enderror" name="name" placeholder="Enter Full name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')

        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="input-container">

        <i class="fa fa-envelope icon"></i>
        <input id="email" type="email" class="form-control input-field @error('email') is-invalid @enderror" name="email" placeholder="Enter Valid Email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
        <br>
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="input-container">
        <i class="fa fa-key icon"></i>
        <input id="password" type="password" class="form-control input-field @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="input-container">
        <i class="fa fa-key icon"></i>
        <input id="password-confirm" type="password" class="form-control input-field" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">

        @error('password-confirm')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="input-container">
        <i class="fa fa-phone icon"></i>
        <input id="mobile" type="text" class="form-control input-field @error('mobile') is-invalid @enderror" placeholder="Mobile number" name="mobile" required autocomplete="mobile">

        @error('mobile')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="input-container">
        <i class="fa fa-globe icon"></i>
        <select name="address" id="country" class=" form-control input-field " @error('country') is-invalid @enderror" required="" style="width: 100%;padding: 5px 11px 10px 5px;border: 1px solid rgba(0,0,0,0.2);">
          <option value="">Select Country</option>
          <option value="AFGHANISTAN">AFGHANISTAN</option>
          <option value="ALBANIA">ALBANIA</option>
          <option value="ALGERIA">ALGERIA</option>
          <option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
          <option value="ANDORRA">ANDORRA</option>
          <option value="ANGOLA">ANGOLA</option>
          <option value="ANGUILLA">ANGUILLA</option>
          <option value="ANTARCTICA">ANTARCTICA</option>
          <option value="ANTIGUA AND BARBUDA">ANTIGUA AND BARBUDA</option>
          <option value="ARGENTINA">ARGENTINA</option>
          <option value="ARMENIA">ARMENIA</option>
          <option value="ARUBA">ARUBA</option>
          <option value="AUSTRALIA">AUSTRALIA</option>
          <option value="AUSTRIA">AUSTRIA</option>
          <option value="AZERBAIJAN">AZERBAIJAN</option>
          <option value="BAHAMAS">BAHAMAS</option>
          <option value="BAHRAIN">BAHRAIN</option>
          <option value="BANGLADESH">BANGLADESH</option>
          <option value="BARBADOS">BARBADOS</option>
          <option value="BELARUS">BELARUS</option>
          <option value="BELGIUM">BELGIUM</option>
          <option value="BELIZE">BELIZE</option>
          <option value="BENIN">BENIN</option>
          <option value="BERMUDA">BERMUDA</option>
          <option value="BHUTAN">BHUTAN</option>
          <option value="BOLIVIA">BOLIVIA</option>
          <option value="BOSNIA AND HERZEGOVINA">BOSNIA AND HERZEGOVINA</option>
          <option value="BOTSWANA">BOTSWANA</option>
          <option value="BOUVET ISLAND">BOUVET ISLAND</option>
          <option value="BRAZIL">BRAZIL</option>
          <option value="BRITISH INDIAN OCEAN TERRITORY">BRITISH INDIAN OCEAN TERRITORY</option>
          <option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
          <option value="BULGARIA">BULGARIA</option>
          <option value="BURKINA FASO">BURKINA FASO</option>
          <option value="BURUNDI">BURUNDI</option>
          <option value="CAMBODIA">CAMBODIA</option>
          <option value="CAMEROON">CAMEROON</option>
          <option value="CANADA">CANADA</option>
          <option value="CAPE VERDE">CAPE VERDE</option>
          <option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
          <option value="CENTRAL AFRICAN REPUBLIC">CENTRAL AFRICAN REPUBLIC</option>
          <option value="CHAD">CHAD</option>
          <option value="CHILE">CHILE</option>
          <option value="CHINA">CHINA</option>
          <option value="CHRISTMAS ISLAND">CHRISTMAS ISLAND</option>
          <option value="COCOS (KEELING) ISLANDS">COCOS (KEELING) ISLANDS</option>
          <option value="COLOMBIA">COLOMBIA</option>
          <option value="COMOROS">COMOROS</option>
          <option value="CONGO">CONGO</option>
          <option value="CONGO, THE DEMOCRATIC REPUBLIC OF THE">CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
          <option value="COOK ISLANDS">COOK ISLANDS</option>
          <option value="COSTA RICA">COSTA RICA</option>
          <option value="COTE D'IVOIRE">COTE D'IVOIRE</option>
          <option value="CROATIA">CROATIA</option>
          <option value="CUBA">CUBA</option>
          <option value="CYPRUS">CYPRUS</option>
          <option value="CZECH REPUBLIC">CZECH REPUBLIC</option>
          <option value="DENMARK">DENMARK</option>
          <option value="DJIBOUTI">DJIBOUTI</option>
          <option value="DOMINICA">DOMINICA</option>
          <option value="DOMINICAN REPUBLIC">DOMINICAN REPUBLIC</option>
          <option value="ECUADOR">ECUADOR</option>
          <option value="EGYPT">EGYPT</option>
          <option value="EL SALVADOR">EL SALVADOR</option>
          <option value="EQUATORIAL GUINEA">EQUATORIAL GUINEA</option>
          <option value="ERITREA">ERITREA</option>
          <option value="ESTONIA">ESTONIA</option>
          <option value="ETHIOPIA">ETHIOPIA</option>
          <option value="FALKLAND ISLANDS (MALVINAS)">FALKLAND ISLANDS (MALVINAS)</option>
          <option value="FAROE ISLANDS">FAROE ISLANDS</option>
          <option value="FIJI">FIJI</option>
          <option value="FINLAND">FINLAND</option>
          <option value="FRANCE">FRANCE</option>
          <option value="FRENCH GUIANA">FRENCH GUIANA</option>
          <option value="FRENCH POLYNESIA">FRENCH POLYNESIA</option>
          <option value="FRENCH SOUTHERN TERRITORIES">FRENCH SOUTHERN TERRITORIES</option>
          <option value="GABON">GABON</option>
          <option value="GAMBIA">GAMBIA</option>
          <option value="GEORGIA">GEORGIA</option>
          <option value="GERMANY">GERMANY</option>
          <option value="GHANA">GHANA</option>
          <option value="GIBRALTAR">GIBRALTAR</option>
          <option value="GREECE">GREECE</option>
          <option value="GREENLAND">GREENLAND</option>
          <option value="GRENADA">GRENADA</option>
          <option value="GUADELOUPE">GUADELOUPE</option>
          <option value="GUAM">GUAM</option>
          <option value="GUATEMALA">GUATEMALA</option>
          <option value="GUINEA">GUINEA</option>
          <option value="GUINEA-BISSAU">GUINEA-BISSAU</option>
          <option value="GUYANA">GUYANA</option>
          <option value="HAITI">HAITI</option>
          <option value="HEARD ISLAND AND MCDONALD ISLANDS">HEARD ISLAND AND MCDONALD ISLANDS</option>
          <option value="HOLY SEE (VATICAN CITY STATE)">HOLY SEE (VATICAN CITY STATE)</option>
          <option value="HONDURAS">HONDURAS</option>
          <option value="HONG KONG">HONG KONG</option>
          <option value="HUNGARY">HUNGARY</option>
          <option value="ICELAND">ICELAND</option>
          <option value="INDIA">INDIA</option>
          <option value="INDONESIA">INDONESIA</option>
          <option value="IRAN, ISLAMIC REPUBLIC OF">IRAN, ISLAMIC REPUBLIC OF</option>
          <option value="IRAQ">IRAQ</option>
          <option value="IRELAND">IRELAND</option>
          <option value="ISRAEL">ISRAEL</option>
          <option value="ITALY">ITALY</option>
          <option value="JAMAICA">JAMAICA</option>
          <option value="JAPAN">JAPAN</option>
          <option value="JORDAN">JORDAN</option>
          <option value="KAZAKHSTAN">KAZAKHSTAN</option>
          <option value="KENYA">KENYA</option>
          <option value="KIRIBATI">KIRIBATI</option>
          <option value="KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF">KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>
          <option value="KOREA, REPUBLIC OF">KOREA, REPUBLIC OF</option>
          <option value="KUWAIT">KUWAIT</option>
          <option value="KYRGYZSTAN">KYRGYZSTAN</option>
          <option value="LAO PEOPLE'S DEMOCRATIC REPUBLIC">LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
          <option value="LATVIA">LATVIA</option>
          <option value="LEBANON">LEBANON</option>
          <option value="LESOTHO">LESOTHO</option>
          <option value="LIBERIA">LIBERIA</option>
          <option value="LIBYAN ARAB JAMAHIRIYA">LIBYAN ARAB JAMAHIRIYA</option>
          <option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
          <option value="LITHUANIA">LITHUANIA</option>
          <option value="LUXEMBOURG">LUXEMBOURG</option>
          <option value="MACAO">MACAO</option>
          <option value="MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF">MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
          <option value="MADAGASCAR">MADAGASCAR</option>
          <option value="MALAWI">MALAWI</option>
          <option value="MALAYSIA">MALAYSIA</option>
          <option value="MALDIVES">MALDIVES</option>
          <option value="MALI">MALI</option>
          <option value="MALTA">MALTA</option>
          <option value="MARSHALL ISLANDS">MARSHALL ISLANDS</option>
          <option value="MARTINIQUE">MARTINIQUE</option>
          <option value="MAURITANIA">MAURITANIA</option>
          <option value="MAURITIUS">MAURITIUS</option>
          <option value="MAYOTTE">MAYOTTE</option>
          <option value="MEXICO">MEXICO</option>
          <option value="MICRONESIA, FEDERATED STATES OF">MICRONESIA, FEDERATED STATES OF</option>
          <option value="MOLDOVA, REPUBLIC OF">MOLDOVA, REPUBLIC OF</option>
          <option value="MONACO">MONACO</option>
          <option value="MONGOLIA">MONGOLIA</option>
          <option value="MONTSERRAT">MONTSERRAT</option>
          <option value="MOROCCO">MOROCCO</option>
          <option value="MOZAMBIQUE">MOZAMBIQUE</option>
          <option value="MYANMAR">MYANMAR</option>
          <option value="NAMIBIA">NAMIBIA</option>
          <option value="NAURU">NAURU</option>
          <option value="NEPAL">NEPAL</option>
          <option value="NETHERLANDS">NETHERLANDS</option>
          <option value="NETHERLANDS ANTILLES">NETHERLANDS ANTILLES</option>
          <option value="NEW CALEDONIA">NEW CALEDONIA</option>
          <option value="NEW ZEALAND">NEW ZEALAND</option>
          <option value="NICARAGUA">NICARAGUA</option>
          <option value="NIGER">NIGER</option>
          <option value="NIGERIA">NIGERIA</option>
          <option value="NIUE">NIUE</option>
          <option value="NORFOLK ISLAND">NORFOLK ISLAND</option>
          <option value="NORTHERN MARIANA ISLANDS">NORTHERN MARIANA ISLANDS</option>
          <option value="NORWAY">NORWAY</option>
          <option value="OMAN">OMAN</option>
          <option value="PAKISTAN">PAKISTAN</option>
          <option value="PALAU">PALAU</option>
          <option value="PALESTINIAN TERRITORY, OCCUPIED">PALESTINIAN TERRITORY, OCCUPIED</option>
          <option value="PANAMA">PANAMA</option>
          <option value="PAPUA NEW GUINEA">PAPUA NEW GUINEA</option>
          <option value="PARAGUAY">PARAGUAY</option>
          <option value="PERU">PERU</option>
          <option value="PHILIPPINES">PHILIPPINES</option>
          <option value="PITCAIRN">PITCAIRN</option>
          <option value="POLAND">POLAND</option>
          <option value="PORTUGAL">PORTUGAL</option>
          <option value="PUERTO RICO">PUERTO RICO</option>
          <option value="QATAR">QATAR</option>
          <option value="REUNION">REUNION</option>
          <option value="ROMANIA">ROMANIA</option>
          <option value="RUSSIAN FEDERATION">RUSSIAN FEDERATION</option>
          <option value="RWANDA">RWANDA</option>
          <option value="SAINT HELENA">SAINT HELENA</option>
          <option value="SAINT KITTS AND NEVIS">SAINT KITTS AND NEVIS</option>
          <option value="SAINT LUCIA">SAINT LUCIA</option>
          <option value="SAINT PIERRE AND MIQUELON">SAINT PIERRE AND MIQUELON</option>
          <option value="SAINT VINCENT AND THE GRENADINES">SAINT VINCENT AND THE GRENADINES</option>
          <option value="SAMOA">SAMOA</option>
          <option value="SAN MARINO">SAN MARINO</option>
          <option value="SAO TOME AND PRINCIPE">SAO TOME AND PRINCIPE</option>
          <option value="SAUDI ARABIA">SAUDI ARABIA</option>
          <option value="SENEGAL">SENEGAL</option>
          <option value="SERBIA AND MONTENEGRO">SERBIA AND MONTENEGRO</option>
          <option value="SEYCHELLES">SEYCHELLES</option>
          <option value="SIERRA LEONE">SIERRA LEONE</option>
          <option value="SINGAPORE">SINGAPORE</option>
          <option value="SLOVAKIA">SLOVAKIA</option>
          <option value="SLOVENIA">SLOVENIA</option>
          <option value="SOLOMON ISLANDS">SOLOMON ISLANDS</option>
          <option value="SOMALIA">SOMALIA</option>
          <option value="SOUTH AFRICA">SOUTH AFRICA</option>
          <option value="SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
          <option value="SPAIN">SPAIN</option>
          <option value="SRI LANKA">SRI LANKA</option>
          <option value="SUDAN">SUDAN</option>
          <option value="SURINAME">SURINAME</option>
          <option value="SVALBARD AND JAN MAYEN">SVALBARD AND JAN MAYEN</option>
          <option value="SWAZILAND">SWAZILAND</option>
          <option value="SWEDEN">SWEDEN</option>
          <option value="SWITZERLAND">SWITZERLAND</option>
          <option value="SYRIAN ARAB REPUBLIC">SYRIAN ARAB REPUBLIC</option>
          <option value="TAIWAN, PROVINCE OF CHINA">TAIWAN, PROVINCE OF CHINA</option>
          <option value="TAJIKISTAN">TAJIKISTAN</option>
          <option value="TANZANIA, UNITED REPUBLIC OF">TANZANIA, UNITED REPUBLIC OF</option>
          <option value="THAILAND">THAILAND</option>
          <option value="TIMOR-LESTE">TIMOR-LESTE</option>
          <option value="TOGO">TOGO</option>
          <option value="TOKELAU">TOKELAU</option>
          <option value="TONGA">TONGA</option>
          <option value="TRINIDAD AND TOBAGO">TRINIDAD AND TOBAGO</option>
          <option value="TUNISIA">TUNISIA</option>
          <option value="TURKEY">TURKEY</option>
          <option value="TURKMENISTAN">TURKMENISTAN</option>
          <option value="TURKS AND CAICOS ISLANDS">TURKS AND CAICOS ISLANDS</option>
          <option value="TUVALU">TUVALU</option>
          <option value="UGANDA">UGANDA</option>
          <option value="UKRAINE">UKRAINE</option>
          <option value="UNITED ARAB EMIRATES">UNITED ARAB EMIRATES</option>
          <option value="UNITED KINGDOM">UNITED KINGDOM</option>
          <option value="UNITED STATES">UNITED STATES</option>
          <option value="UNITED STATES MINOR OUTLYING ISLANDS">UNITED STATES MINOR OUTLYING ISLANDS</option>
          <option value="URUGUAY">URUGUAY</option>
          <option value="UZBEKISTAN">UZBEKISTAN</option>
          <option value="VANUATU">VANUATU</option>
          <option value="VENEZUELA">VENEZUELA</option>
          <option value="VIET NAM">VIET NAM</option>
          <option value="VIRGIN ISLANDS, BRITISH">VIRGIN ISLANDS, BRITISH</option>
          <option value="VIRGIN ISLANDS, U.S.">VIRGIN ISLANDS, U.S.</option>
          <option value="WALLIS AND FUTUNA">WALLIS AND FUTUNA</option>
          <option value="WESTERN SAHARA">WESTERN SAHARA</option>
          <option value="YEMEN">YEMEN</option>
          <option value="ZAMBIA">ZAMBIA</option>
          <option value="ZIMBABWE">ZIMBABWE</option>
        </select>

        @error('country')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror

      </div>

      <button type="submit" class="btn"><h4>Sign up </h4></button>
    </form>
  </div>


    


    <!-- Essential javascripts for application to work-->
    @include ('backend.partials.script');

  </body>
  </html>