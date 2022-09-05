<!DOCTYPE html>
<html>
    <head>
        <h1>RAZER</h1>
    </head>
    <body>
        
        <?php
           $Myproduct = [
            [
            "id" => 1, "name"=> "Razer DeathAdder Essential - Black", "price"=> 699,
            "img"=> "https://speedcom.co.th/uploads/cache/img_1280x1280/uploads/images/product_1630993342789.jpg"
            ],
           [
            "id"=> 2, "name"=> "RAZER Gaming Mouse (Black) Viper", "price"=> 1890,
            "img"=> "https://d1dtruvuor2iuy.cloudfront.net/media/catalog/product/0/0/000262519_ms-viper-2y.jpg"
           ],
           [
            "id"=> 3, "name"=> "RAZER | DEATHADDER V2 Wired Gaming Mouse", "price"=> 2490,
            "img"=> "https://www.unlockgadgets.in.th/media/catalog/product/cache/d9281af3a6470c566d4d85a9395af291/5/6/5639745311.jpg"
           ],
           [
            "id"=> 4, "name"=> "Wireless Gaming Mouse (Black) Basilisk X HyperSpeed", "price"=> 1990,
            "img"=> "https://d1dtruvuor2iuy.cloudfront.net/media/catalog/product/0/0/000262514_ms-basilisk-x-hs-ws.jpg"
           ],
           [
            "id"=> 5, "name"=> "Kraken BT Kitty Edition ", "price"=> 3890,
            "img"=> "https://res.cloudinary.com/cenergy-innovation-limited-head-office/image/fetch/c_scale,q_70,f_auto,h_740/https://d1dtruvuor2iuy.cloudfront.net/media/catalog/product/0/0/000264123_kraken-kt-bt-qz-2y.jpg"
           ],
           [
            "id"=> 6, "name"=> "RAZER HAMMERHEAD PRO V2 HEADPHONE", "price"=> 490,
            "img"=> "https://laz-img-sg.alicdn.com/p/9269b40b769a8949194032e5df90a02f.jpg"
           ],
           [
            "id"=> 7, "name"=> "Razer Gaming Keyboard BlackWidow V3 Yellow Switch ", "price"=> 3499,
            "img"=> "https://media-cdn.bnn.in.th/115600/Razer-Gaming-Keyboard-BlackWidow-V3-Yellow-Switch-2.jpg"
           ],
           [
            "id"=> 8, "name"=> "KRAKEN-MUT-PF-GR ", "price"=> 3190,
            "img"=> "https://d1dtruvuor2iuy.cloudfront.net/media/catalog/product/0/0/000262503_kraken-mut-pf-gr.jpg"
           ],
           [
            "id"=> 9, "name"=> "MS-VIPER-V2PRO-BK ", "price"=> 5490,
            "img"=> "https://res.cloudinary.com/cenergy-innovation-limited-head-office/image/fetch/c_scale,q_70,f_auto,h_740/https://d1dtruvuor2iuy.cloudfront.net/media/catalog/product/2/7/279707.jpg"
           ],
           [
            "id"=> 10, "name"=> "Razer Hammerhead True Wireless'  ", "price"=> 3690,
            "img"=> "https://www.proplugin.com/media/catalog/product/_/_/_____________i__imgproducts_razer_2120237000403_razer-hammerhead-true-wireless-01_105_120_5_108.png"
           ],
        ];
        ?>

        <table width=700, border=2><tr align=center bgcolor=#00FF33>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>img</th>
                </tr>

        <?php foreach($Myproduct as $value){
             $r = rand(0,256);
             $g = rand(0,256);
             $b = rand(0,256);
             $Style = " style='color:rgb($r,$g,$b)' ";
            ?>
            <tr align=center bgcolor=##000000
>  
                <td <?=$Style?>><?=$value['id']?></td>
                <td <?=$Style?>><?=$value['name']?></td>
                <td <?=$Style?>><?=$value['price']?></td>
                <td <?=$Style?>><img width=200 height=100 src = <?=$value['img']?> ></td>
                </tr>
        <?php } ?>

        
    </body>
    
</html> 