<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Palindromes.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

// End busy code -----------^

    // Render Home Page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('palindromes.html.twig'); //
    });

    // User Input form
    $app->get("/userInput", function() use ($app) {
        $new_palindrome = new Palindromes;
        $inputted_word = $_GET['word'];
        $result = $new_palindrome->compareWord($inputted_word);
        var_dump($result);

        return $app['twig']->render('palindromes.html.twig', array('result' => $result, 'input' => $inputted_word)); //
    });



    return $app;

?>
