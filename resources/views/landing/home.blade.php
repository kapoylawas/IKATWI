@extends('layouts.frontend.app', ['title' => 'Homepage'])

@section('content')
    @include('layouts.frontend.partials.hero')
    <section
        class="p-8 text-lg font-semibold text-center text-white border-t border-b border-dashed bg-slate-800 md:text-2xl border-slate-700">
        <span class="text-red-500">100</span> Anggota Terapi Indonesia
    </section>
    <section class="w-full p-10 bg-slate-600">
        <div class="flex flex-col items-center gap-2 mb-10 text-center">
            <h1 class="text-2xl font-semibold text-white">GALERI</h1>
            <p class="text-sm text-gray-400 lg:mx-96">
                Kami menyediakan berbagai macam pembahasan
            </p>
            <div class="h-1 mt-2 w-60 bg-slate-800"></div>
        </div>
        <div class="container grid items-start grid-cols-1 gap-8 mx-auto my-5 md:grid-cols-2 lg:grid-cols-3">
            
                {{-- <x-landing.course-item /> --}}
            
        </div>
        <div class="flex justify-center text-center mt-14">
            <a href=""
                class="flex items-center gap-2 px-4 py-2 text-lg text-white border rounded-lg bg-slate-800 hover:bg-red-800 hover:duration-200 border-slate-500 hover:border-red-600 hover:transition-colors">
                Lihat Semua Galeri
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 icon icon-tabler icon-tabler-arrow-narrow-right"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <line x1="15" y1="16" x2="19" y2="12"></line>
                    <line x1="15" y1="8" x2="19" y2="12"></line>
                </svg>
            </a>
        </div>
    </section>
    <section class="w-full p-6 bg-gray-800 border-t border-b border-gray-700 border-dashed">
        <div class="flex flex-col items-center justify-center p-4 space-y-8 md:p-10 md:px-24 xl:px-48">
            <h1 class="text-2xl font-bold leading-none text-center text-white md:text-3xl">
                APLIKASI PENGURUS ONLINE
            </h1>
            <p class="text-sm font-medium text-center text-gray-400 md:text-base">
                merupakan aplikasi berbasis online untuk melihat database anggota IKATWI. Aplikasi pengurus online sudah terintegrasi dengan aplikasi pengurus DPP, DPW dan DPC dan aplikasi anggota online serta Aplikasi Komisi Online.
            </p>
            <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:space-x-8">

                <div class="container px-6 py-6 mx-auto">
                    <div class="grid grid-cols-2 gap-8 md:grid-cols-4 justify-items-center md:justify-items-start">
                        <div class="col-span-2 text-center sm:text-start">
                            <a href="/" class="flex items-center gap-2 px-4 py-2 text-sm text-white border rounded-lg bg-cyan-800 hover:scale-110 hover:duration-200 border-cyan-600">
                                Database KTA IKATWI
                            </a>
                            <p class="max-w-md mt-2 text-sm text-center text-gray-100 md:text-start">
                                Sekretariat Pengurus Besar Ikatan Terapis Wicara Indonesia
                            </p>
                        </div>
                        <div class="col-span-2 text-center sm:text-start">
                            <a href="/" class="flex items-center gap-2 px-4 py-2 text-sm text-white border rounded-lg bg-cyan-800 hover:scale-110 hover:duration-200 border-cyan-600">
                                Penomoran Nasional
                            </a>
                            <p class="max-w-md mt-2 text-sm text-center text-gray-100 md:text-start">
                                Sekretariat Pengurus Besar Ikatan Terapis Wicara Indonesia
                            </p>
                        </div>
                        <div class="col-span-2 text-center sm:text-start">
                            <a href="/" class="flex items-center gap-2 px-4 py-2 text-sm text-white border rounded-lg bg-cyan-800 hover:scale-110 hover:duration-200 border-cyan-600">
                                Daftar Status Cetak KTA IKATWI berdasarkan wilayah
                            </a>
                            <p class="max-w-md mt-2 text-sm text-center text-gray-100 md:text-start">
                                Sekretariat Pengurus Besar Ikatan Terapis Wicara Indonesia
                            </p>
                        </div>
                        <div class="col-span-2 text-center sm:text-start">
                            <a href="/" class="flex items-center gap-2 px-4 py-2 text-sm text-white border rounded-lg bg-cyan-800 hover:scale-110 hover:duration-200 border-cyan-600">
                                MUTASI ONLINE
                            </a>
                            <p class="max-w-md mt-2 text-sm text-center text-gray-100 md:text-start">
                                Sekretariat Pengurus Besar Ikatan Terapis Wicara Indonesia
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection