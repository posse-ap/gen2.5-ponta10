<!DOCTYPE html>
<html lang="ja">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('/style/reset.css') }}">
     <link rel="stylesheet" href="{{ asset('/style/style.css') }}">
     <title>Document</title>
</head>
<body>
<form action="{{ route('hand_store') }}"  method="post" enctype="multipart/form-data">
               @csrf
               <input type="submit" value="確定">
     <div class="boxMain">
          <div class="handle">
               <h2>てもち</h2>
               <div class="handle-body">
                    <div class="handle-body_container drop"></div>
                    <div class="handle-body_container drop"></div>
                    <div class="handle-body_container drop"></div>
                    <div class="handle-body_container drop"></div>
                    <div class="handle-body_container drop"></div>
                    <div class="handle-body_container drop"></div>
               </div>
          </div>
          <div class="box">
               <h2>ボックス1</h2>
               <div class="box-body"></div>
          </div>
          <div class="featurePokemon">
               <div class="featurePokemon-body"></div>
          </div>
          </form>
          <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
     <script>
//ジョウト 152~161
//ホウエン 252~261
//シンオウ 387~396
//イッシュ 495~504
//カロス 649~658
//アローラ 722~731
//ガラル 810~819


// const fetchPokemon = () => {
//    const promises = [];
// //    for(let i = 650; i < 720 ; i++) {
// //           const url = `https:pokeapi.co/api/v2/pokemon/${i}`;
// //           promises.push(fetch(url).then((res) => res.json()));
// //      }

//      @foreach ($boxPokemons->pokemons as $boxPokemon)
//           const url{{$boxPokemon->id}} = `https:pokeapi.co/api/v2/pokemon/{{$boxPokemon->id}}`;
//           promises.push(fetch(url{{$boxPokemon->id}}).then((res) => res.json()));
//      @endforeach

//    Promise.all(promises).then( results => {
//        const pokemon = results.map((data) => ({
//            name: data.name,
//            id: data.id,
//            image: data.sprites.front_default,
//            image2 :data.sprites.other['official-artwork'].front_default,
//           //  image: data.sprites.other['official-artwork'].front_default,
//            type: data.types.map((type) => type.type.name).join(', ')
//        }));
//        displayPokemon(pokemon);
//    });
// };


// const first = [
//      {
//           name: "フシギダネ",
//           type: "くさ",
//           color:"#DEFDE0",
//      },
//      {
//           name:"ヒトカゲ",
//           type:"ほのお",
//           color:"#FDDFDF"
//      },
//      {
//           name:"ゼニガメ",
//           type:"みず",
//           color:"#DEF3FD"
//      }
// ];
// fire: '#FDDFDF',
// grass: '#DEFDE0',
// electric: '#FCF7DE',
// water: '#DEF3FD',
// ground: '#f4e7da',
// rock: '#d5d5d4',
// fairy: '#fceaff',
// poison: '#98d7a5',
// bug: '#f8d5a3',
// dragon: '#97b3e6',
// psychic: '#eaeda1',
// flying: '#F5F5F5',
// fighting: '#E6E0D4',
// normal: '#F5F5F5

// const displayPokemon = (pokemon) => {
//    const monsterBall = pokemon.map( (pokemon,index) => `
//                     <img class="boxPokemon drag" src="${pokemon.image}" />
//    `).join('');
//    const box = document.querySelector(".box-body")
//    box.innerHTML = monsterBall
//    const boxPokemons = document.querySelectorAll(".boxPokemon");
//    boxPokemons.forEach(function(boxPokemon){
//      boxPokemon.addEventListener("click",function(){
//           const feature = document.querySelector(".featurePokemon-body");
//           const img = document.createElement("img");
//           const slice = boxPokemon.src.slice(72)
//           const src = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork"
//           img.setAttribute("src",src+slice)
//           img.setAttribute("class","featured")
//           // feature.appendChild(boxPokemon);
//           feature.innerHTML = "<input type='hidden>"
//           feature.appendChild(img);
//      })
//    })
//    let target = "";
//     let drags = document.querySelectorAll('.drag');
//     let drops = document.querySelectorAll('.drop');

//     drags.forEach(function(drag) {
//     drag.addEventListener('dragstart', function(element){
//         target = element.target;
//     }, false);
// })

//     drops.forEach(function(drop) {
//     drop.addEventListener('dragover', function(element){
//       element.preventDefault();
//     }, false);
// })   
// const sortElement = document.querySelector('.box-body');
// // Sortable.create(sortElement);

//     drops.forEach(function(drop) {
//     drop.addEventListener('drop', function(element){
//       element.preventDefault();
//       if(element.target.firstElementChild){
//           sortElement.appendChild(element.target.firstElementChild);
//       }
//       if(element.target.tagName !== 'IMG'){
//           element.target.innerHTML = "<input type='hidden>"
//           element.target.appendChild(target);
//       }
//     }, false);
// })
// ;}

// fetchPokemon();


const fetchPokemon2 = () => {
   const promises = [];
    @foreach($handArrays as $pokemon)
          const url{{$pokemon}} = `https:pokeapi.co/api/v2/pokemon/{{$pokemon}}`;
          promises.push(fetch(url{{$pokemon}}).then((res) => res.json()));
   @endforeach

   Promise.all(promises).then( results => {
       const pokemon = results.map((data) => ({
           name: data.name,
           id: data.id,
           image: data.sprites.front_default,
           image2 :data.sprites.other['official-artwork'].front_default,
          //  image: data.sprites.other['official-artwork'].front_default,
           type: data.types.map((type) => type.type.name).join(', ')
       }));
       displayPokemon2(pokemon);
   });
};

const displayPokemon2 = (pokemon) => {
pokemon.forEach( (pokemon,index) => {
     const handle = document.querySelector(".handle-body");
     handle.children[index].innerHTML = `<img class="boxPokemon drag" src="${pokemon.image}" data-id="${pokemon.id}" />`;
});
   const boxPokemons = document.querySelectorAll(".boxPokemon");
   boxPokemons.forEach(function(boxPokemon){
     boxPokemon.addEventListener("click",function(){
          const feature = document.querySelector(".featurePokemon-body");
          const img = document.createElement("img");
          const slice = boxPokemon.src.slice(72)
          const src = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork"
          img.setAttribute("src",src+slice)
          img.setAttribute("class","featured")
          // feature.appendChild(boxPokemon);
          feature.innerHTML = "<input type='hidden>"
          feature.appendChild(img);
     })
   })
;}


const fetchPokemon = () => {
   const promises = [];
   @foreach ($boxPokemons->pokemons as $boxPokemon)
   if({{$handArray[0]}} !== {{$boxPokemon->id}} && {{$handArray[1]}} !== {{$boxPokemon->id}} && {{$handArray[2]}} !== {{$boxPokemon->id}} && {{$handArray[3]}} !== {{$boxPokemon->id}} && {{$handArray[4]}} !== {{$boxPokemon->id}} && {{$handArray[5]}} !== {{$boxPokemon->id}}){
     const url{{$boxPokemon->id}} = `https:pokeapi.co/api/v2/pokemon/{{$boxPokemon->id}}`;
     promises.push(fetch(url{{$boxPokemon->id}}).then((res) => res.json()));
   }
@endforeach

   Promise.all(promises).then( results => {
       const pokemon = results.map((data) => ({
           name: data.name,
           id: data.id,
           image: data.sprites.front_default,
           image2 :data.sprites.other['official-artwork'].front_default,
          //  image: data.sprites.other['official-artwork'].front_default,
           type: data.types.map((type) => type.type.name).join(', ')
       }));
       displayPokemon(pokemon);
   });
};

const displayPokemon = (pokemon) => {
   const monsterBall = pokemon.map( (pokemon,index) => `
                    <img class="boxPokemon drag" src="${pokemon.image}" data-id="${pokemon.id}" />
   `).join('');
   const box = document.querySelector(".box-body")
   box.innerHTML = monsterBall
   const boxPokemons = document.querySelectorAll(".boxPokemon");
   boxPokemons.forEach(function(boxPokemon){
     boxPokemon.addEventListener("click",function(){
          const feature = document.querySelector(".featurePokemon-body");
          const img = document.createElement("img");
          const slice = boxPokemon.src.slice(72)
          const src = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork"
          img.setAttribute("src",src+slice)
          img.setAttribute("class","featured")
          // feature.appendChild(boxPokemon);
          feature.innerHTML = "<input type='hidden>"
          feature.appendChild(img);
     })
   })
   let target = "";
    let drags = document.querySelectorAll('.drag');
    let drops = document.querySelectorAll('.drop');

    drags.forEach(function(drag) {
    drag.addEventListener('dragstart', function(element){
        target = element.target;
    }, false);
})

    drops.forEach(function(drop) {
    drop.addEventListener('dragover', function(element){
      element.preventDefault();
    }, false);
})   
const sortElement = document.querySelector('.box-body');
// Sortable.create(sortElement);

    drops.forEach(function(drop) {
    drop.addEventListener('drop', function(element){
      element.preventDefault();
      if(element.target.firstElementChild){
          sortElement.appendChild(element.target.firstElementChild);
      }
      if(element.target.tagName !== 'IMG'){
          element.target.innerHTML = "<input type='hidden>"
          element.target.appendChild(target);
      }
      const index = [...drops].findIndex(list => list === element.target);
      element.target.insertAdjacentHTML('beforeend',`<input type='hidden'name="hand[${index+1}]" value="${target.dataset.id}"/>`)
    }, false);
})
;}

fetchPokemon2();
fetchPokemon();

     </script>
</body>
</html>