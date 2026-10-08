// 1. Generate a secret number between 1 and 100
let secretNumber = Math.floor(Math.random() * 100) + 1;

// 2. Set the attempts counter to 0
let attempts = 0;

// Get the HTML elements
let guessInput = document.getElementById("guessInput");
let guessButton = document.getElementById("guessButton");
let message = document.getElementById("message");
let attemptsText = document.getElementById("attempts");

// When the user clicks the button
guessButton.addEventListener("click", function () {

    // Get the user's number
    let userGuess = Number(guessInput.value);

    // Add 1 to the attempts
    attempts++;

    // Check if the number is valid
    if (guessInput.value === "" || userGuess < 1 || userGuess > 100) {

        message.textContent = "This is not valid.";

    }

    // Check if the number is too small
    else if (userGuess < secretNumber) {

        message.textContent = "The secret number is HIGHER!";

    }

    // Check if the number is too big
    else if (userGuess > secretNumber) {

        message.textContent = "The secret number is LOWER!";

    }

    // The user found the secret number
    else {

        message.textContent = "🎉 Congratulations! You found the number!";

        guessInput.disabled = true;
        guessButton.disabled = true;
    }

    // Display the number of attempts
    attemptsText.textContent = "Attempts: " + attempts;
});