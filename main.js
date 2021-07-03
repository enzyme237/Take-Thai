let text = ["une cuisine de sens", "une cuisine maison", "un traiteur"];

let i = 0;
let j = 1;
let reverse = false;
let interval = setInterval(type, 250);

function type() {
  let nowText = text[i];
  document.getElementById("typewriter").innerText = nowText.substr(0, j);

  // reverse direction (erase) if reached end of text
  if (j == nowText.length + 5) {
    reverse = true;
  }

  j += reverse ? -2 : 1;

  // reset j and go forward (type) if reached beginning
  if (j <= 0) {
    j = 1;
    reverse = false;
    i++;
  }

  // reached end of list, start over
  if (i == text.length) {
    i = 0;
  }
}


type();

// const text = ["une cuisine de sens", "une cuisine maison", "un traiteur"];
// let letter ="";
// let index =0;
// let currenttext ="";

// (function type() {
//     if (count === text.length) {
//         count = 0;
//     }
//     currenttext = text[count];
//     letter = currenttext.slice(0,++index);
//     document.querySelector(".type").textContent = letter;

//     if (letter.length === currenttext.length) {
//         count++;
//         index = 0;
//     }
//     setTimeout(type, 500);
// })();