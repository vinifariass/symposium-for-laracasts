   <form method="POST" action="{{ route('logout') }}">
       @csrf
       @method('delete')

       <a href="#" onclick="event.preventDefault();"
           class='underline' this.closest('form').submit();">
           {{ $text }}
       </a>
   </form>
