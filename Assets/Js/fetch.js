const myApi = "https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,LTC&tsyms=USD";


const bitPrice = document.querySelector(".bit-dt");
const ethPrice = document.querySelector(".eth-dt");
const thPrice = document.querySelector(".th-dt");

const bitPrice1 = document.querySelector(".bit-dt-1");
const ethPrice1 = document.querySelector(".eth-dt-1");
const thPrice1 = document.querySelector(".th-dt-1");


fetch(myApi).then(res=>{

    if(!res.ok){
        throw new Error("Could not fetch the resource!")
    }else{
        return res.json();
    }
}).then(data =>{

    bitPrice.textContent += data.BTC.USD;
    ethPrice.textContent += data.ETH.USD;
    thPrice.textContent += data.LTC.USD;
    
    bitPrice1.textContent += data.BTC.USD;
    ethPrice1.textContent += data.ETH.USD;
    thPrice1.textContent += data.LTC.USD;


    console.log(data);
}).catch(err =>{
    console.log(err);
})