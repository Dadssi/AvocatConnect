<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page non trouvée - Avocat Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="text-center">
            <div class="float-animation mb-8">
                <svg class="mx-auto w-32 h-32 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            
            <h1 class="text-6xl font-bold text-gray-800 mb-4">404</h1>
            <h2 class="text-3xl font-semibold text-gray-700 mb-6">Page non trouvée</h2>
            
            <p class="text-gray-600 mb-8 max-w-md mx-auto">
                Désolé, la page que vous recherchez semble avoir été déplacée ou n'existe plus.
            </p>

            <a href="home.php" class="group relative inline-flex items-center justify-center px-8 py-3 overflow-hidden font-medium transition duration-300 ease-out border-2 border-blue-500 rounded-lg shadow-md text-xl">
                <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-blue-500 group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                </span>
                <span class="absolute flex items-center justify-center w-full h-full text-blue-500 transition-all duration-300 transform group-hover:translate-x-full ease">
                    Retour à l'accueil
                </span>
                <span class="relative invisible">Retour à l'accueil</span>
            </a>
        </div>
    </div>
</body>
</html> -->
<!-- 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page non trouvée - Avocat Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-blur {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/api/placeholder/1920/1080');  /* Remplacez par votre image de fond */
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            z-index: -1;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        .content-wrapper {
            position: relative;
            z-index: 1;
        }

        .error-image {
            width: 300px;
            height: 300px;
            object-fit: contain;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center"> -->
    <!-- Arrière-plan flou -->
    <!-- <div class="bg-blur"></div> -->

    <!-- Contenu principal -->
    <!-- <div class="content-wrapper text-center px-4">
        <div class="float-animation mb-8">
            <img src="../../assets/images/bg404.jpg" alt="404 Error" class="error-image mx-auto">  -->
            <!-- Remplacez par votre image -->
        <!-- </div> -->

        <!-- <h1 class="text-6xl font-bold text-white mb-4">404</h1>
        
        <a href="/" class="group relative inline-flex items-center justify-center px-8 py-3 overflow-hidden font-medium transition duration-300 ease-out border-2 border-white rounded-lg shadow-md text-xl">
            <span class="absolute inset-0 flex items-center justify-center w-full h-full text-blue-500 duration-300 -translate-x-full bg-white group-hover:translate-x-0 ease">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </span>
            <span class="absolute flex items-center justify-center w-full h-full text-white transition-all duration-300 transform group-hover:translate-x-full ease">
                Retour à l'accueil
            </span>
            <span class="relative invisible">Retour à l'accueil</span>
        </a>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page non trouvée - Avocat Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-blur-wrapper {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
        }

        .bg-blur-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('../../assets/images/bg404.jpg'); /* Remplacez par votre image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(1px);
            transform: scale(1.1); /* Évite les bords blancs causés par le flou */
        }

        .content-wrapper {
            position: relative;
            z-index: 1;
            background-color: rgba(0, 0, 0, 0.3); /* Overlay semi-transparent pour améliorer la lisibilité */
            min-height: 100vh;
            width: 100vw;
        }
    </style>
</head>
<body>
    <div class="bg-blur-wrapper">
        <div class="content-wrapper flex items-center justify-center">
            <!-- <div class="text-center px-4">
                <h1 class="text-8xl font-bold text-white mb-8">404</h1>
                
                <a href="/" class="group relative inline-flex items-center justify-center px-8 py-3 overflow-hidden font-medium transition duration-300 ease-out border-2 border-white rounded-lg shadow-md text-xl">
                    <span class="absolute inset-0 flex items-center justify-center w-full h-full text-blue-500 duration-300 -translate-x-full bg-white group-hover:translate-x-0 ease">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                    </span>
                    <span class="absolute flex items-center justify-center w-full h-full text-white transition-all duration-300 transform group-hover:translate-x-full ease">
                        Retour à l'accueil
                    </span>
                    <span class="relative invisible">Retour à l'accueil</span>
                </a>
            </div> -->


            <!-- Contenu principal -->
    <div class="content-wrapper text-center px-4">
        <div class="text-4xl text-yellow-400 font-bold my-16 bg-purple-900 py-10 opacity-70 rounded-lg w-1/3 mx-auto">
            <h3>Page Non Trouvée</h3>
        </div>
        <a href="home.php" class="group relative inline-flex items-center justify-center px-8 py-3 mt-36  mb-2 overflow-hidden font-medium transition duration-300 ease-out border-2 border-white rounded-lg shadow-md text-xl">
            <span class="absolute inset-0 flex items-center justify-center w-full h-full text-yellow-400 duration-300 -translate-x-full bg-purple-800 group-hover:translate-x-0 ease">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </span>
            <span class="absolute flex items-center justify-center w-full h-full text-purple-800 transition-all duration-300 transform group-hover:translate-x-full ease">
                Retour à l'accueil
            </span>
            <span class="relative invisible">Retour à l'accueil</span>
        </a>
        <h1 class="text-xl font-bold text-yellow-400">Retourner à la page d'Accueil</h1>
    </div>






        </div>
    </div>
</body>
</html>