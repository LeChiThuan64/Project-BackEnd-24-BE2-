$(document).ready(function () {
    //
    $('#add-category-button').on('click', function(e) {
        e.preventDefault();

        // Lấy dữ liệu từ form
        var formData = new FormData($('#add-category-form')[0]);

        $.ajax({
            url: '/manage-category/add',
            method: 'get',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                alert('Category added successfully');
                // Nếu muốn thực hiện các hành động khác sau khi thêm category thành công, bạn có thể thực hiện ở đây
                // Ví dụ: Cập nhật danh sách category mà không cần load lại trang
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error: ' + textStatus + ' ' + errorThrown);
            }
        });
    });




    const dropdownItems = document.querySelectorAll('#showDropdownMenu .dropdown-item');
    const dropdownButton = document.getElementById('showDropdownButton');

    dropdownItems.forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();
            const newCount = this.textContent;
            dropdownButton.innerHTML = `${newCount} <span class="caret"></span>`;
            const currentUrlParams = new URLSearchParams(window.location.search);
            currentUrlParams.set('show', newCount);
            window.location.search = currentUrlParams.toString();
        });
    });




    

});
