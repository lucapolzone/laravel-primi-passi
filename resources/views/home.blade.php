<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> {{ $title }}</h1>
  <p> {{ $paragraph }}</p>
  <ul>
    @foreach ($teachers as $teacher)
      <li> {{ $teacher }} </li>
    @endforeach
  </ul>
</body>
</html>