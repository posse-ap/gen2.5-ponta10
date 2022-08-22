<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('/style/reset.css') }}">
     <link rel="stylesheet" href="{{ asset('/style/style.css') }}">
     <title>Document</title>
</head>
<body>
     <style>
          .pokemonHome{
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-image: url("{{asset('./img/leaf.jpg')}}");
  background-size: cover;
}
     </style>
<div class="pokemonHome">
<ul class="select"></ul>
   <div class="container">
      <ol id="pokedex"></ol>
      <!-- <div class="border">
            <div class="exp"></div>
      </div> -->
      <div class="level"></div>
   </div>
   <div class="pokeform">
      <button class="btn">このポケモンにする</button>
   </div>
   <form action="{{ route('pokemon_store') }}" class="yesNo" method="post" enctype="multipart/form-data">
     @csrf
     <div class="hidden"></div>
     <input type="submit" value="はい">
     <button class="noBtn" type="button">いいえ</button>
   </form>
   <div id="poke_container" class="poke_container"></div>
</div>
     <script>
          const pokedex = document.getElementById("pokedex");
const select = document.querySelector(".select");

//ジョウト 152~161
//ホウエン 252~261
//シンオウ 387~396
//イッシュ 495~504
//カロス 649~658
//アローラ 722~731
//ガラル 810~819


const fetchPokemon = () => {
   const promises = [];
   @forEach($pokemons as $pokemon)
   if({{$pokemon->status}} == 1){
     const url{{$pokemon->pokemon_id}} = `https:pokeapi.co/api/v2/pokemon/{{$pokemon->pokemon_id}}`;
     promises.push(fetch(url{{$pokemon->pokemon_id}}).then((res) => res.json()));
   }
   @endforeach

   Promise.all(promises).then( results => {
       const pokemon = results.map((data) => ({
           name: data.name,
           id: data.id,
           image: data.sprites.other['official-artwork'].front_default,
           type: data.types.map((type) => type.type.name).join(', ')
       }));
       displayPokemon(pokemon);
   });
};


let pokemonDetail = [
     @forEach($pokemons as $pokemon)
     {
     name: "{{$pokemon->name}}",
     type: "{{$pokemon->type}}"
},
     @endforeach
]

const first = [
     {
          color:"#DEFDE0",
     },
     {
          color:"#FDDFDF"
     },
     {
          color:"#DEF3FD"
     }
];

const yesNo = document.querySelector(".yesNo");
const noBtn = document.querySelector(".noBtn");
const hidden = document.querySelector(".hidden");

const displayPokemon = (pokemon) => {
   const monsterBall = pokemon.map( (pokemon,index) => `
   <div class="monster">
   <img src="{{asset('./img/monsterBall.png')}}" data-id="${index}" class="monsterBall"/>
   </div>
   `).join('');
   pokedex.innerHTML = monsterBall;
     const balls = document.querySelectorAll(".monsterBall");
     balls.forEach(function(ball){
          ball.addEventListener("mouseenter", function(){
               // console.log(ball.dataset.id);
               const id = ball.dataset.id;
               const pokemonHTNLString = `
               <li class="card">
                    <img class="card-image" src="${pokemon[id].image}" />
                    <h2>${pokemonDetail[id*3].name}</h2>
                    <p>${pokemonDetail[id*3].type}</p>
               </li>
          `
          select.style.backgroundColor = first[id].color;
          select.innerHTML = pokemonHTNLString;
          const pokemonValue = `
          <input type="hidden" value="${pokemon[id].id}" name="id">
          `
          hidden.innerHTML = pokemonValue;
          })
     })
};

fetchPokemon();

const btn = document.querySelector(".btn");
btn.addEventListener("click",function(){
     const monsterBalls = document.querySelectorAll(".monsterBall");
     monsterBalls.forEach(function(monsterBall){
          monsterBall.style.display = "none";
     })
     select.classList.add("monsterSelect");
     btn.style.display = "none";
     yesNo.style.display = "block";
})


noBtn.addEventListener("click",function(){
     const monsterBalls = document.querySelectorAll(".monsterBall");
     monsterBalls.forEach(function(monsterBall){
          monsterBall.style.display = "inline";
     })
     select.classList.remove("monsterSelect");
     btn.style.display = "inline";
     yesNo.style.display = "none";
})
     </script>
</body>
</html>