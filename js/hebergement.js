$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                logement: {
                    required: true,
                    minlength: 3
                },
                simple: {
                    required: true,
                    minlength: 3
                },
                double: {
                    required: true,
                    minlength: 3
                },
                distance: {
                    required: true,
                    email: true
                },
                quote: {
                    required: true,
                    minlength: 1
                }
            },
            messages: {
                logement: {
                    required: "Saisissez le nom du logement.",
                    minlength: "Au moins 2 charactères"
                },
                simple: {
                    required: "Saisissez le cout de l'hebergement",
                    minlength: "Au moins 3 charactères"
                },
                double: {
                    required: "Saisissez le cout de l'hebergement",
                    minlength: "Au moins 3 charactères"
                },
                distance: {
                    required: ""
                },
                quote: {
                    required: "",
                    minlength: ""
                }
            }
           
        })
    })
        
 })(jQuery)
})