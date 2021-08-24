@forelse($posts as $item)
    <!-- Card item START -->
   @include('components.post_card_grid', ['item'=>$item])
@empty
    <h4></h4>
    <h2 class="m-0"><i class="bi bi-folder-x me-2"></i>{{trans('homePage.8')}}</h2>
@endforelse
