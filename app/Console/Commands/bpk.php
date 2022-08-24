<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte;
use Config;
use App\Models\DataBpk;

class bpk extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bpk';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $status = true;
        $this->info('Start');
        $no=1;
        while ($status) {
            $crawler = Goutte::request('GET', 'https://peraturan.bpk.go.id/Home/Glosarium?page='.$no);
            $crawler->filter('tbody')->each(function ($node,$status) {
                $data = $node->filter('tr')->each(function ($node,$status)  {                
                    $data = $node->filter('td')->count();
                    if($data==3){
                        try {
                            $DataBpk = new \App\Models\DataBpk();
                            $DataBpk->no = $node->filter('td')->eq(0)->text();
                            $DataBpk->istilah = $node->filter('td')->eq(1)->text();
                            $DataBpk->penjelasan = $node->filter('td')->eq(2)->text();
                            $DataBpk->save();
                        } catch (\Throwable $th) {
                            //throw $th;
                            $this->info($th->getmessage());
                        }
                    }else {
                        $status = false;
                    }
                    $this->info($node->text());
                });
            });   
            $no++;
        }
        $this->info('End');
    }
}
