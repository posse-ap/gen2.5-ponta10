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
          .pokeHome{
               position: fixed;
               top: 0;
               left: 0;
               width: 100vw;
               height: 100vh;
               background-image: url("{{asset('./img/adventure.jpg')}}");
               background-size: cover;
          }
     </style>
     <div class="pokeHome">
          <ul class="select training"></ul>
     </div>
     <script>
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
     const url{{$pokemon[0]->pokemon_id}} = `https:pokeapi.co/api/v2/pokemon/{{$pokemon[0]->pokemon_id}}`;
     promises.push(fetch(url{{$pokemon[0]->pokemon_id}}).then((res) => res.json()));

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
     {
     name: "{{$pokemon[0]->name}}",
     type: "{{$pokemon[0]->type}}"
},
]

const color = [
     {
          type:"くさ",
          color:"#DEFDE0",
     },
     {
          type:"ほのお",
          color:"#FDDFDF"
     },
     {
          type:"みず",
          color:"#DEF3FD"
     }
];


const displayPokemon = (pokemon) => {
               // console.log(ball.dataset.id);
               const pokemonHTNLString = `
               <li class="card">
                    <img class="card-image" src="${pokemon[0].image}" />
                    <h2>${pokemonDetail[0].name}</h2>
                    <p>${pokemonDetail[0].type}</p>
               </li>
          `
          const typeIndex = color.findIndex(acc => acc.type === pokemonDetail[0].type); 
          select.style.backgroundColor = color[typeIndex].color;
          select.innerHTML = pokemonHTNLString;
};

fetchPokemon();
     </script>
</body>
</html>