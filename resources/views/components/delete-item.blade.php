<form method="POST" action="{{ $route }}">
    @csrf
    @method('delete')

    <a href="#" class="underline" onclick="event.preventDefault(); this.closest('form').submit();">
        {{ $text }}
    </a>
</form>
