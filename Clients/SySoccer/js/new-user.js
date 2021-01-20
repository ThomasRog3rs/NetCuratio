let saveBtn = document.getElementById("update-account");
let personalDetailsIcon = document.getElementById("details-icon");

let payBtn = document.getElementById("paypal-payment");
let dateIcon = document.getElementById("date-icon");

saveBtn.addEventListener("click", (e) => {
    e.preventDefault();
    personalDetailsIcon.classList = "far fa-check-circle done";
});

payBtn.addEventListener("click", (e) => {
    e.preventDefault();
    if (personalDetailsIcon.classList != "far fa-check-circle done") {
        alert("Please update your account with some extra details");
    } else {
        dateIcon.classList = "far fa-check-circle done";
    }
});