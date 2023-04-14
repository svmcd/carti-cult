<x-app-layout>
    <h1>THE LATEST POSTS ON THE FORUM</h1>
    <div class="w-124 bg-white">
        @foreach ($posts as $post )
            <div class="bg-red rounded-lg p-4 m-4 flex justify-between">
                <div>
                    <div>posted by (user) at (time)</div>
                    <div>title</div>
                    <div>text</div>
                </div>
                <div>image</div>
            </div>
        @endforeach
    </div>
</x-app-layout>