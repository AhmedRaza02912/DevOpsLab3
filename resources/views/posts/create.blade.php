<h1>Create Post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" required><br><br>
    <textarea name="body" placeholder="Body" required></textarea><br><br>
    <button type="submit">Submit</button>
</form>
