
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ $product->description }}</textarea>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" id="price" value="{{ $product->price }}" required>
        </div>
        <div>
            <label for="updated_by">Updated By:</label>
            <input type="text" name="updated_by" id="updated_by" value="{{ $product->updated_by }}" required>
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>
