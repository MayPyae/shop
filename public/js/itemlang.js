var languageList = [
    { en: "Beef", mm: "အမဲသား" },
    { en: "Banana", mm: "ငွက္ေပ်ာသီး" },
    { en: "Guava", mm: "မာလကာသီး" },
    { en: "Fired Chicken", mm: "ျကက္ေဲကာ္" },
    { en: "Water-Melon", mm: "ဖရဲသီး" },
    { en: "Hmburger", mm: "ဟမ္ဘာဂါ" },
    { en: "Mango", mm: "သရက္သီး" },
    { en: "Apple", mm: "ပန္းသီး" },
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
var iterator = document.createTreeWalker(itemlang, whatToShow, filter, false);
eles.push(iterator.firstChild());
while ((node = iterator.nextSibling())) {
    eles.push(node);
}

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
