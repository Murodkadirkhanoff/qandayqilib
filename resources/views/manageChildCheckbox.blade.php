<ul>
    @foreach($childs as $child)
        @if($child->children()->exists())
            <li>
                <label for="vehicle1">  {{ $child->name }}</label>
                @if(count($child->children))
                    @include('manageChildCheckbox',['childs' => $child->children])
                @endif
            </li>
        @else

            <li> <input type="radio"  id="{{ $child->id }}" name="category_id" value="{{ $child->id }}">
                <label for="{{ $child->id }}"> {{ $child->name }}</label>
            </li>
        @endif
    @endforeach
</ul>
