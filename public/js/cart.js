var items = [
    {
        id: 1,

        price:270000,
        image: "/img/shoes/skyblue.png",
        quantity: 1,
        discount: 0,
    },
    {
        id: 2,

        price: 210000,
        image: "/img/shoes/blue.png",
        quantity: 1,
        discount: 0,
    },
    {
        id: 3,

        price: 210000,
        image: "/img/shoes/black.png",
        quantity: 1,
        discount: 0,
    },
    {
        id: 4,
        price: 210000,
        image: "/img/shoes/green1.png",
        quantity: 1,
        discount: 0,
    },
    {
        id: 5,

        price: 210000,
        image: "/img/shoes/c.png",
        quantity: 1,
        discount: 0,
    },
    {
        id: 6,

        price: 210000,
        image: "/img/shoes/a.png",
        quantity: 1,
        discount: 0,
    },
    {
        id: 7,

        price: 210000,
        image: "/img/shoes/d.jpg",
        quantity: 1,
        discount: 0,
    },
    {
        id: 8,

        price: 210000,
        image: "/img/shoes/f.jpg",
        quantity: 1,
        discount: 0,

    },
];
var request, database;
request = indexedDB.open("shop");
request.onsuccess = function () {
    database = event.target.result;
    setCount();
};
request.onupgradeneeded = function () {
    database = event.target.result;
    var cart = database.createObjectStore("cart", { keyPath: "id" });
};
loadData();

function loadData(product) {
    items.forEach(function (item, index, array) {
        var s =
            '<div class="featured__item pl-4">' +
            '<div class="featured__item__pic set-bg">' +
            '<img src="' +
            item.image +
            '" alt="" style="width:260px" >' +
            '<ul class="featured__item__pic__hover">' +
            ' <li><a href="#">'+ '<button class="btn pt-2"  onclick="addToShow()"><i class="fa fa-retweet"></i></button>' +"</a></li>"+
            "  <li><a href='#'>" +
            '<button class="btn pt-2"  onclick="addToCart(' +
            index +
            ',this)"><i class="fa fa-shopping-cart"></i></button>' +
            "</a></li>" +
            "</ul>" +
            "</div>" +
            '<div class="featured__item__text">' +

            "<h5>" +
            item.price +
            "</h5>" +
            "</div>" +
            "</div>";
        itemRow.innerHTML += s;

    });

}

function addToCart(index, btn) {
    btn.setAttribute("disable", "true");
    var tx = database.transaction("cart", "readwrite");
    var os = tx.objectStore("cart");
    os.add(items[index]);
    setCount();
}
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
function addToShow() {
    window.open("view");
}

