<div class="w-10/12 mx-auto h-auto p-4 flex flex-col sm:flex-row">
    <!-- Columna izquierda -->
    <div class="w-full sm:w-1/2 flex flex-col justify-center items-center p-4 text-white">
        <h1 class="text-5xl text-right m-4  p-4 font-bold animate__animated animate__fadeInLeft">Rápidos en fondeo de
            facturas</h1>
        <p class="text-2xl mt-3 text-right p-4 animate__animated animate__fadeInLeft animate__delay-1s">FactorTek
            suministra soluciones de flujo de caja confiables, de costa a costa.</p>
    </div>

    <!-- Columna derecha -->
    <div class="w-full sm:w-1/2 p-4 text-white">


        <form action="{{ route('contact.store') }}" method="POST" class="p-5 border rounded-lg bg-white-transparent">
            @csrf
            <div class="mb-4">
                <label class="block text-blue-900 text-sm font-bold mb-2" for="names">Names</label>
                <input
                    class="shadow appearance-none border @error('name') border-red-500 @enderror rounded w-full py-2 px-3 text-blue-900 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('name') }}" name="name" id="names" type="text" placeholder="Names">
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-blue-900 text-sm font-bold mb-2" for="company-name">Company Name</label>
                <input
                    class="shadow appearance-none border @error('company_name') border-red-500 @enderror rounded w-full py-2 px-3 text-blue-900 leading-tight focus:outline-none focus:shadow-outline"
                    id="company-name" name="company_name" type="text" placeholder="Company Name">
                @error('company_name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex space-x-4 mb-4">
                <div class="w-1/2">
                    <label class="block text-blue-900 text-sm font-bold mb-2" for="phone-number">Phone Number</label>
                    <input
                        class="shadow appearance-none border @error('phone_number') border-red-500 @enderror rounded w-full py-2 px-3 text-blue-900 leading-tight focus:outline-none focus:shadow-outline"
                        name="phone_number" id="phone-number" type="text" placeholder="Phone Number">
                    @error('phone_number')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label class="block text-blue-900 text-sm font-bold mb-2" for="company-email">Company Email</label>
                    <input
                        class="shadow appearance-none border @error('company_email') border-red-500 @enderror rounded w-full py-2 px-3 text-blue-900 leading-tight focus:outline-none focus:shadow-outline"
                        name="company_email" id="company-email" type="email" placeholder="Company Email">
                    @error('company_email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <span class="text-blue-900 font-bold">Solutions Type</span>
                <div class="mt-2 flex space-x-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="solutionType" value="option1" class="form-radio rounded-full"
                            {{ old('solutionType') == 'option1' ? 'checked' : '' }}>
                        <span class="ml-2 text-blue-900">Option 1</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="solutionType" value="option2" class="form-radio rounded-full"
                            {{ old('solutionType') == 'option2' ? 'checked' : '' }}>
                        <span class="ml-2 text-blue-900">Option 2</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="solutionType" value="option3" class="form-radio rounded-full"
                            {{ old('solutionType') == 'option3' ? 'checked' : '' }}>
                        <span class="ml-2 text-blue-900">Option 3</span>
                    </label>
                </div>
                @error('solutionType')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>



            <div class="mb-4">
                <label class="block text-blue-900 text-sm font-bold mb-2" for="referred">Referred</label>
                <input
                    class="shadow appearance-none border @error('referred') border-red-500 @enderror rounded w-full py-2 px-3 text-blue-900 leading-tight focus:outline-none focus:shadow-outline"
                    name="referred" id="referred" type="text" placeholder="Referred">
                @error('referred')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-blue-900 text-sm font-bold mb-2" for="comments">Additional Comments</label>
                <textarea
                    class="shadow appearance-none border @error('additional_comments') border-red-500 @enderror rounded w-full py-2 px-3 text-blue-900 leading-tight focus:outline-none focus:shadow-outline"
                    name="additional_comments" id="comments" placeholder="Comments"></textarea>
                @error('additional_comments')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-end">
                <div class="w-full py-2 px-4 font-bold h-14 mb-4 font-medium text-sm text-green-600">
                    @if (session('message'))
                        {{ session('message') }}
                    @endif
                </div>

                <button
                    class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
