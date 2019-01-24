<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stil.css"/>
    <title>Document</title>
</head>
<body>

<main>
    <section id="unos">
        <header><h1>Input</h1></header>
        <form action="function.php" method="post">
            <label for="broj_redaka">Broj redaka</label>
            <input type="number" id="broj_redaka" value="4"/>
            <label for="broj_stupaca">Broj stupaca</label>
            <input type="number" id="broj_stupaca" value="5"/>
            <input type="submit" id="kreiraj" value="Kreiraj tablicu"/>
        </form>
    </section>
    <section id="prikaz">
        <header><h1>Output</h1></header>
        <div id="tablica"></div>
    </section>
</main>
<div id="tablica">
<?php
function spiralFill($m, $n, &$a)
{
    // Initialize value to be filled
    // in matrix
    $val = 1;

    /* k - starting row index
       m - ending row index
       l - starting column index
       n - ending column index */
    $k = 0;
    $l = 0;
    while ($k < $m && $l < $n)
    {
        /* Print the first row from
        the remaining rows */
        for ($i = $l; $i < $n; ++$i)
            $a[$k][$i] = $val++;

        $k++;

        /* Print the last column from
        the remaining columns */
        for ($i = $k; $i < $m; ++$i)
            $a[$i][$n - 1] = $val++;
        $n--;

        /* Print the last row from
        the remaining rows */
        if ($k < $m)
        {
            for ($i = $n - 1; $i >= $l; --$i)
                $a[$m - 1][$i] = $val++;
            $m--;
        }

        /* Print the first column from
           the remaining columns */
        if ($l < $n)
        {
            for ($i = $m - 1; $i >= $k; --$i)
                $a[$i][$l] = $val++;
            $l++;
        }

    }

}

// Driver Code
$m = 4;
$n = 5;
spiralFill($m, $n, $a);
for ($i = 0; $i < $m; $i++)
{
    for ($j = 0; $j < $n; $j++)
    {
        echo ($a[$i][$j]);
        echo (" ");
    }
    echo "<br />\n";

}
?>
</div>
</body>
</html>