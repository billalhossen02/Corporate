<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Blog::factory(6)->create();

        // Blog::create([
        //     'title' =>   'How Westerra Prioritized Digital Transformation in the Face of Disruption',
        //     'header1' => 'How Westerra Prioritized Digital Transformation in the Face of Disruption',
        //     'header2' => 'Disruption came to every organization in 2020, but some were able to bounce back faster than others. Learn how
        //                 Westerra Credit Union
        //                 was able to put its IT modernization plans on hold while dealing with disruption and then pick them right back up
        //                 again just a few
        //                 months later.',
        //     'tags'   => 'Westerra, Credit, Bank, Digital Transformation',
        //     'description' =>     'Of course, Groves and the Westerra team aren’t stopping here ─ there’s always another project on the horizon.
        //     “Workspace ONE I think is going to take a lot a lot of time this year,” said Groves. “It has a lot of features and
        //     the idea is really to continue to leverage what we already have because we already have all the tools we need, which
        //     is a great spot to be in.”
        
        //     <br> <br>
        
        //     The team wants to explore some additional work around:
        
        //     <br> <br>
        
        //     Multi-factor authentication
        //     Identity and access management
        //     Employee onboarding and offboarding automation
        //     “We’re not planning any major new transformations. Now we’re focused on using what we have and frankly, kind of
        //     seeing where things land as things reopen and businesses respond. I think we’re waiting to see what that looks
        //     like.”
        
        //     <br> <br>
        
        //     For Westerra Credit Union, digital transformation wasn’t something to be managed overnight, but rather a goal to
        //     achieve in due time. In 2018, the company began to take a good look at where it was going as a company and how it
        //     might differentiate from other banking institutions. Technology was a big driving factor for the members so Westerra
        //     started exploring how it could deliver a modern technology experience.
        
        //     <br> <br>
        
        //     Dan Groves, Westerra’s VP of IT, said this desire for a modern IT experience was what influenced the decision to
        //     invest in IT modernization and improve the employee experience:
        
        //     <br> <br>
        
        //     “We had to look at how we could do things differently, but still maintain proper controls, security, compliance and
        //     regulatory needs. All of that had to be balanced with our users’ ability to work. That’s been our biggest
        //     challenge.”
        
        //     <br> <br>'
        // ]);

        // Blog::create([
        //     'title' =>   'Why NGen IT for Microsoft Cloud?',
        //     'header1' => 'Why NGen IT for Microsoft Cloud?',
        //     'header2' => 'How a major grocery chain used thermal cameras and Insight Connected Platform™ to protect the health of their essential workers',
        //     'tags'   => 'NGenIT, Microsoft Cloud, IT, Digital Transformation',
        //     'description' =>     'Harris Teeter, a wholly owned subsidiary of Kroger, is a regional U.S. grocery chain headquartered in North Carolina with more than 230 locations along the East Coast. In addition to its retail stores and in-store pharmacies, Harris Teeter operates 14 fuel centers and several distribution centers. 

        //     The organization prides itself on providing a safe, inclusive environment for associates and a friendly, convenient shopping experience for customers.
            
        //     In 2020, the COVID-19 pandemic and recommendations from the Centers for Disease Control and Prevention (CDC) created new challenges for essential operations. Committed to providing the safest possible environment for staff and customers, Harris Teeter began looking for ways to better protect the health of essential workers while continuing to serve its communities. 
            
        //     Beyond implementing social distancing policies and mask requirements, Harris Teeter also hired nursing staff at each of its distribution centers to scan employee temperatures upon arrival. But while this was an important first step toward providing a safer environment for associates, the process was slow, costly and subject to human error.
            
        //     Leaders at Harris Teeter wanted a more effective, automated way to detect potential symptoms and help prevent the spread of illness in the workplace.'
        // ]);
    }
}
