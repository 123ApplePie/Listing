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
                  Contact Ons
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

  <style>
    .active-btn{
        background-color: #f84525;
        color: white;
    }
  </style>
  <div class="mt-8 mx-8">
    <div class="flex flex-col border rounded-lg overflow-hidden bg-white">
        <div class="grid grid-cols-1 sm:grid-cols-4">
            <div class="flex flex-col border-b sm:border-b-0 items-center p-8 sm:px-4 sm:h-full sm:justify-center">
                <p class="text-7xl font-bold text-[#0ed3cf] rounded-full">J</p>
            </div>
            <div class="flex flex-col sm:border-l col-span-3">
                <div class="flex flex-col space-y-4  p-6 text-gray-600">
                    <div class="flex flex-row text-sm">
                        <span class="mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20px"
                                viewBox="0 0 24 24" width="20px" fill="#64748b">
                                <g>
                                    <rect fill="none" height="24" width="24" />
                                </g>
                                <g>
                                    <path
                                        d="M20,7h-5V4c0-1.1-0.9-2-2-2h-2C9.9,2,9,2.9,9,4v3H4C2.9,7,2,7.9,2,9v11c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V9 C22,7.9,21.1,7,20,7z M9,12c0.83,0,1.5,0.67,1.5,1.5S9.83,15,9,15s-1.5-0.67-1.5-1.5S8.17,12,9,12z M12,18H6v-0.75c0-1,2-1.5,3-1.5 s3,0.5,3,1.5V18z M13,9h-2V4h2V9z M18,16.5h-4V15h4V16.5z M18,13.5h-4V12h4V13.5z" />
                                </g>
                            </svg>
                        </span>
                        <p class="flex items-center  text-gray-500">
                            <span class="font-semibold mr-2 text-xs uppercase">Provincie:</span>
                            <span>Jane Doe</span>
                        </p>
                    </div>
    
                    <div class="flex flex-row text-sm">
                        <span class="mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px"
                                fill="#64748b">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z" />
                            </svg>
                        </span>
                        <p class="flex items-center  text-gray-500">
                            <span class="font-semibold mr-2 text-xs uppercase">Aantal dierenartsen:</span>
                            <span>26 April 2022</span>
                        </p>
                    </div>
                    {{-- <div class="flex flex-row text-sm">
                        <span class="mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20px"
                                viewBox="0 0 24 24" width="20px" fill="#64748b">
                                <rect fill="none" height="24" width="24" />
                                <g>
                                    <path
                                        d="M6,3c0-1.1,0.9-2,2-2s2,0.9,2,2c0,1.1-0.9,2-2,2S6,4.1,6,3z M20.06,1h-2.12L15.5,3.44l1.06,1.06L20.06,1z M22,23v-2h-1 c-1.04,0-2.08-0.35-3-1c-1.83,1.3-4.17,1.3-6,0c-1.83,1.3-4.17,1.3-6,0c-0.91,0.65-1.96,1-3,1H2l0,2h1c1.03,0,2.05-0.25,3-0.75 c1.89,1,4.11,1,6,0c1.89,1,4.11,1,6,0h0c0.95,0.5,1.97,0.75,3,0.75H22z M21,13.28c0,1.44-2.19,3.62-5.04,5.58 C15.65,18.95,15.33,19,15,19c-1.2,0-2.27-0.66-3-1.5c-0.73,0.84-1.8,1.5-3,1.5c-0.94,0-1.81-0.41-2.49-0.99 c0.46-0.39,0.96-0.78,1.49-1.17l-1.55-2.97C6.15,13.3,6,12.64,6,12V8c0-1.1,0.9-2,2-2h3c1.38,0,2.63-0.56,3.54-1.46l1.41,1.41 C14.68,7.21,12.93,8,11,8H9.6l0,3.5h2.8l1.69,1.88c1.95-0.84,3.77-1.38,5.06-1.38C19.99,12,21,12.25,21,13.28z M12.2,14.27 l-0.7-0.77L9,13.6l0.83,2.01C10.42,15.23,11.64,14.55,12.2,14.27z" />
                                </g>
                            </svg> </span>
                        <p class="flex items-center  text-gray-500">
                            <span class="font-semibold mr-2 text-xs uppercase">Hobbies:</span>
                            <span>Cooking, Fishing, Darwing</span>
                        </p>
                    </div> --}}
    
                </div>
                <div class="flex flex-col w-full relative bottom-0">
                    <div class="grid grid-cols-2 border-t divide-x text-[#f84525]  bg-gray-50 dark:bg-transparent py-3">
                        <button class="btn_1 cursor-pointer hover:bg-red-200 uppercase text-xs flex flex-row items-center justify-center font-semibold">
                            <div class="mr-2" >
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#f84525"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
                            </div>
                            Bekijk alles
                        </button>
                        <button class="btn_2 cursor-pointer hover:bg-red-200 uppercase text-xs flex flex-row items-center justify-center font-semibold">
                            <div class="mr-2" >
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#f84525"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
                            </div>
                            Bekijk per stad
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="table_1">
    <livewire:lw-provincietable :region_code="$region_code"/>
</div>

<div class="table_2">
    <livewire:lw-citytable :region_code="$region_code"/>
</div>
  
</x-guest-layout>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initial setup to hide table_2 and highlight btn_1
        document.querySelector('.table_2').style.display = 'none';
        document.querySelector('.btn_1').classList.add('active-btn');

        // Button 1 click event
        document.querySelector('.btn_1').addEventListener('click', function() {
            document.querySelector('.table_1').style.display = 'block';
            document.querySelector('.table_2').style.display = 'none';

            // Highlight btn_1 and remove highlight from btn_2
            document.querySelector('.btn_1').classList.add('active-btn');
            document.querySelector('.btn_2').classList.remove('active-btn');
        });

        // Button 2 click event
        document.querySelector('.btn_2').addEventListener('click', function() {
            document.querySelector('.table_1').style.display = 'none';
            document.querySelector('.table_2').style.display = 'block';

            // Highlight btn_2 and remove highlight from btn_1
            document.querySelector('.btn_2').classList.add('active-btn');
            document.querySelector('.btn_1').classList.remove('active-btn');
        });
    });
</script>