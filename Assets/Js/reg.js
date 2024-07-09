
let nextOne = document.querySelector("#next-1");
let nextTwo = document.querySelector("#next-2");
let backOne = document.querySelector("#back-1");
let backTwo = document.querySelector("#back-2");


let personalInfo = document.querySelector('.personal');
let contactInfo = document.querySelector('.contact');
let pass = document.querySelector('.pass');


nextOne.addEventListener('click', ()=>{
    personalInfo.style.display = 'none';
    contactInfo.style.display = 'block';
    pass.style.display= "none";
})


nextTwo.addEventListener('click', ()=>{
    personalInfo.style.display = 'none';
    contactInfo.style.display = 'none';
    pass.style.display= "block";
})

backOne.addEventListener('click', ()=>{
    personalInfo.style.display = 'block';
    contactInfo.style.display = 'none';
    pass.style.display= "none";
})


backTwo.addEventListener('click', ()=>{
    personalInfo.style.display = 'none';
    contactInfo.style.display = 'block';
    pass.style.display= "none";
})