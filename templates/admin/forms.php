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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
</head>
<body>

    <nav class="bg-gray-800 bg-opacity-5 ">
    <div class="flex-shrink-0">
            <img class="h-40 w-40 logo ml-28" src="../../fonts/logo-write.png" alt="">
          </div>
    </nav>

    <div class="container">
        <h2 class=" text-center text-blue-400 font-bold text-7xl pb-16">PUBLIEZ VOS OFFRES D’EMPLOI</h2>
        <div class="mt-4">
            <ul class="nav nav-tabs  ">
                <li class="active"><a class="text-white" data-toggle="tab" href="#home">Nouveau client jobFlow ?</a></li>
                <li><a class="text-white" data-toggle="tab" href="#menu1">Déja client jobFlow ?</a></li>
            </ul>

            <div class="tab-content ">
                    <div id="home" class="tab-pane fade in active">          
                        <main class="bg-gray-800 bg-opacity-25 w-5/12  p-12 md:p-12  rounded-lg shadow-2xl">
                            <section>
                                <h3 class="text-blue-600 font-bold text-5xl text-center">Welcome to JobFlow</h3>
                                <p class="text-blue-50 pt-2 text-center">Sign in to your account.</p>
                            </section>

                            <section class="mt-10">
                                <form class="flex flex-col" method="POST" action="#">
                                    <div class="mb-6 pt-3 rounded bg-gray-200">
                                        <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Name</label>
                                        <input type="text" id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                                    </div>
                                    <div class="mb-6 pt-3 rounded bg-gray-200">
                                        <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                                        <input type="text" id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                                    </div>
                                    <div class="mb-6 pt-3 rounded bg-gray-200">
                                        <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                                        <input type="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                                    </div>
                                    <div class="flex justify-end">
                                        <a href="#" class="text-base text-blue-50 hover:text-purple-700 hover:underline mb-6">Forgot your password?</a>
                                    </div>
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Sign In</button>
                                </form>
                            </section>
                        </main>
                    </div>

                    
                    <div id="menu1" class="tab-pane fade">
                        <main class="bg-gray-800 bg-opacity-25 w-5/12 p-8 md:p-12 rounded-lg shadow-2xl">
                            <section>
                                <h3 class="text-blue-600 font-bold text-5xl text-center">Welcome to JobFlow</h3>
                                <p class="text-blue-50 pt-2 text-center">Sign in to your account.</p>
                            </section>

                            <section class="mt-10">
                                <form class="flex flex-col" method="POST" action="#">
                                    <div class="mb-6 pt-3 rounded bg-gray-200">
                                        <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                                        <input type="text" id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                                    </div>
                                    <div class="mb-6 pt-3 rounded bg-gray-200">
                                        <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                                        <input type="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                                    </div>
                                    <div class="flex justify-end">
                                        <a href="#" class="text-base text-blue-600 hover:text-purple-700 hover:underline mb-6">Forgot your password?</a>
                                    </div>
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Sign In</button>
                                </form>
                            </section>
                        </main>
                    </div>
                
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>