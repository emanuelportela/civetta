// navbar background color change on scroll

/* Essai 1 
window.onscroll = () => {
   const nav = document.querySelector('.header-section');
      if(this.scrollY <= 10) nav.className = ''; else nav.className = 'scroll';
};
*/

/* Essai 2 */

window.onscroll = () => {
   
   const nav = document.querySelector('.header-section');
   
   if (this.scrollY > 0) {
      nav.classList.add("scroll");
   } else {
      nav.classList.remove("scroll");
   }
};