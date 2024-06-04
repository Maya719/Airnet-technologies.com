<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
</head>

<style>
  * {
    box-sizing: border-box;
    padding: 0px;
    margin: 0px;
  }

  body {
    width: 100vw;
    padding: 3em;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-content: center;
    overflow-x: hidden;
  }

  main {
    width: 65vw;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    align-content: flex-start;

  }

  section {
    min-width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    align-content: center;
    margin: 20px 0px;
  }

  .container div {
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 350px;
    flex-direction: row;
  }

  .container:nth-child(even) {
    flex-direction: row-reverse;
  }

  .container div:first-child {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    padding: 100px;
  }

  .container div:last-child img {
    min-width: 100%;
    max-height: 100%;
    object-fit: cover;
    padding: 30px;
  }

  .container div h1 {
    font-family: "Poppins", sans-serif;
    font-weight: 700;
    font-style: normal;
    color: #333;
    font-size: 2em;
    margin: 20px 0px;
  }

  .container a {
    text-decoration: none;
    background-color: rgb(22, 106, 217);
    color: white;
    padding: 10px 30px;
    border-radius: 8px;
    font-size: 1.1em;
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-style: normal;
  }
</style>

<body>
  <main>

    <section class="container">
      <div>
        <h1>Live & 3D Wallpapers</h1>
        <a href="https://airnet-technologies.com/3d-live-wallpaper/Admin_Panel/index.php" target="_blank">Visit Page</a>
      </div>
      <div>
        <img src="./assets/1.jpg" alt="">
      </div>
    </section>

    <section class="container">
      <div>
        <h1>Animal Rintones & Wallpapers</h1>
        <a href="https://art.airnet-technologies.com/admin_panel/" target="_blank">Visit Page</a>
      </div>
      <div>
        <img src="assets/2.jpg">
      </div>
    </section>

    <section class="container">
      <div>
        <h1>Editors APIs</h1>
        <a href="https://cpanal.airnet-technologies.com/site/editors.rosyappsstudio.com/file-manager"
          target="_blank">Visit Page</a>
      </div>
      <div>
        <img src="assets/3.jpg">
      </div>
    </section>

    <section class="container">
      <div>
        <h1>Qibla Finder APIs</h1>
        <a href="https://cpanal.airnet-technologies.com/site/qiblafinder.airnet-technologies.com/file-manager"
          target="_blank">Visit Page</a>
      </div>
      <div>
        <img src="assets/4.jpg">
      </div>
    </section>
    
    <section class="container">
      <div>
        <h1>Collage Maker</h1>
        <a href="https://collagemaker.rosyappsstudio.com/"
           target="_blank">Visit Page</a>
      </div>
      <div>
        <img src="assets/1.jpg">
      </div>
    </section>

  </main>
</body>

</html>