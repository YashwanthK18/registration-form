$(document).ready(function() {

    $("#regForm").submit(function() {
        let name = $("#name").val().trim();
        let email = $("#email").val().trim();
        let phone = $("#phone").val().trim();
        let gender = $("#gender").val();
        let address = $("#address").val().trim();

        if (name === "" || email === "" || phone === "" || gender === "" || address === "") {
            $("#msg").text("Please fill all fields!").css("color", "red");
            return false;
        }

        $("#msg").text("Submitting...").css("color", "green");
        return true;
    });

});
