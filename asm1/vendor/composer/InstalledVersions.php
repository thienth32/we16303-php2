<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;








class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-main',
    'version' => 'dev-main',
    'aliases' => 
    array (
    ),
    'reference' => '128d3b7d448081f0e0cb48601905470b2d99f323',
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
      ),
      'reference' => '128d3b7d448081f0e0cb48601905470b2d99f323',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
    ),
    'illuminate/bus' => 
    array (
      'pretty_version' => 'v9.0.0',
      'version' => '9.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '378872000cdcd50b754b7a9f38963bfcf9d7d7cd',
    ),
    'illuminate/collections' => 
    array (
      'pretty_version' => 'v9.0.0',
      'version' => '9.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '60607836f0ee05f2be1b401e8c24acb22ba6ca53',
    ),
    'illuminate/conditionable' => 
    array (
      'pretty_version' => 'v9.0.0',
      'version' => '9.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3c11cfae62d21069180dca495f7a7aa452313188',
    ),
    'illuminate/container' => 
    array (
      'pretty_version' => 'v9.0.0',
      'version' => '9.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b249d566e8f93b9255d84f4c06a8cc7db24c900c',
    ),
    'illuminate/contracts' => 
    array (
      'pretty_version' => 'v9.0.0',
      'version' => '9.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a6e356b03c62e96561072e569bdb3e15fe118d3f',
    ),
    'illuminate/database' => 
    array (
      'pretty_version' => 'v9.0.0',
      'version' => '9.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '71cab985340092830627a0268baf452fdc380156',
    ),
    'illuminate/events' => 
    array (
      'pretty_version' => 'v9.0.0',
      'version' => '9.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b58e0e9b5afc3770505a2694c50afb23d973a75e',
    ),
    'illuminate/macroable' => 
    array (
      'pretty_version' => 'v9.0.0',
      'version' => '9.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '25a2c6dac2b7541ecbadef952702e84ae15f5354',
    ),
    'illuminate/pipeline' => 
    array (
      'pretty_version' => 'v9.0.0',
      'version' => '9.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '723820323d87a2c22f017ce7ea124d08e4b65f29',
    ),
    'illuminate/support' => 
    array (
      'pretty_version' => 'v9.0.0',
      'version' => '9.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7fe407a1cf5e300546bbbd5284cc9a752a659366',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '2.56.0',
      'version' => '2.56.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '626ec8cbb724cd3c3400c3ed8f730545b744e3f4',
    ),
    'phroute/phroute' => 
    array (
      'pretty_version' => 'v2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbe2b986f9ee1dd33dc956fcc35d1fa22e8e196c',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1|2.0',
      ),
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0|3.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v6.0.3',
      'version' => '6.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '22e8efd019c3270c4f79376234a3f8752cd25490',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '30885182c981ab175d4d034db0f6f469898070ab',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '81b86b50cf841a64252b439e738e97f4a34e2783',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8590a5f561694770bdcd3f9b5c69dde6945028e8',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0abb51d2f102e00a4eefcf46ba7fec406d245825',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '57b712b08eddb97c762a8caa32c84e037892d2e9',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '36715ebf9fb9db73db0cb24263c79077c6fe8603',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v6.0.3',
      'version' => '6.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '522144f0c4c004c80d56fa47e40e17028e2eefc2',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v6.0.3',
      'version' => '6.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '71bb15335798f8c4da110911bcf2d2fead7a430d',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1b6ea5a7442af5a12dba3dbd6d71034b5b234e77',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.3|3.0',
      ),
    ),
    'voku/portable-ascii' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9bd89e83cecdf8c37b64909454249eaed98b2c89',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}

if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}








public static function getRawData()
{
@trigger_error('getRawData only returns the first dataset loaded, which may not be what you expect. Use getAllRawData() instead which returns all datasets for all autoloaders present in the process.', E_USER_DEPRECATED);

return self::$installed;
}







public static function getAllRawData()
{
return self::getInstalled();
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}





private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
