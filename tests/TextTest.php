<?php
    require_once 'mainTest.php';

    use EdenAI\Text;

    class TextTest extends MainTest
    {
        // protected $key = "API_KEY";

        // public function __construct()
        // {
        //     $this->key = parent::getAPIKey();
        // }

        public function testKeywordExtraction(): void
        {
            $text = new Text($this->APIkey);
            $analyse = "Text analysis is really the process of distilling information and meaning from text. For example, this can be analyzing text Unexpected HTTP status on a retailer's website or analysing documentation to understand its purpose.";
            $output = $text->keywordExtraction($analyse, ['really', 'information'], ['amazon']);
            $this->assertStringContainsString('result', $output);
        }

        public function testNamedEntityRecognition(): void
        {
            $text = new Text($this->APIkey);
            $analyse = "Text analysis is really the process of distilling information and meaning from text. For example, this can be analyzing text written Unexpected HTTP status website or analysing documentation to understand its purpose.";
            $output = $text->namedEntityRecognition($analyse, ['really', 'information'], ['amazon']);
            $this->assertStringContainsString('result', $output);
        }

        public function testSentimentAnalysis(): void
        {
            $text = new Text($this->APIkey);
            $analyse = "Text analysis is really the process of distilling information and meaning from text. For example, this can be analyzing text written Unexpected HTTP status website or analysing documentation to understand its purpose.";
            $output = $text->sentimentAnalysis($analyse);
            $this->assertStringContainsString('result', $output);
        }

        public function testSyntaxAnalysis(): void
        {
            $text = new Text($this->APIkey);
            $analyse = "Text analysis is really the process of distilling information and meaning from text. For example, this can be analyzing text written Unexpected HTTP status website or analysing documentation to understand its purpose.";
            $output = $text->syntaxAnalysis($analyse);
            $this->assertStringContainsString('result', $output);
        }
    }
?>
