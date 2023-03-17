<!doctype html>
<html lang="ja">

<head>
  <title>写真リスト</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    .image_size_m {
      width: 300px;
      height: 200px;
    }
  </style>
</head>

<body>
  <div class="container" style="margin-top:50px;">
    <h1>写真リスト追加</h1>

    <div class="form-group">
      <label>写真を追加してください</label>
      <input type="text" name="body" class="form-control" placeholder="todo list" style="max-width:1000px;">
    </div>
    <button type="submit" class="btn btn-primary">追加する</button> </form>

    <h1 style="margin-top:50px;">写真リスト</h1>
    <img src="{{ asset('images/photo1.JPG') }}" alt="" class="image_size_m">
    <img src="{{ asset('images/photo2.JPG') }}" alt="" class="image_size_m">
    <img src="{{ asset('images/photo3.jpg') }}" alt="" class="image_size_m">
    <!-- <thead>
    <tr>
      <th></th><th></th><th></th>
    </tr>
  </thead> -->
</body>

</html>