<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- BS5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">

            <form action="script.php" method="post">

                <div class="my-3">
                    <label for="paragraph" class="form-label">Enter your text here</label>
                    <textarea class="form-control" name="paragraph" id="paragraph" cols="30" rows="10" placeholder="Write something...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ut perferendis impedit iste, molestiae inventore explicabo. Quae ab suscipit tempora itaque consequuntur soluta dolor repudiandae, modi natus, placeat veritatis. Architecto!</textarea>
                </div>

                <div class="my-3">
                    <label for="badword" class="form-label">Enter the word to censure from the text</label>
                    <input class="form-control" type="text" name="badword" id="badword" placeholder="Write here" value="Lorem">
                </div>

                <input class="btn btn-success" type="submit" value="Send">

            </form>

        </div>
    </div>

</body>

<!-- BS 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>