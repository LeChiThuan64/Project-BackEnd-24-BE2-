// Tạo biểu đồ
let da = getProducts();
console.log(da);
async function createChart() {
    let productData = await getProducts();
    var labels = productData.mostPopularProduct.map(function (item) {
        return item.name;
    });
    var data = productData.mostPopularProduct.map(function (item) {
        return item.total_quantity;
    });
    // Mảng màu sắc cho từng cột
    const colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];

    new Chart(document.getElementById('myChart1'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Sản phẩm bán ra nhiều nhất (cái)',
                data: data,
                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

async function getProducts() {
    const url = '/most-product';
    const response = await fetch(url);
    const data = await response.json();
    return data;
}

createChart();
let total = document.querySelector('.total');

async function getTotal() {
    const url = '/total';
    const response = await fetch(url);
    const data = await response.json();
    total.innerHTML = data.total;
    return data;
}
getTotal();