if("serviceWorker" in navigator){
  window.addEventListener("load", function(){
    navigator.serviceWorker
      .register("/serviceWorker.js")
      .then(res => console.log("service worker reigstered"))
      .catch(err => console.log("no service worker reigstered", err))
  })
}

if(isInStandaloneMode()){
  let refreshButton = document.querySelector("#refresh-bar");
  refreshButton.style.display ='block';
  alert("Here");
}else{
  let refreshButton = document.querySelector("#refresh-bar");
  refreshButton.style.display ='none';
}

function refreshPWA(){
  let refreshButton = document.querySelector("#refresh-bar");
  if(refreshButton){
    refreshButton.style.display = 'none';
  }
}

function isInStandaloneMode(){
  return (window.matchMedia('(display-mode: standalone)').matches) || (window.navigator.standalone) || document.referrer.includes('android-app://');
}
// const container = document.querySelector(".container")
// const spells = [
//  {name: "Magic Missile", image: "images/shiv.png"},
//  {name: "Mage Armour", image: "images/shiv.png"},
//  {name: "Shield", image: "images/shiv.png"},
//  {name: "Great Thunderclap", image: "images/shiv.png"},
//  {name: "Fireball", image: "images/shiv.png"},
//  {name: "Arcane Lock", image: "images/shiv.png"},
//  {name: "Black Tentacles", image: "images/shiv.png"},
//  {name: "Secure Shelter", image: "images/shiv.png"},
//  {name: "Disobedience", image: "images/shiv.png"},
// ]
// const showSpells = () => {
//  let output = ""
//  spells.forEach(
//  ({name, image}) =>
//    (output += `
//               <div class="card">
//                 <img class="card--avatar" src=${image} />
//                 <h1 class="card--title">${name}</h1>
//                 <a class="card--link" href="#">Effect</a>
//               </div>
//             `)
//   )
//   container.innerHTML = output
// }

//document.addEventListener("DOMContentLoaded", showSpells)
