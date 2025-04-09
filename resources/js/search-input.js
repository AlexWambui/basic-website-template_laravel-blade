document.addEventListener('DOMContentLoaded', () => {
    const input = document.getElementById("myInput");

    input?.addEventListener("keyup", () => {
        const filter = input.value.toUpperCase();
        const items = document.getElementsByClassName("searchable");

        for (let i = 0; i < items.length; i++) {
            const item = items[i];
            const text = item.textContent || item.innerText;

            item.style.display = text.toUpperCase().includes(filter) ? "" : "none";
        }
    });
});
