<?php wp_head(); ?>
<nav class="pb-4">
    <div class="container-fluid">
        <div class="row">
            <h1 class="mx-auto">Front End Skills Test</h1>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8">
            <img src="<?php echo get_template_directory_uri() . '/imgs/FrontEndSkillsTestIcon.png'; ?>" alt="" />
            <h1 class="mx-auto">This icon has been minified</h1>
        </div>
        <div class="col-12 col-sm-4">
            <form action="<?php echo get_template_directory_uri() . '/send-lead.php'; ?>" class="contact-form" name="lead-form" method="post">
                <div class="form-group">
                    <!-- <label for="yourFirstName">First Name</label> -->
                    <input type="text" class="form-control" name="firstName" placeholder="First Name *" maxlength="20" required="required" autofocus>
                </div>
                <div class="form-group">
                    <!-- <label for="yourLastName">Last Name</label> -->
                    <input type="text" class="form-control" name="lastName" placeholder="Last Name *" maxlength="20" required="required">
                </div>
                <div class="form-group">
                    <!-- <label for="zipCode">Zip Code</label> -->
                    <input type="text" class="form-control" name="zipCode" placeholder="Zip Code *" pattern="[0-9]{5}" required="required">
                </div>
                <div class="form-group">
                    <!-- <label for="phoneNumber">Phone Number</label> -->
                    <input type="tel" class="form-control" name="phoneNumber" placeholder="Phone Number *" aria-describedby="telHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required">
                    <small id="telHelp" class="sr-only form-text">Please use format 555-555-5555</small>
                </div>
                <div class="form-group">
                    <!-- <label for="exampleInputEmail1 col-12">Email address</label> -->
                    <input type="email" class="form-control" name="emailAddress" placeholder="Email Address" required="required">
                    
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="contactConsent" required="required">
                    <label class="form-check-label" for="contactConsent">I hereby consent to receive emails, text messages and other electronic communications at the telephone and email listed above.</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
    <div class="row">
        <h1>To check validation on the form above do the following:</h1>
        <ul>
            <li>Type more than 20 characters into the First Name field</li>
            <li>Type more than 20 characters into the Last Name field</li>
            <li>Add 6 digits consisting of letters, numbers, &amp; special characters to the Zip Code field</li>
            <li>Add letters and numbers to the Phone number field and attempt to use this format: xxx-xxx-xxxx</li>
            <li>Enter an invalid email address into the Email Address field (i.e. someonename.com)</li>
            <li>Leave the Checkbox unchecked</li>
            <li>Click Submit</li>
        </ul>
    </div>
</div>
<?php wp_footer(); ?>
