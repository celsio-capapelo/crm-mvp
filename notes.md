////////////////////////////////////////////////////////
// Boilerplate Code
////////////////////////////////////////////////////////
php artisan make:model Purpose -mcf
php artisan make:model Stage -mcf
php artisan make:model Company -mcf
php artisan make:model Contact -mcf
php artisan make:model ContactDeal -mcf
php artisan make:model Deal -mcf
php artisan make:model Follower -mcf
php artisan make:model Pipeline -mcf
php artisan make:model Profile -mcf

php artisan make:controller PipelineDealController

// Migration
$table->string('name');
$table->foreignId('user_id')->constrained();
$table->primary(['contact_id', 'deal_id']);
$table->foreignId('deal_id')->constrained('deals');
$table->foreignId('contact_id')->constrained('contacts');
$table->boolean('is_primary')->default(false);
$table->dateTime('created_at', $precision = 0);
$table->text('description');

// Models
protected $guarded = [];

protected $table = 'contact_deal';

public function company() {
  return $this->belongsTo(Company::class);
}

public function deals() {
  return $this->belongsToMany(Company::class)->withPivot('is_primary');
}

public function contacts()
{
    return $this->belongsToMany(Contact::class)->withPivot('is_primary');
}

public function primaryContact()
{
    return $this->belongsToMany(Contact::class)->withPivot('is_primary')->wherePivot('is_primary', 1);
}

public function owner()
{
    return $this->belongsToMany(User::class, 'followers')->withPivot('is_owner')->wherePivot('is_owner', 1);
}

public function deals() {
    return $this->hasMany(Deal::class);
}

// Factory
'name' => fake()->company(),
'address' => fake()->address(),
'phone_number' => fake()->phoneNumber(),
'website' => fake()->word() . ".com", 
'deal_id' => fake()->numberBetween(1, 5),
'email' => fake()->email(),
title' => fake()->sentence(5),














////////////////////////////////////////////////////////
// Database Seeding
////////////////////////////////////////////////////////
Tables sem link a outras 
Users
Purpose 
Stages
Companies
Contacts

Tabelas com links
contact_deal
deals
followers
pipelines
profiles

// Scenario for start implements basics functionalities
Create 4 users
Create 15 deals for user_id 1
3 deals for each stage
For each deal, the remaining users will be followres
1 company for each deal
3 contact for each company
Each deal has 3 contacts and one of them is the owner


////////////////////////////////////////////////////////
// Implementation

php artisan migrate:fresh
php artisan tinker
php artisan migrate:rollback --path=database/migrations/2023_05_09_131849_create_activity_deals_table.php
php artisan migrate --path=database/migrations/2023_05_09_131849_create_activity_deals_table.php


// Inital data
App\Models\Purpose::create(['name' => 'Sales']);
App\Models\Purpose::create(['name' => 'Prospect']);

App\Models\Stage::create(['name' => 'New']);
App\Models\Stage::create(['name' => 'Contact Made']);
App\Models\Stage::create(['name' => 'Needs Assessment']);
App\Models\Stage::create(['name' => 'Proposal']);
App\Models\Stage::create(['name' => 'Negotiation']);
App\Models\Stage::create(['name' => 'Closed Won']);
App\Models\Stage::create(['name' => 'Closed Lost']);
App\Models\Stage::create(['name' => 'Disqualified']);
App\Models\Stage::create(['name' => 'Lead']);
App\Models\Stage::create(['name' => 'Qualification']);
App\Models\Stage::create(['name' => 'On Hold']);

App\Models\Activity::create(['name' => 'Make a Call']);
App\Models\Activity::create(['name' => 'Send an Email']);
App\Models\Activity::create(['name' => 'Schedule a meeting']);




// Users
// A user with a pipeline
App\Models\User::factory()->has(App\Models\Pipeline::factory())->create();

// Other 3 users
App\Models\User::factory()->count(3)->create();

// 15 companies each with 3 contacts
App\Models\Company::factory()->count(15)->has(App\Models\Contact::factory()->count(3))->create();

// 15 deals for user_id 1, 3 deals for each stage
App\Models\Deal::factory(['company_id' => 1, 'pipeline_id' => 1, 'stage_id' => 9])->create();
App\Models\Deal::factory(['company_id' => 2, 'pipeline_id' => 1, 'stage_id' => 9])->create();
App\Models\Deal::factory(['company_id' => 3, 'pipeline_id' => 1, 'stage_id' => 9])->create();
App\Models\Deal::factory(['company_id' => 4, 'pipeline_id' => 1, 'stage_id' => 3])->create();
App\Models\Deal::factory(['company_id' => 5, 'pipeline_id' => 1, 'stage_id' => 3])->create();
App\Models\Deal::factory(['company_id' => 6, 'pipeline_id' => 1, 'stage_id' => 3])->create();
App\Models\Deal::factory(['company_id' => 7, 'pipeline_id' => 1, 'stage_id' => 4])->create();
App\Models\Deal::factory(['company_id' => 8, 'pipeline_id' => 1, 'stage_id' => 4])->create();
App\Models\Deal::factory(['company_id' => 9, 'pipeline_id' => 1, 'stage_id' => 4])->create();
App\Models\Deal::factory(['company_id' => 10, 'pipeline_id' => 1, 'stage_id' => 5])->create();
App\Models\Deal::factory(['company_id' => 11, 'pipeline_id' => 1, 'stage_id' => 5])->create();
App\Models\Deal::factory(['company_id' => 12, 'pipeline_id' => 1, 'stage_id' => 5])->create();
App\Models\Deal::factory(['company_id' => 13, 'pipeline_id' => 1, 'stage_id' => 6])->create();
App\Models\Deal::factory(['company_id' => 14, 'pipeline_id' => 1, 'stage_id' => 6])->create();
App\Models\Deal::factory(['company_id' => 15, 'pipeline_id' => 1, 'stage_id' => 6])->create();

//For each deal, the remaining users will be followres
App\Models\Follower::create(['deal_id' => 1, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 1, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 1, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 1, 'user_id' => 4, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 2, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 2, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 2, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 2, 'user_id' => 4, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 3, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 3, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 3, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 3, 'user_id' => 4, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 4, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 4, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 4, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 4, 'user_id' => 4, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 5, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 5, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 5, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 5, 'user_id' => 4, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 6, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 6, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 6, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 6, 'user_id' => 4, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 7, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 7, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 7, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 7, 'user_id' => 4, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 8, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 8, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 8, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 8, 'user_id' => 4, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 9, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 9, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 9, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 9, 'user_id' => 4, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 10, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 10, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 10, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 10, 'user_id' => 4, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 11, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 11, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 11, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 11, 'user_id' => 4, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 12, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 12, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 12, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 12, 'user_id' => 4, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 13, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 13, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 13, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 13, 'user_id' => 4, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 14, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 14, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 14, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 14, 'user_id' => 4, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 15, 'user_id' => 1, 'is_owner' => true]);
App\Models\Follower::create(['deal_id' => 15, 'user_id' => 2, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 15, 'user_id' => 3, 'is_owner' => false]);
App\Models\Follower::create(['deal_id' => 15, 'user_id' => 4, 'is_owner' => false]);

// Each deal has 3 contacts and one of them is the owner
App\Models\ContactDeal::create(['deal_id' => 1, 'contact_id' => 1, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 1, 'contact_id' => 2, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 1, 'contact_id' => 3, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 2, 'contact_id' => 4, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 2, 'contact_id' => 5, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 2, 'contact_id' => 6, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 3, 'contact_id' => 7, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 3, 'contact_id' => 8, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 3, 'contact_id' => 9, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 4, 'contact_id' => 10, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 4, 'contact_id' => 11, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 4, 'contact_id' => 12, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 5, 'contact_id' => 13, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 5, 'contact_id' => 14, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 5, 'contact_id' => 15, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 6, 'contact_id' => 16, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 6, 'contact_id' => 17, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 6, 'contact_id' => 18, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 7, 'contact_id' => 19, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 7, 'contact_id' => 20, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 7, 'contact_id' => 21, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 8, 'contact_id' => 22, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 8, 'contact_id' => 23, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 8, 'contact_id' => 24, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 9, 'contact_id' => 25, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 9, 'contact_id' => 26, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 9, 'contact_id' => 27, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 10, 'contact_id' => 28, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 10, 'contact_id' => 29, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 10, 'contact_id' => 30, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 11, 'contact_id' => 31, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 11, 'contact_id' => 32, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 11, 'contact_id' => 33, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 12, 'contact_id' => 34, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 12, 'contact_id' => 35, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 12, 'contact_id' => 36, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 13, 'contact_id' => 37, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 13, 'contact_id' => 38, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 13, 'contact_id' => 39, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 14, 'contact_id' => 40, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 14, 'contact_id' => 41, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 14, 'contact_id' => 42, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 15, 'contact_id' => 43, 'is_primary' => true]);
App\Models\ContactDeal::create(['deal_id' => 15, 'contact_id' => 44, 'is_primary' => false]);
App\Models\ContactDeal::create(['deal_id' => 15, 'contact_id' => 45, 'is_primary' => false]);


// Each group of 5 deals, one no activity, one delayed, two today and one future
use Carbon\Carbon;
App\Models\ActivityDeal::create(['deal_id' => 2, 'activity_id' => 1, 'schedule' => Carbon::yesterday()]);
App\Models\ActivityDeal::create(['deal_id' => 3, 'activity_id' => 2, 'schedule' => Carbon::now()]);
App\Models\ActivityDeal::create(['deal_id' => 4, 'activity_id' => 3, 'schedule' => Carbon::today()->startOfDay()]);
App\Models\ActivityDeal::create(['deal_id' => 5, 'activity_id' => 3, 'schedule' => Carbon::today()->addDays(2)]);
App\Models\ActivityDeal::create(['deal_id' => 5, 'activity_id' => 1, 'schedule' => Carbon::today()->addDays(2)]);

App\Models\ActivityDeal::create(['deal_id' => 7, 'activity_id' => 1, 'schedule' => Carbon::yesterday()]);
App\Models\ActivityDeal::create(['deal_id' => 8, 'activity_id' => 2, 'schedule' => Carbon::now()]);
App\Models\ActivityDeal::create(['deal_id' => 9, 'activity_id' => 3, 'schedule' => Carbon::today()->startOfDay()]);
App\Models\ActivityDeal::create(['deal_id' => 10, 'activity_id' => 3, 'schedule' => Carbon::today()->addDays(1)]);
App\Models\ActivityDeal::create(['deal_id' => 10, 'activity_id' => 2, 'schedule' => Carbon::today()->addDays(1)]);

App\Models\ActivityDeal::create(['deal_id' => 12, 'activity_id' => 1, 'schedule' => Carbon::yesterday()]);
App\Models\ActivityDeal::create(['deal_id' => 13, 'activity_id' => 2, 'schedule' => Carbon::now()]);
App\Models\ActivityDeal::create(['deal_id' => 14, 'activity_id' => 3, 'schedule' => Carbon::today()->startOfDay()]);
App\Models\ActivityDeal::create(['deal_id' => 15, 'activity_id' => 3, 'schedule' => Carbon::today()->addDays(3)]);
App\Models\ActivityDeal::create(['deal_id' => 15, 'activity_id' => 2, 'schedule' => Carbon::today()->addDays(3)]);


// SEND TO GITHUB
git add .
git commit -m 'Implemented updated pipeline feature'
git push -u origin

// VERIFY GITHUB
git log --oneline


