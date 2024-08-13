const cardMQ = document.querySelectorAll('.card-mediaQ');

cardMQ.forEach((cMQ) => {
    cMQ.addEventListener('click', () => {
        removeActiveClasses();
        cMQ.classList.add('active');
    
})
})

function removeActiveClasses(){
    cardMQ.forEach((cMQ) => {
        cMQ.classList.remove('active');
    })
}