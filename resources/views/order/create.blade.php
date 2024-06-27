<x-layout>

   <div class="flex items-center justify-center min-h-screen">
       <div class="relative top-0 bottom-0 right-0 flex-shrink-0 hidden w-1/3 overflow-hidden bg-cover lg:block">

           <div class="absolute inset-0 z-20 w-full h-full opacity-70 bg-gradient-to-t from-black"></div>
           <img src="https://cdn.devdojo.com/images/may2023/pines-bg-1.png" class="z-10 object-cover w-full h-full" />
       </div>
       <div class="relative flex flex-wrap items-center w-full h-full px-8">

           <div class="relative w-full max-w-md mx-auto lg:mb-0">
               <div class="relative">

                   <div class="p-4">
            <span
                class="text-2xl mt-10 sm:text-3xl font-semibold from-[#f8cc6b] via-red-400 to-[#a16be3] text-transparent bg-clip-text bg-gradient-to-r inline-block">Hello,
                Elementor Designer 👋</span>
                       <p class="mt-2 text-sm text-zinc-400">Masukan data diri dan pilih pesanan anda.</p>
                   </div>
                   <x-splade-form  action="{{ route('order.store') }}" method="post">
                       <div class="mb-2"><x-splade-input name="name" label="Nama" class=""/></div>
                      <div class="mb-2"> <x-splade-input name="email" label="Email" /></div>
                       <div class="mb-2"><x-splade-input name="phone" label="Nomor Whatsapp" /></div>
                       @if($dataProduct->isEmpty())
                           <p>Data product kosong</p>
                       @else
                           <div class="mb-2"><x-splade-select
                                   name="product"
                                   label="Pilih Produk"
                                   :options="$productOptions"
                               /></div>
                       @endif
                      <div class="mb-2"> <x-splade-checkbox name="discount" label="Gunakan Kupon Diskon" /></div>

                       <div v-if="form.product" class="mt-4">
                           <div class="flex items-end justify-between">
                               Harga :

                               @foreach($dataProduct as $data)
                                   <div v-if="form.product == {{ $data->id }}">
                                       @if($data->id == $plugin)
                                           <div v-if="form.discount" class="text-slate-800 text-2xl tracking-tight">
                                               Rp {{ number_format($data->harga * 0.19, 0, ',', '.') }}
                                           </div>

                                           <div v-else>
                                               <p class="text-slate-800 text-2xl tracking-tight">Rp {{ number_format($data->harga, 0, ',', '.') }}</p>
                                           </div>
                                       @elseif($data->id == $bootcamp)
                                           <div v-if="form.discount" class="text-slate-800 text-2xl tracking-tight">
                                               Rp {{ number_format($data->harga * 0.19, 0, ',', '.') }}
                                           </div>

                                           <div v-else>
                                               <p class="text-slate-800 text-2xl tracking-tight">Rp {{ number_format($data->harga, 0, ',', '.') }}</p>
                                           </div>
                                       @elseif($data->id == $paket)
                                           <div v-if="form.discount" class="text-slate-800 text-2xl tracking-tight">
                                               Rp {{ number_format($data->harga * 0.19, 0, ',', '.') }}
                                           </div>

                                           <div v-else>
                                               <p class="text-slate-800 text-2xl tracking-tight">Rp {{ number_format($data->harga, 0, ',', '.') }}</p>
                                           </div>
                                       @else
                                           <p class="text-slate-800 text-2xl tracking-tight">Rp 0</p>
                                       @endif
                                   </div>
                               @endforeach
                           </div>

                       </div>
                       <div v-else>
                           <div class="flex items-end justify-between">
                               Harga :

                               <p class="text-slate-800 text-2xl tracking-tight">Rp 0</p>
                           </div>
                       </div>
                       <button type="submit" class=" mt-4 w-full bg-slate-900 text-white rounded py-2">Send</button>
                   </x-splade-form>
               </div>


           </div>
       </div>
   </div>


</x-layout>
