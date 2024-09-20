// Get a reference to the input field and the button
const couponInput = document.getElementById("couponCode");
const redirectButton = document.getElementById("redirectButton");

// Add a click event handler to the button
redirectButton.addEventListener("click", redirectToNewUrl);

// Add a key press event handler for the input field
couponInput.addEventListener("keydown", function(event) {
    // Check if the pressed key is Enter (key code 13)
    if (event.keyCode === 13) {
        // Call the function to redirect to the new URL
        redirectToNewUrl();
    }
});

function redirectToNewUrl() {
    // Get the value entered in the input field
    const enteredCode = couponInput.value;

    // Check if the entered code is not empty
    if (enteredCode) {
        // Build a new URL by appending the entered code to the original link
        const baseUrl = "http://my.juggernautai.app/register?coupon=";
        const newUrl = baseUrl + enteredCode;

        // Redirect the user to the new URL
        window.location.href = newUrl;
    } else {
        // Handle the case where the entered code is empty
        // You can add your logic here if needed
    }
}
