function numValidate() {
    var x, num;
    x = document.getElementById('number').value;
    if (1 <= x && 10 >= x) {
        document.getElementById('demo').innerHTML = "Valid Input";
    } else {
        document.getElementById('demo').innerHTML = "Invalid Input";
    }
}
function check() {
    document.getElementsByTagName("H1")[0].setAttribute("class", "democlass");

}