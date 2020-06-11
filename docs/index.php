<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CSS Doble</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../doblecolors.css">
    <style>
        .card{
            width: 300px!important;
        }
    </style>
</head>
<body class="bg-tw-gray-800">
    <div class="m-3"></div>
    <hr class="text-light">
    <h1 class="text-center text-light">Colores para fondo</h1>
    <hr class="text-light">
    <div class="container bg-white py-3 rounded">
        <div class="d-flex flex-wrap justify-content-left m-1">
            <!--     DEFAULT   -->
            <div class="card card-body border-0 m-1 bg-transparent text-dark shadow">bg-transparent</div>
            <div class="card card-body border-0 m-1 bg-semi-transparent text-light shadow">bg-semi-transparent</div>
            <div class="card card-body border-0 m-1 bg-semi-transparent-white text-dark shadow">bg-semi-transparent-white</div>
           <!--     NEGRO    -->
            <div class="card card-body border-0 m-1 bg-dd-black-800 text-light shadow">bg-dd-black-800</div>
            <div class="card card-body border-0 m-1 bg-dd-black-900 text-light shadow">bg-dd-black-900</div>
            <div class="card card-body border-0 m-1 bg-black text-light shadow">bg-black</div>
            <!--     BLANCO   -->
            <div class="card card-body border-0 m-1 bg-white text-dark shadow">bg-white</div>
            <div class="card card-body border-0 m-1 bg-dd-white-100 text-dark shadow">bg-dd-white-100</div>
            <div class="card card-body border-0 m-1 bg-dd-white-200 text-dark shadow">bg-dd-white-200</div>
            <!--     danidoble   -->
            <div class="card card-body border-0 m-1 bg-dd-blue-grey-100 text-dark shadow">bg-dd-blue-grey-100</div>
            <div class="card card-body border-0 m-1 bg-dd-blue-grey-200 text-dark shadow">bg-dd-blue-grey-200</div>
            <div class="card card-body border-0 m-1 bg-dd-blue-grey-300 text-dark shadow">bg-dd-blue-grey-300</div>
            <div class="card card-body border-0 m-1 bg-dd-blue-grey-400 text-dark shadow">bg-dd-blue-grey-400</div>
            <div class="card card-body border-0 m-1 bg-dd-blue-grey-500 text-light shadow">bg-dd-blue-grey-500</div>
            <div class="card card-body border-0 m-1 bg-dd-blue-grey-600 text-light shadow">bg-dd-blue-grey-600</div>
            <div class="card card-body border-0 m-1 bg-dd-blue-grey-700 text-light shadow">bg-dd-blue-grey-700</div>
            <div class="card card-body border-0 m-1 bg-dd-blue-grey-800 text-light shadow">bg-dd-blue-grey-800</div>
            <div class="card card-body border-0 m-1 bg-dd-blue-grey-900 text-light shadow">bg-dd-blue-grey-900</div>
            
    <?php
        //danidoble
        $arr=['red','pink','purple','deep-purple','indigo','blue','light-blue','cyan','teal','green','light-green','lime','yellow','amber','orange','deep-orange','brown','grey','blue-grey'];//bg-dd-red-material
        foreach($arr as $key => $value){
            ?>
            <div class="card card-body border-0 m-1 bg-dd-<?=$value?>-material text-dark shadow">bg-dd-<?=$value?>-material</div>
            <?php
        }      
    ?>        
 <!--     Tailwindcss   -->
<?php
    //Tailwind default colors
    $arr=['gray','red','orange','yellow','green','teal','blue','indigo','purple','pink'];
    foreach($arr as $key => $value){
        $color='dark';
        for ($i=100; $i <= 900; $i+=100) { 
            if($i>=600){
                $color='light';
            }
            if($i==100){
            ?>
            <!--<?=$value?>-->
            <?php
            }
            ?>
            <div class="card card-body border-0 m-1 bg-tw-<?=$value.'-'.$i?> text-<?=$color?> shadow">bg-tw-<?=$value.'-'.$i?></div>
            <?php
        } 
    }      
?>
            <!--     bootstrap 4   -->
            <div class="card card-body border-0 m-1 bg-bs-primary text-dark shadow">bg-bs-primary</div>
            <div class="card card-body border-0 m-1 bg-bs-secondary text-dark shadow">bg-bs-secondary</div>
            <div class="card card-body border-0 m-1 bg-bs-success text-dark shadow">bg-bs-success</div>
            <div class="card card-body border-0 m-1 bg-bs-danger text-light shadow">bg-bs-danger</div>
            <div class="card card-body border-0 m-1 bg-bs-warning text-dark shadow">bg-bs-warning</div>
            <div class="card card-body border-0 m-1 bg-bs-info text-dark shadow">bg-bs-info</div>
            <div class="card card-body border-0 m-1 bg-bs-light text-dark shadow">bg-bs-light</div>
            <div class="card card-body border-0 m-1 bg-bs-dark text-light shadow">bg-bs-dark</div>


        </div>
    </div>

    
    <hr class="text-light">
    <h1 class="text-center text-light">Colores para texto</h1>
    <hr class="text-light">
    


    <div class="container bg-white py-3 rounded">
        <div class="d-flex flex-wrap justify-content-left m-1">
            <!--     DEFAULT   -->
            <div class="card card-body border-0 m-1 text-semi-transparent shadow">text-semi-transparent</div>
            <div class="card card-body border-0 m-1 text-semi-transparent-white bg-dd-blue-grey-900 shadow">text-semi-transparent-white</div>
           <!--     NEGRO    -->
            <div class="card card-body border-0 m-1 text-dd-black-800 shadow">text-dd-black-800</div>
            <div class="card card-body border-0 m-1 text-dd-black-900 shadow">text-dd-black-900</div>
            <div class="card card-body border-0 m-1 text-black shadow">text-black</div>
            <!--     BLANCO   -->
            <div class="card card-body border-0 m-1 text-white bg-dd-blue-grey-900 shadow">text-white</div>
            <div class="card card-body border-0 m-1 text-dd-white-100 bg-dd-blue-grey-900 shadow">text-dd-white-100</div>
            <div class="card card-body border-0 m-1 text-dd-white-200 bg-dd-blue-grey-900 shadow">text-dd-white-200</div>
            <!--     danidoble   -->
            <div class="card card-body border-0 m-1 text-dd-blue-grey-100 shadow">text-dd-blue-grey-100</div>
            <div class="card card-body border-0 m-1 text-dd-blue-grey-200 shadow">text-dd-blue-grey-200</div>
            <div class="card card-body border-0 m-1 text-dd-blue-grey-300 shadow">text-dd-blue-grey-300</div>
            <div class="card card-body border-0 m-1 text-dd-blue-grey-400 shadow">text-dd-blue-grey-400</div>
            <div class="card card-body border-0 m-1 text-dd-blue-grey-500 shadow">text-dd-blue-grey-500</div>
            <div class="card card-body border-0 m-1 text-dd-blue-grey-600 shadow">text-dd-blue-grey-600</div>
            <div class="card card-body border-0 m-1 text-dd-blue-grey-700 shadow">text-dd-blue-grey-700</div>
            <div class="card card-body border-0 m-1 text-dd-blue-grey-800 shadow">text-dd-blue-grey-800</div>
            <div class="card card-body border-0 m-1 text-dd-blue-grey-900 shadow">text-dd-blue-grey-900</div>
            
    <?php
        //danidoble

        $arr=['red','pink','purple','deep-purple','indigo','blue','light-blue','cyan','teal','green','light-green','lime','yellow','amber','orange','deep-orange','brown','grey','blue-grey'];//text-dd-red-material
        foreach($arr as $key => $value){
            ?>
            <div class="card card-body border-0 m-1 text-dd-<?=$value?>-material shadow">text-dd-<?=$value?>-material</div>
            <?php
        }      
    ?>        
     <!--     Tailwindcss   -->
    <?php
        //Tailwind default colors
        $arr=['gray','red','orange','yellow','green','teal','blue','indigo','purple','pink'];
        foreach($arr as $key => $value){
            $color='';
            for ($i=100; $i <= 900; $i+=100) { 
                if($i<=500){
                    $color='bg-dd-blue-grey-900';
                }else{
                    $color='';
                }
                if($i==100){
                ?>
                <!--<?=$value?>-->
                <?php
                }
                ?>
                <div class="card card-body border-0 m-1 text-tw-<?=$value.'-'.$i?> <?=$color?> shadow">text-tw-<?=$value.'-'.$i?></div>
                <?php
            } 
        }      
    ?>
            <!--     bootstrap 4   -->
            <div class="card card-body border-0 m-1 text-bs-primary shadow">text-bs-primary</div>
            <div class="card card-body border-0 m-1 text-bs-secondary shadow">text-bs-secondary</div>
            <div class="card card-body border-0 m-1 text-bs-success shadow">text-bs-success</div>
            <div class="card card-body border-0 m-1 text-bs-danger shadow">text-bs-danger</div>
            <div class="card card-body border-0 m-1 text-bs-warning bg-dd-blue-grey-900 shadow">text-bs-warning</div>
            <div class="card card-body border-0 m-1 text-bs-info shadow">text-bs-info</div>
            <div class="card card-body border-0 m-1 text-bs-light bg-dd-blue-grey-900 shadow">text-bs-light</div>
            <div class="card card-body border-0 m-1 text-bs-dark shadow">text-bs-dark</div>


        </div>
    </div>

    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>