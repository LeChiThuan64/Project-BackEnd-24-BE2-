let myChart;

async function changeData(timeframe) {
    let revenueData;
    if (timeframe === 'year') {
        revenueData = await getRevueByMonth();
    } else {
        revenueData = await getRevueByDay();
    }

    var labels = revenueData.revenue.map(function (item) {
        return item.date;
    });
    var data = revenueData.revenue.map(function (item) {
        return item.revenue;
    });

    if (myChart) {
        myChart.destroy(); // Xóa biểu đồ cũ trước khi vẽ biểu đồ mới
    }

    var ctx = document.getElementById('myChart').getContext('2d');
    myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Doanh thu tính băng (VND)',
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
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
document.querySelector('.btn-primary').addEventListener('click', function() {
    changeData('month');
});

document.querySelector('.btn-success').addEventListener('click', function() {
    changeData('year');
});

async function getRevueByDay() {
    const url = '/revenue';
    const response = await fetch(url);
    const data = await response.json();
    return data;
}
async function getRevueByMonth() {
    const url = '/revenueM';
    const response = await fetch(url);
    const data = await response.json();
    return data;
}
window.addEventListener('DOMContentLoaded', (event) => {
    changeData('month');
});