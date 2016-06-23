# Exit Intent with Cookies & Session Storage
This jQuery/Javascript class allows you to drop in an exit intent strategy for your website. It stores local storage showing that the user was already shown the exit intent window and wouldn't be shown it again. It's a simple "class" that you would need to use your own form of validation and database calls via AJAX. There is a "TODO" notice within the class for placement.
## Requirements
This example does require jQuery, Bootstrap v3.3.6, jauuld cookies javascript file to run as intended.  Bootstrap is referenced in the supplied index.php file, and the jauuld cookies script is included in the JS folder. 

If you decide not to use bootstrap modals you can re-configure the code as needed. Please keep in mind that I am offering this code as-is, so if you do change it to something else I cannot support those changes.

The modal pop-up request is in the file (line 52) as below:

    ...
    $('#exitModal').modal();
    ...

You can switch this to activate whatever process or other plugin you need.
## Installation
Include the files in the dist folder into your website. Then reference those files.

Stylesheet

    <head>
    ...
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/exitIntent.css">
    ...
    
Javascript

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Exit Intent JS Files used -->
    <script src="dist/js/jaauld-cookies.min.js"></script>
    <script src="dist/js/exitIntent.js"></script>

Again, if you are not using Bootstrap, omit their respective CSS and JS files
## Usage
To use the code, you just need to instantiate the class. You can un-comment the debug boolean to view reported data in the console, or you can remove it all-together in production.

    var newExitIntent = new exitIntent({ /*debug:true*/ });

And then add the form submission code to process the data

    $("#exitIntentForm").submit(function(e) {
        e.preventDefault();
        
        var dataSerialized = $("#exitIntentForm").serialize();
        newExitIntent.processNewsletterRequest(dataSerialized);
    })
        
This will serialize the submitted info to be used in your AJAX call (Line 66).  This will be up to you to decide how you would like to manage that process.
## Support
You can <a href="https://github.com/ronpearl/Exit-Intent-with-Cookies-Session-Storage/issues/new">open an issue</a> for support, but please keep in mind that the main idea for this script is to handle the exit intent and to use local storage for usability.