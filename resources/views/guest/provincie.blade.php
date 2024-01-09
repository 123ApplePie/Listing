<x-guest-layout>
    @section('title', isset($metaTitle) ? $metaTitle : 'Dierenartsen in '.$title)
    @section('description', isset($metaDescription) ? $metaDescription : 'Default Description')
  
    
    <section class="py-24 border border-b-[#f84525] border-b-8 flex items-center justify-center h-1/2 w-screen bg-cover relative" style="background-image: url('img/slider-kat-1.jpg');">
        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black opacity-60"></div>
    
        <!-- Content Container -->
        <div class="mx-auto relative z-10 mt-24 flex flex-col items-center">
          <!-- Container div with margin, positioning, z-index, and flex properties -->
          
          <div class="flex justify-center items-center">
              <!-- Child div with width set to half the parent's width -->
              <p class="px-4 py-2 text-lg font-medium text-white bg-[#f84525] rounded-3xl">
                Dierenartsen in {{ $region[0]['region'] }}
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

  <livewire:lw-main-component :region="$region[0]['region']" :region_code="$region_code"/>
</x-guest-layout>