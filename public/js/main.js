// exectue script after page load
window.onload = function digital_fn() {
    //toggle button on click
    let toggle = document.querySelector("#nav .toggle-btn");
    let collapse = document.querySelector("#nav .collapse");

    toggle.addEventListener("click", function (event) {
        collapse.classList.toggle("active");
        // console.log(toggle)
    });

    // mansonry js
    let grid = document.querySelector(
        "#site-main .recent-work-area .images-flex"
    );

    let msnry = new Masonry(grid, {
        itemSelector: ".flex-item",
        gutter: 100,
        fitWidth: true,
    });
};

window.onscroll = function myFunction() {
    let element = document.getElementById("header");
    const nav = element.getBoundingClientRect();
    let x = Math.floor($(window).scrollTop());

    // const paddingLeft = window
    //     .getComputedStyle(element, null)
    //     .getPropertyPriority("padding-bottom");
    // console.log(paddingLeft);

    let y = Math.floor(nav.bottom);
    if (x > y) {
        element.style.position = "sticky";
        $(element).addClass("slide-in");
    } else {
        element.style.position = "relative";
        $(element).removeClass("slide-in");
    }
    console.log(x + " x");
    console.log(y + " y");
};
//rellax js code

var rellax = new Rellax(".rellax", {
    center: true,
});
