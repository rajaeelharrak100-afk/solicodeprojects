
let secretNumber = Math.floor(Math.random() * 100) + 1;

let attempts = 0;

let guessInput = document.getElementById("guessInput");
let guessButton = document.getElementById("guessButton");
let message = document.getElementById("message");
let attemptsText = document.getElementById("attempts");

function start(){


    let userGuess = Number(guessInput.value);


    if (userGuess < secretNumber) {
        attempts++;
        message.textContent = "The secret number is HIGHER!";
    }

    else if (userGuess > secretNumber) {
        attempts++;
        message.textContent = "The secret number is LOWER!";
    }
    
    else {
        attempts++;
        message.textContent = " Congratulations! You found the number!";
    }

    attemptsText.textContent = "Attempts: " + attempts;


}
    