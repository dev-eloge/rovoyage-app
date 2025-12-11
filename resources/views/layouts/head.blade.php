<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROVOYAGE - Agence de Voyage Togo</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- Config Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    colors: {
                        brand: {
                            maroon: '#5D1919',  // Couleur sombre du logo
                            lightMaroon: '#8C2B2B',
                            gold: '#F59E0B',    // Couleur jaune/orange du logo
                            cream: '#FFFBEB',   // Fond très clair chaud
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out 3s infinite',
                        'blob': 'blob 7s infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-15px)' },
                        },
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* --- Styles Glassmorphism "Warm Theme" --- */
        .glass {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.9);
            /* Ombres chaudes (Gold/Maroon) */
            box-shadow: 0 8px 32px rgba(93, 25, 25, 0.08);
        }
        
        .glass-nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(245, 158, 11, 0.1); /* Bordure dorée subtile */
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.9);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); /* Effet rebond */
        }
        
        .glass-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px -5px rgba(245, 158, 11, 0.25); /* Ombre dorée au survol */
            border-color: #F59E0B;
        }

        /* --- Inputs Styling --- */
        .input-theme {
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid #e7e5e4;
            color: #5D1919;
            transition: all 0.3s;
        }
        .input-theme:focus {
            outline: none;
            border-color: #F59E0B;
            background: white;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.15);
        }

        /* --- Animations Scroll Reveal --- */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- Background Pattern --- */
        .bg-pattern {
            background-color: #fffbeb;
            background-image: radial-gradient(#FCD34D 0.5px, transparent 0.5px);
            background-size: 20px 20px;
        }
    </style>
</head>