<html>
<head>

    </head>
    <body>

    <? #  Conditional Statements - if/else ?>

        <?php $score = 80; ?>

        <?php if ($score > 85): ?>
        <strong style="color: green">A</strong>

        <?php elseif ($score <= 75): ?>
        <strong>B</strong>

        <?php else: ?>
        <strong style="color: red">C</strong>
        <?php endif ?>

    </body>
</html>