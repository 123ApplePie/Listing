<div x-data="{ openTab: 1 }" class="p-8">
    <div class="w-full mx-auto">
        <div class="mb-4 flex space-x-4 p-2 bg-white rounded-lg shadow-md">
            <button x-on:click="openTab = 1" :class="{ 'bg-[#f84525] text-white': openTab === 1 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Bekijk per stad</button>
            <button x-on:click="openTab = 2" :class="{ 'bg-[#f84525] text-white': openTab === 2 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Bekijk alles</button>
        </div>

        <div x-show="openTab === 1" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-[#f84525]">
            <h2 class="text-2xl font-semibold mb-2 text-blue-600">De steden in de provincie {{ $region }} met één of meer dierenartsen </h2>
            <livewire:lw-citytable :region_code="$region_code"/>
        </div>

        <div x-show="openTab === 2" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-[#f84525]">
            <h2 class="text-2xl font-semibold mb-2 text-blue-600">De dierenartsen die zich bevinden in de provincie {{ $region }}</h2>
            <livewire:lw-provincietable :region_code="$region_code"/>
        </div>
    </div>
</div>