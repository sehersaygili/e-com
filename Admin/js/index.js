
function openModal() {
    document.getElementById('myModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('myModal').style.display = 'none';
}
 function addInput() {
            var inputContainer = document.getElementById('inputContainere');
            var newInput = document.createElement('div');
            newInput.innerHTML =
                '<input type="text" name="pageform[]">';
            inputContainer.appendChild(newInput);
        }
document.addEventListener('DOMContentLoaded', function() {
    const themeToggler = document.querySelector(".theme-toggler");

    if (themeToggler) {
        themeToggler.addEventListener('click', () => {
            document.body.classList.toggle('dark-theme-variables');
            
            const lightModeIcon = themeToggler.querySelector('.material-symbols-outlined.active');
            const darkModeIcon = themeToggler.querySelector('.material-symbols-outlined:not(.active)');
            
            lightModeIcon.classList.toggle('active');
            darkModeIcon.classList.toggle('active');
        });
    } else {
        console.error('Theme toggler element not found.');
    }


    var yeniSayfaEkleCard = document.querySelector('.item.add-card');

        if (yeniSayfaEkleCard) {
            yeniSayfaEkleCard.style.cursor = 'pointer'; // Tıklanabilir imleci göstermek için
            yeniSayfaEkleCard.addEventListener('click', function () {
                openModal();
            });
        }
       
});
