// public/script.js
$(document).ready(function () {

    $("#regForm").submit(function () {
        const pass = $("#password").val().trim();
        const cpass = $("#confirm_password").val().trim();

        if (pass !== cpass) {
            alert("Passwords do not match!");
            return false;
        }

        // Optional: ensure at least one interest is selected
        const interestsChecked = $("input[name='interests[]']:checked").length;
        if (interestsChecked === 0) {
            if (!confirm("You haven't selected any interests. Continue anyway?")) {
                return false;
            }
        }

        return true; // allow submit
    });

});
