<!doctype html>

<title>Laravel From Scratch Blog</title>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

<body style="font-family: Open Sans, sans-serif">
    <section class=" py-8">
        <nav class="flex justify-between md:items-center bg-white ">
            <div>
                <a href="/">
                    <img src="/clinic.png" alt="Laracasts Logo" width="90" height="10" class="mx-5">
                </a>
            </div>

            <div class="mt-8 mb-4 mr-4 md:mt-0 hidden sm:block">
                <a href="/" class="text-xs font-bold uppercase hover:text-blue-500"
                    style="text-decoration:none">Home Page</a>

                <a href="#"
                    class="bg-green-300 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5"
                    style="text-decoration:none">
                    Contact Us
                </a>
            </div>
        </nav>

        @yield('content')


    </section>
</body>
