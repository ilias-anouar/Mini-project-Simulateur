let input = document.querySelectorAll("input");
let inputRGX = /\d+/g;
function setvalue(array) {
  for (let i = 0; i < array.length - 1; i++) {
    array[i].addEventListener("input", function (e) {
      if (i % 2 != 0) {
        if (inputRGX.test(array[i - 1].value)) {
          return false;
        } else {
          array[i - 1].value = 0;
        }
      } else {
        if (inputRGX.test(array[i + 1].value)) {
          return false;
        } else {
          array[i + 1].value = 0;
        }
      }
    });
  }
}
setvalue(input);
