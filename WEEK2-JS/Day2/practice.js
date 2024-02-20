// const readline = require("readline");

// const rl = readline.createInterface({
//     input: process.stdin,
//     output: process.stdout,
// });

// let output = 0;

// function processData(data) {
//     data = parseInt(data, 10);
//     if (data >= 0) {
//         output += data;
//     } else {
//         console.log(output);
//         rl.close();
//     }
// }
// function getInput() {
//     rl.question("Please enter a number:", (input) => {
//         processData(input);
//         if (input >= 0) {
//             getInput();
//         }
//     });
// }
// getInput();

// const readline = require("readline");

// const rl = readline.createInterface({
//     input: process.stdin,
//     output: process.stdout,
// });

// let total = 0;

// function processInput(input) {
//     const num = parseInt(input);
//     if (isNaN(num)) {
//         console.log("Please enter a valid number.");
//     } else if (num >= 0) {
//         total += num;
//     } else {
//         console.log(`Total: ${total}`);
//         rl.close();
//     }
// }

// function getInput() {
//     rl.question("Enter a number: ", (input) => {
//         processInput(input);
//         if (parseInt(input) >= 0) {
//             getInput(); // Continue reading input
//         }
//     });
// }

// getInput(); // Start reading input

function add(...args) {
    let b = args.map((x) => x ** 2);
    console.log(b);
}

add(2, 3, 4, 5, 6, 7, 7, 8, 8, 9, 10, 11, 12, 12);
