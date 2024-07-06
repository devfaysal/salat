<x-app-layout>
    <div class="image-bg pb-4 min-h-screen">
        <div class="p-4">
            <a href="/settings">
                <p class="leading-none text-lg pb-1 text-white font-bold">Salat Times</p>
                <p class="text-xs text-white font-bold">Umm Al-Qura University, Makkah</p>
            </a>
        </div>
        <div class="pt-36">
            <div class="swiper">
                <div class="swiper-button-prev">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg> --}}
                </div>
                <div class="swiper-button-next">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg> --}}
                </div>
                <div class="swiper-wrapper">
                    @foreach ($times as $item)
                        <div class="swiper-slide">
                            <div class="shadow p-4 bg-white rounded-md">
                                <p class="text-center">{{ $item->date->readable }}</p>
                                <ul role="list" class="divide-y divide-gray-100">
                                    <li class="py-4">
                                        <div class="flex items-center gap-x-3">
                                            <h3 class="flex-auto leading-6 text-gray-900">Fajr</h3>
                                            <time datetime="2023-01-23T11:00" class="flex-none text-gray-500">{{ $item->timings->Fajr }}</time>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex items-center gap-x-3">
                                            <h3 class="flex-auto leading-6 text-gray-900">Sunrise</h3>
                                            <time datetime="2023-01-23T11:00" class="flex-none text-gray-500">{{ $item->timings->Sunrise }}</time>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex items-center gap-x-3">
                                            <h3 class="flex-auto leading-6 text-gray-900">Duhur</h3>
                                            <time datetime="2023-01-23T11:00" class="flex-none text-gray-500">{{ $item->timings->Dhuhr }}</time>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex items-center gap-x-3">
                                            <h3 class="flex-auto leading-6 text-gray-900">Asr</h3>
                                            <time datetime="2023-01-23T11:00" class="flex-none text-gray-500">{{ $item->timings->Asr }}</time>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex items-center gap-x-3">
                                            <h3 class="flex-auto leading-6 text-gray-900">Magrib</h3>
                                            <time datetime="2023-01-23T11:00" class="flex-none text-gray-500">{{ $item->timings->Maghrib }}</time>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex items-center gap-x-3">
                                            <h3 class="flex-auto leading-6 text-gray-900">Isha</h3>
                                            <time datetime="2023-01-23T11:00" class="flex-none text-gray-500">{{ $item->timings->Isha }}</time>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>