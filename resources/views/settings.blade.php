<x-app-layout>
    <div class="p-4 bg-white">
        <a href="/" class="flex items-center">
            <div class="text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </div>
            <p class="leading-none text-lg pl-4 text-gray-600 font-bold">Salat Times</p>
        </a>
    </div>
    <div class="px-3">
        <p class="text-lg py-4">Salat Time Calculation</p>
        <div class="bg-white rounded-md p-4">
            <div class="pt-4">
                <p>Location</p>
                <div>
                    <select id="location" name="location" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 text-sm leading-6">
                        <option value="Chattagram">Chattagram</option>
                        <option value="Kishoreganj" selected>Kishoreganj</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Barisal">Barisal</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Mymensingh">Mymensingh</option>
                    </select>
                </div>
            </div>
            <div class="pt-4">
                <p>Salat Time Conventions</p>
                <div>
                    <select id="convention" name="convention" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 text-sm leading-6">
                        <option value="1">University of Islamic Sciences, Karachi</option>
                        <option value="2">Islamic Society of North America</option>
                        <option value="3">Muslim World League</option>
                        <option value="4" selected>Umm Al-Qura University, Makkah</option>
                        <option value="5">Egyptian General Authority of Survey</option>
                        <option value="8">Gulf Region</option>
                        <option value="9">Kuwait</option>
                        <option value="10">Qatar</option>
                    </select>
                </div>
            </div>
            <div class="pt-4">
                <p>Asr Calculation -Juristic Method</p>
                <div class="py-1">
                    <input type="radio" class="form-radio mr-1" value="0" id="standard" name="asr">
                    <label for="standard" class="text-sm">Shafi, Maliki, Hanbali</label>
                </div>
                <div class="py-1">
                    <input type="radio" class="form-radio mr-1" value="1" id="hanafi" name="asr" checked>
                    <label for="hanafi" class="text-sm">Hanafi</label>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>