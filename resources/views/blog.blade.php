<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('/minified/themes/default.min.css') }}">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <button id="edit" class="btn btn-primary" onclick="edit()" type="button">Editar</button>
        <button id="save" class="btn btn-primary" onclick="save()" type="button">Guardar</button>

        <form action="" method="post" >
            <textarea  class="summernote" name="editordata" style="height:600px; width: 1200px;">
                Edit text
            </textarea>
        </form>
    </div>


    <!-- Include the editors JS -->
    <script src="{{ asset('minified/sceditor.min.js') }}"></script>

    <!-- Include the BBCode or XHTML formats -->
    <script src="{{ asset('minified/formats/bbcode.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
</body>

<script>
// var textarea = document.getElementById('text-editor');

// sceditor.create(textarea, {
//     format : 'bbcode',
//     plugins : 'autosave',
//     style : "{{ asset('minified/themes/content/default.min.css') }}"
// });

// $(document).ready(function() {
//   $('#summernote').summernote({
//       height:300,
//       minHeigth: null,
//       focus:true
//   });
// });

var edit = function() {
  $('.summernote').summernote({
      focus: true,
      height:300,
      minHeigth: null
    });
};

var save = function() {
  var markup = $('.summernote').summernote('code',{
  });
  $('.summernote').summernote('destroy');
};

</script>
</html>
