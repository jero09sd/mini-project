<h1>Add Product</h1>
<form action="add" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" ><br><br>
    <label for="description">Description</label>
    <textarea name="description"></textarea><br><br>
    <label for="price">Price</label>
    <input type="number" name="price"><br><br>
    <label for="quantity">Quantity</label>
    <input type="number" name="quantity"><br><br>
    <label for="quantity">Category</label>
    <input type="text" name="category"><br><br>
    <button type="submit">Add Product</button>
</form>
