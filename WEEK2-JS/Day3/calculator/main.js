const display = document.querySelector("#calc_display");

const buttons = document.querySelectorAll("button");
let output = "";
Array.from(buttons).forEach((btn) =>
    btn.addEventListener("mousedown", (e) => {
        console.log(e.target.dataset.val);
        updateDisplay(e.target.dataset.val);
    })
);

function updateDisplay(val) {
    if (val == "=") {
        try {
            if (output == "") {
                display.textContent = "0";
            } else {
                display.textContent = "=" + eval(output);
                output = "";
            }
        } catch {
            display.textContent = "ERROR";
            output = "";
        }
    } else if (val == "C") {
        display.textContent = "0";
        output = "";
    } else {
        output += val;
        display.textContent = output;
    }
}
