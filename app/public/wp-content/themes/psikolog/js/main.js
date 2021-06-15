// Hamburger Menu Fonksiyonu
function onClickMenu() {
    document.getElementById("navham").classList.toggle("change");
}


// Hamburger Menu Butonu Carpi Sembolu
const menuBtn = document.querySelector('.hamburger');
let menuOpen = false;

menuBtn.addEventListener('click', () => {
    if(!menuOpen){
        menuBtn.classList.add('cevir');
        menuOpen = true;
    } else {
        menuBtn.classList.remove('cevir')
        menuOpen = false;
    }
});
