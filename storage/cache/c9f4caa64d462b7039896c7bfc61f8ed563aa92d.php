<!DOCTYPE html>
<html lang="en">

<head>
    <title>Documentation - DinoPHP Framework</title>
    <style>

    .menu-link {
        font-weight: bold;
    }
    ul {
        list-style: none;
    }
    .menu-docs {
        line-height: 2em;
    }
    
    </style>
    <?php echo $__env->make('links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <?php echo $__env->make('docs-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-lg">
                <h2 style="font-weight: 300;">Getting Started !</h2>
                <div id="why-dinophp" style="margin-top: 5%;">
                    <a href="#why-dinophp"><h3 style="font-weight: bold"><span class="hashtag">#</span> Why DinoPHP ?</h3></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        There are a variety of tools and frameworks available to you when building a web application. However, we believe Dinophp is the best choice for building modern, full-stack web applications.
                    </p>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        We like to call DinoPHP a "progressive" framework. By that, we mean that Dinophp grows with you. If you're just taking your first steps into web development, Dinophp's vast library of documentation and guides will help you learn the ropes without becoming overwhelmed.
                    </p>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        DinoPHP is incredibly scalable. Thanks to the scaling-friendly nature of PHP and Dinophp's built-in support for fast, distributed cache systems like Redis, horizontal scaling with Dinophp is a breeze. In fact, Dinophp applications have been easily scaled to handle hundreds of millions of requests per month.
                    </p>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        DinoPHP combines the best packages in the PHP ecosystem to offer the most robust and developer friendly framework available. In addition, thousands of talented developers from around the world have contributed to the framework. Who knows, maybe you'll even become a DinoPHP contributor.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php echo $__env->make('scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html><?php /**PATH C:\xampp\htdocs\DinoPHP-web\views/docs.blade.php ENDPATH**/ ?>