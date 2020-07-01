"use strict";

// Class definition
var KTWizard1 = function() {
    // Base elements
    var wizardEl;
    var formEl;
    var validator;
    var wizard;

    // Private functions
    var initWizard = function() {
        // Initialize form wizard
        wizard = new KTWizard('kt_wizard_v1', {
            startStep: 1, // initial active step number
            clickableSteps: true // allow step clicking
        });

        // Validation before going to next page
        wizard.on('beforeNext', function(wizardObj) {
            if (validator.form() !== true) {
                wizardObj.stop(); // don't go to the next step
            }
        });

        wizard.on('beforePrev', function(wizardObj) {
            if (validator.form() !== true) {
                wizardObj.stop(); // don't go to the next step
            }
        });

        // Change event
        wizard.on('change', function(wizard) {
            setTimeout(function() {
                KTUtil.scrollTop();
            }, 500);
        });
    }

    var initValidation = function() {
        validator = formEl.validate({
            // Validate only visible fields
            ignore: ":hidden",

            // Validation rules
            rules: {
                //= Step 1
                description: {
                    required: true
                },
                quantity: {
                    required: true,
                    number: true
                },
                measurement_unit_id: {
                    required: true
                },
                payment_conditions: {
                    required: true
                },


                //= Step 2
                delivery_city: {
                    required: true
                },
                purchase_price_min: {
                    required: true,
                    number: true
                },
                purchase_price_max: {
                    required: true,
                    number: true
                },

            },

            // Display error
            invalidHandler: function(event, validator) {
                KTUtil.scrollTop();

                swal.fire({
                    "title": "",
                    "text": "Hay algunos errores en el formulario. Por favor corríjalos.",
                    "type": "error",
                    "confirmButtonClass": "btn btn-secondary"
                });
            },

            // Submit valid form
            submitHandler: function(form) {

            }
        });
    }


    var initSubmit = function() {
        var btn = formEl.find('[data-ktwizard-type="action-submit"]');

        btn.on('click', function(e) {
            e.preventDefault();

            if (validator.form()) {
                // See: src\js\framework\base\app.js
                KTApp.progress(btn);
                //KTApp.block(formEl);
                btn.attr("disabled", true);
                var options = {
                    //target:        '#output2',   // target element(s) to be updated with server response 
                    //beforeSubmit:  showRequest,  // pre-submit callback 
                    success: showResponse, // post-submit callback 

                    // other available options: 
                    url: '/requests', // override for form's 'action' attribute 
                    type: 'POST', // 'get' or 'post', override for form's 'method' attribute 
                    clearForm: true, // clear all form fields after successful submit 
                    resetForm: true, // reset the form after successful submit 
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    // $.ajax options can be used here too, for example: 
                    //timeout:   3000 
                };

                // See: http://malsup.com/jquery/form/#ajaxSubmit
                formEl.ajaxSubmit(options);
            }
        });
    }

    return {
        // public functions
        init: function() {
            wizardEl = KTUtil.get('kt_wizard_v1');
            formEl = $('#kt_form');

            initWizard();
            initValidation();
            initSubmit();
        }
    };
}();

function showResponse() {
    var btn = $('#kt_form').find('[data-ktwizard-type="action-submit"]');
    KTApp.unprogress(btn);
    //KTApp.unblock(formEl);

    swal.fire({
        "title": "",
        "text": "¡La solicitud ha sido enviada con éxito!",
        "type": "success",
        "confirmButtonClass": "btn btn-secondary"
    });

    window.location.replace("/requests");
}

jQuery(document).ready(function() {
    KTWizard1.init();
});