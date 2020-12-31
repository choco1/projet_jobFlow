<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jobFlow</title>
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
</head>
<body>
    
<div>
  <nav class="bg-gray-800 bg-opacity-25 ">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-30">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-20 w-20 logo" src="../../fonts/logo-write.png" alt="">
          </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="#" class=" text-blue-400 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Publiez vos offres</a>

                    <a href="#" class="text-blue-400  hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Trouvez des candidats</a>

                    <a href="#" class="text-blue-400 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">CV thèque</a>
                </div>
            </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">

        <div class="relative inline-block text-left">
          <div>
            <a href="forms.php" class="inline-flex justify-center bg-blue-400 p-3  rounded-full text-gray-900 hover:text-grey focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-green-500" id="options-menu" aria-haspopup="true" aria-expanded="true" >
              Connexion
              <!-- Heroicon name: chevron-down -->
                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
          </div>
        </div>

      
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <span class="sr-only">Open main menu</span>
            <!--
              Heroicon name: menu

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
              Heroicon name: x

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
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


