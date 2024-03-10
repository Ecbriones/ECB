<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<style>
    /* Paste your CSS styles here */
    @keyframes color {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "poppins", sans-serif;
    }

    body {
        height: 100vh;
        width: 100%;
        background: linear-gradient(45deg, #7b511b,#FAF4B7,#CBB279,#E9B384, #BBAB8C, #E9DAC1);
        background-size: 300% 300%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 70px;
        position: relative;
        animation: color 12s ease-in-out infinite; 
    }

    .wrapper {
        width: 100%;
        max-width: 1200px; /* Adjusted maximum width */
        background: #ffd69f;
        color: rgb(59, 52, 8);
        border-radius:  10px;
        padding: 30px 40px;
    }

    .wrapper h1 {
        font-size: 45px;
        text-align: center;
    }
    .wrapper h2 {
        font-size: 20px;
        text-align: center;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .input-row {
        display: flex;
        justify-content: space-between; /* Adjusted */
        margin-bottom: 20px; /* Adjusted */
    }

    .input-box {
        flex: 1; /* Adjusted */
        margin-right: 10px; /* Adjusted */
    }

    .input-box:last-child {
        margin-right: 0; /* Adjusted */
    }

    .input-box input, .input-box select {
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(53, 44, 44, 0.2);
        border-radius: 40px;
        font-size: 16px;
        color: #000000;
        padding: 20px 45px 20px 20px;
    }

    .input-box ::placeholder {
      color: #000000;
    }

    .input-box i {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
    }

    .wrapper .button {
    width: 100%;
    max-width: 500px; /* Adjusted maximum width */
    height: 50px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
    margin: 20px auto; 
    display: block;     
}



    .Register-link {
        text-align: center; 
        margin-top: 20px; 
    }

    .Register-link p a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }

    .Register-link p a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
    <div class="wrapper">
        <form name="registrationForm" action="registrationaction.php" method="POST" onsubmit="return validateForm()">
            <h1> Registration</h1>
            <h2>Please Create an Account.</h2>
                  <!-- Display error message if exists -->
            <?php
            if (isset($_GET['error'])) {
                echo '<div style="color: red; margin-bottom: 10px;text-align: center;">' . htmlspecialchars($_GET['error']) . '</div>';
            }
            ?>
            <div class="input-row">
                <div class="input-box">
                    <input type="text" name ="last_name" placeholder="Last Name" required>
                </div>
                <div class="input-box">
                    <input type="text" name ="first_name" placeholder="First Name" required>
                </div>
                <div class="input-box">
                    <input type="text" name ="contact_num" placeholder="Contact Number" required>
                </div>
            </div>
            <div class="input-row">
                <div class="input-box">
                    <select name="country" id="country" required>
                        <option disabled selected>Select Country</option>
                        <option value="Philippines">Philippines</option>
                    </select>
                </div>
                <div class="input-box">
                    <select name="region" id="region" required>
                        <option value="" disabled selected>Select Region</option>
                        <!-- Add options for regions here -->
                    </select>
                </div>
                <div class="input-box">
                    <select name="province" id="province" required>
                        <option value="" disabled selected>Select Province</option>
                        <!-- Add options for provinces here -->
                    </select>
                </div>
            </div>
            <div class="input-row">
                <div class="input-box">
                    <select name="city" id="city" required>
                        <option value="" disabled selected>Select City/Municipality</option>
                        <!-- Add options for cities/municipalities here -->
                    </select>
                </div>
                <div class="input-box">
                    <select name="barangay" id="barangay" required>
                        <option value="" disabled selected>Select Barangay</option>
                        <!-- Add options for barangays here -->
                    </select>
                </div>
                <div class="input-box">
                    <input type="text" name ="lot" placeholder="Lot">
                </div>
            </div>
            <div class="input-row">
                <div class="input-box">
                    <input type="text" name ="blk" placeholder="Blk">
                </div>
                <div class="input-box">
                    <input type="text" name ="street" placeholder="Street">
                </div>
                <div class="input-box">
                    <input type="text" name ="subd" placeholder="Subdivision/Village">
                </div>
            </div>
            <div class="input-row">
                <div class="input-box">
                    <input type="email" name ="email_address" placeholder="Email Address" required>
                </div>
                <div class="input-box">
                    <input type="password" name ="password" id="password" placeholder="Password" required>
                </div>
                <div class="input-box">
                    <input type="password" name ="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                </div>
            </div>
            <button type="submit" class="button">Register</button>
            <div class="Register-link">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>

        </form>
    </div>

    <script src="script.js"></script>
    <script type="text/javascript" src="phil.min.js"></script>
    <script type="text/javascript">
        // Your existing JavaScript code here
            const regions = Philippines.regions;
            const provinces = Philippines.provinces;
            const municipalities = Philippines.city_mun;
            const barangays = Philippines.barangays;

            // Populate the region drop-down list
            const regionDropdown = document.getElementById('region');
            regions.forEach(region => {
                const option = document.createElement('option');
                option.value = region.reg_code;
                option.textContent = region.name;
                regionDropdown.appendChild(option);
            });

            // Function to populate the province drop-down based on the selected region
            function populateProvinces(regionCode) {
                const provinceDropdown = document.getElementById('province');
                provinceDropdown.innerHTML = ''; // Clear previous options

                const provincesInRegion = Philippines.getProvincesByRegion(regionCode);
                provincesInRegion.forEach(province => {
                    const option = document.createElement('option');
                    option.value = province.prov_code;
                    option.textContent = province.name;
                    provinceDropdown.appendChild(option);
                });
            }

            // Function to populate the municipality drop-down based on the selected province
            function populateMunicipalities(provinceCode) {
                const municipalityDropdown = document.getElementById('city');
                municipalityDropdown.innerHTML = ''; // Clear previous options

                const municipalitiesInProvince = Philippines.getCityMunByProvince(provinceCode);
                municipalitiesInProvince.forEach(municipality => {
                    const option = document.createElement('option');
                    option.value = municipality.mun_code;
                    option.textContent = municipality.name;
                    municipalityDropdown.appendChild(option);
                });
            }

            // Function to populate the barangay drop-down based on the selected municipality
            function populateBarangays(municipalityCode) {
                const barangayDropdown = document.getElementById('barangay');
                barangayDropdown.innerHTML = ''; // Clear previous options

                const barangaysInMunicipality = Philippines.getBarangayByMun(municipalityCode);
                barangaysInMunicipality.forEach(barangay => {
                    const option = document.createElement('option');
                    option.value = barangay.brgy_code;
                    option.textContent = barangay.name;
                    barangayDropdown.appendChild(option);
                });
            }

            // Event listener for region dropdown change
            regionDropdown.addEventListener('change', function() {
                const selectedRegion = regionDropdown.value;
                populateProvinces(selectedRegion);
            });

            // Event listener for province dropdown change
            const provinceDropdown = document.getElementById('province');
            provinceDropdown.addEventListener('change', function() {
                const selectedProvince = provinceDropdown.value;
                populateMunicipalities(selectedProvince);
            });

            // Event listener for municipality dropdown change
            const municipalityDropdown = document.getElementById('city');
            municipalityDropdown.addEventListener('change', function() {
                const selectedMunicipality = municipalityDropdown.value;
                populateBarangays(selectedMunicipality);
            });
        </script>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    function validateForm() {
        // Get form elements
        var lastName = document.forms["registrationForm"]["last_name"].value;
        var firstName = document.forms["registrationForm"]["first_name"].value;
        var contactNum = document.forms["registrationForm"]["contact_num"].value;
        var email = document.forms["registrationForm"]["email_address"].value;
        var password = document.forms["registrationForm"]["password"].value;
        var confirmPassword = document.forms["registrationForm"]["confirm_password"].value;

        // Regular expressions for validation
        var nameRegex = /^[a-zA-Z\-]+$/;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Validation
        if (!lastName.match(nameRegex)) {
            alert("Please enter a valid last name.");
            return false;
        }

        if (!firstName.match(nameRegex)) {
            alert("Please enter a valid first name.");
            return false;
        }

        if (!email.match(emailRegex)) {
            alert("Please enter a valid email address.");
            return false;
        }

        if (password.length < 8) {
            alert("Password must be at least 8 characters long.");
            return false;
        }

        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        // If all validation passes, return true
        return true;
    }
</script>



</body>
</html>