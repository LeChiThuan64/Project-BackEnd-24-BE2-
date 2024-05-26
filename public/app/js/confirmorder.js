let productId = document.querySelectorAll(".confirm");
let state = document.querySelectorAll('.state');
let csrfToken = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");
productId.forEach((e) => {
    e.addEventListener("click", async () => {
        let id = e.value;
        let check = await getStateOrder(id, csrfToken);
        if (check == true) {
            e.className = '';
            e.classList.add('btn', 'btn-primary');
            state.forEach(element => {
                if(element.value == e.value) {
                    element.className = '';
                    element.classList.add('btn', 'btn-success');
                }

            });
        }
    });
});
async function getStateOrder(billId, csrfToken) {
    const url = "/set-state-orders";
    const response = await fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken,
        },
        body: JSON.stringify({
            bill_id: billId,
        }),
    });
    const data = await response.json();
    return data.result;
}
