const bit = document.getElementById('bit');
const Ether = document.getElementById('ether');
const lite = document.getElementById('lite');

fetch("https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,LTC&tsyms=USD").then(res =>{
   
   if(!res.ok){
       throw new Error("Could not fetch the resource");
   }else{
       return res.json();
   }
}).then(data =>{
   console.log(data);
   bit.textContent = data.BTC.USD;
   Ether.textContent = data.ETH.USD;
   lite.textContent = data.LTC.USD;
}).catch(err =>{
   console.log(err);
});



