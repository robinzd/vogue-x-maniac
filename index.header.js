 /*===== LINK ACTIVE =====*/
 const linkColor = document.querySelectorAll('.nav_link')
    

 function colorLink() {
     if (linkColor) {
         linkColor.forEach(l => l.classList.remove('active'))
         this.classList.add('active')
     }
 }
 linkColor.forEach(l => l.addEventListener('click', colorLink))

//  link active ends