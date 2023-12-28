<form method="post" action="/api/add" enctype="multipart/form-data">
    <h1>Add Books</h1>
    <label for="bookName">Enter Name of the book: </label>
    <input type="text" name="bookName" id="bookName"><br>
    <label for="amount">Amount: </label>
    <input type="number" name="amount" id="amount"><br>
    <label for="date">Published Date: </label>
    <input type="date" id="date" name="date"><br>
    <label for="author">Author Name: </label>
    <input type="text" name="author" id="author"><br>
    <label for="file">Upload Your File</label>
    <input type="file" name="file" id="file"><br><br>
    <input type="submit" name="submit">
</form>
