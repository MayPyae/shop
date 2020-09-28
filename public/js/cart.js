var items = [
    {
        id: 1,
        name: "Beef / အမဲသား",
        price: 3000,
        image: "/img/featured/feature-10.jpg",
        quantity: 1,
        discount: 0,
    },
    {
        id: 2,
        name: "Banana / ငွက္ေပ်ာသီး",
        price: 2000,
        image: "/img/featured/feature-2.jpg",
        quantity: 1,
        discount: 0,
    },
    {
        id: 3,
        name: "Guava / မာလကာသီး",
        price: 1000,
        image: "/img/featured/feature-3.jpg",
        quantity: 1,
        discount: 0,
    },
    {
        id: 4,
        name: "Fired Chicken / ျကက္ေျကာ္",
        price: 2000,
        image: "/img/latest-product/lp-3.jpg",
        quantity: 1,
        discount: 0,
    },
    {
        id: 5,
        name: "Water-Melon / ဖရဲသီး",
        price: 3000,
        image: "/img/featured/feature-4.jpg",
        quantity: 1,
        discount: 0,
    },
    {
        id: 6,
        name: "Hmburger / ဟမ္ဘာဂါ္",
        price: 2000,
        image: "/img/featured/feature-6.jpg",
        quantity: 1,
        discount: 0,
    },
    {
        id: 7,
        name: "Mango / သရက္သီး",
        price: 1000,
        image: "/img/featured/feature-7.jpg",
        quantity: 1,
        discount: 0,
    },
    {
        id: 8,
        name: "Apple / ပန္းသီး",
        price: 1000,
        image: "/img/featured/feature-8.jpg",
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
            '<h6 id="itemlang">' +
            item.name +
            "</h6>" +
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
    alert("Hello");
}

