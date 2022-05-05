# edenai

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1
- Package version: 1.1.4
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://www.edenai.co](https://www.edenai.co)

## Requirements

PHP 5.5 and later

## Installation & Usage

### Manual Installation

Clone this repository then install the package :

```bash
cd edenai-php/edenai
composer install
```

Include `autoload.php` in your code to use the library:

```php
    require_once('/path/to/edenai/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/your_path_to_vendor/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = edenai\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
$config = edenai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new edenai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text = "text_example"; // string | Text to analyze
$providers = "providers_example"; // string | Provider to compare (ex: [ 'amazon', 'microsoft', 'ibm','google'])

try {
    $result = $apiInstance->languageDetection($text, $providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->languageDetection: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.edenai.run/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EdenAIToolsApi* | [**search**](docs/Api/EdenAIToolsApi.md#search) | **POST** /tools/search | 
*OCRApi* | [**ocr**](docs/Api/OCRApi.md#ocr) | **POST** /pretrained/ocr/ocr | 
*OCRApi* | [**ocrInvoice**](docs/Api/OCRApi.md#ocrinvoice) | **POST** /pretrained/ocr/ocr_invoice | 
*PipelinesApi* | [**pipelines**](docs/Api/PipelinesApi.md#pipelines) | **POST** /pipelines | 
*SpeechApi* | [**asyncSpeechToText**](docs/Api/SpeechApi.md#asyncspeechtotext) | **POST** /pretrained/audio/speech_recognition_async | 
*SpeechApi* | [**asyncSpeechToText_0**](docs/Api/SpeechApi.md#asyncspeechtotext_0) | **GET** /pretrained/audio/speech_recognition_async/{job_id} | 
*SpeechApi* | [**speechToText**](docs/Api/SpeechApi.md#speechtotext) | **POST** /pretrained/audio/speech_to_text | 
*SpeechApi* | [**textToSpeech**](docs/Api/SpeechApi.md#texttospeech) | **POST** /pretrained/audio/text_to_speech | 
*TextApi* | [**keywordExtraction**](docs/Api/TextApi.md#keywordextraction) | **POST** /pretrained/text/keyword_extraction | 
*TextApi* | [**namedEntityRecognition**](docs/Api/TextApi.md#namedentityrecognition) | **POST** /pretrained/text/named_entity_recognition | 
*TextApi* | [**sentimentAnalysis**](docs/Api/TextApi.md#sentimentanalysis) | **POST** /pretrained/text/sentiment_analysis | 
*TextApi* | [**syntaxAnalysis**](docs/Api/TextApi.md#syntaxanalysis) | **POST** /pretrained/text/syntax_analysis | 
*TranslationApi* | [**automaticTranslation**](docs/Api/TranslationApi.md#automatictranslation) | **POST** /pretrained/translation/automatic_translation | 
*TranslationApi* | [**languageDetection**](docs/Api/TranslationApi.md#languagedetection) | **POST** /pretrained/translation/language_detection | 
*VisionApi* | [**explicitContentDetection**](docs/Api/VisionApi.md#explicitcontentdetection) | **POST** /pretrained/vision/explicit_content_detection | 
*VisionApi* | [**faceDetection**](docs/Api/VisionApi.md#facedetection) | **POST** /pretrained/vision/face_detection | 
*VisionApi* | [**objectDetection**](docs/Api/VisionApi.md#objectdetection) | **POST** /pretrained/vision/object_detection | 


## Documentation For Authorization


## Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author

contact@edenai.co


