<!DOCTYPE html>
<html lang="ja">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Lobster&family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('/style/style.css') }}">
     <link rel="stylesheet" href="{{ asset('/style/reset.css') }}">
     <title>Document</title>
</head>
<body>
     <div class="hand-body">
          <p class="hand-body_title">どのポケモンをそだてる？？</p>
     <div class="pokemonMain">
     <a class="pokemon" href="{{route('pokemon.training' , ['id' => 1])}}"></a>
     <a class="pokemon" href="{{route('pokemon.training' , ['id' => 2])}}"></a>
     <a class="pokemon" href="{{route('pokemon.training' , ['id' => 3])}}"></a>
     <a class="pokemon" href="{{route('pokemon.training' , ['id' => 4])}}"></a>
     <a class="pokemon" href="{{route('pokemon.training' , ['id' => 5])}}"></a>
     <a class="pokemon" href="{{route('pokemon.training' , ['id' => 6])}}"></a>

     </div>
     </div>
     <script>
          const fetchPokemon = () => {
   const promises = [];
//    for(let i = 1; i < 7; i++) {
//           const url = `https:pokeapi.co/api/v2/pokemon/${i}`;
//           promises.push(fetch(url).then((res) => res.json()));
//    }

     @forEach($handPokemons as $handPokemon)
          const url{{$handPokemon->pokemon_id}} = `https:pokeapi.co/api/v2/pokemon/{{$handPokemon->pokemon_id}}`;
          promises.push(fetch(url{{$handPokemon->pokemon_id}}).then((res) => res.json()));
     @endforeach

   Promise.all(promises).then( results => {
       const pokemon = results.map((data) => ({
           name: data.name,
           id: data.id,
           image: data.sprites.front_default,
          //  image: data.sprites.other['official-artwork'].front_default,
           type: data.types.map((type) => type.type.name).join(', ')
       }));
       let pokemonDetail = [
          
 @foreach ($pokemons as $pokemon)
    @foreach($pokemon as $value)
    {
    name: "{{$value->name}}",
    type: "{{$value->type}}"
    },
    @endforeach
    @endforeach
];
       const pokemonHTNLString = pokemon.map( (pokemon,index) =>`
               <li class="hand">
                    <img class="handImg" src="${pokemon.image}" />
                    <h2>${pokemonDetail[index]?.name}</h2>
               </li>
               <div class="line">
                    <div class="exp"></div>
               </div>
               <style>
               .line::after{
                    content: "Lv${level}";
               }
               .exp{
                    width : ${expWidth}%;
               }
               </style>
          `);
       pokemon.forEach((element,index) => {
          const handPokemons = document.querySelector(".pokemonMain");
          handPokemons.children[index].insertAdjacentHTML('beforeend', pokemonHTNLString[index]);
          });
   });
};


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


fetchPokemon();

const hour = 71;
const level  = Math.floor(hour / 5);
const expWidth = (hour % 5) * 20;



     </script>
</body>
</html>