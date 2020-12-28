var promos = [
    {
        id: 1,

        price: 210000,
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
        image: "/img/shoes/black.png",
    },
    {
        id: 2,

        price: 210000,
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
        image: "/img/shoes/blue.png",
    },
    {
        id: 3,

        price: 210000,
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
        image: "/img/shoes/skyblue.png",
    },
    {
        id: 4,

        price: 210000,
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
        image: "/img/shoes/bag1.png",
    },
    {
        id: 5,


        price: 210000,
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
        image: "/img/shoes/bag.png",
    },
    {
        price: 210000,
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
        image: "/img/shoes/e.jpg",
    },
    {
        id: 7,

        price: 210000,
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
        image: "/img/shoes/a.png",
    },
    {
        id: 8,

        price: 210000,
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
        image: "/img/shoes/d.jpg",
    },
    {
        id: 9,

        price: 210000,
        quantity: 0,
        discount: 0,
        total: function () {
            return (
                this.quantity * this.price -
                (this.discount / 100) * (this.quantity * this.price)
            );
        },
        image: "/img/shoes/c.png",
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
