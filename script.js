let pretainer = document.querySelector('.cars-view');
let viewB = pretainer.querySelectorAll('.view');

//TO OPEN A POP-UP WINDOW
document.querySelectorAll('.cars-container .carM').forEach(carM => {
    carM.onclick = () => {
        pretainer.style.display = 'flex';
        let name = carM.getAttribute('data-name');
        viewB.forEach(view => {
            let target = view.getAttribute('data-target');
            if (name == target) {
                view.classList.add('active');
            }
        });
    };
});

//TO CLOSE THE POP-UP WINDOW
viewB.forEach(close => {
    close.querySelector('.fa-times').onclick = () => {
        close.classList.remove('active');
        pretainer.style.display = 'none';
    };
});