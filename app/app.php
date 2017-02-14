<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();


    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

    $app['debug'] = true;

    // session_start();
    //
    // if (empty($_SESSION['word'])) {
    //     $_SESSION['word']= array();
    // };

    $app->get('/', function() use ($app) {
        return $app['twig']->render('anagram_input.html.twig');
    });

    $app->get('/output', function() use ($app) {

        $my_word = new Anagram($_GET['word'], $_GET['word_to_match']);
        $my_word->checkWord($_GET['word'], $_GET['word_to_match']);
        // $my_word->save();
        return $app['twig']->render('output.html.twig', array( 'word' => $my_word ) );
    });

    return $app;
 ?>
