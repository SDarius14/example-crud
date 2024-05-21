
<!DOCTYPE html>
<html>
<head>
    <title>Show Product</title>
</head>
<body>
    <h1>Show Product</h1>
    <div>
        <strong>ID:</strong>
        {{ $product->id }}
    </div>
    <div>
        <strong>Name:</strong>
        {{ $product->name }}
    </div>
    <div>
        <strong>Description:</strong>
        {{ $product->description }}
    </div>
    <div>
        <strong>Price:</strong>
        {{ $product->price }}
    </div>
    <div>
        <strong>Updated By:</strong>
        {{ $product->updated_by }}
    </div>
    <a href="{{ route('products.index') }}">Back</a>
</body>
</html>
