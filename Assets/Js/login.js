const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

// Sign-up vars
const nextOne = document.getElementById("next-1");
const nextTwo = document.getElementById("next-2");
const backOne = document.getElementById("back-1");
const backTwo = document.getElementById("back-2");
const signUp = document.getElementById("sign-up");

const secOne = document.querySelector(".section-1");
const secTwo = document.querySelector(".section-2");
const secThree = document.querySelector(".section-3");
const inputEl = document.querySelector("input");

// Progress
const stepOne = document.querySelector(".step-1");
const stepTwo = document.querySelector(".step-2");
const stepThree = document.querySelector(".step-3");



// Toggle Sign-up and Sign-in
signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


//  Sign - up form
    nextOne.addEventListener('click', (e) =>{
			e.preventDefault();

		
					secOne.style.display = 'none';
					secTwo.style.display = 'block';
					stepOne.style.backgroundColor ="#ffbb55";					


       });

    nextTwo.addEventListener('click', (e) =>{
			e.preventDefault();
			secOne.style.display = 'none';
			secTwo.style.display = 'none';
			secThree.style.display ='block';
			stepTwo.style.backgroundColor ="#41f1b6";
	});


	backOne.addEventListener('click', (e) =>{
			e.preventDefault();
			secOne.style.display = 'block';
			secTwo.style.display = 'none';
			secThree.style.display ='none';
			stepOne.style.background ="none";
		});

	backTwo.addEventListener('click', (e) =>{
			e.preventDefault();
			secOne.style.display = 'none';
			secTwo.style.display = 'block';
			secThree.style.display ='none';
			stepTwo.style.background ="none";
		});



		// Media

   let	showSignUp = document.querySelector('.show-Sign-up');
   
   showSignUp.addEventListener('click', ()=>{
     window.location = "login_mobile.php";   
   })





