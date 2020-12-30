<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobFlow.com</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>


<body>
<div>
  <nav class="bg-gray-800 bg-opacity-80">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-30">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-20 w-20 logo" src="../fonts/logo-write.png" alt="">
          </div>
          <div class="hidden md:block">
            <div class="blod ml-10 flex items-baseline space-x-4">

              <a href="#" class="text-blue-400 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Offres</a>

              <a href="#" class="text-blue-400 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">A propos</a>

              <a href="#" class=" text-blue-400 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Conseils</a>
            </div>
          </div>
        </div>

    <div class="hidden md:block">
      <div class="ml-4 flex items-center md:ml-6">
  
            <div class="relative inline-block text-left">
                 <div>
                   <button type="button" id="menu-btn" class="inline-flex justify-center bg-blue-400 p-3  rounded-full text-gray-900 hover:text-grey focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-blue hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-gray-500" id="options-menu" aria-haspopup="true" aria-expanded="true">
                     Connexion
                     <!-- Heroicon name: chevron-down -->
                     <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                       <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                     </svg>
                   </button>
                 </div>
  
                  <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                    <div id="dropdown" class="py-1 hidden" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                      <div >
                        <a href="../templates/login-user.php" class=" flex flex-wrap block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                        <img class="object-scale-down h-10" src="../fonts/user.svg" alt="">
                        <p class="text-center mx-3 my-2">Candidat</p>
                        </a>
                      </div>
                      <div >
                        <a href="#" class=" flex flex-wrap block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                        <img class="object-scale-down h-10 " src="../fonts/group-refresh.svg" alt="">
                        <p class="text-center mx-3 my-2">Recruteur</p>
                        </a>
                      </div>
                    </div>
                  </div>
            </div>
      </div>
    </div>   
  </div>
</div>

    <!--
      Mobile menu, toggle classes based on menu state.

      Open: "block", closed: "hidden"
    -->
    <div class="hidden md:hidden">
      <div class="pt-4 pb-3 border-t border-gray-700">
        <div class="flex items-center px-5">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <button class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <span class="sr-only">View notifications</span>
          
          </button>
        </div>
      </div>
    </div>
  </nav>
</div>


    <script src="../assets/js/script.js"></script>
</body>

</html>