<div class="flex items-center justify-center w-screen h-screen px-4 bg-zinc-900">
    <div class="w-full max-w-2xl p-8 bg-white border rounded-md shadow border-zinc-500">
        <div>
            <span
                class="text-3xl font-semibold from-[#f8cc6b] via-red-400 to-[#a16be3] text-transparent bg-clip-text bg-gradient-to-r inline-block text-center ">Thank
                You!</span>

            <p class="text-zinc-800 tracking-tight text-base leading-[1.5em] mt-2">Halo <span
                    class="font-bold">{{ $order->name }}</span> 👋,
                <br />
                Terima kasih banyak atas pesanan Anda!
                <br />
                Silahkan lakukan pembayaran ke nomor rekening dibawah ini :
                <br />
                setelah itu silahkan klik tombol verifikasi manual atau bisa klik live chat di pojok kanan bawah. 
                <span class="font-bold text-slate-900">Jangan lupa sertakan screenshot pembayaran yang terlampir</span>

            <div class="p-4 mt-4 bg-red-100 rounded-md">
                <h3 class="text-lg font-semibold">Informasi Pembayaran</h3>
                <p>Bank : BNI</p>
                <p>Nomor Rekening: 1284240532 </p>
                <p>Pemilik Rekening: ALMUJAB ANRAHMATHUL SIDIK</p>
                <p>Jumlah Pembayaran: Rp
                    {{ number_format($order->price, 0, ',', '.') }}
                </p>
            </div>
            <br />
            <br /><br />
            </p>
            <div class="flex items-center justify-center">
                <button class="px-4 py-2 text-sm text-white bg-red-700 rounded"><a
                        href="https://wa.link/ee64f9">Verifikasi via whatsapp</a></button>
            </div>
        </div>

    </div>
</div>
