let input = document.querySelectorAll("input");
window.addEventListener("DOMContentLoaded", function () {
  for (let j = 0; j < array.length; j++) {
    console.log(input[j]);
    input[j].setAttribute("min", "0");
  }
});
let inputRGX = /[0-9]/;
function setvalue(array) {
  for (let i = 0; i < array.length - 1; i++) {
    array[i].addEventListener("input", function (e) {
      if (i % 2 != 0) {
        if (inputRGX.test(array[i - 1].value)) {
          return true;
        } else {
          array[i - 1].value = 0;
        }
      } else {
        if (inputRGX.test(array[i + 1].value)) {
          return true;
        } else {
          array[i + 1].value = 0;
        }
      }
    });
  }
}
setvalue(input);
