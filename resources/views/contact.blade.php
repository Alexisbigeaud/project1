@extends("mainpage")	 
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <h2>Contact form</h2>
    <form method="POST" action="{{ url('exercise4/create_contact') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="phone">Phone number:</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>

        <div class="form-group">
            <label for="adress">Adress:</label>
            <input type="text" class="form-control" id="adress" name="adress">
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-success"> Submit </button>
        </div>
       
    </form>
    <html>
  <head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
  <style>
    #map {
      height: 400px;
      width: 100%;
    }
  </style>
  </head>
  <body>
    <?php
      echo "<h2>More informations about us !</h2>"."<br>";
      echo "There is some videos about our work:" . "<br>";
      echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/oBzc2EtH6xY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'."<br>";
      echo "Another video of our work:"."<br>";
      echo '<video width="640" height="360" controls><source src="../img/php.mp4" type="video/mp4"></video>'."<br>";
    
      echo "Do you want to create a project with us ? You can find our address here:"."<br>";
      echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4297.62152245881!2d19.64336899162684!3d46.884028572959906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da16cc54e85b%3A0x64f4624322b61f99!2sKF%20Gamf%20Hostel!5e0!3m2!1sfr!2shu!4v1683204912942!5m2!1sfr!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'.'</br>';
      echo "<strong>If you want to contact us, here is our email: random.companiAi@gmail.com</strong>"."<br>";
  ?>
  </body>
</html>
@stop