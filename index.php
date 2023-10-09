<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <form action="script.php" method="post">
        <label for="paragraph">Enter your text here</label>
        <textarea name="paragraph" id="paragraph" cols="30" rows="10" placeholder="Write something...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ut perferendis impedit iste, molestiae inventore explicabo. Quae ab suscipit tempora itaque consequuntur soluta dolor repudiandae, modi natus, placeat veritatis. Architecto!</textarea>

        <label for="badword">Enter the word to censure from the text</label>
        <input type="text" name="badword" id="badword" placeholder="Write here" value="Lorem">

        <input type="submit" value="Send">

    </form>
</body>

</html>