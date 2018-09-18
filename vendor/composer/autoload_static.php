<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit471ef08757a219bf0761f9aef0df94e9
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'InnStudio\\Prober\\' => 17,
            'InnStudio\\Compiler\\' => 19,
        ),
        'G' => 
        array (
            'Gettext\\Languages\\' => 18,
            'Gettext\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'InnStudio\\Prober\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'InnStudio\\Compiler\\' => 
        array (
            0 => __DIR__ . '/../..' . '/compiler',
        ),
        'Gettext\\Languages\\' => 
        array (
            0 => __DIR__ . '/..' . '/gettext/languages/src',
        ),
        'Gettext\\' => 
        array (
            0 => __DIR__ . '/..' . '/gettext/gettext/src',
        ),
    );

    public static $classMap = array (
        'Gettext\\BaseTranslator' => __DIR__ . '/..' . '/gettext/gettext/src/BaseTranslator.php',
        'Gettext\\Extractors\\Blade' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/Blade.php',
        'Gettext\\Extractors\\Csv' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/Csv.php',
        'Gettext\\Extractors\\CsvDictionary' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/CsvDictionary.php',
        'Gettext\\Extractors\\Extractor' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/Extractor.php',
        'Gettext\\Extractors\\ExtractorInterface' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/ExtractorInterface.php',
        'Gettext\\Extractors\\Jed' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/Jed.php',
        'Gettext\\Extractors\\JsCode' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/JsCode.php',
        'Gettext\\Extractors\\Json' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/Json.php',
        'Gettext\\Extractors\\JsonDictionary' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/JsonDictionary.php',
        'Gettext\\Extractors\\Mo' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/Mo.php',
        'Gettext\\Extractors\\PhpArray' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/PhpArray.php',
        'Gettext\\Extractors\\PhpCode' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/PhpCode.php',
        'Gettext\\Extractors\\Po' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/Po.php',
        'Gettext\\Extractors\\Twig' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/Twig.php',
        'Gettext\\Extractors\\VueJs' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/VueJs.php',
        'Gettext\\Extractors\\Xliff' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/Xliff.php',
        'Gettext\\Extractors\\Yaml' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/Yaml.php',
        'Gettext\\Extractors\\YamlDictionary' => __DIR__ . '/..' . '/gettext/gettext/src/Extractors/YamlDictionary.php',
        'Gettext\\Generators\\Csv' => __DIR__ . '/..' . '/gettext/gettext/src/Generators/Csv.php',
        'Gettext\\Generators\\CsvDictionary' => __DIR__ . '/..' . '/gettext/gettext/src/Generators/CsvDictionary.php',
        'Gettext\\Generators\\Generator' => __DIR__ . '/..' . '/gettext/gettext/src/Generators/Generator.php',
        'Gettext\\Generators\\GeneratorInterface' => __DIR__ . '/..' . '/gettext/gettext/src/Generators/GeneratorInterface.php',
        'Gettext\\Generators\\Jed' => __DIR__ . '/..' . '/gettext/gettext/src/Generators/Jed.php',
        'Gettext\\Generators\\Json' => __DIR__ . '/..' . '/gettext/gettext/src/Generators/Json.php',
        'Gettext\\Generators\\JsonDictionary' => __DIR__ . '/..' . '/gettext/gettext/src/Generators/JsonDictionary.php',
        'Gettext\\Generators\\Mo' => __DIR__ . '/..' . '/gettext/gettext/src/Generators/Mo.php',
        'Gettext\\Generators\\PhpArray' => __DIR__ . '/..' . '/gettext/gettext/src/Generators/PhpArray.php',
        'Gettext\\Generators\\Po' => __DIR__ . '/..' . '/gettext/gettext/src/Generators/Po.php',
        'Gettext\\Generators\\Xliff' => __DIR__ . '/..' . '/gettext/gettext/src/Generators/Xliff.php',
        'Gettext\\Generators\\Yaml' => __DIR__ . '/..' . '/gettext/gettext/src/Generators/Yaml.php',
        'Gettext\\Generators\\YamlDictionary' => __DIR__ . '/..' . '/gettext/gettext/src/Generators/YamlDictionary.php',
        'Gettext\\GettextTranslator' => __DIR__ . '/..' . '/gettext/gettext/src/GettextTranslator.php',
        'Gettext\\Languages\\Category' => __DIR__ . '/..' . '/gettext/languages/src/Category.php',
        'Gettext\\Languages\\CldrData' => __DIR__ . '/..' . '/gettext/languages/src/CldrData.php',
        'Gettext\\Languages\\Exporter\\Docs' => __DIR__ . '/..' . '/gettext/languages/src/Exporter/Docs.php',
        'Gettext\\Languages\\Exporter\\Exporter' => __DIR__ . '/..' . '/gettext/languages/src/Exporter/Exporter.php',
        'Gettext\\Languages\\Exporter\\Html' => __DIR__ . '/..' . '/gettext/languages/src/Exporter/Html.php',
        'Gettext\\Languages\\Exporter\\Json' => __DIR__ . '/..' . '/gettext/languages/src/Exporter/Json.php',
        'Gettext\\Languages\\Exporter\\Php' => __DIR__ . '/..' . '/gettext/languages/src/Exporter/Php.php',
        'Gettext\\Languages\\Exporter\\Po' => __DIR__ . '/..' . '/gettext/languages/src/Exporter/Po.php',
        'Gettext\\Languages\\Exporter\\Prettyjson' => __DIR__ . '/..' . '/gettext/languages/src/Exporter/Prettyjson.php',
        'Gettext\\Languages\\Exporter\\Xml' => __DIR__ . '/..' . '/gettext/languages/src/Exporter/Xml.php',
        'Gettext\\Languages\\FormulaConverter' => __DIR__ . '/..' . '/gettext/languages/src/FormulaConverter.php',
        'Gettext\\Languages\\Language' => __DIR__ . '/..' . '/gettext/languages/src/Language.php',
        'Gettext\\Merge' => __DIR__ . '/..' . '/gettext/gettext/src/Merge.php',
        'Gettext\\Translation' => __DIR__ . '/..' . '/gettext/gettext/src/Translation.php',
        'Gettext\\Translations' => __DIR__ . '/..' . '/gettext/gettext/src/Translations.php',
        'Gettext\\Translator' => __DIR__ . '/..' . '/gettext/gettext/src/Translator.php',
        'Gettext\\TranslatorInterface' => __DIR__ . '/..' . '/gettext/gettext/src/TranslatorInterface.php',
        'Gettext\\Utils\\CsvTrait' => __DIR__ . '/..' . '/gettext/gettext/src/Utils/CsvTrait.php',
        'Gettext\\Utils\\DictionaryTrait' => __DIR__ . '/..' . '/gettext/gettext/src/Utils/DictionaryTrait.php',
        'Gettext\\Utils\\FunctionsScanner' => __DIR__ . '/..' . '/gettext/gettext/src/Utils/FunctionsScanner.php',
        'Gettext\\Utils\\HeadersExtractorTrait' => __DIR__ . '/..' . '/gettext/gettext/src/Utils/HeadersExtractorTrait.php',
        'Gettext\\Utils\\HeadersGeneratorTrait' => __DIR__ . '/..' . '/gettext/gettext/src/Utils/HeadersGeneratorTrait.php',
        'Gettext\\Utils\\JsFunctionsScanner' => __DIR__ . '/..' . '/gettext/gettext/src/Utils/JsFunctionsScanner.php',
        'Gettext\\Utils\\MultidimensionalArrayTrait' => __DIR__ . '/..' . '/gettext/gettext/src/Utils/MultidimensionalArrayTrait.php',
        'Gettext\\Utils\\ParsedComment' => __DIR__ . '/..' . '/gettext/gettext/src/Utils/ParsedComment.php',
        'Gettext\\Utils\\ParsedFunction' => __DIR__ . '/..' . '/gettext/gettext/src/Utils/ParsedFunction.php',
        'Gettext\\Utils\\PhpFunctionsScanner' => __DIR__ . '/..' . '/gettext/gettext/src/Utils/PhpFunctionsScanner.php',
        'Gettext\\Utils\\StringReader' => __DIR__ . '/..' . '/gettext/gettext/src/Utils/StringReader.php',
        'InnStudio\\Compiler\\Compiler' => __DIR__ . '/../..' . '/compiler/Compiler.php',
        'InnStudio\\Compiler\\LanguageGeneration' => __DIR__ . '/../..' . '/compiler/LanguageGeneration.php',
        'InnStudio\\Prober\\Awesome\\Awesome' => __DIR__ . '/../..' . '/src/Awesome/Awesome.php',
        'InnStudio\\Prober\\Benchmark\\Benchmark' => __DIR__ . '/../..' . '/src/Benchmark/Benchmark.php',
        'InnStudio\\Prober\\Config\\Api' => __DIR__ . '/../..' . '/src/Config/Api.php',
        'InnStudio\\Prober\\Database\\Database' => __DIR__ . '/../..' . '/src/Database/Database.php',
        'InnStudio\\Prober\\Entry\\Entry' => __DIR__ . '/../..' . '/src/Entry/Entry.php',
        'InnStudio\\Prober\\Events\\Api' => __DIR__ . '/../..' . '/src/Events/Api.php',
        'InnStudio\\Prober\\Fetch\\Fetch' => __DIR__ . '/../..' . '/src/Fetch/Fetch.php',
        'InnStudio\\Prober\\Footer\\Footer' => __DIR__ . '/../..' . '/src/Footer/Footer.php',
        'InnStudio\\Prober\\Helper\\Api' => __DIR__ . '/../..' . '/src/Helper/Api.php',
        'InnStudio\\Prober\\I18n\\I18nApi' => __DIR__ . '/../..' . '/src/I18n/I18nApi.php',
        'InnStudio\\Prober\\MyInfo\\MyInfo' => __DIR__ . '/../..' . '/src/MyInfo/MyInfo.php',
        'InnStudio\\Prober\\Nav\\Nav' => __DIR__ . '/../..' . '/src/Nav/Nav.php',
        'InnStudio\\Prober\\NetworkStats\\NetworkStats' => __DIR__ . '/../..' . '/src/NetworkStats/NetworkStats.php',
        'InnStudio\\Prober\\PhpExtensionInfo\\PhpExtensionInfo' => __DIR__ . '/../..' . '/src/PhpExtensionInfo/PhpExtensionInfo.php',
        'InnStudio\\Prober\\PhpInfoDetail\\PhpInfoDetail' => __DIR__ . '/../..' . '/src/PhpInfoDetail/PhpInfoDetail.php',
        'InnStudio\\Prober\\PhpInfo\\PhpInfo' => __DIR__ . '/../..' . '/src/PhpInfo/PhpInfo.php',
        'InnStudio\\Prober\\Script\\Script' => __DIR__ . '/../..' . '/src/Script/Script.php',
        'InnStudio\\Prober\\ServerBenchmark\\ServerBenchmark' => __DIR__ . '/../..' . '/src/ServerBenchmark/ServerBenchmark.php',
        'InnStudio\\Prober\\ServerInfo\\ServerInfo' => __DIR__ . '/../..' . '/src/ServerInfo/ServerInfo.php',
        'InnStudio\\Prober\\ServerStatus\\ServerStatus' => __DIR__ . '/../..' . '/src/ServerStatus/ServerStatus.php',
        'InnStudio\\Prober\\Style\\Style' => __DIR__ . '/../..' . '/src/Style/Style.php',
        'InnStudio\\Prober\\Timezone\\Timezone' => __DIR__ . '/../..' . '/src/Timezone/Timezone.php',
        'InnStudio\\Prober\\Updater\\Updater' => __DIR__ . '/../..' . '/src/Updater/Updater.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit471ef08757a219bf0761f9aef0df94e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit471ef08757a219bf0761f9aef0df94e9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit471ef08757a219bf0761f9aef0df94e9::$classMap;

        }, null, ClassLoader::class);
    }
}
