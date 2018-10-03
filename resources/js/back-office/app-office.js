var messageAlert = document.getElementById('message-alert');
console.log('bien affiché');
if (messageAlert) {
    setTimeout(() => {
        var style = window.getComputedStyle(messageAlert);
        messageAlert.style.marginBottom = "-" + style.height;
        messageAlert.style.opacity = "0";
        setTimeout(() => {
            messageAlert.style.display = 'none';
        }, 1000);
    }, 2000);
}