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
  
  
  
  
  {{-- <div class="relative py-24 border border-b-[#f84525] border-b-8 flex space-x-8 w-screen bg-cover" style="background-image: url('img/slider-kat-1.jpg');">
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black opacity-60"></div>
  
    <!-- Left Div -->
    <div class="w-1/2 p-6 text-center pt-28" style="z-index: 1">
        <span class="text-white text-lg bg-[#f84525] rounded-3xl px-6 py-2">Contact Ons</span>
        <h2 class="mt-2 text-6xl font-bold mb-4 text-white">Heb je vragen?</h2>
    </div>
  
    <!-- Right Div -->
    <div class="w-1/2 p-6" style="z-index: 1">
        <h2 class="text-4xl font-bold mb-4 text-white">Contact informatie</h2>
        <p >
          <ul class="text-white text-xl">
            <li>Zernikeplein 11, Groningen, NL</li>
          </ul>
        </p>
        <br>
        <p>
          <ul class="text-white text-xl">
            <li><i class='bx bxs-phone'><span class="ml-2">(123) XXX XXXXX</span> </i></li>
            <li><i class='bx bxs-envelope' ><span class="ml-2">support@mail.com</span></i></li>
          </ul>
        </p>
        <br>
        <span class="text-white font-semibold text-xl">Volg Ons</span>
        <div class="flex text-white text-3xl">
          <i class='bx bxl-facebook' ></i>
          <i class='bx bxl-twitter' ></i>
          <i class='bx bxl-instagram-alt' ></i>
        </div>
      </div>
  </div> --}}
  
  <div class="flex justify-center items-center w-screen h-screen bg-[#f8f4f3]">
      <div class="container mx-auto my-4 px-4 lg:px-20">
  
          <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl bg-white">
              <div class="flex">
                  <h1 class="font-bold uppercase text-3xl">Bericht versturen</h1>
              </div>
              <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                  <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
              type="text" placeholder="First Name*" />
                  <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
              type="text" placeholder="Last Name*" />
                  <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
              type="email" placeholder="Email*" />
                  <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
              type="number" placeholder="Phone*" />
          </div>
                  <div class="my-4">
                      <textarea placeholder="Message*" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                  </div>
                  <div class="my-2 w-1/2 lg:w-1/4">
                      <button class="uppercase text-sm font-bold tracking-wide bg-[#f84525] text-gray-100 p-3 rounded-lg w-full 
                        focus:outline-none focus:shadow-outline">
              Verzenden
            </button>
                  </div>
              </div>
  
              <div
                  class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-[#f84525] rounded-2xl">
                  <div class="flex flex-col text-white">
                      <h1 class="font-bold uppercase text-4xl my-4">Drop in our office</h1>
                      <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                          tincidunt arcu diam,
                          eu feugiat felis fermentum id. Curabitur vitae nibh viverra, auctor turpis sed, scelerisque ex.
                      </p>
  
                      <div class="flex my-4 w-2/3 lg:w-1/2">
                          <div class="flex flex-col">
                              <i class="fas fa-map-marker-alt pt-2 pr-2" />
              </div>
              <div class="flex flex-col">
                <h2 class="text-2xl text-white">Kantoor</h2>
                <p class="text-white">5555 Tailwind RD, Pleasant Grove, UT 73533</p>
              </div>
            </div>
            
            <div class="flex my-4 w-2/3 lg:w-1/2">
              <div class="flex flex-col">
                <i class="fas fa-phone-alt pt-2 pr-2" />
              </div>
              <div class="flex flex-col">
                <h2 class="text-2xl">Contact</h2>
                <p class="text-white">Tel: xxx-xxx-xxx</p>
                <p class="text-white">Fax: xxx-xxx-xxx</p>
              </div>
            </div>
            
            <div class="flex my-4 w-2/3 lg:w-1/2">
              <a href="https://www.facebook.com/ENLIGHTENEERING/" target="_blank" rel="noreferrer" class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
                <i class="fab fa-facebook-f text-blue-900" />
              </a>
              <a href="https://www.linkedin.com/company/enlighteneering-inc-" target="_blank" rel="noreferrer" class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
                <i class="fab fa-linkedin-in text-blue-900" />
              </a>
            </div>
          </div>
        </div>
      </div>
  </div>
  
  <x-faq/>
  {{-- <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
    <div>
      <a title="Buy me a pizza" href="https://www.buymeacoffee.com/Dekartmc" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
        <img class="object-cover object-center w-full h-full rounded-full" src="https://img.icons8.com/emoji/48/000000/pizza-emoji.png"/>
      </a>
    </div>
  </div> --}}
  </x-guest-layout>