
var deletebookButton = document.getElementsByClassName("btn-danger")
console.log(deletebookButton)
for (var i = 0; i < deletebookButton.length; i++) {
    var button = deletebookButton [i]
    button.addEventListener('click', function(event) {
        var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.remove()
    })
}