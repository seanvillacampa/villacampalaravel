<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Category</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<nav class="main-nav">
  <a class="nav-tab" href="/products/index">Products</a>
  <a class="nav-tab active" href="/category">Category</a>
</nav>

<div class="container mt-4">

  <h1>Edit Category</h1>

  <form action="/category/{{ $cat->id }}" method="POST" class="product-form">
    @csrf
    @method('PUT')

    <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Category Name</label>
      <input type="text" id="name" name="c_category_name" value="{{ $cat->category_name }}">
    </div>

    <div style="display: flex; gap: 10px; align-items: center;">
      <button type="submit" class="btn-submit">Update Category</button>
      <a href="/category" class="btn-cancel">Cancel</a>
    </div>

  </form>

  <hr>

</div>

</body>
</html>