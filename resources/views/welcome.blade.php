<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to My Portfolio Web</title>
        
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🍔</text></svg>">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('frontend/images/') }}">
        <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    </head>
    <body>
        {{-- ========= NAVBAR ========= --}}
        <nav class="bg-white dark:bg-gray-900 fixed w-full z-30 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center">
                <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">Ifwtzzzzzh</span>
            </a>
            <div class="flex md:order-2">
                <a href="#contact" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Contact Me</a>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#home" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                </li>
                <li>
                    <a href="#about" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
                <li>
                    <a href="#experience" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Experience</a>
                </li>
                <li>
                    <a href="#project" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Project</a>
                </li>
                <li>
                    <a href="#testimonial" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Testimonial</a>
                </li>
            </ul>
            </div>
            </div>
        </nav>
        {{-- ========= END NAVBAR ========= --}}

        {{-- ========= SUCCESS TOAST ========= --}}
        @if (session()->has('success')) 
        <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">{{ session('success') }}</div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
        </div>
        @endif
        {{-- ========= END SUCCESS TOAST ========= --}}

        {{-- ========= HOME SECTION ========= --}}
        <section class="home bg-white dark:bg-gray-900" id="home">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1 class="max-w-2xl mb-6 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">In <mark class="px-2 text-white bg-green-600 rounded dark:bg-green-500">Flutter</mark> We Trust: Crafting Your Dream Apps</h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Unlock the power of seamless mobile app creation with Flutter, your gateway to efficiency and innovation. As a versatile and cross-platform framework, Flutter streamlines development by allowing you to craft captivating user experiences that effortlessly adapt to various devices.</p>
                    <a href="#about" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        About me
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                    <a href="https://docs.google.com/document/d/1ajLHCFTht2hLGJopoZ6X1sTu6DSco4Uw/edit?usp=sharing&ouid=112214019342316224491&rtpof=true&sd=true" class="inline-flex items-center justify-center mb-10 px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Download my CV
                    </a> 
                </div>
                <div class="mockup lg:mt-0 lg:col-span-5 lg:flexs">    
                    <div class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl">
                        <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[17px] top-[124px] rounded-l-lg"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[17px] top-[178px] rounded-l-lg"></div>
                        <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[17px] top-[142px] rounded-r-lg"></div>
                        <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-2-light.png" class="dark:hidden w-[272px] h-[572px]" alt="">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-2-dark.png" class="hidden dark:block w-[272px] h-[572px]" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- ========= END HOME SECTION ========= --}}

        {{-- ========= ABOUT ME SECTION ========= --}}
        <section class="about bg-white dark:bg-gray-900 mt-10" id="about">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="lg:mt-0 lg:col-span-5 lg:flexs">    
                    <img class="hero-image h-auto max-w-full rounded-lg bg-gray-200" src="{{ asset('frontend/images/hero.jpg') }}" alt="image description">
                </div>
                <div class="ml-auto place-self-center lg:col-span-7">
                    <h1 class="max-w-2xl my-6 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">About <mark class="px-2 text-white bg-green-600 rounded dark:bg-green-500">Me</mark></h1>
                    <p class="max-w-2xl font-light text-gray-500 md:text-lg lg:text-xl dark:text-gray-400">A Passionate Flutter Developer from Metro, Lampung, Indonesia with a fervent dedication to mastering the intricacies of Flutter's framework, I bring a blend of creativity and code to the table. Eager to transform imaginative concepts into polished, user-friendly applications, I thrive on challenges and am driven by the opportunity to continuously learn and contribute to the ever-evolving landscape of mobile development. I am also a Fragrance Enthusiast and Dota 2 enjoyer.</p>
                    <p class="max-w-2xl mt-6 mb-2 font-medium md:text-lg lg:text-xl dark:text-white">Follow me on social media</p>
                    <div class="flex items-center">
                        @foreach ($social_medias as $social_media)
                        <a href="{{ $social_media->link }}" class="mr-2">
                            <img src="{{ asset('storage/image/'.$social_media->logo) }}" alt="">
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        {{-- ========= END ABOUT ME SECTION ========= --}}

        {{-- ========= EXPERIENCE SECTION ========= --}}
        <section class="experience bg-white dark:bg-gray-900 px-4" id="experience">
            <div class="experience-title mx-auto">
                <h1 class="max-w-2xl mt-6 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Latest <mark class="px-2 text-white bg-green-600 rounded dark:bg-green-500">Experience</mark></h1>
            </div>
            <p class="max-w-4xl font-light text-gray-500 md:text-lg lg:text-xl dark:text-gray-400 experience-title pt-5 mx-auto lg:gap-8 xl:gap-0">With a solid educational foundation and a history of collaboration with reputable organizations.</p>

            <div class="experience-timeline">
                <div class="education">
                    <mark class="max-w-2xl mt-6 mb-3 font-bold md:text-xl dark:text-white px-2 text-white bg-green-600 rounded dark:bg-green-500">Education</mark>
                    <ol class="education relative border-l mt-2 border-gray-200 dark:border-gray-700">
                        @foreach ($educations as $education)
                        <li class="mb-10 ml-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ $education->time }}</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $education->name }}</h3>
                            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">{{ $education->description }}</p>
                        </li>
                        @endforeach
                    </ol>
                </div>

                <div class="organization">
                    <mark class="max-w-2xl mt-6 mb-3 font-bold md:text-xl dark:text-white px-2 text-white bg-green-600 rounded dark:bg-green-500">Organization</mark>
                    <ol class="education relative border-l mt-2 border-gray-200 dark:border-gray-700">
                        @foreach ($organizations as $organization)
                        <li class="mb-10 ml-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ $organization->time }}</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $organization->name }}</h3>
                            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">{{ $organization->description }}</p>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </section>
        {{-- ========= END EXPERIENCE SECTION ========= --}}

        {{-- ========= PROJECT SECTION ========= --}}
        <section class="project bg-white dark:bg-gray-900 px-4 lg:py-16" id="project">
            <div class="project-title mx-auto">
                <h1 class="max-w-2xl mt-6 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Recent <mark class="px-2 text-white bg-green-600 rounded dark:bg-green-500">Projects</mark></h1>
            </div>
            <p class="project-subtitle max-w-4xl font-light text-gray-500 md:text-lg lg:text-xl dark:text-gray-400 experience-title pt-5 mx-auto lg:gap-8 xl:gap-0">I've recently channeled my expertise into a compelling project application that showcases innovation, functionality, and a deep understanding of user-centric design.</p>

            <div class="project-card grid lg:grid-cols-4 lg:gap-8">
                @foreach ($projects as $project)
                <div class="mb-4">
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <div data-modal-target="defaultModal" data-modal-toggle="defaultModal">
                            <img class="w-full max-w-lg rounded-lg" src="{{ asset('storage/image/'.$project->image) }}" alt="">
                            <div class="flex justify-between items-center mt-6 mb-2 text-gray-500">
                                <mark class="font-bold dark:text-white px-4 text-white bg-green-600 rounded dark:bg-green-500">{{ $project->category }}</mark>
                            </div>
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $project->name }}</h2>
                            <p class="mb-2 font-light text-gray-500 dark:text-gray-400">{{ $project->description }}</p>
                        </div>
                    </article> 
                </div>
                @endforeach
            </div>

            <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Snapflix - Movie Streaming Website</h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="p-6">
                            <img class="w-full max-w-2xl rounded-lg" src="{{ asset('frontend/images/project-card.jpg') }}" alt="">
                            <h2 class="text-base font-bold mt-6 tracking-tight text-gray-900 dark:text-white">Category</h2>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">Web</p>
                            <h2 class="text-base font-bold mt-6 tracking-tight text-gray-900 dark:text-white">Tech Stack</h2>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">Laravel</p>
                            <h2 class="text-base font-bold mt-6 tracking-tight text-gray-900 dark:text-white">Description</h2>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers influence both web designers and developers.</p>
                        </div>
                        <div class="btn-modal flex flex-wrap items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <a href="#" class="px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                <img class="w-4 h-4 mr-2" src="{{ asset('frontend/images/icons8-github.png') }}" alt="">
                                Github Link
                            </a>
                            <a href="#" class="px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                <img class="w-4 h-4 mr-2" src="{{ asset('frontend/images/icons8-notion.png') }}" alt="">
                                Documentation Link
                            </a>
                            <a href="#" class="px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                <img class="w-4 h-4 mr-2" src="{{ asset('frontend/images/icons8-web.png') }}" alt="">
                                Web Link
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- ========= END PROJECT SECTION ========= --}}

        {{-- ========= TESTIMONIAL SECTION ========= --}}
        <section class="testimonial bg-white dark:bg-gray-900 px-4" id="testimonial">
            <div class="testimonial-title mx-auto">
                <h1 class="max-w-2xl mt-6 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Client <mark class="px-2 text-white bg-green-600 rounded dark:bg-green-500">Testimonial</mark></h1>
            </div>
            <p class="testimonial-subtitle max-w-4xl font-light text-gray-500 md:text-lg lg:text-xl dark:text-gray-400 testimonial-title pt-5 mx-auto lg:gap-8 xl:gap-0">My recent client testimonial reflects the impactful solutions. I delivered, leaving a lasting impression through effective collaboration and exceptional results.</p>

            
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <div class="testimonial-item hidden ease-in-out duration-1000" data-carousel-item>
                        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                            <figure class="max-w-screen-md mx-auto">
                                <svg class="testimonial-svg h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                                </svg> 
                                <blockquote>
                                    <p class="testimonial-letter text-2xl font-medium text-gray-900 dark:text-white">"Flowbite is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                                </blockquote>
                                <figcaption class="figcaption flex items-center justify-center mt-6 space-x-3">
                                    <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                                    <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                        <div class="pr-3 font-medium text-gray-900 dark:text-white">Micheal Gough</div>
                                        <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">CEO at Google</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="testimonial-item hidden ease-in-out duration-1000" data-carousel-item>
                        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                            <figure class="max-w-screen-md mx-auto">
                                <svg class="testimonial-svg h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                                </svg> 
                                <blockquote>
                                    <p class="testimonial-letter text-2xl font-medium text-gray-900 dark:text-white">"Flowbite is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                                </blockquote>
                                <figcaption class="figcaption flex items-center justify-center mt-6 space-x-3">
                                    <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                                    <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                        <div class="pr-3 font-medium text-gray-900 dark:text-white">Micheal Gough</div>
                                        <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">CEO at Google</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="testimonial-item hidden ease-in-out duration-1000" data-carousel-item>
                        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                            <figure class="max-w-screen-md mx-auto">
                                <svg class="testimonial-svg h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                                </svg> 
                                <blockquote>
                                    <p class="testimonial-letter text-2xl font-medium text-gray-900 dark:text-white">"Flowbite is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                                </blockquote>
                                <figcaption class="figcaption flex items-center justify-center mt-6 space-x-3">
                                    <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                                    <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                        <div class="pr-3 font-medium text-gray-900 dark:text-white">Micheal Gough</div>
                                        <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">CEO at Google</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="testimonial-item hidden ease-in-out duration-1000" data-carousel-item>
                        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                            <figure class="max-w-screen-md mx-auto">
                                <svg class="testimonial-svg h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                                </svg> 
                                <blockquote>
                                    <p class="testimonial-letter text-2xl font-medium text-gray-900 dark:text-white">"Flowbite is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                                </blockquote>
                                <figcaption class="figcaption flex items-center justify-center mt-6 space-x-3">
                                    <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                                    <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                        <div class="pr-3 font-medium text-gray-900 dark:text-white">Micheal Gough</div>
                                        <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">CEO at Google</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </section>
        {{-- ========= END TESTIMONIAL SECTION ========= --}}

        {{-- ========= CONTACT ME SECTION ========= --}}
        <section class="contact bg-white dark:bg-gray-900 px-4" id="contact">
            <div class="contact-title mx-auto">
                <h1 class="max-w-2xl mt-6 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Contact <mark class="px-2 text-white bg-green-600 rounded dark:bg-green-500">Me</mark></h1>
            </div>
            <p class="contact-subtitle max-w-4xl font-light text-gray-500 md:text-lg lg:text-xl dark:text-gray-400 testimonial-title pt-5 mx-auto lg:gap-8 xl:gap-0">Feel free to reach out through the 'Contact Me' section. I'm here to connect and collaborate</p>

            <div class="contact-form p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700">             
                <form enctype="multipart/form-data" method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email" required>
                </div>
                <div class="mb-6">
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your subject" required>
                </div>
                <div class="mb-6">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Message</label>
                    <textarea name="message" id="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a message..."></textarea>
                </div>
                <button type="submit" class="btn-contact text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
                </form>
            </div>
        </section>
        {{-- ========= END CONTACT ME SECTION ========= --}}

        {{-- ========= FOOTER SECTION ========= --}}        
        <footer class="footer bg-white dark:bg-gray-900">
            <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2023 <a href="https://flowbite.com/">Ifwtzzzzzh™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-5 sm:justify-center md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <img class="w-4 h-4" src="{{ asset('frontend/images/icons8-discord.png') }}" alt="" srcset="">
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <img class="w-4 h-4" src="{{ asset('frontend/images/icons8-facebook.png') }}" alt="" srcset="">
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <img class="w-4 h-4" src="{{ asset('frontend/images/icons8-github.png') }}" alt="" srcset="">
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <img class="w-4 h-4" src="{{ asset('frontend/images/icons8-instagram.png') }}" alt="" srcset="">
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <img class="w-4 h-4" src="{{ asset('frontend/images/icons8-telegram.png') }}" alt="" srcset="">
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <img class="w-4 h-4" src="{{ asset('frontend/images/icons8-twitter.png') }}" alt="" srcset="">
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <img class="w-4 h-4" src="{{ asset('frontend/images/icons8-youtube.png') }}" alt="" srcset="">
                    </a>
                </div>
            </div>
        </footer>
        {{-- ========= END FOOTER SECTION ========= --}}
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script>
        const items = [
        {
            position: 0,
            el: document.getElementById('carousel-item-1')
        },
        {
            position: 1,
            el: document.getElementById('carousel-item-2')
        },
        {
            position: 2,
            el: document.getElementById('carousel-item-3')
        },
        {
            position: 3,
            el: document.getElementById('carousel-item-4')
        },
    ];

    const options = {
        defaultPosition: 1,
        interval: 5000,
        
        indicators: {
            activeClasses: 'bg-white dark:bg-gray-800',
            inactiveClasses: 'bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800',
            items: [
                {
                    position: 0,
                    el: document.getElementById('carousel-indicator-1')
                },
                {
                    position: 1,
                    el: document.getElementById('carousel-indicator-2')
                },
                {
                    position: 2,
                    el: document.getElementById('carousel-indicator-3')
                },
                {
                    position: 3,
                    el: document.getElementById('carousel-indicator-4')
                },
            ]
        },
        
        // CALLBACK FUNCTIONS
        onNext: () => {
            console.log('next slider item is shown');
        },
        onPrev: ( ) => {
            console.log('previous slider item is shown');
        },
        onChange: ( ) => {
            console.log('new slider item has been shown');
        }
    };
    </script>
</html>
