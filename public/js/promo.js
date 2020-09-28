var promos = [
    {
        id: 1,
        name: "Beef / အမဲသား",
        price: 3000,
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
        image: "/img/featured/feature-10.jpg",
    },
    {
        id: 2,
        name: "Banana / ငွက္ေပ်ာသီး",
        price: 2000,
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
        image: "/img/featured/feature-2.jpg",
    },
    {
        id: 3,
        name: "Guava / မာလကာသီး",
        image: "/img/featured/feature-3.jpg",
        price: 1000,
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
    },
    {
        id: 4,
        name: "Orange Juice/ လိမ္ေမာ္ရည္",
        image: "/img/product/product-11.jpg",
        price: 2000,
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
    },
    {
        id: 5,
        name: "Water-Melon / ဖရဲသီး",

        image: "/img/featured/feature-4.jpg",
        price: 3000,
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * 3000)
            );
        },
    },
    {
        id: 6,
        name: "Hmburger / ဟမ္ဘာဂါ္",
        price: 2000,
        image: "/img/featured/feature-6.jpg",
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
    },
    {
        id: 7,
        name: "Mango / သရက္သီး",
        price: 1000,
        image: "/img/featured/feature-7.jpg",
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
    },
    {
        id: 8,
        name: "Apple / ပန္းသီး",
        price: 1000,
        image: "/img/featured/feature-8.jpg",
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
    },
    {
        id: 9,
        name: "Raisin /စပ်စ္ေျခာက္",
        price: 3000,
        image: "/img/product/product-9.jpg",
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
    },
];

loadData();
// function deleteItem(index) {
//     promos.splice(index, 1);
//     loadData();
// }
// function editItem(name, id) {
//     var editName = prompt("Enter Item  Name", name);
//     var item = promos.find(function (v) {
//         return v.id === id;
//     });
//     item.name = editName;
//     loadData();
// }
function changeQuantity(val, id) {
    var item = promos.find(function (v) {
        return v.id === id;
    });
    item.quantity = val;
    loadData();
}

//discount
function loadData(coupon) {
    var r = ``;
    if (coupon === "promo") {
        items = promos.map(function (v) {
            v.discount = 20;
            return v;
        });
    }

    promos.forEach(function (v, i) {
        r += `

        <div class="card m-lg-4 " style="width: 20rem;">
            <img src="${v.image}" class="card-img-top" >
            <div class="card-body">
                <p class="card-text">${v.name}</p>

            <p class="card-text">MMK: ${v.price}</p>
        </div>
            <div class="container">
                        <input type="number" value="${
                            v.quantity
                        }" onchange="changeQuantity(this.value,${
            v.id
        })"placeholder="Quatity">
                                <i>Qty</i>
                                <p>Price : ${v.total()}MMK</p>
                    </div>

            </div>`;
    });
    itemPromo.innerHTML = r;

    total.innerHTML = `(Total MMK -${getTotal()})`;
    function getTotal() {
        var total = 0;
        promos.forEach(function (v) {
            total += v.total();
        });

        return total;
    }

}
