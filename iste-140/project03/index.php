<?php $currentPage = "Introduction"; ?>
<!DOCTYPE html>
<html lang="en">

    <?php include "inc/head.php"; ?>

<body class="container">
    
    <?php include "inc/header.php"; ?>

    <?php include "inc/nav.php"; ?>
    
    <article id="slider">    
        <div>
            <div class="slider">
                <div><img src="images/robot-dj.jpeg" alt="DJ"></div>
                <div><img src="images/robot-guitar.jpeg" alt="Guitar"></div>
                <div><img src="images/robot-piano.png" alt="Piano"></div>
            </div>
        </div>
    </article>

        <article>    
            <h2>Introduction</h2>
            <section>
                <div class="flex-container">
                    <p>In the realm of music, the entire basis of composition has always been centered around the human element. Music's creation and rendition has long been celebrated as uniquely human expressions of emotion, culture, and creativity. However, in recent years, with the emergence of artificial intelligence, there has been a strong shift in the landscape of music creation. While the topic of artificial intelligence has certainly garnered a plethora of excitement and skepticism, it's important to explore the multifaceted implications. </p>

                    <p>Like all new things in this world, it should be approached with caution but address with curiosity. Surviving as a double-edged sword in this ever-changing time of innovation, artificial intelligence could be an extremely useful asset towards the music world but should be utilized in moderation. Through an opinionated perspective, a deeper understanding artificial intelligence in the world of music composition will be explored.</p>
                </div>
            </section>
        </article>

    <?php include "inc/footer.php"; ?>

    <?php include "inc/scripts.php"; ?>

    <script src="//cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script>
    $(".slider").bxSlider({
        auto: true,
        pause: 3000,
        slideWidth: 300
    });
    </script>

</body>
</html>