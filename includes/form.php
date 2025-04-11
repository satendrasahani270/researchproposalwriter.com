<script>
$(document).ready(function() {
    console.log("load"), $("#genclick").click()
});
</script>

<form action="https://www.researchproposalwriter.com/thankyou" method="post" id="form" class="contact-form">
    <div class="row">
        <div class="col-md-6 col-12 py-2">
            <input type="email" name="email" placeholder="Enter Your Email Address" class="form-control py-3" id="Email"
                maxlength="50" autocomplete="off" required>
            <span id='result'></span>
        </div>
        <div class="col-md-6 col-12 py-2">
            <input type="text" name="Phone" placeholder="Mobile" class="form-control py-3" id="Phone" minlength="9"
                maxlength="12" onkeyup="numberonly(this)" required>
            <span id='error'></span>
        </div>
        <div id='vall'>
            <div class='d-flex align-items-center justify-content-center'>
                <div class='form-control py-3' id='verification'></div>
                <div class="inline" id='genclick' onclick="gen()">🔁=</div>
                <input type="text" class="form-control py-3" id='verifycaptcha' placeholder='?'>
                <div id="errorc"></div>
            </div>
        </div>
        <input type="hidden" name="phone_full" value=''>
        <div class="col-12 pt-2 text-center">
            <button type="submit" id="submit" name="apicall" value="apivalue"
                class="btn btn-dark mt-4 py-3 px-5 rounded-pill">Order Now</button>
        </div>
    </div>
</form>

<script>
let ve = 0,
    vp = 0,
    vc = 0;

function gen() {
    var e = ["+", "-"],
        t = Math.floor(Math.random() * e.length),
        r = e[t],
        n = document.getElementById("verifycaptcha").value = "",
        a = Math.floor(24 * Math.random()) + 10,
        l = Math.floor(9 * Math.random()) + 1,
        n = a + e[t] + l;
    return document.getElementById("verification").innerHTML = n, u = "+" == r ? a + l : a - l, u
}
$("#verifycaptcha").on("keyup", function() {
    var e = document.getElementById("verifycaptcha").value;
    return vc = e == u ? 1 : 0, vc
});
var phone_number = window.intlTelInput(document.querySelector("#Phone"), {
    separateDialCode: !0,
    preferredCountries: ["au"],
    hiddenInput: "full",
    customPlaceholder: "0000000",
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
});
const validateEmail = e => String(e).toLowerCase().match(
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );

function numberonly(e) {
    e.value = e.value.replace(/[^0-9]/gi, "");
    e = $("#Phone").val();
    return e.length < 9 ? ($("#error").html("Please Provide a Valid Contact Number"), $("#error").css("color", "red"),
        vp = 0) : 9 <= e.length ? ($("#error").html("Valid Contact Number"), $("#error").css("color", "green"), vp =
        1) : void 0
}
$("#Email").on("keyup keypress blur change", function() {
    $("#Email").on("input", () => {
        let e = $("#result"),
            t = $("#Email").val();
        return e.text(""), ve = t.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            ) ? (e.text(t + " is valid."), e.css("color", "green"), 1) : (e.text(t +
            " is invalid."), e.css("color", "red"), 0)
    })
}), $("#Email").on("keyup", function() {
    var e = $("#Email").val().replace(/[`~!#$%^&*()_|+\-=?;:'",<>\{\}\[\]\\\/]/gi, "");
    $("#Email").val(e)
}), $("form").submit(function (e) {
        if (1 != ve || 1 != vc || 1 != vp) e.preventDefault(),gen(), alert("Please Enter Valid Inputs or Fill the Captcha");
        else {
            
            var full_number = $(".iti__selected-dial-code").text();
            $("input[name='phone_full']").val(full_number);
        }
    });
</script>