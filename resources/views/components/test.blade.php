<!-- This example requires Tailwind CSS v2.0+ -->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block xl:inline">Simple</span>
            <span class="block text-green-500 xl:inline pl-2">Clinic</span>
        </h1>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-warning">
        <ol>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ol>
    </div>
@endif
<div class="container">


    <div class="mt-10 sm:mt-0 row">

        <div class="mt-5 md:mt-0 col-md-6 offset-md-3 ">
            <form method="post">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md ">
                    <h2 class="text-3xl font-bold pt-7">Book Now!</h2>
                    <div class="px-4 py-5  sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="name" class="block text-sm font-medium text-gray-700 ">Name</label>
                                <input type="text" name="name" id="name" placeholder="Eg. Mg Mg"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Phone</label>
                                <input type="text" name="phone" id="phone" placeholder="+95"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="age" class="block text-sm font-medium text-gray-700 ">Age</label>
                                <input type="number" name="age" id="age" placeholder="age" min="1"
                                    max="120"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="date" class="block text-sm font-medium text-gray-700">Date of
                                    Appointment</label>
                                <input type="date" name="appointment" id="date" placeholder="date"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2">
                            </div>

                        </div>
                    </div>
                    <div class="px-4 py-3 bg-blue-150 text-right sm:px-6 ">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-300 hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Book</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
