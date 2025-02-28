jQuery(document).ready(function(a) {
    const allowedInputs = ['billing_email', 'billing_first_name', 'billing_last_name', 'woo_ml_subscribe'];
    triggerAddEvents();
    var execute;
    if (jQuery('#woo_ml_preselect_enabled')?.val() == 'yes') {
        jQuery('#woo_ml_subscribe').prop('checked', true);
    }



    function triggerAddEvents() {
        const email = document.querySelector('#billing_email');
        const first_name_field = document.querySelector('#billing_first_name');
        const last_name_field = document.querySelector('#billing_last_name');
        const signup = document.querySelector('#woo_ml_subscribe');
        if (email !== null && !email.form?.querySelector('#woo_ml_subscribe')) {
            const wooMlCheckoutCheckbox = document.createElement('input');
            const wooMlCheckoutCheckboxLabel = document.createElement('label');
            wooMlCheckoutCheckbox.setAttribute('type', woo_ml_public_post.checkbox_settings?.hidden === 'no' ? 'checkbox' : 'hidden');
            wooMlCheckoutCheckbox.setAttribute('id', 'woo_ml_subscribe');
            wooMlCheckoutCheckbox.setAttribute('value', 1);
            // wooMlCheckoutCheckbox.setAttribute('checked', woo_ml_public_post.checkbox_settings?.preselect === 'no' ? '' : 'checked');
            wooMlCheckoutCheckbox.checked = !(woo_ml_public_post.checkbox_settings?.preselect === 'no');
            if (woo_ml_public_post.checkbox_settings?.hidden === 'no') {
                wooMlCheckoutCheckboxLabel.appendChild(wooMlCheckoutCheckbox);
                wooMlCheckoutCheckboxLabel.appendChild(document.createTextNode(woo_ml_public_post.checkbox_settings.label));
                email.insertAdjacentElement('afterend', wooMlCheckoutCheckboxLabel);
            }
            email.insertAdjacentElement('afterend', wooMlCheckoutCheckbox);

            triggerAddEvents();
        }
        if (email !== null) {
            email.addEventListener('change', (event) => {
                validateMLSub(event);
            });
        }

        if (first_name_field !== null) {
            first_name_field.addEventListener('change', (event) => {
                if(first_name_field.value.length > 0) {
                    validateMLSub(event);
                }
            });
        }

        if (last_name_field !== null) {
            last_name_field.addEventListener('change', (event) => {
                if(last_name_field.value.length > 0) {
                    validateMLSub(event);
                }
            });
        }

        if (signup !== null) {
            a(document).on('change', signup, function(event) {
                if (event.target.id == 'woo_ml_subscribe') {
                    validateMLSub(event);
                }
            });
        }
    }

    function validateMLSub(e) {

        if(document.querySelector('#billing_email') !== null && document.querySelector('#billing_email').value.length > 0) {
                checkoutMLSub(e);
        }
    }

    function checkoutMLSub(e) {
        clearTimeout(execute);
        execute = setTimeout(() => {
            if (!allowedInputs.includes(e.target.id)) {
                return false;
            }
            /** set cookie before sending request to server
             * since multiple checkout update requests can be sent
             * and server cookies won't get updated, so send the saved
             * cookie as a request parameter
            **/

            if (!getCookie('mailerlite_checkout_token')) {
                var now = new Date();
                now.setTime(now.getTime() + 48 * 3600 * 1000);
                document.cookie = `mailerlite_checkout_token=${(+new Date).toString()}; expires=${now.toUTCString()}; path=/`;
            }

            const accept_marketing = document.querySelector('#woo_ml_subscribe').checked;

            let first_name = document.querySelector('#billing_first_name')?.value ?? '';
            let last_name = document.querySelector('#billing_last_name')?.value ?? '';
            const email = document.querySelector('#billing_email')?.value;

            jQuery.ajax({
                url: woo_ml_public_post.ajax_url,
                type: "post",
                data: {
                    action: "post_woo_ml_email_cookie",
                    email: email,
                    signup: accept_marketing,
                    language: woo_ml_public_post.language,
                    first_name: first_name,
                    last_name: last_name,
                    cookie_mailerlite_checkout_token:getCookie('mailerlite_checkout_token')
                }
            });
        }, 2);
    }
});

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) {
        return parts.pop().split(';').shift()
    }
    return null;
}