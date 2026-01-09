<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angeline Ostan | Portfolio</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <style>
        /* Apply fonts based on your preference */
        body, #navigation-links, #Hero-text p, .courier {
            font-family: 'Courier Prime', monospace;
        }

        h1, h2, h3, #myname, .archivo {
            font-family: 'Archivo', sans-serif;
            font-weight: 900;
            letter-spacing: -0.02em;
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    <header class="w-full fixed top-0 bg-white/90 backdrop-blur-sm z-50">
        <nav class="py-4">
            <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between px-4">
                <a href="#" id="logo" class="text-2xl font-bold text-amber-600 archivo">
                    [A.]
                </a>
                <div>
                    <ul class="flex flex-row space-x-8 items-center" id="navigation-links">
                        <li><a href="#" class="hover:text-amber-600 transition">Home</a></li>
                        <li><a href="#about" class="hover:text-amber-600 transition">About</a></li>
                        <li><a href="#projects" class="hover:text-amber-600 transition">Projects</a></li>
                        <li><a href="#contact" class="hover:text-amber-600 transition">Contact</a></li>
                        <li>
                            <a href="#" class="border-2 px-4 py-2 border-amber-500 rounded-sm hover:bg-amber-500 hover:text-white transition">Resume</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-xl px-4">
        
        <!-- Hero Section: Centered Vertically -->
        <section class="min-h-screen flex flex-col justify-center">
            <div id="Hero-text">
                <p class="text-amber-600 text-xl mb-4">Hi, my name is</p>
                <h1 class="text-7xl mb-2 text-slate-900" id="myname">Angeline Ostan.</h1>
                <h2 class="text-5xl text-gray-400 mb-6 archivo">I create things for the web.</h2>
                <p class="max-w-lg text-lg leading-relaxed text-gray-600">
                    I am an aspiring web developer seeking an internship to build accessible, human-centered digital experiences. Currently focusing on mastering modern frontend technologies.
                </p>
                <div class="mt-10">
                    <a href="#projects" class="border-2 border-amber-500 px-8 py-4 rounded-sm text-amber-600 font-bold hover:bg-amber-50 transition">View My Work</a>
                </div>
            </div>
        </section>

        <!-- About Me Section -->
        <section id="about" class="py-24">
            <h3 class="text-3xl mb-10 flex items-center">
                <span class="text-amber-500 mr-2 courier text-xl">01.</span> About Me
                <span class="h-[1px] bg-gray-200 w-64 ml-4"></span>
            </h3>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="text-gray-600 space-y-4 text-lg">
                    <p>
                        Hello! My name is Angeline and I enjoy creating things that live on the internet. My interest in web development started back in school when I realized how much impact a well-designed website can have.
                    </p>
                    <p>
                        Fast-forward to today, I'm a student developer looking to apply my classroom knowledge to real-world projects. My main focus these days is building responsive and performant applications.
                    </p>
                    <p>Here are a few technologies I’ve been working with recently:</p>
                    <ul class="grid grid-cols-2 gap-2 courier text-sm text-amber-700 font-bold">
                        <li>▹ JavaScript (ES6+)</li>
                        <li>▹ Tailwind CSS</li>
                        <li>▹ PHP</li>
                        <li>▹ HTML & CSS</li>
                    </ul>
                </div>
                <div class="flex justify-center items-start">
                    <!-- Profile Placeholder -->
                    <div class="w-100 h-100 border-2 border-amber-500 rounded relative group">
                        <div class="absolute inset-0 bg-amber-500/20 group-hover:bg-transparent transition"></div>
                        <img src="./images/ID Picture2.png" alt="Profile" class="rounded object-cover w-full h-full grayscale hover:grayscale-0 transition">
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-24">
            <h3 class="text-3xl mb-10 flex items-center">
                <span class="text-amber-500 mr-2 courier text-xl">02.</span> Some Things I’ve Built
                <span class="h-[1px] bg-gray-200 w-64 ml-4"></span>
            </h3>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Project Card 1 -->
                <div class="group bg-gray-50 p-8 rounded-lg border border-transparent hover:border-amber-200 transition">
                    <p class="courier text-amber-600 text-sm mb-2">Featured Project</p>
                    <h4 class="text-2xl mb-4 archivo">E-Commerce Concept</h4>
                    <p class="text-gray-600 mb-6">A clean, minimal landing page for a boutique store. Focused on high-quality imagery and smooth navigation.</p>
                    <ul class="flex space-x-4 courier text-xs text-gray-500">
                        <li>HTML</li>
                        <li>Tailwind</li>
                        <li>JS</li>
                    </ul>
                </div>

                <!-- Project Card 2 -->
                <div class="group bg-gray-50 p-8 rounded-lg border border-transparent hover:border-amber-200 transition">
                    <p class="courier text-amber-600 text-sm mb-2">Internal Tool</p>
                    <h4 class="text-2xl mb-4 archivo">Task Manager App</h4>
                    <p class="text-gray-600 mb-6">A productivity tool designed to help students track their internship applications and deadlines.</p>
                    <ul class="flex space-x-4 courier text-xs text-gray-500">
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>Tailwind</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 text-center max-w-2xl mx-auto">
            <p class="courier text-amber-600 mb-4">03. What's Next?</p>
            <h3 class="text-5xl mb-6 archivo">Get In Touch</h3>
            <p class="text-gray-600 mb-10">
                I’m currently looking for internship opportunities starting [Month/Year]. Whether you have a question or just want to say hi, I’ll try my best to get back to you!
            </p>
            <a href="mailto:yourname@email.com" class="border-2 border-amber-500 px-10 py-4 inline-block rounded-sm text-amber-600 font-bold hover:bg-amber-50 transition archivo">
                Say Hello
            </a>
        </section>

    </main>

    <footer class="py-8 text-center text-gray-500 courier text-sm">
        <p>Built by Angeline Ostan &copy; 2024</p>
    </footer>

</body>
</html>