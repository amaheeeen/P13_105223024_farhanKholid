<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile->name }} - CV</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Archivo:wght@300;400;600&family=Oswald:wght@400;700&display=swap');

        :root {
            --army: #4B5320;
            --paper: #F3F4F6;
            --dark: #1A1A1A;
        }

        body {
            font-family: 'Archivo', sans-serif;
            background-color: #e5e7eb;
            color: var(--dark);
        }

        h1, h2, h3, .heading-font {
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
        }

        /* Helper Class untuk Garis Presisi */
        .separator {
            height: 2px;
            background-color: var(--army);
            width: 40px;
            margin-bottom: 1rem;
        }

        .section-title {
            font-size: 0.85rem;
            letter-spacing: 0.2em;
            color: var(--army);
            font-weight: 700;
            margin-bottom: 0.5rem;
            display: block;
        }
    </style>
</head>
<body class="py-10 px-4 md:px-0">

    <div class="max-w-[1000px] mx-auto bg-white shadow-2xl overflow-hidden min-h-screen relative">
        
        <div class="h-4 w-full bg-[#4B5320]"></div>

        <div class="p-8 md:p-16">
            
            <header class="flex flex-col md:flex-row justify-between items-start border-b-2 border-gray-100 pb-10 mb-12">
                <div>
                    <h1 class="text-6xl md:text-7xl font-bold tracking-tighter leading-none text-[#1a1a1a]">
                        {{ explode(' ', $profile->name)[0] }}<br>
                        <span class="text-[#4B5320]">{{ substr(strstr($profile->name, ' '), 1) }}</span>
                    </h1>
                    <p class="mt-4 text-lg font-medium tracking-wide text-gray-500">
                        {{ $profile->headline }}
                    </p>
                </div>
                
                <div class="mt-8 md:mt-2 text-right">
                    <div class="inline-flex flex-col items-end gap-1 text-sm font-semibold text-gray-600">
                        <a href="mailto:{{ $profile->email }}" class="hover:text-[#4B5320] transition">{{ $profile->email }}</a>
                        <a href="{{ $profile->linkedin_url }}" class="hover:text-[#4B5320] transition">LinkedIn / farhan-kholid</a>
                        <a href="{{ $profile->github_url }}" class="hover:text-[#4B5320] transition">GitHub / amaheeeen</a>
                        <span class="mt-2 text-xs text-gray-400 font-normal">JAKARTA, IDN</span>
                    </div>
                </div>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-12">
                
                <aside class="md:col-span-4 space-y-12 border-r-0 md:border-r border-gray-100 pr-0 md:pr-8">
                    
                    <div>
                        <span class="section-title">EDUCATION</span>
                        <div class="separator"></div>
                        <div class="space-y-6">
                            <div>
                                <h3 class="font-bold text-lg leading-none mb-1">Univ. Pertamina</h3>
                                <p class="text-sm text-gray-500">Computer Science</p>
                                <p class="text-xs text-gray-400 mt-1">2021 - Present</p>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg leading-none mb-1">BINUS Univ.</h3>
                                <p class="text-sm text-gray-500">Architecture</p>
                                <p class="text-xs text-gray-400 mt-1">2020 - 2021</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <span class="section-title">TECHNICAL STACK</span>
                        <div class="separator"></div>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Laravel', 'React.js', 'Tailwind', 'PHP', 'JavaScript', 'MySQL', 'Git'] as $tech)
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 text-xs font-bold uppercase tracking-wider">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <span class="section-title">DESIGN TOOLS</span>
                        <div class="separator"></div>
                        <ul class="text-sm text-gray-600 space-y-2 font-medium">
                            <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#4B5320] rounded-full"></span> Figma (UI/UX)</li>
                            <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#4B5320] rounded-full"></span> Adobe Photoshop</li>
                            <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#4B5320] rounded-full"></span> Adobe Illustrator</li>
                            <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#4B5320] rounded-full"></span> Premiere Pro</li>
                        </ul>
                    </div>

                </aside>

                <main class="md:col-span-8 space-y-12">
                    
                    <div>
                        <span class="section-title">PROFILE SUMMARY</span>
                        <div class="separator"></div>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            {{ $profile->about }}
                        </p>
                    </div>

                    <div>
                        <span class="section-title">PROFESSIONAL HISTORY</span>
                        <div class="separator"></div>
                        <div class="space-y-8 border-l-2 border-gray-100 pl-6 ml-2">
                            
                            <div class="relative">
                                <span class="absolute -left-[31px] top-1 w-4 h-4 bg-[#4B5320] border-4 border-white rounded-full"></span>
                                <h3 class="text-xl font-bold">Digital Marketing Specialist</h3>
                                <p class="text-sm font-semibold text-[#4B5320] mb-2">PT Farhan Surya Indah Tour & Travel | 2019 - Present</p>
                                <p class="text-sm text-gray-600">Leading design initiatives, developing branding assets, and managing marketing content to strengthen corporate identity.</p>
                            </div>

                            <div class="relative">
                                <span class="absolute -left-[31px] top-1 w-4 h-4 bg-gray-300 border-4 border-white rounded-full"></span>
                                <h3 class="text-xl font-bold">Design Specialist</h3>
                                <p class="text-sm font-semibold text-[#4B5320] mb-2">Royal Rinjani | 2020 - 2023</p>
                                <p class="text-sm text-gray-600">Crafted visual narratives and branding materials for high-profile clients.</p>
                            </div>

                        </div>
                    </div>

                    <div>
                        <span class="section-title">SELECTED WORKS</span>
                        <div class="separator"></div>
                        <div class="grid grid-cols-1 gap-6">
                            <div class="group border border-gray-200 p-6 hover:border-[#4B5320] transition-colors bg-gray-50 hover:bg-white">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-2xl font-bold group-hover:text-[#4B5320] transition">KALCER.ID</h3>
                                    <span class="text-xs font-mono border border-gray-300 px-2 py-1">LARAVEL</span>
                                </div>
                                <p class="text-gray-600 text-sm mb-4">Viral Hangout Monitoring System designed to help users find locations based on personality traits.</p>
                                <a href="#" class="text-xs font-bold underline decoration-[#4B5320] underline-offset-4 uppercase tracking-wider">View Repository -></a>
                            </div>

                            <div class="group border border-gray-200 p-6 hover:border-[#4B5320] transition-colors bg-gray-50 hover:bg-white">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-2xl font-bold group-hover:text-[#4B5320] transition">MONO STOCK</h3>
                                    <span class="text-xs font-mono border border-gray-300 px-2 py-1">JS CANVAS</span>
                                </div>
                                <p class="text-gray-600 text-sm mb-4">Inventory dashboard focusing on minimalist UI and high-performance rendering using Native Canvas API.</p>
                                <a href="#" class="text-xs font-bold underline decoration-[#4B5320] underline-offset-4 uppercase tracking-wider">View Repository -></a>
                            </div>
                        </div>
                    </div>

                </main>
            </div>

            <footer class="mt-20 pt-8 border-t border-gray-200 flex justify-between items-center opacity-50">
                <div class="text-4xl font-bold text-[#4B5320] tracking-tighter">FK.</div>
                <div class="text-[10px] uppercase tracking-widest text-right">
                    © 2025 Farhan Kholid<br>
                    Built with Laravel & Tailwind
                </div>
            </footer>

        </div>
    </div>

</body>
</html>