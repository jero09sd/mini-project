<x-app-layout>
    <div
        class="py-20 h-full ntialiased  h-full w-screen flex flex-row bg-black w-full min-h-screen text-slate-300 relative py-4 bg-black">
        <div class="container mx-auto px-6 md:px-12 xl:px-32 ">
            <div role="main" class="flex flex-col items-center justify-center mb-16">
                <h1 class="text-4xl font-semibold leading-9 text-center text-white dark:text-white"> <img class="object-contain h-24 center" src="{{asset('images/LogoWhite.png')}}" alt=""> </h1>
                <p class="text-base leading-normal text-center text-gray-600 dark:text-white mt-4 lg:w-1/2 md:w-10/12 w-11/12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis delectus ipsum libero quia incidunt! Reiciendis pariatur possimus autem distinctio? Magnam!</p>
              </div>
            <div class="grid gap-12 items-center md:grid-cols-3">
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl "
                        src="{{ asset('images/d9569bbed4393e2ceb1af7ba64fdf86a.jpg') }}" alt="woman" loading="lazy"
                        width="640" height="805">
                    <div>
                        <h4 class="text-2xl">Jerwyn</h4>
                        <span class="block text-sm text-gray-500">Member</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-48 md:h-64 lg:w-64 lg:h-80"
                        src="{{ asset('images/d9569bbed4393e2ceb1af7ba64fdf86a.jpg') }}" alt="man" loading="lazy"
                        width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Van</h4>
                        <span class="block text-sm text-gray-500">Team Leader</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64"
                        src="{{ asset('images/d9569bbed4393e2ceb1af7ba64fdf86a.jpg') }}" alt="woman" loading="lazy"
                        width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Raffy</h4>
                        <span class="block text-sm text-gray-500">Chief Operations Officer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
