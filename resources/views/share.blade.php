<x-app-layout>
    <h1>share</h1>
<form style="flesx-col bg-red" method="POST" action="{{ route('posts.store') }}">
        @csrf
        
        <div>
            <label for="title">title</label>
            <input type="text" name="title" id="name">
        </div>

        <div>
            <label for="title">text</label>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="title">upload image</label>
            <input type="file" name="file" id="file">
        </div>
        <button type="submit" >done</button>
    </form>
</x-app-layout>