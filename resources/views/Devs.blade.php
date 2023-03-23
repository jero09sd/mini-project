<x-app-layout>

    <!-- component -->
<div class="py-20 bg-white">
    <div class="container mx-auto px-6 md:px-12 xl:px-32">
        <div class="mb-16 text-center">
            <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold md:text-4xl">TeamBangan</h2>
            <p class="text-gray-600 lg:w-8/12 lg:mx-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque natus optio alias quidem sed facere iste ea, in nihil quasi!</p>
        </div>
        <div class="grid gap-12 items-center md:grid-cols-3">
            <div class="space-y-4 text-center">
                <img class="w-64 h-64 mx-auto object-cover rounded-xl " 
                    src="{{asset('images/d9569bbed4393e2ceb1af7ba64fdf86a.jpg')}}" alt="woman" loading="lazy" width="640" height="805">
                <div>
                    <h4 class="text-2xl">Jerwyn</h4>
                    <span class="block text-sm text-gray-500">Member</span>
                </div>
            </div>
            <div class="space-y-4 text-center">
                <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-48 md:h-64 lg:w-64 lg:h-80" 
                    src="{{asset('images/d9569bbed4393e2ceb1af7ba64fdf86a.jpg')}}" alt="man" loading="lazy" width="1000" height="667">
                <div>
                    <h4 class="text-2xl">Van</h4>
                    <span class="block text-sm text-gray-500">Team Leader</span>
                </div>
            </div>
            <div class="space-y-4 text-center">
                <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64" 
                    src="{{asset('images/d9569bbed4393e2ceb1af7ba64fdf86a.jpg')}}" alt="woman" loading="lazy" width="1000" height="667">
                <div>
                    <h4 class="text-2xl">Raffy</h4>
                    <span class="block text-sm text-gray-500">Chief Operations Officer</span>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>