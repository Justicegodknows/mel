    <x-site-layout>
                <h1 class = "text-8xl">Picture Overview</h1>
                    @foreach($products as $product)
                        <div>
                            <a href="/picture/{{$picture->id}}">{{$picture->tile}}</a>
                        <div>
                    @endforeach
     <x-site-layout>
    <?php
