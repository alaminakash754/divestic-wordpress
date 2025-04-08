<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div style="background-image: url('<?php echo get_template_directory_uri(); ?>./assets/images/background.png')" class="bg-cover bg-center h-[700px] w-full relative">
        <div class="container">
        <div class="flex justify-evenly items-center pt-10">
            <h1 class="font-bold text-2xl">Divestic</h1>
            <div class="pr-16">
                <ul class="flex font-medium">
                    <li class="ml-6">Home</li>
                    <li class="ml-6">Product</li>
                    <li class="ml-6">Pricing</li>
                    <li class="ml-6">Contact</li>
                </ul>
            </div>
           
        </div>
        <svg class="w-4 h-4 absolute top-12 right-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
        <div class="w-1/2 items-center justify-center">
        <h1 class="font-bold text-3xl  text-center">EMPOWER <br> YOUR BUSINESS</h1>
        <p>We know how large objects will act, 
        but things on a small scale.</p>
        <div class="flex gap-10">
            <button>Get Queto Now</button>
            <button>Learn More</button>

        </div>
        </div>    
    
    </div>
       
    </div>
</header>