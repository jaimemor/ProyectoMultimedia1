<script>
    /******** Load jQuery if not present *********/
    if (window.jQuery === undefined || window.jQuery.fn.jquery !== '3.1.1') {
        console.log("jQuery LOADED");
        var script_tag = document.createElement('script');
        script_tag.setAttribute("type", "text/javascript");
        script_tag.setAttribute("src", "http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js");

        // Try to find the head, otherwise default to the documentElement
        (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);

        if (script_tag.readyState) {
            script_tag.onreadystatechange = function () { // For old versions of IE
                if (this.readyState == 'complete' || this.readyState == 'loaded') {
                    console.log(window.jQuery.fn.jquery);
                    scriptLoadHandler();
                }
            };
        } else {
            console.log("ONLOAD STATE");
            script_tag.onload = scriptLoadHandler;
        }
    } else {
        // The jQuery version on the window is the one we want to use
        jQuery = window.jQuery;
        main();
    }

    function scriptLoadHandler() {
        // Restore $ and window.jQuery to their previous values and store the
        // new jQuery in our local jQuery variable
        jQuery = window.jQuery.noConflict(true);
        // Call our main function
        main();
    }

    function main() {
        jQuery(document).ready(function ($) {
        var bootstrap_script = document.createElement('script');
            bootstrap_script.setAttribute("type", "text/javascript");
            bootstrap_script.setAttribute("src",
        "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js");


            (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(bootstrap_script);
        })
    }
  </script>
  <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
 <script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>