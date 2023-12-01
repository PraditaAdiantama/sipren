const statusHideBtn = document.getElementById('status-hide');
const showSideBtn = document.querySelector('button.menu-btn');
const statusContent = document.querySelector('.footer .status .content');
const sidebar = document.querySelector('.sidebar');

const dashboardWelcome = document.querySelector('.main .welcome-selayang');

if (statusContent) {
    statusHideBtn.addEventListener('click', () => {
        statusContent.classList.toggle('active');
        statusHideBtn.classList.toggle('active');
        statusIsHide = true
    });
}

if (dashboardWelcome) {
    document.querySelector('.main .history-date').style.height = dashboardWelcome.clientHeight + 'px';
    setInterval(() => {
        const date = new Date();
        document.getElementById('alert_timestamp').innerHTML = `${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;
        document.getElementById('date_time').innerHTML = `${date.getDate()}-${date.getMonth()}-${date.getFullYear()}`;
    }, 1000);
}