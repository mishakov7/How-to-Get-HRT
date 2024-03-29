<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>How to Get HRT</title>

        <link rel="stylesheet" href="../../../stylesheets/website.css"> 
        <link rel="stylesheet" href="../../../stylesheets/main.css">
        <script src="../../../scripts/website.js"></script>
        <link rel="stylesheet" href="../../../stylesheets/states.css">
    </head>
    <body>

        <div class="wrapper" id="h_wrapper">
            <div id="headernav">
                <?php include '../../../templates/header.php'; headerfn('../../../')?>
                <?php include '../../../templates/nav.php'; nav('../../states/', '../../')?>
                <?php include '../../../templates/search.php'; search('../../../')?>
            </div>
        </div>
        <?php include '../../../templates/breadcrumbs.php'; statetier('California');?>
        <main>
            <section class="state">
                <h2>California</h2>
                <p>The Golden State</p>
            </section>
            <section class="steps">
                <a href="psychs/psychs.php" class="psych">
                    <section class="step">
                    <h3>Gender Reaffirming Psychologists</h3>
                    </section>
                </a>
                <a href="endos.php" class="endos">
                    <section class="step">
                        <h3>Gender Reaffirming Endocrinologists</h3>
                    </section>
                </a>
                <a href="insurance.php" class="insurance">
                    <section class="step">
                        <h3>How to Get Insurance in Your State</h3>
                    </section>
                </a>
                <a href="hrt.php" class="hrt">
                    <section class="step">
                        <h3>How to Get Hormone Replacement Therapy</h3>
                    </section>
                </a>
                <a href="doctors.php" class="physicians">
                    <section class="step physicians">
                        <h3>Gender Reaffirming Physicians</h3>
                    </section>
                </a>
                <a href="srs.php" class="srs">
                    <section class="step">
                        <h3>Sex Reassignment Surgery</h3>
                    </section>
                </a>
            </section>
        </main>
        <?php include '../../../templates/footer.php';?>
    </body>
</html>