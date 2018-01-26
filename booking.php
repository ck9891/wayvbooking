<?php //Booking page


$servername = "localhost";
$username = "root";
$password = "root";
?>

<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>WAYV Booking</title>
    <meta name="keywords" content="Travel Booking">
    <meta name="description" content="Lets book your next vacation.">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="multi-step-form.js"></script>
    <script src="jquery.steps.min.js"></script>
    <link rel="stylesheet" href="booking-styles.css">
    <link rel="stylesheet" href="https://use.typekit.net/rur4dbk.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</head>

<body>

    <section class="header-section">
        <img src="img/booking-banner1.png" />
        <div class="text-container">
            <h1 class="white-text">Book Your Own Yacht</h1>
        </div>
    </section>
    <section class="steps dark-blue-bg">
        <div class="wrapper-900">
            <ul id="setIndicator" class="white-text">
                <li>Dates</li>
                <li>Yacht</li>
                <li>Personalize</li>
                <li>Traveller Info</li>
                <li>Confirmation</li>
                <li>Payment</li>
            </ul>
        </div>
    </section>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" id="msform">
        <fieldset class="tab active">
            <section id="travelDates" class="page-section">
                <h2 class="section-title">Book Your Own Yacht</h2>
                <img src="img/blue-wayv.png" alt="" class="wayv-icon" />
                <p class="sub-title">Select Your Dates</p>
                <div id="datepicker"></div>

                <p>Date: <input type="text" id="datepicker2" disabled></p>
                <input type="checkbox" name="tagalong" value="tagalong">
                <p>Tag a long with us! <span class="orange-text">Show WAYV Travel Dates(?)</span></p>
            </section>

            <section id="numberTravellers" class="page-section">
                <h2 class="section-title">Confirm Number of Travellers</h2>
                <img src="img/blue-wayv.png" alt="" class="wayv-icon" />
                <p class="sub-title">Fill Your Yachts With Friends and Travel Staff</p>
                <div class="row">
                    <div class="col-6">
                        <p class="range-input">
                            Male: <input type="range" name="male" min="0" max="10">
                        </p>
                        <p class="range-input">
                            Female: <input type="range" name="female" min="0" max="10">
                        </p>

                    </div>
                    <div class="col-6 ratio">
                        <h3 class="blue-text">Gender Ratio(?)</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id fermentum magna, at tincidunt enim. Nullam condimentum semper ex quis egestas. </p>
                    </div>
                </div>
                <p class="staff-input"><input type="checkbox" name="add-skipper" value="skipper"> Add skipper</p>
                <p class="staff-input"><input type="checkbox" name="add-hostess" value="hostess"> Add Hostess</p>
                <div class="total-travellers">
                    <p class="total-text white-text">Traveller Total: 7</p>
                </div>
            </section>
            <section class="page-section" id="selectYacht">
                <h2 class="section-title">Select Your Yacht Style</h2>
                <img src="img/blue-wayv.png" alt="" class="wayv-icon" />
                <p class="sub-title blue-text">Use the Toggle to view alternative options.(?)</p>
                <div class="wrapper-900">
                    <div class="slide-container mySlides" style="width:100%;">
                        <div class="row slider-row-padding">
                            <div class="col-6">
                                <div class="yacht-featured">
                                    <img src="img/feature-boat.png" alt="featured yacht image" />
                                </div>
                                <div class="row other-images">
                                    <div class="col-4"><img src="img/boat-image.png" alt="boat image" /></div>
                                    <div class="col-4"><img src="img/boat-image.png" alt="boat image" /></div>
                                    <div class="col-4"><img src="img/boat-image.png" alt="boat image" /></div>
                                    <div class="col-4"><img src="img/boat-image.png" alt="boat image" /></div>
                                </div>
                            </div>
                            <div class="col-6 yacht-details">
                                <h3 class="yacht-title">Yacht Option #1</h3>
                                <div class="indent">
                                    <p class="yacht-text starting-price orange-text">
                                        Starting at $XXXX
                                    </p>
                                    <p class="blue-text yacht-text">Description:</p>
                                    <p class="yacht-description-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id fermentum magna, at tincidunt enim. Nullam condimentum semper ex quis egestas.
                                    </p>
                                    <p class="blue-text yacht-text">Sleeps:</p>
                                    <p class="yacht-description-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                                <div class="yacht-more-info">
                                    <a href="#" class="wayv-btn orange-bg blue-hover">More Info</a>
                                    <div class="button-wrap">
                                        <input class="hidden radio-label wayv-btn" type="radio" name="select_yacht" id="yes-button" value="yacht1" />
                                        <label class="button-label wayv-btn orange-bg blue-hover" for="yes-button">
      <h1>Select this Yacht</h1>
    </label>
                                        <!--
    <input class="hidden radio-label" type="radio" name="select_yacht" id="no-button"  value="yacht1"/>
    <label class="button-label wayv-btn orange-bg blue-hover" for="no-button">
      <h1>No</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="select_yacht" id="maybe-button"/>
    <label class="button-label wayv-btn orange-bg blue-hover" for="maybe-button">
      <h1>Maybe</h1>
    </label>
-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-container mySlides" style="width:100%;">
                        <div class="row slider-row-padding">
                            <div class="col-6">
                                <div class="yacht-featured">
                                    <img src="img/feature-boat.png" alt="featured yacht image" />
                                </div>
                                <div class="row other-images">
                                    <div class="col-4"><img src="img/boat-image.png" alt="boat image" /></div>
                                    <div class="col-4"><img src="img/boat-image.png" alt="boat image" /></div>
                                    <div class="col-4"><img src="img/boat-image.png" alt="boat image" /></div>
                                    <div class="col-4"><img src="img/boat-image.png" alt="boat image" /></div>
                                </div>
                            </div>
                            <div class="col-6 yacht-details">
                                <h3 class="yacht-title">Yacht Option #2</h3>
                                <div class="indent">
                                    <p class="yacht-text starting-price orange-text">
                                        Starting at $XXXX
                                    </p>
                                    <p class="blue-text yacht-text">Description:</p>
                                    <p class="yacht-description-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id fermentum magna, at tincidunt enim. Nullam condimentum semper ex quis egestas.
                                    </p>
                                    <p class="blue-text yacht-text">Sleeps:</p>
                                    <p class="yacht-description-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                                <div class="yacht-more-info">
                                    <a href="#" class="wayv-btn orange-bg blue-hover">More Info</a>
                                    <div class="button-wrap">
                                        <input class="hidden radio-label wayv-btn" type="radio" name="select_yacht" id="yes-button" value="yacht2" />
                                        <label class="button-label wayv-btn orange-bg blue-hover" for="yes-button">
      <h1>Select this Yacht</h1>
    </label>
                                        <!--
    <input class="hidden radio-label" type="radio" name="select_yacht" id="no-button"  value="yacht1"/>
    <label class="button-label wayv-btn orange-bg blue-hover" for="no-button">
      <h1>No</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="select_yacht" id="maybe-button"/>
    <label class="button-label wayv-btn orange-bg blue-hover" for="maybe-button">
      <h1>Maybe</h1>
    </label>
-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
                </div>
            </section>
            <section id="personalizeExp" class="page-section">

                <div class="row">
                    <div class="col-6 additions">
                        <h2 class="section-title">Personalize Your Experience</h2>
                        <p class="sub-title blue-text">Make it A trip of a lifetime.</p>
                        <ul>
                            <li><input type="checkbox" name="add-hostess1" value="hostess">
                                <p>Add Skipper / Hostess <span class="add-price orange-text">[+100]</span>(?)</p>
                            </li>
                            <li><input type="checkbox" name="add-hostess2" value="hostess">
                                <p>Add Skipper / Hostess <span class="add-price orange-text">[+100]</span>(?)</p>
                            </li>
                            <li><input type="checkbox" name="add-hostess3" value="hostess">
                                <p>Add Skipper / Hostess <span class="add-price orange-text">[+100]</span>(?)</p>
                            </li>
                            <li><input type="checkbox" name="add-hostess4" value="hostess">
                                <p>Add Skipper / Hostess <span class="add-price orange-text">[+100]</span>(?)</p>
                            </li>
                            <li><input type="checkbox" name="add-hostess5" value="hostess">
                                <p>Add Skipper / Hostess <span class="add-price orange-text">[+100]</span>(?)</p>
                            </li>
                            <li><input type="checkbox" name="add-hostess6" value="hostess">
                                <p>Add Skipper / Hostess <span class="add-price orange-text">[+100]</span>(?)</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 booking-overview">
                        <h3 class="yacht-title"> <img src="img/blue-wayv.png" alt="" class="wayv-icon" />Overview</h3>
                        <div class="yacht-selection">
                            <div class="row">
                                <div class="col-4">
                                    <img src="img/boat-booking.png" alt="yacht" class="yacht-selection-img" />
                                </div>
                                <div class="col-6 margin-more yacht-booking-details">
                                    <h4 class="blue-text">Yacht Option #1</h4>
                                    <p class="blue-text">Destination:</p>
                                    <p class="orange-text">Thailand</p>

                                </div>

                            </div>
                            <p class="yacht-description-text grey-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id fermentum magna, at tincidunt enim. Nullam condimentum semper ex quis egestas.
                            </p>
                        </div>
                        <ul id="addOn">
                            <li><span class="blue-text">Add On:</span></li>
                            <li><span class="blue-text">Add On:</span></li>
                            <li><span class="blue-text">Add On:</span></li>
                            <li><span class="blue-text">Add On:</span></li>
                            <li><span class="blue-text">Add On:</span></li>
                        </ul>
                        <div class="total dark-blue-bg">
                            <p class="white-text">Total: $XXXX USD</p>
                        </div>
                        <div class="per-person orange-bg">
                            <p class="white-text">Per Person Total: $XXXX USD</p>
                        </div>
                    </div>
                </div>
            </section>
         
            <a href="#" class="next-form wayv-btn next blue-bg orange-hover white-text">Proceed to Traveller Info</a>

        </fieldset>
        <fieldset class="tab">
            <section class="page-section traveller-info">
                <h2 class="section-title">Lead Traveller Information</h2>
                <img src="img/blue-wayv.png" alt="" class="wayv-icon" />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id fermentum magna, at tincidunt enim. Nullam condimentum semper ex quis egestas.</p>
                <div class="row">
                    <div class="col-6 offset-3">
                        <p>
                            <input type="text" name="firstname" value="First Name" id="firstName">
                            <input type="text" name="lastname" value="Last Name" id="lastName">
                        </p>
                        <p>
                            DOB <select id='gMonth2' name="gMonth2">
					    <option value=''>--Select Month--</option>
					    <option selected value='1'>January</option>
					    <option value='2'>February</option>
					    <option value='3'>March</option>
					    <option value='4'>April</option>
					    <option value='5'>May</option>
					    <option value='6'>June</option>
					    <option value='7'>July</option>
					    <option value='8'>August</option>
					    <option value='9'>September</option>
					    <option value='10'>October</option>
					    <option value='11'>November</option>
					    <option value='12'>December</option>
				    </select>
                            <select name="day">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
     </select>
                            <select name="year">
          <option value="2014">2014</option>
          <option value="2013">2013</option>
          <option value="2012">2012</option>
          <option value="2011">2011</option>
          <option value="2010">2010</option>
          <option value="2009">2009</option>
          <option value="2008">2008</option>
          <option value="2007">2007</option>
          <option value="2006">2006</option>
          <option value="2005">2005</option>
          <option value="2004">2004</option>
          <option value="2003">2003</option>
          <option value="2002">2002</option>
          <option value="2001">2001</option>
          <option value="2000">2000</option>
          <option value="1999">1999</option>
          <option value="1998">1998</option>
          <option value="1997">1997</option>
          <option value="1996">1996</option>
          <option value="1995">1995</option>
          <option value="1994">1994</option>
          <option value="1993">1993</option>
          <option value="1992">1992</option>
          <option value="1991">1991</option>
          <option value="1990">1990</option>
          <option value="1989">1989</option>
          <option value="1988">1988</option>
          <option value="1987">1987</option>
          <option value="1986">1986</option>
          <option value="1985">1985</option>
          <option value="1984">1984</option>
          <option value="1983">1983</option>
          <option value="1982">1982</option>
          <option value="1981">1981</option>
          <option value="1980">1980</option>
          <option value="1979">1979</option>
          <option value="1978">1978</option>
          <option value="1977">1977</option>
          <option value="1976">1976</option>
          <option value="1975">1975</option>
          <option value="1974">1974</option>
          <option value="1973">1973</option>
          <option value="1972">1972</option>
          <option value="1971">1971</option>
          <option value="1970">1970</option>
          <option value="1969">1969</option>
          <option value="1968">1968</option>
          <option value="1967">1967</option>
          <option value="1966">1966</option>
          <option value="1965">1965</option>
          <option value="1964">1964</option>
          <option value="1963">1963</option>
          <option value="1962">1962</option>
          <option value="1961">1961</option>
          <option value="1960">1960</option>
          <option value="1959">1959</option>
          <option value="1958">1958</option>
          <option value="1957">1957</option>
          <option value="1956">1956</option>
          <option value="1955">1955</option>
          <option value="1954">1954</option>
          <option value="1953">1953</option>
          <option value="1952">1952</option>
          <option value="1951">1951</option>
          <option value="1950">1950</option>
          <option value="1949">1949</option>
          <option value="1948">1948</option>
          <option value="1947">1947</option>
          <option value="1946">1946</option>
          <option value="1945">1945</option>
          <option value="1944">1944</option>
          <option value="1943">1943</option>
          <option value="1942">1942</option>
          <option value="1941">1941</option>
          <option value="1940">1940</option>
          <option value="1939">1939</option>
          <option value="1938">1938</option>
          <option value="1937">1937</option>
          <option value="1936">1936</option>
          <option value="1935">1935</option>
          <option value="1934">1934</option>
          <option value="1933">1933</option>
          <option value="1932">1932</option>
          <option value="1931">1931</option>
          <option value="1930">1930</option>
          <option value="1929">1929</option>
          <option value="1928">1928</option>
          <option value="1927">1927</option>
          <option value="1926">1926</option>
          <option value="1925">1925</option>
          <option value="1924">1924</option>
          <option value="1923">1923</option>
          <option value="1922">1922</option>
          <option value="1921">1921</option>
          <option value="1920">1920</option>
          <option value="1919">1919</option>
          <option value="1918">1918</option>
          <option value="1917">1917</option>
          <option value="1916">1916</option>
          <option value="1915">1915</option>
          <option value="1914">1914</option>
          <option value="1913">1913</option>
          <option value="1912">1912</option>
          <option value="1911">1911</option>
          <option value="1910">1910</option>
          <option value="1909">1909</option>
          <option value="1908">1908</option>
          <option value="1907">1907</option>
          <option value="1906">1906</option>
          <option value="1905">1905</option>
          <option value="1904">1904</option>
          <option value="1903">1903</option>
          <option value="1902">1902</option>
          <option value="1901">1901</option>
          <option value="1900">1900</option>
     </select>
                            <input type="text" name="age" value="age" id="age" />
                        </p>
                        <p>
                            <input type="radio" name="gender" value="male" checked> Male
                            <input type="radio" name="gender" value="female"> Female
                            <input type="checkbox" name="contact-email" value="contact-email"> Contact me via E-Mail
                            <input type="checkbox" name="contact-email" value="contact-phone"> Contact me by Phone
                        </p>
                        <p>
                            <input type="email" name="email" id="email" placeholder="E-Mail">
                            <input type="tel" name="usrtel" id="phone">
                        </p>
                        <p>
                            <input type="text" name="address1" id="address1" value="address1" placeholder="Address">
                        </p>
                        <p>
                            <input type="text" name="city" id="city" value="city" placeholder="City">
                            <input type="text" name="pc-zip" id="pc-zip" value="pc-zip" placeholder="Postal Code/ZIP">
                        </p>
                        <p>
                            <select name="province-states" id="provinceStates">
			<option value="AB">Alberta</option>
	<option value="BC">British Columbia</option>
	<option value="MB">Manitoba</option>
	<option value="NB">New Brunswick</option>
	<option value="NL">Newfoundland and Labrador</option>
	<option value="NS">Nova Scotia</option>
	<option value="ON">Ontario</option>
	<option value="PE">Prince Edward Island</option>
	<option value="QC">Quebec</option>
	<option value="SK">Saskatchewan</option>
	<option value="NT">Northwest Territories</option>
	<option value="NU">Nunavut</option>
	<option value="YT">Yukon</option>
				<option value="">States</option>

	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
                            <select name="country" id="country">
	<option value="AFG">Afghanistan</option>
	<option value="ALA">Åland Islands</option>
	<option value="ALB">Albania</option>
	<option value="DZA">Algeria</option>
	<option value="ASM">American Samoa</option>
	<option value="AND">Andorra</option>
	<option value="AGO">Angola</option>
	<option value="AIA">Anguilla</option>
	<option value="ATA">Antarctica</option>
	<option value="ATG">Antigua and Barbuda</option>
	<option value="ARG">Argentina</option>
	<option value="ARM">Armenia</option>
	<option value="ABW">Aruba</option>
	<option value="AUS">Australia</option>
	<option value="AUT">Austria</option>
	<option value="AZE">Azerbaijan</option>
	<option value="BHS">Bahamas</option>
	<option value="BHR">Bahrain</option>
	<option value="BGD">Bangladesh</option>
	<option value="BRB">Barbados</option>
	<option value="BLR">Belarus</option>
	<option value="BEL">Belgium</option>
	<option value="BLZ">Belize</option>
	<option value="BEN">Benin</option>
	<option value="BMU">Bermuda</option>
	<option value="BTN">Bhutan</option>
	<option value="BOL">Bolivia, Plurinational State of</option>
	<option value="BES">Bonaire, Sint Eustatius and Saba</option>
	<option value="BIH">Bosnia and Herzegovina</option>
	<option value="BWA">Botswana</option>
	<option value="BVT">Bouvet Island</option>
	<option value="BRA">Brazil</option>
	<option value="IOT">British Indian Ocean Territory</option>
	<option value="BRN">Brunei Darussalam</option>
	<option value="BGR">Bulgaria</option>
	<option value="BFA">Burkina Faso</option>
	<option value="BDI">Burundi</option>
	<option value="KHM">Cambodia</option>
	<option value="CMR">Cameroon</option>
	<option value="CAN">Canada</option>
	<option value="CPV">Cape Verde</option>
	<option value="CYM">Cayman Islands</option>
	<option value="CAF">Central African Republic</option>
	<option value="TCD">Chad</option>
	<option value="CHL">Chile</option>
	<option value="CHN">China</option>
	<option value="CXR">Christmas Island</option>
	<option value="CCK">Cocos (Keeling) Islands</option>
	<option value="COL">Colombia</option>
	<option value="COM">Comoros</option>
	<option value="COG">Congo</option>
	<option value="COD">Congo, the Democratic Republic of the</option>
	<option value="COK">Cook Islands</option>
	<option value="CRI">Costa Rica</option>
	<option value="CIV">Côte d'Ivoire</option>
	<option value="HRV">Croatia</option>
	<option value="CUB">Cuba</option>
	<option value="CUW">Curaçao</option>
	<option value="CYP">Cyprus</option>
	<option value="CZE">Czech Republic</option>
	<option value="DNK">Denmark</option>
	<option value="DJI">Djibouti</option>
	<option value="DMA">Dominica</option>
	<option value="DOM">Dominican Republic</option>
	<option value="ECU">Ecuador</option>
	<option value="EGY">Egypt</option>
	<option value="SLV">El Salvador</option>
	<option value="GNQ">Equatorial Guinea</option>
	<option value="ERI">Eritrea</option>
	<option value="EST">Estonia</option>
	<option value="ETH">Ethiopia</option>
	<option value="FLK">Falkland Islands (Malvinas)</option>
	<option value="FRO">Faroe Islands</option>
	<option value="FJI">Fiji</option>
	<option value="FIN">Finland</option>
	<option value="FRA">France</option>
	<option value="GUF">French Guiana</option>
	<option value="PYF">French Polynesia</option>
	<option value="ATF">French Southern Territories</option>
	<option value="GAB">Gabon</option>
	<option value="GMB">Gambia</option>
	<option value="GEO">Georgia</option>
	<option value="DEU">Germany</option>
	<option value="GHA">Ghana</option>
	<option value="GIB">Gibraltar</option>
	<option value="GRC">Greece</option>
	<option value="GRL">Greenland</option>
	<option value="GRD">Grenada</option>
	<option value="GLP">Guadeloupe</option>
	<option value="GUM">Guam</option>
	<option value="GTM">Guatemala</option>
	<option value="GGY">Guernsey</option>
	<option value="GIN">Guinea</option>
	<option value="GNB">Guinea-Bissau</option>
	<option value="GUY">Guyana</option>
	<option value="HTI">Haiti</option>
	<option value="HMD">Heard Island and McDonald Islands</option>
	<option value="VAT">Holy See (Vatican City State)</option>
	<option value="HND">Honduras</option>
	<option value="HKG">Hong Kong</option>
	<option value="HUN">Hungary</option>
	<option value="ISL">Iceland</option>
	<option value="IND">India</option>
	<option value="IDN">Indonesia</option>
	<option value="IRN">Iran, Islamic Republic of</option>
	<option value="IRQ">Iraq</option>
	<option value="IRL">Ireland</option>
	<option value="IMN">Isle of Man</option>
	<option value="ISR">Israel</option>
	<option value="ITA">Italy</option>
	<option value="JAM">Jamaica</option>
	<option value="JPN">Japan</option>
	<option value="JEY">Jersey</option>
	<option value="JOR">Jordan</option>
	<option value="KAZ">Kazakhstan</option>
	<option value="KEN">Kenya</option>
	<option value="KIR">Kiribati</option>
	<option value="PRK">Korea, Democratic People's Republic of</option>
	<option value="KOR">Korea, Republic of</option>
	<option value="KWT">Kuwait</option>
	<option value="KGZ">Kyrgyzstan</option>
	<option value="LAO">Lao People's Democratic Republic</option>
	<option value="LVA">Latvia</option>
	<option value="LBN">Lebanon</option>
	<option value="LSO">Lesotho</option>
	<option value="LBR">Liberia</option>
	<option value="LBY">Libya</option>
	<option value="LIE">Liechtenstein</option>
	<option value="LTU">Lithuania</option>
	<option value="LUX">Luxembourg</option>
	<option value="MAC">Macao</option>
	<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
	<option value="MDG">Madagascar</option>
	<option value="MWI">Malawi</option>
	<option value="MYS">Malaysia</option>
	<option value="MDV">Maldives</option>
	<option value="MLI">Mali</option>
	<option value="MLT">Malta</option>
	<option value="MHL">Marshall Islands</option>
	<option value="MTQ">Martinique</option>
	<option value="MRT">Mauritania</option>
	<option value="MUS">Mauritius</option>
	<option value="MYT">Mayotte</option>
	<option value="MEX">Mexico</option>
	<option value="FSM">Micronesia, Federated States of</option>
	<option value="MDA">Moldova, Republic of</option>
	<option value="MCO">Monaco</option>
	<option value="MNG">Mongolia</option>
	<option value="MNE">Montenegro</option>
	<option value="MSR">Montserrat</option>
	<option value="MAR">Morocco</option>
	<option value="MOZ">Mozambique</option>
	<option value="MMR">Myanmar</option>
	<option value="NAM">Namibia</option>
	<option value="NRU">Nauru</option>
	<option value="NPL">Nepal</option>
	<option value="NLD">Netherlands</option>
	<option value="NCL">New Caledonia</option>
	<option value="NZL">New Zealand</option>
	<option value="NIC">Nicaragua</option>
	<option value="NER">Niger</option>
	<option value="NGA">Nigeria</option>
	<option value="NIU">Niue</option>
	<option value="NFK">Norfolk Island</option>
	<option value="MNP">Northern Mariana Islands</option>
	<option value="NOR">Norway</option>
	<option value="OMN">Oman</option>
	<option value="PAK">Pakistan</option>
	<option value="PLW">Palau</option>
	<option value="PSE">Palestinian Territory, Occupied</option>
	<option value="PAN">Panama</option>
	<option value="PNG">Papua New Guinea</option>
	<option value="PRY">Paraguay</option>
	<option value="PER">Peru</option>
	<option value="PHL">Philippines</option>
	<option value="PCN">Pitcairn</option>
	<option value="POL">Poland</option>
	<option value="PRT">Portugal</option>
	<option value="PRI">Puerto Rico</option>
	<option value="QAT">Qatar</option>
	<option value="REU">Réunion</option>
	<option value="ROU">Romania</option>
	<option value="RUS">Russian Federation</option>
	<option value="RWA">Rwanda</option>
	<option value="BLM">Saint Barthélemy</option>
	<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KNA">Saint Kitts and Nevis</option>
	<option value="LCA">Saint Lucia</option>
	<option value="MAF">Saint Martin (French part)</option>
	<option value="SPM">Saint Pierre and Miquelon</option>
	<option value="VCT">Saint Vincent and the Grenadines</option>
	<option value="WSM">Samoa</option>
	<option value="SMR">San Marino</option>
	<option value="STP">Sao Tome and Principe</option>
	<option value="SAU">Saudi Arabia</option>
	<option value="SEN">Senegal</option>
	<option value="SRB">Serbia</option>
	<option value="SYC">Seychelles</option>
	<option value="SLE">Sierra Leone</option>
	<option value="SGP">Singapore</option>
	<option value="SXM">Sint Maarten (Dutch part)</option>
	<option value="SVK">Slovakia</option>
	<option value="SVN">Slovenia</option>
	<option value="SLB">Solomon Islands</option>
	<option value="SOM">Somalia</option>
	<option value="ZAF">South Africa</option>
	<option value="SGS">South Georgia and the South Sandwich Islands</option>
	<option value="SSD">South Sudan</option>
	<option value="ESP">Spain</option>
	<option value="LKA">Sri Lanka</option>
	<option value="SDN">Sudan</option>
	<option value="SUR">Suriname</option>
	<option value="SJM">Svalbard and Jan Mayen</option>
	<option value="SWZ">Swaziland</option>
	<option value="SWE">Sweden</option>
	<option value="CHE">Switzerland</option>
	<option value="SYR">Syrian Arab Republic</option>
	<option value="TWN">Taiwan, Province of China</option>
	<option value="TJK">Tajikistan</option>
	<option value="TZA">Tanzania, United Republic of</option>
	<option value="THA">Thailand</option>
	<option value="TLS">Timor-Leste</option>
	<option value="TGO">Togo</option>
	<option value="TKL">Tokelau</option>
	<option value="TON">Tonga</option>
	<option value="TTO">Trinidad and Tobago</option>
	<option value="TUN">Tunisia</option>
	<option value="TUR">Turkey</option>
	<option value="TKM">Turkmenistan</option>
	<option value="TCA">Turks and Caicos Islands</option>
	<option value="TUV">Tuvalu</option>
	<option value="UGA">Uganda</option>
	<option value="UKR">Ukraine</option>
	<option value="ARE">United Arab Emirates</option>
	<option value="GBR">United Kingdom</option>
	<option value="USA">United States</option>
	<option value="UMI">United States Minor Outlying Islands</option>
	<option value="URY">Uruguay</option>
	<option value="UZB">Uzbekistan</option>
	<option value="VUT">Vanuatu</option>
	<option value="VEN">Venezuela, Bolivarian Republic of</option>
	<option value="VNM">Viet Nam</option>
	<option value="VGB">Virgin Islands, British</option>
	<option value="VIR">Virgin Islands, U.S.</option>
	<option value="WLF">Wallis and Futuna</option>
	<option value="ESH">Western Sahara</option>
	<option value="YEM">Yemen</option>
	<option value="ZMB">Zambia</option>
	<option value="ZWE">Zimbabwe</option>
</select>
                        </p>
                        <p>
                            <select name="nationality">
  <option value="">-- select one --</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>
                        </p>
                    </div>
                </div>
                <div class="add-traveller orange-bg">
                    <p class="white-text">
                        Add Traveller <span class="light-blue-text">+</span>
                    </p>
                </div>
                <div class="invite-friends dark-blue-bg">
                    <p class="white-text">
                        Invite Friends via Facebook <span class="light-blue-text">+</span>
                    </p>
                </div>
            </section>
            <a href="#" class="next wayv-btn orange-bg blue-hover white-text">
		Proceed to Confirmation
	</a>
        </fieldset>
        <fieldset class="tab">
            <section class="page-section" id="yachtConfirmation">
                <h2 class="section-title vacation-name">Bali Vacation</h2>
                <img src="img/blue-wayv.png" alt="" class="wayv-icon" />
                <p class="sub-title blue-text">October 14 - October 21, 2018</p>
                <div class="row">
                    <div class="col-6">
                        <div class="yacht-featured">
                            <img src="img/feature-boat.png" alt="featured yacht image" />
                        </div>
                        <div class="row">
                            <div class="col-4"><img src="img/boat-image.png" alt="boat image" /></div>
                            <div class="col-4"><img src="img/boat-image.png" alt="boat image" /></div>
                            <div class="col-4"><img src="img/boat-image.png" alt="boat image" /></div>
                            <div class="col-4"><img src="img/boat-image.png" alt="boat image" /></div>
                        </div>
                    </div>
                    <div class="col-6 yacht-confirmation-details">
                        <h3 class="yacht-title">The Marilynn</h3>
                        <p class="yacht-text starting-price orange-text">
                            Cost Per Person: $XXXX
                        </p>
                        <p class="blue-text yacht-text">Description:</p>
                        <p class="yacht-description-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id fermentum magna, at tincidunt enim. Nullam condimentum semper ex quis egestas.
                        </p>
                        <p class="blue-text yacht-text">Departs From:</p>
                        <p class="yacht-description-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <div class="yacht-more-info">
                            <a href="#" class="wayv-btn orange-bg blue-hover">More Info</a>
                            <a href="#" class="wayv-btn orange-bg blue-hover">Select this yacht</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page-section" id="yachtInfo">
                <div class="wrapper-900">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="blue-text">What's Included</h3>
                            <ul id="included">
                                <li>Yacht For 7 days</li>
                                <li>Professional Skipper</li>
                                <li>Access to all WAYV events</li>
                                <li>Tailored itinerary</li>
                                <li>Dinghy & outboard engine</li>
                                <li>Yacht equipment</li>
                                <li>GPS & nautical charts</li>
                                <li>Stereo & cockpit speakers</li>
                                <li>Final Cleaning of the Yacht</li>
                            </ul>

                        </div>
                        <div class="col-6">
                            <h3 class="blue-text">Vessel Layout</h3>
                            <img src="#" alt="vessel layout">
                            <a href="#" class="wayv-btn blue-bg orange-hover white-text">Download Full Specs</a>
                            <h3 class="blue-text">Sleeping Arrangements</h3>
                            <p class="grey-text yacht-text-smaller">This yacht sleeps up to 12 people:</p>
                            <ul class="grey-text">
                                <li>4 double cabins: 8 spots</li>
                                <li>1 bunk bed cabin: 2 spots</li>
                                <li>1 saloon: 1 spot</li>
                                <li>1 skipper cabin: 1 spot (for WAYV staff)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h3 class="blue-text">Security Deposit</h3>
                            <p class="grey-text">Usually Thailand is a no visa requirement for stay under 30 days. For longer stays, visitors can apply for a 2 x 2 month Visa in any Thai embassy in the world..</p>
                        </div>
                        <div class="col-6">
                            <h3 class="blue-text">Extras</h3>
                            <p class="grey-text yacht-text-smaller">Usually Thailand is a no visa requirement for stay under 30 days. For longer stays, visitors can apply for a 2 x 2 month Visa in any Thai embassy in the world..</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 destination-list">
                            <h3>Additional Costs</h3>
                            <ul>
                                <li>Yacht deposit to be paid upon check-in</li>
                                <li>Mooring fee(s)</li>
                                <li>Skipper, Chef and Crew gratuity</li>
                                <li>Flights</li>
                            </ul>

                        </div>

                    </div>
                </div>
            </section>
            <section class="page-section" id="AddOns">
                <div class="wrapper-900">
                    <h2 class="section-title vacation-name">Add-Ons</h2>
                    <img src="img/blue-wayv.png" alt="" class="wayv-icon" />
                    <p class="sub-title blue-text">October 14 - October 21, 2018</p>
                    <table class="no-border blue-text" cellspacing="0" id="addonTable">
                        <tr class="due-today">
                            <td class="blue-text">Add On:</td>
                            <td>Add Skipper/Hostess</td>
                            <td class="orange-text">[+100](?)</td>
                        </tr>
                        <tr>
                            <td class="blue-text">Add On:</td>
                            <td>Add Skipper/Hostess</td>
                            <td class="orange-text">[+100](?)</td>
                        </tr>
                        <tr>
                            <td class="blue-text">Add On:</td>
                            <td>Add Skipper/Hostess</td>
                            <td class="orange-text">[+100](?)</td>
                        </tr>
                        <tr class="dark-blue-bg total-row">
                            <td class="white-text text-left" colspan="2">Total Cost of Add-ons</td>
                            <td class="white-text">$XXXX USD</td>
                        </tr>
                        <tr class="orange-bg total-row">
                            <td class="white-text text-left" colspan="2">Total Cost of Add-ons Per Person</td>
                            <td class="white-text">$XXXX USD</td>
                        </tr>
                    </table>
                </div>
            </section>
            <a href="#" class="wayv-btn blue-bg orange-hover next">Proceed to Breakdown</a>
        </fieldset>
        <fieldset class="tab">
            <section id="costBreakdown" class="page-section">
                <div class="wrapper-900">
                    <h2 class="section-title">Breakdown</h2>
                    <img src="img/blue-wayv.png" alt="" class="wayv-icon" />
                    <p class="sub-title">Fill Your yacht with friends and WAYV travel staff.</p>
                    <div class="row">
                        <div class="col-6 breakdown">
                            <h3 class="yacht-title"> <img src="img/blue-wayv.png" alt="" class="wayv-icon" />Crew</h3>
                            <ul id="breakdown-crew" class="grey-bg">
                                <li><span class="blue-text">Crew:</span><span class="text-right">2 Guests</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h3 class="yacht-title"> <img src="img/blue-wayv.png" alt="" class="wayv-icon" />Cost Breakdown</h3>
                            <ul id="breakdown-travellers">
                                <li><span class="blue-text">Travellers:</span>7</li>
                            </ul>

                        </div>
                    </div>

                    <div class="total orange-bg">
                        <p class="white-text">Grand Total: $XXXX USD</p>
                    </div>
                    <div class="per-person dark-blue-bg">
                        <p class="white-text">Per Person Total: $XXXX USD</p>
                    </div>
                    <p class="disclaimer-text">When you book a cabin rather than a yacht, the Skipper and Hostess costs are included in the price. repudiandae sint et molestiae non recusandae</p>
                </div>
            </section>
            <section class="page-section" id="paymentInstructions">
                <h2 class="orange-bg sand-border white-text">Payment Installments</h2>
                <img src="img/blue-wayv.png" alt="" class="wayv-icon" />
                <div class="wrapper-900">
                    <p class="sub-title">To secure your yacht, pay 10% of the total booking cost today</p>
                    <table class="no-border blue-text" id="paymentTable" cellspacing="0">
                        <tr class="due-today">
                            <td>Today</td>
                            <td>40%</td>
                            <td class="orange-text">$3000 USD</td>
                        </tr>
                        <tr>
                            <td>15 February, 2018</td>
                            <td>30%</td>
                            <td class="orange-text">$2080 USD</td>
                        </tr>
                        <tr>
                            <td>30 March, 2018</td>
                            <td>30%</td>
                            <td class="orange-text">$2080 USD</td>
                        </tr>
                    </table>
                    <p class="disclaimer-text">When you book a cabin rather than a yacht, the Skipper and Hostess costs are included in the price. repudiandae sint et molestiae non recusandae</p>
                </div>
            </section>
            <section class="page-section" id="paypalPayment">
                <h2 class="section-title">Payment</h2>
                <img src="img/blue-wayv.png" alt="" class="wayv-icon" />
                <p class="sub-title blue-text">WAYV OFFERS PAYMENT THOURGH PAYPAL</p>
                <p class="pay-instructions">Click the link below to receive an email... nuet harum quidem rerum facilis est et expedita distinctiom harum quidem rerum.</p>
                <input type="submit" class="wayv-btn blue-bg orange-hover white-text" value="Link to PayPal" name="submit">
            </section>
        </fieldset>
        </div>
    </form>
    <?php
    
    //declare everything
$gender_slider_male = " ";
    $gender_slider_female = " ";
  $add_skipper = " ";
    $add_hostess = " ";
    $add_hostess1 = " ";
    $add_hostess2 = " ";
    $add_hostess3 = " ";
    $add_hostess4 = " ";
    $add_hostess5 = " ";
    $add_hostess6 = " ";
    $firstname = " ";
    $lastname = " ";
    $dob_month = " ";
    $dob_day = " ";
    $dob_year = " ";
    $age = " ";
    $contact_email = " ";
    $contact_phone = " ";
    $email = " ";
    $phone = " ";
     $address = " ";
    $city = " ";
    $pc_zip = " ";
     $province = " ";
    $nationality = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $gender_slider_male = test_input($_POST["male"]);
  $gender_slider_female = test_input($_POST["female"]);
  $add_skipper = test_input($_POST["add-skipper"]);
  $add_hostess = test_input($_POST["add-hostess"]);
    ///maybe need to get rid of these on bottom of page
   $add_hostess1 = test_input($_POST["add-hostess1"]);
    $add_hostess2 = test_input($_POST["add-hostess2"]);
    $add_hostess3 = test_input($_POST["add-hostess3"]);
    $add_hostess4 = test_input($_POST["add-hostess4"]);
    $add_hostess5 = test_input($_POST["add-hostess5"]);
    $add_hostess6 = test_input($_POST["add-hostess6"]);
   
    //traveller info
    
    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $dob_month = test_input($_POST["gMonth2"]);
    $dob_day = test_input($_POST["day"]);
    $dob_year = test_input($_POST["year"]);
    $age = test_input($_POST["age"]);
    $contact_email = test_input($_POST["contact-email"]);
    $contact_phone = test_input($_POST["contact-phone"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["usrtel"]);
    $address = test_input($_POST["address1"]);
    $city = test_input($_POST["city"]);
    $pc_zip = test_input($_POST["pc-zip"]);
    $province = test_input($_POST["province-states"]);
    $nationality = test_input($_POST["nationality"]);
    $gender = test_input($_POST["gender"]);
    

}
   

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
    ?>
        <?php 
    echo $gender_slider_male;
echo $gender_slider_female;
echo $add_skipper; 
echo $add_hostess;
echo $add_hostess1; 
echo $add_hostess2; 
echo $add_hostess3;
echo $add_hostess4;
echo $add_hostess5; 
echo $add_hostess6; 
echo $firstname;
echo $lastname;
echo $dob_month;
echo $dob_day;
echo $dob_year;
echo age;
echo $contact_email;
echo $contact_phone;
echo $email;
echo $phone;
echo $address;
echo $city;
echo $pc-zip;
echo $province;
echo $nationality;

    if(isset($_POST['submit'])){
        
    try {
    $conn = new PDO("mysql:host=$servername;dbname=wayv_booking", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    $sql = "INSERT INTO wayv_traveller (traveller_fname, traveller_lname, traveller_dob_year, traveller_dob_month, traveller_dob_day, traveller_age, traveller_email, traveller_phone, traveller_address, traveller_city, traveller_pc_zip, traveller_province, traveller_nationality, traveller_gender) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $the_array = array($firstname, $lastname, $dob_year, $dob_month, $dob_day, $age, $email, $phone, $address, $city, $pc_zip, $province, $nationality, $gender);
    // use exec() because no results are returned
    $conn = $conn->prepare($sql);
        echo "New record created successfully";
    $conn->execute($the_array);
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
        echo "form stuff";
    }
$conn = null;   
    
    ?>
        <script>
      //jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})
        </script>
        <script>
        $(function() {
            $('#datepicker').datepicker({
                numberOfMonths: 2,
                onSelect: function(dateText) {
                    $('#datepicker2').datepicker("setDate", $(this).datepicker("getDate"));
                }
            });
        });

        $(function() {
            $("#datepicker2").datepicker();
        });
    </script>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            };
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>
</body>
<script>
    $('.tab .next-form').click(function() {
        $(this).removeClass('active');
        $(this).next().addClass('active');
    });
</script>

</html>