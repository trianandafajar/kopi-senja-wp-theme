{{--
  Testimoni contoh (placeholder). Bukan ulasan asli.
  Ganti isi FrontPage::testimonials() dengan ulasan pelanggan yang sebenarnya
  dan sudah mendapat izin sebelum situs dipublikasikan.
--}}

<section class="py-20 md:py-28" aria-labelledby="testimoni-title">
  <div class="shell">
    <div class="mx-auto max-w-2xl text-center">
      <p class="eyebrow">{{ __('Kata Mereka', 'kopi-senja') }}</p>
      <h2 id="testimoni-title" class="mt-3 text-4xl md:text-5xl">{{ __('Cerita dari meja-meja kami', 'kopi-senja') }}</h2>
      <p class="mt-4 inline-flex items-center gap-2 rounded-full bg-karamel/15 px-4 py-1.5 text-xs font-medium text-espresso-700">
        {{ __('Contoh konten: testimoni di bawah ini hanya ilustrasi tata letak, bukan ulasan asli.', 'kopi-senja') }}
      </p>
    </div>

    <ul class="mt-14 grid gap-6 md:grid-cols-3" role="list">
      @foreach ($testimonials as $testimonial)
        <li>
          <figure class="flex h-full flex-col rounded-card border border-dashed border-espresso-300/60 bg-white/60 p-7">
            <span class="font-display text-5xl leading-none text-terracotta-400" aria-hidden="true">“</span>
            <blockquote class="mt-2 flex-1 text-espresso-800">
              <p>{{ $testimonial['quote'] }}</p>
            </blockquote>
            <figcaption class="mt-6 border-t border-espresso-900/10 pt-4 text-sm">
              <span class="block font-semibold text-espresso-900">{{ $testimonial['author'] }}</span>
              <span class="text-espresso-500">{{ $testimonial['meta'] }}</span>
            </figcaption>
          </figure>
        </li>
      @endforeach
    </ul>
  </div>
</section>
