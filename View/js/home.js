window.addEventListener("load", function() {
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
    const slider = $('.slider');
    const sliderItems = $$('.slider-item');
    const sliderMain = $('.slider-main');
    const dotsItem = $$('.slider-dot-item');
    var indexActiveDot = 0;
    var sliderItemsWidth = sliderItems[0].offsetWidth;
    var dotsItemA = Array.from(dotsItem);

    const tabs = $$(".tab-item");

    const tabActive = $(".tab-item.active");
    const line = $(".tabs .line");
    onClickdotSlider(dotsItem);
    autoSlider(dotsItem);
    onClicktabs();

    function onClickdotSlider(arrItem) {
        arrItem.forEach((value, index) => {
            value.onclick = function() {
                document.querySelector(".slider-dot-item.active").classList.remove("active");
                sliderMain.style.left = `calc(-100% * ${index})`;
                this.classList.add("active");
                indexActiveDot = index;
            }
        });
    }

    function autoSlider(arrItem) {
        setInterval(() => {
            document.querySelector(".slider-dot-item.active").classList.remove("active");
            sliderMain.style.left = `calc(-100% * ${indexActiveDot})`;
            arrItem[indexActiveDot].classList.add("active");
            indexActiveDot++;
            if (indexActiveDot === (arrItem.length)) indexActiveDot = 0;

        }, 3000);
    }
    requestIdleCallback(function() {
        line.style.left = tabActive.offsetLeft + "px";
        line.style.width = tabActive.offsetWidth + "px";
    });

    function onClicktabs() {
        tabs.forEach((tab, index) => {
            tab.onclick = function() {
                $(".tab-item.active").classList.remove("active");
                line.style.left = this.offsetLeft + "px";
                line.style.width = this.offsetWidth + "px";
                this.classList.add("active");
            }
        });
    }

});