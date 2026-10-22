@props([
  'type' => null,
  'message' => null,
])

@php($class = match ($type) {
  'success' => 'border-daun bg-daun/10 text-espresso-900',
  'caution' => 'border-karamel bg-karamel/15 text-espresso-900',
  'warning' => 'border-terracotta-500 bg-terracotta-500/10 text-terracotta-700',
  default => 'border-espresso-300 bg-espresso-50 text-espresso-800',
})

<div {{ $attributes->merge(['class' => "rounded-xl border-l-4 px-4 py-3 text-sm {$class}"]) }} role="status">
  {!! $message ?? $slot !!}
</div>
