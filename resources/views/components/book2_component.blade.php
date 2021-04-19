@foreach ($books2 as $book)
<a href="#">
    <img src="img/content/second_books/{{ $book["books"]}}.png"
    srcset="img/content/second_books/{{ $book["books"]}}@2x.png 2x,
            img/content/second_books/{{ $book["books"]}}@3x.png 3x"
    class="book_1">
  </a>
@endforeach
