<!doctype html>
<html lang="en">
<head>
    <?php include_once 'layouts/css.php'; ?>
</head>
<body>
    <div class="main">
    <div class="container">
        <h2>Sign up to great new account </h2>
        <form method="POST" id="signup-form" class="signup-form">
            <h3>
                <span class="title_text">Shaxsiy malumotlar</span>
            </h3>
            <fieldset>
                <?php include_once 'views/step-1.php'; ?>
            </fieldset>
            <h3>
                <span class="title_text">Personal Information</span>
            </h3>
            <fieldset>
                <div class="fieldset-content">
                    <div class="form-group">
                        <label for="full_name" class="form-label">Full name</label>
                        <input type="text" name="full_name" id="full_name" placeholder="Full Name" />
                    </div>
                    <div class="form-select">
                        <label for="country" class="form-label">Country</label>
                        <select name="country" id="country">
                            <option value>Country</option>
                            <option value="Australia">Australia</option>
                            <option value="USA">America</option>
                        </select>
                    </div>
                    <div class="form-radio">
                        <label for="gender" class="form-label">Gender</label>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" value="male" id="male" checked="checked" />
                            <label for="male">Male</label>
                            <input type="radio" name="gender" value="female" id="female" />
                            <label for="female">Female</label>
                        </div>
                    </div>
                    <div class="form-textarea">
                        <label for="about_us" class="form-label">About us</label>
                        <textarea name="about_us" id="about_us" placeholder="Who are you ..."></textarea>
                    </div>
                </div>
                <div class="fieldset-footer">
                    <span>Step 2 of 3</span>
                </div>
            </fieldset>
            <h3>
                <span class="title_text">Payment Details</span>
            </h3>
            <fieldset>
                <div class="fieldset-content">
                    <div class="form-radio">
                        <label for="payment_type">Payment Type</label>
                        <div class="form-radio-flex">
                            <input type="radio" name="payment_type" id="payment_visa" value="payment_visa" checked="checked" />
                            <label for="payment_visa"><img src="images/icon-visa.png" alt></label>
                            <input type="radio" name="payment_type" id="payment_master" value="payment_master" />
                            <label for="payment_master"><img src="images/icon-master.png" alt></label>
                            <input type="radio" name="payment_type" id="payment_paypal" value="payment_paypal" />
                            <label for="payment_paypal"><img src="images/icon-paypal.png" alt></label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="credit_card" class="form-label">Credit Card</label>
                            <input type="text" name="credit_card" id="credit_card" />
                        </div>
                        <div class="form-group">
                            <label for="cvc" class="form-label">CVC</label>
                            <input type="text" name="cvc" id="cvc" />
                        </div>
                    </div>
                    <div class="form-date">
                        <label for="expiry_date">Expiration Date</label>
                        <div class="form-flex">
                            <div class="form-date-item">
                                <select id="expiry_date" name="expiry_date"></select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                            <div class="form-date-item">
                                <select id="expiry_year" name="expiry_year"></select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name_of_card" class="form-label">Name of card</label>
                        <input type="text" name="name_of_card" id="name_of_card" />
                    </div>
                </div>
                <div class="fieldset-footer">
                    <span>Step 3 of 3</span>
                </div>
            </fieldset>
        </form>
    </div>
</div>
    <?php include_once 'layouts/js.php'; ?>
</body>
</html>