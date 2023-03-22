<x-app-layout>
    <div class="content">
        <div class="dashboard-bg">
            <!-- component -->
            <!-- Gogole Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link
                href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
                rel="stylesheet" />
            <script src="https://cdn-tailwindcss.vercel.app/"></script>

            <!-- Card List Section -->
            <section x-data="xData()" class="opacity-95 py-10 px-12">
                <!-- Card Grid -->
                <div
                    class="grid grid-flow-row gap-8 text-neutral-600 sm:grid-cols-1 md:grid-cols-1 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:grid-cols-2 xl:grid-cols-3">
                    <template x-for="post in posts">
                        <!-- Card Item -->
                        <div class="my-8 rounded shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1"
                            x-for="(post, index) in posts">
                            <!-- Clickable Area -->
                            <a _href="link" class="cursor-pointer">
                                <figure>
                                    <!-- Image -->
                                    <img :src="post.image + '?auto=format&fit=crop&w=400&q=50'"
                                        class="rounded-t h-72 w-full object-cover" />

                                    <figcaption class="p-4">
                                        <!-- Title -->
                                        <p class="text-lg mb-4 font-bold leading-relaxed text-gray-800 dark:text-gray-300"
                                            x-text="post.title">
                                            <!-- Post Title -->
                                        </p>

                                        <!-- Description -->
                                        <small class="leading-5 text-gray-500 dark:text-gray-400"
                                            x-text="post.description">
                                            <!-- Post Description -->
                                        </small>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </template>
                </div>
            </section>

            <script>
                function xData() {
            
             
                    function shuffle(array) {
                        let currentIndex = array.length,
                            randomIndex;

                        // While there remain elements to shuffle.
                        while (currentIndex != 0) {
                            // Pick a remaining element.
                            randomIndex = Math.floor(Math.random(1) * currentIndex);
                            currentIndex--;

                            // And swap it with the current element.
                            [array[currentIndex], array[randomIndex]] = [
                                array[randomIndex],
                                array[currentIndex],
                            ];
                        }

                        return array;
                    }

                    const posts = [{
                            image: "https://images.unsplash.com/photo-1495474472287-4d71bcdd2085",
                            title: "5 Easy Tips That Will Make Your Latte Art Flourish",
                            description: "Latte art is quite often the most attractive thing for a new barista, and latte art is an excellent gateway to the exciting world of coffee. Latte art easy to start with, but to master latte art patterns, you need a lot practice and determination. Here are my tips that helped me to improve my latte art a few years ago!",
                        },
                        {
                            image: "https://images.unsplash.com/photo-1512034400317-de97d7d6c3ed",
                            title: "Coffee Roasting Basics: Developing Flavour by Roasting",
                            description: "Caffé latte and flat white are definitely the most ordered espresso based drinks in cafés around the world but what are they really? Have you ever wondered the difference between caffé latte vs. flat white? Let's see what makes caffé latte and flat white different from each other!",
                        },
                        {
                            image: "https://images.unsplash.com/photo-1445077100181-a33e9ac94db0",
                            title: "Latte vs. Flat White - What is the Difference?",
                            description: "I bet roasting is the thing that every barista wants to know about! We can develop flavour by roasting coffee. How can we achieve the best tasting coffee? What actually happens when roasting?",
                        }
                    ];

                    return {

                        posts: [
                            
                            ...shuffle(posts)
                        ],
                    };
                }
            </script>
        </div>
<div class="bg-gray-900">
    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Products</h2>
  
      <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <a href="#" class="group">
          <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
            <img src="{{ asset('images/jeremy-yap-jn-HaGWe4yw-unsplash.jpg')}}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
        </a>
  
        <a href="#" class="group">
          <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
            <img src="{{ asset('images/jeremy-yap-jn-HaGWe4yw-unsplash.jpg')}}" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
        </a>
  
        <a href="#" class="group">
          <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
            <img src="{{ asset('images/jeremy-yap-jn-HaGWe4yw-unsplash.jpg')}}" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
        </a>
  
        <a href="#" class="group">
          <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
            <img src="{{ asset('images/jeremy-yap-jn-HaGWe4yw-unsplash.jpg')}}" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
        </a>
        <a href="#" class="group">
            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
              <img src="{{ asset('images/jeremy-yap-jn-HaGWe4yw-unsplash.jpg')}}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
            </div>
            <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
          </a>
    
          <a href="#" class="group">
            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
              <img src="{{ asset('images/jeremy-yap-jn-HaGWe4yw-unsplash.jpg')}}" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
            </div>
            <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
          </a>
    
          <a href="#" class="group">
            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
              <img src="{{ asset('images/jeremy-yap-jn-HaGWe4yw-unsplash.jpg')}}" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
            </div>
            <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
          </a>
    
          <a href="#" class="group">
            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
              <img src="{{ asset('images/jeremy-yap-jn-HaGWe4yw-unsplash.jpg')}}" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
            </div>
            <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
          </a>

      </div>
    </div>
  </div>
  
    </div>

</x-app-layout>
