<!-- CSS Vanilla -->
<link rel="stylesheet" href="../assets/css/style.css">
<!-- Tailwind -->
<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
<!-- Alipne.js -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



<body class="login-user-bg min-h-screen md:p-8 md:px-0" style="font-family:'Lato',sans-serif;">

    <header class="max-w-lg mx-auto md:p-8 rounded-lg shadow-2xl">
        <a href="../templates/index.php">
            <img class="mx-auto h-16" src="../fonts/home-light.svg" alt="">
        </a>
    </header>
    <!-- Header -->

    <!-- Tabs -->
    <div x-data="{
            openTab: 1,
            activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
            inactiveClasses: 'text-gray hover:text-blue-500'
        }" class="body-card bg-white max-w-lg md:p-2 mx-auto rounded-lg shadow-2xl">

        <div class="rounded-lg">
            <ul class="flex border-b mr-20 rounded-lg">
                <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1}" class="mr-4">
                    <a :class="openTab === 1 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4" href="#">
                        Nouveau client ?
                    </a>
                </li>
                <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2}" class="mr-4">
                    <a :class="openTab === 2 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4" href="#">
                        Déjà client ?
                    </a>
                </li>
            </ul>
        </div>

        <!-- Create user part -->
        <div x-show="openTab === 1" class="user-new bg-white max-w-lg mx-auto md:p-12 rounded-lg shadow-2xl">
            <p class="text-gray-600 mb-5 text-start font-bold">Créer un Compte.</p>

            <form class="flex flex-col" method="POST" action="#">
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                    <input type="text" id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="phone">Téléphone</label>
                    <input type="phone" id="phone" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="name">Nom de l'entreprise</label>
                    <input type="name" id="name-entreprise" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="zip">Code postal</label>
                    <input type="text" id="zip" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="country">Pays</label>
                    <input type="text" id="country" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                </div>

                <div class="text-sm">
                    <p>* J'accepte de recevoir les communications JobFlow par e-mail :</p>
                </div>
                <div class="flex">
                    <div class="inline-block px-3 py-1">
                        <input type="radio" id="yes" name="yes" value="yes" checked>
                        <label for="yes">Oui</label>
                    </div>

                    <div class="inline-block px-3 p-1">
                        <input type="radio" id="non" name="non" value="non">
                        <label for="non">Non</label>
                    </div>
                </div>
                <div class="text-sm">
                    <p>Ces données (obligatoires lorsque signalées par un astérisque) permettent à Monster Worldwide de créer et gérer votre compte et de personnaliser nos services. Avec votre accord vous pourrez recevoir des communications Monster par e-mail. Vous disposez d’un droit d’accès, de rectification, d’opposition et de suppression par mail à serviceclientele@monster.fr.</p>
                </div>

                <div>
                    <input type="checkbox" id="subscribeNews" name="subscribe" value="newsletter">
                    <label for="subscribeNews">Souhaitez-vous vous abonner à la newsletter ?</label>
                </div>



                <div class="flex justify-end">
                    <a href="#" class="text-sm text-blue-600 hover:text-purple-700 hover:underline mb-6">Vous avez dejà un compte ? Connectez-vous</a>
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Continuer</button>
            </form>
        </div>
        <!-- Create user part -->

        <!-- user login part-->
        <div x-show="openTab === 2" class="user-reg bg-white max-w-lg mx-auto md:p-12 rounded-lg shadow-2xl">
            <section>
                <h3 class="text-gray-600 mb-5 text-start font-bold">Connectez vous.</h3>
            </section>
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
                    <a href="#" class="text-sm text-blue-600 hover:text-purple-700 hover:underline mb-6">Forgot your password?</a>
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Continuer</button>
            </form>
        </div>
        <!-- user login part-->
    </div>
    <!-- Tabs -->

    <!-- Footer -->
    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white">Don't have an account ? <a href="#" class="font-bold hover:underline">Sign up</a>.</p>
    </div>

    <footer class="max-w-lg mx-auto flex justify-center text-white">
        <a href="#" class="hover:underline">Contact</a>
        <span class="mx-3">•</span>
        <a href="#" class="hover:underline">Privacy</a>
    </footer>
</body>