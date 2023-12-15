<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REHUSABLE</title>

<link rel="stylesheet" href="../assets/css/stylos.css">
<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body >
    <header class="header">
        
        <div class="navbar">
            <div class="logo"><a class="log" href="#">REHUSABLE</a></div>
            <ul class="links">
                <li class="li"><a href="#" class="a">Hombres</a></li>
                <li class="li"><a href="#" class="a">Mujeres</a></li>
                <li class="li"><a href="#" class="a">Niños</a></li>
             
            </ul>
            <div class="action_btn">
                <a href="#" class="action_bt">Registrate</a>
                <a class="carrito_compras" href="#"> <i class="fa-solid fa-cart-shopping" ></i></a>
            </div>
            <div class="toggle_btn"><i class="fa-solid fa-bars"></i></div>
        </div>
        <div class="dropdown_menu">
            <li class="li"><a href="#" class="a">Hombres</a></li>
            <li class="li"><a href="#" class="a">Mujeres</a></li>
            <li class="li"><a href="#" class="a">Niños</a></li>
            <li class="li"><a href="#" class="action_b">Registrate</a></li>
           
        </div>
    </header>
    <div class="carousel">
        <div class="img-container">
            <img src="../img/slide-03.jpg" alt="">
          
            <img src="../img/slide-01.jpg" alt="">
            <img src="../img/slide-02.jpg" alt="">
        </div>
        <div class="btn btn-left">
            <ion-icon class="icon" name="chevron-back-outline"></ion-icon>
        </div>
        <div class="btn btn-right">
            <ion-icon class="icon" name="chevron-forward-outline"></ion-icon>
        </div>
    </div>
    <div class="container-flex">

    </div>
    
</body>
<script>
    const toggleBtn= document.querySelector('.toggle_btn')
    const toggleBtnIcon= document.querySelector('.toggle_btn i')
    const dropDownMneru= document.querySelector('.dropdown_menu')
    
    toggleBtn.onclick= function(){
        dropDownMneru.classList.toggle('open')
        const isOpen=dropDownMneru.classList.contains('open')
    
        toggleBtnIcon.classList = isOpen
        ?'fa-solid fa-xmark'
        :'fa-solid fa-bars'
    }
</script>
<script src="../assets/js/slide.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>