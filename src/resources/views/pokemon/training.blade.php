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
          .pokeHome {
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
     <div class="training">
     <div class="up-text">
          <select name="" id="timeExp">
          @for($i = 0; $i < $exp; $i++  )
          <option value="{{$i + 1}}">{{$i + 1}}時間</option>
          @endfor
     </select>
     <span>つかう</span>
     </div>
          <ul class="selectPokemon"></ul>
          <button class=levelup>いくせいする</button>
     </div>
     </div>
     <script>
          const select = document.querySelector(".selectPokemon");

          //ジョウト 152~161
          //ホウエン 252~261
          //シンオウ 387~396
          //イッシュ 495~504
          //カロス 649~658
          //アローラ 722~731
          //ガラル 810~819


          const fetchPokemon = () => {
               const promises = [];
               const url{{$pokemon->id}} = `https:pokeapi.co/api/v2/pokemon/{{$pokemon->id}}`;
               promises.push(fetch(url{{$pokemon->id}}).then((res) => res.json()));
               Promise.all(promises).then(results => {
                    const pokemon = results.map((data) => ({
                         name: data.name,
                         id: data.id,
                         image: data.sprites.other['official-artwork'].front_default,
                         type: data.types.map((type) => type.type.name).join(', ')
                    }));
                    displayPokemon(pokemon);
               });
          };


          let pokemonDetail = [{
               name: "{{$pokemon->name}}",
               type: "{{$pokemon->type}}"
          }, ]

          const color = [{
                    type: "くさ",
                    color: "#DEFDE0",
               },
               {
                    type: "ほのお",
                    color: "#FDDFDF"
               },
               {
                    type: "みず",
                    color: "#DEF3FD"
               }
          ];


          const displayPokemon = (pokemon) => {
               console.log(pokemon);
               // console.log(ball.dataset.id);
               const pokemonHTMLString = `
               <li class="card">
                    <img class="card-image" src="${pokemon[0].image}" />
                    <h2>{{$pokemon->name}}</h2>
                    <p>{{$pokemon->type}}</p>
                    <div class="line">
                    <div class="exp"></div>
               </div>
               </li>
               <style>
               .line::after{
                    content: "Lv${level}";
                    // font-size: 24px;
                    // font-weight: 700;
               }
               .exp{
                    width : ${expWidth}%;
                    transition : all .5s;
               }
               .up{
                    animation : levelup 1s linear forwards;
               }
               @keyframes levelup{
                    0%{
                         width : ${expWidth}%;   
                    }
                    25%{
                         width: 100%;
                    }
                    40%{
                         opacity : 0;
                    }
                    50%{
                         width: 0%;
                    }
                    100%{
                         width: 40%;
                    }
               }
               </style>
          `
               // const typeIndex = color.findIndex(acc => acc.type === pokemonDetail.type);
               // select.style.backgroundColor = color[typeIndex].color;
               select.innerHTML = pokemonHTMLString;
          };
          const hour = 74;
          const level  = Math.floor(hour / 5);
          const expWidth = (hour % 5) * 20;
          fetchPokemon();
          const levelup = document.querySelector('.levelup');
          levelup.addEventListener('click', function() {
               const exp  = document.querySelector('.exp');
               exp.classList.add('up');            
          })
     </script>
</body>

</html>