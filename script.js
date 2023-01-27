let input = document.querySelectorAll('input')
console.log(input);
function setvalue(array) {
    for (let i = 0; i < array.length - 1; i++) {
        array[i].addEventListener('input', function () {
            if (i % 2 != 0) {
                array[i - 1].value = 0
            } else {
                array[i + 1].value = 0
            }
        })
    }
}
setvalue(input)