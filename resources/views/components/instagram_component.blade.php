
 @foreach ($insta as $item)
 <a href="#">
     <img src="img/content/instagram/{{ $item["insta_img"]}}.png"
     srcset="img/content/instagram/{{ $item["insta_img"]}}@2x.png 2x,
             img/content/instagram/{{ $item["insta_img"]}}@3x.png 3x"
     class="book_1">
   </a>
 @endforeach
