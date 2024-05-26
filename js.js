// Silde show banner------------------------------------------------------
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
// Menu dọc 
function toggleDropdown() {
    var dropdown = document.querySelector('.dropdown');
    dropdown.classList.toggle('active');
}
// Menu dọc tài khoản 
function toggleDropdownd() {
  var dropdownd = document.querySelector('.dropdownd');
  dropdownd.classList.toggle('active');
}

// nút tăng giảm số lượng----------------------------------------------------
function increaseQuantity() {
  var quantityInput = document.getElementById('quantity');
  var currentQuantity = parseInt(quantityInput.value);
  quantityInput.value = currentQuantity + 1;
}

function decreaseQuantity() {
  var quantityInput = document.getElementById('quantity');
  var currentQuantity = parseInt(quantityInput.value);
  if (currentQuantity > 1) {
      quantityInput.value = currentQuantity - 1;
  }
}
function toggleSubMenu(item) {
  var subMenu = item.querySelector('.sub-menu');
  if (subMenu) {
      subMenu.style.display = (subMenu.style.display === 'block') ? 'none' : 'block';
      item.classList.toggle('active');
  }
}
// Chọn/bỏ tất cả 
document.addEventListener('DOMContentLoaded', function () {
  var toggleSelectButton = document.getElementById('toggleSelectButton');
  var itemCheckboxes = document.querySelectorAll('.itemCheckbox');

  toggleSelectButton.addEventListener('click', function () {
    itemCheckboxes.forEach(function (checkbox) {
      checkbox.checked = !checkbox.checked;
    });
  });
});
// radio pay
function showInfo(infoId) {
  // Hide all info containers
  var infoContainers = document.getElementsByClassName('info-container');
  for (var i = 0; i < infoContainers.length; i++) {
      infoContainers[i].style.display = 'none';
  }

  // Show the selected info container
  var selectedInfo = document.getElementById(infoId);
  if (selectedInfo) {
      selectedInfo.style.display = 'block';
  }
}