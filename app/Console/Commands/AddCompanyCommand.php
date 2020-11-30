<?php

namespace App\Console\Commands;

use App\Models\Company;
use Illuminate\Console\Command;

class AddCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:company';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a new company';

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
        $this->newLine();
        $this->comment('-------------------------------------------------------------------------');

        $name = $this->ask('Company name');
        $phone = $this->ask('Company phone');

        if ($this->confirm('Sure for add to database ' . $name . '?')) {
            $company = Company::create([
                'name' => $name,
                'phone' => $phone,
            ]);
            return $this->info('Added: ' . $company->name);
        }

        $this->warn('Nothing was added.');
    }
}
