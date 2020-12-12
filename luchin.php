<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<style>
    
.hover01 figure img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover01 figure:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}
</style>

<h2 id="demo01">1. Zoom In #1</h2>
<div class="hover01 column">
  <div>
    <figure><img src="https://picsum.photos/300/200?image=244" /></figure>
    <span>Hover</span>
  </div>
  <div>
    <figure><img src="https://picsum.photos/300/200?image=1024" /></figure>
    <span>Hover</span>
  </div>
  <div>
    <figure><img src="https://picsum.photos/300/200?image=611" /></figure>
    <span>Hover</span>
  </div>
</div>

</body>
</html>