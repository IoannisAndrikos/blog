<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('posts')->insert([
            'category_id' => 1,
            'slug' => 'My-First-post',
            'title' => 'My First post',
            'excerpt' => 'Excerpt of the first post',
            'body' => 'Ομάδες Φυσικών Προσώπων ή μεμονωμένα Φυσικά Πρόσωπα που αναλαμβάνουν, μετά από σχετική Απόφαση του Φορέα Υλοποίησης, τη διερεύνηση/ έλεγχο μεμονωμένων υποθέσεων Δικαιούχων ή Προμηθευτών που δεν είναι δυνατό να επιβεβαιωθούν ή διασταυρωθούν πλήρως με ηλεκτρονικά μέσα και απαιτούν έλεγχο δικαιολογητικών ή άλλες εστιασμένες ενέργειες ',
            'created_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
            'updated_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
            'published_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),

        ]);

        DB::table('posts')->insert([
            'category_id' => 2,
            'slug' => 'My-Second-post',
            'title' => 'My Second post',
            'excerpt' => 'Excerpt of the second post',
            'body' => 'Ομάδες Φυσικών Προσώπων ή μεμονωμένα Φυσικά Πρόσωπα που αναλαμβάνουν, μετά από σχετική Απόφαση του Φορέα Υλοποίησης, τη διερεύνηση/ έλεγχο μεμονωμένων υποθέσεων Δικαιούχων ή Προμηθευτών που δεν είναι δυνατό να επιβεβαιωθούν ή διασταυρωθούν πλήρως με ηλεκτρονικά μέσα και απαιτούν έλεγχο δικαιολογητικών ή άλλες εστιασμένες ενέργειες ',
            'created_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
            'updated_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
            'published_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),

        ]);

        DB::table('posts')->insert([
            'category_id' => 3,
            'slug' => 'My-Third-post',
            'title' => 'My Third post',
            'excerpt' => 'Excerpt of the third post',
            'body' => 'Ομάδες Φυσικών Προσώπων ή μεμονωμένα Φυσικά Πρόσωπα που αναλαμβάνουν, μετά από σχετική Απόφαση του Φορέα Υλοποίησης, τη διερεύνηση/ έλεγχο μεμονωμένων υποθέσεων Δικαιούχων ή Προμηθευτών που δεν είναι δυνατό να επιβεβαιωθούν ή διασταυρωθούν πλήρως με ηλεκτρονικά μέσα και απαιτούν έλεγχο δικαιολογητικών ή άλλες εστιασμένες ενέργειες ',
            'created_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
            'updated_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
            'published_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
        ]);

        DB::table('posts')->insert([
            'category_id' => 2,
            'slug' => 'My-Fourth-post',
            'title' => 'My Fourth post',
            'excerpt' => 'Excerpt of the fourth post',
            'body' => 'Ομάδες Φυσικών Προσώπων ή μεμονωμένα Φυσικά Πρόσωπα που αναλαμβάνουν, μετά από σχετική Απόφαση του Φορέα Υλοποίησης, τη διερεύνηση/ έλεγχο μεμονωμένων υποθέσεων Δικαιούχων ή Προμηθευτών που δεν είναι δυνατό να επιβεβαιωθούν ή διασταυρωθούν πλήρως με ηλεκτρονικά μέσα και απαιτούν έλεγχο δικαιολογητικών ή άλλες εστιασμένες ενέργειες ',
            'created_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
            'updated_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
            'published_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
        ]);
    }
}
