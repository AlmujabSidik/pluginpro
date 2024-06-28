<x-layout>


    <div class="flex min-h-screen px-4 sm:px-0 bg-slate-50">
        <div class="relative top-0 bottom-0 right-0 flex-shrink-0 hidden w-1/3 overflow-hidden bg-cover lg:block">
            <img src="{{ asset('bg-plugin.png') }}" class="z-10 object-cover w-full h-full" />
        </div>
        <div class="relative flex flex-wrap items-center justify-center w-full h-full min-h-screen ">
            <div class="relative w-full max-w-md mx-auto lg:mb-0">
                <div class="relative">
                    <img src="{{ asset('apple-touch-icon.png') }}" height="24" class="-mb-5" alt="">
                    <x-splade-form :action="route('order.store')" method="POST" preserve-scroll>
                        <div class="mb-4">
                            <span
                                class="text-2xl mt-10 sm:text-3xl font-semibold from-[#f8cc6b] via-red-400 to-[#a16be3] text-transparent bg-clip-text bg-gradient-to-r inline-block">
                                Hello, Elementor Designer 👋
                            </span>
                            <p class="mt-2 text-sm text-zinc-400">Masukan data diri dan pilih pesanan anda.</p>
                        </div>
                        <x-splade-input class="mb-4" name="name" label="Nama" required />
                        <x-splade-input class="mb-4" name="email" label="Email" type="email" required />
                        <x-splade-input class="mb-4" name="phone" label="Nomor Whatsapp" type="number" required />
                        <x-splade-select class="mb-4" name="product" :options="$productOptions" label="Pilih Produk"
                            required />
                        <x-splade-checkbox class="mb-4" name="discount" label="Gunakan Kupon Diskon" />

                        <div v-if="form.product" class="mt-4">
                            <div class="flex items-end justify-between">
                                Harga :
                                @foreach ($dataProduct as $data)
                                    <div v-if="form.product == {{ $data->id }}">
                                        @if ($data->id == $plugin || $data->id == $bootcamp || $data->id == $paket)
                                            <div v-if="form.discount" class="text-2xl tracking-tight text-slate-800">
                                                Rp {{ number_format($data->harga * 0.19, 0, ',', '.') }}
                                            </div>
                                            <div v-else>
                                                <p class="text-2xl tracking-tight text-slate-800">
                                                    Rp {{ number_format($data->harga, 0, ',', '.') }}
                                                </p>
                                            </div>
                                        @else
                                            <p class="text-2xl tracking-tight text-slate-800">Rp 0</p>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div v-else>
                            <div class="flex items-end justify-between">
                                Harga :
                                <p class="text-2xl tracking-tight text-slate-800">Rp 0</p>
                            </div>
                        </div>

                        <x-splade-submit
                            class="w-full py-2 mt-4 text-white text-sm font-medium tracking-tight rounded bg-[#053CFE]">
                            Beli Produk
                        </x-splade-submit>
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>

</x-layout>
