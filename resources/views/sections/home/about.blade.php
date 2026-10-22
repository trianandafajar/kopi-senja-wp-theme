<section id="tentang" class="scroll-mt-24 bg-espresso-900 py-20 text-cream-100 md:py-28" aria-labelledby="tentang-title">
  <div class="shell grid gap-16 lg:grid-cols-2 lg:items-center">
    {{-- Decorative composition in place of photography --}}
    <div class="relative mx-auto w-full max-w-md lg:mx-0" aria-hidden="true">
      <div class="aspect-[4/5] rounded-card bg-linear-to-br from-espresso-700 via-espresso-800 to-espresso-950 p-8 shadow-warm">
        <div class="flex h-full flex-col justify-between rounded-2xl border border-cream-100/15 p-6">
          <span class="font-display text-7xl leading-none font-semibold text-terracotta-400 italic">“</span>
          <p class="font-display text-2xl leading-snug text-cream-50 italic">
            {{ __('Kopi terbaik adalah yang diminum bersama, saat hari pelan-pelan selesai.', 'kopi-senja') }}
          </p>
          <span class="text-xs tracking-[0.2em] text-cream-200/60 uppercase">{{ __('Filosofi kedai', 'kopi-senja') }}</span>
        </div>
      </div>
      <div class="absolute -right-4 -bottom-6 hidden size-32 items-center justify-center rounded-full bg-terracotta-500 text-center font-display text-sm leading-tight font-semibold text-cream-50 shadow-warm sm:flex">
        {{ __('Sangrai sendiri', 'kopi-senja') }}
      </div>
    </div>

    <div>
      <p class="eyebrow text-terracotta-300">{{ __('Tentang Kami', 'kopi-senja') }}</p>
      <h2 id="tentang-title" class="mt-3 text-4xl text-cream-50 md:text-5xl">
        {{ __('Dari kebun Nusantara ke cangkir Anda.', 'kopi-senja') }}
      </h2>
      <div class="mt-6 space-y-4 text-cream-200/85">
        <p>{{ __('Kopi Senja berawal dari sebuah mesin sangrai kecil di garasi dan kebiasaan sederhana: mengobrol sambil ngopi menjelang magrib. Kini kebiasaan itu punya rumah, sebuah kedai hangat dengan roastery di bagian belakang.', 'kopi-senja') }}</p>
        <p>{{ __('Kami percaya kopi enak tidak harus rumit. Cukup biji yang dirawat dengan baik, sangrai yang jujur, dan seduhan yang sabar.', 'kopi-senja') }}</p>
      </div>

      <ol class="mt-10 grid gap-6 sm:grid-cols-3" role="list">
        @foreach ($process as $step)
          <li class="border-t border-cream-100/15 pt-5">
            <span class="font-display text-sm font-semibold text-terracotta-300">{{ sprintf('%02d', $loop->iteration) }}</span>
            <h3 class="mt-2 text-lg text-cream-50">{{ $step['title'] }}</h3>
            <p class="mt-2 text-sm leading-relaxed text-cream-200/70">{{ $step['text'] }}</p>
          </li>
        @endforeach
      </ol>
    </div>
  </div>
</section>
