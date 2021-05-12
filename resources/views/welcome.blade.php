<x-app-layout>
    <section class="bg-cover"  style="background-image: url({{asset('img/home/people.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Domina la tecnología web con Coders Free</h1>
                <p class="text-white text-lg mt-2 mb-4">En Coders Free encontrarás cursos, manuales y artículos que te ayudarán a convertirte en un profesional del desarrollo web.</p>

                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
                        Buscar
                    </button>

                </div>
            </div>
        </div>
    </section>
    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO </h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 grid grid-cols-4 gap-6">
            <article>
                <figure>
                    <img class="rounded-xl" src="{{asset('img/home/coral-2694453_640.jpg')}}" alt="">
                </figure>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl" src="{{asset('img/home/road-6217805_640.jpg')}}" alt="">
                </figure>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl" src="{{asset('img/home/extreme-5497194_640.jpg')}}" alt="">
                </figure>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl" src="{{asset('img/home/waterfalls-4821153_640.jpg')}}" alt="">
                </figure>
            </article>
        </div>
    </section>
</x-app-layout>



