<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use($app) {
        return $app['twig']->render('input_form.html.twig');
    });

    $app->post('/display-count', function() use($app) {
        $word = $_POST['word'];
        $sentence = $_POST['sentence'];
        $new_repeat_counter = new RepeatCounter($word, $sentence);
        $count = $new_repeat_counter->wordCount($word, $sentence);

        return $app['twig']->render('results.html.twig', array('display_word' => $word, 'display_sentence' => $sentence, 'display_count' => $count));
    });

    return $app;
?>
