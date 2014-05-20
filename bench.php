<?php

require_once('libraries/whichbrowser.php');
require_once('libraries/optimizedwhichbrowser.php');

if (count($argv) === 1)
{
    echo sprintf("Usage   : %s <optimized>\n", $argv[0]);
    die;
}

function userAgentsFromDeviceTypeAndUserAgents($carry, $item)
{
  $carry[] = str_replace('"', '', explode(',', $item)[1]);
  return $carry;
}

function getFreshUserAgents()
{
  $deviceTypeAndUserAgents = array_slice(explode("\n", file_get_contents('user_agents.txt')), 0, -1);

  return array_reduce($deviceTypeAndUserAgents, 'userAgentsFromDeviceTypeAndUserAgents', array());
}

function getRandomUserAgent($userAgents, $i = null)
{
  if ($i)
  {
    return $userAgents[$i % (count($userAgents) - 1)];
  }
  else
  {
    return $userAgents[array_rand($userAgents)];
  }
}

function notOptimizedBench($loop)
{
  $userAgents = getFreshUserAgents();
  $start = microtime(true);
  for ($i=0; $i< $loop; $i++)
  {
    new WhichBrowser(array('User-Agent' => getRandomUserAgent($userAgents, $i)));
  }
  echo "\n\nWhichBrowser => " . (microtime(true) - $start);
  echo "\n";
}

function optimizedBench($loop)
{
  $userAgents = getFreshUserAgents();
  $start = microtime(true);
  for ($i=0; $i< $loop; $i++)
  {
    (new OptimizedWhichBrowser(array('User-Agent' => getRandomUserAgent($userAgents, $i))))->deviceType();
  }
  echo "\n\nOptimizedWhichBrowser => " . (microtime(true) - $start);
  echo "\n";
}

$loop = 100000;
echo 'Bench with ' . $loop . " iterations\n";

if ($argv[1])
{
  optimizedBench($loop);
}
else
{
  notOptimizedBench($loop);
}

echo "\n";
