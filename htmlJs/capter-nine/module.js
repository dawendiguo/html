function isValidtelephoneNumber(telephoneNumber){
    var telRegExp = /^(/+/d{1,3} ?)?(\(\d{1,5}\)|\d{1,5})?\d{3}?\d{0,7}((x|xtn|ext|extn|pax|pbx|extension)?\.? ?\d{2,5})?$/i;
        return telRegExp.teat(telephoneNumber);
}

function isValidPostalCode(postalCode){
    var pcodeRegExp = /^(\d{5}(-\d{4})?|([a-z][a-z]?\d\d?|[a-z{2}\d[a-z])
            ?\d[a-z][a-z])$/i;
        return pcodeRegExp.test(postalCode);
}

function isValidEmail(emailAddreas){
    var emailRegExp = /^(
        return
