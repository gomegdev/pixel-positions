@props(['tag', 'fontSize' => 'text-base']) <!-- Default font size is set to 'text-base' -->

<a href="/tags/{{ strtolower($tag->name) }}" class="bg-white/10 rounded-xl py-1 px-2 hover:bg-white/25 transition-colors duration-300 {{ $fontSize }}">
    {{ $tag->name }}
</a>
