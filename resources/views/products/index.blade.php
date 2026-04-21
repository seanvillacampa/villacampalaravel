<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<nav class="main-nav">
  <a class="nav-tab active" href="/products/index">Products</a>
  <a class="nav-tab" href="/category">Category</a>
</nav>

<div class="container mt-4">

  <h1>Add a Product</h1>

  <form action="/products_form" method="POST" class="product-form">
    @csrf

    <div class="form-row-grid">

      <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" id="name" name="n_name" >
      </div>

      <div class="form-group">
        <label for="price">Product Price (₱)</label>
        <input type="text" id="price" name="n_price" >
      </div>

    </div>

    <div class="form-group" style="max-width: 260px; margin-bottom: 20px;">
      <label for="category">Category</label>
      <select name="category_id" id="category" class="form-select-styled">
        <option value="">Select a category</option>
        @foreach ($cats as $cat)
          <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn-submit">Save Product</button>

  </form>

  <hr>

  <p class="section-label">All Products</p>

  <table class="product-table">
    <thead>
      <tr>
        <th style="width: 60px;">ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($items as $item)
      <tr>
        <td class="td-id">{{ $item->id }}</td>
        <td class="td-name">{{ $item->name }}</td>
        <td class="td-price">₱ {{ $item->price }}</td>
        <td><span class="category-badge">{{ $item->category->category_name }}</span></td>
        <td>
          <a class="btn-edit" href="/products/{{ $item->id }}/edit">Edit</a>
          <form action="/products/{{ $item->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn-delete" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

</body>
</html>