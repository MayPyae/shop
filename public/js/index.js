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
    var cc = 0;
    req.onsuccess = function () {
        var cursor = event.target.result;
        if (cursor) {
            var row = tbody.insertRow(cc);
            row.insertCell(0).appendChild(document.createTextNode(cc));
            var image = document.createElement("img");
            image.src = cursor.value.image;
            image.style.height = "100px";
            row.insertCell(1).appendChild(image);
            // row.insertCell(2).appendChild(
            //     document.createTextNode(cursor.value.name)
            // );
            row.insertCell(2).appendChild(
                document.createTextNode(cursor.value.price)
            );
            var qty = document.createElement("input");
            qty.classList.add("input");
            qty.type = "number";
            qty.value = cursor.value.quantity;
            qty.setAttribute("onchange", "changeQuantity(" + +")");
            qty.placeholder = "Quantity";

            row.insertCell(3).appendChild(qty);
            // var btn = document.createElement("button");
            // btn.classList.add("btn");
            // btn.classList.add("btn-success");
            // btn.innerHTML = "<span class='fa fa-plus'></span>";

            // btn.setAttribute("onclick", "multiply()");
            // row.insertCell(4).appendChild(btn);

            // var btn = document.createElement("button");
            // btn.classList.add("btn");
            // btn.classList.add("btn-success");
            // btn.innerHTML = "<span class='fa fa-minus'></span>";
            // btn.setAttribute("onclick", "multiply()");
            // row.insertCell(5).appendChild(btn);

            var total = document.createElement("p");
            total.classList.add("text");
            total.innerHTML = cursor.value.quantity * cursor.value.price;

            row.insertCell(4).appendChild(total);
            var btn = document.createElement("button");
            btn.classList.add("btn");
            btn.classList.add("btn-danger");
            btn.innerHTML = "<span class='fa fa-times'></span>";
            btn.setAttribute("onclick", "removeItem(" + cursor.key + ")");
            row.insertCell(5).appendChild(btn);
            alltotal.innerHTML=  `(MMK:${(cursor.value.quantity * cursor.value.price)})`;
            cc++;
            console.log(cursor.value.name);
            cursor.continue();
        }
    };
}
function removeItem(key) {
    var tx = database.transaction("cart", "readwrite");
    var os = tx.objectStore("cart");
    os.delete(key);
    location.reload();
}
