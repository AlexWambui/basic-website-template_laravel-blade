document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        document.querySelectorAll('.notification').forEach(function (notification) {
            notification.remove();
        });
    }, 4000);
});
