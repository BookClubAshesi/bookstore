
var removeItemButton = document.getElementsByClassName("btn-danger")
console.log(removeItemButton)
for (var i = 0; i < removeItemButton.length; i++) {
    var button = removeItemButton [i]
    button.addEventListener('click', function(event) {
        var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.remove()
    })
}