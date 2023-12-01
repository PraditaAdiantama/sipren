const statusHideBtn = document.getElementById('status-hide');
const showSideBtn = document.querySelector('button.menu-btn');
const statusContent = document.querySelector('.footer .status .content');
const sidebar = document.querySelector('.sidebar');

if (statusContent) {
    statusHideBtn.addEventListener('click', () => {
        statusContent.classList.toggle('active');
        statusHideBtn.classList.toggle('active');
        statusIsHide = true
    });
}