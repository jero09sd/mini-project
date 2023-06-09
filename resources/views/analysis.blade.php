<x-app-layout>

    <div class="antialiased  h-full w-screen flex flex-row bg-black w-full min-h-screen text-slate-300 relative py-4">
        <div class="grid grid-cols-12 mx-auto gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 max-w-7xl my-10 px-2">
            <div id="menu" class="bg-white/10 col-span-3 rounded-lg p-4 ">
                {{-- <h1
                    class="font-bold text-lg lg:text-3xl bg-gradient-to-br from-white via-white/50 to-transparent bg-clip-text text-transparent">
                    Dashboard<span class="text-indigo-400">.</span></h1> --}}
                <p class="text-slate-400 text-sm mb-2">Welcome back,</p>
                <a href="#"
                    class="flex flex-col space-y-2 md:space-y-0 md:flex-row mb-5 items-center md:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2">
                    <div>
                        <img class="rounded-full w-10 h-10 relative object-cover"
                            src="https://img.freepik.com/free-photo/no-problem-concept-bearded-man-makes-okay-gesture-has-everything-control-all-fine-gesture-wears-spectacles-jumper-poses-against-pink-wall-says-i-got-this-guarantees-something_273609-42817.jpg?w=1800&t=st=1669749937~exp=1669750537~hmac=4c5ab249387d44d91df18065e1e33956daab805bee4638c7fdbf83c73d62f125"
                            alt="">
                    </div>
                    <div>
                        <p class="font-medium group-hover:text-indigo-400 leading-4">{{ Auth::user()->name }}</p>
                        <span class="text-xs text-slate-400">Admin</span>
                    </div>
                </a>
                <hr class="my-2 border-slate-700">
                <div id="menu" class="flex flex-col space-y-2 my-5">
                    <a href="{{ url('/analysis') }}"
                        class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                        <div class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 group-hover:text-indigo-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">
                                    Dashboard</p>
                                <p class="text-slate-400 text-sm hidden md:block">Overview</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ url('/products') }}"
                        class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                        <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                </svg>

                            </div>
                            <div>
                                <p
                                    class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">
                                    Products</p>
                                <p class="text-slate-400 text-sm hidden md:block">Manage products</p>
                            </div>

                        </div>
                    </a>
                </div>
            </div>
            <div id="content" class="bg-white/10 col-span-9  rounded-lg p-6">
                <div id="24h">
                    <h1 class="font-bold py-4 uppercase">Last 24h Statistics</h1>
                    <div id="stats" class="grid gird-cols-1 mb-8 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-black/60  to-white/5 p-6 rounded-lg">
                            <div class="flex flex-row space-x-4 items-center">
                                <div id="stats-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-indigo-300 text-sm font-medium uppercase leading-4">Sales</p>
                                    <p class="text-white font-bold text-2xl inline-flex items-center space-x-2">
                                        <span>+28</span>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                            </svg>

                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-black/60 p-6 rounded-lg">
                            <div class="flex flex-row space-x-4 items-center">
                                <div id="stats-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </div>
                                <div>
                                    <p class="text-teal-300 text-sm font-medium uppercase leading-4">Income</p>
                                    <p class="text-white font-bold text-2xl inline-flex items-center space-x-2">
                                        <span>$2,873.88</span>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                            </svg>

                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-black/60 p-6 rounded-lg">
                            <div class="flex flex-row space-x-4 items-center">
                                <div id="stats-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>

                                </div>
                                <div>
                                    <p class="text-blue-300 text-sm font-medium uppercase leading-4">Net</p>
                                    <p class="text-white font-bold text-2xl inline-flex items-center space-x-2">
                                        <span>+79</span>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                            </svg>

                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ProductID">
                    <div>
                        <table class="w-full whitespace-nowrap">
                            <thead class="bg-black/60">
                                <th class="text-left py-3 px-2 rounded-l-lg">ProductID</th>
                                <th class="text-left py-3 px-2">Product name</th>
                                <th class="text-left py-3 px-2">Order count</th>
                                <th></th>
                                <th class="text-left py-3 px-2 rounded-r-lg">Actions</th>
                            </thead>
                            <tr class="border-b border-gray-700">
                                <td class="py-3 px-2 font-bold">

                                </td>
                                <td class="py-3 px-2">Nescafe stick</td>
                                <td class="py-3 px-2">500pcs</td>
                                <td class="py-3 px-2"></td>
                                <td class="py-3 px-2">
                                    <div class="inline-flex items-center space-x-3">
                                        <a href="" title="Edit" class="hover:text-white"><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-700">
                                <td class="py-3 px-2 font-bold">

                                </td>
                                <td class="py-3 px-2">Nescafe stick</td>
                                <td class="py-3 px-2">500pcs</td>
                                <td class="py-3 px-2"></td>
                                <td class="py-3 px-2">
                                    <div class="inline-flex items-center space-x-3">
                                        <a href="" title="Edit" class="hover:text-white"><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-700">
                                <td class="py-3 px-2 font-bold">

                                </td>
                                <td class="py-3 px-2">Nescafe stick</td>
                                <td class="py-3 px-2">500pcs</td>
                                <td class="py-3 px-2"></td>
                                <td class="py-3 px-2">
                                    <div class="inline-flex items-center space-x-3">
                                        <a href="" title="Edit" class="hover:text-white"><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-700">
                                <td class="py-3 px-2 font-bold">

                                </td>
                                <td class="py-3 px-2">Nescafe stick</td>
                                <td class="py-3 px-2">500pcs</td>
                                <td class="py-3 px-2"></td>
                                <td class="py-3 px-2">
                                    <div class="inline-flex items-center space-x-3">
                                        <a href="" title="Edit" class="hover:text-white"><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-800">
                                <td class="py-3 px-2 font-bold">

                                </td>
                                <td class="py-3 px-2">Nescafe stick</td>
                                <td class="py-3 px-2">500pcs</td>
                                <td class="py-3 px-2"></td>
                                <td class="py-3 px-2">
                                    <div class="inline-flex items-center space-x-3">
                                        <a href="" title="Edit" class="hover:text-white"><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>

                                    </div>
                                </td>
                            </tr>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
