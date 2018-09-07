var arrayLinks = document.querySelectorAll('#navbar>div.collapse>ul>li>a');


Array.from(arrayLinks).forEach((link) => {
    link.addEventListener('click', () => {
        clickLink(link);
    })
})
var clickLink = (link) => {
    var toTop;
    event.preventDefault();
    toTop = document.querySelector(link.hash).offsetTop;
    if (link.hash == '#home')
        toTop = 0;
    window.scroll({
        top: toTop,
        behavior: "smooth"
    });
}
