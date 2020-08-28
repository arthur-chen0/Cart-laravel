<div class="content">
    <div class="title m-b-md">
        Laravel
    </div>

    <div >
    @foreach ($cartList as $item)
        {{ $item->getName() }}
    @endforeach
    </div>
</div>