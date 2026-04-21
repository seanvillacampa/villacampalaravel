<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<nav class="main-nav">
  <a class="nav-tab" href="/products/index">Products</a>
  <a class="nav-tab" href="/category">Category</a>
</nav>

<div class="container mt-4">

  <h1>Edit Product</h1>

  <form action="/products/{{ $item->id }}" method="POST" class="product-form">
    @csrf
    @method('PUT')

    <div class="form-row-grid">

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="n_name" value="{{ $item->name }}">
      </div>

      <div class="form-group">
        <label for="price">Price (₱)</label>
        <input type="text" id="price" name="n_price" value="{{ $item->price }}">
      </div>

    </div>

    <div class="form-group" style="max-width: 260px; margin-bottom: 20px;">
      <label for="category">Category</label>
      <select name="category_id" id="category" class="form-select-styled">
        <option value="">Select a category</option>
        @foreach ($cat as $c)
          <option value="{{ $c->id }}" {{ $item->category_id == $c->id ? 'selected' : '' }}>
            {{ $c->category_name }}
          </option>
        @endforeach
      </select>
    </div>

    <div style="display: flex; gap: 10px; align-items: center;">
      <button type="submit" class="btn-submit">Update Product</button>
      <a href="/products" class="btn-cancel">Cancel</a>
    </div>

  </form>

  <hr>

</div>

</body>
</html>