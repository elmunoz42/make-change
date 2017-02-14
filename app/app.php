<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();


    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

    $app['debug'] = true;

    $app->get('/', function() use ($app) {
        return $app['twig']->render('anagram_input.html.twig');
    });

    $app->get('/output', function() use ($app) {
        $anagram = new Anagram;
        $user_word = $_GET['word'];
        $word_to_match = $_GET['word_to_match'];
        $success = $anagram->checkWord($user_word, $word_to_match);
        return $app['twig']->render('output.html.twig', array( 'success_word' => $success, 'user_word' => $user_word, 'word_to_match' => $word_to_match ) );
    });

    return $app;
 ?>
