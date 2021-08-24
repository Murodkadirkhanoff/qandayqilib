<ul>
    @foreach($childs as $child)
        @if($child->children()->exists())
            <li>
                <i class="indicator bi bi-plus"></i>
                <label class="indicator" style="font-weight: 100;" for="vehicle1">{{ $child->name }} </label>
                @if(count($child->children))
                    @include('manageCheckbox',['childs' => $child->children])
                @endif
            </li>
        @else
            <li>
                <input type="radio" id="{{ $child->id }}" name="subcategory_id" value="{{ $child->id }}">
                <label for="{{ $child->id }}" style="font-weight: 100;"> {{ $child->name }}</label>
            </li>
        @endif
    @endforeach
</ul>
