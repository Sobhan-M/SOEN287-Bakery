<?php require_once("PHP/Cart_Cookies/Cart_Cookie.php"); ?>
<?php require_once("PHP/Cart_Cookies/Cookie_Hash_Functions.php"); ?>
<!--
	Last Edited By: Sobhan
	Edit Date: 26-Nov-2020
	Edit Number: 4
	Edit Details:
		Cart
-->
<!-- PHP -->
<?php
    if(isset($_COOKIE["cart_cookie"]))
        $menu = cookieToHash($_COOKIE["cart_cookie"]);
?>  
<!-- ========================= End of Important PHP ========================= -->
<!DOCTYPE html>
<html lang = "en">
    <!-- Head -->
    <head>
        <title> Menu | Dulceria China </title>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0"/>
	    <meta name = "keywords" content = "dulceria china, restaurant, bakery, home, cantonese, baked goods, buns, menu"/>
	    <meta name = "description" content = "Welcome to Dulceria China!"/>
	    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <link type = "text/css" rel = "stylesheet" href = "Styles/template.css"/>
        <style type = "text/css" rel = "stylesheet">
            /* .menuItem:hover {background-color: var(--light_beige);} */

            #filter_menu {
                position: fixed;
                left: 1%;
                top: 33%;
                text-align: left;
                background-color: var(--light_beige);
            }

            #filter_menu h4 {
                margin-top: 10%;
                margin-bottom: 10%;
                padding-top: 0;
                padding-bottom: 0;
                text-align: center;
            }

            .button_cell  {text-align: center;}
        </style>
    </head>
    
    <!-- Body -->
    <body>

        <!-- Header/Nav Bar -->
        <header>
            <nav>
                <table>
                    <tr>
                        <th> <a href = "index.php" class = "logo"><img width="100" src="Styles/BakeryLogo.png" alt="Dulceria China logo" class = "logo"/> </a></th>
                        <th><a href = "index.php"> Home </a></th>
                        <th><a href = "menu.php" class = "current_page"> Menu </a></th>
                        <!-- <th><a href = "order.html"> Order </a></th> -->
                        <th><a href = "about_us.php"> About Us </a></th>
                        <th><a href = "contact_us.php"> Contact Us </a></th>
                        <th><a href = "account.php"> Account </a></th>
                        <th class="cart" id='cartIconTopRight'><a href="Cart.php"><span class="qty" id= 'cartIconTopRightQuantity'><?php if(isSet($menu)) cartSize($menu); else echo("0");?></span><img src="Styles/Cart.png" alt="Cart.html" width="40px" height="40px"/></a></th>  
                    </tr>
                </table>
            </nav>
        </header>
    
        <h1>Menu</h1>

        <!-- Filters -->
        <section id = "filter_menu" class = "small_brush">
            <form action = "">
                <table>
                    <tr>
                        <td>
                            <h4> Filters </h4>
                            <input type = "checkbox" name = "filter" value = "biscuit" checked class = "filter">
                            <label> Biscuits </label> <br/>
                            <input type = "checkbox" name = "filter" value = "cake" checked class = "filter">
                            <label> Cakes </label> <br/>
                            <input type = "checkbox" name = "filter" value = "bites" checked class = "filter">
                            <label> Bites </label> <br/>
                            <input type = "checkbox" name = "filter" value = "buns" checked class = "filter">
                            <label> Buns </label> <br/>
                            <input type = "checkbox" name = "filter" value = "misc" checked class = "filter">
                            <label> Miscellaneous </label> <br/>
                        </td>
                    </tr>
                    <tr>
                        <td class = "button_cell"><br/><button type = "button" id = "filter_button"> Filter </button></td>
                    </tr>
                </table>
            </form>
            <br/>
        </section>

        <!-- Menu items -->
        <div class="menu">
            <table>
                <tr id = "row1">
                    <td  class = "menuItem biscuit">
                        <div>
                            <figure>
                                <h4> Almond Cookies </h4>
                                <a href = "MenuItems/Almond_Cookies.php">
                                <img src="Styles/Almond cookies.jpg" alt="Almond cookies.jpg" 
                                    height="210px" width="270px" class = "small_brush">
                                </a>
                            </figure>
                        </div>
                    </td>

                    <td  class = "menuItem cake">
                        <div>
                            <figure>
                                <h4> Cheese Cake </h4>
                                <a href = "MenuItems/Cheese_Cake.php">
                                <img src="Styles/Cheese cake.jpg" alt="Cheese cake.jpg" 
                                    height="210px" width="270px" class = "small_brush">
                                </a>
                            </figure>
                        </div>
                    </td>

                    <td  class = "menuItem biscuit">
                        <div>
                            <figure>
                                <h4> Chicken Biscuit </h4>
                                <a href = "MenuItems/Chicken_Biscuit.php">
                                <img src="Styles/Chk bisc2.jpg" alt="Chicken Biscuit" 
                                    height="210px" width="270px" class = "small_brush">
                                </a>
                            </figure>
                        </div>
                    </td>
                </tr>

                <tr id = "row2">
                    <td  class = "menuItem misc">
                        <div>
                            <figure>
                                <h4> Egg Tart </h4>
                                <a href = "MenuItems/Egg_Tart.php">
                                <img src="Styles/Egg tart.jpg" alt="Egg tart.jpg" 
                                    height="210px" width="270px" class = "small_brush">
                                </a>
                            </figure>
                        </div>
                    </td>

                    <td  class = "menuItem bites">
                        <div>
                            <figure>
                                <h4> Guava Bites </h4>
                                <a href = "MenuItems/Guava_Bites.php">
                                <img src="Styles/Guava bites.jpg" alt="Guava Bites.jpg" 
                                    height="210px" width="270px" class = "small_brush">
                                
                            </figure>
                        </div>
                    </td>

                    <td  class = "menuItem misc">
                        <div>
                            <figure>
                                <h4> Coconut Mochi </h4>
                                <a href = "MenuItems/Coconut_Mochi.php">
                                <img src="Styles/Coconut mochi.jpg" alt="Coconut Mochi.jpg"
                                    height="210px" width="270px" class = "small_brush">
                                </a>
                            </figure>
                        </div>
                    </td>
                </tr>

                <tr id = "row3">
                    <td  class = "menuItem bites">
                        <div>
                            <figure>
                                <h4> Pineapple Bites </h4>
                                <a href = "MenuItems/Pineapple_Bites.php">
                                <img src="Styles/Pineapple bites.jpg" alt="Pineapple Bites.jpg" 
                                    height="210px" width="270px" class = "small_brush">
                                </a>
                            </figure>
                        </div>
                    </td>

                    <td  class = "menuItem cake">
                        <div>
                            <figure>
                                <h4> Pineapple Cake </h4>
                                <a href = "MenuItems/Pineapple_Cake.php">
                                <img src="Styles/Pineapple cake.jpg" alt="Pineapple Cake.jpg" 
                                    height="210px" width="270px" class = "small_brush">
                                </a>
                            </figure>
                        </div>
                    </td>

                    <td  class = "menuItem misc">
                        <div>
                            <figure>
                                <h4> Tan Wong Su </h4>
                                <a href = "MenuItems/Tan_Wong_Su.php">
                                <img src="Styles/Tan Wong.jpg" alt="Tan Wong.jpg" 
                                    height="210px" width="270px" class = "small_brush">
                                </a>
                            </figure>
                        </div>
                    </td>

                </tr>

                <tr id = "row4">
                    <td  class = "menuItem misc">
                        <div>
                            <figure>
                                <h4> Tau Sa Pen </h4>
                                <a href = "MenuItems/Tau_Sa_Pen.php">
                                <img src="Styles/Tau sa.jpg" alt="Almond cookies.jpg" 
                                    height="210px" width="270px" class = "small_brush">
                                </a>
                            </figure>
                        </div>
                    </td>

                </tr>

                <!-- Steamed Bun Section -->
                <!-- <tr>
                    <td colspan = "3">
                        <h1> Steamed Buns</h1>
                    </td>   
                </tr> -->

                <tr id = "row5">
                    <td  class = "menuItem buns">
                        <div>
                            <figure>
                                <h4> Pork Buns </h4>
                                <a href = "MenuItems/Pork_Bun.php">
                                <img src="Styles/Pork bun2.jpg" alt="Pork Bun.jpg" 
                                    height="210px" width="270px" class = "small_brush">
                                </a>
                            </figure>
                        </div>
                    </td>

                    <td  class = "menuItem buns">
                        <div>
                            <figure>
                                <h4> Red Bean Paste Bun </h4>
                                <a href = "MenuItems/Red_Bean_Paste_Bun.php">
                                <img src="Styles/RBP22.jpg" alt="RBP.2.jpg" 
                                    height="210px" width="270px" class = "small_brush">
                                </a>
                            </figure>
                        </div>
                    </td>

                    <td  class = "menuItem buns">
                        <div>
                            <figure>
                                <h4> Coconut Bun </h4>
                                <a href = "MenuItems/Coconut_Bun.php">
                                <img src="Styles/Coconut bun22.jpg" alt="Coconut.jpg" 
                                    height="210px" width="270px" class = "small_brush">
                                </a>
                            </figure>
                        </div>
                    </td>
                </tr>

                <tr id = "row6">
                    <td  class = "menuItem buns">
                        <div>
                            <figure>
                                <h4> Custard Bun </h4>
                                <a href = "MenuItems/Custard_Bun.php">
                                <img src="Styles/Custard bun.jpg" alt="Custard bun.jpg" 
                                    height="210px" width="270px" class = "small_brush">
                                </a>
                            </figure>
                        </div>
                    </td>

                </tr>
            </table>    
        </div> <br/>

        <!-- Footer -->
        <footer>
            <table>
                <tr id = "email">
                    <td><img src = "Styles/email.png" alt = "Email" width = "25px" height = "25px"/></td>
                    <td><a href = "mailto:dulceriachina.ec@gmail.com">dulceriachina.ec@gmail.com</a></td>
                </tr>
                <tr id = "telephone">
                    <td><img src = "Styles/phone.png" alt = "Phone" width = "25px" height = "25px"/></td>
                    <td>(04) 251-0363 - (593) 997-045-024</td>
                </tr>
                <tr id = "facebook">
                    <td><img src = "Styles/facebook.png" alt = "Facebook" width = "25px" height = "25px"/></td>
                    <td><a href = "https://www.facebook.com/dulceriachina/" target = "_blank"> facebook.com/dulceriachina</a></td>
                </tr>
                <tr id = "instagram">
                    <td><img src = "Styles/instagram.png" alt = "Instagram" width = "25px" height = "25px"/></td>
                    <td><a href="https://www.instagram.com/dulceriachina/">@dulceriachina</a> </td>
                </tr>
            </table>
            <p> ©2020 Dulceria China </p>
        </footer>

        <!-- script for the cart icon-->
        <!-- <script src="JavaScript/Menu.js"></script> -->
        <!-- Filter Script -->
        <script src = "JavaScript/Filter.js" type = "text/JavaScript"></script>

    </body>
</html>