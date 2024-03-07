


const BTC = document.querySelector('.btc');
const BNB = document.querySelector('.bnb'); 
const ETH = document.querySelector('.eth'); 


const criptomoneda = document.getElementById('cripto');

document.addEventListener('DOMContentLoaded', () => {
    consultarCriptomodeas();
    

 })


 function consultarCriptomodeas() {
    const url = 'https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,BNB&tsyms=USD';

    fetch(url)
    .then( respuesta => respuesta.json())
    .then( data => displayData(data));


 }
  const  displayData = data => {
   const usd = data.BTC.USD;
   btc.textContent = `$ ${usd} USD`;
   const us = data.BNB.USD;
   bnb.textContent = `$ ${us} USD`;
   const u = data.ETH.USD;
   eth.textContent = `$ ${u} USD`;
  }

  //   const url ='https://min-api.cryptocompare.com/data/top/mktcapfull?limit=10&tsym=USD';
    // fetch(url)
    //.then(respuesta => respuesta.json())
    //.then(cript => {
     // mostrarData(cript.Data)
   // })

    //function mostrarData(cript){
      //console.log(cript);
      //cript.forEach(cri => {
       // const {CHANGE24HOUR, IMAGEURL, PRICE, CHANGEPCT24HOUR, MKTCAP, HIGHDAY,LOWDAY} = cri.DISPLAY.USD;
        //const {FullName} = cri.CoinInfo;

        //criptomoneda.innerHTML += `<tr><td>${FullName}</td><td>${PRICE}</td><td>${HIGHDAY}</td><td>${LOWDAY}</td><td>${CHANGEPCT24HOUR}%</td><td>${MKTCAP}</td></tr>`;
          
      //});
       
    //}

   
   //const  mostrarData = (cript) =>{
 //  let body = ''
 //  for (let i = 0; i<cript.length; i++){
  //   body += `<tr><td>${cript[i].NAME}</td></tr>`
  //  }
//document.getElementById('cripto').innerHTML = body;
  // }


