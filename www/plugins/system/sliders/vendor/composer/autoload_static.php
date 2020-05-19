<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf316b959e40db9aa43c1aaabf8d03e18
{
	public static $prefixLengthsPsr4 = [
		'R' =>
			[
				'RegularLabs\\Plugin\\System\\Sliders\\' => 34,
			],
	];

	public static $prefixDirsPsr4 = [
		'RegularLabs\\Plugin\\System\\Sliders\\' =>
			[
				0 => __DIR__ . '/../..' . '/src',
			],
	];

	public static function getInitializer(ClassLoader $loader)
	{
		return \Closure::bind(function () use ($loader) {
			$loader->prefixLengthsPsr4 = ComposerStaticInitf316b959e40db9aa43c1aaabf8d03e18::$prefixLengthsPsr4;
			$loader->prefixDirsPsr4    = ComposerStaticInitf316b959e40db9aa43c1aaabf8d03e18::$prefixDirsPsr4;
		}, null, ClassLoader::class);
	}
}
