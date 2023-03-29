<x-app-layout>

    <div class="antialiased  h-full w-screen flex flex-row bg-black w-full min-h-screen text-slate-300 relative py-4">
        <div class="grid  grid-cols-12 mx-auto gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 max-w-7xl my-10 px-2">
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
                                <p
                                    class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">
                                    Database</p>
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

            <div class="max-w-3/5 mx-auto">

                <div class="relative  shadow-md sm:rounded-lg">
                    <div class="p-4">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative mt-1">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for items">
                        </div>
                    </div>
                    <table class="w-full text-sm text-left text-black">
                        <thead
                            class="text-xs text-white rounded-lg uppercase bg-gray-50 dark:bg-gray dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Productid
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Quantity
                                </th>
                                <th scope="col" class="px-6 py-3">
                                </th>
                                <th scope="col" class="px-6 py-3">
                                </th>
                                <th scope="col" class="px-6 py-3">
                                </th>
                              
                                <th scope="col" class="px-6 py-3">
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
@foreach($products as $product)

                        <tbody>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    {{$product['id']}}
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">
                                    {{$product['name']}}
                                </th>
                                <td class="px-6 py-4">
                                    category
                                </td>
                                <td class="px-6 py-4">
                                    {{$product['price']}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$product['quantity']}}
                                </td>
                                <td class="px-6 py-4">

                                </td>
                                <td class="px-6 py-4">

                                </td>
                                <td class="px-6 py-4">

                                </td>
                                <td class="px-6 py-4">

                                </td>
                                
                                <td class="px-6 py-4 text-right flex space-x-0.5">
                                    <a href="#"
                                        class="font-medium text-blue-600 border bg-white hover:bg-black hover:opacity-75 hover:text-white rounded-lg p-2">Edit</a>
                                    <a href="#"
                                        class="font-medium text-blue-600 border bg-white hover:bg-black hover:opacity-75 hover:text-white rounded-lg p-2">delete</a>
                                </td>
                            </tr>
                            @endforeach
                            
                            {{-- add item --}}
                            <tr
                            class="bg-gray border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">

                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">
                                
                            </th>
                            <td class="px-6 py-4">
                                
                            </td>
                            <td class="px-6 py-4">
                               
                            </td>
                            <td class="px-6 py-4">
                               
                            </td>
                            <td class="px-6 py-4">

                            </td>
                           
                            <td class="px-6 py-4">

                            </td>
                            <td class="px-6 py-4">

                            </td>
                            <td class="px-6 py-4">

                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="http://127.0.0.1:8000/add"
                                    class="font-medium text-blue-600 border bg-white hover:opacity-25 rounded-lg p-2">Add Product</a>
                            </td>
                        </tr>
                        </tbody>
                
                    </table>
                </div>

            </div>
        </div>
    </div>
    </div>
</x-app-layout>
