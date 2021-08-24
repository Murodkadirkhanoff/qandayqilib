<x-main>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <x-jet-validation-errors class="mb-4" />
        <h2 class="text-center my-5">Публикации для проверки</h2>

        @if ($posts->count())
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Заголовок</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Фтот</th>
                        <th scope="col">Редактировать</th>
                    </tr>
                </thead>
        @endif
        <tbody>
            @forelse ($posts as $item)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>
                        @if ($item->image != null)
                            <img class="rounded-3 post-image-mini" src="{{ url('uploads/' . $item->image) }}"
                                alt="Card image">
                        @else
                            <img class="rounded-3  post-image-default-mini" src="{{ asset('/uploads/no_image.jpg') }}"
                                alt="Card image">
                        @endif
                    </td>
                    <td>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}"
                            class="btn btn-primary btn-xs">Предварительный просмотр</button>
                        <form action="{{ route('verify') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="post_id">
                            <input type="hidden" value="2" name="status">
                            <button type="submit" class="btn btn-success btn-xs">Подтвердить</button>
                        </form>
                        <form action="{{ route('verify') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="post_id">
                            <input type="hidden" value="4" name="status">
                            <button type="submit" class="btn btn-danger btn-xs">Отменить</button>
                        </form>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $item->title }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {!! $item->body !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h2>Нет данных</h2>
            @endforelse
        </tbody>
        </table>
    </div>

</x-main>
