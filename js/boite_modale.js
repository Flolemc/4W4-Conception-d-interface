(function () {
    
    console.log('boite_modale.js');
    const modal = document.querySelector('.boite__modale');

    const btnsSuite = document.querySelectorAll('.cours__desc__suite');
    console.log(btnsSuite.length);

    for (const btn of btnsSuite) {
        btn.addEventListener('mousedown', () => console.log(btn));
    }
})()