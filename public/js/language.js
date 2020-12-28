var languageList = [
    { en: "Home", mm: "ပင္မစာမ်က္နွာ" },
    { en: "Shop", mm: "ေစ်း၀ယ္ရန္" },
    { en: "Shoping Cart", mm: "ေစ်း၀ယ္မွတ္တမ္း" },
    { en: "Check Out", mm: "စစ္ေဆးရန္" },

    { en: "Contact", mm: "ဆက္သယ္ရြန္" },



    { en: "All Categories", mm: "ရႏိုင္ေသာအမ်ိဳးစားမ်ား" },
    { en: "support 24Hours", mm: "၂၄ နာရီ၀န္ေဆာင္မွု" },
    { en: "SEARCH", mm: "ရွာရန္" },
    { en: "+79-451-4143", mm: "+၇၉-၄၅၁-၄၁၄၃" },
    { en: "All departments", mm: "ရႏိုင္ေသာအမ်ိဳးစား" },
    { en: "Shoes", mm: "ဖိနပ္မ်ား" },
    { en: "Heads", mm: "ဦးထုပ္မ်ား" },
    { en: "Bags", mm: "အိတ္မ်ား" },
    { en: "Men", mm: "ေယာက်္ားေလး၀ိတ္" },
    { en: "Women", mm: "မိန္းကေလး၀ိတ္" },
    { en: "T-shirt", mm: "အက်ၤ ီမ်ား" },
    { en: "Shoes", mm: "ဖိနပ္မ်ား" },
    { en: "Heads", mm: "ဦးထုပ္မ်ား" },
    { en: "Bags", mm: "အိတ္မ်ား" },
    { en: "Women", mm: "မိန္းကေလး၀ိတ္" },
    { en: "Men", mm: "ေယာက်္ားေလး၀ိတ္" },
    { en: "Featured Product", mm: "ရႏိုင္ေသာအမ်ိဳးစားမ်ား" },




    {
        en: "Address: Shin Saw Pu Rd,Yangon",
        mm: "လိပ္စာ-ရွင္ေစာပုလမ္း၊ရန္ကုန္",
    },
    {
        en: "Phone:  +79-451-4143",
        mm: "ဖုန္းနံပါတ္-၀၉၇၉၄၅၁၄၁၄၃",
    },
    {
        en: "Email: hello@nike.com",
        mm: "အီးေမးလ္-hello@nikeshop.com",
    },
    {
        en: "Stay Home Shopping&copy;Nike |Shop",
        mm: "အိမ္မွာေနရင္းေစ်း၀ယ္ျကမယ္ &copy;Nike |Shop",
    },
    {
        en: "Get E-mail updates about our latest shop and special offers.",
        mm: "က်နော္ တို့ႏွင့္ ဆက္သ ြယ္ လိုလ်ွင္အီးေမးလ္ ပေးခဲ့ပေးပါ။",
    },
    {
        en: "Useful Links",
        mm: "၀န္ေဆာင္၀န္မွုမ်ား၀င္ေရာက္ျကည့္ႏိုင္ပါသည္။",
    },





];
var eles = [];
if (!localStorage.getItem("lang")) {
    localStorage.setItem("lang", "en");
}
var whatToShow = NodeFilter.SHOW_ELEMENT;
var filter = function (node) {
    return node.tagName.toLowerCase() == "a"
        ? NodeFilter.FILTER_ACCEPT
        : NodeFilter.FILTER_SKIP;
};
var iterator = document.createTreeWalker(navlang, whatToShow, filter, false);
eles.push(iterator.firstChild());
while ((node = iterator.nextSibling())) {
    eles.push(node);
}



eles.push(itemlangs);
eles.push(itemlangd);
eles.push(itemlangf);
eles.push(itemlangg);
eles.push(itemlangh);
eles.push(itemlangj);
eles.push(itemlangk);
eles.push(itemlangl);
eles.push(itemlangz);
eles.push(itemlangx);
eles.push(itemlangc);
eles.push(itemlangv);
eles.push(itemlangb);
eles.push(itemlangn);
eles.push(itemlangm);
eles.push(itemlangqq);
eles.push(itemlangpq);



eles.push(itemlangyqw);
eles.push(itemlangyqe);
eles.push(itemlangyqr);
eles.push(itemlangyqt);
eles.push(itemlangyqy);
eles.push(itemlangyqu);





console.log(eles);
for (var i = 0; i < eles.length; i++) {
    eles[i].innerHTML = languageList[i][localStorage.getItem("lang")];
}
language.elements["options"].forEach(function (item, index, array) {
    if (item.value == localStorage.getItem("lang")) {
        item.setAttribute("checked", "true");
    }
    item.onchange = function () {
        localStorage.setItem("lang", item.value);
        location.reload(true);
    };
});

// var languageLists = [
//     { enn: "Home", mmm: "ပင္မစာမ်က္နွာ" },
//     { enn: "Shop", mmm: "ေစ်း၀ယ္ရန္" },
//     { enn: "Shoping Cart", mmm: "ေစ်း၀ယ္မွတ္တမ္း" },
//     { enn: "Check Out", mmm: "စစ္ေဆးရန္" },
//     { enn: "Contact", mmm: "ဆက္သယ္ရြန္" },
// ];
// var elems = [];
// if (!localStorage.getItem("langg")) {
//     localStorage.setItem("langg", "enn");
// }
// var whatToShow = NodeFilter.SHOW_ELEMENT;
// var filter = function (node) {
//     return node.tagName.toLowerCase() == "a"
//         ? NodeFilter.FILTER_ACCEPT
//         : NodeFilter.FILTER_SKIP;
// };
// var iterator = document.createTreeWalker(navlangg, whatToShow, filter, false);
// elems.push(iterator.firstChild());
// while ((node = iterator.nextSibling())) {
//     elems.push(node);
// }

// console.log(elems);
// for (var i = 0; i < elems.length; i++) {
//     elems[i].innerHTML = languageLists[i][localStorage.getItem("langg")];
// }
// languagee.elements["optionss"].forEach(function (item, index, array) {
//     if (item.value == localStorage.getItem("langg")) {
//         item.setAttribute("checked", "true");
//     }
//     item.onchange = function () {
//         localStorage.setItem("langg", item.value);
//         location.reload(true);
//     };
// });
