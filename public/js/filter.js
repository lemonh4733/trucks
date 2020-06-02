const filterBtn = document.querySelector('.openFilter');
const filter = document.querySelector('.filter');

filterBtn.addEventListener("click", displayFilter);

let filterState = 0;
//<i class="fas fa-sort-up"></i>
function displayFilter() {
    if(filterState === 0) {
        filter.style.display = "block";
        filterState = 1;
        filterBtn.innerHTML = "Uždaryti"
        return 0;
    } 
    filter.style.display = "none";
    filterState = 0;
    filterBtn.textContent = "Filtruoti"
    return 0;
}