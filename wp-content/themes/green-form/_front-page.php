<?php get_header();?>

<nav class="pb-4">
    <div class="container-fluid">
        <div class="row">
            <h1 class="mx-auto">Front End Skills Test</h1>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row py-5">
        <div class="col-12 col-sm-8 px-5 justify-content-center">
            <img class="minimized" src="<?php echo get_template_directory_uri() . '/imgs/FrontEndSkillsTestIcon.png'; ?>" />
            <h1 class="mx-auto">This icon has been minified</h1>
        </div>
        <div class="col-12 col-sm-4 justify-content-center">
            <form>
                <div class="form-group">
                    <!-- <label for="yourFirstName">First Name</label> -->
                    <input type="text" class="form-control" id="yourFirstName" placeholder="First Name *" maxlength="20" autofocus>
                </div>
                <div class="form-group">
                    <!-- <label for="yourLastName">Last Name</label> -->
                    <input type="text" class="form-control" id="yourLastName" placeholder="Last Name *" maxlength="20">
                </div>
                <div class="form-group">
                    <!-- <label for="zipCode">Zip Code</label> -->
                    <input type="text" class="form-control" id="zipCode" placeholder="Zip Code *" pattern="[0-9]{5}">
                </div>
                <div class="form-group">
                    <!-- <label for="phoneNumber">Phone Number</label> -->
                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number *" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                </div>
                <div class="form-group">
                    <!-- <label for="exampleInputEmail1 col-12">Email address</label> -->
                    <input type="email" class="form-control" id="emailAddress" aria-describedby="emailHelp" placeholder="Email Address">
                    <small id="emailHelp" class="sr-only form-text">Please use format 555-555-5555</small>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="contactConsent">
                    <label class="form-check-label" for="contactConsent">I hereby consent to receive emails, text messages and other electronic communications at the telephone and email listed above.</label>
                </div>
                <button type="submit" class="btn btn-primary mx-auto">Submit</button>
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

<?php get_footer();?>