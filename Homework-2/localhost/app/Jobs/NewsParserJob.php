<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Orchestra\Parser\Xml\Facade as XmlParser;

class NewsParserJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $source;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($source)
    {
        $this->source = $source;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $xml = XmlParser::load($this->source);

        $data = $xml->parse([
            'channel_title' => ['uses' => 'channel.title'],
            'chanel_description' => ['uses' => 'channel.description'],
            'items' => ['uses' => 'channel.item[title,description,category]'],
        ]);

       dump($this->source);
    }
}
