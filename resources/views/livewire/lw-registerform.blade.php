<!-- component -->
<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
      <form action="" method="POST">
        <div class="-mx-3 flex flex-wrap">
          <div class="w-full px-3">
            <div class="mb-5">
              <label
                for="fName"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Naam
              </label>
              <input
                type="text"
                name="naam"
                id=""
                placeholder="Naam..."
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
          </div>
        </div>
  
        <div class="-mx-3 flex flex-wrap">
          <div class="w-full px-3 sm:w-1/2">
            <div class="mb-5">
              <label
                for="date"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Email
              </label>
              <input
                type="text"
                name="text"
                id=""
                placeholder="example@email.com"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
          </div>
          <div class="w-full px-3 sm:w-1/2">
            <div class="mb-5">
              <label
                for="time"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Wachtwoord
              </label>
              <input
                type="password"
                name="password"
                id=""
                placeholder="Wachtwoord..."
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
          </div>
        </div>
  
        <div class="mb-5">
          <label class="mb-3 block text-base font-medium text-[#07074D]">
            Verbonden aan... (bedrijf)?
          </label>
          <div class="flex items-center space-x-6">
            <div class="flex items-center">
              <input
                type="radio"
                name="radio1"
                wire:model.live.debounce="verbonden" name="done[]" value="bestaande"
                id="radioButton1"
                class="h-5 w-5"
              />
              <label
                for="radioButton1"
                class="pl-3 text-base font-medium text-[#07074D]"
              >
                Bestaande
              </label>
            </div>
            <div class="flex items-center">
              <input
                type="radio"
                name="radio1"
                wire:model.live.debounce="verbonden" name="done[]" value="new"
                id="radioButton2"
                class="h-5 w-5"
              />
              <label
                for="radioButton2"
                class="pl-3 text-base font-medium text-[#07074D]"
              >
                Nieuw
              </label>
            </div>
          </div>
        </div>

        @if (isset($verbonden) && $verbonden == 'bestaande')
        <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3">
              <div class="mb-5">
                <label
                  for="fName"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  Bedrijfsnaam
                </label>
                <select name="company" id="" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                    <option value="">--selecteer--</option>
                    @foreach ($companies as $company)
                        <option value="">{{ $company['company'] }}</option>
                    @endforeach
                </select>
              </div>
            </div>
        </div>
        @endif
        
        @if (isset($verbonden) && $verbonden == 'new')
        <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3">
              <div class="mb-5">
                <label
                  for="fName"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  Bedrijfsnaam
                </label>
                <input
                  type="text"
                  name="company"
                  id=""
                  placeholder="Bedrijfsnaam..."
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
              </div>
            </div>
        </div>
        <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3">
              <div class="mb-5">
                <label
                  for="fName"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  Gevestigd (Stad)
                </label>
                <input
                  type="text"
                  name="fName"
                  id="fName"
                  placeholder="Naam..."
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
              </div>
            </div>
        </div>
        <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3 sm:w-1/2">
              <div class="mb-5">
                <label
                  for="date"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  Telefoon
                </label>
                <input
                  type="text"
                  name="telefoon"
                  id=""
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
              </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
              <div class="mb-5">
                <label
                  for="time"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  Email
                </label>
                <input
                  type="text"
                  name="email"
                  id=""
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
              </div>
            </div>
          </div>
          <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3 sm:w-1/2">
              <div class="mb-5">
                <label
                  for="date"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  Straat
                </label>
                <input
                  type="text"
                  name="text"
                  id=""
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
              </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
              <div class="mb-5">
                <label
                  for="time"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  No.
                </label>
                <input
                  type="password"
                  name="password"
                  id=""
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
              </div>
            </div>
          </div>
          <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3 sm:w-1/2">
              <div class="mb-5">
                <label
                  for="date"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  ZIP
                </label>
                <input
                  type="text"
                  name="text"
                  id=""
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
              </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
              <div class="mb-5">
                <label
                  for="time"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  K.V.K.
                </label>
                <input
                  type="text"
                  name="kvk"
                  id=""
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
              </div>
            </div>
          </div>
          <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3">
              <div class="mb-5">
                <label
                  for="fName"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  Website
                </label>
                <input
                  type="text"
                  name="fName"
                  id="fName"
                  placeholder="Naam..."
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
              </div>
            </div>
        </div>
        @endif

  
        <div>
          <button
            class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
          >
            Registreren
          </button>
        </div>
      </form>
    </div>
  </div>


