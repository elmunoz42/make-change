<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->get('/', function() use ($app) {
        return $app['twig']->render('anagram_input.html.twig');
    });

    $app->post('/output', function() use ($app) {
        $my_word = new Anagram($_POST['word']);

        return $app['twig']->render('output.html.twig', array('word' => $my_word));
    });

    return $app;
 ?>
