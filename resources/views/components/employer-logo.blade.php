@props(['employer','width' => 90])

<img src="{{ asset($employer->logo) }} alt="company logo" width="{{ $width }}" class="rounded-xl">
