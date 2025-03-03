document.addEventListener("DOMContentLoaded", function () {
    let products = document.querySelectorAll(".product-card");

    products.forEach(card => {
        let btn = card.querySelector("button");

        card.addEventListener("mouseenter", () => {
            btn.classList.add("bounce");
        });

        card.addEventListener("mouseleave", () => {
            btn.classList.remove("bounce");
        });
    });

    function startSlider(containerId, itemsPerPage = 5) {
        let container = document.getElementById(containerId);

        if (!container) return;

        let index = 0;

        let items = Array.from(container.children);

        let total = items.length;

        function showItems() {
            items.forEach((item, i) => {
                if (i >= index && i < index + itemsPerPage) {
                    item.style.display = "flex";
                } else {
                    item.style.display = "none";
                }
            });
        }

        showItems();

        setInterval(() => {
            index = (index + itemsPerPage) % total;
            showItems();
        }, 4000);
    }

    startSlider("discounts-grid");
    startSlider("hits-grid");
});