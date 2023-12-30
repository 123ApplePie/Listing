<div class="flex flex-wrap -mx-4 mt-24">
    <div class="w-full px-4">
       <div class="text-center mx-auto mb-8 lg:mb-12 max-w-[510px]">
          <span class="font-semibold text-2xl text-[#f84525] mb-2 block">
          Landelijke Footprint
          </span>
          <h2
             class="
             font-bold
             text-3xl
             sm:text-4xl
             md:text-[40px]
             text-[#1e3a8a]
             mb-4
             "
             >
             Verstrekking van veterinaire zorg in alle provincies van Nederland.
          </h2>
          <p class="text-base text-body-color">
              Statistieken
          </p>
       </div>
    </div>
  </div>
  
  <div class="flex flex-wrap">
    <div class="w-full sm:w-1/4 md:w-1/6 lg:w-1/6 p-4">
      <div class="flex items-center justify-center">
        <ul>
          @foreach ($regions_first as $reg_first)
          <li>
            <a href="{{ '/'.$reg_first['slug'] }}">
              <p class="text-6xl font-semibold text-gray-800">80</p>
              <p id="{{ $reg_first['region'].'-text' }}" class="text-xl leading-4 text-[#f84525]">{{ $reg_first['region'] }}</p>
            </a>            
          </li>
          <br>
          @endforeach
        </ul>
      </div>
    </div>
  
  <div class="w-full sm:w-1/2 md:w-2/3 lg:w-2/3 p-4">
    <div class="relative flex items-center justify-center">
  <div style="position: relative;">
    <div>
      <center>
        <img src="img/vector.png"  class="w-3/4" alt="">
      </center>
      <a href="/limburg">
      <button id="limburg-button" style="position: absolute; top: 75%; left: 60%; transform: translate(-50%, -50%); color: #f84525; text-decoration: none; border-radius: 5px;"
      onmouseover="this.querySelector('svg').style.transform = 'scale(1.2)'; changeColor('limburg-text', true);"
      onmouseout="this.querySelector('svg').style.transform = 'scale(1)'; changeColor('limburg-text', false);"
    >
      <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(248, 69, 37, 1);transform: ;msFilter:;">
        <path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path>
      </svg>
    </button>
    </a>

    <a href="/noord-brabant">
    <button id="brabant-button" style="position: absolute; top: 65%; left: 50%; transform: translate(-50%, -50%); color: #f84525; text-decoration: none; border-radius: 5px;"
    onmouseover="this.querySelector('svg').style.transform = 'scale(1.2)'; changeColor('brabant-text', true);"
    onmouseout="this.querySelector('svg').style.transform = 'scale(1)'; changeColor('brabant-text', false);"
  >
    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(248, 69, 37, 1);transform: ;msFilter:;">
      <path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path>
    </svg>
  </button>
  </a>

  <a href="/zeeland">
  <button id="zeeland-button" style="position: absolute; top: 65%; left: 25%; transform: translate(-50%, -50%); color: #f84525; text-decoration: none; border-radius: 5px;"
  onmouseover="this.querySelector('svg').style.transform = 'scale(1.2)'; changeColor('zeeland-text', true);"
  onmouseout="this.querySelector('svg').style.transform = 'scale(1)'; changeColor('zeeland-text', false);"
>
  <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(248, 69, 37, 1);transform: ;msFilter:;">
    <path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path>
  </svg>
 </button>
  </a>

  <a href="/zuid-holland">
 <button id="zholland-button" style="position: absolute; top: 50%; left: 35%; transform: translate(-50%, -50%); color: #f84525; text-decoration: none; border-radius: 5px;"
 onmouseover="this.querySelector('svg').style.transform = 'scale(1.2)'; changeColor('zholland-text', true);"
 onmouseout="this.querySelector('svg').style.transform = 'scale(1)'; changeColor('zholland-text', false);"
>
 <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(248, 69, 37, 1);transform: ;msFilter:;">
   <path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path>
 </svg>
</button>
</a>

<a href="/noord-holland">
<button id="nholland-button" style="position: absolute; top: 30%; left: 42%; transform: translate(-50%, -50%); color: #f84525; text-decoration: none; border-radius: 5px;"
onmouseover="this.querySelector('svg').style.transform = 'scale(1.2)'; changeColor('nholland-text', true);"
onmouseout="this.querySelector('svg').style.transform = 'scale(1)'; changeColor('nholland-text', false);"
>
<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(248, 69, 37, 1);transform: ;msFilter:;">
  <path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path>
</svg>
</button>
</a>

<a href="/utrecht">
<button id="utrecht-button" style="position: absolute; top: 45%; left: 48%; transform: translate(-50%, -50%); color: #f84525; text-decoration: none; border-radius: 5px;"
onmouseover="this.querySelector('svg').style.transform = 'scale(1.2)'; changeColor('utrecht-text', true);"
onmouseout="this.querySelector('svg').style.transform = 'scale(1)'; changeColor('utrecht-text', false);"
>
<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(248, 69, 37, 1);transform: ;msFilter:;">
  <path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path>
</svg>
</button>
</a>

<a href="/gelderland">
<button id="gelderland-button" style="position: absolute; top: 47%; left: 63%; transform: translate(-50%, -50%); color: #f84525; text-decoration: none; border-radius: 5px;"
onmouseover="this.querySelector('svg').style.transform = 'scale(1.2)'; changeColor('gelderland-text', true);"
onmouseout="this.querySelector('svg').style.transform = 'scale(1)'; changeColor('gelderland-text', false);"
>
<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(248, 69, 37, 1);transform: ;msFilter:;">
  <path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path>
</svg>
</button>
</a>

<a href="/flevoland">
<button id="flevoland-button" style="position: absolute; top: 35%; left: 53%; transform: translate(-50%, -50%); color: #f84525; text-decoration: none; border-radius: 5px;"
onmouseover="this.querySelector('svg').style.transform = 'scale(1.2)'; changeColor('flevoland-text', true);"
onmouseout="this.querySelector('svg').style.transform = 'scale(1)'; changeColor('flevoland-text', false);"
>
<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(248, 69, 37, 1);transform: ;msFilter:;">
  <path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path>
</svg>
</button>
</a>

<a href="/overijssel">
<button id="overijssel-button" style="position: absolute; top: 35%; left: 70%; transform: translate(-50%, -50%); color: #f84525; text-decoration: none; border-radius: 5px;"
onmouseover="this.querySelector('svg').style.transform = 'scale(1.2)'; changeColor('overijssel-text', true);"
onmouseout="this.querySelector('svg').style.transform = 'scale(1)'; changeColor('overijssel-text', false);"
>
<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(248, 69, 37, 1);transform: ;msFilter:;">
  <path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path>
</svg>
</button>
</a>

<a href="/drenthe">
<button id="drenthe-button" style="position: absolute; top: 22%; left: 70%; transform: translate(-50%, -50%); color: #f84525; text-decoration: none; border-radius: 5px;"
onmouseover="this.querySelector('svg').style.transform = 'scale(1.2)'; changeColor('drenthe-text', true);"
onmouseout="this.querySelector('svg').style.transform = 'scale(1)'; changeColor('drenthe-text', false);"
>
<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(248, 69, 37, 1);transform: ;msFilter:;">
  <path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path>
</svg>
</button>
</a>

<a href="/friesland">
<button id="friesland-button" style="position: absolute; top: 15%; left: 58%; transform: translate(-50%, -50%); color: #f84525; text-decoration: none; border-radius: 5px;"
onmouseover="this.querySelector('svg').style.transform = 'scale(1.2)'; changeColor('friesland-text', true);"
onmouseout="this.querySelector('svg').style.transform = 'scale(1)'; changeColor('friesland-text', false);"
>
<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(248, 69, 37, 1);transform: ;msFilter:;">
  <path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path>
</svg>
</button>
</a>

<a href="/groningen">
<button id="groningen-button" style="position: absolute; top: 7%; left: 70%; transform: translate(-50%, -50%); color: #f84525; text-decoration: none; border-radius: 5px;"
onmouseover="this.querySelector('svg').style.transform = 'scale(1.2)'; changeColor('groningen-text', true);"
onmouseout="this.querySelector('svg').style.transform = 'scale(1)'; changeColor('groningen-text', false);"
>
<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" style="fill: rgba(248, 69, 37, 1);transform: ;msFilter:;">
  <path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path>
</svg>
</button>
</a>
  
  </div>
  </div>
  </div>
  </div>
  
  <div class="w-full sm:w-1/4 md:w-1/6 lg:w-1/6 p-4">
      <div class=" flex items-center justify-center">
        <ul>
          @foreach ($regions_second as $reg_second)
          <li>
            <a href="{{ '/'.$reg_second['slug'] }}">
              <p class="text-6xl font-semibold text-gray-800">80</p>
              <p id="{{ $reg_second['region'].'-text' }}" class="text-xl leading-4 text-[#f84525]">{{ $reg_second['region'] }}</p>
            </a>            
          </li>
          <br>
          @endforeach
        </ul>
      </div>
  </div>
  </div>

  <script>
    function changeColor(elementId, isHovered) {
      const element = document.getElementById(elementId);
      if (element) {
        element.style.color = isHovered ? 'blue' : '#f84525'; // Change the color as desired
      }
    }
  </script>
