<<<<<<< HEAD
<form method="POST" action="{{ $route }}">
    @csrf
    @method('delete')

    <a href="#" class="underline" onclick="event.preventDefault(); this.closest('form').submit();">
=======
   <form method="POST" action="{{ $route }}">
       @csrf
       @method('delete')

      <a href="#"
       class="underline"
       onclick="event.preventDefault(); this.closest('form').submit();">
>>>>>>> a944f2526a9fe7ea8536ecee4e22df8c1b8247ae
        {{ $text }}
    </a>
</form>
