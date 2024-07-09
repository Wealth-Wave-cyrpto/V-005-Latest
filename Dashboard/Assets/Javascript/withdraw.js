let investEl = document.getElementById('invest-el');
let contextEl = document.querySelector(".context-el");
let closeEl = document.querySelector(".close-context");


// Show invest Menu

investEl.addEventListener('click', ()=>{
    contextEl.style.display = "block";
});


// close menu

closeEl.addEventListener('click', ()=>{
    contextEl.style.display = "none";
  });



//   QR Code section

/*
  let investBtns = document.querySelector(".btns");
  let qrSec = document.querySelector(".qr-sec");
  let bitBtn = document.querySelector(".bit-el");
  let ethBtn = document.querySelector(".eth-el");
  let ltBtn  = document.querySelector(".lt-el");
  let qrImage = document.querySelector('#qr-img');
  let qrText = document.querySelector('#qr-txt');
  let titleEl = document.querySelector("#title-el");

  */

//   Bitcoin Investiment

/*
  bitBtn.addEventListener("click", ()=>{
            investBtns.style.display ="none";
            qrSec.style.display ="block";
            qrImage.src = "assets/images/Bit.svg";
            qrText.value = "bc1qcz2wswvp7spw76kmgwafq3x988tv7c8fsw84ms";
            titleEl.textContent ="BitCoin";
  })
*/

// Ethereum investment

/*
  ethBtn.addEventListener("click", ()=>{
    investBtns.style.display ="none";
    qrSec.style.display ="block";
    qrImage.src = "assets/images/ether.svg";
    qrText.value = "TLTrE8NTyyewySxoM2j2kEea2RgiKK578P";
    titleEl.textContent ="USDT";
})
  */

// Litecoin investiment


/*
ltBtn.addEventListener('click', ()=>{
    investBtns.style.display ="none";
    qrSec.style.display ="block";
    qrImage.src = "assets/images/lite.svg";
    qrText.value = "ltc1qv87t9d7yetn94uh3j74h3r984knkw0zzepdv8h";
    titleEl.textContent ="LiteCoin";
    
})

  */


