<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/admin/admin_variables.css">
        
        
        <link rel="stylesheet" href="css/admin/admin_navbar.css">
        <link rel="stylesheet" href="css/admin/admin_sidebar.css">
        
        
        
        
        <link rel="stylesheet" href="css/admin/left_panel.css">
        <link rel="stylesheet" href="css/admin/home.css">
        <link rel="stylesheet" href="css/admin/orders.css">
        <link rel="stylesheet" href="css/admin/admin_classes.css">
        
        <link rel="stylesheet" href="css/01_section_carousel.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
        
        
    </head>

<body>
    

    
<?php include 'php/nav.php';?>
        <section class="home_block">
            
            <div class="home_block_orders">
                <div id="latest_orders">
                    <div class="admin_block_title_type_1 "><img src="img\0_admin\orders.svg" alt=""><p>Latest Orders</p></div>
                    <div class="orders_container" id="latest_orders_container">
                        

                    </div>
                </div>
            </div>
            <div id="sales">
                <div class="admin_block_title_type_1"><img src="img\0_admin\sales.svg" alt=""><p>Sales this month</p></div>
                <div class="info_row_type_1"><p>Total:</p><p>1273.50 €</p></div>
                <div class="info_row_type_1"><p>Delivery:</p><p>1000.50 €</p></div>
                <div class="info_row_type_1"><p>Pick up:</p><p>273.50 €</p></div>
                <div class="info_row_type_1"><p>Orders Fullfilled :</p><p>12</p></div>
                <div class="info_row_type_1"><p> --Deliveries </p><p>10</p></div>
                <div class="info_row_type_1"><p> --Pick Ups </p><p>2</p></div>
            </div>
            <div id="top_products">               
                <div class="admin_block_title_type_1"><img src="img\0_admin\products.svg" alt=""><p>Top Products</p>
                </div>
                <a class="product_row_type_1"><img src="product_img\1\productcard.png" alt=""><p>Italian Sausage</p><p>17</p></a>
                <a class="product_row_type_1"><img src="product_img\9\productcard.png" alt=""><p>Leg of Lamb</p><p>12</p></a>       
                <a class="product_row_type_1"><img src="product_img\14\productcard.png" alt=""><p>Pork Burger</p><p>11</p></a>      
                <a class="product_row_type_1"><img src="product_img\2\productcard.png" alt=""><p>Spiringue</p><p>11</p></a>
                <a class="product_row_type_1"><img src="product_img\8\productcard.png" alt=""><p>Chicken Legs</p><p>9</p></a>
                <a class="product_row_type_1"><img src="img\for_testing\productcard.png" alt=""><p>Sirloin Steak</p><p>5</p></a>     
            </div>

        </section>
 </body>
</html>
<script src="javascript/admin/admin_navbar.js"></script>
<script type="module" src="javascript\admin\admin_main.js"></script>
<script type="module" src="javascript\admin\admin_home.js"></script>

