<x-guest-layout>
    <section class="py-24 border border-b-[#f84525] border-b-8 flex items-center justify-center h-1/2 w-screen bg-cover relative" style="background-image: url('img/slider-kat-1.jpg');">
        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black opacity-60"></div>
    
        <!-- Content Container -->
        <div class="mx-auto relative z-10 mt-24 flex flex-col items-center">
          <!-- Container div with margin, positioning, z-index, and flex properties -->
          
          <div class="flex justify-center items-center">
              <!-- Child div with width set to half the parent's width -->
              <p class="px-4 py-2 text-lg font-medium text-white bg-[#f84525] rounded-3xl">
                {{ $region[0]['region'] }}
              </p>
              <!-- Paragraph with text styling, background color, and rounded corners -->
          </div>
      
          <div class="text-center">
              <!-- Another child div with text center alignment -->
      
              <h1 class="text-[3.5rem] font-bold leading-[4rem] tracking-tight text-white">
                  Heb je vragen?
              </h1>
              <!-- Heading with specific text styling -->
      
              <p class="mt-3 text-lg leading-relaxed text-slate-400">
                  Voor meer informatie kun je ons een bericht sturen.
              </p>
          </div>
      </div>  
  </section>  

<div x-data="{ openTab: 1 }" class="p-8">
    <div class="w-full mx-auto">
        <div class="mb-4 flex space-x-4 p-2 bg-white rounded-lg shadow-md">
            <button x-on:click="openTab = 1" :class="{ 'bg-[#f84525] text-white': openTab === 1 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Bekijk per stad</button>
            <button x-on:click="openTab = 2" :class="{ 'bg-[#f84525] text-white': openTab === 2 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Bekijk alles</button>
        </div>

        <div x-show="openTab === 1" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-[#f84525]">
            <h2 class="text-2xl font-semibold mb-2 text-blue-600">De steden in de provincie {{ $region[0]['region'] }}</h2>
            <livewire:lw-citytable :region_code="$region_code"/>
        </div>

        <div x-show="openTab === 2" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-[#f84525]">
            <h2 class="text-2xl font-semibold mb-2 text-blue-600">De dierenartsen die zich bevinden in de provincie {{ $region[0]['region'] }}</h2>
            <livewire:lw-provincietable :region_code="$region_code"/>
        </div>
    </div>
</div>
</x-guest-layout>