// Variable
const courses = document.querySelector('#courses-list'),
      shoppingCart = document.querySelector('#cart__content tbody'),
      clearCart = document.querySelector('#clear-cart')


// Listener

eventListener()

function eventListener(){

    // all eventlistener will be added here..

  courses.addEventListener('click', addToCart )
   // eventListener for shoppinCart
  shoppingCart.addEventListener('click', removeCart )
   // eventlistener for Clear Cart
   clearCart.addEventListener('click', removeShoppingCart)

   //Document Ready

   document.addEventListener('DOMContentLoaded', getFromLocalStorage)
}

// Function
 
function addToCart(e){
    // prevent Default
  e.preventDefault()

  if(e.target.classList.contains('add-to-cart')){
      
    const course = e.target.parentElement.parentElement;

    getCourseInfo(course)


  }
}
function getCourseInfo(course){
   // create a Template 
    const courseInfo = {
     
        image: course.querySelector('img').src,
        tittle: course.querySelector('h4').textContent,
        price: course.querySelector('.price span').textContent,
        id: course.querySelector('a').getAttribute('data-id')

    }
     addToShoppingCart(courseInfo)
   
}
function addToShoppingCart(course){
 // create <tr>

 const row = document.createElement('tr')
 row.style.fontSize = '9px'
  row.innerHTML = `
   <tr>
      <td><img src="${course.image}" width=60></td>
      <td>${course.tittle}</td>
      <td>${course.price}</td>
      <td>
      <a href="#" class="remove" data-id="${course.id}">X</a>
      </td>

   </tr>

  `
  shoppingCart.appendChild(row)
  
  storageLocalStorage(course)
}

function removeCart(e){
    // Remove from dom
  if(e.target.classList.contains('remove')){
      e.target.parentElement.parentElement.remove()
      //remove from local storage
      courseId = courses.querySelector('a').getAttribute('data-id');
  }
 console.log(courseId)
  removeCourseFromLocalStorage(courseId)

}

function  removeCourseFromLocalStorage(id){
    // remove from local storage
    let coursesLS =  addToLocalStorage()

    coursesLS.forEach(function(coursesLS, index){
         if(coursesLS === id){
            coursesLS.splice(index, 1)
         }
    })

}

function  removeShoppingCart(){

    /* not the preferred way ...
    shoppingCart.innerHTML = '';
*/
    // preferred way...
    while (shoppingCart.firstChild) {
        shoppingCart.removeChild(shoppingCart.firstChild)
    }

    clearFromLocalStorage()
}

// Clear From Local storage

function clearFromLocalStorage(){

    // clear from local storage via Clear cart

    localStorage.clear()
}

function addToLocalStorage(){

    let courses;
    const addToLS = localStorage.getItem('courses')

    if(addToLS === null){
        courses = [];
    }else{
        courses = JSON.parse(addToLS)
    }

    return courses;
}

function storageLocalStorage(course){
   let courses =  addToLocalStorage()
  
   courses.push(course)
    
   localStorage.setItem('courses', JSON.stringify(courses))


}

function getFromLocalStorage(){
    let courseLS =  addToLocalStorage()

    courseLS.forEach(function(course){
        // Create the table row
        const row = document.createElement('tr')
        row.style.fontSize = '9px'
         row.innerHTML = `
          <tr>
             <td><img src="${course.image}" width=60></td>
             <td>${course.tittle}</td>
             <td>${course.price}</td>
             <td>
             <a href="#" class="remove" data-id="${course.id}">X</a>
             </td>
       
          </tr>
       
         `
         shoppingCart.appendChild(row)
    })
}


