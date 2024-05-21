
<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" id="price" required>
        </div>
        <div>
            <label for="updated_by">Updated By:</label>
            <input type="text" name="updated_by" id="updated_by" required>
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>
