var request, database;
request = indexedDB.open("shop");
request.onsuccess = function () {
    database = event.target.result;
    setCount();
    loadData();
};
request.onupgradeneeded = function () {
    database = event.target.result;
    var cart = database.createObjectStore("cart", { keyPath: "id" });
};
function setCount() {
    var tx = database.transaction("cart", "readonly");
    var os = tx.objectStore("cart");
    var rc = os.count();
    rc.onsuccess = function () {
        countText.innerHTML = rc.result;
        rc.onerror = function () {
            alert("This item is already exit.");
        };
    };
}

function loadData() {
    var tx = database.transaction("cart");
    var os = tx.objectStore("cart");
    var req = os.openCursor();
    var dd = 0;
    req.onsuccess = function () {
        var cursor = event.target.result;
        if (cursor) {
            var row = order.insertRow(dd);
            row.insertCell(0).appendChild(document.createTextNode(dd));
            row.insertCell(1).appendChild(
                document.createTextNode(cursor.value.name)
            );

            var total = document.createElement("p");
            total.classList.add("text");
            total.innerHTML = cursor.value.quantity * cursor.value.price;
            row.insertCell(2).appendChild(total);

            alltotal.innerHTML=  `(MMK:${(cursor.value.quantity * cursor.value.price)})`;

            dd++;

            cursor.continue();
        }




    }




    };

