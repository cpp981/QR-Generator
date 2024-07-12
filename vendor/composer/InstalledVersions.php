<?php

namespace Composer;

use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'No version set (parsed as 1.0.0)',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'qr/qr',
  ),
  'versions' => 
  array (
    'carbonphp/carbon-doctrine-types' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3c430083d0b41ceed84ecccf9dac613241d7305d',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '5817d0659c5b50c9b950feb9af7b9668e2c436bc',
    ),
    'illuminate/collections' => 
    array (
      'pretty_version' => 'v8.83.27',
      'version' => '8.83.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '705a4e1ef93cd492c45b9b3e7911cccc990a07f4',
    ),
    'illuminate/contracts' => 
    array (
      'pretty_version' => 'v8.83.27',
      'version' => '8.83.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e0fd287a1b22a6b346a9f7cd484d8cf0234585d',
    ),
    'illuminate/macroable' => 
    array (
      'pretty_version' => 'v8.83.27',
      'version' => '8.83.27.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aed81891a6e046fdee72edd497f822190f61c162',
    ),
    'illuminate/support' => 
    array (
      'pretty_version' => 'v8.83.27',
      'version' => '8.83.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '1c79242468d3bbd9a0f7477df34f9647dde2a09b',
    ),
    'milon/barcode' => 
    array (
      'pretty_version' => 'v11.0.0',
      'version' => '11.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1f4031adb52146bb7fbe88ef42214011376f9cbe',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '2.72.5',
      'version' => '2.72.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'afd46589c216118ecd48ff2b95d77596af1e57ed',
    ),
    'psr/clock' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
    ),
    'psr/clock-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'qr/qr' => 
    array (
      'pretty_version' => 'No version set (parsed as 1.0.0)',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.5.3',
      'version' => '2.5.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '80d075412b557d41002320b96a096ca65aa2c98d',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.30.0',
      'version' => '1.30.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fd22ab50000ef01661e2a31d850ebaa297f8e03c',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.30.0',
      'version' => '1.30.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '77fa7995ac1b21ab60769b7323d600a991a90433',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v5.4.40',
      'version' => '5.4.40.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bb51d7f183756d1ac03f50ea47dc5726518cc7e8',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.5.3',
      'version' => '2.5.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b0073a77ac0b7ea55131020e87b1e3af540f4664',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.3',
      ),
    ),
    'voku/portable-ascii' => 
    array (
      'pretty_version' => '1.6.1',
      'version' => '1.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '87337c91b9dfacee02452244ee14ab3c43bc485a',
    ),
  ),
);







public static function getInstalledPackages()
{
return array_keys(self::$installed['versions']);
}









public static function isInstalled($packageName)
{
return isset(self::$installed['versions'][$packageName]);
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

$ranges = array();
if (isset(self::$installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = self::$installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}





public static function getVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['version'])) {
return null;
}

return self::$installed['versions'][$packageName]['version'];
}





public static function getPrettyVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return self::$installed['versions'][$packageName]['pretty_version'];
}





public static function getReference($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['reference'])) {
return null;
}

return self::$installed['versions'][$packageName]['reference'];
}





public static function getRootPackage()
{
return self::$installed['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
}
}
