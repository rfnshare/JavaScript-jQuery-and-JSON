
var counter = 1;
function add() {
var createliTag = document.createElement('li');
createliTag.className = "list-item";
createliTag.innerHTML = "The Counter is " +counter;
document.getElementById('the-list').appendChild(createliTag);
counter++;
}
function hAdd() {
    var createHtag = document.createElement('h6');
    createHtag.className = "h6-item";
    createHtag.innerHTML = "This is Number " +counter;
    document.getElementById('h-list').appendChild(createHtag);
    counter++;

}