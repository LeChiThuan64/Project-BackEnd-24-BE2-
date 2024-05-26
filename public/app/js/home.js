  // Khi document được load hoàn tất
  document.addEventListener('DOMContentLoaded', function() {
    // Kiểm tra xem có thông báo không
    var alert = document.getElementById('success-alert');
    if (alert) {
        // Đặt timeout để ẩn thông báo sau 5 giây
        setTimeout(function() {
            alert.style.display = 'none';
        }, 2000); // 5000ms = 5s
    }

    
});