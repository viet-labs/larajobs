<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Larajobs</title>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>
<body>
    <div>
        <header class="relative border-b mb-auto bg-gradient-to-r from-[#EDEFF5] to-[#FDFDFE]">
            <div class="relative">
                <nav class="flex items-center justify-between h-36 max-w-[73rem] mx-auto w-full">
                    <div class="flex items-baseline">
                        <div class="mr-[46px]">
                            <a href="/" class="text-[42px] text-[#F9332B] font-bold">
                                larajobs
                            </a>
                        </div>

                        <div>
                            <a href="" class="ml-10 text-[20px] font-bold text-black hover:underline">Jobs</a>

                            <a href="" class="ml-10 text-[20px] font-bold text-black hover:underline">Consultant</a>

                            <a href="" class="ml-10 text-[20px] font-bold text-black hover:underline">Twitter</a>

                            <a href="" class="ml-10 text-[20px] font-bold text-black hover:underline">Login</a>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <a href="" class="group block rounded-lg px-7 py-4 mr-5 bg-white ring-1 ring-[#F9332B] hover:bg-[#F9332B] hover:ring-[#F9332B]">
                            <div class="flex items-center">
                                <svg class="h-0 w-0 stroke-[#F9332B] group-hover:stroke-white" fill="none" viewBox="0 0 24 24"><!-- ... --></svg>
                                <span class="text-[#F9332B] text-[16px] group-hover:text-white font-bold">Hire a Consultant</span>
                            </div>
                        </a>

                        <a href="" class="group block rounded-lg px-7 py-4 mr-5 bg-[#F9332B] ring-1 ring-white hover:bg-white hover:ring-[#F9332B]">
                            <div class="flex items-center">
                                <svg class="h-0 w-0 stroke-white group-hover:stroke-[#F9332B]" fill="none" viewBox="0 0 24 24"><!-- ... --></svg>
                                <span class="text-white text-[16px] group-hover:text-[#F9332B] font-bold">Post a Job</span>
                            </div>
                        </a>
                    </div>
                </nav>

                <section class="mx-auto max-w-7xl">
                    <h1 class="text-[60px] text-center font-bold">The official Laravel job board</h1>
                    <p class="max-w-2xl mx-auto text-center my-4">
                        “LaraJobs is our first stop whenever we're hiring a Laravel role. We've hired 10 Laravel
                        developers in the last few years, all thanks to LaraJobs.” — Matthew Hall, ArborXR
                    </p>
                </section>

                <div class="h-[200px]"></div>
            </div>
        </header>

        <main class="z-10">
            <div class="bg-white">
                <div class="mx-w-5xl mx-auto">
                    <form action="">
                        <div class="flex justify-between items-center flex-wrap bg-white lj-shadow mb-8 rounded-lg py-8 px-8 mx-4 -mt-[7rem]">
                            <div class="flex-grow flex justify-end flex-col">
                                <div class="py-1 font-bold mr-2 mb-1">Get an</div>

                                <div class="inline-block relative mb-1">
                                    <select name="" class="block w-full px-4 py-4 rounded-lg lj-shadow focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50" id="">
                                        <option>Instant</option>
                                        <option>Weekly</option>
                                    </select>
                                </div>

                                <div class="py-1 font-bold">email of all new jobs</div>

                                <input type="text" name="" id="" placeholder="Your email address" class="px-4 py-4 lj-shadow focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-lg flex-grow mb-2">

                                <button class="px-6 py-4 rounded-lg bg-accent border-2 border-accent text-white hover:bg-white hover:text-accent">Subscribe</button>
                            </div>
                        </div>
                    </form>

                    <div></div>
                </div>
            </div>
        </main>

        <footer class="border-t bg-zinc-100  mt-auto">
            <h2 class="text-[#71717A] text-[26px] text-center pt-6 pb-4">Trusted by leading Laravel shops worldwide</h2>

            <div class="mt-1 flex justify-center items-center flex-wrap">
                <img src="/image/adobe.png" class="mx-2" style="height: 36px" alt="">
                <img src="/image/ge.png" class="mx-2" style="height: 36px" alt="">
                <img src="/image/hellofresh.png" class="mx-2" style="height: 36px" alt="">
                <img src="/image/wto.png" class="mx-2" style="height: 36px" alt="">
                <img src="/image/usbank.png" class="mx-2" style="height: 36px" alt="">
            </div>

            <div class="text-[26px] text-center max-w-[43rem] mx-auto">
                <p class="mt-4 font-bold">
                    "The process was drop-dead simple, and we were shocked by the quality and volume of responses
                    we got by posting on LaraJobs – miles above the usual job boards."
                </p>
            </div>

            <div class="text-center pt-5">
                <span class="text-[21px] font-bold">
                    Tommy McGuire
                </span>
            </div>

            <div class="text-center pt-3">
                <span class="text-[#71717A] text-[21px]">
                    Modern McGuire Productions
                </span>
            </div>

            <div class="max-w-7xl mx-auto pt-12 px-4">
                <div class="mx-5 my-2 flex justify-center flex-wrap">
                    <a href="" class="mx-5 py-2 text-[18px] text-[#817480] hover:text-[#453f50]">Jobs</a>
                    <a href="" class="mx-5 py-2 text-[18px] text-[#817480] hover:text-[#453f50]">Consultant</a>
                    <a href="" class="mx-5 py-2 text-[18px] text-[#817480] hover:text-[#453f50]">Contact</a>
                    <a href="" class="mx-5 py-2 text-[18px] text-[#817480] hover:text-[#453f50]">RSS</a>
                    <a href="" class="mx-5 py-2 text-[18px] text-[#817480] hover:text-[#453f50]">Twitter</a>
                </div>
            </div>

            <div class="text-center pt-5">
                <span class="text-[#9FA7B3] text-[18px]">
                    Built by UserScape in partnership with Laravel News
                </span>
            </div>

            <div class="text-center">
                <span class="text-[#9FA7B3] text-[14px]">
                    © 2014 - 2024
                </span>
            </div>
        </footer>
    </div>
</body>
</html>
