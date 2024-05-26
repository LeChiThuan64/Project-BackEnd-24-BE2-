let guiTinNhan =document.getElementsByClassName('gui') [0]
let vanBan = document.getElementById('vanban')
let chat =document.getElementById('chat')

guiTinNhan.onclick=function(){
    chat.innerHTML+=`<p class="o-chat text-gui">${vanBan.value}</p>`
    vanBan.value="";
    // dòng này để co nó chạy theo tin nhắn 
    chat.scrollTop= chat.scrollHeight;
}
// vanBan.addEventListener('keydown',function(event){
// if(event.code == 'Enter')
// {
//     chat.innerHTML+=` <p class="o-chat text-nhan">${vanBan.value}</p>`;
//     // để gửi tin nhắn xong rồi nó xe biên mất
//     vanBan.value="";
//     // dòng này để co nó chạy theo tin nhắn 
//     chat.scrollTop= chat.scrollHeight;
// }
// }
// )
let minichat = document.querySelector('.nhoNe');
let khungchat = document.querySelector('.contaniner-fluid');

minichat.onclick = function() {
    if (khungchat.classList.contains("jan")) {
        khungchat.classList.remove("jan");
        khungchat.style.height = '350px'; // Mở rộng chiều cao
        khungchat.style.width = '500px'; // Mở rộng chiều rộng
    } else {
        khungchat.classList.add("jan");
        khungchat.style.height = '50px'; // Thu nhỏ chiều cao
        khungchat.style.width = '90px'; // Thu nhỏ chiều rộng
    }
}





