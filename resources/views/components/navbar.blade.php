<header class="header">
    <a href="" class="logo">Logo</a>

    <input type="checkbox" name="" id="check">
    <label for="check" class="icons">
        <i class='bx bx-menu' id="menu-icon"></i>
        <i class='bx bx-x' id="close-icon"></i>
    </label>

    <nav class="navbar">
        <a href="/" class="hover:text-[#f84525]" style="--i:0;">Home</a>
        <a href="/blog" class="hover:text-[#f84525]" style="--i:1;">Blog</a>
        <a href="/about" class="hover:text-[#f84525]" style="--i:2;">Over Ons</a>
        <a href="/contact" class="hover:text-[#f84525]" style="--i:3;">Contact</a>
        <button onclick="openModal('main-modal')" class="bg-[#f84525] ml-8 text-white font-semibold px-4 py-2 rounded-3xl" style="--i:4;"><i class='bx bx-plus-circle'></i> Registreren</button>
    </nav>
</header>

{{-- MODAL --}}
<style>
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .animated.faster {
        -webkit-animation-duration: 500ms;
        animation-duration: 500ms;
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }

    /* Responsive adjustments */
 /* Responsive adjustments */
 @media (max-width: 768px) {
        .navbar {
            flex-direction: column;
            align-items: center;
        }

        .nav-link, .btn-register {
            margin-bottom: 10px;
        }

        .btn-register {
            margin-left: 0;
        }

        .modal-container {
            width: 90%;
        }
    }</style>

<div class="main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
    <div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold text-gray-500">Registreren</p>
                <div class="modal-close cursor-pointer z-50" onclick="modalClose('main-modal')">
                    <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>
            <!--Body-->
            <div class="my-5 mr-5 ml-5 flex justify-center">
                <form action="" method="POST" id="add_caretaker_form"  class="w-full grid grid-cols-2 gap-3">
                    <div class="">
                        <div class="">
                            <label for="names" class="text-md text-gray-600">Naam</label>
                        </div>
                        <div class="">
                            <input type="text" id="names" autocomplete="off" name="naam" class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md" placeholder="Naam...">
                        </div>
                        <div class="">
                            <label for="phone" class="text-md text-gray-600">Adres</label>
                        </div>
                        <div class="">
                            <input type="text" id="phone" autocomplete="off" name="adres" class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md" placeholder="Adres...">
                        </div>
                        <div class="">
                            <label for="id_number" class="text-md text-gray-600">ZIP-code</label>
                        </div>
                        <div class="">
                            <input type="number" id="id_number" autocomplete="off" name="zip" class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md" placeholder="ZIP-code...">
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            <label for="names" class="text-md text-gray-600">Telefoon</label>
                        </div>
                        <div class="">
                            <input type="text" id="names" autocomplete="off" name="telefoon" class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md" placeholder="Telefoon...">
                        </div>
                        <div class="">
                            <label for="phone" class="text-md text-gray-600">Email</label>
                        </div>
                        <div class="">
                            <input type="text" id="phone" autocomplete="off" name="email" class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md" placeholder="Email...">
                        </div>
                        {{-- <div class="">
                            <label for="id_number" class="text-md text-gray-600"></label>
                        </div>
                        <div class="">
                            <input type="number" id="id_number" autocomplete="off" name="id_number" class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md" placeholder="Caretaker's ID number">
                        </div> --}}
                    </div>

                </form>
            </div>
            <!--Footer-->
            <div class="flex justify-end pt-2 space-x-14">
                <button
                    class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold" onclick="modalClose('main-modal')">Annuleren</button>
                <button
                    class="px-4 bg-[#f84525] p-3 ml-3 rounded-lg text-white hover:bg-red-700" onclick="validate_form(document.getElementById('add_caretaker_form'))">Opslaan</button>
            </div>
        </div>
    </div>
</div>

<script>
    all_modals = ['main-modal']
    all_modals.forEach((modal)=>{
        const modalSelected = document.querySelector('.'+modal);
        modalSelected.classList.remove('fadeIn');
        modalSelected.classList.add('fadeOut');
        modalSelected.style.display = 'none';
    })
    const modalClose = (modal) => {
        const modalToClose = document.querySelector('.'+modal);
        modalToClose.classList.remove('fadeIn');
        modalToClose.classList.add('fadeOut');
        setTimeout(() => {
            modalToClose.style.display = 'none';
        }, 500);
    }

    const openModal = (modal) => {
        const modalToOpen = document.querySelector('.'+modal);
        modalToOpen.classList.remove('fadeOut');
        modalToOpen.classList.add('fadeIn');
        modalToOpen.style.display = 'flex';
    }

</script>