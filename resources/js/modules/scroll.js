var arrayLinks = document.querySelectorAll("#navbar>div.collapse>ul>li>a");

Array.from(arrayLinks).forEach(link => {
    link.addEventListener("click", () => {
        clickLink(link);
    });
});

var clickLink = link => {
    var toTop;
    event.preventDefault();
    toTop = document.querySelector(link.hash).offsetTop;
    if (link.hash == "#home") toTop = 0;
    window.scroll({
        top: toTop,
        behavior: "smooth"
    });
};

// display animations with scroll
var titres = Array.from(document.querySelectorAll("h2"));
var aboutItems = Array.from(document.querySelectorAll("#about .item"));
var portfolioItems = Array.from(
    document.querySelectorAll("#portfolio .item")
);
var actiItems = Array.from(document.querySelectorAll("#mes-acti  .item"));
console.log(actiItems);
document.addEventListener("scroll", () => {
    let scroll = document.querySelector("body").scrollTop;
    titres.forEach(titre => {
        if (scroll > titre.offsetTop - 650) {
            titre.classList = "animated bounceInLeft";
            let timeTrans = 500;
            switch (titre) {
                case titres[0]:
                    setTimeout(() => {
                        aboutItems.forEach(element => {
                            element.classList = "col-4 animated fadeIn";
                        });
                    }, timeTrans);
                    break;
                case titres[1]:
                    portfolioItems.forEach(element => {
                        setTimeout(() => {
                            // element.classList = "img-content animated bounceIn";
                            element.classList =
                                "img-content animated zoomIn faster";
                        }, (timeTrans += 100));
                    });
                    break;
                case titres[2]:
                    setTimeout(() => {
                        actiItems.forEach(element => {
                            element.classList = "animated fadeIn";
                        });
                    }, timeTrans);
                    break;
            }
        } else if (scroll < 50) {
            titres.forEach(titre => {
                titre.classList = "hide";
            });
            aboutItems.forEach(item => {
                item.classList = "col-4 hide";
            });
            portfolioItems.forEach(item => {
                item.classList = "img-content hide";
            });
            actiItems.forEach(item => {
                item.classList = "hide";
            })
        }
    });
});
