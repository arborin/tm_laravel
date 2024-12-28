<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ExportUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:export-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filename = $this->argument('filename');

        // Retrieve all users
        $users = User::all();

        // Check if users exist
        if ($users->isEmpty()) {
            $this->error('No users found to export.');
            return Command::FAILURE;
        }

        // Create CSV headers
        $csvData = [];
        $csvData[] = ['ID', 'Name', 'Email', 'Created At', 'Updated At'];

        // Add user data to CSV
        foreach ($users as $user) {
            $csvData[] = [
                $user->id,
                $user->name,
                $user->email,
                $user->created_at,
                $user->updated_at,
            ];
        }

        // Convert array to CSV string
        $csvString = implode("\n", array_map(fn($row) => implode(',', $row), $csvData));

        // Save to file in storage/app
        Storage::put($filename, $csvString);

        // Inform user of success
        $this->info("Users exported successfully to storage/app/{$filename}");

        return Command::SUCCESS;
    }
}
