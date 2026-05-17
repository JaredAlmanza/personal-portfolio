var addBtn = document.getElementById('addToList');
var elList = document.getElementById('list');
var elInput = document.getElementById('itemName');
var elCounter = document.getElementById('counter');

function updateCounter() {
    var count = elList.getElementsByClassName('alert').length;
    elCounter.textContent = count;
}

function addItem() {
    var itemText = elInput.value.trim(); 

    if (itemText === "") {
        alert("Please enter an item name before adding.");
        return;
    }
	
    var newEl = document.createElement('div');
    newEl.classList.add('alert', 'alert-info', 'mt-2');
    newEl.textContent = itemText;

    newEl.addEventListener('click', function() {
        elList.removeChild(newEl);
        updateCounter();
    });
    elList.appendChild(newEl);
    updateCounter();
    elInput.value = "";
}

addBtn.addEventListener('click', addItem);
