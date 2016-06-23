/* * * * * * * * * * * * * * * * * * * * * * *
 *   exitIntent
 * * * * * * * * * * * * * * * * * * * * * * */

var exitIntent = function(options) {
    var defaultVars = {
        debug                   :   false,
        exitIntentPopup         :   true,
        waitIcon                :   $('#waitIcon'),
        sessionStorageCapable   :   false
    };

    // var root = this;

    this.construct = function(options){
        $.extend(defaultVars , options);

        defaultVars.sessionStorageCapable = defaultVars.debug ? false : sessionOrCookieStorage();
    };

    // Construction setup complete, list out the methods

    $(document).mouseleave(function () {
        // Check sessionStorage or cookie to see if they have seen the popup already
        switch (defaultVars.sessionStorageCapable) {
            case "sessionOK":
                var sessionStoreVal = sessionStorage.getItem('exitIntentSeen');

                if (sessionStoreVal == null) {
                    sessionStorage.setItem('exitIntentSeen', "yes");
                    defaultVars.exitIntentPopup = true;
                } else {
                    defaultVars.exitIntentPopup = false;
                }
                break;
            case "cookieOK":
                var cookieStorageVal = cookies.get('exitIntentSeen');

                if (cookieStorageVal == null) {
                    cookies.set('exitIntentSeen', "yes");
                    defaultVars.exitIntentPopup = true;
                } else {
                    defaultVars.exitIntentPopup = false;
                }
                break;
            case "noStorage":
                defaultVars.exitIntentPopup = false;
                break;
        }

        if(defaultVars.exitIntentPopup){
            $('#exitModal').modal();
            defaultVars.exitIntentPopup = false;
        }
    });



    this.processNewsletterRequest = function(serializedData) {
        if (defaultVars.debug)
            console.log("Newsletter Serialized Data: " + serializedData);

        defaultVars.waitIcon.css('display', 'block');


        // TODO: AJAX request to process newsletter form


        defaultVars.waitIcon.css('display', 'none');

        $("#exitIntent-newsletter").animate({
            opacity: 0
        }, 500, function() {
            $("#exitIntent-newsletter").css('display', 'none');

            $("#newsletter-done").css('display', 'block').animate({
                opacity: 1,
                height: '100%'
            }, 500)
        });
    };

    var sessionOrCookieStorage = function() {
        var sessionStorageAccess = sessionStorage ? true : false;

        if (sessionStorageAccess) {
            return "sessionOK";
        } else if (cookies.test()) {
            return "cookieOK";
        } else {
            return "noStorage";
        }
    };

    // RUN CONSTRUCT at end to include all functions on construct
    this.construct(options);
};