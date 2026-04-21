<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<nav class="main-nav">
  <a class="nav-tab" href="/products">Products</a>
  <a class="nav-tab active" href="/category">Category</a>
</nav>

<div class="container mt-4">

  <h1>Add a Category</h1>

  <form action="/c_products" method="POST" class="product-form">
    @csrf

    <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Category Name</label>
      <input type="text" id="name" name="c_category_name" >
    </div>

    <button type="submit" class="btn-submit">Save Category</button>

  </form>

  <hr>

  <p class="section-label">All Categories</p>

  <table class="product-table">
    <thead>
      <tr>
        <th style="width: 60px;">ID</th>
        <th>Category</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cats as $cat)
      <tr>
        <td class="td-id">{{ $cat->id }}</td>
        <td class="td-name">{{ $cat->category_name }}</td>
        <td>
          <a class="btn-edit" href="/category/{{ $cat->id }}/catedit">Edit</a>
          <form action="/category/{{ $cat->id }}" method="POST" style="display:inline;">
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