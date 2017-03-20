<?php
  date_default_timezone_set('America/Los_Angeles');
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Queen.php";

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array (
    'twig.path' => __DIR__."/../views"
  ));

  $app->get("/", function () use ($app) {
    return $app['twig']->render('index.html.twig');
  });

  $app->post("/attack", function () use ($app) {

    $queen = new Queen($_POST['queenX'], $_POST['queenY']);
    $a = $_POST['attackX'];
    $b = $_POST['attackY'];
    $result = $queen->canAttack($a, $b);
    echo $result;
    return $app['twig']->render('index.html.twig', array("result"=>$result));
  });

  return $app;
?>
