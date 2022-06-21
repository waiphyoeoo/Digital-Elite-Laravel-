
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Digital Elite</title>
     <!-- favicon -->
     <link rel="apple-touch-icon" sizes="180x180" href="/contents/favicon/apple-toych-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="/contents/favicon/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="/contents/favicon/favicon-16x16.png">
     <link rel="manifest" href="/contents/favicon/site.webmanifest">
     <link rel="mask-icon" href="/contents/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
     <meta name="theme-color" content="#ffffff">
     <!-- google font link -->
     <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&family=Poppins:ital,wght@0,100;1,100&family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&family=Open+Sans:wght@300;400;600;700&family=Poppins:ital,wght@0,100;1,100&family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
     <!-- bootstrap link -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
     <!-- fontawesome link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <!-- owl carousel css link -->
     <!-- custom css link -->
     <link rel="stylesheet" href="/css/style.css">
     <!-- responsive css link -->
     <link rel="stylesheet" href="/css/query.css">
 </head>
 <body>

    {{ $slot }}

       {{-- bootstrap js link --}}
       <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
   {{-- ckeditor --}}
   <script src="/ckeditor/ckeditor.js"></script>
   <script>
      ClassicEditor
          .create(document.querySelector('.editor'), {
              licenseKey: '',
          })
          .then(editor => {
              window.editor = editor;
          })
          .catch(error => {
              console.error('Oops, something went wrong!');
              console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
              console.warn('Build id: 4tbxn2t1nghv-vlrhwhgs815z');
              console.error(error);
          });
  </script>
  <!-- custom js link -->
  <script src="/js/script.js"></script>
</body>
</html>