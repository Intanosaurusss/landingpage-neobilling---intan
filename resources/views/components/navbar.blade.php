<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
</head>
<body>
   <!-- ========== HEADER ========== -->
<header class="flex flex-wrap fixed md:justify-start md:flex-nowrap z-50 w-full py-4 bg-orange-400">
  <nav class="relative max-w-7xl w-full flex flex-wrap md:grid md:grid-cols-12 basis-full items-center px-4 md:px-6 md:px-8 mx-auto">
    <div class="md:col-span-3">
      <!-- Logo -->
      <img src="{{ asset('assets/logoneo.png') }}" alt="image description" width="36" height="36" class="rounded-full">
      <!-- End Logo -->
    </div>

    <!-- Button Group -->
    <div class="flex items-center gap-x-1 md:gap-x-2 ms-auto py-1 md:ps-6 md:order-3 md:col-span-3">
    <!-- Tombol Account -->
    <a href="http://my.idneobilling.com/auth/login" type="button" class="py-2 px-3 md:border-2 border border-orange-300 md:border-orange-600 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl md:rounded-full hover:bg-orange-600 focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:focus:text-white">
        <!-- Teks Account hanya tampil di layar medium ke atas -->
        <span class="hidden md:block">Account</span>
        <!-- Ikon hanya tampil di layar kecil -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block md:hidden w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
    </a>

    <!-- Tombol Chat On WhatsApp -->
    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border md:border-transparent border-orange-300 sm:bg-transparent md:bg-orange-600 text-white hover:bg-orange-500 focus:outline-none transition disabled:opacity-50 disabled:pointer-events-none">
        <!-- Teks Chat On WhatsApp hanya tampil di layar medium ke atas -->
        <span class="hidden md:block">Chat On WhatsApp</span>
        <!-- Ikon hanya tampil di layar kecil -->
        <svg xmlns="http://www.w3.org/2000/svg" class="block md:hidden w-5 h-5 fill-current text-white " viewBox="0 0 24 24">
          <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263"></path>
        </svg>
    </button>

      <div class="md:hidden">
        <button type="button" id="menu-toggle" class="hs-collapse-toggle size-[38px] flex justify-center items-center text-sm font-semibold rounded-xl border z text-orange hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-orange-300 dark:hover:bg-orange-300 dark:focus:bg-orange-300" id="hs-navbar-hcail-collapse" aria-expanded="false" aria-controls="hs-navbar-hcail" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-hcail">
          <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
      </div>
    </div>
    <!-- End Button Group -->

    <!-- Collapse -->
    <div id="hs-navbar-hcail" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block md:w-auto md:basis-auto md:order-2 md:col-span-6 bg-navbar-default md:bg-transparent rounded-lg pl-4 pb-4 pt-2 z-50" aria-labelledby="hs-navbar-hcail-collapse">
      <div class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:justify-center md:items-center md:gap-y-0 md:gap-x-7 md:mt-0">
        <div>
          <a href="#home" class="relative inline-block text-black focus:outline-none dark:text-white" href="#" aria-current="page" id="link-home">Home</a>
        </div>
        <div>
          <a href="#about" class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" id="link-about">About</a>
        </div>
        <div>
          <a href="#services" class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300"id="link-services">Services</a>
        </div>
        <div>
          <a href="#price" class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" id="link-price">Price</a>
        </div>
        <div>
          <a href="#faq" class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" id="link-faq">FAQ</a>
        </div>
        <div>
          <a href="#contact" class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" id="link-contact">Contact</a>
        </div>
      </div>
    </div>
    <!-- End Collapse -->
  </nav>
</header>
<!-- ========== END HEADER ========== -->
</body>
</html>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('hs-navbar-hcail');
  const openIcon = menuToggle.querySelector('.hs-collapse-open\\:hidden');
  const closeIcon = menuToggle.querySelector('.hs-collapse-open\\:block');
  const sections = ['home', 'about', 'services', 'price', 'faq', 'contact'];
  const links = sections.map(section => document.getElementById('link-' + section));

  menuToggle.addEventListener('click', function () {
    if (window.innerWidth < 768) {
      if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        menu.style.maxHeight = menu.scrollHeight + 'px';
        menu.classList.add('bg-orange-300');
      } else {
        menu.style.maxHeight = '0px';
        setTimeout(() => {
          menu.classList.add('hidden');
        }, 300);
      }
      openIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('hidden');
    }
  });

  window.addEventListener('resize', function () {
    if (window.innerWidth >= 768) {
      menu.style.maxHeight = 'none';
      menu.classList.remove('hidden');
      menu.classList.remove('bg-orange-300');
      openIcon.classList.remove('hidden');
      closeIcon.classList.add('block');
    }
  });
  function setActiveLink() {
    let scrollPos = window.scrollY + 100; // 100px offset for better accuracy
    sections.forEach((section, index) => {
      let sectionElement = document.querySelector('#' + section);
      if (sectionElement) {
        let sectionTop = sectionElement.offsetTop;
        let sectionHeight = sectionElement.offsetHeight;
        if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
          links.forEach(link => link.classList.remove('border-b-2', 'border-orange-600'));
          links[index].classList.add('border-b-2', 'border-orange-600');
        }
      }
    });
  }

  // Event listener for scroll to detect active section
  window.addEventListener('scroll', setActiveLink);

  // Event listener for click
  links.forEach(link => {
    link.addEventListener('click', function () {
      links.forEach(l => l.classList.remove('border-b-2', 'border-orange-600'));
      this.classList.add('border-b-2', 'border-orange-600');
    });
  });
});
</script>




