<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

    <?php include('includes/header.php'); ?>
    <?php include('includes/slider.php'); ?>


    <div class="container">
        <h1 class="my-5 text-center">Track Donor</h1>
        <div class="row my-5 text-center">



            <?php

            require 'includes/config.php';

            $status = 1;
            $sql = "SELECT * from tblblooddonars where status=:status order by rand() ";
            $query = $dbh->prepare($sql);
            $query->bindParam(':status', $status, PDO::PARAM_STR);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            $cnt = 1;
            if ($query->rowCount() > 0) {
                foreach ($results as $result) { ?>

                    <div class="col-lg-4 col-sm-6 portfolio-item ">
                        <div class="card h-100 ">

                            <div class="card-block shadow bg-white rounded ">


                                <iframe src="https://maps.google.com/maps?q=<?php echo ($result->latitude); ?>,<?php echo ($result->longitude); ?>&output=svembed"></iframe>
                                <h4 class="card-title"><?php echo htmlentities($result->FullName); ?></h4>
                                <p class="card-text"><b> Gender :</b> <?php echo htmlentities($result->Gender); ?></p>
                                <p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup); ?></p>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>






    <?php include('includes/footer.php'); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- AI ChatBot -->
    <script type="text/javascript">
        window.__be = window.__be || {};
        window.__be.id = "643439e1da545f00070a6f9f";
        (function() {
            var be = document.createElement('script');
            be.type = 'text/javascript';
            be.async = true;
            be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') +
                'cdn.chatbot.com/widget/plugin.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(be, s);
        })();
    </script>
</body>

</html>