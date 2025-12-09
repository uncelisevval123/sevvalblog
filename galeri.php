<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Galeri</title>
<style>
    body {
        background: #f2f2f2;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .gallery {
        text-align: center;
    }

    .gallery img {
        max-width: 90%;       
        max-height: 80vh;      
        border-radius: 15px;
        box-shadow: 0px 4px 15px rgba(0,0,0,0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        object-fit: contain; 
    }

  
</style>

</head>

<body>
     
<div class="gallery">
    <img src="myn.jpg.jpg" alt="Fotoğraf">
</div>



</body>
</html>