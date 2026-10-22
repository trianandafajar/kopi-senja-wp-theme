@if (! post_password_required())
  <section id="comments" class="comments border-t border-espresso-900/10 pt-12">
    @if ($responses())
      <h2 class="text-2xl">
        {!! $title !!}
      </h2>

      <ol class="comment-list mt-8">
        {!! $responses !!}
      </ol>

      @if ($paginated())
        <nav aria-label="{{ __('Navigasi komentar', 'kopi-senja') }}">
          <ul class="pager mt-6 flex list-none justify-between p-0 text-sm font-semibold">
            @if ($previous())
              <li class="previous">
                {!! $previous !!}
              </li>
            @endif

            @if ($next())
              <li class="next ml-auto">
                {!! $next !!}
              </li>
            @endif
          </ul>
        </nav>
      @endif
    @endif

    @if ($closed())
      <x-alert type="warning">
        {!! __('Komentar untuk tulisan ini sudah ditutup.', 'kopi-senja') !!}
      </x-alert>
    @endif

    @php(comment_form([
      'title_reply' => __('Tinggalkan komentar', 'kopi-senja'),
      'label_submit' => __('Kirim komentar', 'kopi-senja'),
      'class_submit' => 'btn-primary cursor-pointer',
    ]))
  </section>
@endif
