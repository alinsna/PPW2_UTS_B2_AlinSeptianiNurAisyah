<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <!-- Include your CSS here -->
</head>
<body>
    <h1>Create New Product</h1>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Product Creation Form -->
    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label for="price">Product Price:</label>
            <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}" required>
        </div>

        <div>
            <button type="submit">Create Product</button>
        </div>
    </form>

    <!-- Include your JavaScript here -->
</body>
</html>
