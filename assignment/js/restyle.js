var styleCounter = 0;

/**
 *
 * @param [rest]
 */
function changeMainStyle(rest) {
    styleCounter = rest ? 1 : styleCounter + 1;
    const header = document.getElementById('headerColor');
    const body = document.getElementById('bodyColor');
    const footer = document.getElementById('footerColor');
    switch (styleCounter) {
        case 1:
            header.style.backgroundColor = '#007bff';
            body.style.backgroundColor = '#fff';
            footer.style.backgroundColor = '#007bff';
            break;
        case 2:
            header.style.backgroundColor = '#28a745';
            body.style.backgroundColor = '#71c44b';
            footer.style.backgroundColor = '#7fa267';
            break;
        case 3:
            header.style.backgroundColor = '#6610f2';
            body.style.backgroundColor = '#8f5bfa';
            footer.style.backgroundColor = '#9c78f2';
            break;
        case 4:
            styleCounter = 0;
            header.style.backgroundColor = '#FF6600';
            body.style.backgroundColor = '#FFA74D';
            footer.style.backgroundColor = '#FFC08A';
            break;
    }
}
