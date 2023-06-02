<footer class="bg-blue-900 text-white w-full py-6">
    <div class="container mx-auto px-4 md:px-0 w-10/12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            @foreach (range(1, 4) as $i)
                <div class="mt-8">
                    <h5 class="font-bold text-xl mb-2 uppercase">Lorem, ipsum dolor. {{$i}}</h5>
                    <ul class="text-sm ms-5 mt-6">
                        @foreach (range(1, rand(1, 4)) as $j)
                            <li><a href="http://">Lorem, ipsum</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</footer>
