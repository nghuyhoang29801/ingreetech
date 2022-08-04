window.addEventListener("load", function() {
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);



    const line = $(".tabs .line");
    const tabs = $$(".tab-item");
    const tabActive = $(".tab-item.active");
    const tab_panes = $$(".tab-pane");

    toggleMenu();
    onClicktabs();

    function toggleMenu() {
        const myAccount = $(".nav li");
        const submyAccount = $(".sub_nav");
        const list_nav = $$(".nav>li");
        list_nav.forEach((value, index) => {
            value.onclick = function() {
                $(".nav>.active").classList.remove("active");
                this.classList.add("active");
                activeItem($$(".sub_nav>li"), $(".sub_nav .active"));
                if (value == myAccount) {
                    submyAccount.style.display = "block";
                } else submyAccount.style.display = "none";
            }
        });
    }
    requestIdleCallback(function() {
        line.style.left = tabActive.offsetLeft + "px";
        line.style.width = tabActive.offsetWidth + "px";
    });

    function onClicktabs() {
        tabs.forEach((tab, index) => {
            const pane = tab_panes[index];
            tab.onclick = function() {
                $(".tab-item.active").classList.remove("active");
                $(".tab-pane.active").classList.remove("active");
                line.style.left = this.offsetLeft + "px";
                line.style.width = this.offsetWidth + "px";
                this.classList.add("active");
                pane.classList.add("active");
            }
        });
    }

    function activeItem(arr, active_point) {
        arr.forEach((value) => {
            value.onclick = function() {
                active_point.classList.remove("active");
                this.classList.add("active");
            }
        });
    }
});