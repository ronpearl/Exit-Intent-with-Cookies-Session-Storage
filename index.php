<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample Exit Intent</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="dist/css/exitIntent.css">
</head>
<body>


<!-- Exit Intent Modal -->
<div class="modal fade" id="exitModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-md-12">
                        <div id="waitIcon">
                            <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div id="exitIntent-newsletter">
                            <div class="row">
                                <div class="col-md-4 col-sm-3 hidden-xs">
                                    <img src="http://placehold.it/150x200" class="img-responsive grey-border">
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    <h4>Were You Needing More Information?</h4>
                                    <p>Sign up for our newsletter!</p>

                                    <form id="exitIntentForm" novalidate="novalidate">
                                        <div class="form-group">
                                            <label for="exit-fName">First Name</label>
                                            <input type="text" class="form-control" id="exit-fName" name="exit-fName"
                                                   aria-required="true" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exit-lName">Last Name</label>
                                            <input type="text" class="form-control" id="exit-lName" name="exit-lName" aria-required="true" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exit-email">Email</label>
                                            <input type="email" class="form-control" id="exit-email" name="exit-email" placeholder="jane.doe@example.com"
                                                   aria-required="true" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Signup</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="newsletter-done">
                            <h4>Thank You For Signing Up For Our Newsletter!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!-- Exit Intent JS Files used -->
<script src="dist/js/jaauld-cookies.min.js"></script>
<script src="dist/js/exitIntent.js"></script>

<script>
    var newExitIntent = new exitIntent({ /*debug:true*/ });

    $("#exitIntentForm").submit(function(e) {
        e.preventDefault();
        
        var dataSerialized = $("#exitIntentForm").serialize();
        newExitIntent.processNewsletterRequest(dataSerialized);
    })
</script>

</body>
</html>