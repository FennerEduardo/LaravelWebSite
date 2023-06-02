<div class="bg-gray-200 w-full mx-auto mt-20 p-5">
    <!-- Primera fila -->
    <div class="w-10/12 mx-auto border-b border-blue-500 mt-20 mb-4 text-center">
        <h2 class="font-bold text-5xl mb-8">Lorem ipsum dolor sit amet.</h2>
    </div>
    <!-- Segunda fila -->
    <div>
        <p class="text-center text-1xl my-8">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
    </div>
</div>
<div class="bg-gray-200 flex flex-wrap justify-center py-8">

    @foreach (range(1, 3) as $i)
        <div class="bg-white  mx-6 my-20 rounded overflow-hidden shadow-md w-full md:w-1/4">
            <div class="overflow-hidden rounded-t w-full h-72">
                <img class="w-full h-auto rounded-t" src="{{ asset("img/card-{$i}.png") }}"
                    alt="Imagen {{ $i }}">
            </div>
            <div class="px-6 py-4">
                <div class="text-center my-8">
                    <img class="mx-auto w-1/5" src="{{ asset("img/svg-{$i}.svg") }}" alt="Icono {{ $i }}">
                </div>
                <div class="font-bold text-center text-4xl my-8">Lorem, ipsum. {{ $i }}</div>
                <p class="text-gray-700 text-center text-2xl mb-5">Lorem ipsum dolor sit amet consectetur.
                    {{ $i }}.</p>
            </div>
        </div>
    @endforeach
</div>
<div class="w-full h-14 bg-yellow-500 ">
    <p class="text-center text-white text-2xl py-3">
        <strong>Follow Us:</strong>
        <a href="#" class="mx-3"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" class="mx-3"><i class="fa-brands fa-linkedin"></i></a>
        <a href="#" class="mx-3"><i class="fa-brands fa-twitter"></i></a>
    </p>
</div>

