// function eligibleForVoting(x) {
//     if (x > 14) {
//         return "You are eligible for Voting. <br> ";
//     } else {
//         return "You are not eligible for Voting. <br> ";
//     }
// }
// function positiveNumber(x) {
//     if (x < 0) {
//         return " Number is shorter than 0. <br> ";
//     } else {
//         return "Number is greater than 0. <br> ";
//     }
// }
// function divisible(x) {
//     if (x % 2 == 0) {
//         return "Number is divisble by 2. <br> ";
//     } else {
//         return "Number is not divisible by 2. <br> ";
//     }
// }

let a = parseInt(prompt("Please enter your age to check for voting."));
// document.write(eligibleForVoting(a));
// console.log(eligibleForVoting(a));
let b = parseInt(
    prompt("Please enter a number to check if it is positive or not")
);
// document.write(positiveNumber(b));
// console.log(positiveNumber(b));
let c = parseInt(
    prompt("Please enter a number to get if it is divisible by 2")
);
// document.write(divisible(c));
// console.log(divisible(c));

document.write(
    a >= 18 ? "Eligible for voting <br>" : "Not eligible for voting <br>"
);
document.write(b >= 0 ? "Greater than 0 <br>" : "Shorter than 0 <br>");
document.write(c % 2 == 0 ? "Divisible by 2 <br>" : "Not divisible by 2<br>");
document.write(c % 2 == 0 ? "Divisible by 2 <br>" : "Not divisible by 2<br>");
